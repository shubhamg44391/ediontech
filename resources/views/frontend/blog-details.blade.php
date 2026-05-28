@extends('Frontend.Layouts.main')

@section('main-container')

   <main id="mxd-page-content" class="mxd-page-content inner-page-content">
      <div style="margin-top: 120px; min-height: 100vh; padding-bottom: 60px;">
        

         <!--=====================================-->
         <!--=    Privacy Policy Area Start      =-->
         <!--=====================================-->
         <section class="section-padding privacy-policy-area">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-10">
                     <div class="privacy-policy-content text-start"
                        style="line-height: 1.8; font-size: 1.1rem; color: var(--text-color, #444);">

                        <h1 class="mb-3">{{ $blogs->title }}</h1>
                        <div class="text-muted mb-4">
                           <small>Published on
                              {{ \Carbon\Carbon::parse($blogs->created_at ?? now())->format('d F, Y') }}</small>
                        </div>

                        @if($blogs->image)
                           <img src="{{ asset('storage/' . $blogs->image) }}" alt="{{ $blogs->title }}"
                              class="img-fluid rounded mb-5" style="width: 100%; max-height: 600px; object-fit: cover;">
                        @endif

                        <div class="post-description">
                           {!! $blogs->description !!}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!--=====================================-->
         <!--=     Call To Action Area Start     =-->
         <!--=====================================-->
         <section class="section call-to-action-area mt-5 pt-5 pb-5 bg-light rounded text-center">
            <div class="container">
               <div class="call-to-action">
                  <div class="section-heading">
                     <span class="subtitle text-primary fw-bold">Let's Work Together</span>
                     <h2 class="title mb-4">Need a successful project?</h2>
                     <a href="{{ route('frontend.contact') }}" class="btn btn-primary btn-lg mt-3">Estimate Project</a>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </main>
@endsection