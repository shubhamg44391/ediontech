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


            $slug = 'pricing';
        
        $headerdata = DB::table('pages')->where('slug', $slug)->first();

        return view('frontend.pricing', compact('blogs','headerdata'));
    }
}
?>