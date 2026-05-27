<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


class WorksController extends Controller
{
 public function index(){
return view('frontend.works-default');
    }
}
?>