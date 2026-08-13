@extends('frontend.layouts.app')

@section('title', 'SEO Packages & Monthly Pricing | Edion Web Technologies')
@section('description', 'Transparent monthly SEO packages from $361.45: technical SEO, on-page optimisation, content, link building and local SEO for businesses in India, Jordan, the UAE, Bahrain, the USA, the UK and Canada.')
@section('keywords', 'SEO packages, monthly SEO plans, SEO pricing, SEO services cost, technical SEO, local SEO services, link building services, enterprise SEO')

@section('main-container')
<main id="main"><a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">Pricing</li></ol></nav>
 <p class="eyebrow">Pricing</p>
 <h1 style="margin-top:var(--sp-4)">SEO pricing, published. No discovery call required.</h1>
 <p class="lead">
 Four monthly packages. The scope of each is listed in full below, including what is
 <em>not</em> included, because the exclusions are usually what a vendor hides.
 Development and design work is quoted per project; <a href="{{ url('/free-consultation') }}"
 style="text-decoration:underline;text-decoration-color:var(--signal);text-decoration-thickness:2px;text-underline-offset:3px">book
 a consultation</a> for that.
 </p>
 <div style="margin-top:var(--sp-7);display:flex;flex-wrap:wrap;gap:var(--sp-5);align-items:center">
 <div class="toggle" data-billing-toggle role="group" aria-label="Billing cycle">
 <button type="button" data-cycle="monthly" aria-pressed="true">Billed monthly</button>
 <button type="button" data-cycle="yearly" aria-pressed="false">Billed yearly &middot; save 15%</button>
 </div>
 <p style="font:400 var(--fs-micro)/1.5 var(--font-mono);color:var(--text-3);max-width:30ch">
 Prices in USD. Indian clients are billed in INR at the prevailing rate plus 18% GST.
 </p>
 </div>
</section>

<section class="band band--tight shell">
 <div class="plans"><div class="plan" data-reveal>
 <span class="plan__flag">Special offer</span>
 <div>
 <p class="plan__name">Basic SEO</p>
 <p class="plan__for">Local businesses</p>
 </div>
 <p class="plan__price">
 <b data-monthly="361.45">$361.45</b>
 <span data-cycle-label>/mo + 18% tax</span>
 </p>
 <dl class="plan__spec"><div><dt>Keywords</dt><dd>20+</dd></div><div><dt>Locations</dt><dd>2</dd></div><div><dt>First results</dt><dd>3-6 months</dd></div><div><dt>Strategy</dt><dd>Technical, on-page &amp; backlinks</dd></div></dl>
 <a class="btn btn--line" href="{{ url('/contact') }}"
 style="justify-content:center">Start with Basic</a>
 <ul class="feat"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Blog optimisation, <strong>10 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Original blog writing, <strong>1 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Landing page optimisation, <strong>2 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Organic backlinks (DR 50-90), <strong>100 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Business listings, <strong>20 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Guest posts (sponsored), <strong>2 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Competitor link acquisition, <strong>25 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Press release, <strong>1 / month</strong></span></li><li data-no><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 4l8 8M12 4l-8 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg><span><b class="kw2">Structured data</b> for CMS / WordPress</span></li><li data-no><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 4l8 8M12 4l-8 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg><span>Footer optimisation</span></li><li data-no><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 4l8 8M12 4l-8 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg><span>Call-to-action report</span></li></ul>
 <details class="more">
 <summary>Everything included in every plan</summary>
 <ul class="feat" style="padding-top:var(--sp-3)"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Comprehensive website audit &amp; SEO strategy report</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Competitor &amp; backlink analysis</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Primary, secondary and long-tail keyword research</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Title and meta tag optimisation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Heading structure, URL and internal linking optimisation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Image optimisation: alt text, compression, image sitemap</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Schema markup implementation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b class="kw2">Search Console</b> and Analytics setup</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span><b class="kw2">Core Web Vitals</b> and mobile responsiveness work</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>XML sitemap and robots.txt configuration</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Monthly performance report with ranking and traffic analysis</span></li></ul>
 </details>
</div><div class="plan plan--pick" data-reveal>
 <span class="plan__flag">Best choice</span>
 <div>
 <p class="plan__name">Standard SEO</p>
 <p class="plan__for">Growing enterprises</p>
 </div>
 <p class="plan__price">
 <b data-monthly="590.36">$590.36</b>
 <span data-cycle-label>/mo + 18% tax</span>
 </p>
 <dl class="plan__spec"><div><dt>Keywords</dt><dd>40+</dd></div><div><dt>Locations</dt><dd>3</dd></div><div><dt>First results</dt><dd>3-6 months</dd></div><div><dt>Strategy</dt><dd>Advanced SEO &amp; content</dd></div></dl>
 <a class="btn btn--signal" href="{{ url('/contact') }}"
 style="justify-content:center">Start with Standard</a>
 <ul class="feat"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Blog optimisation, <strong>10 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Original blog writing, <strong>1 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Landing page optimisation, <strong>2 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Organic backlinks (DR 50-90), <strong>100 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Business listings, <strong>20 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Guest posts (sponsored), <strong>2 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Competitor link acquisition, <strong>25 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Structured data implementation, <strong>Included</strong></span></li><li data-no><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 4l8 8M12 4l-8 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg><span>Footer optimisation</span></li><li data-no><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M4 4l8 8M12 4l-8 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg><span>Call-to-action report</span></li></ul>
 <details class="more">
 <summary>Everything included in every plan</summary>
 <ul class="feat" style="padding-top:var(--sp-3)"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Comprehensive website audit &amp; SEO strategy report</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Competitor &amp; backlink analysis</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Primary, secondary and long-tail keyword research</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Title and meta tag optimisation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Heading structure, URL and internal linking optimisation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Image optimisation: alt text, compression, image sitemap</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Schema markup implementation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Search Console and Analytics setup</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Core Web Vitals and mobile responsiveness work</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>XML sitemap and robots.txt configuration</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Monthly performance report with ranking and traffic analysis</span></li></ul>
 </details>
</div><div class="plan" data-reveal>
 <span class="plan__flag plan__flag--ghost" aria-hidden="true">&nbsp;</span>
 <div>
 <p class="plan__name">Gold SEO</p>
 <p class="plan__for">Established brands</p>
 </div>
 <p class="plan__price">
 <b data-monthly="855.42">$855.42</b>
 <span data-cycle-label>/mo + 18% tax</span>
 </p>
 <dl class="plan__spec"><div><dt>Keywords</dt><dd>80+</dd></div><div><dt>Locations</dt><dd>All</dd></div><div><dt>First results</dt><dd>3-6 months</dd></div><div><dt>Strategy</dt><dd>Full-scale SEO &amp; branding</dd></div></dl>
 <a class="btn btn--line" href="{{ url('/contact') }}"
 style="justify-content:center">Start with Gold</a>
 <ul class="feat"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Blog optimisation, <strong>10 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Original blog writing, <strong>1 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Landing page optimisation, <strong>2 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Organic backlinks (DR 50-90), <strong>100 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Business listings, <strong>20 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Guest posts (sponsored), <strong>2 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Footer optimisation, <strong>Included</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Call-to-action report, <strong>Included</strong></span></li></ul>
 <details class="more">
 <summary>Everything included in every plan</summary>
 <ul class="feat" style="padding-top:var(--sp-3)"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Comprehensive website audit &amp; SEO strategy report</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Competitor &amp; backlink analysis</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Primary, secondary and long-tail keyword research</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Title and meta tag optimisation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Heading structure, URL and internal linking optimisation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Image optimisation: alt text, compression, image sitemap</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Schema markup implementation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Search Console and Analytics setup</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Core Web Vitals and mobile responsiveness work</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>XML sitemap and robots.txt configuration</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Monthly performance report with ranking and traffic analysis</span></li></ul>
 </details>
</div><div class="plan" data-reveal>
 <span class="plan__flag plan__flag--ghost" aria-hidden="true">&nbsp;</span>
 <div>
 <p class="plan__name">Premium SEO</p>
 <p class="plan__for">Large enterprises</p>
 </div>
 <p class="plan__price">
 <b data-monthly="1325.3">$1325.30</b>
 <span data-cycle-label>/mo + 18% tax</span>
 </p>
 <dl class="plan__spec"><div><dt>Keywords</dt><dd>200+</dd></div><div><dt>Locations</dt><dd>All</dd></div><div><dt>First results</dt><dd>3-6 months</dd></div><div><dt>Strategy</dt><dd>Enterprise-level SEO</dd></div></dl>
 <a class="btn btn--line" href="{{ url('/contact') }}"
 style="justify-content:center">Start with Premium</a>
 <ul class="feat"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Blog optimisation, <strong>10 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Original blog writing, <strong>1 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Landing page optimisation, <strong>2 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Organic backlinks (DR 50-90), <strong>100 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Business listings, <strong>20 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Guest posts (sponsored), <strong>2 / month</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Dedicated account strategist, <strong>Included</strong></span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Quarterly strategy review, <strong>Included</strong></span></li></ul>
 <details class="more">
 <summary>Everything included in every plan</summary>
 <ul class="feat" style="padding-top:var(--sp-3)"><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Comprehensive website audit &amp; SEO strategy report</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Competitor &amp; backlink analysis</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Primary, secondary and long-tail keyword research</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Title and meta tag optimisation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Heading structure, URL and internal linking optimisation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Image optimisation: alt text, compression, image sitemap</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Schema markup implementation</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Search Console and Analytics setup</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Core Web Vitals and mobile responsiveness work</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>XML sitemap and robots.txt configuration</span></li><li><svg viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M3 8.5l3.2 3.2L13 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Monthly performance report with ranking and traffic analysis</span></li></ul>
 </details>
</div></div>
</section>

<div class="rail" aria-label="Production systems we build and maintain"><ul class="rail__track"><li class="rail__item"><span class="dot dot--live"></span><b>Dunya Car Rental</b> &middot; Rental &amp; booking platform</li><li class="rail__item"><span class="dot dot--live"></span><b>Autonation Rent a Car</b> &middot; Fleet + reservations</li><li class="rail__item"><span class="dot dot--live"></span><b>Bxience</b> &middot; Corporate web platform</li><li class="rail__item"><span class="dot dot--build"></span><b>Tutorwale</b> &middot; Marketplace build</li><li class="rail__item"><span class="dot dot--live"></span><b>Jarry Logistics</b> &middot; Ops dashboard</li><li class="rail__item"><span class="dot dot--live"></span><b>Link Loop</b> &middot; SEO campaign, month 14</li><li class="rail__item"><span class="dot dot--live"></span><b>Vepo</b> &middot; Mobile app, iOS + Android</li><li class="rail__item"><span class="dot dot--build"></span><b>BII</b> &middot; CRM integration</li></ul></div>

@include('frontend.partials.badgegrid')


<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Toolchain</p><h2>What we actually run your SEO on.</h2>
 <p>Licensed seats on every tool below. You get the exports, not a screenshot of a
 dashboard you cannot open.</p></div>
 </div>
 <div class="stackgroup" data-reveal><p class="lbl">Measurement</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/tools/googleanalytics.svg') }}" alt="Google Analytics 4 logo" width="26" height="26" loading="lazy" decoding="async"><span>Google Analytics 4</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/googlesearchconsole.svg') }}" alt="Google Search Console logo" width="26" height="26" loading="lazy" decoding="async"><span>Google Search Console</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/googletagmanager.svg') }}" alt="Google Tag Manager logo" width="26" height="26" loading="lazy" decoding="async"><span>Google Tag Manager</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/hotjar.svg') }}" alt="Hotjar logo" width="26" height="26" loading="lazy" decoding="async"><span>Hotjar</span></div></div></div><div class="stackgroup" data-reveal><p class="lbl">Research & audit</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/tools/semrush.svg') }}" alt="Semrush logo" width="26" height="26" loading="lazy" decoding="async"><span>Semrush</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/yoast.svg') }}" alt="Yoast SEO logo" width="26" height="26" loading="lazy" decoding="async"><span>Yoast SEO</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/cloudflare.svg') }}" alt="Cloudflare Insights logo" width="26" height="26" loading="lazy" decoding="async"><span>Cloudflare Insights</span></div></div></div><div class="stackgroup" data-reveal><p class="lbl">Paid & lifecycle</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/tools/googleads.svg') }}" alt="Google Ads logo" width="26" height="26" loading="lazy" decoding="async"><span>Google Ads</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/mailchimp.svg') }}" alt="Mailchimp logo" width="26" height="26" loading="lazy" decoding="async"><span>Mailchimp</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/hubspot.svg') }}" alt="HubSpot logo" width="26" height="26" loading="lazy" decoding="async"><span>HubSpot</span></div></div></div><div class="stackgroup" data-reveal><p class="lbl">Design & reporting</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/tools/figma.svg') }}" alt="Figma logo" width="26" height="26" loading="lazy" decoding="async"><span>Figma</span></div></div></div>
 <div class="stackgroup" data-reveal><p class="lbl">Crawl, audit &amp; backlinks</p>
 <div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/tools/ahrefs.svg') }}" alt="Ahrefs logo" width="26" height="26" loading="lazy" decoding="async"><span>Ahrefs</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/screaming-frog.svg') }}" alt="Screaming Frog logo" width="26" height="26" loading="lazy" decoding="async"><span>Screaming Frog</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/moz.svg') }}" alt="Moz logo" width="26" height="26" loading="lazy" decoding="async"><span>Moz</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/lighthouse.svg') }}" alt="Lighthouse logo" width="26" height="26" loading="lazy" decoding="async"><span>Lighthouse</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/gtmetrix.svg') }}" alt="GTmetrix logo" width="26" height="26" loading="lazy" decoding="async"><span>GTmetrix</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/tools/majestic.svg') }}" alt="Majestic logo" width="26" height="26" loading="lazy" decoding="async"><span>Majestic</span></div></div></div>
 <p class="hint" style="margin-top:var(--sp-6);color:var(--text-on-ink-2);max-width:70ch">
 Product names and logos are trademarks of their respective owners. Listing them states the
 tools we license and use; it does not imply their endorsement of Edion Web Technologies.
 </p>
 </div>
</section>


<section class="band shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">What you get either way</p>
 <h2>The parts we won't cut.</h2>
 <p>Every package includes the technical foundation. We won't sell <b class="kw2">link building</b> on a site
 that can't be crawled properly, it's a waste of your money and our time.</p></div>
 </div>
 <div class="grid g-2">
 <div class="card" data-reveal><p class="card__idx">Foundation</p>
 <h3>Technical SEO</h3>
 <p>Crawlability, <b class="kw2">canonical tags</b>, Core Web Vitals, sitemaps, robots directives, structured data,
 broken link cleanup and redirect mapping. Fixed first, in every tier.</p></div>
 <div class="card" data-reveal><p class="card__idx">Foundation</p>
 <h3>Honest reporting</h3>
 <p>Monthly reports with rankings, traffic, conversions and what we changed. Written in plain
 language, with the months that went badly explained rather than buried.</p></div>
 </div>
</section>

<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Fair warning</p><h2>What SEO can and can't do.</h2></div>
 </div>
 <div class="grid g-3">
 <div class="card card--ink" data-reveal><h3>3-6 months</h3>
 <p>Realistic window before meaningful ranking movement on competitive terms. Anyone
 promising faster on a new domain is guessing.</p></div>
 <div class="card card--ink" data-reveal><h3>No guaranteed positions</h3>
 <p>We don't sell rank guarantees, because nobody controls Google's index. We sell process,
 volume of work, and transparent measurement.</p></div>
 <div class="card card--ink" data-reveal><h3>White-hat only</h3>
 <p>Private blog networks and paid link schemes can produce a fast spike and a manual
 action six months later. We don't use them.</p></div>
 </div>
 </div>
</section>

</main>
@endsection