@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex gap-2 items-center justify-between">

        @if ($paginator->onFirstPage())
            <span class="btn btn-outline btn-disabled">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn btn-outline btn-accent">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn btn-outline btn-accent">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="btn btn-outline btn-disabled">
                {!! __('pagination.next') !!}
            </span>
        @endif

    </nav>
@endif
