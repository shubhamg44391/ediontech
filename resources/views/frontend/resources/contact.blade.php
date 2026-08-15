@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Contact Edion Web Technologies | Lucknow, India')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Talk to Edion Web Technologies about your website, app, car rental platform or SEO campaign. Call or WhatsApp +91 96967 87596, or email contact@ediontech.com. Replies within one working day.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'contact Edion Web Technologies, web development company Lucknow contact, car rental software company contact, software development enquiry')

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
  <p style="color:var(--text-2)">Fields marked <i style="color:var(--hold);font-style:normal">*</i> are required.</p>
  <form class="form" id="contactForm" action="{{ route('contact.store') }}" method="POST" style="margin-top:var(--sp-4)">
  @csrf
  <div class="row">
  <div class="field">
  <label for="c-name">Full name <i>*</i></label>
  <input id="c-name" name="name" type="text" required autocomplete="name" placeholder="Your name">
  </div>
  <div class="field">
  <label for="c-company">Company</label>
  <input id="c-company" name="company" type="text" autocomplete="organization" placeholder="Optional">
  </div>
  </div>
  <div class="row">
  <div class="field">
  <label for="c-email">Work email <i>*</i></label>
  <input id="c-email" name="email" type="email" required autocomplete="email" placeholder="you@company.com">
  </div>
  <div class="field">
  <label for="c-phone">WhatsApp number <i>*</i></label>
  <input id="c-phone" name="phone" type="tel" required autocomplete="tel" placeholder="+91 00000 00000">
  </div>
  </div>
  <div class="field">
  <label for="c-interest">What do you need? <i>*</i></label>
  <select id="c-interest" name="interest" required>
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
  <label for="c-budget">Budget range</label>
  <select id="c-budget" name="budget">
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
  <label for="c-message">Tell us about the project <i>*</i></label>
  <textarea id="c-message" name="message" required
  placeholder="What are you building or fixing? What's the deadline? Anything already in place?"></textarea>
  </div>
  <div class="checks">
  <label class="check"><input type="checkbox" name="nda">
  <span>I'd like an NDA in place before we talk in detail.</span></label>
  <label class="check"><input type="checkbox" name="consent" required>
  <span>I agree to Edion contacting me about this enquiry. See our
  <a href="{{ url('/privacy-policy') }}" style="text-decoration:underline">privacy policy</a>.
  <i style="color:var(--hold);font-style:normal">*</i></span></label>
  </div>
  
  <div class="field" style="margin-top:var(--sp-4); margin-bottom:var(--sp-4);">
    <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:14px; padding:20px;">
      <div style="display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;">
        <div style="background:#ffffff; padding:6px 12px; border-radius:8px; border:1px solid #cbd5e1; display:inline-flex; align-items:center;">
          <span id="c-captcha-img">{!! captcha_img() !!}</span>
        </div>
        <button type="button" id="cReloadCaptcha" style="display:inline-flex; align-items:center; gap:8px; background:#ffffff; border:1px solid #cbd5e1; border-radius:8px; padding:8px 14px; font-size:13px; font-weight:600; color:#475569; cursor:pointer; transition:all 0.2s ease;">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"/></svg>
          <span>Click to refresh code</span>
        </button>
      </div>
      
      <label style="display:block; font-size:11px; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; color:#475569; margin-top:16px; margin-bottom:8px;">CAPTCHA</label>
      <input name="captcha" type="text" required
        placeholder="Enter Captcha Code"
        style="background:#ffffff; border:1px solid #cbd5e1; border-radius:10px; padding:12px 16px; font-size:15px; width:100%; color:#0f172a;">
    </div>
  </div>

  <button class="btn btn--signal" id="cSubmitBtn" type="submit" style="justify-content:center">
  Send message<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
  </form>

  @push('scripts')
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(e) {
      const btn = e.target.closest('#cReloadCaptcha, #reloadCaptcha');
      if (btn) {
        e.preventDefault();
        fetch('{{ url("reload-captcha") }}')
          .then(res => res.json())
          .then(data => {
            document.querySelectorAll('#c-captcha-img, #captcha-img').forEach(el => {
              el.innerHTML = data.captcha;
            });
          })
          .catch(err => console.error('Captcha refresh error:', err));
      }
    });

    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
      contactForm.addEventListener('submit', function(e) {
        e.preventDefault();

        if (!contactForm.checkValidity()) {
          contactForm.reportValidity();
          
          let missing = [];
          const name = contactForm.querySelector('input[name="name"]');
          const email = contactForm.querySelector('input[name="email"]');
          const phone = contactForm.querySelector('input[name="phone"]');
          const interest = contactForm.querySelector('select[name="interest"]');
          const message = contactForm.querySelector('textarea[name="message"]');
          const consent = contactForm.querySelector('input[name="consent"]');
          const captcha = contactForm.querySelector('input[name="captcha"]');

          if (!name || !name.value.trim()) missing.push('Full Name');
          if (!email || !email.value.trim()) missing.push('Work Email');
          if (!phone || !phone.value.trim()) missing.push('WhatsApp Number');
          if (!interest || !interest.value) missing.push('What do you need');
          if (!message || !message.value.trim()) missing.push('Project Brief');
          if (!consent || !consent.checked) missing.push('Privacy Policy agreement');
          if (!captcha || !captcha.value.trim()) missing.push('Captcha Code');

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