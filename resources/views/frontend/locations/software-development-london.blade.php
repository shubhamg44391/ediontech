@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Software & Web Development in London, United Kingdom | Edion')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Software, web, mobile and SEO services for businesses in London, United Kingdom. Car rental and fleet platforms a speciality.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'software development london, web development london, seo services london, app development london')

@section('main-container')
<main id="main">
<a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ route('industry.detail', ['slug'=>'locations']) }}">Locations</a></li><li aria-current="page">London</li></ol></nav>
 <div class="cityhero">
 <div>
 <p class="eyebrow">United Kingdom &middot; Europe</p>
 <h1 style="margin-top:var(--sp-4)">Software and web development in London</h1>
 <p class="lead">We build software, websites, apps and growth campaigns for businesses in
 <span class="kw kw--loc">London</span> and across <span class="kw kw--loc">United Kingdom</span>. Car rental and fleet platforms are our deepest specialism.</p>
 <div class="btn-row" style="margin-top:var(--sp-6)">
 <a class="btn btn--ink" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 <a class="btn btn--line" href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}">Cost calculator</a>
 </div>
 </div>
 <img src="{{ asset('assets/frontend/img/city/london.svg') }}" alt="Abstract skyline representing London"
 width="320" height="340" loading="eager" decoding="async">
 </div>
</section>

@include('frontend.partials.badgegrid')


<section class="band band--tight shell">
 <div class="lp-facts" data-reveal><div class="lp-fact"><b>GBP</b><span>Quoting currency</span></div><div class="lp-fact"><b>20% VAT</b><span>Handled in invoicing</span></div><div class="lp-fact"><b>GMT/BST</b><span>Working-hours overlap</span></div><div class="lp-fact"><b>English</b><span>Primary interface language</span></div></div>
</section>



<section class="band shell">
 <div class="article">
 <div class="article__body"><h2>A mature market competes on experience, not visibility</h2><p>UK rental and mobility is price-transparent and heavily aggregated. Customers will find you; the question is whether your booking flow beats the comparison site they arrived from. That shifts investment away from being discoverable and towards conversion: fewer steps, honest total pricing shown early, and instant confirmation. Hidden fees revealed at the final step are the single largest source of abandonment we see in UK funnels.</p><h2>Data protection shapes architecture, not just the policy page</h2><p>Lawful basis, retention periods, subject access and deletion all have to be buildable. If a customer asks you to delete their record and your system cannot do it without breaking the rental history, that is an engineering problem discovered at the worst possible moment. We design retention and deletion paths during data modelling, because retrofitting them is genuinely expensive.</p><h2>Accessibility is increasingly a procurement question</h2><p>Corporate and public-sector clients in the UK increasingly ask for accessibility conformance as part of procurement. We build to WCAG-aligned practice by default, keyboard navigation, visible focus, sufficient contrast, reduced-motion support, rather than treating it as a later audit item, because remediation costs several times what building it correctly does.</p><h2>SERP features, not blue links</h2><p>UK search is among the most competitive English-language markets and the results page is dominated by features: local packs, AI overviews, review snippets, shopping units. Winning here usually means earning a feature rather than a position, which changes what content and <span class="kw kw--tech"><b class="kw2">structured data</b></span> you need.</p></div>
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
 <div><p class="eyebrow">London questions</p><h2>Asked by operators here</h2></div>
 </div>
 <div class="acc" style="max-width:60rem;border-color:var(--ink-3)" data-reveal>
 <details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">How do you handle the time difference?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Our working day overlaps the UK morning substantially, and we schedule reviews in your afternoon. Weekly written updates mean you are never waiting for a call to know status.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Can you invoice in GBP?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Yes, in GBP or USD.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Do you build to accessibility standards?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>By default. Keyboard navigation, visible focus states, contrast ratios and reduced-motion support are part of our normal build rather than an add-on, and we can document conformance for procurement.</p></div></details>
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
 <div><p class="eyebrow">Services</p><h2>What we deliver in London</h2></div>
 </div>
 <div class="linkmatrix" data-reveal>
 <div><p class="lbl">All services in London</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-software-development-london']) }}">Car rental software development in London</a></li><li><a href="{{ route('industry.detail', ['slug'=>'fleet-management-software-london']) }}">Fleet management software in London</a></li><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-booking-engine-london']) }}">Car rental booking engine in London</a></li><li><a href="{{ route('industry.detail', ['slug'=>'vehicle-rental-app-development-london']) }}">Vehicle rental app development in London</a></li><li><a href="{{ route('industry.detail', ['slug'=>'chauffeur-limousine-booking-software-london']) }}">Chauffeur and limousine booking software in London</a></li><li><a href="{{ route('industry.detail', ['slug'=>'website-development-london']) }}">Website development in London</a></li><li><a href="{{ route('industry.detail', ['slug'=>'custom-software-development-london']) }}">Custom software development in London</a></li><li><a href="{{ route('industry.detail', ['slug'=>'mobile-app-development-london']) }}">Mobile app development in London</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ecommerce-development-london']) }}">E-commerce development in London</a></li><li><a href="{{ route('industry.detail', ['slug'=>'seo-services-london']) }}">SEO services in London</a></li><li><a href="{{ route('industry.detail', ['slug'=>'local-seo-services-london']) }}">Local SEO services in London</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ppc-advertising-london']) }}">PPC advertising in London</a></li></ul></div>
 <div><p class="lbl">Other Europe markets</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'software-development-manchester']) }}">Manchester</a></li></ul></div>
 <div><p class="lbl">Tools</p><ul>
 <li><a href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}">Rental software cost calculator</a></li>
 <li><a href="{{ route('industry.detail', ['slug'=>'pricing']) }}">SEO pricing</a></li></ul></div>
 </div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection