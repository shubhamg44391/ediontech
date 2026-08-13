<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InsightsController extends Controller
{
    public function index()
    {
        $blogs = DB::table('posts')
            ->get();

          
            $slug = 'insights';
        

        $headerdata = DB::table('pages')->where('slug', $slug)->first();

        return view('frontend.blog-creative', compact('blogs','headerdata'));
    }
    public function blogDetails(Request $request, $slug)
    {

        $data = DB::table('posts')->where('slug', $slug)
            ->first();
           
        return view('frontend.blog-details',['blog'=>$data]);
    }
}


?>