@extends('Frontend.Layouts.main')


@section('main-container')


  <!-- Page Content Start -->
  <main id="mxd-page-content" class="mxd-page-content inner-page-content">

    <!-- Blur Effect Start -->
    <div class="blur-container">
      <div class="blur-layer blur-1"></div>
      <div class="blur-layer blur-2"></div>
      <div class="blur-layer blur-3"></div>
      <div class="blur-layer blur-4"></div>
      <div class="blur-layer blur-5"></div>
      <div class="blur-layer blur-6"></div>
      <div class="blur-layer blur-7"></div>
      <div class="blur-layer blur-8"></div>
    </div>
    <!-- Blur Effect End -->

    <!-- Section - Inner Headline v05 Start -->
    <div class="mxd-section blur-section">
      <div class="mxd-container grid-l-container">

        <!-- Block - Inner Headline v05 Start -->
        <div class="mxd-block loading-wrap">
          <div class="inner-headline">
            <div class="p-0 container-fluid">
              <div class="row g-0">
                <div class="col-12 mxd-grid-item">
                  <!-- breadcrumbs -->
                  <div class="inner-headline__breadcrumbs loading-fade">
                    <div class="breadcrumbs__nav">
                      <span>
                        <a href="{{ route('frontend.home') }}">
                          <span class="mxd-scramble">Home</span>
                        </a>
                      </span>
                      <span class="current-item">Contact
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <!-- content -->
                  <div class="inner-headline__content has-medium-title">
                    <div class="p-0 container-fluid">
                      <div class="row g-0">
                        <div class="col-12 col-xl-6 mxd-grid-item">
                          <div class="inner-headline__title">
                            <h1 class="medium loading-split">Let's make it happen</h1>
                          </div>
                          <!-- <div class="inner-headline__subtitle">
                                                <p>Everything <span>you need to know</span></p>
                                              </div> -->
                        </div>
                        <div class="col-12 col-xl-6">
                          <!-- split header caption -->
                          <div class="inner-headline__caption split-caption-title pre-form">
                            <div class="mxd-grid-item">
                              <p class="t-bold t-large loading-split">Have questions? We've got the answers!
                                Here, you'll find clear and concise information <span>about our services,
                                  process, and what to expect when working with us. If you need more details,
                                  feel free to reach out!</span>
                              </p>
                            </div>
                          </div>
                          <!-- split header form block -->

                          <!-- Block - Contact Form Start -->
                          <div class="mxd-block contact">
                            <div class="mxd-form-container">

                              <!-- Reply Messages Start -->
                              @if(session('success'))
                                <div
                                  style="background-color: rgba(25, 135, 84, 0.1); border: 1px solid #198754; color: #198754; padding: 15px 20px; border-radius: 8px; margin-bottom: 25px; display: flex; align-items: center; gap: 15px;">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                                    fill="none" stroke="#198754" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                  </svg>
                                  <div style="font-size: 16px; font-weight: 500;">
                                    <strong>Success!</strong> {{ session('success') }}
                                  </div>
                                </div>
                              @endif

                              <!-- Contact Form Start -->
                              <form class="form edion-contact-form" id="edion-contact-form"
                                action="{{ route('frontend.submit-form') }}" method="POST" novalidate
                                onsubmit="return validateForm(event)">
                                @csrf

                                <!-- END Hidden Required Fields-->
                                <div class="p-0 container-fluid">
                                  <div class="row gx-0">
                                    <style>
                                      .error-input {
                                        border-color: red !important;
                                        outline: none !important;
                                      }
                                    </style>
                                    <div class="col-12 col-md-6 mxd-grid-item loading-item">
                                      <input type="text" name="name" placeholder="Your name*" value="{{ old('name') }}"
                                        class="{{ $errors->has('name') ? 'error-input' : '' }}" required>
                                      <span id="err-name"
                                        style="color:red; font-size:12px; display:{{ $errors->has('name') ? 'block' : 'none' }}; margin-top:5px;">{{ $errors->first('name') }}</span>
                                    </div>
                                    <div class="col-12 col-md-6 mxd-grid-item loading-item">
                                      <input type="text" name="company" placeholder="Company name"
                                        value="{{ old('company') }}">
                                    </div>
                                    <div class="col-12 col-md-6 mxd-grid-item loading-item">
                                      <input type="email" name="email" placeholder="Email*" value="{{ old('email') }}"
                                        class="{{ $errors->has('email') ? 'error-input' : '' }}" required>
                                      <span id="err-email"
                                        style="color:red; font-size:12px; display:{{ $errors->has('email') ? 'block' : 'none' }}; margin-top:5px;">{{ $errors->first('email') }}</span>
                                    </div>
                                    <div class="col-12 col-md-6 mxd-grid-item loading-item">
                                      <input type="tel" name="number" placeholder="Phone" value="{{ old('number') }}"
                                        class="{{ $errors->has('number') ? 'error-input' : '' }}">
                                      <span id="err-number"
                                        style="color:red; font-size:12px; display:{{ $errors->has('number') ? 'block' : 'none' }}; margin-top:5px;">{{ $errors->first('number') }}</span>
                                    </div>
                                    <div class="col-12 mxd-grid-item loading-item">
                                      <textarea name="message" placeholder="A few words about your project*"
                                        class="{{ $errors->has('message') ? 'error-input' : '' }}"
                                        required>{{ old('message') }}</textarea>
                                      <span id="err-message"
                                        style="color:red; font-size:12px; display:{{ $errors->has('message') ? 'block' : 'none' }}; margin-top:5px;">{{ $errors->first('message') }}</span>
                                    </div>
                                    <div class="col-12 mxd-grid-item loading-item d-flex" style="flex-direction: column;">
                                      <input type="text" name="budget"
                                        class="form-control {{ $errors->has('budget') ? 'error-input' : '' }}"
                                        value="{{ old('budget') }}" placeholder="Budget in $">
                                      <span id="err-budget"
                                        style="color:red; font-size:12px; display:{{ $errors->has('budget') ? 'block' : 'none' }}; margin-top:5px;">{{ $errors->first('budget') }}</span>
                                    </div>
                                    <div class="gap-3 col-12 row mxd-grid-item loading-item d-flex">

                                      <div class="col-12"> <span id="captcha-img"> {!! captcha_img()!!}</span></div>
                                      <div class="col-12"> <button id="reloadCaptcha"><img
                                            style="height:40px; width:40px; background-color:whitesmoke;"
                                            src="img/favicon/two-blue-cycle-arrows_78370-7799.avif" alt=""></button></div>
                                    </div>
                                    <div class="col-12 col-md-6 mxd-grid-item loading-item d-flex"
                                      style="flex-direction: column;">
                                      <php class="ini"></php>
                                      <input name="captcha" type="text"
                                        class="form-control {{ $errors->has('captcha') ? 'error-input' : '' }}"
                                        placeholder="Captcha">
                                      <span id="err-captcha"
                                        style="color:red; font-size:12px; display:{{ $errors->has('captcha') ? 'block' : 'none' }}; margin-top:5px;">{{ $errors->first('captcha') }}</span>
                                    </div>
                                    <div class="col-12 mxd-grid-item loading-item">
                                      <button class="btn btn-default-icon btn-default-accent slide-right" type="submit">
                                        <span class="btn-caption mxd-scramble">Submit</span>
                                        <!-- <i class="btn-icon ph-bold ph-arrow-right"></i> -->
                                        <i class="btn-icon">
                                          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                                            <path
                                              d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                                          </svg>
                                        </i>
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                              <!-- Contact Form End -->

                            </div>
                          </div>
                          <!-- Block - Contact Form End -->

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Block - Inner Headline v05 End -->

        <!-- Block - Fullwidth Text Start -->
        <div class="mxd-block">
          <div class="fullwidth-text headline-email-text bottom-text-small mxd-grid-item">
            <div class="fullwidth-text__wrap">
              <a class="fullwidth-text__content small accent active-cursor" data-cursor-text="Let's chat"
                href="mailto:example@example.com?subject=Message%20from%20your%20site">
                <!-- <span class="anim-uni-chars">hello@azurio.com</span> -->
              </a>
            </div>
          </div>
        </div>
        <!-- Block - Fullwidth Text End -->

      </div>
    </div>
    <!-- Section - Inner Headline v05 End -->


    <!-- Section - Section Title & Text Block Start -->
    <div class="mxd-section blur-section bg-color-base padding-top-title padding-bottom-tag-m">
      <div class="mxd-container grid-l-container">

        <!-- Block - Section Title & Text Block Start -->
        <div class="mxd-block">
          <div class="p-0 container-fluid">
            <div class="row g-0">
              <div class="col-12 col-xl-6 mxd-grid-item">
                <!-- section title -->
                <div class="mxd-section-title">
                  <div class="mxd-section-title__title pre-caption">
                    <h2 class="mxd-split-lines">Welcome to our office</h2>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-6 mxd-grid-item">
                <!-- paragraph -->
                <div class="mxd-section-title__paragraph">
                  <p class="t-bold t-large mxd-split-lines">Inspiring ideas, creative insights,
                    and the latest in design and tech. <span>Fueling innovation for your digital journey.</span></p>
                </div>
                <!-- contact data -->
                <div class="mxd-section-title__datalist">
                  <div class="p-0 container-fluid">
                    <div class="row g-0">
                      <!-- contact data item -->
                      <div class="col-12 col-md-6 col-xl-5 datalist__item">
                        <div class="datalist__title">
                          <p class="t-bold t-large anim-uni-in-up">New York</p>
                        </div>
                        <ul>
                          <li class="anim-uni-in-up">
                            <a class="tag tag-s-mobile" href="https://goo.gl/maps/nWXKpGaDPuyH6gxRA" target="_blank">
                              11 West 53 Street,<br>New York, NY<br>10019
                            </a>
                          </li>
                        </ul>
                        <ul>
                          <li class="anim-uni-in-up">
                            <a class="tag tag-s-mobile mxd-scramble" href="tel:+12127089400">+1 212-708-9400</a>
                          </li>
                          <li class="anim-uni-in-up">
                            <!-- <a class="tag tag-s-mobile mxd-scramble" href="mailto:example@example.com?subject=Message%20from%20your%20site">hello@azurio.com</a> -->
                          </li>
                        </ul>
                      </div>
                      <!-- contact data item -->
                      <div class="col-12 col-md-6 col-xl-5 datalist__item">
                        <div class="datalist__title">
                          <p class="t-bold t-large t-caption anim-uni-in-up">Oakland</p>
                        </div>
                        <ul>
                          <li class="anim-uni-in-up">
                            <a class="tag tag-s-mobile" href="https://goo.gl/maps/xap5o3MZBuC6DFHz8" target="_blank">
                              3400 Broadway,<br>Oakland, CA<br>94611
                            </a>
                          </li>
                        </ul>
                        <ul>
                          <li class="anim-uni-in-up">
                            <a class="tag tag-s-mobile mxd-scramble" href="tel:+15104570211">+1 510-457-0211</a>
                          </li>
                          <li class="anim-uni-in-up">
                            <!-- <a class="tag tag-s-mobile mxd-scramble" href="mailto:example@example.com?subject=Message%20from%20your%20site">hello@azurio.com</a> -->
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Block - Section Title & Text Block End -->

      </div>
    </div>
    <!-- Section - Section Title & Text Block End -->

    <!-- Section - CTA with Marquee Start -->
    <div class="mxd-section blur-section bg-color-opposite">
      <div class="mxd-container fullwidth-container">

        <!-- Block - CTA with Matter.js Objects Start -->
        <div class="mxd-block">
          <div class="mxd-promo transparent">
            <div class="mxd-promo__wrap auto-height">
              <!-- content -->
              <div class="mxd-promo__content">
                <div class="mxd-promo__btngroup anim-uni-in-up">
                  <a class="btn btn-line btn-line-opposite" href="{{ route('frontend.contact') }}">
                    <span class="btn-caption mxd-scramble">Write a line</span>
                  </a>
                </div>
                <div class="mxd-promo__caption">
                  <a class="active-cursor-accent" data-cursor-text="Contact Us" href="{{ route('frontend.contact') }}">
                    <h2 class="opposite mxd-split-lines">Let's talk about your project</h2>
                  </a>
                </div>
              </div>
              <!-- marquee -->
              <div class="mxd-promo__marquee">

                <!-- Marquee Divider Start -->
                <div class="marquee marquee-left--gsap">
                  <div class="marquee__toleft marquee__images">
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Photography</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_01.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">3D Models</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_02.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Development</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_03.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Illustrations</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_04.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Fashion</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_05.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Digital Art</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_06.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Packaging</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_07.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Motion</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_08.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Illustrations</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_09.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Video Production</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_10.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Photography</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_01.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">3D Models</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_02.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Development</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_03.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Illustrations</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_04.webp" alt="">
                      </div>
                    </div>
                    <!-- single item -->
                    <div class="marquee__item item-imageblock">
                      <div class="marquee__tags">
                        <span class="tag tag-s tag-medium-opposite mxd-scramble">Fashion</span>
                      </div>
                      <div class="marquee__image">
                        <img src="img/cta/mar_05.webp" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Marquee Divider End -->

              </div>
            </div>
          </div>
        </div>
        <!-- Block - CTA with Matter.js Objects End -->

      </div>
    </div>
    <!-- Section - CTA with Marquee End -->

  </main>
  <!-- Page Content End -->

  <script type="text/javascript">
    document.getElementById('reloadCaptcha').addEventListener('click', function (e) {
      e.preventDefault();
      fetch('{{ url("reload-captcha") }}')
        .then(response => response.json())
        .then(data => {
          document.getElementById('captcha-img').innerHTML = data.captcha;
        });
    });

    function validateForm(e) {
      let errors = [];
      const form = e.target;

      // Use querySelector to be absolutely safe
      const nameEl = form.querySelector('[name="name"]');
      const emailEl = form.querySelector('[name="email"]');
      const numberEl = form.querySelector('[name="number"]');
      const messageEl = form.querySelector('[name="message"]');
      const budgetEl = form.querySelector('[name="budget"]');
      const captchaEl = form.querySelector('[name="captcha"]');

      const name = nameEl ? nameEl.value.trim() : '';
      const email = emailEl ? emailEl.value.trim() : '';
      const number = numberEl ? numberEl.value.trim() : '';
      const message = messageEl ? messageEl.value.trim() : '';
      const budget = budgetEl ? budgetEl.value.trim() : '';
      const captcha = captchaEl ? captchaEl.value.trim() : '';

      [nameEl, emailEl, numberEl, messageEl, budgetEl, captchaEl].forEach(el => {
        if (el) el.classList.remove('error-input');
      });

      let hasError = false;

      function showError(id, el, msg) {
        hasError = true;
        if (el) el.classList.add('error-input');
        const span = document.getElementById('err-' + id);
        if (span) {
          span.innerHTML = msg;
          span.style.display = 'block';
        }
      }

      ['name', 'email', 'number', 'message', 'budget', 'captcha'].forEach(id => {
        const span = document.getElementById('err-' + id);
        if (span) span.style.display = 'none';
      });

      if (!name) {
        showError('name', nameEl, 'The name field is required.');
      }

      if (!email) {
        showError('email', emailEl, 'The email field is required.');
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showError('email', emailEl, 'The email must be a valid email address.');
      }

      if (!number) {
        showError('number', numberEl, 'The phone number field is required.');
      } else if (number.length > 15) {
        showError('number', numberEl, 'The phone number must not be greater than 15 characters.');
      }

      if (!message) {
        showError('message', messageEl, 'The message field is required.');
      }

      if (budget && !/^\d+$/.test(budget)) {
        showError('budget', budgetEl, 'The budget must be a number.');
      }

      if (!captcha) {
        showError('captcha', captchaEl, 'The captcha field is required.');
      }

      if (hasError) {
        e.preventDefault();
        return false;
      }
      return true;
    }
  </script>

@endsection