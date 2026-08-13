@extends('frontend.layouts.app')

@section('title', '404 - Page Not Found | Edion Web Technologies')

@section('main-container')
<main id="main" style="min-height: 75vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: var(--sp-9) var(--sp-4);">
  <div class="shell" style="max-width: 720px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
    <h1 style="font-size: clamp(100px, 20vw, 220px); font-weight: 800; line-height: 0.9; color: #000000; letter-spacing: -0.05em; margin: 0 0 var(--sp-4);">404</h1>
    
    <h2 style="font-size: clamp(24px, 4vw, 36px); font-weight: 700; color: #000000; margin: 0 0 var(--sp-3);">Oops! Page Not Found</h2>
    
    <p style="font-size: var(--fs-body); color: #333333; max-width: 540px; margin: 0 0 var(--sp-6); line-height: 1.6;">
      The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
    </p>

    <div style="display: flex; gap: var(--sp-4); justify-content: center;">
      <a class="btn btn--ink" href="{{ url('/') }}">
        Go Back Home
        <svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true">
          <path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </div>
</main>
@endsection
