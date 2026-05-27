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
                        <a href="/">
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
                                <div class="text-center form__reply centered" style="display:block;">
                                  <i class="ph-fill ph-smiley-wink reply__icon"></i>
                                  <p class="reply__title">Done!</p>
                                  <span class="reply__text">{{ session('success') }}</span>
                                </div>
                              @endif

                              @if($errors->any())
                                <div class="form__reply"
                                  style="display:block; color:#ff4d4f; text-align: left; padding: 15px; margin-bottom: 20px; border: 1px solid #ff4d4f; border-radius: 8px;">
                                  <p style="margin-bottom: 10px; font-weight: bold;">Please fix the following errors:</p>
                                  <ul style="list-style: none; padding: 0; margin: 0;">
                                    @foreach($errors->all() as $error)
                                      <li style="margin-bottom: 5px;">- {{ $error }}</li>
                                    @endforeach
                                  </ul>
                                </div>
                              @endif
                              <!-- Reply Messages End -->

                              <!-- Contact Form Start -->
                              <form class="form contact-form" id="contact-form"
                                action="{{ route('frontend.submit-form') }}" method="POST">
                                @csrf
                                <!-- Hidden Required Fields -->
                                <input type="hidden" name="project_name" value="Azurio Template">
                                <input type="hidden" name="admin_email" value="support@mixdesign.dev">
                                <input type="hidden" name="form_subject" value="Contact Form Message">
                                <!-- END Hidden Required Fields-->
                                <div class="p-0 container-fluid">
                                  <div class="row gx-0">
                                    <div class="col-12 col-md-6 mxd-grid-item loading-item">
                                      <input type="text" name="name" placeholder="Your name*" value="{{ old('name') }}"
                                        required>
                                    </div>
                                    <div class="col-12 col-md-6 mxd-grid-item loading-item">
                                      <input type="text" name="company" placeholder="Company name"
                                        value="{{ old('company') }}">
                                    </div>
                                    <div class="col-12 col-md-6 mxd-grid-item loading-item">
                                      <input type="email" name="email" placeholder="Email*" value="{{ old('email') }}"
                                        required>
                                    </div>
                                    <div class="col-12 col-md-6 mxd-grid-item loading-item">
                                      <input type="tel" name="number" placeholder="Phone" value="{{ old('number') }}">
                                    </div>
                                    <div class="col-12 mxd-grid-item loading-item">
                                      <textarea name="message" placeholder="A few words about your project*"
                                        required>{{ old('message') }}</textarea>
                                    </div>
                                    <div class="col-12 mxd-grid-item loading-item d-flex">

                                      <input type="text" class="form-control" placeholder="Budget in $">
                                    </div>
                                    <div class="gap-3 col-12 row mxd-grid-item loading-item d-flex">

                                      <div class="col-12"> <span id="captcha-img"> {!! captcha_img()!!}</span></div>
                                      <div class="col-12"> <button id="reloadCaptcha"><img
                                            style="height:40px; width:40px; background-color:whitesmoke;"
                                            src="img/favicon/two-blue-cycle-arrows_78370-7799.avif" alt=""></button></div>
                                    </div>
                                    <div class="col-12 col-md-6 mxd-grid-item loading-item d-flex">
                                      <php class="ini"></php>
                                      <input name="captcha" type="text" class="form-control" placeholder="Captcha">
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

    <!-- Section - Title & Socials Accent Start   we have to remove these lines from 155 - 303 when sir will give final decision-->
    {{-- <div class="mxd-section bg-color-accent padding-top-title padding-bottom-default">
      <div class="mxd-container grid-l-container">

        <!-- Block - Section Title & Socials Start -->
        <div class="mxd-block">
          <div class="p-0 container-fluid">
            <div class="row g-0">
              <div class="col-12 col-xl-6 mxd-grid-item">
                <!-- section title -->
                <div class="mxd-section-title">
                  <div class="mxd-section-title__title pre-grid-split-xl">
                    <h2 class="mxd-split-lines accent">Connect</h2>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-6 mxd-grid-item">
                <!-- socials list -->
                <div class="mxd-socials-list">
                  <!-- socials item -->
                  <a class="socials-list__item no-margin slide-right-up" href="https://dribbble.com/" target="_blank">
                    <div class="socials-list__divider accent divider-top anim-uni-clip-in"></div>
                    <div class="socials-list__info">
                      <div class="socials-list__number accent anim-uni-slide-down">
                        <span>[01]</span>
                      </div>
                      <div class="socials-list__name accent anim-uni-slide-down">
                        <span>Dribbble</span>
                      </div>
                    </div>
                    <div class="socials-list__arrow accent anim-uni-slide-down">
                      <i>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;"
                          xml:space="preserve">
                          <path d="M18,0v14.4h-3.6V7.2h-3.6V3.6H3.6V0H18z M7.2,10.8h3.6V7.2H7.2C7.2,7.2,7.2,10.8,7.2,10.8z M3.6,14.4h3.6v-3.6H3.6V14.4z
                              M0,18h3.6v-3.6H0V18z" />
                        </svg>
                      </i>
                    </div>
                    <div class="socials-list__divider accent divider-bottom anim-uni-clip-in"></div>
                  </a>
                  <!-- socials item -->
                  <a class="socials-list__item slide-right-up" href="https://www.behance.net/" target="_blank">
                    <div class="socials-list__divider accent divider-top anim-uni-clip-in"></div>
                    <div class="socials-list__info">
                      <div class="socials-list__number accent anim-uni-slide-down">
                        <span>[02]</span>
                      </div>
                      <div class="socials-list__name accent anim-uni-slide-down">
                        <span>Behance</span>
                      </div>
                    </div>
                    <div class="socials-list__arrow accent anim-uni-slide-down">
                      <i>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;"
                          xml:space="preserve">
                          <path d="M18,0v14.4h-3.6V7.2h-3.6V3.6H3.6V0H18z M7.2,10.8h3.6V7.2H7.2C7.2,7.2,7.2,10.8,7.2,10.8z M3.6,14.4h3.6v-3.6H3.6V14.4z
                              M0,18h3.6v-3.6H0V18z" />
                        </svg>
                      </i>
                    </div>
                    <div class="socials-list__divider accent divider-bottom anim-uni-clip-in"></div>
                  </a>
                  <!-- socials item -->
                  <a class="socials-list__item slide-right-up" href="https://github.com/" target="_blank">
                    <div class="socials-list__divider accent divider-top anim-uni-clip-in"></div>
                    <div class="socials-list__info">
                      <div class="socials-list__number accent anim-uni-slide-down">
                        <span>[03]</span>
                      </div>
                      <div class="socials-list__name accent anim-uni-slide-down">
                        <span>Github</span>
                      </div>
                    </div>
                    <div class="socials-list__arrow accent anim-uni-slide-down">
                      <i>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;"
                          xml:space="preserve">
                          <path d="M18,0v14.4h-3.6V7.2h-3.6V3.6H3.6V0H18z M7.2,10.8h3.6V7.2H7.2C7.2,7.2,7.2,10.8,7.2,10.8z M3.6,14.4h3.6v-3.6H3.6V14.4z
                              M0,18h3.6v-3.6H0V18z" />
                        </svg>
                      </i>
                    </div>
                    <div class="socials-list__divider accent divider-bottom anim-uni-clip-in"></div>
                  </a>
                  <!-- socials item -->
                  <a class="socials-list__item slide-right-up" href="https://codepen.io/" target="_blank">
                    <div class="socials-list__divider accent divider-top anim-uni-clip-in"></div>
                    <div class="socials-list__info">
                      <div class="socials-list__number accent anim-uni-slide-down">
                        <span>[04]</span>
                      </div>
                      <div class="socials-list__name accent anim-uni-slide-down">
                        <span>Codepen</span>
                      </div>
                    </div>
                    <div class="socials-list__arrow accent anim-uni-slide-down">
                      <i>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;"
                          xml:space="preserve">
                          <path d="M18,0v14.4h-3.6V7.2h-3.6V3.6H3.6V0H18z M7.2,10.8h3.6V7.2H7.2C7.2,7.2,7.2,10.8,7.2,10.8z M3.6,14.4h3.6v-3.6H3.6V14.4z
                              M0,18h3.6v-3.6H0V18z" />
                        </svg>
                      </i>
                    </div>
                    <div class="socials-list__divider accent divider-bottom anim-uni-clip-in"></div>
                  </a>
                  <!-- socials item -->
                  <a class="socials-list__item slide-right-up" href="https://www.figma.com/community" target="_blank">
                    <div class="socials-list__divider accent divider-top anim-uni-clip-in"></div>
                    <div class="socials-list__info">
                      <div class="socials-list__number accent anim-uni-slide-down">
                        <span>[05]</span>
                      </div>
                      <div class="socials-list__name accent anim-uni-slide-down">
                        <span>Figma Community</span>
                      </div>
                    </div>
                    <div class="socials-list__arrow accent anim-uni-slide-down">
                      <i>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px" y="0px" viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;"
                          xml:space="preserve">
                          <path d="M18,0v14.4h-3.6V7.2h-3.6V3.6H3.6V0H18z M7.2,10.8h3.6V7.2H7.2C7.2,7.2,7.2,10.8,7.2,10.8z M3.6,14.4h3.6v-3.6H3.6V14.4z
                              M0,18h3.6v-3.6H0V18z" />
                        </svg>
                      </i>
                    </div>
                    <div class="socials-list__divider accent divider-bottom anim-uni-clip-in"></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Block - Section Title & Socials End -->

      </div>
    </div> --}}
    <!-- Section - Title & Socials Accent End -->

    <!-- Section - Parallax Divider Image Start -->
    {{-- <div class="mxd-section blur-section">
      <div class="mxd-container fullwidth-container">
        <div class="mxd-divider">
          <div class="mxd-divider__image divider-image-9 parallax-img"></div>
        </div>
      </div>
    </div> --}}
    <!-- Section - Parallax Divider Image End -->

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
                  <a class="btn btn-line btn-line-opposite" href="/contact">
                    <span class="btn-caption mxd-scramble">Write a line</span>
                  </a>
                </div>
                <div class="mxd-promo__caption">
                  <a class="active-cursor-accent" data-cursor-text="Contact Us" href="/contact">
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
  </script>

@endsection