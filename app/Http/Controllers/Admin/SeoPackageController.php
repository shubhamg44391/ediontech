<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeoPackageController extends Controller
{
    /**
     * Display the SEO packages pricing editor.
     */
    public function index()
    {
        $packages = DB::table('seo_packages')->get();

        return view('admin.seo_packages', compact('packages'));
    }

    /**
     * Update the package prices in bulk.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'prices' => 'required|array',
            'prices.*.monthly_price' => 'required|numeric|min:0',
            'prices.*.yearly_price' => 'required|numeric|min:0',
        ]);

        foreach ($validated['prices'] as $id => $values) {
            DB::table('seo_packages')->where('id', $id)->update([
                'monthly_price' => floatval($values['monthly_price']),
                'yearly_price' => floatval($values['yearly_price']),
                'updated_at' => now(),
            ]);
        }

        return redirect()
            ->route('admin.seo-packages.index')
            ->with('success', 'SEO Package prices updated successfully.');
    }
}
