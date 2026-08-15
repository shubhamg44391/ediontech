@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Technical SEO audit | Edion Web Technologies')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Crawlability, indexation, canonicals, Core Web Vitals, structured data, redirects and internal linking. Delivered as a ranked list of fixes with effort estim')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'technical seo audit, technical seo audit, Edion Web Technologies')

@section('main-container')
<main id="main"><a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page"><b class="kw">Technical SEO audit</b></li></ol></nav>
 <p class="eyebrow">SEO</p>
 <h1 style="margin-top:var(--sp-4)">A technical audit that hands you a prioritised fix list</h1>
 <p class="lead">Crawlability, indexation, canonicals, <span class="kw kw--tech"><b class="kw2">Core Web Vitals</b></span>, <span class="kw kw--tech"><b class="kw2">structured data</b></span>, redirects and internal linking. Delivered as a ranked list of fixes with effort estimates, not a <span class="kw kw--num">90</span>-page PDF.</p>
 <div class="btn-row" style="margin-top:var(--sp-6)">
 <a class="btn btn--ink" href="{{ url('/free-consultation') }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 <a class="btn btn--line" href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp us</a>
 </div>
</section>

@include('frontend.partials.badgegrid')


<section class="band band--tight shell">
 <div class="lp-facts" data-reveal><div class="lp-fact"><b>Ranked list</b><span>Impact over effort</span></div><div class="lp-fact"><b>Effort estimates</b><span>So you can budget it</span></div><div class="lp-fact"><b>Re-test included</b><span>Verify the fixes landed</span></div></div>
</section>

<section class="band band--tight shell">
 <figure class="figure figure--bleed" data-reveal>
 <img src="{{ asset('assets/frontend/img/art/search-visibility.svg') }}" alt="" width="800" height="560" loading="lazy" decoding="async">
 </figure>
</section>

<section class="band shell">
 <div class="article">
 <div class="article__body"><h2>What we usually find</h2><p><b class="kw2">Canonical tags</b> pointing at the wrong page, entire sections blocked in robots.txt, paginated duplicates competing with each other, and <span class="kw kw--tech">Core Web Vitals</span> failures nobody measured. These are common and they cap everything else you spend.</p><h2>Prioritised by impact over effort</h2><p>You get the list sorted so your developers can start at the top and stop when the budget runs out, having done the things that mattered most.</p></div>
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

<section class="band">
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
<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Related</p><h2>Other seo work</h2></div>
 </div>
 <div class="linkmatrix" data-reveal>
 <div><p class="lbl">SEO</p><ul><li><a href="{{ url('/seo-services') }}">SEO services</a></li><li><a href="{{ url('/local-seo-services') }}">Local SEO services</a></li><li><a href="{{ url('/ecommerce-seo') }}">E-commerce SEO</a></li><li><a href="{{ url('/link-building-services') }}">Link building services</a></li></ul></div>
 <div><p class="lbl">By market</p><ul><li><a href="{{ url('/locations') }}">All locations</a></li></ul></div>
 <div><p class="lbl">By industry</p><ul><li><a href="{{ url('/services') }}">All services</a></li></ul></div>
 </div>
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