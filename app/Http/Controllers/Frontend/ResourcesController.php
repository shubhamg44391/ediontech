<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ResourcesController extends Controller
{
    public function blog()
    {
        $posts = \Illuminate\Support\Facades\DB::table('posts')->latest()->get();
        $categories = \Illuminate\Support\Facades\DB::table('categories')->get();
        $headerdata = $this->getPageHeader('blog');
        return view('frontend.resources.blog', compact('posts', 'categories', 'headerdata'));
    }

    public function blogDetails($slug = null)
    {
        $post = null;
        if ($slug) {
            $post = \Illuminate\Support\Facades\DB::table('posts')->where('slug', $slug)->first();
        }
        if (!$post && request()->has('id')) {
            $post = \Illuminate\Support\Facades\DB::table('posts')->where('id', request()->get('id'))->first();
        }
        if (!$post) {
            $post = \Illuminate\Support\Facades\DB::table('posts')->latest()->first();
        }
        $recentPosts = \Illuminate\Support\Facades\DB::table('posts')->where('id', '!=', $post->id ?? 0)->latest()->take(5)->get();
        $headerdata = $this->getPageHeader('blog-details');
        return view('frontend.resources.blog-details', compact('post', 'recentPosts', 'headerdata'));
    }

    private function getPageHeader($slug)
    {
        return \Illuminate\Support\Facades\DB::table('pages')->where('slug', $slug)->first();
    }

    public function works()
    {
        $headerdata = $this->getPageHeader('works');
        return view('frontend.resources.works', compact('headerdata'));
    }

    public function faq()
    {
        $faqs = \Illuminate\Support\Facades\DB::table('faqs')->latest()->get();
        $headerdata = $this->getPageHeader('faq');
        return view('frontend.resources.faq', compact('faqs', 'headerdata'));
    }

    public function glossary()
    {
        $headerdata = $this->getPageHeader('glossary');
        return view('frontend.resources.glossary', compact('headerdata'));
    }

    public function freeConsultation()
    {
        $headerdata = $this->getPageHeader('free-consultation');
        return view('frontend.resources.free-consultation', compact('headerdata'));
    }

    public function about()
    {
        $headerdata = $this->getPageHeader('about');
        return view('frontend.resources.about', compact('headerdata'));
    }

    public function certifications()
    {
        $headerdata = $this->getPageHeader('certifications');
        return view('frontend.resources.certifications', compact('headerdata'));
    }

    public function contact()
    {
        $headerdata = $this->getPageHeader('contact');
        return view('frontend.resources.contact', compact('headerdata'));
    }

    public function submitContact(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:100',
            'number' => 'nullable|string|max:100',
            'company' => 'nullable|string|max:255',
            'budget' => 'nullable|string|max:255',
            'interest' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'brief' => 'nullable|string',
            'captcha' => 'required|captcha',
        ]);

        $phoneVal = $request->phone ?? $request->number ?? null;
        if ($phoneVal) {
            $phoneVal = substr($phoneVal, 0, 95);
        }

        $sourcePage = 'Contact Us';
        $interestVal = $request->interest ?? null;
        $ndaVal = $request->has('nda') ? 'Yes' : 'No';
        $userMsg = $request->message ?? $request->brief ?? null;

        \Illuminate\Support\Facades\DB::table('leads')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $phoneVal,
            'company' => $request->company,
            'service' => $interestVal,
            'source' => $sourcePage,
            'nda' => $ndaVal,
            'budget' => $request->budget,
            'message' => $userMsg,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your enquiry has been sent successfully.',
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your enquiry has been sent successfully.');
    }

    public function submitConsultation(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:100',
            'number' => 'nullable|string|max:100',
            'company' => 'nullable|string|max:255',
            'budget' => 'nullable|string|max:255',
            'interest' => 'nullable|string|max:255',
            'brief' => 'nullable|string',
            'message' => 'nullable|string',
        ]);

        $phoneVal = $request->phone ?? $request->number ?? null;
        if ($phoneVal) {
            $phoneVal = substr($phoneVal, 0, 95);
        }

        $sourcePage = $request->source ?? 'Consultation Popup';
        $interestVal = $request->interest ?? null;
        $ndaVal = ($request->has('nda') && ($request->nda === 'Yes' || $request->nda === true || $request->nda == 1 || $request->nda === '1' || $request->nda === 'on')) ? 'Yes' : 'No';
        $userBrief = $request->brief ?? $request->message ?? null;

        \Illuminate\Support\Facades\DB::table('leads')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $phoneVal,
            'company' => $request->company,
            'service' => $interestVal,
            'source' => $sourcePage,
            'nda' => $ndaVal,
            'budget' => $request->budget,
            'message' => $userBrief,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your consultation request has been submitted successfully.',
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your consultation request has been submitted successfully.');
    }

    public function submitCaseStudyLead(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:100',
            'number' => 'nullable|string|max:100',
            'company' => 'nullable|string|max:255',
            'budget' => 'nullable|string|max:255',
            'interest' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $projectName = $request->project_name ?? 'Case Study';
        $pdfFile = $request->pdf_file ?? '';
        $phoneVal = $request->phone ?? $request->number ?? null;
        if ($phoneVal) {
            $phoneVal = substr($phoneVal, 0, 95);
        }

        $interestVal = $request->interest ?? 'N/A';
        $ndaVal = $request->has('nda') ? 'Yes' : 'No';

        \Illuminate\Support\Facades\DB::table('leads')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $phoneVal,
            'company' => $request->company,
            'service' => $interestVal,
            'source' => 'Works',
            'nda' => $ndaVal,
            'budget' => $request->budget,
            'message' => "Downloaded Case Study PDF: " . $projectName . "\nMessage: " . $request->message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $pdfUrl = null;
        if (!empty($pdfFile)) {
            $pdfPath = public_path('assets/frontend/img/work/pdf/' . $pdfFile);
            if (file_exists($pdfPath)) {
                $pdfUrl = asset('assets/frontend/img/work/pdf/' . $pdfFile);
            }
        }

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => $pdfUrl ? 'Thank you! Your case study PDF download will start automatically.' : 'Thank you! Your enquiry has been received successfully.',
                'pdf_url' => $pdfUrl,
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Case study lead submitted successfully.');
    }

    public function pricing()
    {
        $headerdata = $this->getPageHeader('seo-package');
        return view('frontend.resources.pricing', compact('headerdata'));
    }

    public function pricingDetails($slug = null)
    {
        $headerdata = $this->getPageHeader('seo-package-details');
        return view('frontend.resources.pricing-details', compact('slug', 'headerdata'));
    }

    public function industries()
    {
        $headerdata = $this->getPageHeader('industries');
        return view('frontend.resources.industries', compact('headerdata'));
    }

    public function privacyPolicy()
    {
        return view('frontend.resources.privacy-policy');
    }

    public function termsAndConditions()
    {
        return view('frontend.resources.terms-and-conditions');
    }

    public function refundAndCancellationPolicy()
    {
        return view('frontend.resources.refund-and-cancellation-policy');
    }

    public function industryDetail($slug)
    {
        if (view()->exists('frontend.locations.' . $slug)) {
            return view('frontend.locations.' . $slug);
        }
        if (view()->exists('frontend.industries.' . $slug)) {
            return view('frontend.industries.' . $slug);
        }
        if (view()->exists('frontend.resources.' . $slug)) {
            return view('frontend.resources.' . $slug);
        }
        if (view()->exists('frontend.services.' . $slug)) {
            return view('frontend.services.' . $slug);
        }
        if (view()->exists('frontend.seo-marketing.' . $slug)) {
            return view('frontend.seo-marketing.' . $slug);
        }
        if (view()->exists('frontend.rental-software.' . $slug)) {
            return view('frontend.rental-software.' . $slug);
        }

        abort(404);
    }
}
