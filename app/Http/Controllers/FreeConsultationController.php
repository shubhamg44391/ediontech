<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FreeConsultationController extends Controller
{
    public function index(){
        $slug = 'consultation';
        $headerdata = DB::table('pages')->where('slug', $slug)->first();
        return view('frontend.free-consultation', compact('headerdata'));
    }
}
?>