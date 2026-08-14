<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $data['result'] = DB::table('categories')->latest()->paginate(10);
        return view('admin.blog.categories', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $slug = Str::slug($request->input('name'));
        $originalSlug = $slug;
        $count = 1;
        while (DB::table('categories')->where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        DB::table('categories')->insert([
            'name' => $request->input('name'),
            'slug' => $slug,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('category.index')->with('success', 'Category added successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $slug = Str::slug($request->input('name'));
        $originalSlug = $slug;
        $count = 1;
        while (DB::table('categories')->where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        DB::table('categories')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'slug' => $slug,
                'updated_at' => now(),
            ]);

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully!');
    }
}

