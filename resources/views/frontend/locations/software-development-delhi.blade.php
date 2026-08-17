@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Software & Web Development in Delhi, India | Edion')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Software, web, mobile and SEO services for businesses in Delhi, India. Car rental and fleet platforms a speciality.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'software development delhi, web development delhi, seo services delhi, app development delhi')

@section('main-container')
<main id="main">
<a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ route('industry.detail', ['slug'=>'locations']) }}">Locations</a></li><li aria-current="page">Delhi</li></ol></nav>
 <div class="cityhero">
 <div>
 <p class="eyebrow">India &middot; India</p>
 <h1 style="margin-top:var(--sp-4)">Software and web development in Delhi</h1>
 <p class="lead">We build software, websites, apps and growth campaigns for businesses in
 Delhi and across <span class="kw kw--loc">India</span>. Car rental and fleet platforms are our deepest specialism.</p>
 <div class="btn-row" style="margin-top:var(--sp-6)">
 <a class="btn btn--ink" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 <a class="btn btn--line" href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}">Cost calculator</a>
 </div>
 </div>
 <img src="{{ asset('assets/frontend/img/city/delhi.svg') }}" alt="Abstract skyline representing Delhi"
 width="320" height="340" loading="eager" decoding="async">
 </div>
</section>

@include('frontend.partials.badgegrid')


<section class="band band--tight shell">
 <div class="lp-facts" data-reveal><div class="lp-fact"><b>INR</b><span>Quoting currency</span></div><div class="lp-fact"><b>18% GST</b><span>Handled in invoicing</span></div><div class="lp-fact"><b>IST</b><span>Working-hours overlap</span></div><div class="lp-fact"><b>Hindi</b><span>Primary interface language</span></div></div>
</section>



<section class="band shell">
 <div class="article">
 <div class="article__body"><h2>Delhi NCR competes on operations, not acquisition</h2><p>Rental and chauffeur competition across Delhi NCR is dense and margins are thin. In that environment the software that pays for itself is not the software that brings in more bookings, it is the software that reduces the cost of servicing the bookings you already have: dispatch efficiency, driver settlement automation, and <b class="kw2">utilisation</b> reporting that shows you which vehicles are quietly losing money.</p><h2>Dispatch is a real-time system</h2><p>Assigning the nearest available driver, absorbing a no-show, and re-routing mid-trip are real-time concerns that a reservation database was never designed for. If you run chauffeur operations alongside self-drive rental, treat dispatch as its own module sharing the <b class="kw2">fleet register</b>, not as a checkbox on a rental build. Getting this wrong is the most common architectural mistake we are asked to fix in NCR.</p><h2>Driver settlements eat Fridays</h2><p>Commission splits, cash trips, tips, fuel advances and deductions. Operators who have not automated this spend every Friday reconciling by hand, and the errors compound into driver disputes. Automating settlement is unglamorous and it is usually the single highest-return module for an NCR operator.</p><h2>Multi-state operations from day one</h2><p>NCR spans Delhi, Haryana and Uttar Pradesh. Permits, tax treatment and inter-state movement all vary, and a system that assumed a single state will fight you. We model state as a first class concern in the data layer.</p></div>
 <aside class="aside">
 <div class="card" style="padding:var(--sp-5)">
 <p class="card__idx">Free, 30 minutes</p>
 <h3 style="font-size:var(--fs-h4)">Get a real number</h3>
 <p>Talk to an engineer, not a salesperson. Scope, timeline and budget in writing afterwards.</p>
 <a class="btn btn--signal" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}" style="justify-content:center">Book a call<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 <div class="card" style="padding:var(--sp-5)">
 <p class="card__idx">Free tool</p>
 <h3 style="font-size:var(--fs-h4)">Cost calculator</h3>
 <p>Estimate a rental platform build by module. No email required.</p>
 <a class="btn btn--line" href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}"
 style="justify-content:center">Open it<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 </aside>
 </div>
</section>

<section class="band band--ink">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Delhi questions</p><h2>Asked by operators here</h2></div>
 </div>
 <div class="acc" style="max-width:60rem;border-color:var(--ink-3)" data-reveal>
 <details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Do you handle chauffeur and self-drive in one system?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>They share a fleet register but need separate dispatch and reservation logic. We build them as distinct modules over common data rather than forcing one flow to do both.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Can you automate driver settlements?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Yes, and for most NCR operators it is the module with the fastest payback. Commission rules, cash handling, advances and deductions all become configurable.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">How do you handle inter-state permits and tax?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>State is modelled explicitly in the data layer so permits, tax treatment and inter-state movement rules can differ per journey rather than being hard-coded.</p></div></details>
 </div>
 </div>
</section>
<section class="band">
 <div class="shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Technology</p><h2>The stack we build on.</h2>
 <p>Chosen for what your team can hire for and maintain. We would rather use a boring
 technology that will still be supported in five years than a fashionable one that won't.</p></div>
 <a class="btn btn--line" href="{{ route('industry.detail', ['slug'=>'services']) }}">All services<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 <div class="stackgroup" data-reveal><p class="lbl">Frontend</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/stack/react.svg') }}" alt="React logo" width="26" height="26" loading="lazy" decoding="async"><span>React</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/angular.svg') }}" alt="Angular logo" width="26" height="26" loading="lazy" decoding="async"><span>Angular</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/vuedotjs.svg') }}" alt="Vue.js logo" width="26" height="26" loading="lazy" decoding="async"><span>Vue.js</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/nextdotjs.svg') }}" alt="Next.js logo" width="26" height="26" loading="lazy" decoding="async"><span>Next.js</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/typescript.svg') }}" alt="TypeScript logo" width="26" height="26" loading="lazy" decoding="async"><span>TypeScript</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/javascript.svg') }}" alt="JavaScript logo" width="26" height="26" loading="lazy" decoding="async"><span>JavaScript</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/tailwindcss.svg') }}" alt="Tailwind CSS logo" width="26" height="26" loading="lazy" decoding="async"><span>Tailwind CSS</span></div></div></div><div class="stackgroup" data-reveal><p class="lbl">Backend</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/stack/php.svg') }}" alt="PHP logo" width="26" height="26" loading="lazy" decoding="async"><span>PHP</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/laravel.svg') }}" alt="Laravel logo" width="26" height="26" loading="lazy" decoding="async"><span>Laravel</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/python.svg') }}" alt="Python logo" width="26" height="26" loading="lazy" decoding="async"><span>Python</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/nodedotjs.svg') }}" alt="Node.js logo" width="26" height="26" loading="lazy" decoding="async"><span>Node.js</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/express.svg') }}" alt="Express logo" width="26" height="26" loading="lazy" decoding="async"><span>Express</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/dotnet.svg') }}" alt=".NET logo" width="26" height="26" loading="lazy" decoding="async"><span>.NET</span></div></div></div><div class="stackgroup" data-reveal><p class="lbl">Mobile</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/stack/flutter.svg') }}" alt="Flutter logo" width="26" height="26" loading="lazy" decoding="async"><span>Flutter</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/android.svg') }}" alt="Android logo" width="26" height="26" loading="lazy" decoding="async"><span>Android</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/apple.svg') }}" alt="iOS logo" width="26" height="26" loading="lazy" decoding="async"><span>iOS</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/kotlin.svg') }}" alt="Kotlin logo" width="26" height="26" loading="lazy" decoding="async"><span>Kotlin</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/swift.svg') }}" alt="Swift logo" width="26" height="26" loading="lazy" decoding="async"><span>Swift</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/firebase.svg') }}" alt="Firebase logo" width="26" height="26" loading="lazy" decoding="async"><span>Firebase</span></div></div></div><div class="stackgroup" data-reveal><p class="lbl">Data & infrastructure</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/stack/mysql.svg') }}" alt="MySQL logo" width="26" height="26" loading="lazy" decoding="async"><span>MySQL</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/postgresql.svg') }}" alt="PostgreSQL logo" width="26" height="26" loading="lazy" decoding="async"><span>PostgreSQL</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/mongodb.svg') }}" alt="MongoDB logo" width="26" height="26" loading="lazy" decoding="async"><span>MongoDB</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/redis.svg') }}" alt="Redis logo" width="26" height="26" loading="lazy" decoding="async"><span>Redis</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/docker.svg') }}" alt="Docker logo" width="26" height="26" loading="lazy" decoding="async"><span>Docker</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/googlecloud.svg') }}" alt="Google Cloud logo" width="26" height="26" loading="lazy" decoding="async"><span>Google Cloud</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/cloudflare.svg') }}" alt="Cloudflare logo" width="26" height="26" loading="lazy" decoding="async"><span>Cloudflare</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/stripe.svg') }}" alt="Stripe logo" width="26" height="26" loading="lazy" decoding="async"><span>Stripe</span></div></div></div><div class="stackgroup" data-reveal><p class="lbl">Commerce & CMS</p><div class="techgrid"><div class="tech"><img src="{{ asset('assets/frontend/img/stack/wordpress.svg') }}" alt="WordPress logo" width="26" height="26" loading="lazy" decoding="async"><span>WordPress</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/shopify.svg') }}" alt="Shopify logo" width="26" height="26" loading="lazy" decoding="async"><span>Shopify</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/woocommerce.svg') }}" alt="WooCommerce logo" width="26" height="26" loading="lazy" decoding="async"><span>WooCommerce</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/wix.svg') }}" alt="Wix logo" width="26" height="26" loading="lazy" decoding="async"><span>Wix</span></div><div class="tech"><img src="{{ asset('assets/frontend/img/stack/squarespace.svg') }}" alt="Squarespace logo" width="26" height="26" loading="lazy" decoding="async"><span>Squarespace</span></div></div></div>
 </div>
</section>

@include('frontend.partials.badgegrid')

<section class="band shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Services</p><h2>What we deliver in Delhi</h2></div>
 </div>
 <div class="linkmatrix" data-reveal>
 <div><p class="lbl">All services in Delhi</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-software-development-delhi']) }}">Car rental software development in Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'fleet-management-software-delhi']) }}">Fleet management software in Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-booking-engine-delhi']) }}">Car rental booking engine in Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'vehicle-rental-app-development-delhi']) }}">Vehicle rental app development in Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'chauffeur-limousine-booking-software-delhi']) }}">Chauffeur and limousine booking software in Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'website-development-delhi']) }}">Website development in Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'custom-software-development-delhi']) }}">Custom software development in Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'mobile-app-development-delhi']) }}">Mobile app development in Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ecommerce-development-delhi']) }}">E-commerce development in Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'seo-services-delhi']) }}">SEO services in Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'local-seo-services-delhi']) }}">Local SEO services in Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ppc-advertising-delhi']) }}">PPC advertising in Delhi</a></li></ul></div>
 <div><p class="lbl">Other India markets</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'software-development-lucknow']) }}">Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-mumbai']) }}">Mumbai</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-bangalore']) }}">Bangalore</a></li></ul></div>
 <div><p class="lbl">Tools</p><ul>
 <li><a href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}">Rental software cost calculator</a></li>
 <li><a href="{{ route('industry.detail', ['slug'=>'pricing']) }}">SEO pricing</a></li></ul></div>
 </div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection