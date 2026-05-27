<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $data['result'] = DB::table('posts')
            ->leftJoin('authors', 'posts.author_id', '=', 'authors.id')
            ->leftJoin('categories', 'posts.category_id', '=', 'categories.id')
            ->select(
                'posts.*', 
                'authors.name as author_name', 
                'categories.name as category_name'
            )
            ->latest()
            ->paginate(10);
        
        $data['authors'] = DB::table('authors')->where('status', 1)->get();
        $data['categories'] = DB::table('categories')->where('status', 1)->get();
        
        return view('admin.blog.post', $data);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'author_id'        => 'required|exists:authors,id',
                'category_id'      => 'required|exists:categories,id',
                'title'            => 'required|string|max:255',
                'image'            => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'description'      => 'required',
                'meta_title'       => 'nullable|string|max:255',
                'meta_description' => 'nullable|string|max:500',
                'meta_keywords'    => 'nullable|string|max:500',
            ]);
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }
    
        $data = [];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $imagePath = $file->store('public/header');
                $data['image'] = $imagePath;
            } else {
                return redirect()->back()->with('error', 'File upload failed.');
            }
        }
    
        // Generate slug from title
        $slug = \Illuminate\Support\Str::slug($request->input('title'));
    
        // Insert data into the database
        DB::table('posts')->insert([
            'author_id'         => $request->input('author_id'),
            'category_id'       => $request->input('category_id'),
            'title'             => $request->input('title'),
            'slug'              => $slug,
            'image'             => $data['image'] ?? null,
            'description'       => $request->input('description'),
            'meta_title'        => $request->input('meta_title'),
            'meta_description'  => $request->input('meta_description'),
            'meta_keywords'     => $request->input('meta_keywords'),
        ]);
    
        return redirect()->route('post.index')->with('success', 'Post added successfully!');
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
            'author_id'         => 'required|exists:authors,id',
            'category_id'       => 'required|exists:categories,id',
            'title'             => 'required|string|max:255',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description'       => 'required|string',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string|max:500',
            'meta_keywords'     => 'nullable|string|max:500',
        ]);

        $data = [
            'author_id'         => $request->input('author_id'),
            'category_id'       => $request->input('category_id'),
            'title'             => $request->input('title'),
            'description'       => $request->input('description'),
            'meta_title'        => $request->input('meta_title'),
            'meta_description'  => $request->input('meta_description'),
            'meta_keywords'     => $request->input('meta_keywords'),
            'updated_at'        => now(),
        ];
    
        $slug = \Illuminate\Support\Str::slug($request->input('title'));
        $originalSlug = $slug;
        $count = 1;
    
        while (DB::table('posts')->where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }
        $data['slug'] = $slug;
    
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
        DB::table('posts')
            ->where('id', $id)
            ->update($data);
    
        // Redirect with success message
        return redirect()->route('post.index')
            ->with('success', 'Post updated successfully.');
    }
    
    public function destroy($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return redirect()->route('post.index');
    }
}