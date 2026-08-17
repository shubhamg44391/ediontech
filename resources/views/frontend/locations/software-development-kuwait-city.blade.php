@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Software & Web Development in Kuwait City, Kuwait | Edion')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Software, web, mobile and SEO services for businesses in Kuwait City, Kuwait. Car rental and fleet platforms a speciality.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'software development kuwait city, web development kuwait city, seo services kuwait city, app development kuwait city')

@section('main-container')
<main id="main">
<a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ route('industry.detail', ['slug'=>'locations']) }}">Locations</a></li><li aria-current="page">Kuwait City</li></ol></nav>
 <p class="eyebrow">Kuwait &middot; Gulf</p>
 <h1 style="margin-top:var(--sp-4)">Software and web development in Kuwait City</h1>
 <p class="lead">We build software, websites, apps and growth campaigns for businesses in <span class="kw kw--loc">Kuwait City</span> and across <span class="kw kw--loc">Kuwait</span>. Car rental and fleet platforms are our deepest specialism.</p>
 <div class="btn-row" style="margin-top:var(--sp-6)">
 <a class="btn btn--ink" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 <a class="btn btn--line" href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp us</a>
 </div>
</section>

@include('frontend.partials.badgegrid')


<section class="band band--tight shell">
 <div class="lp-facts" data-reveal><div class="lp-fact"><b>KWD</b><span>Quoting currency available</span></div><div class="lp-fact"><b>AST</b><span>Working-hours overlap</span></div><div class="lp-fact"><b>Arabic</b><span>Interface language supported</span></div></div>
</section>



<section class="band shell">
 <div class="article">
 <div class="article__body"><h2>The <span class="kw kw--loc">Kuwait City</span> market</h2><p><span class="kw kw--loc">Kuwait</span> has high vehicle ownership, which shifts rental demand towards replacement hire, long-term lease and corporate fleets rather than tourism.</p><h2>What changes when you build for Kuwait</h2><p>Long-term lease handling and replacement-vehicle workflows are the differentiators.</p><h2>How we work with clients here</h2><p>Weekly written updates, a staging URL open at all times, and hours that overlap AST (UTC+<span class="kw kw--num">3</span>). You <b class="kw3">own the code</b> and design files on final payment, and we document the handover for whoever maintains it next.</p></div>
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
 <div><p class="eyebrow">Services</p><h2>What we deliver in Kuwait City</h2></div>
 </div>
 <div class="linkmatrix" data-reveal>
 <div><p class="lbl">All services in Kuwait City</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-software-development-kuwait-city']) }}">Car rental software development in Kuwait City</a></li><li><a href="{{ route('industry.detail', ['slug'=>'fleet-management-software-kuwait-city']) }}">Fleet management software in Kuwait City</a></li><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-booking-engine-kuwait-city']) }}">Car rental booking engine in Kuwait City</a></li><li><a href="{{ route('industry.detail', ['slug'=>'vehicle-rental-app-development-kuwait-city']) }}">Vehicle rental app development in Kuwait City</a></li><li><a href="{{ route('industry.detail', ['slug'=>'chauffeur-limousine-booking-software-kuwait-city']) }}">Chauffeur and limousine booking software in Kuwait City</a></li><li><a href="{{ route('industry.detail', ['slug'=>'website-development-kuwait-city']) }}">Website development in Kuwait City</a></li><li><a href="{{ route('industry.detail', ['slug'=>'custom-software-development-kuwait-city']) }}">Custom software development in Kuwait City</a></li><li><a href="{{ route('industry.detail', ['slug'=>'mobile-app-development-kuwait-city']) }}">Mobile app development in Kuwait City</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ecommerce-development-kuwait-city']) }}">E-commerce development in Kuwait City</a></li><li><a href="{{ route('industry.detail', ['slug'=>'seo-services-kuwait-city']) }}">SEO services in Kuwait City</a></li><li><a href="{{ route('industry.detail', ['slug'=>'local-seo-services-kuwait-city']) }}">Local SEO services in Kuwait City</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ppc-advertising-kuwait-city']) }}">PPC advertising in Kuwait City</a></li></ul></div>
 <div><p class="lbl">Other Gulf markets</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'software-development-dubai']) }}">Dubai</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-abu-dhabi']) }}">Abu Dhabi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-sharjah']) }}">Sharjah</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-manama']) }}">Manama</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-riyadh']) }}">Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-jeddah']) }}">Jeddah</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-doha']) }}">Doha</a></li></ul></div>
 <div><p class="lbl">Tools</p><ul>
 <li><a href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}">Rental software cost calculator</a></li>
 <li><a href="{{ route('industry.detail', ['slug'=>'pricing']) }}">SEO pricing</a></li></ul></div>
 </div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection