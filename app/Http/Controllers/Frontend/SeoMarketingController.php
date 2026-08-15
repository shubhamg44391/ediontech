<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SeoMarketingController extends Controller
{
    private function getPageHeader($slug)
    {
        return DB::table('pages')->where('slug', $slug)->first();
    }

    public function seoServices()
    {
        $headerdata = $this->getPageHeader('seo-services');
        return view('frontend.seo-marketing.seo-services', compact('headerdata'));
    }

    public function localSeoServices()
    {
        $headerdata = $this->getPageHeader('local-seo-services');
        return view('frontend.seo-marketing.local-seo-services', compact('headerdata'));
    }

    public function technicalSeoAudit()
    {
        $headerdata = $this->getPageHeader('technical-seo-audit');
        return view('frontend.seo-marketing.technical-seo-audit', compact('headerdata'));
    }

    public function ecommerceSeo()
    {
        $headerdata = $this->getPageHeader('ecommerce-seo');
        return view('frontend.seo-marketing.ecommerce-seo', compact('headerdata'));
    }

    public function linkBuildingServices()
    {
        $headerdata = $this->getPageHeader('link-building-services');
        return view('frontend.seo-marketing.link-building-services', compact('headerdata'));
    }

    public function ppcAdvertising()
    {
        $headerdata = $this->getPageHeader('ppc-advertising');
        return view('frontend.seo-marketing.ppc-advertising', compact('headerdata'));
    }

    public function socialMediaMarketing()
    {
        $headerdata = $this->getPageHeader('social-media-marketing');
        return view('frontend.seo-marketing.social-media-marketing', compact('headerdata'));
    }

    public function contentMarketing()
    {
        $headerdata = $this->getPageHeader('content-marketing');
        return view('frontend.seo-marketing.content-marketing', compact('headerdata'));
    }

    public function emailMarketing()
    {
        $headerdata = $this->getPageHeader('email-marketing');
        return view('frontend.seo-marketing.email-marketing', compact('headerdata'));
    }

    public function aiSearchOptimisation()
    {
        $headerdata = $this->getPageHeader('ai-search-optimisation');
        return view('frontend.seo-marketing.ai-search-optimisation', compact('headerdata'));
    }

    public function answerEngineOptimisation()
    {
        $headerdata = $this->getPageHeader('answer-engine-optimisation');
        return view('frontend.seo-marketing.answer-engine-optimisation', compact('headerdata'));
    }

    public function aiAssistantVisibility()
    {
        $headerdata = $this->getPageHeader('ai-assistant-visibility');
        return view('frontend.seo-marketing.ai-assistant-visibility', compact('headerdata'));
    }
}
