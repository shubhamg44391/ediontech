<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
     public function index(){
        $data['blogs'] = DB::table('posts')
            ->latest()
            ->limit(3)
            ->get();
        return view('frontend.services', $data);
    }
}
?>