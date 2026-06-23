<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqAdminController extends Controller
{
    public function index()
    {
        $faqs = DB::table('faqs')
            ->latest()
            ->paginate(10);

                $slug = 'faq';
      

        $data = DB::table('pages')->where('slug', $slug)->first();

        return view('admin.faq.indexshow', compact('faqs','data'));
    }

    public function create()
    {
        $faqs = DB::table('faqs')
            ->latest()
            ->paginate(10);


        return view('admin.faq.createfaq', compact('faqs'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',

                'description' => 'required',


            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('faq_error', 'Validation failed. Please check the fields.');
        }

        // // Generate unique slug from title
        // $slug = \Illuminate\Support\Str::slug($request->input('title'));
        // $originalSlug = $slug;
        // $count = 1;

        // while (DB::table('faqs')->where('slug', $slug)->exists()) {
        //     $slug = "{$originalSlug}-{$count}";
        //     $count++;
        // }

        // Insert data into the database
        DB::table('faqs')->insert([

            'title' => $request->input('title'),

            'description' => $request->input('description'),

            'created_at' => now()

        ]);

        return redirect()->route('admin.faq.index')->with('faq_success', 'FAQ added successfully!');
    }

    public function edit($id)
    {
        $faq = DB::table('faqs')->where('id', $id)->first();
        return view('admin.faq.editfaq', compact('faq', 'id'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([

            'title' => 'required|string|max:255',

            'description' => 'required|string',
            'updated_at' => now()
        ]);

        $data = [

            'title' => $request->input('title'),
            'description' => $request->input('description'),

        ];

        // $slug = \Illuminate\Support\Str::slug($request->input('title'));
        // $originalSlug = $slug;
        // $count = 1;

        // while (DB::table('faqs')->where('slug', $slug)->where('id', '!=', $id)->exists()) {
        //     $slug = "{$originalSlug}-{$count}";
        //     $count++;
        // }
        // $data['slug'] = $slug;

        // Update the database record
        DB::table('faqs')
            ->where('id', $id)
            ->update($data);

        // Redirect with success message
        return redirect()->route('admin.faq.index')
            ->with('faq_success', 'FAQ updated successfully.');
    }

    public function destroy($id)
    {
        DB::table('faqs')->where('id', $id)->delete();
        return redirect()->route('admin.faq.index');
    }
}
