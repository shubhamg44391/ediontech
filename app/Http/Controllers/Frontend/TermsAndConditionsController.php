<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TermsAndConditionsController extends Controller
{
    public function index(){
        

            $slug = 'terms-and-condition';
        

        $headerdata = DB::table('pages')->where('slug', $slug)->first();

        return view('frontend.terms-of-use',compact('headerdata'));
    }
}

?>