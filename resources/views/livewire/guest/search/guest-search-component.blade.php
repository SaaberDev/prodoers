<div>
    <form class="pt-3 search-form ">
        <div class="input-group mb-3">
            <input wire:model="search"
                   type="text"
                   class="form-control"
                   id="search-input-box"
                   placeholder="e.g. logo design "
                   aria-label="search services"
            >
            <div class="input-group-append2">
                <!--   button with svg -->
                <button wire:click.prevent="search"
                        type="button"
                        class="search-btn"
                >
                    <img src="{{ asset('_assets/_guest/img/servicepage/icon_search.svg') }}" class="img-fluid" alt="Service Search Icon">
                </button>
            </div>
        </div>

    @if(!empty($search))
        @if(!empty($services))
        <!--Search Result-->
        <div class="search-box-result">
            <ul>
                @forelse($services as $service)
                <li>
                    <a href="{{ route('guest.search.index', ['search' => $service->slug]) }}">{{ $service->title }}</a>
                </li>
                @empty
                    <li>
                        <a>No Results Found</a>
                    </li>
                @endforelse
            </ul>
        </div>
            @endif
        @endif
    </form>
</div>

