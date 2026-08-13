@extends('frontend.layouts.app')

@section('title', 'FAQ | Website, App, Software & SEO Questions | Edion Web Technologies')
@section('description', 'Straight answers on timelines, costs, code ownership, car rental software scope, post-launch support and SEO expectations, from Edion Web Technologies.')
@section('keywords', 'website development FAQ, software development questions, car rental software FAQ, SEO questions, web design cost, code ownership')

@section('main-container')
<main id="main"><a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">FAQ</li></ol></nav>
 <p class="eyebrow">Frequently asked</p>
 <h1 style="margin-top:var(--sp-4)">Twelve questions, answered properly.</h1>
 <p class="lead">
 Including the ones where the honest answer is inconvenient for us. If your question isn't
 here, <a href="{{ url('/contact') }}" style="text-decoration:underline;text-decoration-color:var(--signal);text-decoration-thickness:2px;text-underline-offset:3px">ask
 us directly</a>, we answer within one working day.
 </p>
</section>

<section class="band band--tight shell">
 <div class="acc" style="max-width:60rem" data-reveal>
 <details><summary>How long does a website or platform take to build?</summary>
 <div class="acc__body"><p>A marketing site with up to 15 pages typically runs 4 to 6 weeks. A web application or rental platform runs 3 to 6 months depending on how many modules you need in the first release. We give you a phase-by-phase timeline before you sign, and we flag slippage in the weekly update rather than at the deadline.</p></div></details><details><summary>What does car rental software actually include?</summary>
 <div class="acc__body"><p>At minimum: a vehicle and <b class="kw2">fleet register</b>, availability and booking logic, a pricing engine with seasonal and duration rules, a customer record, payment capture, and a back office for counter staff. Most operators then add damage and inspection records, chauffeur dispatch, corporate accounts with credit terms, <b class="kw2">multi-branch</b> transfers, and integrations with accounting or <b class="kw2">telematics</b>. We scope which of these belong in release one and which can wait.</p></div></details><details><summary>How much does it cost?</summary>
 <div class="acc__body"><p>SEO packages are published on our <a href="{{ url('/seo-package') }}">pricing page</a>, starting at $361.45 per month. Design and development are quoted per project because the range is genuinely wide: a brochure site sits in the low thousands, a rental platform with payments and fleet management runs into the tens of thousands. A 30-minute consultation gets you a real number.</p></div></details><details><summary>Do you work with clients outside India?</summary>
 <div class="acc__body"><p>Yes. Most of our work is for clients in Jordan, the UAE, Bahrain, the USA, the UK and Canada. We keep overlapping hours with Gulf and European time zones, and we have a US number on <a href="tel:+919696787596">+91 96967 87596</a> for North American clients.</p></div></details><details><summary>Who owns the code and the design files?</summary>
 <div class="acc__body"><p>You do, on final payment. That is written into the contract. You get the repository, the design source files, the credentials and the deployment documentation. We do not hold clients hostage with hosting or access.</p></div></details><details><summary>What happens after launch?</summary>
 <div class="acc__body"><p>You get 30 days of bug fixes at no cost, plus handover documentation and a walkthrough session. After that most clients move to a support retainer covering monitoring, updates, security patches and a defined response time. It is optional, and you can leave it at any point without losing access to anything.</p></div></details><details><summary>Can you take over a project another agency started?</summary>
 <div class="acc__body"><p>Often, yes. We start with a paid technical audit of what exists so we can tell you honestly whether it is worth continuing or cheaper to rebuild. Roughly a third of the time the honest answer is rebuild, and we will say so even though the audit fee is smaller than the rebuild.</p></div></details><details><summary>How long before SEO produces results?</summary>
 <div class="acc__body"><p>Expect three to six months before meaningful movement on competitive terms, longer on a new domain. Technical fixes can show faster, indexing and <b class="kw2">Core Web Vitals</b> problems sometimes resolve within weeks. We do not sell ranking guarantees, because no agency controls Google's index.</p></div></details><details><summary>Do you guarantee first-page rankings?</summary>
 <div class="acc__body"><p>No, and you should be cautious of anyone who does. We commit to a defined volume of work, white-hat methods, and transparent monthly reporting on rankings, traffic and conversions. Guaranteed placements generally mean either paid ads relabelled as SEO, or link schemes that end in a penalty.</p></div></details><details><summary>What technologies do you build with?</summary>
 <div class="acc__body"><p>React, Angular, Vue and vanilla JavaScript on the front end; PHP, Python.NET and Node on the back end; Flutter, native Android and iOS for mobile. We choose based on what your team can maintain and hire for, not on what is fashionable this year.</p></div></details><details><summary>Will you sign an NDA?</summary>
 <div class="acc__body"><p>Yes, before any detailed discussion if you prefer. Tick the NDA box on the <a href="{{ url('/free-consultation') }}">consultation form</a> and we will send ours, or we will review yours.</p></div></details><details><summary>What do you need from us to start?</summary>
 <div class="acc__body"><p>A clear statement of the problem, access to any existing systems, one decision-maker who can approve work, and prompt feedback at review points. Projects slow down for lack of decisions far more often than for lack of engineering.</p></div></details>
 </div>
</section>

<div class="rail" aria-label="Production systems we build and maintain"><ul class="rail__track"><li class="rail__item"><span class="dot dot--live"></span><b>Dunya Car Rental</b> &middot; Rental &amp; booking platform</li><li class="rail__item"><span class="dot dot--live"></span><b>Autonation Rent a Car</b> &middot; Fleet + reservations</li><li class="rail__item"><span class="dot dot--live"></span><b>Bxience</b> &middot; Corporate web platform</li><li class="rail__item"><span class="dot dot--build"></span><b>Tutorwale</b> &middot; Marketplace build</li><li class="rail__item"><span class="dot dot--live"></span><b>Jarry Logistics</b> &middot; Ops dashboard</li><li class="rail__item"><span class="dot dot--live"></span><b>Link Loop</b> &middot; SEO campaign, month 14</li><li class="rail__item"><span class="dot dot--live"></span><b>Vepo</b> &middot; Mobile app, iOS + Android</li><li class="rail__item"><span class="dot dot--build"></span><b>BII</b> &middot; CRM integration</li></ul></div>

<section class="band shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Still deciding</p><h2>Two ways to go deeper</h2></div>
 </div>
 <div class="grid g-2">
 <a class="card card--hover" href="{{ url('/free-consultation') }}" data-reveal>
 <p class="card__idx">No cost</p><h3>Book a consultation</h3>
 <p>Thirty minutes with an engineer. Scope, timeline and a budget range in writing afterwards.</p>
 <span class="post__more">Book a slot<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
 </a>
 <a class="card card--hover" href="{{ url('/works') }}" data-reveal>
 <p class="card__idx">Evidence</p><h3>Look at the work</h3>
 <p>Eight systems with their current status. Ask and we'll introduce you to the clients behind them.</p>
 <span class="post__more">See case studies<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
 </a>
 </div>
</section>

</main>
@endsection