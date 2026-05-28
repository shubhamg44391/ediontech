<nav aria-label="Page navigation">
    <ul class="pagination justify-content-end m-4">
        <li class="page-item prev">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i
                    class="tf-icon bx bx-chevrons-left"></i></a>
        </li>

        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <li class="page-item next">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="tf-icon bx bx-chevrons-right"></i></a>
        </li>
    </ul>
</nav>