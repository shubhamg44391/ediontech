<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index()
{
    $data['result'] = DB::table('authors')->paginate(10);
    return view('admin.blog.author', $data);
}


public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
    ]);

    // Handle the uploaded file
    if ($request->hasFile('image')) {
        $file = $request->file('image');
    
        if ($file->isValid()) {
            $imagePath = $file->store('public/header'); // This should store the file in storage/app/public/header
            $data['image'] = $imagePath;
        } else {
            // Handle the file upload error
            return redirect()->back()->with('error', 'File upload failed.');
        }
    }

    // Insert data into the database
    DB::table('authors')->insert([
        'name' => $request->input('name'),
        'image' => $data['image']
    ]);

    // Redirect to a route with success message
    return redirect()->route('author.index')->with('success', 'Author added successfully!');
}


public function edit($id)
{
    $banner = DB::table('banners')->where('id', $id)->first();
    return view('admin.home.banner', compact('banner'));
}

public function update(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image if present
    ]);

    // Prepare the data to update
    $data = [
        'name' => $request->input('name'),
    ];

    // Handle the uploaded file if present
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        
        if ($file->isValid()) {
            // Store the file and get the path
            $imagePath = $file->store('public/header');
            $data['image'] = $imagePath;
        } else {
            // Handle the file upload error
            return redirect()->back()->with('error', 'File upload failed.');
        }
    }

    // Update the database record
    DB::table('authors')
        ->where('id', $id)
        ->update($data);

    // Redirect with success message
    return redirect()->route('author.index')
        ->with('success', 'Author updated successfully.');
}


public function destroy($id)
{
    // Delete the banner
    DB::table('authors')->where('id', $id)->delete();
    return redirect()->route('author.index');
}
}
