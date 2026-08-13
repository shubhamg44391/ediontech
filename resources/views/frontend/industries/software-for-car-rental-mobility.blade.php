@extends('frontend.layouts.app')

@section('title', 'Software Development for Car rental and mobility | Edion Web Technologies')
@section('description', 'Custom software, web, mobile and SEO for car rental and mobility businesses. Rental and mobility operators run three revenue streams at once: walk-in retail')
@section('keywords', 'software for car rental and mobility, car rental and mobility software development, car rental and mobility web development, car rental and mobility seo')

@section('main-container')
<main id="main">
<a id="top"></a>
<section class="phero shell">
  <nav aria-label="Breadcrumb"><ol class="crumbs">
    <li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ url('/industries') }}">Industries</a></li>
    <li aria-current="page">Car rental and mobility</li></ol></nav>
  <span class="ind-badge" style="display:inline-flex">
    <img src="{{ asset('assets/frontend/img/industry/mobility.svg') }}" alt="" width="34" height="34" loading="eager">
    <span>Car rental and mobility</span></span>
  <h1 style="margin-top:var(--sp-4)">Software for car rental and mobility</h1>
  <p class="lead">What car rental and mobility businesses actually need from a software partner, and how we sequence
     a first release so the capabilities that change operations arrive before the ones that change
     appearance.</p>
  <div class="btn-row" style="margin-top:var(--sp-6)">
    <a class="btn btn--ink" href="{{ url('/free-consultation') }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    <a class="btn btn--line" href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp us</a>
  </div>
</section>
<section class="band band--tight shell">
  <div class="lp-facts" data-reveal>
    <div class="lp-fact"><b>First release</b><span>Scoped to what changes operations</span></div>
    <div class="lp-fact"><b>You own it</b><span>Code and design files</span></div>
    <div class="lp-fact"><b>Documented</b><span>Handover for your next developer</span></div>
  </div>
</section>
<section class="band shell">
  <div class="article">
    <div class="article__body">
      <h2>What car rental and mobility businesses need first</h2><p>Rental and mobility operators run three revenue streams at once: walk-in retail hire, corporate accounts and long-term lease. Most packaged software handles one well and bolts on the rest.</p>
      <h2>Where we start</h2><p>Typically: <b class="kw2">availability logic</b>, rule-based pricing and <b class="kw2">multi-branch</b> operations. Those come first because they change how the
        business runs. Visual refinement follows.</p>
      <h2>Why sequencing matters more than scope</h2><p>The modules specified in month one and the
        modules used in month eighteen are rarely the same list. Shipping a narrow first release and
        extending it consistently beats specifying everything up front, and it costs less.</p>
    </div>
    <aside class="aside">
      <div class="card" style="padding:var(--sp-5)">
        <p class="card__idx">Free, 30 minutes</p><h3 style="font-size:var(--fs-h4)">Get a real number</h3>
        <p>Scope, timeline and budget in writing after one call.</p>
        <a class="btn btn--signal" href="{{ url('/free-consultation') }}" style="justify-content:center">Book a call<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </aside>
  </div>
</section>
@include('frontend.partials.badgegrid')
</main>
@endsection