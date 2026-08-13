@extends('frontend.layouts.main')

{{-- @section( 'title',$headerdata->meta_title ?? 'FAQ from Edion Web Technologies') --}}

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'FAQ from Edion Web Technologies')
@section( 'description',!empty($headerdata->meta_description) ? $headerdata->meta_description : 'Edion Web Technologies is a leading technology company delivering innovative digital solutions.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'website development, digital marketing, SEO, web design, Edion Web Technologies')


@section('main-container')
    <!-- Page Content Start -->
    <main id="mxd-page-content" class="mxd-page-content inner-page-content">

        <!-- Blur Effect Start -->
        <div class="blur-container">
            <div class="blur-layer blur-1"></div>
            <div class="blur-layer blur-2"></div>
            <div class="blur-layer blur-3"></div>
            <div class="blur-layer blur-4"></div>
            <div class="blur-layer blur-5"></div>
            <div class="blur-layer blur-6"></div>
            <div class="blur-layer blur-7"></div>
            <div class="blur-layer blur-8"></div>
        </div>
        <!-- Blur Effect End -->

        <!-- Section - Inner Headline v04 Start -->
        <div class="mxd-section blur-section padding-bottom-default">
            <div class="mxd-container grid-l-container">

                <!-- Block - Inner Headline v04 Start -->
                <div class="mxd-block loading-wrap">
                    <div class="inner-headline">
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
                                            <span class="current-item">FAQ
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!-- content -->
                                           {{-- page title --}}
                    <h2 class="px-5 py-5 text-center">Frequently Asked Questions</h2>
                                    <div class="py-5">
                                        <div class="p-0 container-fluid">
                                            <div class="row g-0">
                                                <div class="col-12 col-xl-6 mxd-grid-item">
                                                    <div class="inner-headline__title pre-subtitle-medium">
                                                        <h1 class="medium loading-split">FAQ</h1>
                                                    </div>
                                                    <div class="inner-headline__subtitle">
                                                        <p class="loading-split">Everything <span>you need to know</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-6 mxd-grid-item">
                                                    <!-- split header caption -->
                                                    <div class="inner-headline__caption split-caption pre-grid">
                                                        <p class="t-bold t-large loading-split">Have questions? We've got
                                                            the answers!
                                                            Here, you'll find clear and concise information <span>about our
                                                                services,
                                                                process, and what to expect when working with us. If you
                                                                need more details,
                                                                feel free to reach out!</span>
                                                        </p>
                                                    </div>
                                                    <!-- split header grid block -->

                                                    <!-- Block - Accordion Start -->
                                                    <div class="mxd-accordion loading-fade">
                                                        <!-- accordion single item -->
                                                        @forelse ($faqs as $faq)
                                                            <div class="mxd-accordion__item">
                                                                <div class="mxd-accordion__divider anim-uni-in-up"></div>
                                                                <div class="mxd-accordion__title anim-uni-in-up">
                                                                    <p>{{ $faq->title }}</p>
                                                                    <div class="mxd-accordion__arrow">
                                                                        <i class="mxd-accordion__close">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="18" height="18" version="1.1"
                                                                                viewBox="0 0 18 18">
                                                                                <path
                                                                                    d="M3.6,0v3.6H0V0h3.6ZM18,18v-3.6h-3.6v3.6h3.6ZM14.4,7.2v-3.6h-3.6v3.6h-3.6v-3.6h-3.6v3.6h3.6v3.6h3.6v3.6h3.6v-3.6h-3.6v-3.6h3.6ZM18,0h-3.6v3.6h3.6V0ZM0,18h3.6v-3.6H0v3.6ZM3.6,14.4h3.6v-3.6h-3.6v3.6Z" />
                                                                            </svg>
                                                                        </i>
                                                                        <i class="mxd-accordion__plus">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="18" height="18" version="1.1"
                                                                                viewBox="0 0 18 18">
                                                                                <path
                                                                                    d="M18,7.2v3.6h-7.2v7.2h-3.6v-7.2H0v-3.6h7.2V0h3.6v7.2h7.2Z" />
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                </div>
                                                                <div class="mxd-accordion__content">
                                                                    <p class="t-medium mxd-accordion__text">{{$faq->description}}</p>
                                                                </div>
                                                                <div class="mxd-accordion__divider anim-uni-in-up"></div>
                                                            </div>
                                                        @empty
                                                            <div class="mxd-accordion__item">
                                                                <div class="mxd-accordion__divider anim-uni-in-up"></div>
                                                                <div class="mxd-accordion__title anim-uni-in-up">
                                                                    <p>No FAQs available at the moment.</p>
                                                                </div>
                                                                <div class="mxd-accordion__divider anim-uni-in-up"></div>
                                                            </div>
                                                        @endforelse

                                                     

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block - Inner Headline v04 End -->

            </div>
        </div>
        <!-- Section - Inner Headline v04 End -->



        <!-- Section - Blog Preview Grid x3 Plus Title Start -->
        <div class="mxd-section blur-section padding-top-title padding-bottom-preview">
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
                                            <a class="btn btn-line btn-line-default" href="#overviews">
                                                <span class="btn-caption mxd-scramble">News Overview</span>
                                            </a>
                                        </div>
                                        <div class="mxd-section-title__caption no-max-width pre-controls">
                                            <p class="t-bold t-large mxd-split-lines">Inspiring ideas, creative insights,
                                                <span>and the latest in design and tech.</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block - Section Title v04 End -->
<div id="overviews">
                <!-- Block - Blog Preview Grid x3 Start -->
                 @include('frontend.blog-data', ['blogs' => $blogs])
                <!-- Block - Blog Preview Grid x3 End -->
</div>
            </div>
        </div>
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
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">Photography</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_01.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">3D Models</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_02.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">Development</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_03.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span
                                                    class="tag tag-s tag-medium-opposite mxd-scramble">Illustrations</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_04.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">Fashion</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_05.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">Digital Art</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_06.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">Packaging</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_07.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">Motion</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_08.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span
                                                    class="tag tag-s tag-medium-opposite mxd-scramble">Illustrations</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_09.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">Video
                                                    Production</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_10.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">Photography</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_01.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">3D Models</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_02.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">Development</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_03.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span
                                                    class="tag tag-s tag-medium-opposite mxd-scramble">Illustrations</span>
                                            </div>
                                            <div class="marquee__image">
                                                <img src="{{ asset('img/cta/mar_04.webp') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- single item -->
                                        <div class="marquee__item item-imageblock">
                                            <div class="marquee__tags">
                                                <span class="tag tag-s tag-medium-opposite mxd-scramble">Fashion</span>
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

    </main>
    <!-- Page Content End -->
@endsection
