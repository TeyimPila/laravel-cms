@if ($paginator->hasPages())
    <div class="pagination-wrapper m-t-20">
        <nav class="pagination">
            <ul class="pagination">

                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <a class="button is-outlined is-primary m-r-5" disabled><span>&laquo;</span></a>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="button is-outlined is-primary m-r-5" rel="prev">&laquo;</a>
                @endif

                <ul class="pagination-list is-centered">
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="disabled"><span class="pagination-ellipsis">&hellip;</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li>
                                        <a href="" class="button is-primary m-r-5">{{$page}}</a>
                                    </li>
                                @else
                                    <li><a href="{{ $url }}" class="button is-outlined is-primary m-r-5">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </ul>

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li><a href="{{ $paginator->nextPageUrl() }}" class="button is-outlined is-primary m-r-5" rel="next">&raquo;</a></li>
                @else
                    <a class="button is-outlined is-primary m-r-5" disabled><span>&raquo;</span></a>
                @endif
            </ul>
        </nav>
    </div>
@endif
