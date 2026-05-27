<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HeaderController extends Controller
{
    public function index()
    {
        $header = DB::table('headers')->get();
        return view('admin.header', ['headers' => $header]);
    }

    public function store()
    {
        //
    }

    public function show()
    {
        return DB::table('headers')->get(); // Fetch header data
        // return view('home', compact('header'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'website_name' => 'required|string',
            'website_logo_light' => 'image:jpeg,png,jpg,gif.svg|max:2048', // Adjust the allowed file types and maximum size as needed
            'website_logo_dark' => 'image:jpeg,png,jpg,gif.svg|max:2048', // Adjust the allowed file types and maximum size as needed
            'website_number' => 'required|string',
            'website_address' => 'required|string',
            'website_email' => 'required|email',
        ]);
        if ($request->hasFile('website_logo')) {
            $file = $request->file('website_logo');
        
            if ($file->isValid()) {
                $imagePath = $file->store('public/header'); // This should store the file in storage/app/public/header
                $data['website_logo'] = $imagePath;
            } else {
                // Handle the file upload error
                return redirect()->back()->with('error', 'File upload failed.');
            }
        }
        

        $data = [
            'website_name' => $request->website_name,
            'website_logo_light' => $request->website_logo_light, // Adjust the allowed file types and maximum size as needed
            'website_logo_dark' => $request->website_logo_dark, // Adjust the allowed file types and maximum size as needed
            'website_number' => $request->website_number,
            'website_address' => $request->website_address,
            'website_email' => $request->website_email,
            
        ];
        

        DB::table('headers')->insert($data); // Replace 'header' with your actual table name

        return redirect()->route('header.index')
            ->with('success', 'header added successfully.');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'website_name' => 'required|string',
            'website_logo_light' => 'image:jpeg,png,jpg,gif.svg|max:2048', // Adjust the allowed file types and maximum size as needed
            'website_logo_dark' => 'image:jpeg,png,jpg,gif.svg|max:2048', // Adjust the allowed file types and maximum size as needed
            'website_number' => 'required|string',
            'website_address' => 'required|string',
            'website_email' => 'required|email',
        ]);

        $data = [
            'website_name' => $request->website_name,
            'website_logo_light' => $request->website_logo_light, // Adjust the allowed file types and maximum size as needed
            'website_logo_dark' => $request->website_logo_dark, // Adjust the allowed file types and maximum size as needed
            'website_number' => $request->website_number,
            'website_address' => $request->website_address,
            'website_email' => $request->website_email,
        ];
        if ($request->hasFile('website_logo_light')) {
            $file = $request->file('website_logo_light');
        
            if ($file->isValid()) {
                $imagePath = $file->store('public/header'); // This should store the file in storage/app/public/header
                $data['website_logo_light'] = $imagePath;
            } else {
                // Handle the file upload error
                return redirect()->back()->with('error', 'File upload failed.');
            }
        }else {
            // No new file uploaded, keep the existing 'website_logo' value
            $data['website_logo_light'] = $request->input('current_website_logo_light');
        }

        if ($request->hasFile('website_logo_dark')) {
            $file = $request->file('website_logo_dark');
        
            if ($file->isValid()) {
                $imagePath = $file->store('public/header'); // This should store the file in storage/app/public/header
                $data['website_logo_dark'] = $imagePath;
            } else {
                // Handle the file upload error
                return redirect()->back()->with('error', 'File upload failed.');
            }
        }else {
            // No new file uploaded, keep the existing 'website_logo' value
            $data['website_logo_dark'] = $request->input('current_website_logo_dark');
        }

        

        DB::table('headers')->where('id', $id)->update($data); // Replace 'header' with your actual table name

        return redirect()->route('header.index')
            ->with('success', 'header updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('headers')->where('id', $id)->delete(); // Replace 'header' with your actual table name

        return redirect()->route('admin.header')
            ->with('success', 'header deleted successfully.');
    }
}
