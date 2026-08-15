<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    private function getPageHeader($slug)
    {
        return DB::table('pages')->where('slug', $slug)->first();
    }

    public function index()
    {
        $headerdata = $this->getPageHeader('services');
        return view('frontend.services.services', compact('headerdata'));
    }

    public function websiteDevelopment()
    {
        $headerdata = $this->getPageHeader('website-development');
        return view('frontend.services.website-development', compact('headerdata'));
    }

    public function customSoftwareDevelopment()
    {
        $headerdata = $this->getPageHeader('custom-software-development');
        return view('frontend.services.custom-software-development', compact('headerdata'));
    }

    public function mobileAppDevelopment()
    {
        $headerdata = $this->getPageHeader('mobile-app-development');
        return view('frontend.services.mobile-app-development', compact('headerdata'));
    }

    public function ecommerceDevelopment()
    {
        $headerdata = $this->getPageHeader('ecommerce-development');
        return view('frontend.services.ecommerce-development', compact('headerdata'));
    }

    public function cmsDevelopment()
    {
        $headerdata = $this->getPageHeader('cms-development');
        return view('frontend.services.cms-development', compact('headerdata'));
    }

    public function websiteDesign()
    {
        $headerdata = $this->getPageHeader('website-design');
        return view('frontend.services.website-design', compact('headerdata'));
    }

    public function logoBranding()
    {
        $headerdata = $this->getPageHeader('logo-branding');
        return view('frontend.services.logo-branding', compact('headerdata'));
    }

    public function mobileAppDesign()
    {
        $headerdata = $this->getPageHeader('mobile-app-design');
        return view('frontend.services.mobile-app-design', compact('headerdata'));
    }

    public function uiUxDesign()
    {
        $headerdata = $this->getPageHeader('ui-ux-design');
        return view('frontend.services.ui-ux-design', compact('headerdata'));
    }

    public function aiDevelopment()
    {
        $headerdata = $this->getPageHeader('ai-development');
        return view('frontend.services.ai-development', compact('headerdata'));
    }

    public function cloudSolutions()
    {
        $headerdata = $this->getPageHeader('cloud-solutions');
        return view('frontend.services.cloud-solutions', compact('headerdata'));
    }

    public function iotSolutions()
    {
        $headerdata = $this->getPageHeader('iot-solutions');
        return view('frontend.services.iot-solutions', compact('headerdata'));
    }

    public function bigDataAnalytics()
    {
        $headerdata = $this->getPageHeader('big-data-analytics');
        return view('frontend.services.big-data-analytics', compact('headerdata'));
    }
}
