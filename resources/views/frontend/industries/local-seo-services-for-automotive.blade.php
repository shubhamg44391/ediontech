@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Local SEO services for automotive | Edion Web Technologies')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Local SEO services for automotive businesses. Automotive search is make, model and location specific, with high intent and heavy local competition. Inventory')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'local seo services for automotive, automotive local seo services, local seo services automotive, automotive software company, local seo services company')

@section('main-container')
<main id="main">
<a id="top"></a>

<section class="phero shell">
  <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ route('industry.detail', ['slug'=>'industries']) }}">Industries</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-for-automotive']) }}">Automotive</a></li><li aria-current="page"><b class="kw">Local <b class="kw">SEO services</b></b></li></ol></nav>
  <span class="ind-badge" style="display:inline-flex">
    <img src="{{ asset('assets/frontend/img/industry/automotive.svg') }}" alt="" width="34" height="34" loading="eager">
    <span>Automotive</span></span>
  <h1 style="margin-top:var(--sp-4)">Local SEO services for automotive</h1>
  <p class="lead"><b class="kw2">Google Business Profile</b>, citations and reviews for businesses that need the phone to ring. This page covers what changes when the client is a automotive business,
     and what we build first.</p>
  <div class="btn-row" style="margin-top:var(--sp-6)">
    <a class="btn btn--ink" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    <a class="btn btn--line" href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp us</a>
  </div>
</section>

<section class="band band--tight shell">
  <div class="lp-facts" data-reveal>
    <div class="lp-fact"><b>Automotive</b><span>Sector experience</span></div>
    <div class="lp-fact"><b>You own it</b><span>Code and design files</span></div>
    <div class="lp-fact"><b>Weekly</b><span>Written progress updates</span></div>
  </div>
</section>

<section class="band shell">
  <div class="article">
    <div class="article__body"><h2>Why automotive needs a different approach</h2><p>Dealers and workshops need booking, inventory and service history in one place, and almost always have a legacy system that cannot simply be switched off.</p><h2>Local SEO services in this sector, specifically</h2><p>Automotive search is make, model and location specific, with high intent and heavy local competition. Inventory pages need <b class="kw2">structured data</b> and fast indexation, because stock turns over faster than Google recrawls by default.</p><h2>Where we start</h2><p>For automotive projects the first release centres on service booking, inventory sync and legacy dealer-system integration. Those come first because they change how the business runs rather than how it looks. Visual refinement and secondary modules follow once the core is in real use, which is also when you learn which of them you actually need.</p><h2>How the engagement runs</h2><p>Weekly written updates, a staging URL open every day, and one accountable point of contact rather than a handoff chain. You review working software at each increment, so there is no reveal at the end where unpleasant surprises live.</p></div>
    <aside class="aside">
      <div class="card" style="padding:var(--sp-5)">
        <p class="card__idx">Free, 30 minutes</p>
        <h3 style="font-size:var(--fs-h4)">Scope this properly</h3>
        <p>Talk to an engineer, not a salesperson. Scope, timeline and budget in writing afterwards.</p>
        <a class="btn btn--signal" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}" style="justify-content:center">Book a call<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <div class="card" style="padding:var(--sp-5)">
        <p class="card__idx">Automotive</p>
        <h3 style="font-size:var(--fs-h4)">All services for this sector</h3>
        <p>See every service we deliver to automotive businesses.</p>
        <a class="btn btn--line" href="{{ route('industry.detail', ['slug'=>'software-for-automotive']) }}" style="justify-content:center">View sector<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </aside>
  </div>
</section>

<section class="band band--tight shell">
  <div class="sec-head" data-reveal>
    <div><p class="eyebrow">Scope</p><h2>What local seo services includes</h2>
      <p>Every item below is in the base engagement. Anything we would charge extra for is quoted
         before you sign.</p></div>
  </div>
  <ul class="feat" data-reveal
      style="columns:2;column-gap:var(--sp-7);max-width:70rem;font-size:var(--fs-body)"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Google Business Profile optimisation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b class="kw2">NAP consistency</b> audit across every listing</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Local citation building and cleanup</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Review generation flow</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Location landing pages</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Local pack rank tracking</span></li></ul>
</section>

<section class="band band--ink">
  <div class="shell">
    <div class="sec-head" data-reveal>
      <div><p class="eyebrow">Questions</p><h2>Local SEO services for automotive: common questions</h2></div>
    </div>
    <div class="acc" style="max-width:62rem;border-color:var(--ink-3)" data-reveal><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">How long before we see results?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Three to six months for meaningful movement on competitive terms, longer on a new domain. Technical fixes can show within weeks. We report monthly from month one.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Do you guarantee rankings?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>No, and be cautious of anyone who does. We commit to a defined volume of work, white-hat methods and transparent measurement.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">What does it cost?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Packages are published on our <a href="{{ route('industry.detail', ['slug'=>'pricing']) }}">pricing page</a> from $361.45 per month, with the full scope of each tier listed including exclusions.</p></div></details></div>
  </div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection