<div>
    <div class="searchPageSearchBar" id="searchPageSearchBar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <form action="{{ route('guest.search.index', $query) }}" method="GET" class="pt-3 search-form ">
                        <div class="input-group mb-3">
                            <input wire:model="query"
                                   name="query"
                                   value="{{ $query }}"
                                   type="text"
                                   class="form-control"
                                   id="search-input-box"
                                   placeholder="e.g. logo design "
                                   aria-label="search"
                            >
                            <div class="input-group-append2">
                                <!--   button with svg -->
                                <button type="button" class="search-btn">
                                    <img src="{{ asset('_assets/_guest/img/servicepage/icon_search.svg') }}" class="img-fluid" alt="designwala">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="searchPageSearchResults" id="searchPageSearchResults">
        <div class="container">
            {{-- Search Result Start --}}
            <div class="row">
                @forelse($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" wire:key="{{ $service->id }}">
                        <div class="searchPageResultSingle position-relative">
                            <div class="card ">
                                <div class="img-pad">
                                    <img src="{{ asset(optional($service)->getFirstMediaUrl('service_thumb') ? $service->getFirstMediaUrl('service_thumb') : asset('_default/no-preview-available.png')) }}" class="card-img-top img-fluid" alt="{{ $service->title }}">
                                </div>
                                <div class="card-body">
                                    <div class="card-title ">
                                        <h5>
                                            <a class="text-dark" href="{{ route('guest.service.index', $service->slug) }}">{{ $service->title }}</a>
                                        </h5>
                                        <h5 class="price">$ {{ $service->price }}</h5>
                                    </div>
                                    <div class="starIcons ">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667" viewBox="0 0 28.906 27.667">
                                                <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                            </svg>
                                        </span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667" viewBox="0 0 28.906 27.667">
                                                <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                            </svg>
                                        </span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667" viewBox="0 0 28.906 27.667">
                                                <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                            </svg>
                                        </span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667" viewBox="0 0 28.906 27.667">
                                                <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                            </svg>
                                        </span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667" viewBox="0 0 28.906 27.667">
                                                <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                            </svg>
                                        </span>
                                        <span> &#40;200&#41; </span>


                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-text  mb-0 cardSalesTitle"><small class=" bgOne text-white  position-absolute">1k sales</small> </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="section  ptSm50 pbSm50 notFoundpageNotFoundSection" id="notFoundpageNotFoundSection">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10  text-center">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="notfound-2 position-relative">
                                            <img src="{{ asset('_assets/_guest/img/notfoundpage/notfound.svg') }}" alt="" class="img-fluid  ">

                                            <p class="notfound-p">No Service Found!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>

            {{-- Search Pagination Start --}}
            <div class="row">
                @if($services->total() > 5)
                    {{ $services->onEachSide(2)->links('vendor.livewire.designwala-pagination-frontend') }}
                @else
                @endif
            </div>
            {{-- Search Pagination End --}}
        </div>
    </div>
</div>
