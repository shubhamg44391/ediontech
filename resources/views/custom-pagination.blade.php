@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem; flex-wrap: wrap; gap: 10px;">
        <div style="font-size: 0.875rem; color: #6b7280;">
            <p style="margin: 0;">
                {!! __('Showing') !!}
                @if ($paginator->firstItem())
                    <span style="font-weight: 600;">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span style="font-weight: 600;">{{ $paginator->lastItem() }}</span>
                @else
                    {{ $paginator->count() }}
                @endif
                {!! __('of') !!}
                <span style="font-weight: 600;">{{ $paginator->total() }}</span>
                {!! __('results') !!}
            </p>
        </div>

        <ul style="display: flex; list-style: none; padding: 0; margin: 0; gap: 4px; flex-wrap: wrap;">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li style="opacity: 0.5; padding: 6px 12px; border: 1px solid #d1d5db; border-radius: 6px; cursor: not-allowed; font-size: 0.875rem; background: #f9fafb;">
                    &laquo; Previous
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" style="padding: 6px 12px; border: 1px solid #d1d5db; border-radius: 6px; text-decoration: none; color: #374151; font-size: 0.875rem; background: #ffffff;">
                        &laquo; Previous
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li style="padding: 6px 12px; opacity: 0.6; font-size: 0.875rem;">{{ $element }}</li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li style="padding: 6px 12px; border: 1px solid #2563eb; background-color: #2563eb; color: #ffffff; border-radius: 6px; font-weight: 600; font-size: 0.875rem;">
                                {{ $page }}
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" style="padding: 6px 12px; border: 1px solid #d1d5db; border-radius: 6px; text-decoration: none; color: #374151; font-size: 0.875rem; background: #ffffff;">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" style="padding: 6px 12px; border: 1px solid #d1d5db; border-radius: 6px; text-decoration: none; color: #374151; font-size: 0.875rem; background: #ffffff;">
                        Next &raquo;
                    </a>
                </li>
            @else
                <li style="opacity: 0.5; padding: 6px 12px; border: 1px solid #d1d5db; border-radius: 6px; cursor: not-allowed; font-size: 0.875rem; background: #f9fafb;">
                    Next &raquo;
                </li>
            @endif
        </ul>
    </nav>
@endif
