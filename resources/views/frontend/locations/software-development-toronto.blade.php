@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Software & Web Development in Toronto, Canada | Edion')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Software, web, mobile and SEO services for businesses in Toronto, Canada. Car rental and fleet platforms a speciality.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'software development toronto, web development toronto, seo services toronto, app development toronto')

@section('main-container')
<main id="main">
<a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ route('industry.detail', ['slug'=>'locations']) }}">Locations</a></li><li aria-current="page">Toronto</li></ol></nav>
 <p class="eyebrow">Canada &middot; North America</p>
 <h1 style="margin-top:var(--sp-4)">Software and web development in Toronto</h1>
 <p class="lead">We build software, websites, apps and growth campaigns for businesses in <span class="kw kw--loc">Toronto</span> and across Canada. Car rental and fleet platforms are our deepest specialism.</p>
 <div class="btn-row" style="margin-top:var(--sp-6)">
 <a class="btn btn--ink" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 <a class="btn btn--line" href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp us</a>
 </div>
</section>

@include('frontend.partials.badgegrid')


<section class="band band--tight shell">
 <div class="lp-facts" data-reveal><div class="lp-fact"><b>CAD</b><span>Quoting currency available</span></div><div class="lp-fact"><b>ET</b><span>Working-hours overlap</span></div><div class="lp-fact"><b>English</b><span>Interface language supported</span></div></div>
</section>



<section class="band shell">
 <div class="article">
 <div class="article__body"><h2>The <span class="kw kw--loc">Toronto</span> market</h2><p>Canadian operators often need bilingual English and French interfaces, and provincial differences affect contract and tax handling.</p><h2>What changes when you build for Canada</h2><p>Bilingual content and provincial tax configuration should be scoped in from the start rather than retrofitted.</p><h2>How we work with clients here</h2><p>Weekly written updates, a staging URL open at all times, and hours that overlap ET. You <b class="kw3">own the code</b> and design files on final payment, and we document the handover for whoever maintains it next.</p></div>
 <aside class="aside">
 <div class="card" style="padding:var(--sp-5)">
 <p class="card__idx">Free, 30 minutes</p>
 <h3 style="font-size:var(--fs-h4)">Get a real number</h3>
 <p>Talk to an engineer, not a salesperson. Scope, timeline and budget in writing afterwards.</p>
 <a class="btn btn--signal" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}" style="justify-content:center">Book a call<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 <div class="card" style="padding:var(--sp-5)">
 <p class="card__idx">Free tool</p>
 <h3 style="font-size:var(--fs-h4)">Cost calculator</h3>
 <p>Estimate a rental platform build by module. No email required.</p>
 <a class="btn btn--line" href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}"
 style="justify-content:center">Open it<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 </aside>
 </div>
</section>


<section class="band shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Services</p><h2>What we deliver in Toronto</h2></div>
 </div>
 <div class="linkmatrix" data-reveal>
 <div><p class="lbl">All services in Toronto</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-software-development-toronto']) }}">Car rental software development in Toronto</a></li><li><a href="{{ route('industry.detail', ['slug'=>'fleet-management-software-toronto']) }}">Fleet management software in Toronto</a></li><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-booking-engine-toronto']) }}">Car rental booking engine in Toronto</a></li><li><a href="{{ route('industry.detail', ['slug'=>'vehicle-rental-app-development-toronto']) }}">Vehicle rental app development in Toronto</a></li><li><a href="{{ route('industry.detail', ['slug'=>'chauffeur-limousine-booking-software-toronto']) }}">Chauffeur and limousine booking software in Toronto</a></li><li><a href="{{ route('industry.detail', ['slug'=>'website-development-toronto']) }}">Website development in Toronto</a></li><li><a href="{{ route('industry.detail', ['slug'=>'custom-software-development-toronto']) }}">Custom software development in Toronto</a></li><li><a href="{{ route('industry.detail', ['slug'=>'mobile-app-development-toronto']) }}">Mobile app development in Toronto</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ecommerce-development-toronto']) }}">E-commerce development in Toronto</a></li><li><a href="{{ route('industry.detail', ['slug'=>'seo-services-toronto']) }}">SEO services in Toronto</a></li><li><a href="{{ route('industry.detail', ['slug'=>'local-seo-services-toronto']) }}">Local SEO services in Toronto</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ppc-advertising-toronto']) }}">PPC advertising in Toronto</a></li></ul></div>
 <div><p class="lbl">Other North America markets</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'software-development-new-york']) }}">New York</a></li></ul></div>
 <div><p class="lbl">Tools</p><ul>
 <li><a href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}">Rental software cost calculator</a></li>
 <li><a href="{{ route('industry.detail', ['slug'=>'pricing']) }}">SEO pricing</a></li></ul></div>
 </div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection