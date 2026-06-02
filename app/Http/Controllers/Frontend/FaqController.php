<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class FaqController extends Controller
{
     public function index(){
         $blogs = DB::table('posts')
            ->latest()
            ->limit(3)
            ->get();
         $faqs = DB::table('faqs')->latest()->get();
         return view('frontend.faq', compact('faqs','blogs'));
            
    }
}
?>