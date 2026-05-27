<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutWhoController extends Controller
{
    public function index()
    {
        $abouts = DB::table('about_who')->get();
        return view('admin.about.who', compact('abouts'));
    }
    
    public function create()
    {
        return view('banner.create');
    }
    
    public function store(Request $request)
    {
        // Validate and store the banner data, including image upload if necessary
        DB::table('about_who')->insert([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'description' => $request->input('description'),
            'link_title' => $request->input('link_title'),
            'counter_1' => $request->input('counter_1'),
            'counter_title_1' => $request->input('counter_title_1'),
            'counter_2' => $request->input('counter_2'),
            'counter_title_2' => $request->input('counter_title_2'),
            
        ]);
        return redirect()->route('about_who.index');
    }
    
    public function edit($id)
    {
        $banner = DB::table('about_banner')->where('id', $id)->first();
        return view('admin.about.banner', compact('banner'));
    }
    
    public function update(Request $request, $id)
    {
        // Validate and update the banner data, including image upload if necessary
        DB::table('about_who')
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'description' => $request->input('description'),
            'link_title' => $request->input('link_title'),
            'counter_1' => $request->input('counter_1'),
            'counter_title_1' => $request->input('counter_title_1'),
            'counter_2' => $request->input('counter_2'),
            'counter_title_2' => $request->input('counter_title_2'),
                // Update other banner fields as needed
            ]);
            return redirect()->route('about_who.index')
            ->with('success', 'About Us Updated successfully.');
    }
    
    public function destroy($id)
    {
        // Delete the banner
        DB::table('about_who')->where('id', $id)->delete();
        return redirect()->route('about_who.index');
    }
}
