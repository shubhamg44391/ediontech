<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeoOrderController extends Controller
{
    /**
     * Display a listing of the SEO orders/transactions.
     */
    public function index(Request $request)
    {
        $status = $request->input('status');

        $query = DB::table('seo_orders');

        if ($status && in_array($status, ['pending', 'paid', 'failed'])) {
            $query->where('status', $status);
        }

        $orders = $query->orderBy('created_at', 'desc')
            ->paginate(10)
            ->appends(['status' => $status]);

        return view('admin.seo_orders', compact('orders', 'status'));
    }

    /**
     * Remove the specified order from storage.
     */
    public function destroy($id)
    {
        DB::table('seo_orders')->where('id', $id)->delete();

        return redirect()->route('admin.seo-orders.index')->with('success', 'Order transaction deleted successfully.');
    }
}
