@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Works & Case Studies | Car Rental Software, Apps & Websites | Edion')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Rental platforms, fleet systems, marketplaces, mobile apps, dashboards and SEO programmes built by Edion Web Technologies, with the status of each system.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'web development portfolio, car rental software case study, fleet management case study, mobile app portfolio, custom software portfolio, SEO case study')

@section('main-container')
<main id="main"><a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">Works</li></ol></nav>
 <p class="eyebrow">Works</p>
 <h1 style="margin-top:var(--sp-4)">Eight systems. Six live, two in build.</h1>
 <p class="lead">
 We list status honestly, including the ones still under construction. If you want to talk to
 any of these clients before hiring us, ask, we'll make the introduction.
 </p>
</section>

<div class="rail" aria-label="Production systems we build and maintain"><ul class="rail__track"><li class="rail__item"><span class="dot dot--live"></span><b>Dunya Car Rental</b> &middot; Rental &amp; booking platform</li><li class="rail__item"><span class="dot dot--live"></span><b>Autonation Rent a Car</b> &middot; Fleet + reservations</li><li class="rail__item"><span class="dot dot--live"></span><b>Bxience</b> &middot; Corporate web platform</li><li class="rail__item"><span class="dot dot--build"></span><b>Tutorwale</b> &middot; Marketplace build</li><li class="rail__item"><span class="dot dot--live"></span><b>Jarry Logistics</b> &middot; Ops dashboard</li><li class="rail__item"><span class="dot dot--live"></span><b>Link Loop</b> &middot; SEO campaign, month 14</li><li class="rail__item"><span class="dot dot--live"></span><b>Vepo</b> &middot; Mobile app, iOS + Android</li><li class="rail__item"><span class="dot dot--build"></span><b>BII</b> &middot; CRM integration</li></ul></div>

<section class="band">
 <div class="shell">
 <h2 class="vh">Case studies</h2>
  <div class="grid g-2">
  <a class="work" href="javascript:void(0);" onclick="openCaseStudyModal('Dunya Car Rental', 'Dunya Car Rental Case Study.pdf')" data-reveal>
  <div class="work__media"><span class="work__logo"><img src="{{ asset('assets/frontend/img/clients/dunya_light.png') }}" alt="Dunya Car Rental logo" height="26" loading="lazy" decoding="async"></span>
  <span class="work__status"><span class="dot dot--live"></span>Live</span>
     <span class="work__brand"><img class="worklogo" src="{{ asset('assets/frontend/img/clients/dunya_light.png') }}" alt="Dunya Car Rental logo" height="26" loading="lazy" decoding="async"></span>
  <img src="{{ asset('assets/frontend/img/work/studyimg/dunya.png') }}" alt="Dunya Car Rental project" width="800" height="500" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover">
  </div>
  <div class="work__body">
  <p class="eyebrow" style="color:var(--text-on-ink-2)">Rental &amp; booking platform</p>
  <h3>Dunya Car Rental</h3><p>A full rental operation in one system: <b class="kw2">multi-branch</b> fleet, seasonal pricing rules, online reservations, and a counter interface staff can learn in a morning.</p>
  <div class="taglist"><span class="tag">Booking engine</span><span class="tag">Fleet management</span><span class="tag">Payments</span><span class="tag">Multi-branch</span></div>
  </div>
 </a><a class="work" href="javascript:void(0);" onclick="openCaseStudyModal('Autonation Rent a Car', 'Autonation Rent a Car Case Study.pdf')" data-reveal>
  <div class="work__media"><span class="work__logo"><img src="{{ asset('assets/frontend/img/clients/auto-nation-light.png') }}" alt="Autonation Rent a Car logo" height="26" loading="lazy" decoding="async"></span>
  <span class="work__status"><span class="dot dot--live"></span>Live</span>
     <span class="work__brand"><img class="worklogo" src="{{ asset('assets/frontend/img/clients/auto-nation-light.png') }}" alt="Autonation Rent a Car logo" height="26" loading="lazy" decoding="async"></span>
  <img src="{{ asset('assets/frontend/img/work/studyimg/autonation.png') }}" alt="Autonation Rent a Car project" width="800" height="500" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover">
  </div>
  <div class="work__body">
  <p class="eyebrow" style="color:var(--text-on-ink-2)">Reservations &amp; fleet ops</p>
  <h3>Autonation Rent a Car</h3><p>Walk-ins, corporate accounts and long-term leases handled in a single reservation flow, with the reporting the finance team asked for.</p>
  <div class="taglist"><span class="tag">Reservations</span><span class="tag">Corporate accounts</span><span class="tag">Reporting</span></div>
  </div>
 </a><a class="work" href="javascript:void(0);" onclick="openCaseStudyModal('Bxience', 'Bxience Case Study.pdf')" data-reveal>
  <div class="work__media"><span class="work__logo"><img src="{{ asset('assets/frontend/img/clients/bxience-light.png') }}" alt="Bxience logo" height="26" loading="lazy" decoding="async"></span>
  <span class="work__status"><span class="dot dot--live"></span>Live</span>
     <span class="work__brand"><img class="worklogo" src="{{ asset('assets/frontend/img/clients/bxience-light.png') }}" alt="Bxience logo" height="26" loading="lazy" decoding="async"></span>
  <img src="{{ asset('assets/frontend/img/work/studyimg/bxience.png') }}" alt="Bxience project" width="800" height="500" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover">
  </div>
  <div class="work__body">
  <p class="eyebrow" style="color:var(--text-on-ink-2)">Corporate web platform</p>
  <h3>Bxience</h3><p>A content-managed corporate site with a structure that survives a growing team publishing to it.</p>
  <div class="taglist"><span class="tag">CMS</span><span class="tag">Web development</span><span class="tag">SEO</span></div>
  </div>
 </a><a class="work" href="javascript:void(0);" onclick="openCaseStudyModal('Tutorwale', 'Tutorwale Case Study.pdf')" data-reveal>
  <div class="work__media"><span class="work__logo"><img src="{{ asset('assets/frontend/img/clients/tukarwale_light.png') }}" alt="Tutorwale logo" height="26" loading="lazy" decoding="async"></span>
  <span class="work__status"><span class="dot dot--build"></span>In build</span>
     <span class="work__brand"><img class="worklogo" src="{{ asset('assets/frontend/img/clients/tukarwale_light.png') }}" alt="Tutorwale logo" height="26" loading="lazy" decoding="async"></span>
  <img src="{{ asset('assets/frontend/img/work/studyimg/tutorwale.png') }}" alt="Tutorwale project" width="800" height="500" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover">
  </div>
  <div class="work__body">
  <p class="eyebrow" style="color:var(--text-on-ink-2)">Marketplace</p>
  <h3>Tutorwale</h3><p>Two-sided marketplace with listings, verification and messaging. Currently in build.</p>
  <div class="taglist"><span class="tag">Marketplace</span><span class="tag">Mobile app</span></div>
  </div>
 </a><a class="work" href="#" data-reveal>
  <div class="work__media"><span class="work__logo"><img src="{{ asset('assets/frontend/img/clients/jarry_logistics_light.png') }}" alt="Jarry Logistics logo" height="26" loading="lazy" decoding="async"></span>
  <span class="work__status"><span class="dot dot--live"></span>Live</span>
     <span class="work__brand"><img class="worklogo" src="{{ asset('assets/frontend/img/clients/jarry_logistics_light.png') }}" alt="Jarry Logistics logo" height="26" loading="lazy" decoding="async"></span>
  
  </div>
  <div class="work__body">
  <p class="eyebrow" style="color:var(--text-on-ink-2)">Operations dashboard</p>
  <h3>Jarry Logistics</h3><p>Consignment tracking and dispatch visibility, replacing a spreadsheet workflow.</p>
  <div class="taglist"><span class="tag">Custom software</span><span class="tag">Dashboards</span></div>
  </div>
 </a><a class="work" href="#" data-reveal>
  <div class="work__media"><span class="work__logo"><img src="{{ asset('assets/frontend/img/clients/link_loop_light.png') }}" alt="Link Loop logo" height="26" loading="lazy" decoding="async"></span>
  <span class="work__status"><span class="dot dot--live"></span>Live</span>
     <span class="work__brand"><img class="worklogo" src="{{ asset('assets/frontend/img/clients/link_loop_light.png') }}" alt="Link Loop logo" height="26" loading="lazy" decoding="async"></span>
  
  </div>
  <div class="work__body">
  <p class="eyebrow" style="color:var(--text-on-ink-2)">SEO campaign, month 14</p>
  <h3>Link Loop</h3><p>Ongoing technical and content SEO programme with monthly reporting.</p>
  <div class="taglist"><span class="tag">Technical SEO</span><span class="tag">Content</span></div>
  </div>
 </a><a class="work" href="#" data-reveal>
  <div class="work__media"><span class="work__logo"><img src="{{ asset('assets/frontend/img/clients/vepo_light.png') }}" alt="Vepo logo" height="26" loading="lazy" decoding="async"></span>
  <span class="work__status"><span class="dot dot--live"></span>Live</span>
     <span class="work__brand"><img class="worklogo" src="{{ asset('assets/frontend/img/clients/vepo_light.png') }}" alt="Vepo logo" height="26" loading="lazy" decoding="async"></span>
  
  </div>
  <div class="work__body">
  <p class="eyebrow" style="color:var(--text-on-ink-2)">Mobile app, iOS &amp; Android</p>
  <h3>Vepo</h3><p>Cross-platform consumer app shipped to both stores from a single codebase.</p>
  <div class="taglist"><span class="tag">Flutter</span><span class="tag">Mobile app</span><span class="tag">UI/UX</span></div>
  </div>
 </a><a class="work" href="javascript:void(0);" onclick="openCaseStudyModal('Brand In India', 'Brand In India Case Study.pdf')" data-reveal>
  <div class="work__media"><span class="work__logo"><img src="{{ asset('assets/frontend/img/clients/bii-light.png') }}" alt="BII logo" height="26" loading="lazy" decoding="async"></span>
  <span class="work__status"><span class="dot dot--build"></span>In build</span>
     <span class="work__brand"><img class="worklogo" src="{{ asset('assets/frontend/img/clients/bii-light.png') }}" alt="BII logo" height="26" loading="lazy" decoding="async"></span>
  <img src="{{ asset('assets/frontend/img/work/studyimg/brands_in_india.png') }}" alt="BII project" width="800" height="500" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover">
  </div>
  <div class="work__body">
  <p class="eyebrow" style="color:var(--text-on-ink-2)">CRM integration</p>
  <h3>BII</h3><p>Connecting a legacy CRM to new customer-facing forms without a full replacement.</p>
  <div class="taglist"><span class="tag">Integration</span><span class="tag">CRM</span></div>
  </div>
  </a>
  </div>
  </div>
 </section>

<section class="band">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Clients</p><h2>Teams who trusted us with production systems.</h2>
 <p>Car rental operators in the Gulf, logistics and delivery businesses, universities,
 health and STEM platforms, consumer apps and US legal services. Ask and we will
 introduce you to any of them.</p></div>
 <a class="btn btn--line" href="{{ url('/works') }}">Case studies</a>
 </div>
 <ul class="clientwall" data-reveal><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/dunya_dark.png') }}" alt="Dunya Car Rental logo, Car rental" height="42" loading="lazy" decoding="async"><span>Rental &amp; booking platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/auto-nation-dark.png') }}" alt="Auto Nation logo, Rent a Car" height="42" loading="lazy" decoding="async"><span>Fleet &amp; reservations</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/jarry_logistics_dark.png') }}" alt="Jarry Logistics logo, Delivery Unlimited" height="42" loading="lazy" decoding="async"><span>Operations dashboard</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/bxience-dark.png') }}" alt="Bxience logo, Health &amp; STEM" height="42" loading="lazy" decoding="async"><span>Corporate web platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/link_loop_dark.png') }}" alt="Link N Loop logo, STEM &amp; Health" height="42" loading="lazy" decoding="async"><span>SEO programme</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/bii-dark.png') }}" alt="bii logo, Brand in India" height="42" loading="lazy" decoding="async"><span>CRM integration</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/vepo_dark.png') }}" alt="VEPO logo, Virginia Estate Planning Online" height="42" loading="lazy" decoding="async"><span>Web platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/nmims_dark.png') }}" alt="SVKM&rsquo;s NMIMS logo, Deemed to be University" height="42" loading="lazy" decoding="async"><span>Education platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/glance_dark.png') }}" alt="Glance logo, Lock-screen platform" height="42" loading="lazy" decoding="async"><span>Consumer platform work</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/roposo_clout_dark.png') }}" alt="Roposo Clout logo, Creator commerce" height="42" loading="lazy" decoding="async"><span>Consumer platform work</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/elon_musk_dark.png') }}" alt="Elon Musk Vision logo, EMV" height="42" loading="lazy" decoding="async"><span>Brand &amp; web platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/fitbit_dark.png') }}" alt="Fitbit logo, Wearables" height="42" loading="lazy" decoding="async"><span>Digital marketing</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/tukarwale_dark.png') }}" alt="Tutorwale logo, Tutoring platform" height="42" loading="lazy" decoding="async"><span>Marketplace</span></li><li class="clientlogo clientlogo--cta"><a href="{{ url('/free-consultation') }}"><b>Your logo next</b><span>Start a project</span></a></li></ul>
 </div>
</section>


<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">What clients say</p><h2>In their words</h2></div>
 </div>
 <blockquote style="margin:0;border-left:3px solid var(--signal);padding-left:var(--sp-5);max-width:56ch" data-reveal>
 <p style="font:600 var(--fs-h3)/1.4 var(--font-display);letter-spacing:-0.025em;color:var(--text-on-ink)">
 &ldquo;They are truly one of the best companies when it comes to professionalism, service and
 expertise. The team was highly responsive, knowledgeable and dedicated to delivering the
 best results.&rdquo;</p>
 <div class="byline" style="border:0;padding-bottom:0;margin-top:var(--sp-5)">
 <span class="byline__av" style="background:var(--signal);color:var(--signal-ink)">MA</span>
 <span><b style="color:var(--text-on-ink)">Mohammad Abu Zeiad</b>
 <span>Autonation Rent a Car</span></span>
 </div>
 </blockquote>
 <div class="grid g-3" style="margin-top:var(--sp-8)">
 <div class="card card--ink" data-reveal>
 <p style="color:var(--text-on-ink-2)">&ldquo;Working with the Edion team was an absolute pleasure.&rdquo;</p>
 <div class="byline" style="border:0;padding:0;margin-top:auto">
 <span class="byline__av">JL</span>
 <span><b style="color:var(--text-on-ink)">John Lemon</b><span>Brand manager</span></span></div>
 </div><div class="card card--ink" data-reveal>
 <p style="color:var(--text-on-ink-2)">&ldquo;They understood our vision and delivered a sleek, intuitive site.&rdquo;</p>
 <div class="byline" style="border:0;padding:0;margin-top:auto">
 <span class="byline__av">LT</span>
 <span><b style="color:var(--text-on-ink)">Lea Tomato</b><span>Senior designer</span></span></div>
 </div><div class="card card--ink" data-reveal>
 <p style="color:var(--text-on-ink-2)">&ldquo;Attention to detail and technical expertise exceeded our expectations.&rdquo;</p>
 <div class="byline" style="border:0;padding:0;margin-top:auto">
 <span class="byline__av">PP</span>
 <span><b style="color:var(--text-on-ink)">Patrick Pineapple</b><span>SEO lead</span></span></div>
 </div>
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