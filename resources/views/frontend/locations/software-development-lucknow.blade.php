@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Software & Web Development in Lucknow, India | Edion')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Software, web, mobile and SEO services for businesses in Lucknow, India. Car rental and fleet platforms a speciality.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'software development lucknow, web development lucknow, seo services lucknow, app development lucknow')

@section('main-container')
<main id="main">
<a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li><a href="{{ route('industry.detail', ['slug'=>'locations']) }}">Locations</a></li><li aria-current="page">Lucknow</li></ol></nav>
 <div class="cityhero">
 <div>
 <p class="eyebrow">India &middot; India</p>
 <h1 style="margin-top:var(--sp-4)">Software and web development in Lucknow</h1>
 <p class="lead">We build software, websites, apps and growth campaigns for businesses in
 <span class="kw kw--loc">Lucknow</span> and across <span class="kw kw--loc">India</span>. Car rental and fleet platforms are our deepest specialism.</p>
 <div class="btn-row" style="margin-top:var(--sp-6)">
 <a class="btn btn--ink" href="{{ route('industry.detail', ['slug'=>'free-consultation']) }}">Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 <a class="btn btn--line" href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}">Cost calculator</a>
 </div>
 </div>
 <img src="{{ asset('assets/frontend/img/city/lucknow.svg') }}" alt="Abstract skyline representing Lucknow"
 width="320" height="340" loading="eager" decoding="async">
 </div>
</section>

@include('frontend.partials.badgegrid')


<section class="band band--tight shell">
 <div class="lp-facts" data-reveal><div class="lp-fact"><b>INR</b><span>Quoting currency</span></div><div class="lp-fact"><b>18% GST</b><span>Handled in invoicing</span></div><div class="lp-fact"><b>IST</b><span>Working-hours overlap</span></div><div class="lp-fact"><b>Hindi</b><span>Primary interface language</span></div></div>
</section>



<section class="band shell">
 <div class="article">
 <div class="article__body"><h2>This is where the engineering actually happens</h2><p>Our team is in <span class="kw kw--loc">Lucknow</span>. For local clients that means in-person working sessions, whiteboard kickoffs and the shortest feedback loop we can offer anywhere. You can visit the people writing your code, which is a materially different relationship from a vendor you only meet on video.</p><h2>Built for how Indian businesses actually transact</h2><p>GST-compliant invoicing with correct HSN and SAC treatment, UPI and domestic gateway integration, and Hindi interface content are standard inclusions rather than extras. We have built these enough times that they are not project risk. Payment reconciliation against UPI in particular is something teams new to the Indian market consistently underestimate.</p><h2>Performance budgets for real devices</h2><p>Indian audiences are overwhelmingly mobile and frequently on variable connections. We test on mid-range Android hardware rather than flagship devices, and we hold builds to a performance budget. This site is the demonstration: four network requests and a sub-400ms content load. A site that only performs on good hardware and good signal is not performing.</p><h2>Growing from Lucknow outward</h2><p>Several of our clients started with a UP-focused operation and expanded nationally. Building multi-state tax handling, multi-language content and <b class="kw2">multi-branch</b> operations into the data model from the start costs very little; adding them to a system that assumed one state and one language costs a rebuild.</p></div>
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
 <div><p class="eyebrow">Lucknow questions</p><h2>Asked by operators here</h2></div>
 </div>
 <div class="acc" style="max-width:60rem;border-color:var(--ink-3)" data-reveal>
 <details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Can we meet in person?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Yes. We are in Gomti Nagar Extension and we welcome office visits. For local clients we usually run kickoff and major reviews face to face.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Do you handle GST invoicing correctly?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Yes, both in the invoices we issue and in the invoicing logic we build into your platform, including HSN and SAC treatment.</p></div></details><details style="border-color:var(--ink-3)"><summary style="color:var(--text-on-ink)">Do you work with early-stage businesses?</summary><div class="acc__body" style="color:var(--text-on-ink-2)"><p>Yes, including single landing pages and one-off audits. We will tell you honestly if what you need is smaller than what we are a sensible fit for.</p></div></details>
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
 <div><p class="eyebrow">Services</p><h2>What we deliver in Lucknow</h2></div>
 </div>
 <div class="linkmatrix" data-reveal>
 <div><p class="lbl">All services in Lucknow</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-software-development-lucknow']) }}">Car rental software development in Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'fleet-management-software-lucknow']) }}">Fleet management software in Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'car-rental-booking-engine-lucknow']) }}">Car rental booking engine in Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'vehicle-rental-app-development-lucknow']) }}">Vehicle rental app development in Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'chauffeur-limousine-booking-software-lucknow']) }}">Chauffeur and limousine booking software in Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'website-development-lucknow']) }}">Website development in Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'custom-software-development-lucknow']) }}">Custom software development in Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'mobile-app-development-lucknow']) }}">Mobile app development in Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ecommerce-development-lucknow']) }}">E-commerce development in Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'seo-services-lucknow']) }}">SEO services in Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'local-seo-services-lucknow']) }}">Local SEO services in Lucknow</a></li><li><a href="{{ route('industry.detail', ['slug'=>'ppc-advertising-lucknow']) }}">PPC advertising in Lucknow</a></li></ul></div>
 <div><p class="lbl">Other India markets</p><ul><li><a href="{{ route('industry.detail', ['slug'=>'software-development-delhi']) }}">Delhi</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-mumbai']) }}">Mumbai</a></li><li><a href="{{ route('industry.detail', ['slug'=>'software-development-bangalore']) }}">Bangalore</a></li></ul></div>
 <div><p class="lbl">Tools</p><ul>
 <li><a href="{{ route('industry.detail', ['slug'=>'rental-software-cost-calculator']) }}">Rental software cost calculator</a></li>
 <li><a href="{{ route('industry.detail', ['slug'=>'pricing']) }}">SEO pricing</a></li></ul></div>
 </div>
</section>

@include('frontend.partials.badgegrid')
</main>
@endsection