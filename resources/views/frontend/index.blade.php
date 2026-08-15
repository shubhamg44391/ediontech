@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Edion Web Technologies | Web Development & Car Rental Software')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Edion Web Technologies - Custom Software Development & Car Rental Software')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'car rental software, web development, edion tech')

@section('main-container')
<main id="main"><a id="top"></a>

<section class="hero shell">
 <div class="hero__in">
 <div>
 <p class="eyebrow eyebrow--dot" data-reveal>7,400+ projects shipped since 2011</p>
 <h1 data-reveal style="margin-top:var(--sp-5)">
 We build the software your business <em>runs on.</em>
 </h1>
 <p class="lead hero__sub" data-reveal>
 Car rental and fleet platforms are our deepest specialism, but we also build
 websites, mobile apps, e-commerce, custom software and the marketing engine that
 fills them. One team, from first wireframe to month-thirty maintenance.
 </p>
 <div class="btn-row hero__actions" data-reveal>
 <a class="btn btn--ink" href="{{ url('/free-consultation') }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 <a class="btn btn--line" href="{{ url('/works') }}">See our work</a>
 </div>
 </div>
 <div class="console" data-reveal>
 <p class="console__bar"><span>Systems we operate</span><span>Aug 2026</span></p>
 <div class="console__rows">
 <div class="console__row">
 <span><b>Dunya Car Rental</b><small>Rental &amp; booking platform</small></span>
 <span class="console__st"><span class="dot dot--live"></span>Live</span>
 </div><div class="console__row">
 <span><b>Autonation Rent a Car</b><small>Fleet + reservations</small></span>
 <span class="console__st"><span class="dot dot--live"></span>Live</span>
 </div><div class="console__row">
 <span><b>Bxience</b><small>Corporate web platform</small></span>
 <span class="console__st"><span class="dot dot--live"></span>Live</span>
 </div><div class="console__row">
 <span><b>Tutorwale</b><small>Marketplace build</small></span>
 <span class="console__st"><span class="dot dot--build"></span>In build</span>
 </div><div class="console__row">
 <span><b>Jarry Logistics</b><small>Ops dashboard</small></span>
 <span class="console__st"><span class="dot dot--live"></span>Live</span>
 </div><div class="console__row">
 <span><b>Link Loop</b><small>SEO campaign, month 14</small></span>
 <span class="console__st"><span class="dot dot--live"></span>Live</span>
 </div>
 </div>
 <p class="console__foot">
 <span><span class="dot dot--live"></span>6 live</span>
 <span><span class="dot dot--build"></span>2 in build</span>
 <span>Support retainer on all</span>
 </p>
 </div>
 </div>
 <div class="hero__meta" data-reveal>
 <div class="stat"><b>100+</b><span>Clients who trust us with production systems</span></div>
 <div class="stat"><b>86%</b><span>Come back with a second project</span></div>
 <div class="stat"><b>15+</b><span>Years building for the web</span></div>
 <div class="stat"><b>7,400+</b><span>Projects delivered end to end</span></div>
 </div>
</section>

<div class="rail" aria-label="Production systems we build and maintain"><ul class="rail__track"><li class="rail__item"><span class="dot dot--live"></span><b>Dunya Car Rental</b> &middot; Rental &amp; booking platform</li><li class="rail__item"><span class="dot dot--live"></span><b>Autonation Rent a Car</b> &middot; Fleet + reservations</li><li class="rail__item"><span class="dot dot--live"></span><b>Bxience</b> &middot; Corporate web platform</li><li class="rail__item"><span class="dot dot--build"></span><b>Tutorwale</b> &middot; Marketplace build</li><li class="rail__item"><span class="dot dot--live"></span><b>Jarry Logistics</b> &middot; Ops dashboard</li><li class="rail__item"><span class="dot dot--live"></span><b>Link Loop</b> &middot; SEO campaign, month 14</li><li class="rail__item"><span class="dot dot--live"></span><b>Vepo</b> &middot; Mobile app, iOS + Android</li><li class="rail__item"><span class="dot dot--build"></span><b>BII</b> &middot; CRM integration</li></ul></div>

@include('frontend.partials.badgegrid')


<section class="band shell">
 <div class="sec-head" data-reveal>
 <div>
 <p class="eyebrow">Where we go deepest</p>
 <h2>Car rental is where we cut our teeth.</h2>
 <p>Reservation logic, fleet availability, seasonal pricing, chauffeur dispatch, damage
 records, <b class="kw2">multi-branch</b> accounting. We have shipped it, broken it, and fixed it at 2am
, which is why rental operators keep calling us. The rest of our work benefits
 from the same discipline.</p>
 </div>
 <a class="btn btn--line" href="{{ url('/services') }}">All services<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 <div class="grid g-2">
 <div class="card card--hover" data-reveal>
 <p class="eyebrow eyebrow--dot">Flagship practice</p>
 <img class="ind-icon" src="{{ asset('assets/frontend/img/industry/mobility.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>Car rental &amp; mobility</h3><p>Our deepest specialism. Reservations, fleet, pricing rules, chauffeur dispatch, <b class="kw2">damage capture</b>, multi-branch and <b class="kw2">multi-currency</b> operations.</p>
 <div class="taglist"><span class="tag">Booking engines</span><span class="tag">Fleet management</span><span class="tag">Chauffeur &amp; limousine</span><span class="tag">Telematics</span></div><a class="post__more" href="{{ url('/software-for-car-rental-mobility') }}" style="margin-top:var(--sp-4)">Explore this sector<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
 <div class="card card--hover" data-reveal>
 <p class="card__idx">Practice area</p>
 <img class="ind-icon" src="{{ asset('assets/frontend/img/industry/travel-tourism.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>Travel &amp; hospitality</h3><p>Availability, inventory and payment flows that hold up under real demand.</p>
 <div class="taglist"><span class="tag">Reservations</span><span class="tag">Channel managers</span><span class="tag">Payment gateways</span></div><a class="post__more" href="{{ url('/software-for-travel-tourism') }}" style="margin-top:var(--sp-4)">Explore this sector<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
 <div class="card card--hover" data-reveal>
 <p class="card__idx">Practice area</p>
 <img class="ind-icon" src="{{ asset('assets/frontend/img/industry/ecommerce-retail.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>Retail &amp; e-commerce</h3><p>Storefronts, catalogues and checkout built for conversion, not just launch day.</p>
 <div class="taglist"><span class="tag">Storefronts</span><span class="tag">Headless commerce</span><span class="tag">Order management</span></div><a class="post__more" href="{{ url('/software-for-ecommerce-retail') }}" style="margin-top:var(--sp-4)">Explore this sector<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
 <div class="card card--hover" data-reveal>
 <p class="card__idx">Practice area</p>
 <img class="ind-icon" src="{{ asset('assets/frontend/img/industry/healthcare.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>Healthcare &amp; education</h3><p>Compliance-aware platforms for clinics, hospitals and institutions.</p>
 <div class="taglist"><span class="tag">Patient portals</span><span class="tag">LMS platforms</span><span class="tag">Admissions</span></div><a class="post__more" href="{{ url('/software-for-healthcare') }}" style="margin-top:var(--sp-4)">Explore this sector<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
 </div>
</section>

<section class="awards-sec">
 <div class="shell">
  <div class="awards-header" data-reveal>
   <span class="awards-eyebrow">RECOGNITION &amp; AWARDS</span>
   <h2 class="awards-title">Awarded as the <span>Best Digital Marketing Agency</span></h2>
   <p class="awards-desc">
    Edion Web Technologies is proud to be recognized as one of the best digital marketing agencies. These distinctions are a testament to our diligent work, effective strategies, and our ability to achieve results time and again. We focus on helping businesses grow online through SEO, PPC, content marketing, and digital solutions that deliver real value and measurable success.
   </p>
  </div>
  <div class="awards-grid-box" data-reveal>
   <div class="award-item">
    <div class="award-icon-wrap">
     <img src="{{ asset('assets/frontend/img/awards/forbes1-logo.webp') }}" alt="Forbes" loading="lazy" decoding="async">
    </div>
    <p class="award-label">Best Digital Marketing Company</p>
   </div>
   <div class="award-item">
    <div class="award-icon-wrap">
     <img src="{{ asset('assets/frontend/img/awards/entrepreneur.webp') }}" alt="Entrepreneur" loading="lazy" decoding="async">
    </div>
    <p class="award-label">Top Digital Marketing Agency India</p>
   </div>
   <div class="award-item">
    <div class="award-icon-wrap">
     <img src="{{ asset('assets/frontend/img/awards/clutch.webp') }}" alt="Clutch" loading="lazy" decoding="async">
    </div>
    <p class="award-label">Top Digital Marketing Agency</p>
   </div>
   <div class="award-item">
    <div class="award-icon-wrap">
     <img src="{{ asset('assets/frontend/img/awards/fitsmallbusiness.webp') }}" alt="FitSmallBusiness" loading="lazy" decoding="async">
    </div>
    <p class="award-label">Top Digital Marketing Agency</p>
   </div>
   <div class="award-item">
    <div class="award-icon-wrap">
     <img src="{{ asset('assets/frontend/img/awards/goodfirms.webp') }}" alt="GoodFirms" loading="lazy" decoding="async">
    </div>
    <p class="award-label">Best Digital Marketing Company In India</p>
   </div>
   <div class="award-item">
    <div class="award-icon-wrap">
     <img src="{{ asset('assets/frontend/img/awards/hindustan.webp') }}" alt="Hindustan Times" loading="lazy" decoding="async">
    </div>
    <p class="award-label">Top Digital Marketing Experts</p>
   </div>
   <div class="award-item">
    <div class="award-icon-wrap">
     <img src="{{ asset('assets/frontend/img/awards/software-world.webp') }}" alt="Software World" loading="lazy" decoding="async">
    </div>
    <p class="award-label">Best Marketing Consultant</p>
   </div>
   <div class="award-item">
    <div class="award-icon-wrap">
     <img src="{{ asset('assets/frontend/img/awards/clouds.webp') }}" alt="The Times of India" loading="lazy" decoding="async">
    </div>
    <p class="award-label">Best SEO Company in World</p>
   </div>
  </div>
 </div>
</section>

<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div>
 <p class="eyebrow">Capabilities</p>
 <h2>Six practices. One accountable team.</h2>
 <p>You get one point of contact and one plan, not six vendors blaming each other.</p>
 </div>
 </div>
 <div class="steps">
 <div class="step" data-reveal>
 <p class="step__n">01</p>
 <div><h3>Design</h3><p>Interfaces people can use without a manual. We design the flows first, then make them look inevitable.</p>
 <div class="cap__list"><span class="tag">Logo &amp; branding</span><span class="tag">Website design</span><span class="tag">Mobile app design</span><span class="tag">Graphic &amp; print</span><span class="tag">Video production</span></div>
 </div>
 <p class="step__t">Explore</p>
 </div>
 <div class="step" data-reveal>
 <p class="step__n">02</p>
 <div><h3>Development</h3><p>Fast, maintainable builds. Clean code your next developer won't curse us for.</p>
 <div class="cap__list"><span class="tag">Web development</span><span class="tag">E-commerce</span><span class="tag">Custom software</span><span class="tag">Mobile apps</span><span class="tag">CMS development</span></div>
 </div>
 <p class="step__t">Explore</p>
 </div>
 <div class="step" data-reveal>
 <p class="step__n">03</p>
 <div><h3>Online marketing</h3><p>Traffic that converts, tracked end to end. No vanity dashboards.</p>
 <div class="cap__list"><span class="tag">SEO services</span><span class="tag">PPC advertising</span><span class="tag">Social media</span><span class="tag">Email marketing</span><span class="tag">Content marketing</span></div>
 </div>
 <p class="step__t">Explore</p>
 </div>
 <div class="step" data-reveal>
 <p class="step__n">04</p>
 <div><h3>Business</h3><p>Systems that make operations cheaper to run as you scale.</p>
 <div class="cap__list"><span class="tag">Startup solutions</span><span class="tag">Enterprise solutions</span><span class="tag">Consulting</span><span class="tag">IT infrastructure</span><span class="tag">Cloud solutions</span></div>
 </div>
 <p class="step__t">Explore</p>
 </div>
 <div class="step" data-reveal>
 <p class="step__n">05</p>
 <div><h3>Technology</h3><p>The heavier engineering: data, models, devices, distributed systems.</p>
 <div class="cap__list"><span class="tag">AI &amp; machine learning</span><span class="tag">IoT solutions</span><span class="tag">Big data analytics</span><span class="tag">Blockchain</span><span class="tag">AR/VR</span></div>
 </div>
 <p class="step__t">Explore</p>
 </div>
 <div class="step" data-reveal>
 <p class="step__n">06</p>
 <div><h3>Content strategy</h3><p>Words that carry weight in search and with the person reading them.</p>
 <div class="cap__list"><span class="tag">Content creation</span><span class="tag">Content audit</span><span class="tag">Localisation</span><span class="tag">Copywriting</span><span class="tag">Content management</span></div>
 </div>
 <p class="step__t">Explore</p>
 </div>
 </div>
 <div class="btn-row" style="margin-top:var(--sp-7)" data-reveal>
 <a class="btn btn--signal" href="{{ url('/services') }}">Full service breakdown<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 </div>
</section>

<section class="band shell">
 <div class="sec-head" data-reveal>
 <div>
 <p class="eyebrow">Selected work</p>
 <h2>Systems in production right now.</h2>
 <p>Not concepts. Not templates. Platforms with real users, real money moving through them,
 and real uptime obligations.</p>
 </div>
 <a class="btn btn--line" href="{{ url('/works') }}">All case studies<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
  <div class="grid g-2">
  <a class="work" href="#" onclick="openCaseStudyModal('Dunya Car Rental', 'Dunya Car Rental Case Study.pdf'); return false;" data-reveal>
  <div class="work__media"><span class="work__logo"><img src="{{ asset('assets/frontend/img/clients/dunya_light.png') }}" alt="Dunya Car Rental logo" height="26" loading="lazy" decoding="async"></span>
  <span class="work__status"><span class="dot dot--live"></span>Live</span>
  <img src="{{ asset('assets/frontend/img/work/studyimg/dunya.png') }}" alt="Dunya Car Rental platform"
  width="800" height="500" loading="lazy" decoding="async"
  style="width:100%;height:100%;object-fit:cover">
  </div>
  <div class="work__body">
  <h3>Dunya Car Rental</h3>
  <p>End-to-end rental platform: multi-branch fleet, dynamic seasonal pricing,
  online reservations and a back office the counter staff can actually use.</p>
  <div class="taglist">
  <span class="tag">Booking engine</span><span class="tag">Fleet</span><span class="tag">Payments</span>
  </div>
  </div>
  </a>
  <a class="work" href="#" onclick="openCaseStudyModal('Autonation Rent a Car', 'Autonation Rent a Car Case Study.pdf'); return false;" data-reveal>
  <div class="work__media"><span class="work__logo"><img src="{{ asset('assets/frontend/img/clients/auto-nation-light.png') }}" alt="Autonation Rent a Car logo" height="26" loading="lazy" decoding="async"></span>
  <span class="work__status"><span class="dot dot--live"></span>Live</span>
  <img src="{{ asset('assets/frontend/img/work/studyimg/autonation.png') }}" alt="Autonation Rent a Car platform"
  width="800" height="500" loading="lazy" decoding="async"
  style="width:100%;height:100%;object-fit:cover">
  </div>
  <div class="work__body">
  <h3>Autonation Rent a Car</h3>
  <p>Reservation and fleet operations for a Gulf rental business, built to handle
  walk-ins, corporate accounts and long-term leases in the same flow.</p>
  <div class="taglist">
  <span class="tag">Reservations</span><span class="tag">Corporate accounts</span><span class="tag">Reporting</span>
  </div>
  </div>
  </a>
  </div>
</section>

<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Clients</p><h2>Teams who trusted us with production systems.</h2>
 <p>Car rental operators in the Gulf, logistics and delivery businesses, universities,
 health and STEM platforms, consumer apps and US legal services. Ask and we will
 introduce you to any of them.</p></div>
 <a class="btn btn--on-ink" href="{{ url('/works') }}">Case studies</a>
 </div>
 <ul class="clientwall" data-reveal><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/dunya_light.png') }}" alt="Dunya Car Rental logo, Car rental" height="42" loading="lazy" decoding="async"><span>Rental &amp; booking platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/auto-nation-light.png') }}" alt="Auto Nation logo, Rent a Car" height="42" loading="lazy" decoding="async"><span>Fleet &amp; reservations</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/jarry_logistics_light.png') }}" alt="Jarry Logistics logo, Delivery Unlimited" height="42" loading="lazy" decoding="async"><span>Operations dashboard</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/bxience-light.png') }}" alt="Bxience logo, Health &amp; STEM" height="42" loading="lazy" decoding="async"><span>Corporate web platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/link_loop_light.png') }}" alt="Link N Loop logo, STEM &amp; Health" height="42" loading="lazy" decoding="async"><span>SEO programme</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/bii-light.png') }}" alt="bii logo, Brand in India" height="42" loading="lazy" decoding="async"><span>CRM integration</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/vepo_light.png') }}" alt="VEPO logo, Virginia Estate Planning Online" height="42" loading="lazy" decoding="async"><span>Web platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/nmims_light.png') }}" alt="SVKM&rsquo;s NMIMS logo, Deemed to be University" height="42" loading="lazy" decoding="async"><span>Education platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/glance_light.png') }}" alt="Glance logo, Lock-screen platform" height="42" loading="lazy" decoding="async"><span>Consumer platform work</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/roposo_clout_light.png') }}" alt="Roposo Clout logo, Creator commerce" height="42" loading="lazy" decoding="async"><span>Consumer platform work</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/elon_musk_light.png') }}" alt="Elon Musk Vision logo, EMV" height="42" loading="lazy" decoding="async"><span>Brand &amp; web platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/fitbit_light.png') }}" alt="Fitbit logo, Wearables" height="42" loading="lazy" decoding="async"><span>Digital marketing</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('assets/frontend/img/clients/tukarwale_light.png') }}" alt="Tutorwale logo, Tutoring platform" height="42" loading="lazy" decoding="async"><span>Marketplace</span></li><li class="clientlogo clientlogo--cta"><a href="{{ url('/free-consultation') }}"><b>Your logo next</b><span>Start a project</span></a></li></ul>
 </div>
</section>


<section class="band band--tight" style="background:var(--paper-2);border-block:1px solid var(--paper-3)">
 <div class="shell">
 <p class="eyebrow" data-reveal>What clients say</p>
 <blockquote class="prose-w" style="margin:var(--sp-5) 0 0;font:600 var(--fs-h3)/1.35 var(--font-display);letter-spacing:-0.025em;max-width:44ch" data-reveal>
 &ldquo;They designed a website for me and the entire process was smooth and outstanding.
 The team was highly responsive, knowledgeable and dedicated to delivering the best results.&rdquo;
 </blockquote>
 <div class="byline" style="margin-top:var(--sp-6);max-width:34rem;border-bottom:0" data-reveal>
 <span class="byline__av">MA</span>
 <span><b>Mohammad Abu Zeiad</b><span>Autonation Rent a Car</span></span>
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


<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Industries</p><h2>Sectors we know the vocabulary of.</h2></div>
 </div>
 <div class="grid g-3">
 <div class="card card--ink" data-reveal><img class="ind-icon" src="{{ asset('assets/frontend/img/industry/healthcare-light.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>Healthcare</h3><p>Clinics and hospitals: visibility, and patient enquiries that actually arrive.</p></div><div class="card card--ink" data-reveal><img class="ind-icon" src="{{ asset('assets/frontend/img/industry/real-estate-light.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>Real estate</h3><p>Qualified property leads through search and paid channels.</p></div><div class="card card--ink" data-reveal><img class="ind-icon" src="{{ asset('assets/frontend/img/industry/ecommerce-retail-light.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>E-commerce</h3><p>Shopping campaigns and conversion-led SEO that move revenue.</p></div><div class="card card--ink" data-reveal><img class="ind-icon" src="{{ asset('assets/frontend/img/industry/education-light.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>Education</h3><p>Institutions, coaching centres and online learning platforms.</p></div><div class="card card--ink" data-reveal><img class="ind-icon" src="{{ asset('assets/frontend/img/industry/travel-tourism-light.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>Travel &amp; hospitality</h3><p>Direct bookings, less dependence on aggregators.</p></div><div class="card card--ink" data-reveal><img class="ind-icon" src="{{ asset('assets/frontend/img/industry/it-software-light.svg') }}" alt="" width="52" height="52" loading="lazy" decoding="async"><h3>IT &amp; software</h3><p>B2B pipeline and category authority for technology firms.</p></div>
 </div>
 </div>
</section>


<section class="band band--ink" id="seo-plan">
  <div class="shell">
    <div class="sec-head" data-reveal>
      <div><p class="eyebrow eyebrow--dot">How we run SEO</p>
        <h2>A 12-month SEO plan we will show you before you pay for it.</h2>
        <p>No agency should ask for a retainer before telling you what happens in month one. This is
           the sequence we run, the order we run it in, and what you should expect to see at each
           stage. Timelines assume a mid-sized site in a competitive market.</p></div>
      <a class="btn btn--signal" href="{{ url('/seo-package') }}">See published pricing</a>
    </div>
    <div class="roadmap" data-reveal>
      <div class="phase">
        <p class="phase__wk">Weeks 1&ndash;4</p>
        <h3>Fix the foundation</h3>
        <ul>
          <li>Full <b class="kw">technical SEO audit</b>, ranked by impact over effort</li>
          <li><b class="kw2">Canonical tags</b>, indexation and redirect chains corrected</li>
          <li><b class="kw2">Core Web Vitals</b> remediation</li>
          <li><b class="kw2">Structured data</b> implemented and validated</li>
          <li><b class="kw2">Search Console</b> and GA4 configured in your accounts</li>
        </ul>
        <p class="phase__out">Outcome: crawlable, measurable, no wasted spend downstream</p>
      </div>
      <div class="phase">
        <p class="phase__wk">Months 2&ndash;3</p>
        <h3>Map intent to pages</h3>
        <ul>
          <li>Keyword research mapped to commercial intent</li>
          <li><b class="kw2">Keyword cannibalisation</b> resolved</li>
          <li>Title, meta and heading optimisation across money pages</li>
          <li>Internal linking to push authority where it converts</li>
          <li><b class="kw2">Google Business Profile</b> and <b class="kw2">NAP consistency</b></li>
        </ul>
        <p class="phase__out">Outcome: first ranking movement on long-tail and local terms</p>
      </div>
      <div class="phase">
        <p class="phase__wk">Months 4&ndash;8</p>
        <h3>Build authority</h3>
        <ul>
          <li>Monthly editorial on topics with real search demand</li>
          <li>White-hat <b class="kw2">link building</b>, every placement disclosed</li>
          <li><b class="kw2">Digital PR</b> and resource outreach</li>
          <li>Category and service page depth</li>
          <li><b class="kw3">AI search optimisation</b> for assistant citation</li>
        </ul>
        <p class="phase__out">Outcome: competitive head terms begin moving</p>
      </div>
      <div class="phase">
        <p class="phase__wk">Months 9&ndash;12</p>
        <h3>Compound and defend</h3>
        <ul>
          <li>Conversion rate work on pages already ranking</li>
          <li>Content refresh on decaying pages</li>
          <li>Competitor gap analysis and reclaim</li>
          <li>Expansion into adjacent keyword clusters</li>
          <li>Quarterly strategy review with your team</li>
        </ul>
        <p class="phase__out">Outcome: <b class="kw3">organic traffic</b> compounding, not plateauing</p>
      </div>
    </div>
    <div class="grid g-3" style="margin-top:var(--sp-7)">
      <div class="card card--ink" data-reveal><h3>What we will not do</h3>
        <p><b class="kw3">No ranking guarantees</b>, because nobody controls Google's index. No private
           blog networks. No reporting that hides a bad month behind an impression count.</p></div>
      <div class="card card--ink" data-reveal><h3>What you always keep</h3>
        <p>Your Search Console and Analytics properties, every deliverable produced, and the right to
           leave at the end of any month without losing access to anything.</p></div>
      <div class="card card--ink" data-reveal><h3>What it costs</h3>
        <p>Published on the <a href="{{ url('/seo-package') }}" style="color:var(--signal)">pricing page</a> from
           $361.45 per month, with the full scope of each tier listed including
           exclusions.</p></div>
    </div>
  </div>
</section>

<section class="band shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Insights</p><h2>Recent writing</h2>
 <p>What we've learned building and running production systems.</p></div>
 <a class="btn btn--line" href="{{ url('/blog') }}">All insights<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 <div class="posts">
  @if(isset($blogs) && count($blogs) > 0)
    @foreach($blogs as $blog)
      <article class="post" data-post-cat="Engineering" data-reveal>
        <a href="{{ url('/blog/' . $blog->slug) }}" aria-label="{{ $blog->title }}">
          <div class="post__media">
            @if(!empty($blog->image))
              <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" width="800" height="500" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover" onerror="this.onerror=null;this.parentElement.innerHTML='<div class=ph>Featured image</div>';">
            @else
              <div class="ph">Featured image<br>1200&times;750 WebP</div>
            @endif
          </div>
        </a>
        <div class="post__body">
          <p class="post__kicker"><span>Engineering</span><span>&middot;</span>
          <time datetime="{{ date('Y-m-d', strtotime($blog->created_at ?? now())) }}">{{ date('d F Y', strtotime($blog->created_at ?? now())) }}</time></p>
          <h3><a href="{{ url('/blog/' . $blog->slug) }}">{{ $blog->title }}</a></h3>
          <p>{{ Str::limit(strip_tags($blog->description ?? $blog->meta_description ?? ''), 150) }}</p>
          <a class="post__more" href="{{ url('/blog/' . $blog->slug) }}">Read the article<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        </div>
      </article>
    @endforeach
  @else
    <p style="grid-column: 1 / -1; text-align: center; color: var(--text-2); padding: 2rem 0;">No recent articles available.</p>
  @endif
 </div>
</section>

</main>
@endsection