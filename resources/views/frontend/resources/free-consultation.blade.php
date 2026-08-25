@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Book a Free Consultation | Edion Web Technologies')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Book a free 30-minute consultation with an Edion engineer. Get a realistic scope, timeline and budget for your website, app, car rental platform or SEO campaign, with no obligation.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'free consultation, free website consultation, software project quote, car rental software consultation, SEO audit consultation')

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
 <form class="form" id="consultationForm" action="{{ route('consultation.store') }}" method="POST" style="margin-top:var(--sp-4)">
 @csrf
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
  <input id="fc-phone" name="phone" type="tel" required autocomplete="tel" placeholder="00000 00000">
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
 placeholder="What are you building or fixing? What's the deadline? What's already in place? Links to specs or current systems help."></textarea>
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
          <span id="fc-captcha-img">{!! captcha_img() !!}</span>
        </div>
        <button type="button" id="fcReloadCaptcha" style="display:inline-flex; align-items:center; gap:8px; background:#ffffff; border:1px solid #cbd5e1; border-radius:8px; padding:8px 14px; font-size:13px; font-weight:600; color:#475569; cursor:pointer; transition:all 0.2s ease;">
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

  <button class="btn btn--signal" id="fcSubmitBtn" type="submit" style="justify-content:center">
  Request my consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
  </form>

@push('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/19.2.16/css/intlTelInput.css"/>
<style>
  .iti {
    width: 100% !important;
    display: block !important;
    position: relative !important;
  }
  .iti input#fc-phone,
  .iti input[type="tel"] {
    width: 100% !important;
    padding-left: 95px !important;
    padding-right: 14px !important;
    padding-top: 0.8125rem !important;
    padding-bottom: 0.8125rem !important;
    font: 400 var(--fs-body)/1.5 var(--font-body) !important;
    color: var(--text) !important;
    background: var(--paper-2, #FFFFFF) !important;
    border: 1px solid var(--paper-3, #E4E8EB) !important;
    border-radius: var(--radius, 4px) !important;
    box-sizing: border-box !important;
    transition: border-color .18s var(--ease), box-shadow .18s var(--ease) !important;
  }
  .iti input#fc-phone:focus {
    outline: none !important;
    border-color: var(--ink) !important;
    box-shadow: 0 0 0 3px color-mix(in srgb, var(--ink) 10%, transparent) !important;
  }
  .iti__selected-flag {
    position: absolute !important;
    top: 1px !important;
    bottom: 1px !important;
    left: 1px !important;
    height: calc(100% - 2px) !important;
    width: 86px !important;
    padding: 0 6px 0 10px !important;
    background: #F8FAFC !important;
    border-right: 1px solid var(--paper-3, #E4E8EB) !important;
    border-radius: 3px 0 0 3px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    gap: 4px !important;
    box-sizing: border-box !important;
  }
  .iti__flag {
    flex-shrink: 0 !important;
  }
  .iti__selected-dial-code {
    color: #1E293B !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    white-space: nowrap !important;
    flex-shrink: 0 !important;
  }
  .iti__arrow {
    border-top-color: #64748B !important;
    flex-shrink: 0 !important;
    margin-left: 2px !important;
  }
  .iti__arrow--up {
    border-bottom-color: #64748B !important;
  }
  .iti__dropdown-content {
    background: #FFFFFF !important;
    border: 1px solid #CBD5E1 !important;
    border-radius: 8px !important;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12) !important;
    color: #1E293B !important;
    z-index: 99999 !important;
    width: 145px !important;
    min-width: 135px !important;
    max-width: 160px !important;
  }
  .iti__search-input-container {
    padding: 8px !important;
    background: #F8FAFC !important;
    border-bottom: 1px solid #E2E8F0 !important;
  }
  .iti__search-input {
    background: #FFFFFF !important;
    border: 1px solid #CBD5E1 !important;
    border-radius: 6px !important;
    padding: 6px 8px !important;
    font-size: 12px !important;
    width: 100% !important;
    outline: none !important;
    color: #0F172A !important;
    box-sizing: border-box !important;
  }
  .iti__search-input:focus {
    border-color: #2563EB !important;
  }
  .iti__country-list {
    max-height: 200px !important;
    background: #FFFFFF !important;
    color: #1E293B !important;
    padding: 3px 0 !important;
  }
  .iti__country {
    padding: 7px 10px !important;
    font-size: 13px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: flex-start !important;
    gap: 8px !important;
    cursor: pointer !important;
  }
  .iti__country:hover, .iti__country.iti__highlight {
    background: #F1F5F9 !important;
  }
  /* Hide country name - show only flag and dial code */
  .iti__country-name {
    display: none !important;
  }
  .iti__dial-code {
    color: #1E293B !important;
    font-weight: 600 !important;
    margin-left: 6px !important;
    font-size: 13px !important;
  }
</style>
@endpush

  @push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/19.2.16/js/intlTelInput.min.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    let fcIti = null;
    const phoneInput = document.getElementById('fc-phone');
    if (phoneInput && window.intlTelInput) {
      fcIti = window.intlTelInput(phoneInput, {
        preferredCountries: ["in", "ae", "sa", "us", "gb", "qa", "om", "kw", "bh", "jo", "ca", "au"],
        initialCountry: "in",
        showSelectedDialCode: true,
        countrySearch: true,
        autoPlaceholder: "polite",
        placeholderNumberType: "MOBILE",
        customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
          return selectedCountryPlaceholder ? selectedCountryPlaceholder.replace(/^\+?\d+\s*/, '') : "00000 00000";
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/19.2.16/js/utils.js"
      });

      fetch('https://ipapi.co/json/')
        .then(res => res.json())
        .then(data => {
          if (data && data.country_code) {
            fcIti.setCountry(data.country_code.toLowerCase());
          }
        })
        .catch(() => {
          fetch('https://ip-api.com/json')
            .then(res => res.json())
            .then(data => {
              if (data && data.countryCode) {
                fcIti.setCountry(data.countryCode.toLowerCase());
              }
            })
            .catch(() => {});
        });

      phoneInput.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9\s]/g, '');
      });
    }

    function refreshFcCaptcha() {
      fetch('{{ url("reload-captcha") }}')
        .then(res => res.json())
        .then(data => {
          document.querySelectorAll('#fc-captcha-img, #c-captcha-img, #captcha-img').forEach(el => {
            el.innerHTML = data.captcha;
          });
        })
        .catch(err => console.error('Captcha refresh error:', err));
    }

    document.addEventListener('click', function(e) {
      const btn = e.target.closest('#fcReloadCaptcha, #cReloadCaptcha, #reloadCaptcha');
      if (btn) {
        e.preventDefault();
        refreshFcCaptcha();
      }
    });

    const consultationForm = document.getElementById('consultationForm');
    if (consultationForm) {
      consultationForm.addEventListener('submit', function(e) {
        e.preventDefault();

        if (!consultationForm.checkValidity()) {
          consultationForm.reportValidity();
          
          let missing = [];
          const name = consultationForm.querySelector('input[name="name"]');
          const email = consultationForm.querySelector('input[name="email"]');
          const phone = consultationForm.querySelector('input[name="phone"]');
          const interest = consultationForm.querySelector('select[name="interest"]');
          const brief = consultationForm.querySelector('textarea[name="brief"]');
          const consent = consultationForm.querySelector('input[name="consent"]');
          const captcha = consultationForm.querySelector('input[name="captcha"]');

          if (!name || !name.value.trim()) missing.push('Full Name');
          if (!email || !email.value.trim()) missing.push('Work Email');
          if (!phone || !phone.value.trim()) missing.push('WhatsApp Number');
          if (!interest || !interest.value) missing.push('What do you need');
          if (!brief || !brief.value.trim()) missing.push('Project Brief');
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

        const btn = document.getElementById('fcSubmitBtn');
        btn.disabled = true;
        btn.textContent = 'Submitting...';

        const formData = new FormData(consultationForm);
        if (fcIti) {
          const countryData = fcIti.getSelectedCountryData();
          const rawDigits = phoneInput.value.trim().replace(/^\+/, '');
          let fullNumber = fcIti.getNumber();
          if (!fullNumber || !fullNumber.startsWith('+')) {
            const dialCode = countryData && countryData.dialCode ? ('+' + countryData.dialCode) : '';
            if (dialCode && rawDigits) {
              fullNumber = rawDigits.startsWith(countryData.dialCode) ? ('+' + rawDigits) : (dialCode + ' ' + rawDigits);
            } else {
              fullNumber = rawDigits;
            }
          }
          if (fullNumber) {
            formData.set('phone', fullNumber);
          }
        }

        fetch(consultationForm.action, {
          method: 'POST',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
          },
          body: formData
        })
        .then(res => {
          if (!res.ok) {
            refreshFcCaptcha();
            const captchaInput = consultationForm.querySelector('input[name="captcha"]');
            if (captchaInput) captchaInput.value = '';

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
          btn.innerHTML = 'Request my consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>';
          if (data.success) {
            consultationForm.reset();
            if (fcIti) {
              fcIti.setCountry('in');
            }
            refreshFcCaptcha();
            Swal.fire({
              title: 'Success!',
              text: data.message || 'Thank you! Your consultation request has been received.',
              icon: 'success',
              confirmButtonColor: '#2563EB'
            });
          }
        })
        .catch(err => {
          btn.disabled = false;
          btn.innerHTML = 'Request my consultation<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>';
        });
      });
    }
  });
  </script>
  @endpush
 </div>
 </div>
</section>

<div class="rail" aria-label="Production systems we build and maintain"><ul class="rail__track"><li class="rail__item"><span class="dot dot--live"></span><b>Dunya Car Rental</b> &middot; Rental &amp; booking platform</li><li class="rail__item"><span class="dot dot--live"></span><b>Autonation Rent a Car</b> &middot; Fleet + reservations</li><li class="rail__item"><span class="dot dot--live"></span><b>Bxience</b> &middot; Corporate web platform</li><li class="rail__item"><span class="dot dot--build"></span><b>Tutorwale</b> &middot; Marketplace build</li><li class="rail__item"><span class="dot dot--live"></span><b>Jarry Logistics</b> &middot; Ops dashboard</li><li class="rail__item"><span class="dot dot--live"></span><b>Link Loop</b> &middot; SEO campaign, month 14</li><li class="rail__item"><span class="dot dot--live"></span><b>Vepo</b> &middot; Mobile app, iOS + Android</li><li class="rail__item"><span class="dot dot--build"></span><b>BII</b> &middot; CRM integration</li></ul></div>

</main>
@endsection