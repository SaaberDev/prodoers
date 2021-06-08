<div>
    {{-- Search Bar Start --}}
    <div class="searchPageSearchBar py-5" id="searchPageSearchBar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <form action="{{ route('guest.search.index', $query) }}" method="GET">
                        <div class="input-group ">
                            <input wire:model="query"
                                   name="query"
                                   value="{{ $query }}"
                                   type="text"
                                   class="form-control rounded-0"
                                   placeholder="e.g. logo design"
                                   aria-label="Recipient's username"
                                   aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <!--                                   button with svg -->
                                <button class="btn btn-outline-secondary text-white rounded-0" type="submit" id="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27.606" height="27.726"
                                         viewBox="0 0 27.606 27.726">
                                        <path id="Icon_awesome-search" data-name="Icon awesome-search"
                                              d="M27.23,23.971l-5.376-5.4a1.29,1.29,0,0,0-.917-.379h-.879a11.2,11.2,0,1,0-1.941,1.949v.883a1.3,1.3,0,0,0,.377.92l5.376,5.4a1.285,1.285,0,0,0,1.828,0l1.526-1.532a1.309,1.309,0,0,0,.005-1.841ZM11.216,18.193a6.931,6.931,0,1,1,6.9-6.931A6.912,6.912,0,0,1,11.216,18.193Z"
                                              fill="#fff"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Search Bar End --}}

    <div class="searchPageSearchResults" id="searchPageSearchResults">
        <div class="container">
            {{-- Search Result Start --}}
            <div class="row">
                @forelse($services as $service)
                    <div class="col-lg-4 col-md-6 padding25" wire:key="{{ $service->id }}">
                        <div class="searchPageResultSingle position-relative">
                            <div class="card ">
                                <img src="{{ asset($service->thumbnail ? $service_thumbnail . $service->thumbnail : config('designwala_paths.default.no_preview')) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="{{ route('guest.service.index', $service->slug) }}" class="text-dark">{{ $service->title }}</a></span>
                                        <span class="w-25 float-right text-right font-medium">$ {{ $service->price }}</span>
                                    </h5>
                                    <div class="starIcons "> <span><svg xmlns="http://www.w3.org/2000/svg" width="28.906"
                                                                        height="27.667" viewBox="0 0 28.906 27.667">
                                            <path id="Icon_awesome-star" data-name="Icon awesome-star"
                                                  d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z"
                                                  transform="translate(-1.441 0.001)" fill="#f9bf00"/>
                                        </svg>
                                    </span> <span><svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667"
                                                       viewBox="0 0 28.906 27.667">
                                            <path id="Icon_awesome-star" data-name="Icon awesome-star"
                                                  d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z"
                                                  transform="translate(-1.441 0.001)" fill="#f9bf00"/>
                                        </svg>
                                    </span> <span><svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667"
                                                       viewBox="0 0 28.906 27.667">
                                            <path id="Icon_awesome-star" data-name="Icon awesome-star"
                                                  d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z"
                                                  transform="translate(-1.441 0.001)" fill="#f9bf00"/>
                                        </svg>
                                    </span> <span><svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667"
                                                       viewBox="0 0 28.906 27.667">
                                            <path id="Icon_awesome-star" data-name="Icon awesome-star"
                                                  d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z"
                                                  transform="translate(-1.441 0.001)" fill="#f9bf00"/>
                                        </svg>
                                    </span> <span><svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667"
                                                       viewBox="0 0 28.906 27.667">
                                            <path id="Icon_awesome-star" data-name="Icon awesome-star"
                                                  d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z"
                                                  transform="translate(-1.441 0.001)" fill="#f9bf00"/>
                                        </svg>
                                    </span> <span> &#40;200&#41; </span></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-text  mb-0 cardSalesTitle"><small
                                        class=" bgOne text-white px-3 py-2 position-absolute">1k sales</small></div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="section  ptSm50 pbSm50 notFoundpageNotFoundSection" id="notFoundpageNotFoundSection">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 text-center">
                                    <div class="">
                                        <!--                    <img src="img/notfound/Group%20228.png" alt="" class="img-fluid w75Img wsm-100 "> -->
                                        <img src="{{ asset('_assets/_guest/img/notfoundpage/notfound.svg') }}" alt="" class="img-fluid  wsm-100 ">
                                    </div>
                                </div>
                            </div>
                            <div class="row  justify-content-center">
                                <div class="col-lg-12 col-md-12 v-center text-center" style="padding-bottom: 60px;">
                                    <h2 class="textsm-center ">Would like to discuss
                                        your new project?</h2>
                                    @include('guest.includes.lets_talk_button')
{{--                                    <div class="textsm-center pt-3">--}}
{{--                                        <button type="button" class="btn bgOne rounded-0 px-5 text-white py-2">Let's Talk</button>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            {{-- Search Result End --}}

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
