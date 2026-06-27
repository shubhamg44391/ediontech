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
        $packages = DB::table('seo_packages')->get()->keyBy('name');

        return view('frontend.pricing', compact('blogs', 'headerdata', 'packages'));
    }
}
?>