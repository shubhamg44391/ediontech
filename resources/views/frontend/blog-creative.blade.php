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

    <!-- Section - Inner Headline Article Start -->
    <div class="mxd-section">
      <div class="mxd-container fullwidth-container">

        <!-- Block - Featured Article Fullscreen Start -->
        <div class="mxd-block loading-wrap">
          <article class="mxd-post post-featured-fullscreen">
            <!-- breadcrumbs block -->
            <div class="mxd-container grid-l-container">
              <div class="p-0 container-fluid">
                <div class="row g-0">
                  <div class="col-12 mxd-grid-item">
                    <!-- breadcrumbs -->
                    <div class="inner-headline__breadcrumbs loading-fade">
                      <div class="breadcrumbs__nav permanent">
                        <span>
                          <a href="{{ route('frontend.home') }}">
                            <span class="mxd-scramble">Home</span>
                          </a>
                        </span>
                        <span class="current-item">Insights
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- post -->
            <div class="post-featured-fullscreen__thumb">
              <img src="img/blog/1920x1200_pf-01.webp" alt="Featured Post Thumb">


              <div class="post-featured-fullscreen__cover"></div>
            </div>
            <div class="post-featured-fullscreen__container">
              <div class="mxd-container grid-l-container">
                <div class="p-0 container-fluid">
                  <div class="row g-0">
                    <!-- link -->
                    <div class="col-12 mxd-grid-item">
                      <div class="post-featured-fullscreen__link loading-fade">
                        <a class="btn btn-line btn-line-permanent" href="blog-article.html">
                          <span class="btn-caption mxd-scramble">Featured</span>
                        </a>
                      </div>
                    </div>
                    <!-- info -->
                    <div class="col-12 col-xl-8 mxd-grid-item">
                      <a class="post-featured-fullscreen__info active-cursor-permanent" data-cursor-text="Read Post"
                        href="blog-article.html">
                        <h2 class="post-featured-fullscreen__title permanent loading-split">My journey into the future of
                          art</h2>
                        <div class="post-featured-fullscreen__excerpt loading-item">
                          <p class="t-large t-permanent">Discover how artificial intelligence is transforming artistic
                            processes, pushing
                            boundaries, and inspiring new possibilities in digital design.</p>
                        </div>
                      </a>
                    </div>
                    <!-- aside -->
                    <div class="col-12 col-xl-4 mxd-grid-item">
                      <div class="post-featured-fullscreen__aside">
                        <!-- meta -->
                        <div class="post-featured-fullscreen__meta">
                          <div class="post-featured-fullscreen__data">
                            <span class="tag tag-s-mobile tag-permanent loading-item">January 27, 2026</span>
                            <span class="tag tag-s-mobile tag-permanent loading-item">5min read</span>
                          </div>
                          <div class="post-featured-fullscreen__categories">
                            <a class="loading-item" href="#0">
                              <span class="tag tag-s-mobile tag-permanent mxd-scramble">Midjourney</span>
                            </a>
                            <a class="loading-item" href="#0">
                              <span class="tag tag-s-mobile tag-permanent mxd-scramble">Motion</span>
                            </a>
                            <a class="loading-item" href="#0">
                              <span class="tag tag-s-mobile tag-permanent mxd-scramble">Editorial</span>
                            </a>
                          </div>
                        </div>
                        <!-- button -->
                        <div class="post-featured-fullscreen__btngroup align-end-desktop tags-medium-title loading-fade">
                          <a class="btn btn-line-icon btn-line-icon-small btn-line-permanent slide-down" href="#posts">
                            <span class="btn-caption mxd-scramble">Scroll to explore</span>
                            <i>
                              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                                <path
                                  d="M18,10.8h-3.6v-3.6h3.6v3.6ZM7.2,14.4v3.6h3.6v-3.6h3.6v-3.6h-3.6V0h-3.6v10.8h-3.6v3.6s3.6,0,3.6,0ZM3.6,10.8v-3.6H0v3.6h3.6Z" />
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
          </article>
        </div>
        <!-- Block - Featured Article Fullscreen End -->

      </div>
    </div>
    <!-- Section - Inner Headline Article End -->

    <!-- Section - Blog Grid Start -->
    <div id="posts" class="mxd-section bg-color-base blur-section padding-bottom-tag-m">
      <div class="mxd-container grid-l-container">

        <div class="mxd-posts-area">
          <div class="mxd-posts-container fullwidth-posts-container">

            <!-- Regular Posts Alt Grid Start -->
            <div class="mxd-posts-grid">
              <div class="p-0 container-fluid">
                <div class="row g-0 mxd-posts-grid__row">
                  @foreach($blogs as $blog)
                    <div class="col-12 col-md-6 col-xl-4 mxd-grid-item mxd-posts-grid__item animate-card-3">
                      <article class="mxd-post post-simple-alt">
                        <div class="post-simple-alt__date">
                          <span
                            class="meta-date">{{ \Carbon\Carbon::parse($blog->created_at ?? now())->format('d F, Y') }}</span>
                        </div>
                        <a class="post-simple-alt__media active-cursor-permanent" data-cursor-text="Read Post"
                          href="{{ route('frontend.blog') }}">
                          <img class="" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </a>
                        <div class="post-simple-alt__caption">
                          <div class="post-simple-alt__title">
                            <h3>
                              <a href="{{ route('frontend.blog-details', $blog->slug) }}">{{ $blog->title }}</a>
                            </h3>
                          </div>
                          <div class="post-simple-alt__tags">
                            @if(!empty($blog->meta_keywords))
                              @foreach(explode(',', $blog->meta_keywords) as $keyword)
                                <a class="tag tag-s tag-medium mxd-scramble" href="#0">{{ trim($keyword) }}</a>
                              @endforeach
                            @else
                              <a class="tag tag-s tag-medium mxd-scramble" href="#0">Insights</a>
                            @endif
                          </div>
                        </div>
                      </article>
                    </div>
                  @endforeach

                </div>
              </div>
            </div>
            <!-- Regular Posts Alt Grid End -->

            <!-- Blog Pagination Start -->
            <div class="mxd-blog-pagination pagination-fullwidth mxd-grid-item">
              <div class="mxd-blog-pagination__inner">
                <nav class="mxd-blog-pagination__items">
                  <a class="mxd-blog-pagination__item blog-pagination-control prev btn btn-line-icon btn-line-default slide-left"
                    href="#0" aria-label="Previous Page">
                    <!-- <i class="ph ph-arrow-left"></i> -->
                    <i>
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                        <path
                          d="M7.2,18v-3.6h3.6v3.6h-3.6ZM3.6,7.2H0v3.6h3.6v3.6h3.6v-3.6h10.8v-3.6H7.2v-3.6h-3.6s0,3.6,0,3.6ZM7.2,3.6h3.6V0h-3.6v3.6Z" />
                      </svg>
                    </i>
                    <span class="btn-caption mxd-scramble">Prev</span>
                  </a>
                  <a href="#0" class="mxd-blog-pagination__item blog-pagination-number btn mxd-scramble">
                    <span class="btn-caption">01</span>
                  </a>
                  <a href="#0" class="mxd-blog-pagination__item blog-pagination-number btn mxd-scramble active">
                    <span class="btn-caption">02</span>
                  </a>
                  <a href="#0" class="mxd-blog-pagination__item blog-pagination-number btn mxd-scramble">
                    <span class="btn-caption">03</span>
                  </a>
                  <a class="mxd-blog-pagination__item blog-pagination-control next btn btn-line-icon btn-line-default slide-right"
                    href="#0" aria-label="Next Page">
                    <span class="btn-caption mxd-scramble">Next</span>
                    <!-- <i class="ph ph-arrow-right"></i> -->
                    <i>
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                        <path
                          d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z" />
                      </svg>
                    </i>
                  </a>
                </nav>
              </div>
            </div>
            <!-- Blog Pagination End -->

          </div>
        </div>
      </div>
    </div>
    <!-- Section - Blog Grid End -->

    <!-- Section - CTA with Matter.js Objects Start -->
    <div class="mxd-section bg-color-accent">
      <!-- background video -->
      <div class="mxd-background">
        <div class="mxd-background__video">
          <video class="video" preload="auto" autoplay="autoplay" loop="loop" muted="muted"
            poster="video/1920x660_cta.webp">
            <source type="video/mp4" src="video/1920x660_cta.mp4">
            <source type="video/webm" src="video/1920x660_cta.webm">
            <source type="video/ogv" src="video/1920x660_cta.html">
          </video>
        </div>
        <div class="mxd-background__cover accent"></div>
      </div>
      <div class="mxd-container fullwidth-container">

        <!-- Block - CTA with Matter.js Objects Start -->
        <div class="mxd-block">
          <div class="mxd-promo mxd-gravity-section transparent">
            <div class="mxd-promo__wrap">
              <div class="mxd-promo__objects object-container">
                <div class="object object-permanent">
                  <p>Web design</p>
                </div>
                <div class="object object-permanent">
                  <p>Brand strategy</p>
                </div>
                <div class="object object-permanent">
                  <p>3D Models</p>
                </div>
                <div class="object object-permanent">
                  <p>Interactions</p>
                </div>
                <div class="object object-permanent">
                  <p>IU/UX</p>
                </div>
                <div class="object object-permanent">
                  <p>Guidelines</p>
                </div>
                <div class="object object-permanent">
                  <p>App design</p>
                </div>
                <div class="object object-permanent">
                  <p>Packaging</p>
                </div>
                <div class="object object-permanent">
                  <p>Development</p>
                </div>
                <div class="object object-permanent">
                  <p>Print Design</p>
                </div>
                <div class="object object-permanent">
                  <p>Branding</p>
                </div>
                <div class="object object-permanent">
                  <p>Applications</p>
                </div>
                <div class="object object-permanent">
                  <p>Visual identity</p>
                </div>
                <div class="object object-permanent">
                  <p>Logo design</p>
                </div>
              </div>
              <div class="mxd-promo__content">
                <div class="mxd-promo__btngroup anim-uni-in-up">
                  <a class="btn btn-line btn-line-permanent" href="{{ route('frontend.contact') }}">
                    <span class="btn-caption mxd-scramble">Write a line</span>
                  </a>
                </div>
                <div class="mxd-promo__caption">
                  <a class="active-cursor-permanent" data-cursor-text="Contact" href="{{ route('frontend.contact') }}">
                    <h2 class="mxd-split-lines permanent">Let's talk about your project</h2>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Block - CTA with Matter.js Objects End -->

      </div>
    </div>
    <!-- Section - CTA with Matter.js Objects End -->

  </main>
  <!-- Page Content End -->



@endsection