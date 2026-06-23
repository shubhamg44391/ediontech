<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PrivacyPolicyController extends Controller
{
    public function index(){

      
            $slug = 'privacy-policy';
        

        $headerdata = DB::table('pages')->where('slug', $slug)->first();

        return view('frontend.privacy-policy',compact('headerdata'));
    }
}
