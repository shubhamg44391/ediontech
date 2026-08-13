<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ResourcesController extends Controller
{
    public function blog()
    {
        $posts = \Illuminate\Support\Facades\DB::table('posts')->latest()->get();
        return view('frontend.resources.blog', compact('posts'));
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
        return view('frontend.resources.blog-details', compact('post', 'recentPosts'));
    }

    public function works()
    {
        return view('frontend.resources.works');
    }

    public function faq()
    {
        return view('frontend.resources.faq');
    }

    public function glossary()
    {
        return view('frontend.resources.glossary');
    }

    public function freeConsultation()
    {
        return view('frontend.resources.free-consultation');
    }

    public function about()
    {
        return view('frontend.resources.about');
    }

    public function certifications()
    {
        return view('frontend.resources.certifications');
    }

    public function contact()
    {
        return view('frontend.resources.contact');
    }

    public function submitContact(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:100',
            'number' => 'nullable|string|max:100',
            'message' => 'nullable|string',
        ]);

        $phoneVal = $request->phone ?? $request->number ?? null;
        if ($phoneVal) {
            $phoneVal = substr($phoneVal, 0, 95);
        }

        \Illuminate\Support\Facades\DB::table('leads')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $phoneVal,
            'message' => $request->message ?? 'Contact Form Lead',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! Your message has been sent successfully.',
            ]);
        }

        return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');
    }

    public function submitConsultation(\Illuminate\Http\Request $request)
    {
        return $this->submitContact($request);
    }

    public function submitCaseStudyLead(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:100',
            'number' => 'nullable|string|max:100',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $projectName = $request->project_name ?? 'Case Study';
        $pdfFile = $request->pdf_file ?? '';
        $userMsg = $request->message ? (" | User Note: " . $request->message) : "";
        $subjectStr = $request->subject ? (" [Subject: " . $request->subject . "]") : "";

        $phoneVal = $request->phone ?? $request->number ?? null;
        if ($phoneVal) {
            $phoneVal = substr($phoneVal, 0, 95);
        }

        \Illuminate\Support\Facades\DB::table('leads')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $phoneVal,
            'message' => 'Downloaded Case Study PDF: ' . $projectName . $subjectStr . $userMsg,
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
        return view('frontend.resources.pricing');
    }

    public function industries()
    {
        return view('frontend.resources.industries');
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
