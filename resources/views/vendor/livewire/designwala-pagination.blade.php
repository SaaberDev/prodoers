@if ($paginator->hasPages())
    <div class="tablesPagination">
        <nav aria-label="Page navigation example ">
            <ul class="pagination justify-content-end mb-0 ">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')"
                        hidden>
                        <span class="page-link" aria-disabled="true">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left"
                                 fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                            </svg>
                        </span>
                    </li>
                @else
                    <li class="page-item">
                        <a dusk="previousPage" class="page-link" wire:click="previousPage" wire:loading.attr="disabled"
                           rel="prev"
                           aria-label="@lang('pagination.previous')">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                            </svg>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item" aria-disabled="true">
                            <span
                                class="page-link">{{ $element }}
                            </span>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" wire:key="paginator-page-{{ $page }}"
                                    aria-current="page">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item" wire:key="paginator-page-{{ $page }}">
                                    <a class="page-link" wire:click="gotoPage({{ $page }})">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a dusk="nextPage" class="page-link" wire:click="nextPage" wire:loading.attr="disabled"
                           rel="next" aria-label="@lang('pagination.next')">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')" hidden>
                        <span class="page-link">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg>
                        </span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif
