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

        $data['created_at'] = now();
        $data['updated_at'] = now();

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

        $data['created_at'] = now();
        $data['updated_at'] = now();
        DB::table('leads')->insert($data);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    // Store data from the form
    public function store(Request $request) {}

    // Display the list of leads
    public function index(Request $request)
    {
        $query = DB::table('leads');

        if ($request->filled('source')) {
            $source = $request->source;
            if ($source === 'contact') {
                $query->where(function ($q) {
                    $q->where('source', 'Contact Us')
                        ->orWhereNull('source')
                        ->orWhere('source', '')
                        ->orWhere('message', 'LIKE', '%Page Source: Contact Us%');
                });
            } elseif ($source === 'consultation') {
                $query->where(function ($q) {
                    $q->where('source', 'Free Consultation')
                        ->orWhere('message', 'LIKE', '%Free Consultation%');
                });
            } elseif ($source === 'works') {
                $query->where(function ($q) {
                    $q->where('source', 'Works')
                        ->orWhere('message', 'LIKE', '%Downloaded Case Study%')
                        ->orWhere('message', 'LIKE', '%Case Study%');
                });
            }
        }

        $leads = $query->orderBy('id', 'DESC')->paginate(10)->withQueryString();

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
            'number' => 'required|string|max:15',
            'company' => 'nullable|string',
            'message' => 'nullable|string',
            'budget' => 'nullable|string',
        ]);

        $data['created_at'] = now();
        $data['updated_at'] = now();
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
