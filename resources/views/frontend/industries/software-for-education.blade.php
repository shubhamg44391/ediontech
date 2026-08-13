@extends('frontend.layouts.app')

@section('title', 'Software Development for Education | Edion Web Technologies')
@section('description', 'Custom software, web and mobile development for education businesses. Institutions have seasonal admission peaks and a mix of public-facing and internal adminis')
@section('keywords', 'software for education, education software development, education web development')

@section('main-container')
<main id="main">
<a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ url('/services') }}">Industries</a></li><li aria-current="page">Education</li></ol></nav>
 <span class="ind-badge" style="display:inline-flex"><img class="" src="{{ asset('assets/frontend/img/industry/education.svg') }}" alt="" width="34" height="34" loading="lazy" decoding="async"><span>Education</span></span>
 <h1 style="margin-top:var(--sp-4)">Software for education</h1>
 <p class="lead">What education businesses actually need from a software partner, and how we sequence a first release so the capabilities that change operations arrive before the ones that change appearance.</p>
 <div class="btn-row" style="margin-top:var(--sp-6)">
 <a class="btn btn--ink" href="{{ url('/free-consultation') }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 <a class="btn btn--line" href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp us</a>
 </div>
</section>

@include('frontend.partials.badgegrid')


<section class="band band--tight shell">
 <div class="lp-facts" data-reveal><div class="lp-fact"><b>First release</b><span>Scoped to what changes operations</span></div><div class="lp-fact"><b>You own it</b><span>Code and design files</span></div><div class="lp-fact"><b>Documented</b><span>Handover for your next developer</span></div></div>
</section>



<section class="band shell">
 <div class="article">
 <div class="article__body"><h2>What education businesses need first</h2><p>Institutions have seasonal admission peaks and a mix of public-facing and internal administrative systems that rarely talk to each other.</p><h2>Where we start</h2><p>Typically: admissions workflow, seasonal capacity, integration with student records. Those come first because they change how the business runs. Visual refinement follows.</p><h2>Why sequencing matters more than scope</h2><p>The modules specified in month one and the modules used in month eighteen are rarely the same list. Shipping a narrow first release and then extending consistently beats specifying everything up front.</p></div>
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
 <div><p class="eyebrow">Services</p><h2>For education</h2></div>
 </div>
 <div class="linkmatrix" data-reveal>
 <div><p class="lbl">Services</p><ul><li><a href="{{ url('/website-development-for-education') }}">Website development</a></li><li><a href="{{ url('/website-design-for-education') }}">Website design</a></li><li><a href="{{ url('/custom-software-development-for-education') }}">Custom software development</a></li><li><a href="{{ url('/mobile-app-development-for-education') }}">Mobile app development</a></li><li><a href="{{ url('/ecommerce-development-for-education') }}">E-commerce development</a></li><li><a href="{{ url('/seo-services-for-education') }}">SEO services</a></li><li><a href="{{ url('/local-seo-services-for-education') }}">Local SEO services</a></li><li><a href="{{ url('/technical-seo-audit-for-education') }}">Technical SEO audit</a></li><li><a href="{{ url('/ppc-advertising-for-education') }}">PPC advertising</a></li></ul></div>
 <div><p class="lbl">Other industries</p><ul><li><a href="{{ url('/software-for-travel-tourism') }}">Travel and tourism</a></li><li><a href="{{ url('/software-for-hospitality') }}">Hospitality</a></li><li><a href="{{ url('/software-for-logistics') }}">Logistics and transport</a></li><li><a href="{{ url('/software-for-healthcare') }}">Healthcare</a></li><li><a href="{{ url('/software-for-real-estate') }}">Real estate</a></li><li><a href="{{ url('/software-for-ecommerce-retail') }}">E-commerce and retail</a></li><li><a href="{{ url('/software-for-automotive') }}">Automotive</a></li></ul></div>
 <div><p class="lbl">Tools</p><ul>
 <li><a href="{{ url('/rental-software-cost-calculator') }}">Cost calculator</a></li>
 <li><a href="{{ url('/free-consultation') }}">Free consultation</a></li></ul></div>
 </div>
 </div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection