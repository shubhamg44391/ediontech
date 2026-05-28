<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>

  <meta charset="UTF-8">

  <!-- Page Title -->
  <title></title>

  <!-- Meta Tags -->
  <meta name="description"
    content="Stand out and express your uniqueness with Azurio - a vibrant and minimal HTML template for creatives, studios and freelancers. Impress your website visitors with a clean, stylish layout and stunning visuals.">
  <meta name="keywords"
    content="mix_design, resume, portfolio, personal page, cv, template, one page, responsive, html5, css3, creative, clean">
  <meta name="author" content="mix_design">

  <!-- Viewport Meta-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

  <!-- Template Favicon & Icons Start -->
  <link rel="icon" href="{{url('img/favicon/edion-web-technologies.png')}}" sizes="any">
  {{--
  <link rel="icon" href="img/favicon/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png"> --}}
  {{--
  <link rel="manifest" href="img/favicon/manifest.webmanifest"> --}}
  <!-- Template Favicon & Icons End -->

  <!-- Facebook Metadata Start -->
  <meta property="og:image:height" content="1200">
  <meta property="og:image:width" content="1200">
  <meta property="og:title" content="Azurio - Digital Agency & Personal Portfolio HTML Template">
  <meta property="og:description"
    content="Stand out and express your uniqueness with Azurio - a vibrant and minimal HTML template for creatives, studios and freelancers. Impress your website visitors with a clean, stylish layout and stunning visuals.">
  <meta property="og:url" content="https://mixdesign.club/themeforest/azurio">
  <meta property="og:image" content="../../../mixdesign.club/themeforest/azurio/img/og-image.html">
  <!-- Facebook Metadata End -->

  <!-- Template Styles Start -->
  <link rel="stylesheet" type="text/css" href="{{url('css/loader.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/plugins.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/main.min.css')}}">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
  <!-- Template Styles End -->

  <!-- Custom Browser Color Start -->
  <meta name="theme-color" media="(prefers-color-scheme: light)" content="#EEEAE8">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0f0f0f">
  <meta name="msapplication-navbutton-color" content="#0f0f0f">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <!-- Custom Browser Color End -->

</head>

{{-- start script to theme change --}}
<script>
  document.addEventListener("DOMContentLoaded", function () {

    const switchBtn = document.getElementById("color-switcher");

    // Load saved theme
    let currentTheme = localStorage.getItem("theme") || "dark";
    // alert(currentTheme);

    document.documentElement.setAttribute("data-theme", currentTheme);

    // Click event
    switchBtn.addEventListener("click", function (e) {

      e.preventDefault();
      e.stopPropagation();

      currentTheme = currentTheme === "light" ? "dark" : "light";
      document.documentElement.setAttribute("data-theme", currentTheme);

      localStorage.setItem("theme", currentTheme);

    });

  });
</script>
{{-- end script for theme --}}

<body>

  <!-- Menu Hamburger Start -->
  <div class="mxd-menu__contain loading-fade">
    <div class="mxd-menu__toggle">
      <a href="#0" class="mxd-menu__hamburger" aria-label="Menu">
        <div class="hamburger__line"></div>
        <div class="hamburger__line"></div>
      </a>
    </div>
  </div>
  <!-- Menu Hamburger End -->

  <!-- Navigation Start -->
  <nav class="mxd-menu">
    <div class="mxd-menu__backdrop"></div>

    <!-- Menu Overlay Start -->
    <div class="mxd-menu__overlay">
      <div class="mxd-menu__content " data-lenis-prevent>

        <!-- Menu Logo Start -->
        <div class="mxd-menu__logo " id="header">

          <a href="{{ route('frontend.home') }}" class="menu-logo d-inline-block position-relative">

            <img class="menu-logo__image img-fluid" style="width:70px; height:70px; object-fit:contain"
              src="{{ asset('img/favicon/edion-web-technologies.png') }}" alt="Edion Web Tech Brand Logo">
            {{-- <img src="{{ asset('img/favicon/edion-web-technologies.png') }}" alt="Edion Web Tech Brand Logo"
              class="img-fluid" style="height:50px; width:50px; object-fit:contain;"> --}}

          </a>

        </div>
        <!-- Menu Logo End -->

        <!-- Menu Media Start -->
        <div class="mxd-menu__media bg-dark">
          <div class="menu-media__wrapper">
            {{-- <img src="img/gifs/dolores.gif" alt="Image"> --}}
            <video preload="auto" autoplay muted loop playsinline poster="video/900x1280_menu.webp">
              <source type="video/mp4" src="{{asset('video/900x1280_menu.mp4')}}">
              <source type="video/webm" src="{{asset('video/900x1280_menu.webm')}}">
            </video>
          </div>
        </div>
        <!-- Menu Media End -->

        <!-- Main Navigation Start -->
        <div class="mxd-menu__navigation">
          <div class="mxd-menu__inner">
            <div class="mxd-menu__shadow shadow-top"></div>
            <div class="mxd-menu__caption">
              <p></p>
            </div>
            <!-- left side -->
            <div class="mxd-menu__left">
              <div class="main-menu">
                <div class="main-menu__content">
                  <ul id="main-menu" class="main-menu__accordion">
                    <li class="main-menu__item">
                      <div class="main-menu__divider divider-top"></div>
                      <div class="main-menu__toggle">
                        <div class="main-menu__link">
                          <span class="main-menu__number">/ 01</span>
                          <a href="{{ route('frontend.home') }}" class="main-menu__caption">
                            Home
                          </a>
                        </div>

                        <div class="main-menu__arrow">
                          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                            <path
                              d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                          </svg>
                        </div>
                      </div>
                      <div class="main-menu__divider divider-bottom"></div>
                    </li>
                    <li class="main-menu__item">
                      <div class="main-menu__divider divider-top"></div>
                      <div class="main-menu__toggle">
                        <div class="main-menu__link">
                          <span class="main-menu__number">/ 02</span>
                          <a href="{{ route('frontend.about') }}" class="main-menu__caption">
                            About us
                          </a>
                        </div>

                        <div class="main-menu__arrow">
                          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                            <path
                              d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                          </svg>
                        </div>
                      </div>
                      <div class="main-menu__divider divider-bottom"></div>
                    </li>

                    <li class="main-menu__item">
                      <div class="main-menu__divider divider-top"></div>
                      <div class="main-menu__toggle">
                        <div class="main-menu__link">
                          <span class="main-menu__number">/ 03</span>
                          <a href="{{ route('frontend.services') }}" class="main-menu__caption">
                            Services
                          </a>
                          </a>
                        </div>

                        <div class="main-menu__arrow">
                          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                            <path
                              d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                          </svg>
                        </div>
                      </div>
                      <div class="main-menu__divider divider-bottom"></div>
                    </li>
                    <li class="main-menu__item">
                      <div class="main-menu__divider divider-top"></div>
                      <div class="main-menu__toggle">
                        <div class="main-menu__link">
                          <span class="main-menu__number">/ 04</span>
                          <a href="{{ route('frontend.seo-package') }}" class="main-menu__caption">
                            Pricing
                          </a>
                        </div>

                        <div class="main-menu__arrow">
                          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                            <path
                              d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                          </svg>
                        </div>
                      </div>
                      <div class="main-menu__divider divider-bottom"></div>
                    </li>
                    <li class="main-menu__item">
                      <div class="main-menu__divider divider-top"></div>
                      <div class="main-menu__toggle">
                        <div class="main-menu__link">
                          <span class="main-menu__number">/ 05</span>
                          <a href="{{ route('frontend.free-consultation') }}" class="main-menu__caption">
                            Free Consultation
                          </a>
                        </div>

                        <div class="main-menu__arrow">
                          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                            <path
                              d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                          </svg>
                        </div>
                      </div>
                      <div class="main-menu__divider divider-bottom"></div>
                    </li>
                    <li class="main-menu__item">
                      <div class="main-menu__divider divider-top"></div>
                      <div class="main-menu__toggle">
                        <div class="main-menu__link">
                          <span class="main-menu__number">/ 06</span>
                          <a href="{{ route('frontend.works') }}" class="main-menu__caption">
                            Works
                          </a>
                        </div>

                        <div class="main-menu__arrow">
                          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                            <path
                              d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                          </svg>
                        </div>
                      </div>
                      <div class="main-menu__divider divider-bottom"></div>
                    </li>
                    <li class="main-menu__item">
                      <div class="main-menu__divider divider-top"></div>
                      <div class="main-menu__toggle">
                        <div class="main-menu__link">
                          <span class="main-menu__number">/ 07</span>
                          <a href="{{ route('frontend.faq') }}" class="main-menu__caption">
                            FAQ
                          </a>
                        </div>

                        <div class="main-menu__arrow">
                          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                            <path
                              d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                          </svg>
                        </div>
                      </div>
                      <div class="main-menu__divider divider-bottom"></div>
                    </li>
                    <li class="main-menu__item">
                      <div class="main-menu__divider divider-top"></div>
                      <div class="main-menu__toggle">
                        <div class="main-menu__link">
                          <span class="main-menu__number">/ 08</span>
                          <a href="{{ route('frontend.blog') }}" class="main-menu__caption">
                            Insights
                          </a>
                        </div>

                        <div class="main-menu__arrow">
                          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                            <path
                              d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                          </svg>
                        </div>
                      </div>
                      <div class="main-menu__divider divider-bottom"></div>
                    </li>
                    <li class="main-menu__item">
                      <div class="main-menu__divider divider-top"></div>
                      <div class="main-menu__toggle">
                        <div class="main-menu__link">
                          <span class="main-menu__number">/ 09</span>
                          <a href="{{ route('frontend.contact') }}" class="main-menu__caption">
                            Contact
                          </a>
                        </div>

                        <div class="main-menu__arrow">
                          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                            <path
                              d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                          </svg>
                        </div>
                      </div>
                      <div class="main-menu__divider divider-bottom"></div>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
            {{-- left side end --}}
            <!-- right side -->
            <div class="mxd-menu__right">
              <div class="menu-contact">
                <div class="menu-contact__item">
                  <ul class="menu-contact__list">
                    <li>
                      <a class="tag tag-m" href="mailto:example@example.com?subject=Message%20from%20your%20site">
                        <span class="mxd-scramble">hello@azurio.com</span>
                      </a>
                    </li>
                    <li>
                      <a class="tag tag-m" href="tel:+12127089400">
                        <span class="mxd-scramble">+1 212-708-9400</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="menu-contact__item">
                  <ul class="menu-contact__list">
                    <li>
                      <a class="tag tag-m" href="https://goo.gl/maps/nWXKpGaDPuyH6gxRA" target="_blank">
                        <span>11 West 53 Street,<br>New York, NY<br>10019</span>
                      </a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>
            <!-- data bottom line -->
            <div class="mxd-menu__shadow"></div>
            <div class="mxd-menu__data">
              <div class="menu-data__left">
                <p class="menu-data__text">
                  Made with
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                    <path
                      d="M2.6,6.4v2.6H0V3.9h2.6v2.6ZM15.4,3.9v5.1h2.6V3.9h-2.6ZM12.9,11.6h2.6v-2.6h-2.6v2.6ZM2.6,9v2.6h2.6v-2.6h-2.6ZM10.3,14.1h2.6v-2.6h-2.6v2.6ZM5.1,11.6v2.6h2.6v-2.6h-2.6ZM7.7,3.9V1.3H2.6v2.6h5.1ZM15.4,3.9V1.3h-5.1v2.6h5.1ZM10.3,6.4v-2.6h-2.6v2.6h2.6ZM7.7,16.7h2.6v-2.6h-2.6v2.6Z" />
                  </svg>
                  <!-- <i class="ph-fill ph-heart t-additional"></i> -->

                </p>
              </div>
              <div class="menu-data__right">
                <p class="menu-data__text">Copyright Edion</p>
                <p class="menu-data__text">©2026</p>
              </div>
            </div>
          </div>

        </div>
        <!-- Main Navigation End -->

      </div>
    </div>
    <!-- Menu Overlay End -->

  </nav>
  <!-- Navigation End -->


  <!-- Header Start -->
  <header id="header" class="mxd-header">
    <!-- header logo -->
    <div class="mxd-header__logo loading-fade">
      <a class="mxd-logo" href="{{route('frontend.home')}}">
        <!-- logo icon -->

        <style>
          .mxd-header__logo {
            display: flex !important;
            align-items: center !important;
            height: 100% !important;
          }

          .mxd-logo {
            display: flex !important;
            align-items: center !important;
          }

          .custom-brand-logo {
            height: 100px;
            width: auto;
            max-width: 200px;
            object-fit: contain;
            display: block;
            margin: 0;
            padding: 0;
          }

          @media (max-width: 768px) {
            .custom-brand-logo {
              height: 32px;
              max-width: 150px;
            }
          }
        </style>
        <img class="custom-brand-logo" src="{{ asset('img/favicon/edion-web-technologies.png') }}"
          alt="Edion Web Technologies">
        <!-- logo text -->

      </a>
    </div>
    <!-- header controls -->
    <div class="mxd-header__controls loading-fade">
      <a class="btn mxd-header__link slide-right-up" href="{{ route('frontend.contact') }}" aria-label="Say Hello">
        <span class="btn-caption mxd-scramble">Say Hello</span>
        <i>
          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
            <path
              d="M18,0v14.4h-3.6v-7.2h-3.6v-3.6H3.6V0h14.4ZM7.2,10.8h3.6v-3.6h-3.6s0,3.6,0,3.6ZM3.6,14.4h3.6v-3.6h-3.6v3.6ZM0,18h3.6v-3.6H0v3.6Z" />
          </svg>
        </i>
        <!-- Phosphor icon -->
        <!-- <i class="ph-bold ph-arrow-up-right"></i> -->
      </a>
      <button id="color-switcher" class="btn mxd-color-switcher" type="button" role="switch"
        aria-label="light/dark mode" aria-checked="true"></button>
    </div>
  </header>
  <!-- Header End -->