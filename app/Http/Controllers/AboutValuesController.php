<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutValuesController extends Controller
{
    public function index()
    {
        $values = DB::table('about_values')->get();
        return view('admin.about.values', compact('values'));
    }

    public function create()
    {
        return view('values.create');
    }

    public function store(Request $request)
    {
        // Validate and store the banner data, including image upload if necessary
        DB::table('about_values')->insert([
            'title' => $request->input('title'),
            'description' => $request->input('description'),

        ]);
        return redirect()->route('about_values.index');
    }

    public function edit($id)
    {
        $values = DB::table('about_values')->where('id', $id)->first();
        return view('admin.about.values', compact('values'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the banner data, including image upload if necessary
        DB::table('about_values')
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                // Update other banner fields as needed
            ]);
        return redirect()->route('about_values.index')
            ->with('success', 'About Values Updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the banner
        DB::table('about_values')->where('id', $id)->delete();
        return redirect()->route('about_values.index');
    }
}
