<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutProcessController extends Controller
{
    public function index()
    {
        $processes = DB::table('about_process')->get();
        return view('admin.about.process', compact('processes'));
    }
    
    public function create()
    {
        return view('process.create');
    }
    
    public function store(Request $request)
    {
        // Validate and store the banner data, including image upload if necessary
        DB::table('about_process')->insert([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'description' => $request->input('description'),
            'step_1' => $request->input('step_1'),
            'step_title_1' => $request->input('step_title_1'),
            'step_description_1' => $request->input('step_description_1'),
            'step_2' => $request->input('step_2'),
            'step_title_2' => $request->input('step_title_2'),
            'step_description_2' => $request->input('step_description_2'),
            'step_3' => $request->input('step_3'),
            'step_title_3' => $request->input('step_title_3'),
            'step_description_3' => $request->input('step_description_3'),
            'step_4' => $request->input('step_4'),
            'step_title_4' => $request->input('step_title_4'),
            'step_description_4' => $request->input('step_description_4'),
            
        ]);
        return redirect()->route('about_process.index');
    }
    
    public function edit($id)
    {
        $processes = DB::table('about_process')->where('id', $id)->first();
        return view('admin.about.process', compact('processes'));
    }
    
    public function update(Request $request, $id)
    {
        // Validate and update the banner data, including image upload if necessary
        DB::table('about_process')
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'description' => $request->input('description'),
                'step_1' => $request->input('step_1'),
                'step_title_1' => $request->input('step_title_1'),
                'step_description_1' => $request->input('step_description_1'),
                'step_2' => $request->input('step_2'),
                'step_title_2' => $request->input('step_title_2'),
                'step_description_2' => $request->input('step_description_2'),
                'step_3' => $request->input('step_3'),
                'step_title_3' => $request->input('step_title_3'),
                'step_description_3' => $request->input('step_description_3'),
                'step_4' => $request->input('step_4'),
                'step_title_4' => $request->input('step_title_4'),
                'step_description_4' => $request->input('step_description_4'),
                // Update other banner fields as needed
            ]);
            return redirect()->route('about_process.index')
            ->with('success', 'About Process Updated successfully.');
    }
    
    public function destroy($id)
    {
        // Delete the banner
        DB::table('about_process')->where('id', $id)->delete();
        return redirect()->route('about_process.index');
    }
}
