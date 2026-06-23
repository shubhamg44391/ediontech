<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RefundAndCancellationPolicyController extends Controller
{
    public function index(){

    
            $slug = 'refund-and-cancellation-policy';
     

        $headerdata = DB::table('pages')->where('slug', $slug)->first();
        
        return view('frontend.refund-and-cancellation-policy',compact('headerdata'));
    }
}
?>