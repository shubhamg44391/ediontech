@extends('Frontend.Layouts.main')


@section('main-container')


    <!-- Page Content Start -->
    <main id="mxd-page-content" class="mxd-page-content">

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

      <!-- Section - Inner Headline v03 Start -->
      <div class="mxd-section pinned-section">
        <div class="pinned-section__inner">
          <div class="mxd-container fullwidth-container">

            <!-- Block - Inner Headline v03 Start -->
            <div class="mxd-block loading-wrap">
              <div class="inner-headline fullheight">
                <div class="inner-headline__bg">
                  <video class="video parallax-video" 
                    autoplay
                    muted
                    loop
                    playsinline
                    preload="auto"
                    poster="video/1280x720_stone-geometry-banner.webp">
                    <source type="video/mp4" src="video/1280x720_stone-geometry.mp4">
                    <source type="video/webm" src="video/1280x720_stone-geometry.webm">
                  </video>
                  <!-- <img src="img/backgrounds/1920x1280_bg01.webp" alt="Azurio Template Sample Image"> -->
                  <div class="inner-headline__cover"></div>
                </div>
                <div class="mxd-container grid-l-container">
                  <div class="container-fluid p-0">
                    <div class="row g-0">
                      <div class="col-12 mxd-grid-item">
                        <!-- breadcrumbs -->
                        <div class="inner-headline__breadcrumbs loading-fade">
                          <div class="breadcrumbs__nav permanent">
                            <span>
                              <a href="/">
                                <span class="mxd-scramble">Home</span>
                              </a>
                            </span>
                            <span class="current-item">Services
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- bottom positioned headline -->
                <div class="inner-headline__bottom">
                  <div class="mxd-container grid-l-container">
                    <div class="container-fluid p-0">
                      <div class="row g-0">
                        <div class="col-12">
                          <!-- content -->
                          <div class="inner-headline__content has-medium-title">
                            <div class="container-fluid p-0">
                              <div class="row g-0">
                                <div class="col-12 col-xl-10 mxd-grid-item">
                                  <div class="inner-headline__link loading-fade">
                                    <a class="btn btn-line btn-line-permanent" href="#services">
                                      <span class="btn-caption mxd-scramble">Services</span>
                                    </a>
                                  </div>
                                  <div class="inner-headline__title">
                                    <h1 class="medium permanent loading-split">New standards in <span>digital excellence</span></h1>
                                  </div>
                                </div>
                                <div class="col-12 col-xl-2 mxd-grid-item">
                                  <div class="inner-headline__btngroup align-end-desktop tags-medium-title loading-fade">
                                    <a class="btn btn-line-icon btn-line-icon-small btn-line-permanent slide-down" href="#services">
                                      <span class="btn-caption mxd-scramble">Scroll to explore</span>
                                      <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                                          <path d="M18,10.8h-3.6v-3.6h3.6v3.6ZM7.2,14.4v3.6h3.6v-3.6h3.6v-3.6h-3.6V0h-3.6v10.8h-3.6v3.6s3.6,0,3.6,0ZM3.6,10.8v-3.6H0v3.6h3.6Z"/>
                                        </svg>
                                      </i>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Block - Inner Headline v03 End -->

          </div>
          <div class="pinned-section__trigger"></div>
        </div>
      </div>
      <!-- Section - Inner Headline v03 End -->

      <!-- Section - Services Description Stack Start -->
      <div id="services" class="mxd-section">
        <div class="mxd-container fullwidth-container">

          <!-- Block - Services Description Stack Start -->
          <div class="mxd-block">
            <div class="mxd-stack-services">
              <!-- single card -->
              <div class="mxd-stack-services__card">
                <div class="services-card__wrapper">
                  <!-- content -->
                  <div class="services-card__content">
                    <div class="services-card__info">
                      <div class="services-card__subtitle">
                        <span class="tag tag-s-mobile mxd-scramble">01 / Services</span>
                      </div>
                      <div class="services-card__title">
                       <p>Design</p>
                      </div>
                      <div class="services-card__tags">
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">Logo&nbsp;&&nbsp;Branding</span>
                          <span class="tag tag-s-mobile mxd-scramble">Mobile&nbsp;App&nbsp;Design</span>
                          <span class="tag tag-s-mobile mxd-scramble">Video&nbsp;Production</span>
                        </div>
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">Website&nbsp;Design</span>
                          <span class="tag tag-s-mobile mxd-scramble">Graphic/Print&nbsp;Design</span>
                        </div>
                      </div>
                    </div>
                    <p class="t-large t-bold services-card__descr online text-wrap">We create visually compelling designs that enhance user experience. 
                      <span class="online ">From UI/UX design to stunning websites, mobile apps, and print materials, we make sure your brand's visuals resonate with your audience.</span>
                    </p>
                  </div>
                  <!-- image -->
                  <div class="services-card__image">
                    <img src="img/services/services-stack/s01.webp" alt="Azurio Template Sample Image">
                    <div class="services-card__cover"></div>
                  </div>
                </div>
              </div>
              <!-- single card -->
              <div class="mxd-stack-services__card">
                <div class="services-card__wrapper">
                  <!-- content -->
                  <div class="services-card__content">
                    <div class="services-card__info">
                      <div class="services-card__subtitle">
                        <span class="tag tag-s-mobile mxd-scramble">02 / Services</span>
                      </div>
                      <div class="services-card__title">
                        <p>Development</p>
                      </div>
                      <div class="services-card__tags">
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">Web&nbsp;Development</span>
                          <span class="tag tag-s-mobile mxd-scramble online text-nowrap">E-Commerce&nbsp;Solution</span>
                          <span class="tag tag-s-mobile mxd-scramble">Custom&nbsp;Software</span>
                         
                        </div>
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">Mobile&nbsp;App&nbsp;Development</span>
                          <span class="tag tag-s-mobile mxd-scramble">CMS&nbsp;Development</span>
                          
                        </div>
                      </div>
                    </div>
                    <p class="t-bold t-large services-card__descr online text-wrap">We build high-performance websites and applications using modern technologies. 
                      <span>Our solutions are designed to be scalable and functional for optimal performance.</span>
                    </p>
                  </div>
                  <!-- image -->
                  <div class="services-card__image">
                    <img src="img/services/services-stack/s02.webp" alt="Azurio Template Sample Image">
                    <div class="services-card__cover"></div>
                  </div>
                </div>
              </div>
               <!-- single card -->
              <div class="mxd-stack-services__card">
                <div class="services-card__wrapper">
                  <!-- content -->
                  <div class="services-card__content">
                    <div class="services-card__info">
                      <div class="services-card__subtitle">
                        <span class="tag tag-s-mobile mxd-scramble">03 / Services</span>
                      </div>
                      <div class="services-card__title">
                        <p>Online&nbsp;Marketing</p>
                      </div>
                      <div class="services-card__tags">
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">SEO&nbsp;Services</span>
                          <span class="tag tag-s-mobile mxd-scramble">Email&nbsp;Marketting</span>
                          <span class="tag tag-s-mobile mxd-scramble">Social&nbsp;Media&nbsp;Marketting</span>
                        </div>
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">PPC&nbsp;Advertising</span>
                          <span class="tag tag-s-mobile mxd-scramble">Content&nbsp;Marketting</span>
                        </div>
                      </div>
                    </div>
                    <p class="t-bold t-large services-card__descr">We develop and execute tailored digital marketing strategies. 
                      <span>SEO and content marketing, social media management and paid campaigns - 
                        we help you reach and engage your target audience effectively.</span>
                    </p>
                  </div>
                  <!-- image -->
                  <div class="services-card__image">
                    <img src="img/services/services-stack/s04.webp" alt="Azurio Template Sample Image">
                    <div class="services-card__cover"></div>
                  </div>
                </div>
              </div>
              <!-- single card -->
              <div class="mxd-stack-services__card">
                <div class="services-card__wrapper">
                  <!-- content -->
                  <div class="services-card__content">
                    <div class="services-card__info">
                      <div class="services-card__subtitle">
                        <span class="tag tag-s-mobile mxd-scramble">04 / Services</span>
                      </div>
                      <div class="services-card__title">
                        <p>Business</p>
                      </div>
                      <div class="services-card__tags">
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">Startup&nbsp;Solutions</span>
                          <span class="tag tag-s-mobile mxd-scramble">Consulting&nbsp;Services</span>
                          <span class="tag tag-s-mobile mxd-scramble">It&nbsp;Infrastructure</span>
                        </div>
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">Enterprice&nbsp;Solutions</span>
                          <span class="tag tag-s-mobile mxd-scramble">Cloud&nbsp;Slutions&nbsp;</span>
                        </div>
                      </div>
                    </div>
                    <p class="t-bold t-large services-card__descr">From logo design to comprehensive brand strategies, 
                      we ensure your business stands out with a 
                      <span>unique visual identity and consistent messaging across all touchpoints.</span>
                    </p>
                  </div>
                  <!-- image -->
                  <div class="services-card__image">
                    <img src="img/services/services-stack/s03.webp" alt="Azurio Template Sample Image">
                    <div class="services-card__cover"></div>
                  </div>
                </div>
              </div>
             
              <!-- single card -->
              <div class="mxd-stack-services__card">
                <div class="services-card__wrapper">
                  <!-- content -->
                  <div class="services-card__content">
                    <div class="services-card__info">
                      <div class="services-card__subtitle">
                        <span class="tag tag-s-mobile mxd-scramble">05 / Services</span>
                      </div>
                      <div class="services-card__title">
                        <p>Technology</p>
                      </div>
                      <div class="services-card__tags">
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">AI&nbsp;&&nbsp;Machine&nbsp;Learning</span>
                          <span class="tag tag-s-mobile mxd-scramble">IOT&nbsp;Solutions</span>
                          <span class="tag tag-s-mobile mxd-scramble">Big&nbsp;Data&nbsp;Analytics</span>
                        </div>
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">Blockchain&nbsp;Solutions</span>
                          <span class="tag tag-s-mobile mxd-scramble">AR/VR&nbsp;Solutions&nbsp;</span>
                        </div>
                      </div>
                    </div>
                    <p class="t-bold t-large services-card__descr">Perfecting every detail to ensure precision, stability, <span> and confidence in every click. </span>
                      
                    </p>
                  </div>
                  <!-- image -->
                  <div class="services-card__image">
                <img src="img/services/1200x980_cpb05.webp" alt="Azurio Services Image">
                    <div class="services-card__cover"></div>
                  </div>
                </div>
              </div>
              <!-- single card -->
              <div class="mxd-stack-services__card">
                <div class="services-card__wrapper">
                  <!-- content -->
                  <div class="services-card__content">
                    <div class="services-card__info">
                      <div class="services-card__subtitle">
                        <span class="tag tag-s-mobile mxd-scramble">06 / Services</span>
                      </div>
                      <div class="services-card__title">
                        <p>Content&nbsp;Strategy</p>
                      </div>
                      <div class="services-card__tags">
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">Content&nbsp;Creation</span>
                          <span class="tag tag-s-mobile mxd-scramble">Content&nbsp;Audit</span>
                          <span class="tag tag-s-mobile mxd-scramble">Content&nbsp;Localization</span>
                        </div>
                        <div class="tags-column">
                          <span class="tag tag-s-mobile mxd-scramble">CopyWriting&nbsp;Services</span>
                          <span class="tag tag-s-mobile mxd-scramble">Content&nbsp;Management</span>
                        </div>
                      </div>
                    </div>
                    <p class="t-bold t-large services-card__descr">Merging creativity and intelligence to build <span> systems that imagine and evolve. </span> 

                    </p>
                  </div>
                  <!-- image -->
                  <div class="services-card__image">
                     <img src="img/services/1200x980_cpb06.webp" alt="Azurio Services Image">
                    <div class="services-card__cover"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Block - Services Description Stack End -->

        </div>
      </div>
      <!-- Section - Services Description Stack End -->

      <!-- Section - Parallax Divider Image Start -->
    
      <!-- Section - Parallax Divider Image End -->

      <!-- Section - Blog Preview Grid x3 Plus Title Start -->
      <div class="mxd-section blur-section pinned-section padding-top-title padding-bottom-preview">
        <div class="pinned-section__inner">
          <div class="mxd-container grid-l-container">

            <!-- Block - Section Title v04 Start -->
            <div class="mxd-block">
              <div class="mxd-section-title pre-subtitle-s">
                <div class="container-fluid p-0">
                  <div class="row g-0">
                    <div class="col-12 col-xl-8 mxd-grid-item">
                      <div class="mxd-section-title__title pre-caption">
                        <h2 class="reveal-type">Our featured<br>insights</h2>
                      </div>
                    </div>
                    <div class="col-12 col-xl-4 mxd-grid-item">
                      <div class="mxd-section-title__data top-controls">
                        <div class="mxd-section-title__controls anim-uni-in-up">
                          <a class="btn btn-line btn-line-default" href="/insights">
                            <span class="btn-caption mxd-scramble">News Overview</span>
                          </a>
                        </div>
                        <div class="mxd-section-title__caption no-max-width pre-controls">
                          <p class="t-bold t-large mxd-split-lines">Inspiring ideas, creative insights, and the latest in 
                          design and tech. <span>Fueling innovation for your digital journey.</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Block - Section Title v04 End -->

            <!-- Block - Blog Preview Grid x3 Start -->
            <div class="mxd-block">
              <div class="mxd-blog-grid">
                <div class="container-fluid p-0">
                  <div class="row g-0 mxd-blog-grid__gallery">
                    <div class="col-12 col-lg-4 mxd-blog-item animate-card-3">
                      <div class="mxd-blog-item__date">
                        <span class="meta-date">02 February, 2026</span>
                      </div>
                      <a class="mxd-blog-item__media active-cursor-permanent" data-cursor-text="Read Post" href="/insights">
                        <img class="" src="img/blog/preview/grid-x3/pr-01.webp" alt="Blog Preview Image">
                      </a>
                      <div class="mxd-blog-item__caption">
                        <div class="mxd-blog-item__title">
                          <a class="blog-name-m" href="blog-article.html">Frontend innovations and user journeys</a>
                        </div>
                        <div class="mxd-blog-item__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">UI/UX</span>
                          <span class="tag tag-s tag-medium mxd-scramble">Development</span>
                          <span class="tag tag-s tag-medium mxd-scramble">Insights</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-4 mxd-blog-item animate-card-3">
                      <div class="mxd-blog-item__date">
                        <span class="meta-date">28 January, 2026</span>
                      </div>
                      <a class="mxd-blog-item__media active-cursor-permanent" data-cursor-text="Read Post" href="/insights">
                        <img class="" src="img/blog/preview/grid-x3/pr-02.webp" alt="Blog Preview Image">
                      </a>
                      <div class="mxd-blog-item__caption">
                        <div class="mxd-blog-item__title">
                          <a class="blog-name-m" href="blog-article.html">Branding in creating digital experiences</a>
                        </div>
                        <div class="mxd-blog-item__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Concept</span>
                          <span class="tag tag-s tag-medium mxd-scramble">Editorial</span>
                          <span class="tag tag-s tag-medium mxd-scramble">Event</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-lg-4 mxd-blog-item animate-card-3">
                      <div class="mxd-blog-item__date">
                        <span class="meta-date">15 January, 2026</span>
                      </div>
                      <a class="mxd-blog-item__media active-cursor-permanent" data-cursor-text="Read Post" href="/insights">
                        <img class="" src="img/blog/preview/grid-x3/pr-03.webp" alt="Blog Preview Image">
                      </a>
                      <div class="mxd-blog-item__caption">
                        <div class="mxd-blog-item__title">
                          <a class="blog-name-m" href="blog-article.html">Designing for the future of interactive digital spaces</a>
                        </div>
                        <div class="mxd-blog-item__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Midjourney</span>
                          <span class="tag tag-s tag-medium mxd-scramble">News</span>
                          <span class="tag tag-s tag-medium mxd-scramble">Editorial</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Block - Blog Preview Grid x3 End -->

          </div>
          <div class="pinned-section__trigger"></div>
        </div>
      </div>
      <!-- Section - Blog Preview Grid x3 Plus Title End -->
      
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
                      <h2 class="reveal-type opposite">Let's talk about your project</h2>
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
                          <span class="tag tag-s tag-medium mxd-scramble">Photography</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_01.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">3D Models</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_02.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Development</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_03.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Illustrations</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_04.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Fashion</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_05.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Digital Art</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_06.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Packaging</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_07.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Motion</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_08.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Illustrations</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_09.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Video Production</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_10.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Photography</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_01.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">3D Models</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_02.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Development</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_03.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Illustrations</span>
                        </div>
                        <div class="marquee__image">
                          <img src="img/cta/mar_04.webp" alt="">
                        </div>
                      </div>
                      <!-- single item -->
                      <div class="marquee__item item-imageblock">
                        <div class="marquee__tags">
                          <span class="tag tag-s tag-medium mxd-scramble">Fashion</span>
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


    @endsection