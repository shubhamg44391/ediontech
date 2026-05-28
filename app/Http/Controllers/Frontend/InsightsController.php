<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InsightsController extends Controller
{
    public function index()
    {
        $data['blogs'] = DB::table('posts')
            ->get();
        return view('frontend.blog-creative', $data);
    }
    public function blogDetails(Request $request, $slug)
    {

        $data['blogs'] = DB::table('posts')->where('slug', $slug)
            ->first();
        return view('frontend.blog-details', $data);
    }
}
?>