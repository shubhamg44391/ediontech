@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Website design for e-commerce and retail | Edion Web Technologies')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Website design for e-commerce and retail businesses. Retail design is conversion work. Product page hierarchy, honest total pricing shown early and a checkou')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'website design for e-commerce and retail, e-commerce and retail website design, website design ecommerce retail, e-commerce and retail software company, website design company')

@section('main-container')
<main id="main">
<a id="top"></a>

<section class="phero shell">
  <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ route('industry.detail', ['slug'=>'industries']) }}">Industries</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-for-ecommerce-retail']) }}">E-commerce and retail</a></li><li aria-current="page">Website design</li></ol></nav>
  <span class="ind-badge" style="display:inline-flex">
    <img src="{{ asset('assets/frontend/img/industry/ecommerce-retail.svg') }}" alt="" width="34" height="34" loading="eager">
    <span>E-commerce and retail</span></span>
  <h1 style="margin-top:var(--sp-4)">Website design for e-commerce and retail</h1>
  <p class="lead">Design that starts with the flow, reviewed as clickable prototypes. This page covers what changes when the client is a e-commerce and retail business,
     and what we build first.</p>
  <div class="btn-row" style="margin-top:var(--sp-6)">
    <a class="btn btn--ink" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
    <a class="btn btn--line" href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp us</a>
  </div>
</section>

<section class="band band--tight shell">
  <div class="lp-facts" data-reveal>
    <div class="lp-fact"><b>E-commerce</b><span>Sector experience</span></div>
    <div class="lp-fact"><b>You own it</b><span>Code and design files</span></div>
    <div class="lp-fact"><b>Weekly</b><span>Written progress updates</span></div>
  </div>
</section>

<section class="band shell">
  <div class="article">
    <div class="article__body"><h2>Why e-commerce and retail needs a different approach</h2><p>Retail competes on conversion rate and stock accuracy, and both are engineering problems as much as merchandising ones. Overselling costs more than being out of stock.</p><h2>Website design in this sector, specifically</h2><p>Retail design is conversion work. Product page hierarchy, honest total pricing shown early and a checkout with the fewest possible fields will beat any visual refresh.</p><h2>Where we start</h2><p>For e-commerce and retail projects the first release centres on funnel instrumentation, inventory integration and checkout optimisation. Those come first because they change how the business runs rather than how it looks. Visual refinement and secondary modules follow once the core is in real use, which is also when you learn which of them you actually need.</p><h2>How the engagement runs</h2><p>Weekly written updates, a staging URL open every day, and one accountable point of contact rather than a handoff chain. You review working software at each increment, so there is no reveal at the end where unpleasant surprises live.</p></div>
    <aside class="aside">
      <div class="card" style="padding:var(--sp-5)">
        <p class="card__idx">Free, 30 minutes</p>
        <h3 style="font-size:var(--fs-h4)">Scope this properly</h3>
        <p>Talk to an engineer, not a salesperson. Scope, timeline and budget in writing afterwards.</p>
        <a class="btn btn--signal" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}" style="justify-content:center">Book a call<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
      <div class="card" style="padding:var(--sp-5)">
        <p class="card__idx">E-commerce and retail</p>
        <h3 style="font-size:var(--fs-h4)">All services for this sector</h3>
        <p>See every service we deliver to e-commerce and retail businesses.</p>
        <a class="btn btn--line" href="{{ route('industry.detail', ['slug'=>'software-for-ecommerce-retail']) }}" style="justify-content:center">View sector<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </aside>
  </div>
</section>

<section class="band band--tight shell">
  <div class="sec-head" data-reveal>
    <div><p class="eyebrow">Scope</p><h2>What website design includes</h2>
      <p>Every item below is in the base engagement. Anything we would charge extra for is quoted
         before you sign.</p></div>
  </div>
  <ul class="feat" data-reveal
      style="columns:2;column-gap:var(--sp-7);max-width:70rem;font-size:var(--fs-body)"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Discovery and user-flow mapping</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Clickable prototypes, not flat mockups</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Design system with tokens and components</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Bilingual and <b class="kw2">right-to-left</b> layouts where needed</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Accessibility contrast and focus states</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Design source files handed over</span></li></ul>
</section>

<section class="band band--ink">
  <div class="shell">
    <div class="sec-head" data-reveal>
      <div><p class="eyebrow">Questions</p><h2>Website design for e-commerce and retail: common questions</h2></div>
    </div>
    <div class="acc" style="max-width:62rem;border-color:var(--ink-3)" data-reveal><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">What do we actually receive?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Clickable prototypes, a design system with tokens and components, and the source files. Not a folder of flat images.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">How many revision rounds are included?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Two structured rounds per phase, which is enough when you are reviewing prototypes rather than static mockups.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Do you handle Arabic or other right-to-left layouts?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Yes, and we build the type system to hold in both scripts before any page is finalised, because retrofitting right-to-left is far more expensive.</p></div></details></div>
  </div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection