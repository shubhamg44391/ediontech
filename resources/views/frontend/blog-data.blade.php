<div class="mxd-block">
            <div class="mxd-blog-grid">
              <div class="p-0 container-fluid">
                <div class="row g-0 mxd-blog-grid__gallery">
                 
                  @forelse($blogs as $blog)
                    <div class="col-12 col-lg-4 mxd-blog-item animate-card-3">
                      <div class="mxd-blog-item__date">
                        <span
                          class="meta-date">{{ \Carbon\Carbon::parse($blog->created_at ?? now())->format('d F, Y') }}</span>
                      </div>
                      <a class="mxd-blog-item__media active-cursor-permanent" data-cursor-text="Read Post"
                        href="{{ route('frontend.blog-details', $blog->slug) }}">
                        <img class="" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" loading="lazy">
                      </a>
                      <div class="mxd-blog-item__caption">
                        <div class="mxd-blog-item__title">
                          <a class="blog-name-m"
                            href="{{ route('frontend.blog-details', $blog->slug) }}">{{ $blog->title }}</a>
                        </div>

                      </div>
                    </div>
                  @empty
                    <div class="py-5 text-center col-12">
                      <p>No blog posts found at the moment. Please check back later.</p>
                    </div>
                  @endforelse

                </div>
              </div>
            </div>
          </div>