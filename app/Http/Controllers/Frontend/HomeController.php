<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    public function index()
    {
        $blogs = DB::table('posts')
            ->latest()
            ->limit(3)
            ->get();


        $headers = DB::table('headers')->get();

       
      
            $slug = 'home';
        

        $headerdata = DB::table('pages')->where('slug', $slug)->first();

        return view('frontend.home', compact( 'headers', 'blogs', 'headerdata'));
    }
    public function blog_data()
    {
        $data['blogs'] = DB::table('posts')
            ->latest()
            ->limit(3)
            ->get();
        return view('frontend.blog_data', $data);
    }
}
