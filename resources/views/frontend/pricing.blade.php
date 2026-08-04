@extends('frontend.layouts.main')

{{-- @section('title', $headerdata->meta_title ?? 'Pricing of Edion Web Technologies') --}}

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Pricing of Edion Web Technologies')
@section('description',
    !empty($headerdata->meta_description)
    ? $headerdata->meta_description
    : 'Edion Web Technologies
    is a leading technology company delivering innovative digital solutions.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'website development, digital marketing, SEO, web design, Edion Web Technologies')


@section('main-container')



    <!-- Page Content Start -->
    <main id="mxd-page-content" class="mxd-page-content inner-page-content">

        <!-- Blur Effect Start -->
        <div class="blur-container">
            <div class="blur-layer blur-1"> <img src="{{ asset('') }}" alt=""></div>
            <div class="blur-layer blur-2"> <img src="{{ asset('') }}" alt=""></div>
            <div class="blur-layer blur-3"> <img src="{{ asset('') }}" alt=""></div>
            <div class="blur-layer blur-4"> <img src="{{ asset('') }}" alt=""></div>
            <div class="blur-layer blur-5"> <img src="{{ asset('') }}" alt=""></div>
            <div class="blur-layer blur-6"> <img src="{{ asset('') }}" alt=""></div>

        </div>
        <!-- Blur Effect End -->

        <!-- Section - Inner Headline v01 Start -->
        <div class="mxd-section blur-section">
            <div class="mxd-container grid-l-container">

                <!-- Block - Inner Headline v01 Start -->
                <div class="mxd-block loading-wrap">
                    <div class="inner-headline margin-bottom-subtitle">
                        <div class="p-0 container-fluid">
                            <div class="row g-0">
                                <div class="col-12 mxd-grid-item">
                                    <!-- breadcrumbs -->
                                    <div class="inner-headline__breadcrumbs loading-fade">
                                        <div class="breadcrumbs__nav">
                                            <span>
                                                <a href="{{ route('frontend.home') }}">
                                                    <span class="mxd-scramble">Home</span>
                                                </a>
                                            </span>
                                            <span class="current-item">Pricing
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- content -->
                                    <div class="inner-headline__content has-large-title">
                                        <div class="p-0 container-fluid">
                                            <div class="row g-0">
                                                <div class="col-12 col-xl-9 mxd-grid-item">
                                                    <div class="inner-headline__title pre-subtitle-large">
                                                        <h1 class="large loading-split">Pricing plans<sup>(3)</sup></h1>
                                                    </div>
                                                    <div class="inner-headline__subtitle loading-item">
                                                        <p>Creative solutions <span>made simple</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-3 mxd-grid-item">
                                                    <div class="inner-headline__tags align-end-desktop tags-large-subtitle">
                                                        <span
                                                            class="tag tag-m meta-tag mxd-scramble loading-item">Websites</span>
                                                        <span class="tag tag-m meta-tag mxd-scramble loading-item">UI/UX
                                                            Design</span>
                                                        <span
                                                            class="tag tag-m meta-tag mxd-scramble loading-item">Development</span>
                                                        <span
                                                            class="tag tag-m meta-tag mxd-scramble loading-item">Promotions</span>
                                                        <span class="tag tag-m meta-tag mxd-scramble loading-item">Art
                                                            direction</span>
                                                        <span
                                                            class="tag tag-m meta-tag mxd-scramble loading-item">Marketing</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block - Inner Headline v01 End -->

            </div>
        </div>
        <!-- Section - Inner Headline v01 End -->

        {{-- clients section start --}}





        {{-- clients section end --}}
        <!-- Section - Pricing Cards Start -->
        <div class="mxd-section">
            <div class="gap-5 mxd-container grid-l-container d-flex flex-column">
                <div class="flex-row gap-5 d-flex justify-content-center">
                    <button id="btnYearly" onclick="toggleBill('yearwise')" class="p-4 px-4 fs-5 btn rounded-pill">
                        <h4 class="fs-2">Billed Yearly</h4>
                    </button>
                    <button id="btnMonthly" onclick="toggleBill('monthwise')"
                        class="p-4 px-4 fs-5 btn-default-accent btn btn-primary rounded-pill">
                        <h4 class="fs-2">Billed Monthly</h4>
                    </button>
                </div>
                <!-- Block -yearly Billed Pricing Cards Start -->
                <div class="mxd-block " style="margin-top:6rem;" id="priceYearly">
                    <div class="mxd-pricing-table loading-fade">
                        <div class="p-0 container-fluid">
                            <div class="row g-0 ">
                                {{-- first pricing card --}}
                                <div class="col-12 col-xl-3 mxd-pricing-table__item mxd-grid-item animate-card-3">
                                    <div class="mxd-pricing-table__inner">
                                        <!-- background image -->
                                        <div class="mxd-pricing-table__bg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200"
                                                version="1.1" viewBox="0 0 200 200">
                                                <g filter="url(#blur)">
                                                    <path fill="var(--highlight)"
                                                        d="M200,200c0,55.2-44.8,100-100,100S0,255.2,0,200s44.8-100,100-100,100,44.8,100,100Z" />
                                                </g>
                                                <defs>
                                                    <filter id="blur" x="0" y="0" width="3000" height="5000"
                                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix"
                                                            result="shape" />
                                                        <feGaussianBlur stdDeviation="60" result="effect1_foregroundBlur" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="mxd-pricing-table__tag">
                                            <span class="tag tag-m tag-bg accent">🦄 Special Offer</span>
                                        </div>
                                        <div class="mxd-pricing-table__data">
                                            <div class="pricing-data__header">
                                                <p class="pricing-header__title anim-uni-in-up">Basic <span>SEO
                                                        Package</span></p>
                                                <p class="pricing-header__descr t-bold anim-uni-in-up">Local Businesses<span
                                                        class="d-inline-block">20+ Keywords Targeted</span></p>
                                            </div>
                                            <div class="pricing-data__info">
                                                <div class="pricing-data__price">

                                                    <div class="pricing-data__header" id="first-card-price">
                                                        <p class="pricing-header__title anim-uni-in-up"
                                                            style="font-size:43px;">
                                                            {{ str_replace(',', '', format_price($packages['Basic']->monthly_price ?? 48424.26)) }}<span
                                                                class="pricing-data__period" id="spanbill1">/ Monthly +
                                                                18% tax</span></p>

                                                    </div>
                                                    <p class="pricing-data__caption t-small t-muted t-140 anim-uni-in-up">2
                                                        Location Served</p>

                                                    <p class="pricing-data__caption t-small t-muted t-140 anim-uni-in-up">
                                                        Expected Results: 3-6
                                                        Months</p>
                                                    <p class="pricing-data__caption t-small t-muted t-140 anim-uni-in-up">
                                                        SEO Strategy: Technical
                                                        SEO, On-Page & Backlinks</p>
                                                </div>
                                                <div class="pricing-data__btnholder anim-uni-in-up">
                                                    <a class="btn btn-default-icon btn-default-outline btn-default-fullwidth slide-right buy-now-btn"
                                                        href="javascript:void(0);" data-package-name="Basic">
                                                        <span class="btn-caption mxd-scramble">Buy Now</span>
                                                        <!-- <i class="btn-icon ph-bold ph-arrow-right"></i> -->
                                                        <i class="btn-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                viewBox="0 0 18 18">
                                                                <path
                                                                    d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mxd-pricing-table__plan">
                                            <p class="pricing-plan__caption t-bold anim-uni-in-up">Website Audit & Analysis
                                            </p>
                                            <div class="pricing-plan__list">
                                                <ul class="mxd-check-list">
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Comprehensive Website Audit</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>SEO Strategy Report</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Competitor & Backlink Analysis</span>
                                                    </li>
                                                    <p>Keyword Research & Strategy</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Primary, Secondary & Competitive Keywords Research</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Long-Tail & Local SEO Keyword Optimization</span>
                                                    </li>


                                                </ul>
                                            </div>

                                        </div>

                                        {{-- start this is the view more functionality button --}}
                                        <div class="pricing-plan__list extra-content d-none price-card">
                                            <ul class="mxd-check-list">
                                                <p class="my-4">On-Page SEO Optimization</p>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span>Title & Meta Tags Optimization</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span>Content Optimization (Keyword Integration, Content-Length,
                                                        Readability)</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span>Heading Structure (H1, H2, H3) Optimization</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span>URL Structure & Internal Linking Optimization</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Image Optimization (Alt Text,
                                                        Compression, Sitemap)</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Schema Markup Implementation</span>
                                                </li>
                                                <p class="online text-wrap">Technical SEO Enhancements</p>

                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Google Search Console & Analytics
                                                        Setup</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Website Speed Optimization</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Mobile Responsiveness & Core Web Vitals
                                                        Improvements</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">XML & Image Sitemap Creation</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Robots.txt Optimization</span>
                                                </li>
                                                <p class="online text-wrap">Off-Page SEO & Link Building</p>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">High-Quality Backlinks & Guest
                                                        Posts</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Business Listings & Citations</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Press Releases & Authority Link
                                                        Building</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Competitor Link Acquisition & Brand
                                                        Mentions</span>
                                                </li>
                                                <p class="online text-wrap">Local SEO Optimization (For Local Businesses)
                                                </p>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Google My Business (GMB)
                                                        Optimization</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap"></span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Local Directory Submissions</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">NAP Consistency & Local Citations</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Google Reviews & Reputation
                                                        Management</span>
                                                </li>
                                                <p class="online text-wrap">Content Marketing & Blogging</p>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Blog Content Strategy & Writing</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Guest Posting on Niche Websites</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Content Repurposing & Social Media
                                                        Integration</span>
                                                </li>
                                                <p>Reporting & Performance Tracking</p>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Monthly Performance Reports</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Traffic & Ranking Analysis</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">SEO Strategy Adjustments &
                                                        Recommendations</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap"></span>
                                                </li>
                                                <p>Meta Optimization Phase</p>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Complete meta tag optimization for all
                                                        selected pages: Up to 20
                                                        Pages</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Title & Meta Tags Optimization</span>
                                                </li>
                                                <p>Content Creation & Marketing Strategy</p>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Keyword Optimization on Targeted
                                                        Pages</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">FAQ Content Optimization: Up to 1 Page
                                                        per Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Category Pages Content Optimization: Up
                                                        to 5 Pages per
                                                        Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Regular Blog Optimization: 10 Blogs per
                                                        Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Blog Writing On-site: 1 per Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Landing Pages Optimization: 2 per
                                                        Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Press Release Writing & Submission: 1
                                                        per Month</span>
                                                </li>
                                                <p>High-Quality PR, Guest Post & Resource Pages</p>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap"></span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">PR on Authoritative News Sites (DR 40 -
                                                        DR 80): 0 per
                                                        Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Guest Posting Submission (Sponsored): 2
                                                        per Month </span>
                                                </li>
                                                <p>Authoritative Backlinks Acquisition Strategy</p>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Organic Backlinks (DR 50 - 90): 100 per
                                                        Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Business Listings: 20 per Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">City-Specific Directory Submission: 8
                                                        per Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Business Classified Submission: 10 per
                                                        Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Competitor Link Acquisition: 25 per
                                                        Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Branding Website Profile Creation: 4 per
                                                        Month</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">3rd Party Reviews Submission: 2 per
                                                        Month</span>
                                                </li>
                                                <p>Website Speed Optimization</p>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Google Pagespeed Test & Optimization:
                                                        Recommendations for site
                                                        speed improvement.</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Speed Optimization (Desktop/Mobile):
                                                        Recommendations + One-time
                                                        Fixation.</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Hx Tags Correction: Up to 20
                                                        Pages</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Image Alt Tag Analysis &
                                                        Implementation</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Anchor Tag/Internal Linking
                                                        Optimization</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Canonical Tag Implementation (If
                                                        Applicable)</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Broken Links Optimization</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Schema Implementation for Contact
                                                        Address</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <img src="{{ asset('img/icons/remove.webp') }}" alt="remove icon"
                                                        class="p-1 bg-danger rounded-circle"
                                                        style="height:20px; width:20px; object-fit:contain;">
                                                    <span class="online text-wrap">Structured Data Implementation (If
                                                        Required): for CMS, for
                                                        WordPress</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Favicon Implementation</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <img src="{{ asset('img/icons/remove.webp') }}" alt="remove icon"
                                                        class="p-1 bg-danger rounded-circle"
                                                        style="height:20px; width:20px; object-fit:contain;">
                                                    <span class="online text-wrap">Footer Optimization (If
                                                        Applicable)</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <img src="{{ asset('img/icons/remove.webp') }}" alt="remove icon"
                                                        class="p-1 bg-danger rounded-circle"
                                                        style="height:20px; width:20px; object-fit:contain;">
                                                    <span class="online text-wrap">Call to Action Report</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Link Detox (Spam Link Removal): Ensure
                                                        80-90% location-based
                                                        links</span>
                                                </li>
                                                <p>Backlinks Quality Check</p>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Ensuring high DA/DR backlinks
                                                        only</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Link Spam Checking & Detox</span>
                                                </li>
                                                <li class="anim-uni-in-up">
                                                    <!-- <i class="ph ph-check"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        version="1.1" viewBox="0 0 18 18">
                                                        <path
                                                            d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                    </svg>
                                                    <span class="online text-wrap">Anchor Text Optimization</span>
                                                </li>


                                            </ul>
                                        </div>

                                        <div class="mxd-pricing-table__link anim-uni-in-up">
                                            {{-- <a href="{{ route('frontend.contact') }}">View More</a> --}}
                                            <a href="javascript:void(0)" class="view-btn">
                                                View More
                                            </a>
                                        </div>
                                        {{-- end view more button functionality --}}

                                    </div>
                                </div>
                                {{-- second pricing card --}}
                                <div class="col-12 col-xl-3 mxd-pricing-table__item mxd-grid-item animate-card-3">
                                    <div class="mxd-pricing-table__inner">
                                        <!-- background image -->
                                        <div class="mxd-pricing-table__bg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200"
                                                version="1.1" viewBox="0 0 200 200">
                                                <g filter="url(#blur-2)">
                                                    <path fill="var(--highlight)"
                                                        d="M200,200c0,55.2-44.8,100-100,100S0,255.2,0,200s44.8-100,100-100,100,44.8,100,100Z" />
                                                </g>
                                                <defs>
                                                    <filter id="blur-2" x="0" y="0" width="3000" height="5000"
                                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                            in2="BackgroundImageFix" result="shape" />
                                                        <feGaussianBlur stdDeviation="60"
                                                            result="effect1_foregroundBlur" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="mxd-pricing-table__tag">
                                            <span class="tag tag-m tag-bg muted">🔥 Best choice</span>
                                        </div>
                                        <div class="mxd-pricing-table__data">
                                            <div class="pricing-data__header">
                                                <p class="pricing-header__title anim-uni-in-up">STANDARD <span>SEO
                                                        Package</span></p>
                                                <p class="pricing-header__descr t-bold anim-uni-in-up">Growing Enterprises
                                                    <span>40+ Keywords Targeted</span>
                                                </p>
                                            </div>
                                            <div class="pricing-data__info">
                                                <div class="pricing-data__price">

                                                    <div class="pricing-data__header" id="second-card-price">
                                                        <p class="pricing-header__title anim-uni-in-up"
                                                            style="font-size:43px;">
                                                            {{ str_replace(',', '', format_price($packages['Standard']->monthly_price ?? 62951.54)) }}<span
                                                                class="pricing-data__period">/Monthly + 18% tax</span></p>

                                                    </div>

                                                    <p class="pricing-data__caption t-small t-muted t-140 anim-uni-in-up">3
                                                        Locations Served
                                                        Expected Results: 3-6 Months</p>
                                                    <p class="pricing-data__caption t-small t-muted t-140 anim-uni-in-up">
                                                        SEO Strategy: Advanced SEO
                                                        & Content Strategy</p>
                                                </div>
                                                <div class="pricing-data__btnholder anim-uni-in-up">
                                                    <a class="btn btn-default-icon btn-default-outline btn-default-fullwidth slide-right buy-now-btn"
                                                        href="javascript:void(0);" data-package-name="Standard">
                                                        <span class="btn-caption mxd-scramble">Buy Now</span>
                                                        <!-- <i class="btn-icon ph-bold ph-arrow-right"></i> -->
                                                        <i class="btn-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                viewBox="0 0 18 18">
                                                                <path
                                                                    d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mxd-pricing-table__plan">
                                            <p class="pricing-plan__caption t-bold anim-uni-in-up">Website Audit & Analysis
                                            </p>
                                            <div class="pricing-plan__list">
                                                <ul class="mxd-check-list">
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Comprehensive Website Audit</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>SEO Strategy Report</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Competitor & Backlink Analysis</span>
                                                    </li>
                                                    <p>Keyword Research & Strategy</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Primary, Secondary & Competitive Keywords Research</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Long-Tail & Local SEO Keyword Optimization</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            {{-- start this is the view more functionality button --}}
                                            <div class="pricing-plan__list extra-content d-none price-card">
                                                <ul class="mxd-check-list">
                                                    <p class="my-4">On-Page SEO Optimization</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Title & Meta Tags Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Content Optimization (Keyword Integration, Content-Length,
                                                            Readability)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Heading Structure (H1, H2, H3) Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>URL Structure & Internal Linking Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Image Optimization (Alt Text,
                                                            Compression, Sitemap)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Schema Markup Implementation</span>
                                                    </li>
                                                    <p class="online text-wrap">Technical SEO Enhancements</p>

                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google Search Console & Analytics
                                                            Setup</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Website Speed Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Mobile Responsiveness & Core Web
                                                            Vitals Improvements</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">XML & Image Sitemap Creation</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Robots.txt Optimization</span>
                                                    </li>
                                                    <p class="online text-wrap">Off-Page SEO & Link Building</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">High-Quality Backlinks & Guest
                                                            Posts</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Business Listings & Citations</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Press Releases & Authority Link
                                                            Building</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Competitor Link Acquisition & Brand
                                                            Mentions</span>
                                                    </li>
                                                    <p class="online text-wrap">Local SEO Optimization (For Local
                                                        Businesses)</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google My Business (GMB)
                                                            Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap"></span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Local Directory Submissions</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">NAP Consistency & Local
                                                            Citations</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google Reviews & Reputation
                                                            Management</span>
                                                    </li>
                                                    <p class="online text-wrap">Content Marketing & Blogging</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Blog Content Strategy &
                                                            Writing</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Guest Posting on Niche
                                                            Websites</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Content Repurposing & Social Media
                                                            Integration</span>
                                                    </li>
                                                    <p>Reporting & Performance Tracking</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Monthly Performance Reports</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Traffic & Ranking Analysis</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">SEO Strategy Adjustments &
                                                            Recommendations</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap"></span>
                                                    </li>
                                                    <p>Meta Optimization Phase</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Complete meta tag optimization for
                                                            all selected pages: Up to 20
                                                            Pages</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Title & Meta Tags
                                                            Optimization</span>
                                                    </li>
                                                    <p>Content Creation & Marketing Strategy</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Keyword Optimization on Targeted
                                                            Pages</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">FAQ Content Optimization: Up to 1
                                                            Page per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Category Pages Content
                                                            Optimization:
                                                            Up to 5 Pages per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Regular Blog Optimization: 10 Blogs
                                                            per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Blog Writing On-site: 1 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Landing Pages Optimization: 2 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Press Release Writing & Submission:
                                                            1 per Month</span>
                                                    </li>
                                                    <p>High-Quality PR, Guest Post & Resource Pages</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap"></span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">PR on Authoritative News Sites (DR
                                                            40 - DR 80): 0 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Guest Posting Submission
                                                            (Sponsored): 2 per Month </span>
                                                    </li>
                                                    <p>Authoritative Backlinks Acquisition Strategy</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Organic Backlinks (DR 50 - 90): 100
                                                            per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Business Listings: 20 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">City-Specific Directory Submission:
                                                            8 per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Business Classified Submission: 10
                                                            per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Competitor Link Acquisition: 25 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Branding Website Profile Creation:
                                                            4 per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">3rd Party Reviews Submission: 2 per
                                                            Month</span>
                                                    </li>
                                                    <p>Website Speed Optimization</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google Pagespeed Test &
                                                            Optimization: Recommendations for site
                                                            speed improvement.</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Speed Optimization
                                                            (Desktop/Mobile): Recommendations + One-time
                                                            Fixation.</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Hx Tags Correction: Up to 20
                                                            Pages</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Image Alt Tag Analysis &
                                                            Implementation</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Anchor Tag/Internal Linking
                                                            Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Canonical Tag Implementation (If
                                                            Applicable)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Broken Links Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Schema Implementation for Contact
                                                            Address</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Structured Data Implementation (If
                                                            Required): for CMS, for
                                                            WordPress</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Favicon Implementation</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <img src="{{ asset('img/icons/remove.webp') }}"
                                                            alt="remove icon" class="p-1 bg-danger rounded-circle"
                                                            style="height:20px; width:20px; object-fit:contain;">
                                                        <span class="online text-wrap">Footer Optimization (If
                                                            Applicable)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <img src="{{ asset('img/icons/remove.webp') }}"
                                                            alt="remove icon" class="p-1 bg-danger rounded-circle"
                                                            style="height:20px; width:20px; object-fit:contain;">
                                                        <span class="online text-wrap">Call to Action Report</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Link Detox (Spam Link Removal):
                                                            Ensure 80-90% location-based
                                                            links</span>
                                                    </li>
                                                    <p>Backlinks Quality Check</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Ensuring high DA/DR backlinks
                                                            only</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Link Spam Checking & Detox</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Anchor Text Optimization</span>
                                                    </li>


                                                </ul>
                                            </div>

                                            <div class="mxd-pricing-table__link anim-uni-in-up">
                                                {{-- <a href="{{ route('frontend.contact') }}">View More</a> --}}
                                                <a href="javascript:void(0)" class="view-btn">
                                                    View More
                                                </a>
                                            </div>
                                            {{-- end view more button functionality --}}

                                        </div>
                                    </div>
                                </div>
                                {{-- third pricing card --}}
                                <div class="col-12 col-xl-3 mxd-pricing-table__item mxd-grid-item animate-card-3">
                                    <div class="mxd-pricing-table__inner">
                                        <!-- background image -->
                                        <div class="mxd-pricing-table__bg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200"
                                                version="1.1" viewBox="0 0 200 200">
                                                <g filter="url(#blur)">
                                                    <path fill="var(--highlight)"
                                                        d="M200,200c0,55.2-44.8,100-100,100S0,255.2,0,200s44.8-100,100-100,100,44.8,100,100Z" />
                                                </g>
                                                <defs>
                                                    <filter id="blur" x="0" y="0" width="3000" height="5000"
                                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                            in2="BackgroundImageFix" result="shape" />
                                                        <feGaussianBlur stdDeviation="60"
                                                            result="effect1_foregroundBlur" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>

                                        <div class="mxd-pricing-table__data">
                                            <div class="pricing-data__header">
                                                <p class="pricing-header__title anim-uni-in-up"> GOLD <span> SEO Package
                                                    </span></p>
                                                <p class="pricing-header__descr t-bold anim-uni-in-up">Established
                                                    Brands<span class="d-inline-block"> 80+ Keywords Targeted</span></p>
                                            </div>
                                            {{--
                      <div class="pricing-data__header">
                        <p class="pricing-header__title anim-uni-in-up">STANDARD <span>SEO Package</span></p>
                        <p class="pricing-header__descr t-bold anim-uni-in-up">Growing Enterprises
                          <span>40+ Keywords Targeted</span>
                        </p>
                      </div> --}}

                                            <div class="pricing-data__info">
                                                <div class="pricing-data__price">

                                                    <div class="pricing-data__header" id="third-card-price">
                                                        <p class="pricing-header__title anim-uni-in-up"
                                                            style="font-size:43px;">
                                                            {{ str_replace(',', '', format_price($packages['Gold']->monthly_price ?? 87163.67)) }}<span
                                                                class="pricing-data__period">/Monthly +18% tax</span></p>

                                                    </div>
                                                    <p class="pricing-data__caption t-small t-muted t-140 anim-uni-in-up">
                                                        All Locations Served</p>
                                                    <p class="pricing-data__caption t-small t-muted t-140 anim-uni-in-up">
                                                        Expected Results: 3-6
                                                        Months</p>
                                                    <p class="pricing-data__caption t-small t-muted t-140 anim-uni-in-up">
                                                        SEO Strategy: Full-Scale
                                                        SEO & Branding</p>
                                                </div>
                                                <div class="pricing-data__btnholder anim-uni-in-up">
                                                    <a class="btn btn-default-icon btn-default-outline btn-default-fullwidth slide-right buy-now-btn"
                                                        href="javascript:void(0);" data-package-name="Gold">
                                                        <span class="btn-caption mxd-scramble">Buy Now</span>
                                                        <!-- <i class="btn-icon ph-bold ph-arrow-right"></i> -->
                                                        <i class="btn-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                viewBox="0 0 18 18">
                                                                <path
                                                                    d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mxd-pricing-table__plan">
                                            <p class="pricing-plan__caption t-bold anim-uni-in-up">Website Audit &
                                                Analysis</p>
                                            <div class="pricing-plan__list">
                                                <ul class="mxd-check-list">
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Comprehensive Website Audit</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>SEO Strategy Report</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Competitor & Backlink Analysis</span>
                                                    </li>
                                                    <p>Keyword Research & Strategy</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Primary, Secondary & Competitive Keywords Research</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Long-Tail & Local SEO Keyword Optimization</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            {{-- start this is the view more functionality button --}}
                                            <div class="pricing-plan__list extra-content d-none price-card">
                                                <ul class="mxd-check-list">
                                                    <p class="my-4">On-Page SEO Optimization</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Title & Meta Tags Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Content Optimization (Keyword Integration, Content-Length,
                                                            Readability)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Heading Structure (H1, H2, H3) Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>URL Structure & Internal Linking Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Image Optimization (Alt Text,
                                                            Compression, Sitemap)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Schema Markup Implementation</span>
                                                    </li>
                                                    <p class="online text-wrap">Technical SEO Enhancements</p>

                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google Search Console & Analytics
                                                            Setup</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Website Speed Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Mobile Responsiveness & Core Web
                                                            Vitals Improvements</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">XML & Image Sitemap Creation</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Robots.txt Optimization</span>
                                                    </li>
                                                    <p class="online text-wrap">Off-Page SEO & Link Building</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">High-Quality Backlinks & Guest
                                                            Posts</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Business Listings &
                                                            Citations</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Press Releases & Authority Link
                                                            Building</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Competitor Link Acquisition & Brand
                                                            Mentions</span>
                                                    </li>
                                                    <p class="online text-wrap">Local SEO Optimization (For Local
                                                        Businesses)</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google My Business (GMB)
                                                            Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap"></span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Local Directory Submissions</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">NAP Consistency & Local
                                                            Citations</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google Reviews & Reputation
                                                            Management</span>
                                                    </li>
                                                    <p class="online text-wrap">Content Marketing & Blogging</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Blog Content Strategy &
                                                            Writing</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Guest Posting on Niche
                                                            Websites</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Content Repurposing & Social Media
                                                            Integration</span>
                                                    </li>
                                                    <p>Reporting & Performance Tracking</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Monthly Performance Reports</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Traffic & Ranking Analysis</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">SEO Strategy Adjustments &
                                                            Recommendations</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap"></span>
                                                    </li>
                                                    <p>Meta Optimization Phase</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Complete meta tag optimization for
                                                            all selected pages: Up to 20
                                                            Pages</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Title & Meta Tags
                                                            Optimization</span>
                                                    </li>
                                                    <p>Content Creation & Marketing Strategy</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Keyword Optimization on Targeted
                                                            Pages</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">FAQ Content Optimization: Up to 1
                                                            Page per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Category Pages Content
                                                            Optimization: Up to 5 Pages per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Regular Blog Optimization: 10 Blogs
                                                            per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Blog Writing On-site: 1 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Landing Pages Optimization: 2 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Press Release Writing & Submission:
                                                            1 per Month</span>
                                                    </li>
                                                    <p>High-Quality PR, Guest Post & Resource Pages</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap"></span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">PR on Authoritative News Sites (DR
                                                            40 - DR 80): 0 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Guest Posting Submission
                                                            (Sponsored): 2 per Month </span>
                                                    </li>
                                                    <p>Authoritative Backlinks Acquisition Strategy</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Organic Backlinks (DR 50 - 90): 100
                                                            per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Business Listings: 20 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">City-Specific Directory Submission:
                                                            8 per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Business Classified Submission: 10
                                                            per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Competitor Link Acquisition: 25 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Branding Website Profile Creation:
                                                            4 per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">3rd Party Reviews Submission: 2 per
                                                            Month</span>
                                                    </li>
                                                    <p>Website Speed Optimization</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google Pagespeed Test &
                                                            Optimization: Recommendations for site
                                                            speed improvement.</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Speed Optimization
                                                            (Desktop/Mobile): Recommendations + One-time
                                                            Fixation.</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Hx Tags Correction: Up to 20
                                                            Pages</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Image Alt Tag Analysis &
                                                            Implementation</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Anchor Tag/Internal Linking
                                                            Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Canonical Tag Implementation (If
                                                            Applicable)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Broken Links Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Schema Implementation for Contact
                                                            Address</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Structured Data Implementation (If
                                                            Required): for CMS, for
                                                            WordPress</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Favicon Implementation</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Footer Optimization (If
                                                            Applicable)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Call to Action Report</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Link Detox (Spam Link Removal):
                                                            Ensure 80-90% location-based
                                                            links</span>
                                                    </li>
                                                    <p>Backlinks Quality Check</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Ensuring high DA/DR backlinks
                                                            only</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Link Spam Checking & Detox</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Anchor Text Optimization</span>
                                                    </li>


                                                </ul>
                                            </div>

                                            <div class="mxd-pricing-table__link anim-uni-in-up">
                                                {{-- <a href="{{ route('frontend.contact') }}">View More</a> --}}
                                                <a href="javascript:void(0)" class="view-btn">
                                                    View More
                                                </a>
                                            </div>
                                            {{-- end view more button functionality --}}

                                        </div>

                                    </div>
                                </div>
                                {{-- fourth card --}}
                                <div class="col-12 col-xl-3 mxd-pricing-table__item mxd-grid-item animate-card-3">
                                    <div class="mxd-pricing-table__inner">
                                        <!-- background image -->
                                        <div class="mxd-pricing-table__bg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200"
                                                version="1.1" viewBox="0 0 200 200">
                                                <g filter="url(#blur-2)">
                                                    <path fill="var(--highlight)"
                                                        d="M200,200c0,55.2-44.8,100-100,100S0,255.2,0,200s44.8-100,100-100,100,44.8,100,100Z" />
                                                </g>
                                                <defs>
                                                    <filter id="blur-2" x="0" y="0" width="3000" height="5000"
                                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                            in2="BackgroundImageFix" result="shape" />
                                                        <feGaussianBlur stdDeviation="60"
                                                            result="effect1_foregroundBlur" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>

                                        <div class="mxd-pricing-table__data">
                                            <div class="pricing-data__header">
                                                <p class="pricing-header__title anim-uni-in-up">PREMIUM <span> SEO Package
                                                    </span></p>
                                                <p class="pricing-header__descr t-bold anim-uni-in-up">Large Enterprises
                                                    <span class="d-inline-block">200+ Keywords Targeted</span>
                                                </p>
                                            </div>
                                            <div class="pricing-data__info">
                                                <div class="pricing-data__price">

                                                    <div class="pricing-data__header" id="fourth-card-price">
                                                        <p class="pricing-header__title anim-uni-in-up"
                                                            style="font-size:43px;">
                                                            {{ str_replace(',', '', format_price($packages['Premium']->monthly_price ?? 154957.63)) }} <span
                                                                class="pricing-data__period">/Monthly + 18% tax</span></p>

                                                    </div>

                                                    <p class="pricing-data__caption t-small t-muted t-140 anim-uni-in-up">
                                                        All Locations Served</p>
                                                    <p class="pricing-data__caption t-small t-muted t-140 anim-uni-in-up">
                                                        Expected Results: 3-6
                                                        Months</p>
                                                    <p class="pricing-data__caption t-small t-muted t-140 anim-uni-in-up">
                                                        Enterprise-Level SEO</p>
                                                </div>
                                                <div class="pricing-data__btnholder anim-uni-in-up">
                                                    <a class="btn btn-default-icon btn-default-outline btn-default-fullwidth slide-right buy-now-btn"
                                                        href="javascript:void(0);" data-package-name="Premium">
                                                        <span class="btn-caption mxd-scramble">Buy Now</span>
                                                        <!-- <i class="btn-icon ph-bold ph-arrow-right"></i> -->
                                                        <i class="btn-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                viewBox="0 0 18 18">
                                                                <path
                                                                    d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mxd-pricing-table__plan">
                                            <p class="pricing-plan__caption t-bold anim-uni-in-up">Website Audit &
                                                Analysis</p>
                                            <div class="pricing-plan__list">
                                                <ul class="mxd-check-list">
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Comprehensive Website Audit</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>SEO Strategy Report</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Competitor & Backlink Analysis</span>
                                                    </li>
                                                    <p>Keyword Research & Strategy</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Primary, Secondary & Competitive Keywords Research</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Long-Tail & Local SEO Keyword Optimization</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            {{-- start this is the view more functionality button --}}
                                            <div class="pricing-plan__list extra-content d-none price-card">
                                                <ul class="mxd-check-list">
                                                    <p class="my-4">On-Page SEO Optimization</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Title & Meta Tags Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Content Optimization (Keyword Integration, Content-Length,
                                                            Readability)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>Heading Structure (H1, H2, H3) Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span>URL Structure & Internal Linking Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Image Optimization (Alt Text,
                                                            Compression, Sitemap)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Schema Markup Implementation</span>
                                                    </li>
                                                    <p class="online text-wrap">Technical SEO Enhancements</p>

                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google Search Console & Analytics
                                                            Setup</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Website Speed Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Mobile Responsiveness & Core Web
                                                            Vitals Improvements</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">XML & Image Sitemap Creation</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Robots.txt Optimization</span>
                                                    </li>
                                                    <p class="online text-wrap">Off-Page SEO & Link Building</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">High-Quality Backlinks & Guest
                                                            Posts</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Business Listings &
                                                            Citations</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Press Releases & Authority Link
                                                            Building</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Competitor Link Acquisition & Brand
                                                            Mentions</span>
                                                    </li>
                                                    <p class="online text-wrap">Local SEO Optimization (For Local
                                                        Businesses)</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google My Business (GMB)
                                                            Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap"></span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Local Directory Submissions</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">NAP Consistency & Local
                                                            Citations</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google Reviews & Reputation
                                                            Management</span>
                                                    </li>
                                                    <p class="online text-wrap">Content Marketing & Blogging</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Blog Content Strategy &
                                                            Writing</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Guest Posting on Niche
                                                            Websites</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Content Repurposing & Social Media
                                                            Integration</span>
                                                    </li>
                                                    <p>Reporting & Performance Tracking</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Monthly Performance Reports</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Traffic & Ranking Analysis</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">SEO Strategy Adjustments &
                                                            Recommendations</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap"></span>
                                                    </li>
                                                    <p>Meta Optimization Phase</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Complete meta tag optimization for
                                                            all selected pages: Up to 20
                                                            Pages</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Title & Meta Tags
                                                            Optimization</span>
                                                    </li>
                                                    <p>Content Creation & Marketing Strategy</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Keyword Optimization on Targeted
                                                            Pages</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">FAQ Content Optimization: Up to 1
                                                            Page per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Category Pages Content
                                                            Optimization: Up to 5 Pages per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Regular Blog Optimization: 10 Blogs
                                                            per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Blog Writing On-site: 1 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Landing Pages Optimization: 2 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Press Release Writing & Submission:
                                                            1 per Month</span>
                                                    </li>
                                                    <p>High-Quality PR, Guest Post & Resource Pages</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap"></span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">PR on Authoritative News Sites (DR
                                                            40 - DR 80): 0 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Guest Posting Submission
                                                            (Sponsored): 2 per Month </span>
                                                    </li>
                                                    <p>Authoritative Backlinks Acquisition Strategy</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Organic Backlinks (DR 50 - 90): 100
                                                            per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Business Listings: 20 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">City-Specific Directory Submission:
                                                            8 per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Business Classified Submission: 10
                                                            per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Competitor Link Acquisition: 25 per
                                                            Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Branding Website Profile Creation:
                                                            4 per Month</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">3rd Party Reviews Submission: 2 per
                                                            Month</span>
                                                    </li>
                                                    <p>Website Speed Optimization</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Google Pagespeed Test &
                                                            Optimization: Recommendations for site
                                                            speed improvement.</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Speed Optimization
                                                            (Desktop/Mobile): Recommendations + One-time
                                                            Fixation.</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Hx Tags Correction: Up to 20
                                                            Pages</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Image Alt Tag Analysis &
                                                            Implementation</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Anchor Tag/Internal Linking
                                                            Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Canonical Tag Implementation (If
                                                            Applicable)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Broken Links Optimization</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Schema Implementation for Contact
                                                            Address</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Structured Data Implementation (If
                                                            Required): for CMS, for
                                                            WordPress</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Favicon Implementation</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Footer Optimization (If
                                                            Applicable)</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Call to Action Report</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Link Detox (Spam Link Removal):
                                                            Ensure 80-90% location-based
                                                            links</span>
                                                    </li>
                                                    <p>Backlinks Quality Check</p>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Ensuring high DA/DR backlinks
                                                            only</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Link Spam Checking & Detox</span>
                                                    </li>
                                                    <li class="anim-uni-in-up">
                                                        <!-- <i class="ph ph-check"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                            height="18" version="1.1" viewBox="0 0 18 18">
                                                            <path
                                                                d="M18,6.8h-4.5v4.5h-4.5v4.5h-4.5v-4.5h4.5v-4.5h4.5V2.3h4.5v4.5ZM0,6.7v4.5h4.5v-4.5H0Z" />
                                                        </svg>
                                                        <span class="online text-wrap">Anchor Text Optimization</span>
                                                    </li>


                                                </ul>
                                            </div>

                                            <div class="mxd-pricing-table__link anim-uni-in-up">
                                                {{-- <a href="{{ route('frontend.contact') }}">View More</a> --}}
                                                <a href="javascript:void(0)" class="view-btn">
                                                    View More
                                                </a>
                                            </div>
                                            {{-- end view more button functionality --}}

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block - yearly Billed Pricing Cards End -->


            </div>
        </div>
        <!-- Section - Pricing Cards End -->

        <!-- Section - Partners/Clients Start -->
        <div class="mxd-section blur-section padding-top-title padding-bottom-title">
            <div class="mxd-container grid-l-container">

                <!-- Block - Section Title v01 & Partners/Clients Start -->
                <div class="mxd-block">
                    <div class="p-0 container-fluid">
                        <div class="row g-0">
                            <!-- title part -->
                            <div class="col-12 col-xl-4 mxd-grid-item">
                                <div class="mxd-section-title pre-grid-xl-mobile">
                                    <div class="p-0 container-fluid">
                                        <div class="row g-0">
                                            <div class="col-12">
                                                <div class="mxd-section-title__title">
                                                    <h2 class="reveal-type">Clients</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- clients part -->
                            <div class="col-12 col-xl-8">
                                <div class="mxd-clients">
                                    <!-- clients row -->
                                    <div class="mxd-clients__row">
                                        <div class="p-0 container-fluid">
                                            <div class="row g-0">
                                                <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/bxience-light.png') }}?v=2.0"
                                                            alt="Bxience logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/bxience-dark.png') }}?v=2.0"
                                                            alt="Bxience logo">
                                                    </div>
                                                </div>
                                                 <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/auto-nation-light.png') }}?v=2.0"
                                                            alt="Auto Nation logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/auto-nation-dark.png') }}?v=2.0"
                                                            alt="Auto Nation logo">
                                                    </div>
                                                </div>
                                                 <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/link_loop_light.png') }}?v=2.0"
                                                            alt="Link Loop logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/link_loop_dark.png') }}?v=2.0"
                                                            alt="Link Loop logo">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/elon_musk_light.png') }}?v=2.0"
                                                            alt="Elon Musk logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/elon_musk_dark.png') }}?v=2.0"
                                                            alt="Elon Musk logo">
                                                    </div>
                                                </div>
                                                 <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/glance_light.png') }}?v=2.0"
                                                            alt="Glance logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/glance_dark.png') }}?v=2.0"
                                                            alt="Glance logo">
                                                    </div>
                                                </div>
                                                 <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/roposo_clout_light.png') }}?v=2.0"
                                                            alt="Roposo Clout logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/roposo_clout_dark.png') }}?v=2.0"
                                                            alt="Roposo Clout logo">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/tukarwale_light.png') }}?v=2.0"
                                                            alt="Tukarwale logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/tukarwale_dark.png') }}?v=2.0"
                                                            alt="Tukarwale logo">
                                                    </div>
                                                </div>
                                                 <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/vepo_light.png') }}?v=2.0"
                                                            alt="Vepo logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/vepo_dark.png') }}?v=2.0"
                                                            alt="Vepo logo">
                                                    </div>
                                                </div>
                                                 <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/fitbit_light.png') }}?v=2.0"
                                                            alt="Fitbit logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/fitbit_dark.png') }}?v=2.0"
                                                            alt="Fitbit logo">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/nmims_light.png') }}?v=2.0"
                                                            alt="NMIMS logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/nmims_dark.png') }}?v=2.0"
                                                            alt="NMIMS logo">
                                                    </div>
                                                </div>
                                                 <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/jarry_logistics_light.png') }}?v=2.0"
                                                            alt="Jarry Logistics logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/jarry_logistics_dark.png') }}?v=2.0"
                                                            alt="Jarry Logistics logo">
                                                    </div>
                                                </div>
                                                 <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/bii-light.png') }}?v=2.0"
                                                            alt="BII logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/bii-dark.png') }}?v=2.0"
                                                            alt="BII logo">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4 mxd-clients__item mxd-grid-item animate-card-3">
                                                    <div class="mxd-clients__logo">
                                                        <img class="card-img clients_logo dark-image-logo"
                                                            src="{{ asset('img/clients-logo/dunya_light.png') }}?v=2.0"
                                                            alt="Dunya logo">
                                                        <img class="card-img clients_logo light-image-logo"
                                                            src="{{ asset('img/clients-logo/dunya_dark.png') }}?v=2.0"
                                                            alt="Dunya logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Block - Section Title v01 & Partners/Clients End -->

            </div>
        <!-- Section - Partners/Clients End -->

        <!-- Section - Parallax Divider Video Start -->
        <div class="mxd-section blur-section">
            <div class="mxd-container fullwidth-container">
                <div class="mxd-divider">
                    <div class="mxd-divider__video">
                        <video class="video parallax-video" preload="auto" autoplay muted loop playsinline
                            poster="{{ asset('video/1280x720_video-05.webp') }}">
                            <source type="video/mp4" src="{{ asset('video/1280x720_video-05.mp4') }}">
                            <source type="video/webm" src="{{ asset('video/1280x720_video-05.webm') }}">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section - Parallax Divider Video End -->


        {{--  --}}
        <div class="mxd-section blur-section ">
            <div class="mxd-container fullwidth-container">

                <div class="mxd-block">
                    <div class="mxd-promo transparent">
                        <div class="mxd-promo__wrap auto-height">

                            <!-- Block - Section Title v04 Start -->
                            <div class="mxd-block">
                                <div class="mxd-section-title pre-subtitle-s">
                                    <div class="p-0 container-fluid">
                                        <div class="container row g-0">
                                            <div class="col-12 col-xl-8 mxd-grid-item">
                                                <div class="mxd-section-title__title pre-caption">
                                                    <h2 class="reveal-type">Our featured<br>insights</h2>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-4 mxd-grid-item">
                                                <div class="mxd-section-title__data top-controls">
                                                    <div class="mxd-section-title__controls anim-uni-in-up">
                                                        <a class="btn btn-line btn-line-default"
                                                            href="{{ route('frontend.blog') }}">
                                                            <span class="btn-caption mxd-scramble">News Overview</span>
                                                        </a>
                                                    </div>
                                                    <div class="mxd-section-title__caption no-max-width pre-controls">
                                                        <p class="t-bold t-large mxd-split-lines">Inspiring ideas,
                                                            creative insights, and the latest in
                                                            design and tech. <span>Fueling innovation for your digital
                                                                journey.</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block - Section Title v04 End -->
                            <div class="my-5 ">
                                <!-- Block - Blog Preview Grid x3 Start -->
                                @include('frontend.blog-data', ['blogs' => $blogs])
                                <!-- Block - Blog Preview Grid x3 End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  --}}

        <!-- Section - Blog Preview Grid x3 Plus Title Start -->

        <!-- Section - Blog Preview Grid x3 Plus Title End -->

        <!-- Section - CTA with Marquee Start -->
        <div class="mxd-section blur-section bg-color-opposite">
            <div class="mxd-container fullwidth-container">

                <!-- Block - CTA with Matter.js Objects Start -->
                <div class="mxd-block">
                    <div class="mxd-promo transparent">
                        <div class="mxd-promo__wrap auto-height">
                            <!-- content -->
                            <div class="mxd-promo__content">
                                <div class="mxd-promo__btngroup anim-uni-in-up">
                                    <a class="btn btn-line btn-line-opposite" href="{{ route('frontend.contact') }}">
                                        <span class="btn-caption mxd-scramble">Write a line</span>
                                    </a>
                                </div>
                                <div class="mxd-promo__caption">
                                    <a class="active-cursor-accent" data-cursor-text="Contact Us"
                                        href="{{ route('frontend.contact') }}">
                                        <h2 class="reveal-type opposite">Let's talk about your project</h2>
                                    </a>
                                </div>
                            </div>
                            <!-- marquee -->
                            <div class="mxd-promo__marquee">

                                <!-- Marquee Divider Start -->
                                <div class="marquee marquee-left--gsap">
                                    <div class="marquee__toleft marquee__images">
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Photography</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_01.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">3D Models</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_02.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Development</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_03.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Illustrations</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_04.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Fashion</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_05.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Digital Art</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_06.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Packaging</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_07.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Motion</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_08.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Illustrations</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_09.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Video Production</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_10.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Photography</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_01.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">3D Models</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_02.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Development</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_03.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Illustrations</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_04.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium mxd-scramble">Fashion</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_05.webp') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Marquee Divider End -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block - CTA with Matter.js Objects End -->

            </div>
        </div>
        <!-- Section - CTA with Marquee End -->

        <!-- Section - Blog Preview Grid x3 Plus Title Start -->
        {{-- <div class="mxd-section blur-section pinned-section padding-top-title padding-bottom-preview">
            <div class="pinned-section__inner">
                <div class="mxd-container grid-l-container">

                    <!-- Block - Section Title v04 Start -->
                    <div class="mxd-block">
                        <div class="mxd-section-title pre-subtitle-s">
                            <div class="p-0 container-fluid">
                                <div class="row g-0">
                                    <div class="col-12 col-xl-8 mxd-grid-item">
                                        <div class="mxd-section-title__title pre-caption">
                                            <h2 class="reveal-type">Our featured<br>insights</h2>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-4 mxd-grid-item">
                                        <div class="mxd-section-title__data top-controls">
                                            <div class="mxd-section-title__controls anim-uni-in-up">
                                                <a class="btn btn-line btn-line-default"
                                                    href="{{ route('frontend.blog') }}">
                                                    <span class="btn-caption mxd-scramble">News Overview</span>
                                                </a>
                                            </div>
                                            <div class="mxd-section-title__caption no-max-width pre-controls">
                                                <p class="t-bold t-large mxd-split-lines">Inspiring ideas, creative
                                                    insights, and the latest in
                                                    design and tech. <span>Fueling innovation for your digital
                                                        journey.</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Block - Section Title v04 End -->

                    <!-- Block - Blog Preview Grid x3 Start -->
                    @include('frontend.blog-data', ['blogs' => $blogs])
                    <!-- Block - Blog Preview Grid x3 End -->

                </div>
                <div class="pinned-section__trigger"></div>
            </div>
        </div> --}}
        <!-- Section - Blog Preview Grid x3 Plus Title End -->

        <!-- Razorpay Checkout Modal Start -->
        <div id="rzpCheckoutModal" class="rzp-modal-overlay" style="display: none;">
            <div class="rzp-modal-container">
                <div class="rzp-modal-header">
                    <h3>Confirm Your Details</h3>
                    <button type="button" class="rzp-modal-close" onclick="closeRzpModal()">&times;</button>
                </div>
                <div class="rzp-modal-body">
                    <div class="rzp-package-summary">
                        <p>Selected Package: <strong id="summaryPackageName">-</strong></p>
                        <p>Billing Cycle: <strong id="summaryBillingCycle">-</strong></p>
                        <p>Total Price (incl. 18% tax): <strong id="summaryTotalPrice">-</strong></p>
                    </div>
                    <form id="rzpCheckoutForm">
                        <div class="rzp-form-group">
                            <label for="rzpCustName">Full Name *</label>
                            <input type="text" id="rzpCustName" required placeholder="Enter your full name">
                        </div>
                        <div class="rzp-form-group">
                            <label for="rzpCustEmail">Email Address *</label>
                            <input type="email" id="rzpCustEmail" required placeholder="Enter your email address">
                        </div>
                        <div class="rzp-form-group">
                            <label for="rzpCustConfirmEmail">Confirm Email Address *</label>
                            <input type="email" id="rzpCustConfirmEmail" required
                                placeholder="Confirm your email address">
                        </div>
                        <div class="rzp-form-group">
                            <label for="rzpCustWhatsappOnly">WhatsApp Contact Number *</label>
                            <div class="rzp-phone-input-wrapper" style="display: flex; gap: 8px;">
                                <select id="rzpCustCountryCode" required>
                                    <!-- Options will be populated dynamically via JavaScript -->
                                </select>
                                <input type="text" id="rzpCustWhatsappOnly" required placeholder="e.g. 9876543210" style="flex: 1;">
                            </div>
                            <input type="hidden" id="rzpCustWhatsapp">
                        </div>
                        <div class="rzp-error-message" id="rzpFormError" style="display: none;"></div>
                        <button type="submit" class="rzp-submit-btn" id="rzpSubmitBtn">Proceed to Pay</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Razorpay Checkout Modal End -->

        <style>
            .rzp-modal-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(15, 15, 15, 0.85);
                backdrop-filter: blur(8px);
                z-index: 99999;
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .rzp-modal-overlay.active {
                opacity: 1;
            }

            .rzp-modal-container {
                background: #181818;
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 16px;
                width: 90%;
                max-width: 500px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
                overflow: hidden;
                transform: translateY(20px);
                transition: transform 0.3s ease;
            }

            .rzp-modal-overlay.active .rzp-modal-container {
                transform: translateY(0);
            }

            .rzp-modal-header {
                padding: 20px 24px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.05);
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .rzp-modal-header h3 {
                margin: 0;
                font-size: 20px;
                font-weight: 600;
                color: #fff;
            }

            .rzp-modal-close {
                background: none;
                border: none;
                color: rgba(255, 255, 255, 0.5);
                font-size: 28px;
                cursor: pointer;
                line-height: 1;
                padding: 0;
                transition: color 0.2s ease;
            }

            .rzp-modal-close:hover {
                color: #fff;
            }

            .rzp-modal-body {
                padding: 24px;
            }

            .rzp-package-summary {
                background: rgba(255, 255, 255, 0.03);
                border-radius: 8px;
                padding: 16px;
                margin-bottom: 24px;
                border: 1px dashed rgba(255, 255, 255, 0.1);
            }

            .rzp-package-summary p {
                margin: 0 0 8px 0;
                font-size: 14px;
                color: rgba(255, 255, 255, 0.7);
            }

            .rzp-package-summary p:last-child {
                margin-bottom: 0;
            }

            .rzp-package-summary strong {
                color: #fff;
            }

            .rzp-form-group {
                margin-bottom: 20px;
            }

            .rzp-form-group label {
                display: block;
                margin-bottom: 8px;
                font-size: 13px;
                font-weight: 500;
                color: rgba(255, 255, 255, 0.6);
                text-align: left;
            }

            .rzp-form-group input {
                width: 100%;
                padding: 12px 16px;
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 8px;
                color: #fff;
                font-size: 14px;
                outline: none;
                transition: border-color 0.2s ease, box-shadow 0.2s ease;
            }

            .rzp-form-group input:focus {
                border-color: #ff5722;
                box-shadow: 0 0 0 3px rgba(255, 87, 34, 0.15);
            }

            #rzpCustCountryCode {
                width: 110px;
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 8px;
                color: #fff;
                font-size: 14px;
                padding: 12px 8px;
                outline: none;
                transition: border-color 0.2s ease, box-shadow 0.2s ease;
            }

            #rzpCustCountryCode:focus {
                border-color: #ff5722;
                box-shadow: 0 0 0 3px rgba(255, 87, 34, 0.15);
            }

            #rzpCustCountryCode option {
                background: #181818;
                color: #fff;
            }

            .rzp-error-message {
                color: #f44336;
                font-size: 13px;
                margin-bottom: 16px;
                background: rgba(244, 67, 54, 0.1);
                padding: 10px 14px;
                border-radius: 6px;
                border-left: 3px solid #f44336;
                text-align: left;
            }

            .rzp-submit-btn {
                width: 100%;
                padding: 14px;
                background: #ff5722;
                color: #fff;
                border: none;
                border-radius: 8px;
                font-size: 15px;
                font-weight: 600;
                cursor: pointer;
                transition: background 0.2s ease, transform 0.1s ease;
            }

            .rzp-submit-btn:hover {
                background: #e64a19;
            }

            .rzp-submit-btn:active {
                transform: scale(0.98);
            }

            .rzp-submit-btn:disabled {
                background: #555;
                color: #aaa;
                cursor: not-allowed;
            }
        </style>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    </main>


    <!-- Page Content End -->
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Read the exact attribute shown in your screenshot
            let themeColor = document.documentElement.getAttribute('color-scheme');

            console.log("Current Theme Color Mode:", themeColor);
            // This will now successfully print: "dark" (or "light" if switched)
        });



        const packagePrices = {
            'monthly': {
                'Basic': {
                    base: {{ $packages['Basic']->monthly_price ?? 48424.26 }},
                    display: '{{ format_price($packages['Basic']->monthly_price ?? 48424.26) }} / Monthly + 18% tax'
                },
                'Standard': {
                    base: {{ $packages['Standard']->monthly_price ?? 62951.54 }},
                    display: '{{ format_price($packages['Standard']->monthly_price ?? 62951.54) }} / Monthly + 18% tax'
                },
                'Gold': {
                    base: {{ $packages['Gold']->monthly_price ?? 87163.67 }},
                    display: '{{ format_price($packages['Gold']->monthly_price ?? 87163.67) }} / Monthly + 18% tax'
                },
                'Premium': {
                    base: {{ $packages['Premium']->monthly_price ?? 154957.63 }},
                    display: '{{ format_price($packages['Premium']->monthly_price ?? 154957.63) }} / Monthly + 18% tax'
                }
            },
            'yearly': {
                'Basic': {
                    base: {{ $packages['Basic']->yearly_price ?? 581091.11 }},
                    display: '{{ format_price($packages['Basic']->yearly_price ?? 581091.11) }} / Yearly + 18% tax'
                },
                'Standard': {
                    base: {{ $packages['Standard']->yearly_price ?? 755418.45 }},
                    display: '{{ format_price($packages['Standard']->yearly_price ?? 755418.45) }} / Yearly + 18% tax'
                },
                'Gold': {
                    base: {{ $packages['Gold']->yearly_price ?? 1045964.01 }},
                    display: '{{ format_price($packages['Gold']->yearly_price ?? 1045964.01) }} / Yearly + 18% tax'
                },
                'Premium': {
                    base: {{ $packages['Premium']->yearly_price ?? 1673542.41 }},
                    display: '{{ format_price($packages['Premium']->yearly_price ?? 1673542.41) }} / Yearly + 18% tax'
                }
            }
        };

        const userCountryCode =
            "{{ request()->ip() == '127.0.0.1' || request()->ip() == '::1' ? 'IN' : Cache::get('country_code_' . request()->ip()) ?? 'IN' }}";
        const isInternational = (userCountryCode !== 'IN');

        const countryDialCodes = {
            'AF': '+93', 'AL': '+355', 'DZ': '+213', 'AS': '+1-684', 'AD': '+376', 'AO': '+244',
            'AI': '+1-264', 'AQ': '+672', 'AG': '+1-268', 'AR': '+54', 'AM': '+374', 'AW': '+297',
            'AU': '+61', 'AT': '+43', 'AZ': '+994', 'BS': '+1-242', 'BH': '+973', 'BD': '+880',
            'BB': '+1-246', 'BY': '+375', 'BE': '+32', 'BZ': '+501', 'BJ': '+229', 'BM': '+1-441',
            'BT': '+975', 'BO': '+591', 'BA': '+387', 'BW': '+267', 'BR': '+55', 'IO': '+246',
            'VG': '+1-284', 'BN': '+673', 'BG': '+359', 'BF': '+226', 'BI': '+257', 'KH': '+855',
            'CM': '+237', 'CA': '+1', 'CV': '+238', 'KY': '+1-345', 'CF': '+236', 'TD': '+235',
            'CL': '+56', 'CN': '+86', 'CX': '+61', 'CC': '+61', 'CO': '+57', 'KM': '+269',
            'CK': '+682', 'CR': '+506', 'HR': '+385', 'CU': '+53', 'CW': '+599', 'CY': '+357',
            'CZ': '+420', 'CD': '+243', 'DK': '+45', 'DJ': '+253', 'DM': '+1-767', 'DO': '+1-809',
            'TL': '+670', 'EC': '+593', 'EG': '+20', 'SV': '+503', 'GQ': '+240', 'ER': '+291',
            'EE': '+372', 'ET': '+251', 'FK': '+500', 'FO': '+298', 'FJ': '+679', 'FI': '+358',
            'FR': '+33', 'PF': '+689', 'GA': '+241', 'GM': '+220', 'GE': '+995', 'DE': '+49',
            'GH': '+233', 'GI': '+350', 'GR': '+30', 'GL': '+299', 'GD': '+1-473', 'GU': '+1-671',
            'GT': '+502', 'GG': '+44', 'GN': '+224', 'GW': '+245', 'GY': '+592', 'HT': '+509',
            'HN': '+504', 'HK': '+852', 'HU': '+36', 'IS': '+354', 'IN': '+91', 'ID': '+62',
            'IR': '+98', 'IQ': '+964', 'IE': '+353', 'IM': '+44', 'IL': '+972', 'IT': '+39',
            'CI': '+225', 'JM': '+1-876', 'JP': '+81', 'JE': '+44', 'JO': '+962', 'KZ': '+7',
            'KE': '+254', 'KI': '+686', 'XK': '+383', 'KW': '+965', 'KG': '+996', 'LA': '+856',
            'LV': '+371', 'LB': '+961', 'LS': '+266', 'LR': '+231', 'LY': '+218', 'LI': '+423',
            'LT': '+370', 'LU': '+352', 'MO': '+853', 'MK': '+389', 'MG': '+261', 'MW': '+265',
            'MY': '+60', 'MV': '+960', 'ML': '+223', 'MT': '+356', 'MH': '+692', 'MR': '+222',
            'MU': '+230', 'YT': '+262', 'MX': '+52', 'FM': '+691', 'MD': '+373', 'MC': '+377',
            'MN': '+976', 'ME': '+382', 'MS': '+1-664', 'MA': '+212', 'MZ': '+258', 'MM': '+95',
            'NA': '+264', 'NR': '+674', 'NP': '+977', 'NL': '+31', 'AN': '+599', 'NC': '+687',
            'NZ': '+64', 'NI': '+505', 'NE': '+227', 'NG': '+234', 'NU': '+683', 'KP': '+850',
            'MP': '+1-670', 'NO': '+47', 'OM': '+968', 'PK': '+92', 'PW': '+680', 'PS': '+970',
            'PA': '+507', 'PG': '+675', 'PY': '+595', 'PE': '+51', 'PH': '+63', 'PN': '+64',
            'PL': '+48', 'PT': '+351', 'PR': '+1-787', 'QA': '+974', 'CG': '+242', 'RE': '+262',
            'RO': '+40', 'RU': '+7', 'RW': '+250', 'BL': '+590', 'SH': '+290', 'KN': '+1-869',
            'LC': '+1-758', 'MF': '+590', 'PM': '+508', 'VC': '+1-784', 'WS': '+685', 'SM': '+378',
            'ST': '+239', 'SA': '+966', 'SN': '+221', 'RS': '+381', 'SC': '+248', 'SL': '+232',
            'SG': '+65', 'SX': '+1-721', 'SK': '+421', 'SI': '+386', 'SB': '+677', 'SO': '+252',
            'ZA': '+27', 'KR': '+82', 'SS': '+211', 'ES': '+34', 'LK': '+94', 'SD': '+249',
            'SR': '+597', 'SZ': '+268', 'SE': '+46', 'CH': '+41', 'SY': '+963', 'TW': '+886',
            'TJ': '+992', 'TZ': '+255', 'TH': '+66', 'TG': '+228', 'TK': '+690', 'TO': '+676',
            'TT': '+1-868', 'TN': '+216', 'TR': '+90', 'TM': '+993', 'TC': '+1-649', 'TV': '+688',
            'UG': '+256', 'UA': '+380', 'AE': '+971', 'GB': '+44', 'US': '+1', 'UY': '+598',
            'VI': '+1-340', 'UZ': '+998', 'VU': '+678', 'VA': '+379', 'VE': '+58', 'VN': '+84',
            'WF': '+681', 'YE': '+967', 'ZM': '+260', 'ZW': '+263'
        };

        // Populate country code select dropdown dynamically and handle combination logic
        document.addEventListener('DOMContentLoaded', function() {
            const selectEl = $("#rzpCustCountryCode");
            if (selectEl.length) {
                // Sort country codes alphabetically
                const sortedCountries = Object.keys(countryDialCodes).sort();
                sortedCountries.forEach(code => {
                    const dial = countryDialCodes[code];
                    selectEl.append(`<option value="${dial}" ${code === userCountryCode ? 'selected' : ''}>${code} (${dial})</option>`);
                });
            }

            function updateWhatsappNumber() {
                const countryCode = $("#rzpCustCountryCode").val();
                const phoneNum = $("#rzpCustWhatsappOnly").val().trim();
                $("#rzpCustWhatsapp").val(countryCode + ' ' + phoneNum);
            }

            $(document).on("input", "#rzpCustWhatsappOnly", updateWhatsappNumber);
            $(document).on("change", "#rzpCustCountryCode", updateWhatsappNumber);
        });

        function getConvertedPrice(priceInInr) {
            if (isInternational) {
                return '$' + (priceInInr / 83).toLocaleString('en-US', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }
            return '₹' + priceInInr.toLocaleString('en-IN', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
        }

        function toggleBill(type) {

            if (type === 'monthwise') {

                $("#btnYearly").removeClass("btn-default-accent");

                $("#btnMonthly").addClass("btn-default-accent");

                $("#first-card-price").html(`
              <p class="pricing-header__title anim-uni-in-up" style="font-size:45px;">
               
                 
                   ${getConvertedPrice(packagePrices.monthly.Basic.base).replace(/,/g, '')}
                  <span class="pricing-data__period" id="spanbill1">
                      / Monthly + 18% tax
                  </span>

              </p>
          `);
                $("#second-card-price").html(`
              <p class="pricing-header__title anim-uni-in-up" style="font-size:45px;">
               ${getConvertedPrice(packagePrices.monthly.Standard.base).replace(/,/g, '')}  
                  <span class="pricing-data__period" id="spanbill1">
                      /monthly + 18% tax
                  </span>

              </p>
          `);
                $("#third-card-price").html(`
              <p class="pricing-header__title anim-uni-in-up" style="font-size:45px;">
               ${getConvertedPrice(packagePrices.monthly.Gold.base).replace(/,/g, '')}  
                  <span class="pricing-data__period" id="spanbill1">
                     /monthly +18% tax
                  </span>
              </p>

          `);
                $("#fourth-card-price").html(`
              <p class="pricing-header__title anim-uni-in-up" style="font-size:45px;">
                   ${getConvertedPrice(packagePrices.monthly.Premium.base).replace(/,/g, '')}
                  <span class="pricing-data__period" id="spanbill1">
                      /monthly +18% tax
                  </span>
              </p>

          `);



            } else if (type === 'yearwise') {

                $("#btnMonthly").removeClass("btn-default-accent");

                $("#btnYearly").addClass("btn-default-accent");

                $("#first-card-price").html(`
              <p class="pricing-header__title anim-uni-in-up" style="font-size:45px;">
                  ${getConvertedPrice(packagePrices.yearly.Basic.base).replace(/,/g, '')}  
                  <span class="pricing-data__period" id="spanbill1">
                      / Yearly + 18% tax
                  </span>
              </p>
          `);
                $("#second-card-price").html(`
              <p class="pricing-header__title anim-uni-in-up" style="font-size:45px;">
                 ${getConvertedPrice(packagePrices.yearly.Standard.base).replace(/,/g, '')} 
                  <span class="pricing-data__period" id="spanbill1">
                     /yearly + 18% tax
                  </span>
              </p>

          `);
                $("#third-card-price").html(`
              <p class="pricing-header__title anim-uni-in-up" style="font-size:45px;">
               ${getConvertedPrice(packagePrices.yearly.Gold.base).replace(/,/g, '')}
                  <span class="pricing-data__period" id="spanbill1">
                     /yearly +18% tax
                  </span>
              </p>

          `);
                $("#fourth-card-price").html(`
              <p class="pricing-header__title anim-uni-in-up" style="font-size:42px;">
                 ${getConvertedPrice(packagePrices.yearly.Premium.base).replace(/,/g, '')} 
                  <span class="pricing-data__period" id="spanbill1">
                     /yearly +18% tax
                  </span>
              </p>

          `);


            }
        }
    </script>

    <script>
        $(document).on("click", ".view-btn", function() {

            // toggle all extra contents
            $(".extra-content").toggleClass("d-none");

            // check state
            if ($(".extra-content").first().hasClass("d-none")) {

                // normal size
                $(".mxd-pricing-table__item").css({
                    "transform": "scale(1)",
                    "transition": "0.3s ease"
                });

                // all buttons text
                $(".view-btn").html('View More <span class="icon"></span>');

            } else {

                // scale all cards
                $(".mxd-pricing-table__item").css({
                    "transform": "scale(1.03)",
                    "transition": "0.3s ease"
                });

                // all buttons text
                $(".view-btn").html('View Less <span class="icon"></span>');
            }

        });
    </script>



    <script>
        // Razorpay Integration Logic
        let selectedPackage = '';
        let selectedBilling = '';

        $(document).on("click", ".buy-now-btn", function(e) {
            e.preventDefault();

            let billingType = $("#btnYearly").hasClass("btn-default-accent") ? 'yearly' : 'monthly';
            let packageName = $(this).data("package-name");
            let priceInfo = packagePrices[billingType][packageName];

            // Calculate display price dynamically including 18% tax to match the modal label and Razorpay checkout amount
            let totalPrice = priceInfo.base * 1.18;
            let calculatedDisplay = getConvertedPrice(totalPrice) + (billingType === 'monthly' ? ' / Monthly' :
                ' / Yearly');

            // Populate modal text
            $("#summaryPackageName").text(packageName);
            $("#summaryBillingCycle").text(billingType.charAt(0).toUpperCase() + billingType.slice(1));
            $("#summaryTotalPrice").text(calculatedDisplay);

            selectedPackage = packageName;
            selectedBilling = billingType;

            // Set default selected country code option
            const defaultDial = countryDialCodes[userCountryCode] || '+91';
            $("#rzpCustCountryCode").val(defaultDial);
            $("#rzpCustWhatsappOnly").val('');
            $("#rzpCustWhatsapp").val(defaultDial + ' ');

            // Open Modal with smooth transition
            $("#rzpFormError").hide().text("");
            $("#rzpCheckoutModal").show();
            setTimeout(function() {
                $("#rzpCheckoutModal").addClass("active");
            }, 10);
        });

        function closeRzpModal() {
            $("#rzpCheckoutModal").removeClass("active");
            setTimeout(function() {
                $("#rzpCheckoutModal").hide();
                // Clear the form data and errors
                $("#rzpCheckoutForm")[0].reset();
                const defaultDial = countryDialCodes[userCountryCode] || '+91';
                $("#rzpCustCountryCode").val(defaultDial);
                $("#rzpFormError").hide().text("");
            }, 300);
        }

        // Close on click outside modal container (Disabled as per user request: modal should only close via explicit close button)
        // $(document).on("click", "#rzpCheckoutModal", function(e) {
        //     if ($(e.target).hasClass("rzp-modal-overlay")) {
        //         closeRzpModal();
        //     }
        // });

        // Form Submission
        $("#rzpCheckoutForm").on("submit", function(e) {
            e.preventDefault();

            const name = $("#rzpCustName").val().trim();
            const email = $("#rzpCustEmail").val().trim();
            const confirmEmail = $("#rzpCustConfirmEmail").val().trim();
            const whatsapp = $("#rzpCustWhatsapp").val().trim();

            // Form validations
            if (email !== confirmEmail) {
                $("#rzpFormError").text("Confirm email address does not match email address.").show();
                return;
            }

            $("#rzpFormError").hide();
            const submitBtn = $("#rzpSubmitBtn");
            submitBtn.prop("disabled", true).text("Processing...");

            // Create Razorpay Order via AJAX
            $.ajax({
                url: "{{ route('razorpay.create-order') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    name: name,
                    email: email,
                    confirm_email: confirmEmail,
                    whatsapp_number: whatsapp,
                    package_name: selectedPackage,
                    package_type: selectedBilling,
                    package_price: packagePrices[selectedBilling][selectedPackage].base
                },
                success: function(res) {
                    // Close our custom modal first to prevent it from overlaying and blocking clicks on Razorpay popup
                    closeRzpModal();

                    // Launch Razorpay standard checkout popup
                    var options = {
                        "key": res.key_id,
                        "amount": res.amount,
                        "currency": res.currency,
                        "name": "Edion Web Technologies",
                        "description": res.package_name,
                        "order_id": res.razorpay_order_id,
                        "handler": function(paymentRes) {
                            // Verify signature
                            $.ajax({
                                url: "{{ route('razorpay.verify-payment') }}",
                                method: "POST",
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                        'content')
                                },
                                data: {
                                    razorpay_order_id: paymentRes.razorpay_order_id,
                                    razorpay_payment_id: paymentRes.razorpay_payment_id,
                                    razorpay_signature: paymentRes.razorpay_signature
                                },
                                success: function(verifyRes) {
                                    // Reset form
                                    $("#rzpCheckoutForm")[0].reset();
                                    submitBtn.prop("disabled", false).text(
                                        "Proceed to Pay");

                                    // Show premium success alert using SweetAlert2 (already loaded on page)
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Payment Successful!',
                                        text: 'Thank you for your purchase. Our team will contact you shortly on WhatsApp/Email.',
                                        confirmButtonColor: '#ff5722'
                                    });
                                },
                                error: function(xhr) {
                                    let errMsg = "Signature verification failed.";
                                    if (xhr.responseJSON && xhr.responseJSON
                                        .error) {
                                        errMsg = xhr.responseJSON.error;
                                    }
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Verification Failed',
                                        text: errMsg,
                                        confirmButtonColor: '#ff5722'
                                    });
                                    // Show our modal again on verification failure so they can try again
                                    $("#rzpCheckoutModal").show();
                                    setTimeout(function() {
                                        $("#rzpCheckoutModal").addClass("active");
                                    }, 10);
                                    submitBtn.prop("disabled", false).text(
                                        "Proceed to Pay");
                                }
                            });
                        },
                        "prefill": {
                            "name": res.name,
                            "email": res.email,
                            "contact": res.whatsapp_number
                        },
                        "theme": {
                            "color": "#ff5722"
                        },
                        "modal": {
                            "ondismiss": function() {
                                submitBtn.prop("disabled", false).text("Proceed to Pay");
                                // Show our modal again if they cancelled Razorpay payment
                                $("#rzpCheckoutModal").show();
                                setTimeout(function() {
                                    $("#rzpCheckoutModal").addClass("active");
                                }, 10);
                            }
                        }
                    };

                    var rzp = new Razorpay(options);
                    rzp.open();
                },
                error: function(xhr) {
                    let errMsg = "Failed to initiate payment. Please try again.";
                    if (xhr.responseJSON && xhr.responseJSON.error) {
                        errMsg = xhr.responseJSON.error;
                    } else if (xhr.responseJSON && xhr.responseJSON.message) {
                        errMsg = xhr.responseJSON.message;
                    }
                    $("#rzpFormError").text(errMsg).show();
                    submitBtn.prop("disabled", false).text("Proceed to Pay");
                }
            });
        });
    </script>







@endsection
