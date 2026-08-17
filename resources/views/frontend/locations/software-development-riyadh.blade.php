@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Software & Web Development in Riyadh, Saudi Arabia | Edion')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Software, web, mobile and SEO services for businesses in Riyadh, Saudi Arabia. Car rental and fleet platforms a speciality.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'software development riyadh, web development riyadh, seo services riyadh, app development riyadh')

@section('main-container')
<main id="main">
<a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ route('industry.detail', ['slug'=>'locations']) }}">Locations</a></li><li aria-current="page">Riyadh</li></ol></nav>
 <div class="cityhero">
 <div>
 <p class="eyebrow">Saudi Arabia &middot; Gulf</p>
 <h1 style="margin-top:var(--sp-4)">Software and web development in Riyadh</h1>
 <p class="lead">We build software, websites, apps and growth campaigns for businesses in
 <span class="kw kw--loc">Riyadh</span> and across <span class="kw kw--loc">Saudi Arabia</span>. Car rental and fleet platforms are our deepest specialism.</p>
 <div class="btn-row" style="margin-top:var(--sp-6)">
 <a class="btn btn--ink" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 <a class="btn btn--line" href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}">Cost calculator</a>
 </div>
 </div>
 <img src="{{ asset('assets/frontend/img/city/riyadh.svg') }}" alt="Abstract skyline representing Riyadh"
 width="320" height="340" loading="eager" decoding="async">
 </div>
</section>

@include('frontend.partials.badgegrid')


<section class="band band--tight shell">
 <div class="lp-facts" data-reveal><div class="lp-fact"><b>SAR</b><span>Quoting currency</span></div><div class="lp-fact"><b>15% VAT</b><span>Handled in invoicing</span></div><div class="lp-fact"><b>AST</b><span>Working-hours overlap</span></div><div class="lp-fact"><b>Arabic</b><span>Primary interface language</span></div></div>
</section>



<section class="band shell">
 <div class="article">
 <div class="article__body"><h2><span class="kw kw--loc">Saudi Arabia</span> rewards Arabic-first, not Arabic-also</h2><p>This is the distinction that separates products that work in the Kingdom from products that were localised for it. Arabic-first means the interface is authored in <b class="kw2">Arabic</b> and adapted to English, the default rendering is <b class="kw2">right-to-left</b>, and Arabic typography gets the attention English usually gets. Users notice the difference immediately, and it affects conversion on consumer-facing booking flows more than any other single factor we have measured in this market.</p><h2>Digital-first expectations and self-service depth</h2><p>Saudi consumers have moved to digital service delivery faster than most markets, which raises the baseline for what a rental booking flow must do without a phone call: licence upload, identity verification, contract signature, extension requests and damage reporting. Every one of those you leave offline is counter workload you are choosing to keep.</p><h2>Scale changes the architecture</h2><p>Saudi Arabia is the largest <span class="kw kw--loc">Gulf</span> market by volume, and volume changes engineering decisions. Availability queries that perform acceptably against a two-hundred-vehicle fleet degrade against several thousand across many branches. We design the availability index and caching strategy for the fleet size you expect in three years, not the one you have now, because retrofitting that is a rewrite.</p><h2>Compliance and invoicing</h2><p>Electronic invoicing and tax treatment requirements are real engineering scope in the Kingdom, not a finance afterthought. Confirm your obligations with your accountant early, because they shape the invoicing module and are far cheaper to build in than to add.</p></div>
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
 <div><p class="eyebrow">Riyadh questions</p><h2>Asked by operators here</h2></div>
 </div>
 <div class="acc" style="max-width:60rem;border-color:var(--ink-3)" data-reveal>
 <details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Can you deliver an Arabic-first product?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Yes, and we would recommend it for the Saudi market specifically. That means Arabic as the authoring language with English adapted from it, rather than the reverse.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Do you quote in SAR?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Yes, in SAR or USD, with 15% VAT handled correctly in both our invoicing and the invoicing logic we build.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">How do you handle the volume difference versus a smaller Gulf market?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>We size the availability index and caching for your three-year fleet projection during architecture, because query performance against a large <b class="kw2">multi-branch</b> fleet is the thing that most often forces an expensive rewrite later.</p></div></details>
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
 <div><p class="eyebrow">Services</p><h2>What we deliver in Riyadh</h2></div>
 </div>
 <div class="linkmatrix" data-reveal>
 <div><p class="lbl">All services in Riyadh</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-software-development-riyadh']) }}">Car rental software development in Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'fleet-management-software-riyadh']) }}">Fleet management software in Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-booking-engine-riyadh']) }}">Car rental booking engine in Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'vehicle-rental-app-development-riyadh']) }}">Vehicle rental app development in Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'chauffeur-limousine-booking-software-riyadh']) }}">Chauffeur and limousine booking software in Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'website-development-riyadh']) }}">Website development in Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'custom-software-development-riyadh']) }}">Custom software development in Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'mobile-app-development-riyadh']) }}">Mobile app development in Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ecommerce-development-riyadh']) }}">E-commerce development in Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'seo-services-riyadh']) }}">SEO services in Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'local-seo-services-riyadh']) }}">Local SEO services in Riyadh</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ppc-advertising-riyadh']) }}">PPC advertising in Riyadh</a></li></ul></div>
 <div><p class="lbl">Other Gulf markets</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'software-development-dubai']) }}">Dubai</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-abu-dhabi']) }}">Abu Dhabi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-sharjah']) }}">Sharjah</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-manama']) }}">Manama</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-jeddah']) }}">Jeddah</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-doha']) }}">Doha</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-kuwait-city']) }}">Kuwait City</a></li></ul></div>
 <div><p class="lbl">Tools</p><ul>
 <li><a href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}">Rental software cost calculator</a></li>
 <li><a href="{{ route('industry.detail', ['slug'=>'pricing']) }}">SEO pricing</a></li></ul></div>
 </div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection