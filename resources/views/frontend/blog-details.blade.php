@extends('frontend.layouts.main')

@section('title', !empty($blog->meta_title) ? $blog->meta_title : ($blog->title ?? 'Blog Details - Edion Web Technologies'))
@section('description', !empty($blog->meta_description) ? $blog->meta_description : (!empty($blog->description) ? \Illuminate\Support\Str::limit(strip_tags($blog->description), 160) : 'Read the latest blog post from Edion Web Technologies.'))
@section('keywords', !empty($blog->meta_keywords) ? $blog->meta_keywords : 'website development, digital marketing, SEO, web design, Edion Web Technologies')

@section('main-container')
    <main id="mxd-page-content" class="mxd-page-content inner-page-content">
        <div style="margin-top: 160px; min-height: 100vh; padding-bottom: 60px;">

                <!--=====================================-->
                <!--=    Blog Details Area Start        =-->
                <!--=====================================-->
                <section class="section-padding privacy-policy-area pt-0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="privacy-policy-content text-start"
                                    style="line-height: 1.9; font-size: 1.3rem;">
                                    @if (!empty($blog->title))
                                        <h1 class="mb-3 fw-bold blog-main-title" style="letter-spacing: normal; line-height: 1.3; font-size: 2.75rem;">{{ $blog->title }}</h1>
                                    @endif
                                    <div class="mb-4 blog-meta-date">
                                        <span class="fs-5 fw-medium">Published on
                                            {{ \Carbon\Carbon::parse($blog->created_at ?? now())->format('d F, Y') }}</span>
                                    </div>

                                    @if (!empty($blog->image))
                                        <div class="mb-5 text-center">
                                            <img src="{{ asset('storage/' . $blog- alt="Edion Web Technologies">image) }}" alt="{{ $blog->title }}"
                                                class="rounded img-fluid"
                                                style="width: 100%; height: auto; max-height: 600px; object-fit: contain; display: block; margin: 0 auto;">
                                        </div>
                                    @endif

                                    <div class="post-description" style="word-break: break-word; overflow-wrap: break-word;">
                                        @if (!empty($blog->description))
                                            <div class="blog-editor-content">
                                                {!! $blog->description !!}
                                            </div>
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

    <style>
        /* Base / Dark Mode Defaults (High Contrast & Large Readable Text) */
        .blog-main-title {
            color: #ffffff !important;
            font-size: 3rem !important;
            font-weight: 700;
        }
        .blog-meta-date {
            color: #cbd5e1 !important;
            font-size: 1.25rem !important;
        }
        .blog-editor-content,
        .blog-editor-content p,
        .blog-editor-content span,
        .blog-editor-content font,
        .blog-editor-content div,
        .blog-editor-content li,
        .blog-editor-content td {
            color: #f3f4f6 !important;
            font-size: 1.5rem !important;
            line-height: 1.95 !important;
            letter-spacing: normal;
        }
        .blog-editor-content * {
            letter-spacing: normal;
            word-spacing: normal;
        }
        .blog-editor-content h1,
        .blog-editor-content h2,
        .blog-editor-content h3,
        .blog-editor-content h4,
        .blog-editor-content h5,
        .blog-editor-content h6 {
            color: #ffffff !important;
            font-weight: 700 !important;
            letter-spacing: normal;
            line-height: 1.35;
            margin-top: 2.5rem;
            margin-bottom: 1.5rem;
        }
        .blog-editor-content h1 { font-size: 2.85rem !important; }
        .blog-editor-content h2 { font-size: 2.35rem !important; border-bottom: 1px solid rgba(255, 255, 255, 0.15); padding-bottom: 0.6rem; }
        .blog-editor-content h3 { font-size: 1.9rem !important; }
        .blog-editor-content h4 { font-size: 1.6rem !important; }
        .blog-editor-content h5 { font-size: 1.4rem !important; }
        .blog-editor-content p {
            color: #f3f4f6 !important;
            font-size: 1.5rem !important;
            line-height: 1.95 !important;
            margin-bottom: 1.75rem !important;
            letter-spacing: normal;
        }
        .blog-editor-content ul {
            list-style-type: disc !important;
            padding-left: 2rem !important;
            margin-top: 0.75rem !important;
            margin-bottom: 1.75rem !important;
        }
        .blog-editor-content ol {
            list-style-type: decimal !important;
            padding-left: 2rem !important;
            margin-top: 0.75rem !important;
            margin-bottom: 1.75rem !important;
        }
        .blog-editor-content li {
            color: #f3f4f6 !important;
            font-size: 1.45rem !important;
            line-height: 1.85 !important;
            margin-bottom: 0.75rem !important;
            letter-spacing: normal;
        }
        .blog-editor-content strong,
        .blog-editor-content b {
            color: #ffffff !important;
            font-weight: 700 !important;
        }
        .blog-editor-content a {
            color: #60a5fa !important;
            text-decoration: underline !important;
        }
        .blog-editor-content a:hover {
            color: #93c5fd !important;
        }
        .blog-editor-content img {
            max-width: 100% !important;
            height: auto !important;
            border-radius: 10px !important;
            margin: 2rem 0 !important;
            display: block !important;
        }
        .blog-editor-content blockquote {
            border-left: 4px solid #3b82f6 !important;
            padding: 1rem 1.5rem !important;
            margin: 2rem 0 !important;
            background: rgba(255, 255, 255, 0.05) !important;
            border-radius: 0 8px 8px 0 !important;
            font-style: italic !important;
            color: #e2e8f0 !important;
            font-size: 1.3rem !important;
        }
        .blog-editor-content table {
            width: 100% !important;
            margin-bottom: 2rem !important;
            border-collapse: collapse !important;
            color: #f3f4f6 !important;
            font-size: 1.2rem !important;
        }
        .blog-editor-content th,
        .blog-editor-content td {
            border: 1px solid #4b5563 !important;
            padding: 0.85rem 1rem !important;
            text-align: left !important;
        }
        .blog-editor-content th {
            background-color: #1f2937 !important;
            color: #ffffff !important;
        }

        /* Light Mode Styles */
        [color-scheme="light"] .blog-main-title,
        [data-theme="light"] .blog-main-title,
        html.light .blog-main-title,
        body.light .blog-main-title,
        .light-mode .blog-main-title {
            color: #111827 !important;
        }
        [color-scheme="light"] .blog-meta-date,
        [data-theme="light"] .blog-meta-date,
        html.light .blog-meta-date,
        body.light .blog-meta-date,
        .light-mode .blog-meta-date {
            color: #4b5563 !important;
        }
        [color-scheme="light"] .blog-editor-content,
        [color-scheme="light"] .blog-editor-content p,
        [color-scheme="light"] .blog-editor-content span,
        [color-scheme="light"] .blog-editor-content font,
        [color-scheme="light"] .blog-editor-content div,
        [color-scheme="light"] .blog-editor-content li,
        [color-scheme="light"] .blog-editor-content td,
        [data-theme="light"] .blog-editor-content,
        [data-theme="light"] .blog-editor-content p,
        [data-theme="light"] .blog-editor-content span,
        [data-theme="light"] .blog-editor-content font,
        [data-theme="light"] .blog-editor-content div,
        [data-theme="light"] .blog-editor-content li,
        [data-theme="light"] .blog-editor-content td,
        html.light .blog-editor-content,
        html.light .blog-editor-content p,
        html.light .blog-editor-content span,
        html.light .blog-editor-content font,
        html.light .blog-editor-content div,
        html.light .blog-editor-content li,
        html.light .blog-editor-content td,
        body.light .blog-editor-content,
        body.light .blog-editor-content p,
        body.light .blog-editor-content span,
        body.light .blog-editor-content font,
        body.light .blog-editor-content div,
        body.light .blog-editor-content li,
        body.light .blog-editor-content td,
        .light-mode .blog-editor-content,
        .light-mode .blog-editor-content p,
        .light-mode .blog-editor-content span,
        .light-mode .blog-editor-content font,
        .light-mode .blog-editor-content div,
        .light-mode .blog-editor-content li,
        .light-mode .blog-editor-content td {
            color: #111827 !important;
        }
        [color-scheme="light"] .blog-editor-content h1,
        [color-scheme="light"] .blog-editor-content h2,
        [color-scheme="light"] .blog-editor-content h3,
        [color-scheme="light"] .blog-editor-content h4,
        [color-scheme="light"] .blog-editor-content h5,
        [color-scheme="light"] .blog-editor-content h6,
        [data-theme="light"] .blog-editor-content h1,
        [data-theme="light"] .blog-editor-content h2,
        [data-theme="light"] .blog-editor-content h3,
        [data-theme="light"] .blog-editor-content h4,
        [data-theme="light"] .blog-editor-content h5,
        [data-theme="light"] .blog-editor-content h6,
        html.light .blog-editor-content h1,
        html.light .blog-editor-content h2,
        html.light .blog-editor-content h3,
        html.light .blog-editor-content h4,
        html.light .blog-editor-content h5,
        html.light .blog-editor-content h6,
        body.light .blog-editor-content h1,
        body.light .blog-editor-content h2,
        body.light .blog-editor-content h3,
        body.light .blog-editor-content h4,
        body.light .blog-editor-content h5,
        body.light .blog-editor-content h6,
        .light-mode .blog-editor-content h1,
        .light-mode .blog-editor-content h2,
        .light-mode .blog-editor-content h3,
        .light-mode .blog-editor-content h4,
        .light-mode .blog-editor-content h5,
        .light-mode .blog-editor-content h6 {
            color: #111827 !important;
        }
        [color-scheme="light"] .blog-editor-content h2,
        [data-theme="light"] .blog-editor-content h2,
        html.light .blog-editor-content h2,
        body.light .blog-editor-content h2,
        .light-mode .blog-editor-content h2 {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1) !important;
        }
        [color-scheme="light"] .blog-editor-content strong,
        [color-scheme="light"] .blog-editor-content b,
        [data-theme="light"] .blog-editor-content strong,
        [data-theme="light"] .blog-editor-content b,
        html.light .blog-editor-content strong,
        html.light .blog-editor-content b,
        body.light .blog-editor-content strong,
        body.light .blog-editor-content b,
        .light-mode .blog-editor-content strong,
        .light-mode .blog-editor-content b {
            color: #000000 !important;
        }
        [color-scheme="light"] .blog-editor-content a,
        [data-theme="light"] .blog-editor-content a,
        html.light .blog-editor-content a,
        body.light .blog-editor-content a,
        .light-mode .blog-editor-content a {
            color: #1d4ed8 !important;
        }
    </style>
@endsection
