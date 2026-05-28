<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\DB;
class LeadController extends Controller
{
    // Show the form
    public function create(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'number' => 'required|string|max:10',
            'company' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        DB::table('leads')->insert($data);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    public function saveContactModal(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'number' => 'required|string|max:10',
            'company' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        DB::table('leads')->insert($data);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    // Store data from the form
    public function store(Request $request)
    {

    }

    // Display the list of leads
    public function index()
    {
        $leads = DB::table('leads')->paginate(10);

        return view('admin.leads', compact('leads'));
    }

    // Edit a lead
    public function edit($id)
    {
        $lead = DB::table('leads')->find($id);

        return view('admin.leads', compact('lead'));
    }

    // Update a lead
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'number' => 'required|string|max:10',
            'company' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        DB::table('leads')->where('id', $id)->update($data);

        return redirect()->route('leads.index')->with('success', 'Lead updated successfully.');
    }

    // Delete a lead
    public function destroy($id)
    {
        DB::table('leads')->where('id', $id)->delete();

        return redirect()->route('leads.index')->with('success', 'Lead deleted successfully.');
    }
}
