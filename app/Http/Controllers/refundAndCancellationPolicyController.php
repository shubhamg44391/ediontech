<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class refundAndCancellationPolicyController extends Controller
{
    public function index(){
        return view('frontend.refund-and-cancellation-policy');
    }
}
?>