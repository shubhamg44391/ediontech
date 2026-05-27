<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutBannerController extends Controller
{
    public function index()
    {
        $banners = DB::table('about_banner')->get();
        return view('admin.about.banner', compact('banners'));
    }
    
    public function create()
    {
        return view('banner.create');
    }
    
    public function store(Request $request)
    {
        // Validate and store the banner data, including image upload if necessary
        DB::table('about_banner')->insert([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            
        ]);
        return redirect()->route('about_banner.index');
    }
    
    public function edit($id)
    {
        $banner = DB::table('about_banner')->where('id', $id)->first();
        return view('admin.about.banner', compact('banner'));
    }
    
    public function update(Request $request, $id)
    {
        // Validate and update the banner data, including image upload if necessary
        DB::table('about_banner')
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                // Update other banner fields as needed
            ]);
            return redirect()->route('about_banner.index')
            ->with('success', 'Banner Updated successfully.');
    }
    
    public function destroy($id)
    {
        // Delete the banner
        DB::table('about_banner')->where('id', $id)->delete();
        return redirect()->route('about_banner.index');
    }
}
