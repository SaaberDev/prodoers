<div>
    <form action="{{ route('guest.search.index', $query) }}" method="GET" class="pt-3 position-relative">
{{--        @csrf @method('GET')--}}
        <div class="input-group mb-1">
            <input wire:model="query"
                   name="query"
                   type="text"
                   class="form-control rounded-0 decreazeInputheight"
                   placeholder="e.g. logo design"
                   aria-label="search"
                   aria-describedby="button-addon2"
                   autocomplete="off"
            >
            <div class="input-group-append decreazeInputButtonHeight">
                <button {{--wire:click="searchResults({{ $query }})"--}} class="btn text-white rounded-0" type="submit" id="">
                    <img src="{{ asset('_assets/_guest/img/servicepage/icon_search.svg') }}" class="img-fluid" alt="search">
                </button>
            </div>
        </div>
        @if(!empty($query))
            @if(!empty($services))
                <div class="rounded-0 pageOnebanner position-absolute w-100">
                    <ul class="list-group rounded-0">
                        {{--                                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">Cras justo odio</a>--}}
                        @forelse($services as $service)
                            <a href="{{ route('guest.search.index', 'query=' . $service->title) }}" class="list-group-item list-group-item-action">{{ $service->title }}</a>
                        @empty
                            <a class="list-group-item list-group-item-action">No Results Found</a>
                        @endforelse
                    </ul>
                </div>
            @endif
        @endif
    </form>
</div>
