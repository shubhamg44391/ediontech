<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function index()
    {

      
            $slug = 'contact';
     

        $headerdata = DB::table('pages')->where('slug', $slug)->first();
        return view('frontend.contact',compact('headerdata'));
    }

    public function submit(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'number' => 'required|string|max:15',
            'company' => 'nullable|string',
            'message' => 'nullable|string',
            'budget' => 'nullable|string',
            'captcha' => 'required|captcha',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
      

        $data = $request->only(['name', 'email', 'number', 'company', 'message', 'budget']);

          $data['created_at']=now();
        $data['updated_at']=now();
        
        DB::table('leads')->insert($data);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
