<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SocialMediaLinkController extends Controller
{
    public function index()
    {
        $links = DB::table('social_media_links')->get();
        return view('admin.social-media', compact('links'));
    }

    public function create()
    {
        return view('social-media.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'twitter' => 'nullable|string',
            'threads' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);

        DB::table('social_media_links')->insert($data);

        return redirect()->route('social-media.index')->with('success', 'Social media links added successfully.');
    }

    public function edit($id)
    {
        $link = DB::table('social_media_links')->where('id', $id)->first();
        return view('admin.social-media', compact('link'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'twitter' => 'nullable|string',
            'threads' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);

        DB::table('social_media_links')->where('id', $id)->update($data);

        return redirect()->route('social-media.index')->with('success', 'Social media links updated successfully.');
    }
}
