@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Services | Web, Software, Mobile, AI & SEO | Edion Web Technologies')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Design, development, online marketing, business systems, AI and content strategy, including car rental and fleet software, e-commerce, mobile apps and SEO.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'web development services, software development services, car rental software development')

@section('main-container')
<main id="main"><a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">Services</li></ol></nav>
 <p class="eyebrow">Services</p>
 <h1 style="margin-top:var(--sp-4)">Everything needed to ship it and keep it running.</h1>
 <p class="lead">
 Six practices, thirty services, one point of contact. Car rental and fleet software is where
 we go deepest, everything below is work we do in-house, for clients who would rather
 not manage five vendors.
 </p>
 <div class="btn-row" style="margin-top:var(--sp-6)">
 <a class="btn btn--ink" href="{{ url('/free-consultation') }}">Scope your project<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 <a class="btn btn--line" href="{{ url('/seo-package') }}">See SEO pricing</a>
 </div>
</section>

<div class="rail" aria-label="Production systems we build and maintain"><ul class="rail__track"><li class="rail__item"><span class="dot dot--live"></span><b>Dunya Car Rental</b> &middot; Rental &amp; booking platform</li><li class="rail__item"><span class="dot dot--live"></span><b>Autonation Rent a Car</b> &middot; Fleet + reservations</li><li class="rail__item"><span class="dot dot--live"></span><b>Bxience</b> &middot; Corporate web platform</li><li class="rail__item"><span class="dot dot--build"></span><b>Tutorwale</b> &middot; Marketplace build</li><li class="rail__item"><span class="dot dot--live"></span><b>Jarry Logistics</b> &middot; Ops dashboard</li><li class="rail__item"><span class="dot dot--live"></span><b>Link Loop</b> &middot; SEO campaign, month 14</li><li class="rail__item"><span class="dot dot--live"></span><b>Vepo</b> &middot; Mobile app, iOS + Android</li><li class="rail__item"><span class="dot dot--build"></span><b>BII</b> &middot; CRM integration</li></ul></div>

<section class="band" style="border-top:1px solid var(--paper-3)">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">01 &nbsp;Practice</p>
 <h2>Design</h2><p>Interfaces people can use without a manual.</p></div>
 </div>
 <div class="grid g-3">
 <div class="card card--hover" data-reveal>
 <h3>Logo &amp; branding</h3><p>Identity systems with the assets and rules to apply them consistently.</p></div><div class="card card--hover" data-reveal>
 <h3>Website design</h3><p>Structure and page design that survives contact with real content.</p></div><div class="card card--hover" data-reveal>
 <h3>Mobile app design</h3><p>iOS and Android patterns respected, not fought.</p></div><div class="card card--hover" data-reveal>
 <h3>Graphic &amp; print design</h3><p>Collateral, decks and print-ready artwork.</p></div><div class="card card--hover" data-reveal>
 <h3>Video production</h3><p>Product demos, explainers and campaign cuts.</p></div>
 </div>
 </div>
</section>

<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">02 &nbsp;Practice</p>
 <h2>Development</h2><p>Fast, maintainable builds your next developer can read.</p></div>
 </div>
 <div class="grid g-3">
 <div class="card card--ink" data-reveal>
 <h3>Web development</h3><p>Marketing sites through to complex web applications.</p></div><div class="card card--ink" data-reveal>
 <img class="ind-icon" src="{{ asset('assets/frontend/img/industry/ecommerce-retail-light.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>E-commerce</h3><p>Catalogues, checkout and order management built for conversion.</p></div><div class="card card--ink" data-reveal>
 <h3>Custom software</h3><p>Line-of-business systems: bookings, inventory, dispatch, billing.</p></div><div class="card card--ink" data-reveal>
 <h3>Mobile app development</h3><p>Native and cross-platform, shipped to both stores.</p></div><div class="card card--ink" data-reveal>
 <h3>CMS development</h3><p>Editors your marketing team can use without a ticket.</p></div>
 </div>
 </div>
</section>

<section class="band" style="border-top:1px solid var(--paper-3)">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">03 &nbsp;Practice</p>
 <h2>Online marketing</h2><p>Traffic that converts, tracked end to end.</p></div>
 </div>
 <div class="grid g-3">
 <div class="card card--hover" data-reveal>
 <h3>SEO services</h3><p>Technical, on-page, off-page, local and e-commerce SEO.</p></div><div class="card card--hover" data-reveal>
 <h3>PPC advertising</h3><p><b class="kw2">Google Ads</b>, Shopping, Display, YouTube and Performance Max.</p></div><div class="card card--hover" data-reveal>
 <h3>Social media marketing</h3><p>Organic and paid across Meta, LinkedIn, X and TikTok.</p></div><div class="card card--hover" data-reveal>
 <h3>Email marketing</h3><p>Lifecycle flows, segmentation and deliverability work.</p></div><div class="card card--hover" data-reveal>
 <h3>Content marketing</h3><p>Editorial that ranks and holds attention once it does.</p></div>
 </div>
 </div>
</section>

<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">04 &nbsp;Practice</p>
 <h2>Business</h2><p>Systems that get cheaper to run as you scale.</p></div>
 </div>
 <div class="grid g-3">
 <div class="card card--ink" data-reveal>
 <h3>Startup solutions</h3><p>MVP scoping and build for teams proving a market.</p></div><div class="card card--ink" data-reveal>
 <h3>Enterprise solutions</h3><p>Scalable platforms with the governance to match.</p></div><div class="card card--ink" data-reveal>
 <h3>Consulting services</h3><p>Architecture reviews, vendor audits, technical due diligence.</p></div><div class="card card--ink" data-reveal>
 <h3>IT infrastructure</h3><p>Setup, hardening and ongoing management.</p></div><div class="card card--ink" data-reveal>
 <h3>Cloud solutions</h3><p>Migration, cost control and reliability engineering.</p></div>
 </div>
 </div>
</section>

<section class="band" style="border-top:1px solid var(--paper-3)">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">05 &nbsp;Practice</p>
 <h2>Technology</h2><p>The heavier engineering.</p></div>
 </div>
 <div class="grid g-3">
 <div class="card card--hover" data-reveal>
 <img class="ind-icon" src="{{ asset('assets/frontend/img/industry/ai.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>AI &amp; machine learning</h3><p>Practical automation, forecasting and document work.</p></div><div class="card card--hover" data-reveal>
 <h3>IoT solutions</h3><p>Device fleets, telemetry pipelines and control interfaces.</p></div><div class="card card--hover" data-reveal>
 <h3>Big data analytics</h3><p>Warehousing, pipelines and reporting people trust.</p></div><div class="card card--hover" data-reveal>
 <h3>Blockchain solutions</h3><p>Where a ledger genuinely earns its complexity.</p></div><div class="card card--hover" data-reveal>
 <h3>AR/VR solutions</h3><p>Immersive product, training and showroom experiences.</p></div>
 </div>
 </div>
</section>

<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">06 &nbsp;Practice</p>
 <h2>Content strategy</h2><p>Words that carry weight in search and with the reader.</p></div>
 </div>
 <div class="grid g-3">
 <div class="card card--ink" data-reveal>
 <h3>Content creation</h3><p>Editorial, product and landing page copy.</p></div><div class="card card--ink" data-reveal>
 <h3>Content audit</h3><p>What to keep, merge, rewrite or delete.</p></div><div class="card card--ink" data-reveal>
 <h3>Content localisation</h3><p><b class="kw2">Arabic</b>, Hindi and regional adaptation that reads native.</p></div><div class="card card--ink" data-reveal>
 <h3>Copywriting services</h3><p>Conversion copy for pages that have a job to do.</p></div><div class="card card--ink" data-reveal>
 <h3>Content management</h3><p>Calendars, workflow and governance.</p></div>
 </div>
 </div>
</section>

<section class="band">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Technology</p><h2>The stack we build on.</h2>
 <p>Chosen for what your team can hire for and maintain. We would rather use a boring
 technology that will still be supported in five years than a fashionable one that won't.</p></div>
 <a class="btn btn--line" href="{{ url('/services') }}">All services<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 <div class="stackgroup" data-reveal><p class="lbl">Frontend</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/stack/react.svg') }}" alt="React logo" width="26" height="26" loading="lazy" decoding="async"><span>React</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/angular.svg') }}" alt="Angular logo" width="26" height="26" loading="lazy" decoding="async"><span>Angular</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/vuedotjs.svg') }}" alt="Vue.js logo" width="26" height="26" loading="lazy" decoding="async"><span>Vue.js</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/nextdotjs.svg') }}" alt="Next.js logo" width="26" height="26" loading="lazy" decoding="async"><span>Next.js</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/typescript.svg') }}" alt="TypeScript logo" width="26" height="26" loading="lazy" decoding="async"><span>TypeScript</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/javascript.svg') }}" alt="JavaScript logo" width="26" height="26" loading="lazy" decoding="async"><span>JavaScript</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/tailwindcss.svg') }}" alt="Tailwind CSS logo" width="26" height="26" loading="lazy" decoding="async"><span>Tailwind CSS</span></div></div></div><div class="stackgroup" data-reveal><p class="lbl">Backend</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/stack/php.svg') }}" alt="PHP logo" width="26" height="26" loading="lazy" decoding="async"><span>PHP</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/laravel.svg') }}" alt="Laravel logo" width="26" height="26" loading="lazy" decoding="async"><span>Laravel</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/python.svg') }}" alt="Python logo" width="26" height="26" loading="lazy" decoding="async"><span>Python</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/nodedotjs.svg') }}" alt="Node.js logo" width="26" height="26" loading="lazy" decoding="async"><span>Node.js</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/express.svg') }}" alt="Express logo" width="26" height="26" loading="lazy" decoding="async"><span>Express</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/dotnet.svg') }}" alt=".NET logo" width="26" height="26" loading="lazy" decoding="async"><span>.NET</span></div></div></div><div class="stackgroup" data-reveal><p class="lbl">Mobile</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/stack/flutter.svg') }}" alt="Flutter logo" width="26" height="26" loading="lazy" decoding="async"><span>Flutter</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/android.svg') }}" alt="Android logo" width="26" height="26" loading="lazy" decoding="async"><span>Android</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/apple.svg') }}" alt="iOS logo" width="26" height="26" loading="lazy" decoding="async"><span>iOS</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/kotlin.svg') }}" alt="Kotlin logo" width="26" height="26" loading="lazy" decoding="async"><span>Kotlin</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/swift.svg') }}" alt="Swift logo" width="26" height="26" loading="lazy" decoding="async"><span>Swift</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/firebase.svg') }}" alt="Firebase logo" width="26" height="26" loading="lazy" decoding="async"><span>Firebase</span></div></div></div><div class="stackgroup" data-reveal><p class="lbl">Data & infrastructure</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/stack/mysql.svg') }}" alt="MySQL logo" width="26" height="26" loading="lazy" decoding="async"><span>MySQL</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/postgresql.svg') }}" alt="PostgreSQL logo" width="26" height="26" loading="lazy" decoding="async"><span>PostgreSQL</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/mongodb.svg') }}" alt="MongoDB logo" width="26" height="26" loading="lazy" decoding="async"><span>MongoDB</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/redis.svg') }}" alt="Redis logo" width="26" height="26" loading="lazy" decoding="async"><span>Redis</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/docker.svg') }}" alt="Docker logo" width="26" height="26" loading="lazy" decoding="async"><span>Docker</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/googlecloud.svg') }}" alt="Google Cloud logo" width="26" height="26" loading="lazy" decoding="async"><span>Google Cloud</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/cloudflare.svg') }}" alt="Cloudflare logo" width="26" height="26" loading="lazy" decoding="async"><span>Cloudflare</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/stripe.svg') }}" alt="Stripe logo" width="26" height="26" loading="lazy" decoding="async"><span>Stripe</span></div></div></div><div class="stackgroup" data-reveal><p class="lbl">Commerce & CMS</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/stack/wordpress.svg') }}" alt="WordPress logo" width="26" height="26" loading="lazy" decoding="async"><span>WordPress</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/shopify.svg') }}" alt="Shopify logo" width="26" height="26" loading="lazy" decoding="async"><span>Shopify</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/woocommerce.svg') }}" alt="WooCommerce logo" width="26" height="26" loading="lazy" decoding="async"><span>WooCommerce</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/wix.svg') }}" alt="Wix logo" width="26" height="26" loading="lazy" decoding="async"><span>Wix</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/squarespace.svg') }}" alt="Squarespace logo" width="26" height="26" loading="lazy" decoding="async"><span>Squarespace</span></div></div></div>
 </div>
</section>


</main>
@endsection