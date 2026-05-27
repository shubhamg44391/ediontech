<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriberController extends Controller
{
   

public function index()
{
    $subscribers = DB::table('subscribers')->paginate(10);
    return view('admin.subscribers', compact('subscribers'));
}

public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:subscribers',
    ]);

    DB::table('subscribers')->insert(['email' => $request->input('email')]);

    return redirect()->back()->with('success', 'Thank you for subscribing!');
}

public function destroy($id)
{
    DB::table('subscribers')->where('id', $id)->delete();
    return redirect()->back()->with('success', 'Subscriber deleted.');
}
}
