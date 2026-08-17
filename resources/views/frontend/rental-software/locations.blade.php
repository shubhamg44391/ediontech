@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Locations | Software & Web Development Across 8 Countries | Edion')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Edion Web Technologies serves clients across India, the UAE, Saudi Arabia, Qatar, Kuwait, Bahrain, Jordan, the UK, Canada and the USA. Find your market.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'software development company locations, web development company India UAE Jordan, car rental software Gulf, software company Middle East')

@section('main-container')
<main id="main"><a id="top"></a>
<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">Locations</li></ol></nav>
 <p class="eyebrow">Locations</p>
 <h1 style="margin-top:var(--sp-4)">Eighteen markets, four working time zones.</h1>
 <p class="lead">
 Engineering sits in <span class="kw kw--loc">Lucknow</span>. Client-facing coverage runs <span class="kw kw--loc">Gulf</span>, <span class="kw kw--loc">Levant</span>, UK and North American
 hours. Pick your market for pricing currency, language support and local context.
 </p>
</section>
@include('frontend.partials.badgegrid')

<section class="band shell">
 <div class="linkmatrix" data-reveal><div>
 <p class="lbl">Gulf</p>
 <ul><li><a href="{{ url('/software-development-dubai') }}">Dubai, United Arab Emirates</a></li><li><a href="{{ url('/software-development-abu-dhabi') }}">Abu Dhabi, United Arab Emirates</a></li><li><a href="{{ url('/software-development-sharjah') }}">Sharjah, United Arab Emirates</a></li><li><a href="{{ url('/software-development-manama') }}">Manama, Bahrain</a></li><li><a href="{{ url('/software-development-riyadh') }}">Riyadh, Saudi Arabia</a></li><li><a href="{{ url('/software-development-jeddah') }}">Jeddah, Saudi Arabia</a></li><li><a href="{{ url('/software-development-doha') }}">Doha, Qatar</a></li><li><a href="{{ url('/software-development-kuwait-city') }}">Kuwait City, Kuwait</a></li></ul>
</div><div>
 <p class="lbl">Levant</p>
 <ul><li><a href="{{ url('/software-development-amman') }}">Amman, Jordan</a></li></ul>
</div><div>
 <p class="lbl">Europe</p>
 <ul><li><a href="{{ url('/software-development-london') }}">London, United Kingdom</a></li><li><a href="{{ url('/software-development-manchester') }}">Manchester, United Kingdom</a></li></ul>
</div><div>
 <p class="lbl">North America</p>
 <ul><li><a href="{{ url('/software-development-toronto') }}">Toronto, Canada</a></li><li><a href="{{ url('/software-development-new-york') }}">New York, United States</a></li></ul>
</div><div>
 <p class="lbl">India</p>
 <ul><li><a href="{{ url('/software-development-lucknow') }}">Lucknow, India</a></li><li><a href="{{ url('/software-development-delhi') }}">Delhi, India</a></li><li><a href="{{ url('/software-development-mumbai') }}">Mumbai, India</a></li><li><a href="{{ url('/software-development-bangalore') }}">Bangalore, India</a></li></ul>
</div></div>
</section>
<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Locations</p><h2>Four time zones, one delivery team.</h2>
 <p>Engineering sits in Lucknow. Client-facing coverage runs Gulf, Levant and North American hours.</p></div>
 <a class="btn btn--on-ink" href="{{ url('/locations') }}">All locations<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 <div class="offices" data-reveal><div class="office"><b>India</b><em>Head office &amp; engineering</em><span>4C 487, Sector 4, Gomti Nagar Extension<br>Lucknow, Uttar Pradesh 226010</span><span><a href="tel:+919696787596" style="color:var(--text-on-ink)">+91 96967 87596</a></span></div><div class="office"><b>United Arab Emirates</b><em>Client coverage</em><span>Dubai, Gulf delivery hours</span><span><a href="tel:+919696787596" style="color:var(--text-on-ink)">+91 96967 87596</a></span></div><div class="office"><b>Jordan</b><em>Client coverage</em><span>Amman, Levant delivery hours</span><span><a href="tel:+919696787596" style="color:var(--text-on-ink)">+91 96967 87596</a></span></div><div class="office"><b>United Kingdom</b><em>Client coverage</em><span>London, European delivery hours</span><span><a href="tel:+919696787596" style="color:var(--text-on-ink)">+91 96967 87596</a></span></div></div>
 </div>
</section>

<section class="band shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Services</p><h2>Available in every market</h2></div>
 </div>
 <div class="linkmatrix" data-reveal>
 <div><p class="lbl">Services</p><ul><li><a href="{{ url('/car-rental-software-development') }}">Car rental software development</a></li><li><a href="{{ url('/fleet-management-software') }}">Fleet management software</a></li><li><a href="{{ url('/car-rental-booking-engine') }}">Car rental booking engine</a></li><li><a href="{{ url('/vehicle-rental-app-development') }}">Vehicle rental app development</a></li><li><a href="{{ url('/chauffeur-limousine-booking-software') }}">Chauffeur and limousine booking software</a></li><li><a href="{{ url('/website-development') }}">Website development</a></li><li><a href="{{ url('/custom-software-development') }}">Custom software development</a></li><li><a href="{{ url('/mobile-app-development') }}">Mobile app development</a></li><li><a href="{{ url('/ecommerce-development') }}">E-commerce development</a></li><li><a href="{{ url('/seo-services') }}">SEO services</a></li><li><a href="{{ url('/local-seo-services') }}">Local SEO services</a></li><li><a href="{{ url('/ppc-advertising') }}">PPC advertising</a></li></ul></div>
 <div><p class="lbl">Industries</p><ul><li><a href="{{ url('/software-for-travel-tourism') }}">Travel and tourism</a></li><li><a href="{{ url('/software-for-hospitality') }}">Hospitality</a></li><li><a href="{{ url('/software-for-logistics') }}">Logistics and transport</a></li><li><a href="{{ url('/software-for-healthcare') }}">Healthcare</a></li><li><a href="{{ url('/software-for-real-estate') }}">Real estate</a></li><li><a href="{{ url('/software-for-education') }}">Education</a></li><li><a href="{{ url('/software-for-ecommerce-retail') }}">E-commerce and retail</a></li><li><a href="{{ url('/software-for-automotive') }}">Automotive</a></li></ul></div>
 <div><p class="lbl">Tools</p><ul>
 <li><a href="{{ url('/rental-software-cost-calculator') }}">Rental software cost calculator</a></li>
 <li><a href="{{ url('/seo-package') }}">SEO pricing</a></li>
 <li><a href="{{ url('/free-consultation') }}">Free consultation</a></li></ul></div>
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