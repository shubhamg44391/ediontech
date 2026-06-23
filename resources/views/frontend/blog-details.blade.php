@extends('frontend.layouts.main')

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
                                    @if (!empty($blog->title))
                                        <h1 class="mb-3">{{ $blog->title }}</h1>
                                    @endif
                                    <div class="mb-4 text-muted">
                                        <small>Published on
                                            {{ \Carbon\Carbon::parse($blog->created_at ?? now())->format('d F, Y') }}</small>
                                    </div>

                                    @if (!empty($blog->image))
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                            class="mb-5 rounded img-fluid"
                                            style="width: 100%; max-height: 600px; object-fit: cover;">
                                    @endif
                                    @if (!empty($blog->title))
                                        <h3 class="mb-3">{{ $blog->meta_title }}</h3>
                                    @endif
                                    @if (!empty($blog->title))
                                        <h3 class="mb-3">{{ $blog->meta_keywords }}</h3>
                                    @endif
                                    <div class="post-description ">
                                        @if (!empty($blog->description))
                                            <p class="gap-5 fs-5 letter-spacing-2">
                                                {!! $blog->description !!}
                                            </p>
                                        @endif
                                    </div>

                                    <div class="post-description">
                                        @if (!empty($blog->description))
                                            <p class="gap-5 fs-5 letter-spacing-2">
                                                {!! $blog->description !!}
                                            </p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
         
            <!--=====================================-->
            <!--=     Call To Action Area Start     =-->
            <!--=====================================-->

        </div>
    </main>
@endsection
