@extends('frontend.layouts.app')

@section('title', 'Book a Free Consultation | Edion Web Technologies')
@section('description', 'Book a free 30-minute consultation with an Edion engineer. Get a realistic scope, timeline and budget for your website, app, car rental platform or SEO campaign, with no obligation.')
@section('keywords', 'free consultation, free website consultation, software project quote, car rental software consultation, SEO audit consultation')

@section('main-container')
<main id="main"><a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page"><b class="kw3">Free consultation</b></li></ol></nav>
 <p class="eyebrow eyebrow--dot">Usually booked within 2 working days</p>
 <h1 style="margin-top:var(--sp-4)">Thirty minutes with an engineer.</h1>
 <p class="lead">
 Not a sales call. You describe what you're trying to build or fix; we tell you what it
 realistically takes, what it costs, and which parts you should postpone. You keep the notes
 either way.
 </p>
</section>

<section class="band band--tight shell">
 <div class="split">
 <div data-reveal>
 <p class="eyebrow">What happens</p>
 <h2 class="vh">What happens after you submit the form</h2>
 <div class="steps" style="margin-top:var(--sp-5)">
 <div class="step" style="grid-template-columns:3rem 1fr;border-color:var(--paper-3)">
 <p class="step__n" style="color:var(--text-3)">01</p>
 <div><h3 style="color:var(--text);font-size:var(--fs-h4)">You send the brief</h3>
 <p style="color:var(--text-2)">A paragraph is enough. Links to anything relevant help.</p></div>
 </div>
 <div class="step" style="grid-template-columns:3rem 1fr;border-color:var(--paper-3)">
 <p class="step__n" style="color:var(--text-3)">02</p>
 <div><h3 style="color:var(--text);font-size:var(--fs-h4)">We prepare</h3>
 <p style="color:var(--text-2)">We look at your site, your competitors and your stack
 before the call, so we don't spend it asking basics.</p></div>
 </div>
 <div class="step" style="grid-template-columns:3rem 1fr;border-color:var(--paper-3)">
 <p class="step__n" style="color:var(--text-3)">03</p>
 <div><h3 style="color:var(--text);font-size:var(--fs-h4)">We talk, 30 minutes</h3>
 <p style="color:var(--text-2)">Scope, sequence, risks, and a budget range. Video or phone,
 your choice.</p></div>
 </div>
 <div class="step" style="grid-template-columns:3rem 1fr;border-color:var(--paper-3);border-bottom:0">
 <p class="step__n" style="color:var(--text-3)">04</p>
 <div><h3 style="color:var(--text);font-size:var(--fs-h4)">You get it in writing</h3>
 <p style="color:var(--text-2)">A short summary with the scope and number, so you can take
 it to whoever signs off. No obligation to proceed.</p></div>
 </div>
 </div>
 <div class="callout" style="margin-top:var(--sp-6)">
 <b>Prefer to just call?</b>
 <a href="tel:+919696787596">+91 96967 87596</a> &middot; <a href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">WhatsApp</a><br>
 Monday to Saturday, 10:00-20:00 IST.
 </div>
 </div>

 <div class="card" style="padding:clamp(1.5rem,3vw,2.5rem)" data-reveal>
 <h2 style="font-size:var(--fs-h3)">Book your slot</h2>
 <p style="color:var(--text-2)">Fields marked <i style="color:var(--hold);font-style:normal">*</i> are required.</p>
 <form class="form" data-validate novalidate style="margin-top:var(--sp-4)">
 <div class="row">
 <div class="field">
 <label for="fc-name">Full name <i>*</i></label>
 <input id="fc-name" name="name" type="text" required autocomplete="name" placeholder="Your name">
 </div>
 <div class="field">
 <label for="fc-company">Company</label>
 <input id="fc-company" name="company" type="text" autocomplete="organization" placeholder="Optional">
 </div>
 </div>
 <div class="row">
 <div class="field">
 <label for="fc-email">Work email <i>*</i></label>
 <input id="fc-email" name="email" type="email" required autocomplete="email" placeholder="you@company.com">
 </div>
 <div class="field">
 <label for="fc-phone">WhatsApp number <i>*</i></label>
 <input id="fc-phone" name="phone" type="tel" required autocomplete="tel" placeholder="+91 00000 00000">
 </div>
 </div>
 <div class="field">
 <label for="fc-interest">What do you need? <i>*</i></label>
 <select id="fc-interest" name="interest" required>
 <option value="">Choose one</option>
 <option>Car rental or fleet software</option>
 <option>Website design &amp; development</option>
 <option>E-commerce build</option>
 <option>Mobile app</option>
 <option>Custom software or internal system</option>
 <option>SEO or digital marketing</option>
 <option>AI, data or cloud work</option>
 <option>Something else</option>
 </select>
 </div>
 <div class="field">
 <label for="fc-budget">Budget range</label>
 <select id="fc-budget" name="budget">
 <option value="">Prefer not to say</option>
 <option>Under $2,000</option>
 <option>$2,000 - $10,000</option>
 <option>$10,000 - $50,000</option>
 <option>$50,000+</option>
 <option>Monthly retainer</option>
 </select>
 <p class="hint">A range helps us bring the right person to the call. It isn't a commitment.</p>
 </div>
 <div class="field">
 <label for="fc-brief">Tell us about the project <i>*</i></label>
 <textarea id="fc-brief" name="brief" required
 placeholder="What are you building or fixing? What's the deadline? Anything already in place?"></textarea>
 </div>
 <div class="checks">
 <label class="check"><input type="checkbox" name="nda">
 <span>I'd like an NDA in place before we talk in detail.</span></label>
 <label class="check"><input type="checkbox" name="consent" required>
 <span>I agree to Edion contacting me about this enquiry.
 See our <a href="{{ url('/privacy-policy') }}" style="text-decoration:underline">privacy policy</a>. <i style="color:var(--hold);font-style:normal">*</i></span></label>
 </div>
 <button class="btn btn--signal" type="submit" style="justify-content:center">
 Request my consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
 <p class="hint" data-form-note hidden
 style="color:var(--available);font-weight:600"></p>
 </form>
 </div>
 </div>
</section>

<div class="rail" aria-label="Production systems we build and maintain"><ul class="rail__track"><li class="rail__item"><span class="dot dot--live"></span><b>Dunya Car Rental</b> &middot; Rental &amp; booking platform</li><li class="rail__item"><span class="dot dot--live"></span><b>Autonation Rent a Car</b> &middot; Fleet + reservations</li><li class="rail__item"><span class="dot dot--live"></span><b>Bxience</b> &middot; Corporate web platform</li><li class="rail__item"><span class="dot dot--build"></span><b>Tutorwale</b> &middot; Marketplace build</li><li class="rail__item"><span class="dot dot--live"></span><b>Jarry Logistics</b> &middot; Ops dashboard</li><li class="rail__item"><span class="dot dot--live"></span><b>Link Loop</b> &middot; SEO campaign, month 14</li><li class="rail__item"><span class="dot dot--live"></span><b>Vepo</b> &middot; Mobile app, iOS + Android</li><li class="rail__item"><span class="dot dot--build"></span><b>BII</b> &middot; CRM integration</li></ul></div>

</main>
@endsection