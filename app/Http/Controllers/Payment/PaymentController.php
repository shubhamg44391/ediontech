<?php

namespace App\Http\Controllers\Payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function submitPaymentForm(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1'
        ], [
            'amount.required' => 'Amount is required'
        ]);
    
        $amount = 1;
    
        $merchantId = 'SU2502041821495726752023';
        $apiKey = '7ef12104-ab47-43c4-b823-91db9cd3b509';
        $salt_index = 1;
        $redirectUrl = route('confirm');
        $order_id = uniqid();
    
        $transaction_data = [
            'merchantId' => $merchantId,
            'merchantTransactionId' => $order_id,
            'merchantUserId' => $order_id,
            'amount' => $amount * 100,
            'redirectUrl' => $redirectUrl,
            'redirectMode' => 'POST',
            'callbackUrl' => $redirectUrl,
            'paymentInstrument' => ['type' => 'PAY_PAGE']
        ];
    
        $encoded_data = base64_encode(json_encode($transaction_data, JSON_UNESCAPED_SLASHES));
    
        // Correct hash calculation
        $payload_string = $encoded_data . "/pg/v1/pay" . $apiKey;
        $sha256_hash = hash("sha256", $payload_string);
        $x_verify = $sha256_hash . "###" . $salt_index;
    
        $request_payload = json_encode(['request' => $encoded_data]);
    
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.phonepe.com/apis/hermes/pg/v1/pay",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $request_payload,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                "X-VERIFY: " . $x_verify,
                "X-MERCHANT-ID: " . $merchantId,
                "accept: application/json"
            ],
            CURLOPT_VERBOSE => true,
            CURLOPT_STDERR => fopen(storage_path('logs/curl_debug.log'), 'w+')
        ]);
        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $curl_error = curl_error($curl);
        curl_close($curl);
        
        if ($response === false) {
            Log::error("cURL Error: " . $curl_error);
            return back()->withErrors(['error' => 'Payment request failed: ' . $curl_error]);
        }
        
        $res = json_decode($response, true);
        Log::info('PhonePe Response:', ['http_code' => $httpCode, 'response' => $res]);
    
        if ($httpCode == 200 && isset($res['code']) && $res['code'] === 'PAYMENT_INITIATED') {
            Payment::create([
                'name' => $request->fullName,
                'package_name' => $request->package_name,
                'amount' => $request->amount,
                'email' => $request->email,
                'phone' => $request->phoneNumber,
                'city' => $request->city,
                'postalCode' => $request->postalCode,
                'country' => $request->country,
                'transaction_id' => $order_id,
                'payment_status' => 'PAYMENT_PENDING',
                'response_msg' => json_encode($res),
                'providerReferenceId' => '',
                'merchantOrderId' => '',
                'checksum' => ''
            ]);
    
            return redirect()->away($res['data']['instrumentResponse']['redirectInfo']['url']);
        } else {
            Log::error('PhonePe Payment Error: ' . json_encode($res));
            return back()->withErrors(['error' => 'Payment failed. Please try again.']);
        }
    }
    
    public function confirmPayment(Request $request)
    {
        if ($request->code === 'PAYMENT_SUCCESS') {
            $transactionId = $request->transactionId;
            
            Payment::where('transaction_id', $transactionId)->update([
                'providerReferenceId' => $request->providerReferenceId,
                'checksum' => $request->checksum,
                'merchantOrderId' => $request->merchantOrderId ?? '',
                'payment_status' => 'PAYMENT_SUCCESS'
            ]);
            
            $amount = Payment::where('transaction_id', $transactionId)->first();
            
            return view('confirm_payment', [
                'amount' => $amount->amount,
                'providerReferenceId' => $request->providerReferenceId,
                'transactionId' => $transactionId
            ]);
        }

        Log::error('Payment failed with code: ' . $request->code);
        return back()->withErrors(['error' => 'Payment failed. Try again.']);
    }
}
