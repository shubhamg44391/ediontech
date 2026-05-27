<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


class TermsAndConditionsController extends Controller
{
    public function index(){
        return view('frontend.terms-of-use');
    }
}

?>