<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
{
    $data['result'] = DB::table('categories')->paginate(10);
    return view('admin.blog.categories', $data);
}


public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Generate a slug from the name
    $slug = Str::slug($request->input('name'));

    // Insert data into the database
    DB::table('categories')->insert([
        'name' => $request->input('name'),
        'slug' => $slug,
    ]);

    // Redirect to a route with success message
    return redirect()->route('category.index')->with('success', 'Category added successfully!');
}

public function update(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Generate a slug from the name
    $slug = Str::slug($request->input('name'));

    // Prepare the data to update
    $data = [
        'name' => $request->input('name'),
        'slug' => $slug, // Update the slug
    ];

    // Update the database record
    DB::table('categories')
        ->where('id', $id)
        ->update($data);

    // Redirect with success message
    return redirect()->route('category.index')
        ->with('success', 'Category updated successfully.');
}

public function edit($id)
{
    $banner = DB::table('banners')->where('id', $id)->first();
    return view('admin.home.banner', compact('banner'));
}

public function destroy($id)
{
    // Delete the banner
    DB::table('categories')->where('id', $id)->delete();
    return redirect()->route('category.index');
}
}
