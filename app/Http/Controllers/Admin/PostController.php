<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $data['result'] = DB::table('posts')
            ->latest()
            ->paginate(10);
        $data['categories'] = DB::table('categories')->get();

        return view('admin.blog.post', $data);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'slug' => 'nullable|string|max:255',
                'category_id' => 'nullable|integer',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'image_alt' => 'nullable|string|max:255',
                'description' => 'required',
                'meta_title' => 'nullable|string|max:255',
                'meta_description' => 'nullable|string|max:500',
                'meta_keywords' => 'nullable|string|max:500',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check the fields.');
        }

        $data = [];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $imagePath = $file->store('header', 'public');
                $data['image'] = $imagePath;
            } else {
                return redirect()->back()->with('error', 'File upload failed.');
            }
        }

        // Generate unique slug from custom slug or title
        $rawSlug = $request->filled('slug') ? $request->input('slug') : $request->input('title');
        $slug = \Illuminate\Support\Str::slug($rawSlug);
        $originalSlug = $slug;
        $count = 1;

        while (DB::table('posts')->where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        // Insert data into the database
        DB::table('posts')->insert([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'slug' => $slug,
            'image' => $data['image'] ?? null,
            'image_alt' => $request->input('image_alt'),
            'description' => $request->input('description'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('post.index')->with('success', 'Post added successfully!');
    }

    public function edit($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('admin.blog.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'image_alt' => 'nullable|string|max:255',
            'description' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
        ]);

        $rawSlug = $request->filled('slug') ? $request->input('slug') : $request->input('title');
        $slug = \Illuminate\Support\Str::slug($rawSlug);
        $originalSlug = $slug;
        $count = 1;

        while (DB::table('posts')->where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        $data = [
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
            'slug' => $slug,
            'image_alt' => $request->input('image_alt'),
            'description' => $request->input('description'),
            'meta_title' => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords' => $request->input('meta_keywords'),
            'updated_at' => now(),
        ];

        // Handle the uploaded file if present
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                // Store the file and get the path
                $imagePath = $file->store('header', 'public');
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
