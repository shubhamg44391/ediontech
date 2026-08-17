@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Mobile app development for travel and tourism | Edion Web Technologies')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Mobile app development for travel and tourism businesses. Peak-season load is the engineering constraint that defines a travel build. We design for the busie')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'mobile app development for travel and tourism, travel and tourism mobile app development, mobile app development travel tourism, travel and tourism software company, mobile app development company')

@section('main-container')
<main id="main">
<a id="top"></a>

<section class="phero shell">
  <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ route('industry.detail', ['slug'=>'industries']) }}">Industries</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-for-travel-tourism']) }}">Travel and tourism</a></li><li aria-current="page"><b class="kw">Mobile app development</b></li></ol></nav>
  <span class="ind-badge" style="display:inline-flex">
    <img src="{{ asset('assets/frontend/img/industry/travel-tourism.svg') }}" alt="" width="34" height="34" loading="eager">
    <span>Travel and tourism</span></span>
  <h1 style="margin-top:var(--sp-4)">Mobile app development for travel and tourism</h1>
  <p class="lead">Native or cross-platform apps shipped to both stores and maintained after. This page covers what changes when the client is a travel and tourism business,
     and what we build first.</p>
  <div class="btn-row" style="margin-top:var(--sp-6)">
    <a class="btn btn--ink" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    <a class="btn btn--line" href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp us</a>
  </div>
</section>

<section class="band band--tight shell">
  <div class="lp-facts" data-reveal>
    <div class="lp-fact"><b>Travel</b><span>Sector experience</span></div>
    <div class="lp-fact"><b>You own it</b><span>Code and design files</span></div>
    <div class="lp-fact"><b>Weekly</b><span>Written progress updates</span></div>
  </div>
</section>

<section class="band shell">
  <div class="article">
    <div class="article__body"><h2>Why travel and tourism needs a different approach</h2><p>Travel businesses live or die on availability accuracy and confirmation speed. A booking that needs a follow-up call is a booking you may lose, and peak-season load arrives all at once.</p><h2>Mobile app development in this sector, specifically</h2><p>Peak-season load is the engineering constraint that defines a travel build. We design for the busiest hour rather than the average day, and we make booking degrade gracefully under load instead of timing out. <b class="kw2">Multi-currency</b> and instant confirmation are baseline, not extras.</p><h2>Where we start</h2><p>For travel and tourism projects the first release centres on <b class="kw2">real-time availability</b>, instant confirmation and multi-currency pricing. Those come first because they change how the business runs rather than how it looks. Visual refinement and secondary modules follow once the core is in real use, which is also when you learn which of them you actually need.</p><h2>How the engagement runs</h2><p>Weekly written updates, a staging URL open every day, and one accountable point of contact rather than a handoff chain. You review working software at each increment, so there is no reveal at the end where unpleasant surprises live.</p></div>
    <aside class="aside">
      <div class="card" style="padding:var(--sp-5)">
        <p class="card__idx">Free, 30 minutes</p>
        <h3 style="font-size:var(--fs-h4)">Scope this properly</h3>
        <p>Talk to an engineer, not a salesperson. Scope, timeline and budget in writing afterwards.</p>
        <a class="btn btn--signal" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}" style="justify-content:center">Book a call<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <div class="card" style="padding:var(--sp-5)">
        <p class="card__idx">Travel and tourism</p>
        <h3 style="font-size:var(--fs-h4)">All services for this sector</h3>
        <p>See every service we deliver to travel and tourism businesses.</p>
        <a class="btn btn--line" href="{{ route('industry.detail', ['slug'=>'software-for-travel-tourism']) }}" style="justify-content:center">View sector<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </aside>
  </div>
</section>

<section class="band band--tight shell">
  <div class="sec-head" data-reveal>
    <div><p class="eyebrow">Scope</p><h2>What mobile app development includes</h2>
      <p>Every item below is in the base engagement. Anything we would charge extra for is quoted
         before you sign.</p></div>
  </div>
  <ul class="feat" data-reveal
      style="columns:2;column-gap:var(--sp-7);max-width:70rem;font-size:var(--fs-body)"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Platform decision framed on your hiring market</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>iOS and Android build</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Offline tolerance and deferred sync</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Push notifications and deep linking</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>App store submission, including the first rejection</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Crash reporting and release pipeline</span></li></ul>
</section>

<section class="band band--ink">
  <div class="shell">
    <div class="sec-head" data-reveal>
      <div><p class="eyebrow">Questions</p><h2>Mobile app development for travel and tourism: common questions</h2></div>
    </div>
    <div class="acc" style="max-width:62rem;border-color:var(--ink-3)" data-reveal><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">How long does a build like this take?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>A focused first release is typically 3 to 4 months. Larger platforms run 6 months or more, and we say so before you sign rather than halfway through.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Do we own the code?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Yes, on final payment, written into the contract. You receive the repository, design sources, credentials and deployment documentation.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Can you work with our existing systems?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Usually. We start with a short technical review of what its API or export capability actually allows, then design the integration around that reality.</p></div></details></div>
  </div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection