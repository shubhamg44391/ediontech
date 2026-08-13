<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{


    public function index()
    {
        $blogs = DB::table('posts')
            ->latest()
            ->limit(3)
            ->get();

       
            $slug = 'about';
      

        $headerdata = DB::table('pages')->where('slug', $slug)->first();
     
        return view('frontend.about-us', compact('blogs','headerdata'));
    }
}
