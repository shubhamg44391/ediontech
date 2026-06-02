<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class PricingController extends Controller
{
    public function index()
    {
         $blogs = DB::table('posts')
            ->latest()
            ->limit(3)
            ->get();
        return view('frontend.pricing', compact('blogs'));
    }
}
?>