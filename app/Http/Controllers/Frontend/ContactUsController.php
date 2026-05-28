<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function submit(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'number' => 'required|string|max:15',
            'company' => 'nullable|string',
            'message' => 'nullable|string',
            'captcha' => 'required|captcha',
        ]);

        $data = $request->only(['name', 'email', 'number', 'company', 'message', 'budget']);

        DB::table('leads')->insert($data);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
?>