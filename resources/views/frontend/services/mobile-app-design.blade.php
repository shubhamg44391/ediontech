@extends('frontend.layouts.app')

@section('title', 'Mobile app design | Edion Web Technologies')
@section('description', 'iOS and Android patterns followed rather than fought, so your app feels native to the phone it is running on.')
@section('keywords', 'mobile app design, mobile app design, Edion Web Technologies')

@section('main-container')
<main id="main"><a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">Mobile app design</li></ol></nav>
 <p class="eyebrow">Design</p>
 <h1 style="margin-top:var(--sp-4)">App design that respects platform conventions</h1>
 <p class="lead">iOS and Android patterns followed rather than fought, so your app feels native to the phone it is running on.</p>
 <div class="btn-row" style="margin-top:var(--sp-6)">
 <a class="btn btn--ink" href="{{ url('/free-consultation') }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 <a class="btn btn--line" href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp us</a>
 </div>
</section>

@include('frontend.partials.badgegrid')


<section class="band band--tight shell">
 <div class="lp-facts" data-reveal><div class="lp-fact"><b>Native feel</b><span>Platform patterns respected</span></div><div class="lp-fact"><b>Thumb-tested</b><span>Real device sizes</span></div><div class="lp-fact"><b>Prototyped</b><span>Clickable before build</span></div></div>
</section>

<section class="band band--tight shell">
 <figure class="figure figure--bleed" data-reveal>
 <img src="{{ asset('assets/frontend/img/art/pipeline.svg') }}" alt="" width="800" height="560" loading="lazy" decoding="async">
 </figure>
</section>

<section class="band shell">
 <div class="article">
 <div class="article__body"><h2>Platform conventions are free usability</h2><p>Users already know how their phone works. Inventing new navigation costs you comprehension for no gain.</p><h2>Designed for thumbs</h2><p>Reach zones, tap target sizes and one-handed operation, tested on real device sizes rather than a desktop browser window.</p></div>
 <aside class="aside">
 <div class="card" style="padding:var(--sp-5)">
 <p class="card__idx">Free, 30 minutes</p>
 <h3 style="font-size:var(--fs-h4)">Get a real number</h3>
 <p>Talk to an engineer, not a salesperson. Scope, timeline and budget in writing afterwards.</p>
 <a class="btn btn--signal" href="{{ url('/free-consultation') }}" style="justify-content:center">Book a call<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 <div class="card" style="padding:var(--sp-5)">
 <p class="card__idx">Free tool</p>
 <h3 style="font-size:var(--fs-h4)">Cost calculator</h3>
 <p>Estimate a rental platform build by module. No email required.</p>
 <a class="btn btn--line" href="{{ url('/rental-software-cost-calculator') }}"
 style="justify-content:center">Open it<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 </aside>
 </div>
</section>

<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Related</p><h2>Other design work</h2></div>
 </div>
 <div class="linkmatrix" data-reveal>
 <div><p class="lbl">Design</p><ul><li><a href="{{ url('/website-design') }}">Website design</a></li><li><a href="{{ url('/logo-branding') }}">Logo and branding</a></li><li><a href="{{ url('/ui-ux-design') }}">UI/UX design</a></li></ul></div>
 <div><p class="lbl">By market</p><ul><li><a href="{{ url('/locations') }}">All locations</a></li></ul></div>
 <div><p class="lbl">By industry</p><ul><li><a href="{{ url('/services') }}">All services</a></li></ul></div>
 </div>
 </div>
</section>

<section class="band band--tight band--ink">
 <div class="shell">
 <p class="eyebrow" style="margin-bottom:var(--sp-6)">Explore everything we do</p>
 <div class="linkmatrix"><div><p class="lbl">Rental software</p><ul><li><a href="{{ url('/car-rental-software-development') }}">Car rental software development</a></li><li><a href="{{ url('/fleet-management-software') }}">Fleet management software</a></li><li><a href="{{ url('/car-rental-booking-engine') }}">Car rental booking engine</a></li><li><a href="{{ url('/vehicle-rental-app-development') }}">Vehicle rental app development</a></li><li><a href="{{ url('/chauffeur-limousine-booking-software') }}">Chauffeur &amp; limousine software</a></li><li><a href="{{ url('/rental-pricing-engine') }}">Dynamic pricing engine</a></li><li><a href="{{ url('/telematics-integration') }}">Telematics integration</a></li><li><a href="{{ url('/damage-inspection-module') }}">Damage &amp; inspection capture</a></li><li><a href="{{ url('/corporate-accounts-billing') }}">Corporate accounts &amp; billing</a></li><li><a href="{{ url('/car-rental-software-development-dubai') }}">Rental software in Dubai</a></li><li><a href="{{ url('/car-rental-software-development-amman') }}">Rental software in Amman</a></li><li><a href="{{ url('/car-rental-software-development-riyadh') }}">Rental software in Riyadh</a></li><li><a href="{{ url('/locations') }}">All locations</a></li></ul></div><div><p class="lbl">Services</p><ul><li><a href="{{ url('/website-development') }}">Website development</a></li><li><a href="{{ url('/custom-software-development') }}">Custom software</a></li><li><a href="{{ url('/mobile-app-development') }}">Mobile app development</a></li><li><a href="{{ url('/ecommerce-development') }}">E-commerce development</a></li><li><a href="{{ url('/cms-development') }}">CMS development</a></li><li><a href="{{ url('/website-design') }}">Website design</a></li><li><a href="{{ url('/logo-branding') }}">Logo &amp; branding</a></li><li><a href="{{ url('/mobile-app-design') }}">Mobile app design</a></li><li><a href="{{ url('/ui-ux-design') }}">UI/UX design</a></li><li><a href="{{ url('/ai-development') }}">AI &amp; machine learning</a></li><li><a href="{{ url('/cloud-solutions') }}">Cloud solutions</a></li><li><a href="{{ url('/iot-solutions') }}">IoT solutions</a></li><li><a href="{{ url('/big-data-analytics') }}">Big data analytics</a></li></ul></div><div><p class="lbl">SEO &amp; marketing</p><ul><li><a href="{{ url('/seo-services') }}">SEO services</a></li><li><a href="{{ url('/local-seo-services') }}">Local SEO</a></li><li><a href="{{ url('/technical-seo-audit') }}">Technical SEO audit</a></li><li><a href="{{ url('/ecommerce-seo') }}">E-commerce SEO</a></li><li><a href="{{ url('/link-building-services') }}">Link building</a></li><li><a href="{{ url('/ppc-advertising') }}">Google Ads / PPC</a></li><li><a href="{{ url('/social-media-marketing') }}">Social media marketing</a></li><li><a href="{{ url('/content-marketing') }}">Content marketing</a></li><li><a href="{{ url('/email-marketing') }}">Email marketing</a></li><li><a href="{{ url('/ai-search-optimisation') }}">AI search optimisation</a></li><li><a href="{{ url('/answer-engine-optimisation') }}">Answer engine optimisation</a></li><li><a href="{{ url('/ai-assistant-visibility') }}">ChatGPT &amp; Perplexity visibility</a></li></ul></div><div><p class="lbl">Resources</p><ul><li><a href="{{ url('/blog') }}">Insights</a></li><li><a href="{{ url('/works') }}">Case studies</a></li><li><a href="{{ url('/faq') }}">FAQ</a></li><li><a href="{{ url('/glossary') }}">Glossary</a></li><li><a href="{{ url('/rental-software-cost-calculator') }}">Rental software cost calculator</a></li><li><a href="{{ url('/free-consultation') }}">Free website audit</a></li><li><a href="{{ url('/industries') }}">Industries</a></li><li><a href="{{ url('/about') }}">About us</a></li><li><a href="{{ url('/certifications') }}">Certifications &amp; partners</a></li><li><a href="{{ url('/locations') }}">Locations</a></li><li><a href="{{ url('/contact') }}">Contact</a></li></ul></div></div>
 </div>
</section>


</main>
@endsection