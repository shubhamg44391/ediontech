@extends('frontend.layouts.app')

@section('title', 'Certifications & Partner Status | Edion Web Technologies')
@section('description', 'Edion Web Technologies is a Google Partner, Meta Business Partner and Microsoft Advertising Partner, ISO 9001 and 27001 certified, with verified Clutch and GoodFirms profiles.')
@section('keywords', 'Google Partner agency, Meta Business Partner, Microsoft Advertising Partner, ISO 9001 certified software company, ISO 27001 certified, Clutch verified agency')

@section('main-container')
<main id="main"><a id="top"></a>
<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">Certifications</li></ol></nav>
 <p class="eyebrow eyebrow--dot">Independently verifiable</p>
 <h1 style="margin-top:var(--sp-4)">Certifications you can check yourself.</h1>
 <p class="lead">
 Every badge below links to a programme with a public register or a certificate number. We list
 what we hold and what we do not, because a trust page that cannot be verified does the opposite
 of building trust.
 </p>
</section>
@include('frontend.partials.badgegrid')

<section class="band shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Current</p><h2>What we hold today</h2></div>
 </div>
 <div class="grid g-3"><div class="card" data-reveal>
 <p class="card__idx">Verified</p><p class="lbl">Google Partner</p><p><b class="kw2">Google Ads</b> certified</p>
 <div class="taglist"><span class="tag" style="background:color-mix(in srgb,var(--available) 18%,transparent);color:var(--text)">Active</span></div>
</div><div class="card" data-reveal>
 <p class="card__idx">Verified</p><p class="lbl">Meta Business Partner</p><p>Facebook &amp; Instagram</p>
 <div class="taglist"><span class="tag" style="background:color-mix(in srgb,var(--available) 18%,transparent);color:var(--text)">Active</span></div>
</div><div class="card" data-reveal>
 <p class="card__idx">Verified</p><p class="lbl">Microsoft Advertising Partner</p><p>Bing network</p>
 <div class="taglist"><span class="tag" style="background:color-mix(in srgb,var(--available) 18%,transparent);color:var(--text)">Active</span></div>
</div><div class="card" data-reveal>
 <p class="card__idx">Verified</p><p class="lbl"><b class="kw3">ISO 9001</b></p><p>Quality management</p>
 <div class="taglist"><span class="tag" style="background:color-mix(in srgb,var(--available) 18%,transparent);color:var(--text)">Active</span></div>
</div><div class="card" data-reveal>
 <p class="card__idx">Verified</p><p class="lbl"><b class="kw3">ISO 27001</b></p><p>Information security</p>
 <div class="taglist"><span class="tag" style="background:color-mix(in srgb,var(--available) 18%,transparent);color:var(--text)">Active</span></div>
</div><div class="card" data-reveal>
 <p class="card__idx">Verified</p><p class="lbl">Clutch</p><p>Verified client reviews</p>
 <div class="taglist"><span class="tag" style="background:color-mix(in srgb,var(--available) 18%,transparent);color:var(--text)">Active</span></div>
</div><div class="card" data-reveal>
 <p class="card__idx">Verified</p><p class="lbl">GoodFirms</p><p>Listed agency</p>
 <div class="taglist"><span class="tag" style="background:color-mix(in srgb,var(--available) 18%,transparent);color:var(--text)">Active</span></div>
</div></div>
</section>
<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Roadmap</p><h2>Worth adding, and how</h2>
 <p>These are the badges your competitors display that you do not hold yet. Most are
 genuinely obtainable, the paths are below.</p></div>
 </div>
 <div class="grid g-2"><div class="card card--ink" data-reveal>
 <p class="card__idx" style="color:var(--text-on-ink-2)">Not yet held</p>
 <p class="lbl">DMCA Protected</p><p>Free. Register at dmca.com, add the badge, done in about five minutes.</p>
</div><div class="card card--ink" data-reveal>
 <p class="card__idx" style="color:var(--text-on-ink-2)">Not yet held</p>
 <p class="lbl">NASSCOM Member</p><p>Paid membership. Worth it mainly for enterprise procurement in India and for Gulf tenders that ask for industry body affiliation.</p>
</div><div class="card card--ink" data-reveal>
 <p class="card__idx" style="color:var(--text-on-ink-2)">Not yet held</p>
 <p class="lbl">Google Premier Partner</p><p>The tier above Partner. Requires higher ad spend and performance thresholds across managed accounts.</p>
</div><div class="card card--ink" data-reveal>
 <p class="card__idx" style="color:var(--text-on-ink-2)">Not yet held</p>
 <p class="lbl">DesignRush / Clutch awards</p><p>Awarded off the back of verified client reviews. Free to pursue, set up a review request flow and the badges follow.</p>
</div></div>
 </div>
</section>
<section class="band shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Why this page exists</p><h2>Trust signals that survive scrutiny</h2></div>
 </div>
 <div class="prose-w lead" style="display:grid;gap:var(--sp-5)">
 <p>Certification badges are among the most-copied elements on agency websites, and among the
 least verified. We publish ours with the programme names so a prospective client can confirm
 them independently in under a minute.</p>
 <p>If you are evaluating agencies, three questions cut through most of it: can you see the
 certificate number, does the partner directory list them, and are the client reviews on a
 platform that verifies the reviewer? All three are checkable without asking the agency.</p>
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