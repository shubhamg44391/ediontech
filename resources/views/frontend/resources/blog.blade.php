@extends('frontend.layouts.app')

@section('title', !empty($headerdata->meta_title) ? $headerdata->meta_title : 'Insights | Software, Rental Tech, Web Performance & SEO | Edion')
@section('description', !empty($headerdata->meta_description) ? $headerdata->meta_description : 'Practical writing on car rental and fleet software, custom development, Core Web Vitals, mobile stack choices and search, from the Edion Web Technologies team.')
@section('keywords', !empty($headerdata->meta_keywords) ? $headerdata->meta_keywords : 'car rental software blog, fleet management insights, web development blog, Core Web Vitals, SEO insights, software development articles')

@section('main-container')
<main id="main"><a id="top"></a>

<section class="phero shell">
 <nav aria-label="Breadcrumb"><ol class="crumbs"><li><a href="{{ url('/') }}">Home</a></li><li aria-current="page">Insights</li></ol></nav>
 <p class="eyebrow">Insights</p>
 <h1 style="margin-top:var(--sp-4)">Notes from building things that have to keep working.</h1>
 <p class="lead">
 Written by the people doing the work, not a content farm. Mostly about rental and fleet
 systems, web performance, and the trade-offs nobody puts in a sales deck.
 </p>
</section>

<section class="band band--tight shell" style="padding-bottom:0">
 <div class="chips" data-filter role="group" aria-label="Filter by category" data-reveal>
  <button class="chip" type="button" data-cat="all" aria-current="true">All articles</button>
  @if(isset($categories) && count($categories) > 0)
    @foreach($categories as $category)
      <button class="chip" type="button" data-cat="{{ $category->name }}" aria-current="false">{{ $category->name }}</button>
    @endforeach
  @endif
 </div>
</section>

<section class="band shell">
 <h2 class="vh">All articles</h2>
 <div class="posts">
  @if(isset($posts) && count($posts) > 0)
    @foreach($posts as $key => $post)
      @php
        $postCatName = 'Engineering';
        if (!empty($post->category_id)) {
            $catObj = \Illuminate\Support\Facades\DB::table('categories')->where('id', $post->category_id)->first();
            if ($catObj) { $postCatName = $catObj->name; }
        }
      @endphp
      <article class="post {{ $key === 0 ? 'post--wide' : '' }}" data-post-cat="{{ $postCatName }}" data-reveal>
        <a href="{{ url('/blog/' . $post->slug) }}" tabindex="-1" aria-hidden="true">
          <div class="post__media">
            @if(!empty($post->image))
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->image_alt ?? $post->title }}" width="800" height="450" loading="lazy" style="width:100%;height:100%;object-fit:cover;" onerror="this.onerror=null;this.parentElement.innerHTML='<div class=ph>Featured image</div>';">
            @else
              <div class="ph">Featured image<br>1600&times;900 WebP</div>
            @endif
          </div>
        </a>
        <div class="post__body">
          <p class="post__kicker">
            <span>{{ $postCatName }}</span><span>&middot;</span>
            <time datetime="{{ date('Y-m-d', strtotime($post->created_at ?? now())) }}">{{ date('d F Y', strtotime($post->created_at ?? now())) }}</time>
          </p>
          <h3><a href="{{ url('/blog/' . $post->slug) }}">{{ $post->title }}</a></h3>
          <p>{{ Str::limit(strip_tags($post->description ?? $post->meta_description ?? ''), 160) }}</p>
          <a href="{{ url('/blog/' . $post->slug) }}" class="post__more" style="display:inline-flex;align-items:center;">Read the article<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        </div>
      </article>
    @endforeach
  @else
    <p style="grid-column: 1 / -1; text-align: center; color: var(--text-2); font-size: 1.125rem; padding: 3rem 0;">No blog posts available at the moment.</p>
  @endif
 </div>
</section>

<div class="rail" aria-label="Production systems we build and maintain"><ul class="rail__track"><li class="rail__item"><span class="dot dot--live"></span><b>Dunya Car Rental</b> &middot; Rental &amp; booking platform</li><li class="rail__item"><span class="dot dot--live"></span><b>Autonation Rent a Car</b> &middot; Fleet + reservations</li><li class="rail__item"><span class="dot dot--live"></span><b>Bxience</b> &middot; Corporate web platform</li><li class="rail__item"><span class="dot dot--build"></span><b>Tutorwale</b> &middot; Marketplace build</li><li class="rail__item"><span class="dot dot--live"></span><b>Jarry Logistics</b> &middot; Ops dashboard</li><li class="rail__item"><span class="dot dot--live"></span><b>Link Loop</b> &middot; SEO campaign, month 14</li><li class="rail__item"><span class="dot dot--live"></span><b>Vepo</b> &middot; Mobile app, iOS + Android</li><li class="rail__item"><span class="dot dot--build"></span><b>BII</b> &middot; CRM integration</li></ul></div>

@include('frontend.partials.badgegrid')

<section class="band band--ink">
 <div class="shell split">
 <div data-reveal>
 <p class="eyebrow">Newsletter</p>
 <h2 style="font-size:var(--fs-h2);margin-top:var(--sp-4)">One email a month. No drip sequence.</h2>
 <p style="color:var(--text-on-ink-2);margin-top:var(--sp-5);max-width:44ch">
 What we shipped, what broke, and what we'd do differently. You can leave in one click.
 </p>
 </div>
 <form class="form" data-validate novalidate data-reveal>
 <div class="field">
 <label for="nl-email" style="color:var(--text-on-ink)">Email address</label>
 <input id="nl-email" name="email" type="email" required placeholder="you@company.com"
 autocomplete="email" style="background:var(--ink-2);border-color:var(--ink-3);color:var(--text-on-ink)">
 </div>
 <button class="btn btn--signal" type="submit">Subscribe<svg class="btn__arrow" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M2 8h12M9 3l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
 <p class="hint" data-form-note hidden style="color:var(--available);font-weight:600"></p>
 </form>
 </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chips = document.querySelectorAll('.chips .chip');
    const posts = document.querySelectorAll('.posts .post');

    chips.forEach(chip => {
        chip.addEventListener('click', function() {
            chips.forEach(c => {
                c.setAttribute('aria-current', 'false');
            });
            this.setAttribute('aria-current', 'true');

            const selectedCat = this.getAttribute('data-cat');
            posts.forEach(post => {
                const postCat = post.getAttribute('data-post-cat');
                if (selectedCat === 'all' || postCat === selectedCat) {
                    post.style.display = '';
                } else {
                    post.style.display = 'none';
                }
            });
        });
    });
});
</script>
</main>
@endsection