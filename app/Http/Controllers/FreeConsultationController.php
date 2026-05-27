<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreeConsultationController extends Controller
{
    public function index(){
        return view('frontend.free-consultation');
    }
}
?>