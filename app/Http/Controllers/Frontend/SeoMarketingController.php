<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class SeoMarketingController extends Controller
{
    public function seoServices()
    {
        return view('frontend.seo-marketing.seo-services');
    }

    public function localSeoServices()
    {
        return view('frontend.seo-marketing.local-seo-services');
    }

    public function technicalSeoAudit()
    {
        return view('frontend.seo-marketing.technical-seo-audit');
    }

    public function ecommerceSeo()
    {
        return view('frontend.seo-marketing.ecommerce-seo');
    }

    public function linkBuildingServices()
    {
        return view('frontend.seo-marketing.link-building-services');
    }

    public function ppcAdvertising()
    {
        return view('frontend.seo-marketing.ppc-advertising');
    }

    public function socialMediaMarketing()
    {
        return view('frontend.seo-marketing.social-media-marketing');
    }

    public function contentMarketing()
    {
        return view('frontend.seo-marketing.content-marketing');
    }

    public function emailMarketing()
    {
        return view('frontend.seo-marketing.email-marketing');
    }

    public function aiSearchOptimisation()
    {
        return view('frontend.seo-marketing.ai-search-optimisation');
    }

    public function answerEngineOptimisation()
    {
        return view('frontend.seo-marketing.answer-engine-optimisation');
    }

    public function aiAssistantVisibility()
    {
        return view('frontend.seo-marketing.ai-assistant-visibility');
    }
}
