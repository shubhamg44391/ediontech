<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        return view('frontend.services.services');
    }

    public function websiteDevelopment()
    {
        return view('frontend.services.website-development');
    }

    public function customSoftwareDevelopment()
    {
        return view('frontend.services.custom-software-development');
    }

    public function mobileAppDevelopment()
    {
        return view('frontend.services.mobile-app-development');
    }

    public function ecommerceDevelopment()
    {
        return view('frontend.services.ecommerce-development');
    }

    public function cmsDevelopment()
    {
        return view('frontend.services.cms-development');
    }

    public function websiteDesign()
    {
        return view('frontend.services.website-design');
    }

    public function logoBranding()
    {
        return view('frontend.services.logo-branding');
    }

    public function mobileAppDesign()
    {
        return view('frontend.services.mobile-app-design');
    }

    public function uiUxDesign()
    {
        return view('frontend.services.ui-ux-design');
    }

    public function aiDevelopment()
    {
        return view('frontend.services.ai-development');
    }

    public function cloudSolutions()
    {
        return view('frontend.services.cloud-solutions');
    }

    public function iotSolutions()
    {
        return view('frontend.services.iot-solutions');
    }

    public function bigDataAnalytics()
    {
        return view('frontend.services.big-data-analytics');
    }
}
