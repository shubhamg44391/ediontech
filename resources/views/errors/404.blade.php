@extends('Frontend.Layouts.main')

@section('main-container')

  <!-- Page Content Start -->
  <main id="mxd-page-content" class="mxd-page-content inner-page-content" style="min-height: 80vh; display: flex; align-items: center;">

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

    <!-- Section - 404 Content Start -->
    <div class="mxd-section blur-section w-100">
      <div class="mxd-container grid-l-container">

        <div class="mxd-block loading-wrap">
          <div class="inner-headline margin-bottom-subtitle" style="text-align: center; padding: 100px 0;">
            <div class="container-fluid p-0">
              <div class="row g-0 justify-content-center">
                <div class="col-12 mxd-grid-item d-flex flex-column align-items-center">
                  
                  <div class="inner-headline__title pre-subtitle-large">
                    <h1 class="large loading-split" style="font-size: clamp(80px, 15vw, 200px); line-height: 1; color: var(--highlight, #e60000);">404</h1>
                  </div>
                  
                  <div class="inner-headline__subtitle loading-item mt-4">
                    <p>Oops! Page <span>Not Found</span></p>
                  </div>
                  
                  <p class="mt-4 mb-5 t-muted" style="max-width: 600px; font-size: 18px;">
                    The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
                  </p>
                  
                  <div class="pricing-data__btnholder anim-uni-in-up mt-4">
                    <a class="btn btn-default-icon btn-default-outline slide-right" href="{{ route('frontend.home') }}" style="display: inline-flex;">
                      <span class="btn-caption mxd-scramble">Go Back Home</span>
                      <i class="btn-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 18 18">
                          <path d="M10.8,0v3.6h-3.6V0h3.6ZM14.4,10.8h3.6v-3.6h-3.6v-3.6h-3.6v3.6H0v3.6h10.8v3.6h3.6v-3.6ZM10.8,14.4h-3.6v3.6h3.6v-3.6Z"/>
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
    <!-- Section - 404 Content End -->

  </main>
  <!-- Page Content End -->

@endsection
