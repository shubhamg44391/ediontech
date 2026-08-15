@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'About Edion Web Technologies | Software & Web Development Company')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Edion Web Technologies is a Lucknow-based software company building car rental and fleet platforms, websites, mobile apps, custom software and growth campaigns for clients across India, Jordan, the UAE, Bahrain, the USA, the UK and Canada.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'about Edion Web Technologies, software development company Lucknow, car rental software company, web development company India, software company Jordan, software company UAE')

@section('main-container')
<main id="main"><a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">About</li></ol></nav>
 <p class="eyebrow">About us</p>
 <h1 style="margin-top:var(--sp-4)">A software company that stays after launch day.</h1>
 <p class="lead">
 Edion Web Technologies is an engineering and growth team based in <span class="kw kw--loc">Lucknow</span>, working with
 clients across <span class="kw kw--loc">India</span>, the <span class="kw kw--loc">Gulf</span>, the <span class="kw kw--loc">Levant</span> and North America. We started in web, went deep
 in car rental and fleet systems, and kept the habits that came with it, because
 software that handles bookings and money has to keep working.
 </p>
</section>

<div class="rail" aria-label="Production systems we build and maintain"><ul class="rail__track"><li class="rail__item"><span class="dot dot--live"></span><b>Dunya Car Rental</b> &middot; Rental &amp; booking platform</li><li class="rail__item"><span class="dot dot--live"></span><b>Autonation Rent a Car</b> &middot; Fleet + reservations</li><li class="rail__item"><span class="dot dot--live"></span><b>Bxience</b> &middot; Corporate web platform</li><li class="rail__item"><span class="dot dot--build"></span><b>Tutorwale</b> &middot; Marketplace build</li><li class="rail__item"><span class="dot dot--live"></span><b>Jarry Logistics</b> &middot; Ops dashboard</li><li class="rail__item"><span class="dot dot--live"></span><b>Link Loop</b> &middot; SEO campaign, month 14</li><li class="rail__item"><span class="dot dot--live"></span><b>Vepo</b> &middot; Mobile app, iOS + Android</li><li class="rail__item"><span class="dot dot--build"></span><b>BII</b> &middot; CRM integration</li></ul></div>

<section class="band shell">
 <div class="split">
 <div data-reveal>
 <p class="eyebrow">How we got here</p>
 <h2 style="font-size:var(--fs-h2);margin-top:var(--sp-4)">Fifteen years, one habit.</h2>
 </div>
 <div class="prose-w" style="display:grid;gap:var(--sp-5)" data-reveal>
 <p class="lead">
 We began as a web shop. Somewhere around the fifth car rental client, we noticed something:
 the projects that taught us the most were the ones with real operational stakes. A brochure
 site can be forgiven a bad week. A reservation system cannot.
 </p>
 <p class="lead">
 So we built the company around that standard. Staging environments you can check any day.
 Documentation written for the developer who comes after us. Monitoring on things that
 matter. A named person who answers when something breaks.
 </p>
 <p class="lead">
 Today we do the full range, design, development, marketing, cloud, AI, but
 that operational bar is still the thing we compete on.
 </p>
 <div class="callout">
 <b>Registered entity</b>
 Edion Web Technologies (OPC) Private Limited &middot; 4C 487, Sector 4, Gomti Nagar Extension,
 Lucknow, Uttar Pradesh 226010, India. Founded by Nikhil Mishra.
 </div>
 </div>
 </div>
</section>

<section class="band band--ink" id="process">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Process</p><h2>Four phases. You see everything.</h2>
 <p>Timelines below are typical for a mid-sized build. Larger platforms run longer, and
 we'll say so before you sign, not halfway through.</p></div>
 </div>
 <div class="steps">
 <div class="step" data-reveal><p class="step__n">01</p>
 <div><h3>Strategy</h3><p>We work out what the thing has to do before anyone opens a design tool. Scope, constraints, success measures, and the parts we advise you not to build yet.</p></div><p class="step__t">1-2 weeks</p></div><div class="step" data-reveal><p class="step__n">02</p>
 <div><h3>Design</h3><p>Flows, then screens. You review clickable prototypes, not static mockups, so problems surface while they're still cheap to fix.</p></div><p class="step__t">~2 weeks</p></div><div class="step" data-reveal><p class="step__n">03</p>
 <div><h3>Development</h3><p>Built in reviewable increments on a staging URL you can open any day. No big reveal at the end.</p></div><p class="step__t">3-4 weeks</p></div><div class="step" data-reveal><p class="step__n">04</p>
 <div><h3>Launch &amp; support</h3><p>Deployment, monitoring, handover documentation, and a named person to call. Most clients stay on a support retainer.</p></div><p class="step__t">Ongoing</p></div>
 </div>
 </div>
</section>

<section class="band shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">By the numbers</p><h2>Where we stand</h2></div>
 </div>
 <div class="hero__meta" style="margin-top:0;border-top:0;padding-top:0" data-reveal>
 <div class="stat"><b>100+</b><span>Clients who trust us with production systems</span></div>
 <div class="stat"><b>86%</b><span>Come back with a second project</span></div>
 <div class="stat"><b>15+</b><span>Years building for the web</span></div>
 <div class="stat"><b>7,400+</b><span>Projects delivered end to end</span></div>
 </div>
</section>

<section class="band band--tight" style="background:var(--paper-2);border-block:1px solid var(--paper-3)">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Team</p><h2>Who you'll actually work with</h2></div>
 </div>
 <div class="grid g-3">
 <div class="card" data-reveal>
 <span class="byline__av" style="width:52px;height:52px;font-size:1rem">HP</span>
 <h3>Helen Pineapple</h3><p>Co-founder &amp; Head of Design</p></div><div class="card" data-reveal>
 <span class="byline__av" style="width:52px;height:52px;font-size:1rem">AT</span>
 <h3>Alex Tomato</h3><p>SEO &amp; Brand Manager</p></div><div class="card" data-reveal>
 <span class="byline__av" style="width:52px;height:52px;font-size:1rem">JB</span>
 <h3>Jenny Berry</h3><p>Frontend Developer</p></div>
 </div>
 </div>
</section>

<section class="band shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Clients</p><h2>Teams we've built for</h2></div>
 </div>
 <ul class="clientwall" data-reveal><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('img/clients-logo/dunya_dark.png?v=2.0') }}" alt="Dunya Car Rental logo" width="160" height="48" loading="lazy"><span>Rental &amp; booking platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('img/clients-logo/auto-nation-dark.png?v=2.0') }}" alt="Autonation Rent a Car logo" width="160" height="48" loading="lazy"><span>Fleet &amp; reservations</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('img/clients-logo/bxience-dark.png?v=2.0') }}" alt="Bxience logo" width="160" height="48" loading="lazy"><span>Corporate web platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('img/clients-logo/link_loop_dark.png?v=2.0') }}" alt="Link Loop logo" width="160" height="48" loading="lazy"><span>SEO programme</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('img/clients-logo/tukarwale_dark.png?v=2.0') }}" alt="Tutorwale logo" width="160" height="48" loading="lazy"><span>Marketplace</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('img/clients-logo/jarry_logistics_dark.png?v=2.0') }}" alt="Jarry Logistics logo" width="160" height="48" loading="lazy"><span>Operations dashboard</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('img/clients-logo/vepo_dark.png?v=2.0') }}" alt="Vepo logo" width="160" height="48" loading="lazy"><span>Mobile app</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('img/clients-logo/bii-dark.png?v=2.0') }}" alt="BII logo" width="160" height="48" loading="lazy"><span>CRM integration</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('img/clients-logo/nmims_dark.png?v=2.0') }}" alt="NMIMS logo" width="160" height="48" loading="lazy"><span>Education platform</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('img/clients-logo/glance_dark.png?v=2.0') }}" alt="Glance logo" width="160" height="48" loading="lazy"><span>Consumer platform work</span></li><li class="clientlogo"><img class="clientlogo__img" src="{{ asset('img/clients-logo/roposo_clout_dark.png?v=2.0') }}" alt="Roposo Clout logo" width="160" height="48" loading="lazy"><span>Consumer platform work</span></li></ul>
</section>

</main>
@endsection