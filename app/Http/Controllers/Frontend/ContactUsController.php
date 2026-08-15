<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        $data['source'] = 'Contact Us';
        $data['created_at'] = now();
        $data['updated_at'] = now();
        
        DB::table('leads')->insert($data);

        $header = DB::table('headers')->first();
        $adminEmail = $header && !empty($header->website_email) ? $header->website_email : env('MAIL_FROM_ADDRESS', 'ediontech@ediontech.com');
        
        try {
            Mail::send('emails.contact_admin', ['data' => $data], function($message) use ($adminEmail) {
                $message->to($adminEmail)->subject('New Contact Us Submission');
            });
        } catch (\Exception $e) {
            // Optional: log error if email fails, but do not block form submission
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
