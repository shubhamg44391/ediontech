@extends('frontend.layouts.app')

@section('title', 'Contact Edion Web Technologies | Lucknow, India')
@section('description', 'Talk to Edion Web Technologies about your website, app, car rental platform or SEO campaign. Call or WhatsApp +91 96967 87596, or email contact@ediontech.com. Replies within one working day.')
@section('keywords', 'contact Edion Web Technologies, web development company Lucknow contact, car rental software company contact, software development enquiry')

@section('main-container')
<main id="main"><a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">Contact</li></ol></nav>
 <p class="eyebrow eyebrow--dot">Replies within one working day</p>
 <h1 style="margin-top:var(--sp-4)">Let's talk.</h1>
 <p class="lead">
 A real person reads every message. If you'd rather talk than type, the numbers are below and
 someone answers them Monday to Saturday, <span class="kw kw--num">10</span>:<span class="kw kw--num">00</span> to 20:00 IST.
 </p>
</section>

<section class="band band--tight shell">
 <div class="split">
 <div class="card" style="padding:clamp(1.5rem,3vw,2.5rem);order:2" data-reveal>
 <h2 style="font-size:var(--fs-h3)">Send a message</h2>
 <form class="form" id="contactForm" action="{{ route('contact.store') }}" method="POST" style="margin-top:var(--sp-4)">
 @csrf
 <div class="row">
 <div class="field">
 <label for="c-name">Name <i>*</i></label>
 <input id="c-name" name="name" type="text" required autocomplete="name" placeholder="Your name">
 </div>
 <div class="field">
 <label for="c-email">Email <i>*</i></label>
 <input id="c-email" name="email" type="email" required autocomplete="email" placeholder="you@company.com">
 </div>
 </div>
 <div class="row">
 <div class="field">
 <label for="c-phone">Phone or WhatsApp</label>
 <input id="c-phone" name="phone" type="tel" autocomplete="tel" placeholder="Optional">
 </div>
 <div class="field">
 <label for="c-subject">Subject <i>*</i></label>
 <select id="c-subject" name="subject" required>
 <option value="">Choose one</option>
 <option value="New project enquiry">New project enquiry</option>
 <option value="Car rental / fleet software">Car rental / fleet software</option>
 <option value="SEO or marketing">SEO or marketing</option>
 <option value="Support for an existing project">Support for an existing project</option>
 <option value="Careers">Careers</option>
 <option value="Something else">Something else</option>
 </select>
 </div>
 </div>
 <div class="field">
 <label for="c-message">Message <i>*</i></label>
 <textarea id="c-message" name="message" required
 placeholder="What can we help with?"></textarea>
 </div>
 <label class="check"><input type="checkbox" name="consent" required>
 <span>I agree to Edion contacting me about this enquiry. See our
 <a href="{{ url('/privacy-policy') }}" style="text-decoration:underline">privacy policy</a>.
 <i style="color:var(--hold);font-style:normal">*</i></span></label>
 <button class="btn btn--signal" id="cSubmitBtn" type="submit" style="justify-content:center">
 Send message<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
 </form>

 @push('scripts')
 <script>
 document.addEventListener('DOMContentLoaded', function() {
   const contactForm = document.getElementById('contactForm');
   if (contactForm) {
     contactForm.addEventListener('submit', function(e) {
       e.preventDefault();

       if (!contactForm.checkValidity()) {
         contactForm.reportValidity();
         
         let missing = [];
         const name = contactForm.querySelector('input[name="name"]');
         const email = contactForm.querySelector('input[name="email"]');
         const subject = contactForm.querySelector('select[name="subject"]');
         const message = contactForm.querySelector('textarea[name="message"]');
         const consent = contactForm.querySelector('input[name="consent"]');

         if (!name || !name.value.trim()) missing.push('Name');
         if (!email || !email.value.trim()) missing.push('Email');
         if (!subject || !subject.value) missing.push('Subject');
         if (!message || !message.value.trim()) missing.push('Message');
         if (!consent || !consent.checked) missing.push('Privacy Policy agreement');

         Swal.fire({
           title: 'Validation Error',
           html: 'Please complete all required fields:<br><br><b>' + missing.join(', ') + '</b>',
           icon: 'warning',
           confirmButtonColor: '#2563EB'
         });
         return;
       }

       const btn = document.getElementById('cSubmitBtn');
       btn.disabled = true;
       btn.textContent = 'Sending...';

       const formData = new FormData(contactForm);

       fetch(contactForm.action, {
         method: 'POST',
         headers: {
           'X-Requested-With': 'XMLHttpRequest',
           'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
         },
         body: formData
       })
       .then(res => {
         if (!res.ok) {
           return res.json().then(errData => {
             let errorMsg = 'Please fill out all required fields correctly.';
             if (errData.errors) {
               errorMsg = Object.values(errData.errors).flat().join('<br>');
             } else if (errData.message) {
               errorMsg = errData.message;
             }
             Swal.fire({
               title: 'Validation Error',
               html: errorMsg,
               icon: 'error',
               confirmButtonColor: '#2563EB'
             });
             throw new Error(errorMsg);
           });
         }
         return res.json();
       })
       .then(data => {
         btn.disabled = false;
         btn.innerHTML = 'Send message<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>';
         if (data.success) {
           contactForm.reset();
           Swal.fire({
             title: 'Success!',
             text: data.message || 'Thank you! Your message has been sent successfully.',
             icon: 'success',
             confirmButtonColor: '#2563EB'
           });
         }
       })
       .catch(err => {
         btn.disabled = false;
         btn.innerHTML = 'Send message<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>';
       });
     });
   }
 });
 </script>
 @endpush
 </div>

 <div style="order:1" data-reveal>
 <div class="band--ink" style="border-radius:var(--radius-lg);padding:clamp(1.5rem,3vw,2.5rem)">
 <p class="eyebrow">Direct lines</p>
 <dl class="contact-list" style="margin-top:var(--sp-5)">
 <div class="contact-item">
 <dt>Call or WhatsApp</dt>
 <dd><a href="tel:+919696787596">+91 96967 87596</a>
 <small>Mon-Sat, 10:00-20:00 IST</small></dd>
 </div>
 <div class="contact-item">
 <dt>WhatsApp</dt>
 <dd><a href="https://wa.me/919696787596" target="_blank" rel="noopener noreferrer">+91 96967 87596</a>
 <small>Fastest route to a reply during business hours</small></dd>
 </div>
 <div class="contact-item">
 <dt>Email</dt>
 <dd><a href="mailto:contact@ediontech.com">contact@ediontech.com</a>
 <small>Replies within one working day</small></dd>
 </div>
 <div class="contact-item">
 <dt>Office</dt>
 <dd style="font-size:var(--fs-body);font-family:var(--font-body);font-weight:400;color:var(--text-on-ink-2);line-height:1.7">
 Edion Web Technologies (OPC) Private Limited<br>
 4C 487, Sector 4, Gomti Nagar Extension<br>Lucknow, Uttar Pradesh 226010<br>India
 </dd>
 </div>
 </dl>
 <a class="btn btn--signal" href="{{ url('/free-consultation') }}"
 style="margin-top:var(--sp-6);justify-content:center;width:100%">
 Book a free consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 </div>
 </div>
</section>

<div class="rail" aria-label="Production systems we build and maintain"><ul class="rail__track"><li class="rail__item"><span class="dot dot--live"></span><b>Dunya Car Rental</b> &middot; Rental &amp; booking platform</li><li class="rail__item"><span class="dot dot--live"></span><b>Autonation Rent a Car</b> &middot; Fleet + reservations</li><li class="rail__item"><span class="dot dot--live"></span><b>Bxience</b> &middot; Corporate web platform</li><li class="rail__item"><span class="dot dot--build"></span><b>Tutorwale</b> &middot; Marketplace build</li><li class="rail__item"><span class="dot dot--live"></span><b>Jarry Logistics</b> &middot; Ops dashboard</li><li class="rail__item"><span class="dot dot--live"></span><b>Link Loop</b> &middot; SEO campaign, month 14</li><li class="rail__item"><span class="dot dot--live"></span><b>Vepo</b> &middot; Mobile app, iOS + Android</li><li class="rail__item"><span class="dot dot--build"></span><b>BII</b> &middot; CRM integration</li></ul></div>

<section class="band shell">
 <div class="sec-head" data-reveal>
 <div><p class="eyebrow">Before you write</p><h2>Answers you might not need to ask for</h2></div>
 <a class="btn btn--line" href="{{ url('/faq') }}">Full FAQ<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
 </div>
 <div class="acc" style="max-width:60rem" data-reveal>
 <details><summary>How quickly will I hear back?</summary>
 <div class="acc__body"><p>Within one working day, from a person rather than an autoresponder.
 Urgent support issues for existing clients go through your named contact instead.</p></div></details>
 <details><summary>Can we sign an NDA first?</summary>
 <div class="acc__body"><p>Yes. Say so in your message and we'll send ours, or review yours.</p></div></details>
 <details><summary>Do you take on small projects?</summary>
 <div class="acc__body"><p>Yes, including single landing pages and one-off audits. We'll tell you
 honestly if what you need is smaller than what we're a sensible fit for.</p></div></details>
 </div>
</section>

</main>
@endsection