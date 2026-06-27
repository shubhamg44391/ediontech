<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RazorpayPaymentController extends Controller
{
    private function getCountryCode()
    {
        $ip = request()->ip();
        if ($ip === '127.0.0.1' || $ip === '::1') {
            return 'IN';
        }

        return cache()->remember('country_code_' . $ip, 60 * 24, function () use ($ip) {
            try {
                $response = Http::timeout(3)->get("http://ip-api.com/json/{$ip}");
                if ($response->successful()) {
                    return $response->json('countryCode') ?? 'IN';
                }
            } catch (\Exception $e) {
                return 'IN';
            }
            return 'IN';
        });
    }

    public function createOrder(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'confirm_email' => 'required|email|same:email',
            'whatsapp_number' => 'required|string|max:20',
            'package_name' => 'required|string',
            'package_type' => 'required|string|in:monthly,yearly',
            'package_price' => 'required|numeric|min:0',
        ]);

        $packageName = $validated['package_name'];
        $packageType = $validated['package_type'];

        // Retrieve dynamic price from database to prevent price tampering
        $package = DB::table('seo_packages')->where('name', $packageName)->first();
        if (!$package) {
            return response()->json(['error' => 'Invalid package selected.'], 400);
        }
        $priceField = ($packageType === 'yearly') ? 'yearly_price' : 'monthly_price';
        $baseAmount = floatval($package->$priceField);

        $countryCode = $this->getCountryCode();
        $currency = 'INR';

        // Mirror currency.php helper conversion logic
        if ($countryCode !== 'IN') {
            $currency = 'USD';
            $baseAmount = round($baseAmount / 83, 2);
        }

        $taxAmount = round($baseAmount * 0.18, 2);
        $totalAmount = $baseAmount + $taxAmount;

        // Razorpay expects amount in subunits (paise for INR, cents for USD)
        $amountInSubunits = intval(round($totalAmount * 100));

        // OVERRIDE FOR TESTING: Set to 100 for 1 INR (Note: Razorpay minimum is 100 paise = 1 INR)
        // $amountInSubunits = 100;

        $keyId = config('services.razorpay.key');
        $keySecret = config('services.razorpay.secret');

        if (empty($keyId) || empty($keySecret)) {
            return response()->json(['error' => 'Razorpay API credentials are not configured.'], 500);
        }

        try {
            // Generate unique receipt ID
            $receipt = 'rcpt_' . time() . '_' . rand(1000, 9999);

            // Make secure API call to Razorpay to generate order ID
            $response = Http::withOptions([
                'verify' => !app()->environment('local')
            ])
            ->withBasicAuth($keyId, $keySecret)
            ->post('https://api.razorpay.com/v1/orders', [
                'amount' => $amountInSubunits,
                'currency' => $currency,
                'receipt' => $receipt,
            ]);
            if ($response->failed()) {
                Log::error('Razorpay Order API Failed: ' . $response->body());
                return response()->json(['error' => 'Failed to create order with Razorpay.'], 500);
            }

            $orderData = $response->json();
            $razorpayOrderId = $orderData['id'];

            // Save pending order record in database
            DB::table('seo_orders')->insert([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'whatsapp_number' => $validated['whatsapp_number'],
                'package_name' => $packageName,
                'package_type' => $packageType,
                'currency' => $currency,
                'amount' => $baseAmount,
                'tax_amount' => $taxAmount,
                'total_amount' => $totalAmount,
                'razorpay_order_id' => $razorpayOrderId,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return response()->json([
                'razorpay_order_id' => $razorpayOrderId,
                'amount' => $amountInSubunits,
                'currency' => $currency,
                'key_id' => $keyId,
                'package_name' => $packageName . ' SEO Package (' . ucfirst($packageType) . ')',
                'name' => $validated['name'],
                'email' => $validated['email'],
                'whatsapp_number' => $validated['whatsapp_number'],
            ]);

        } catch (\Exception $e) {
            Log::error('Razorpay createOrder Exception: ' . $e->getMessage());
            return response()->json(['error' => 'An unexpected error occurred.'], 500);
        }
    }

    public function verifyPayment(Request $request)
    {
        $validated = $request->validate([
            'razorpay_order_id' => 'required|string',
            'razorpay_payment_id' => 'required|string',
            'razorpay_signature' => 'required|string',
        ]);

        $orderId = $validated['razorpay_order_id'];
        $paymentId = $validated['razorpay_payment_id'];
        $signature = $validated['razorpay_signature'];

        $keySecret = config('services.razorpay.secret');

        // Check if the order exists in our system
        $order = DB::table('seo_orders')->where('razorpay_order_id', $orderId)->first();
        if (!$order) {
            return response()->json(['error' => 'Order not found in our records.'], 404);
        }

        // Verify Razorpay payment signature securely using HMAC-SHA256
        $expectedSignature = hash_hmac('sha256', $orderId . '|' . $paymentId, $keySecret);

        if (hash_equals($expectedSignature, $signature)) {
            // Update order status to paid
            DB::table('seo_orders')
                ->where('razorpay_order_id', $orderId)
                ->update([
                    'razorpay_payment_id' => $paymentId,
                    'razorpay_signature' => $signature,
                    'status' => 'paid',
                    'updated_at' => now(),
                ]);

            return response()->json(['status' => 'success']);
        } else {
            // Update order status to failed
            DB::table('seo_orders')
                ->where('razorpay_order_id', $orderId)
                ->update([
                    'status' => 'failed',
                    'updated_at' => now(),
                ]);

            return response()->json(['status' => 'error', 'message' => 'Signature verification failed.'], 400);
        }
    }
}
