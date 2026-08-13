@extends('frontend.layouts.app')

@section('title', 'PPC advertising for education | Edion Web Technologies')
@section('description', 'PPC advertising for education businesses. Admissions campaigns are calendar-locked, so there is no room to learn slowly. We build the measurement and creativ')
@section('keywords', 'ppc advertising for education, education ppc advertising, ppc advertising education, education software company, ppc advertising company')

@section('main-container')
<main id="main">
<a id="top"></a>

<section class="phero shell">
  <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ url('/industries') }}">Industries</a></li><li><a href="{{ url('/software-for-education') }}">Education</a></li><li aria-current="page"><b class="kw">PPC advertising</b></li></ol></nav>
  <span class="ind-badge" style="display:inline-flex">
    <img src="{{ asset('assets/frontend/img/industry/education.svg') }}" alt="" width="34" height="34" loading="eager">
    <span>Education</span></span>
  <h1 style="margin-top:var(--sp-4)">PPC advertising for education</h1>
  <p class="lead">Paid search managed against profit rather than click volume. This page covers what changes when the client is a education business,
     and what we build first.</p>
  <div class="btn-row" style="margin-top:var(--sp-6)">
    <a class="btn btn--ink" href="{{ url('/free-consultation') }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    <a class="btn btn--line" href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp us</a>
  </div>
</section>

<section class="band band--tight shell">
  <div class="lp-facts" data-reveal>
    <div class="lp-fact"><b>Education</b><span>Sector experience</span></div>
    <div class="lp-fact"><b>You own it</b><span>Code and design files</span></div>
    <div class="lp-fact"><b>Weekly</b><span>Written progress updates</span></div>
  </div>
</section>

<section class="band shell">
  <div class="article">
    <div class="article__body"><h2>Why education needs a different approach</h2><p>Institutions have sharp seasonal admission peaks and a mix of public-facing and internal administrative systems that rarely speak to each other.</p><h2>PPC advertising in this sector, specifically</h2><p>Admissions campaigns are calendar-locked, so there is no room to learn slowly. We build the measurement and creative library in the off-season so the peak spends on what already works.</p><h2>Where we start</h2><p>For education projects the first release centres on admissions workflow, seasonal capacity and student-record integration. Those come first because they change how the business runs rather than how it looks. Visual refinement and secondary modules follow once the core is in real use, which is also when you learn which of them you actually need.</p><h2>How the engagement runs</h2><p>Weekly written updates, a staging URL open every day, and one accountable point of contact rather than a handoff chain. You review working software at each increment, so there is no reveal at the end where unpleasant surprises live.</p></div>
    <aside class="aside">
      <div class="card" style="padding:var(--sp-5)">
        <p class="card__idx">Free, 30 minutes</p>
        <h3 style="font-size:var(--fs-h4)">Scope this properly</h3>
        <p>Talk to an engineer, not a salesperson. Scope, timeline and budget in writing afterwards.</p>
        <a class="btn btn--signal" href="{{ url('/free-consultation') }}" style="justify-content:center">Book a call<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <div class="card" style="padding:var(--sp-5)">
        <p class="card__idx">Education</p>
        <h3 style="font-size:var(--fs-h4)">All services for this sector</h3>
        <p>See every service we deliver to education businesses.</p>
        <a class="btn btn--line" href="{{ url('/software-for-education') }}" style="justify-content:center">View sector<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </aside>
  </div>
</section>

<section class="band band--tight shell">
  <div class="sec-head" data-reveal>
    <div><p class="eyebrow">Scope</p><h2>What ppc advertising includes</h2>
      <p>Every item below is in the base engagement. Anything we would charge extra for is quoted
         before you sign.</p></div>
  </div>
  <ul class="feat" data-reveal
      style="columns:2;column-gap:var(--sp-7);max-width:70rem;font-size:var(--fs-body)"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Conversion tracking fixed before any spend</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Account and campaign restructure</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Keyword and negative keyword management</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Ad copy and extension testing</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Shopping feed optimisation where relevant</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Weekly search-terms review</span></li></ul>
</section>

<section class="band band--ink">
  <div class="shell">
    <div class="sec-head" data-reveal>
      <div><p class="eyebrow">Questions</p><h2>PPC advertising for education: common questions</h2></div>
    </div>
    <div class="acc" style="max-width:62rem;border-color:var(--ink-3)" data-reveal><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Who holds the ad accounts?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>You do. We work inside your accounts so you keep the history and the data if we ever part ways.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Is there a minimum spend?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>No minimum, but below a certain budget the management fee dominates and we will tell you when paid media is not the right first move.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">How is performance reported?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Monthly against qualified enquiries and revenue where we can attribute it, not impressions. Plus a weekly search-terms and negatives review.</p></div></details></div>
  </div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection