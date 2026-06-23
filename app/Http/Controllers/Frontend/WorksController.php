<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WorksController extends Controller
{
 public function index(){

            $slug = 'works';
       

        $headerdata = DB::table('pages')->where('slug', $slug)->first();

return view('frontend.works-default',compact('headerdata'));
    }
}
?>