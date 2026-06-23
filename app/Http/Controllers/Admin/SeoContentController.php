<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeoContentController extends Controller
{
    


    public function editSeoContent($slug)
    {
        $data = DB::table('pages')->where(['slug' => $slug])->first();


        return view('admin.seo_edit', ['data' => $data]);
    }
    public function updateSeoContent(Request $request, $slug)

    {



        // Validate the incoming request
        $request->validate([

            'title' => 'required|string|max:255',

            'description' => 'required|string',

        ]);

        DB::table('pages')->updateOrInsert(
            ['slug' => $slug], // condition
            [
                'meta_title' => $request->title,
                'meta_description' => $request->description,
                'slug' => $slug,
                'updated_at' => now(),
            ]
        );


        if ($slug == 'faq') {
            return redirect()
                ->route('admin.faq.index')
                ->with('seo_success', 'FAQ updated successfully.');
        }

        return redirect()
            ->route('title.content', ['slug' => $slug])
            ->with('success', 'Data updated successfully.');

        // Redirect with success message

    }
}
