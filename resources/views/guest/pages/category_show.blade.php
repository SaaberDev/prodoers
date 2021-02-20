@extends('guest.layouts.app')
@section('title', 'category_name')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')

    {{-- Category Banner Start --}}
    <div class="section singleCategoryHero bgcustomLightgray " id="SingleCategoryHero">
        <div class="container">
            <div class="row   justify-content-center singlecaregoryBannerCustom">
                <div class=" col-lg-6 col-md-6 v-center">
                    <div class="pl-md-4">
                        <h2 class="">{{ $category->title }}</h2>
                        <p class="">{{ $category->desc }}</p>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 singlecaregoryBannerImg">
                    <div class="text-right pr-md-4">
                        <img src="{{ asset($category->category_banner ? config('designwala_paths.show.service_categories.banner') . $category->category_banner : config('designwala_paths.default.no_preview')) }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Category Banner End --}}

    @livewire('guest.category.category-component', ['category' => $category])

    {{-- Similar Services Start --}}
    <div class="singleCategorySimilarService bgcustomLightgray py-5" id="singleCategorySimilarService">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pb-3">
                        <h1>Popular Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($popular_services as $popular_service)
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset($popular_service->thumbnail ? config('designwala_paths.show.services.thumbnail') . $popular_service->thumbnail : config('designwala_paths.default.no_preview')) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="{{ route('guest.service.index', $popular_service->slug) }}" class="text-dark">{{ $popular_service->title }}</a></span> <span class="w-25 float-right text-right font-medium">$ {{ $popular_service->price }}</span>
                                </h5>
                                <div class="starIcons "> <span><svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667" viewBox="0 0 28.906 27.667">
                                            <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                        </svg>
                                    </span> <span><svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667" viewBox="0 0 28.906 27.667">
                                            <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                        </svg>
                                    </span> <span><svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667" viewBox="0 0 28.906 27.667">
                                            <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                        </svg>
                                    </span> <span><svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667" viewBox="0 0 28.906 27.667">
                                            <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                        </svg>
                                    </span> <span><svg xmlns="http://www.w3.org/2000/svg" width="28.906" height="27.667" viewBox="0 0 28.906 27.667">
                                            <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                        </svg>
                                    </span> <span> &#40;200&#41; </span> </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="card-text  mb-0 cardSalesTitle"><small class=" bgOne text-white px-3 py-2 position-absolute">1k sales</small> </div>
                        </div>
                    </div>
                </div>
                @empty
                    No Services
                @endforelse

            </div>
        </div>
    </div>
    {{-- Similar Services End --}}

    {{-- FAQ Start --}}

    <div class="singleCategoryDetailContent py-5" id="singleCategoryDetailContent">
        <div class="container">
            <div class="row">
                @forelse($category->serviceCategoryFaqs->take(6) as $faq)
                <div class="col-md-6">
                    <div class="py-3">
                        <div class="detailsContent">
                            <h4>{{ $faq->question }}</h4>
                            <p class="mb-0">{{ $faq->answer }}</p>
                        </div>
                    </div>

                </div>
                @empty
                    No FAQ
                @endforelse
            </div>
        </div>
    </div>
    {{-- FAQ End --}}

    {{-- Like to discuss Start --}}
    <div class="singleCategoryBottomhero py100 bgcustomLightgray ptSm50 pbSm50" id="singleCategoryBottomhero">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-md-12 v-center text-center">
                    <h2 class="textsm-center">Would like to discuss
                        your new project?</h2>
                    @include('guest.includes.lets_talk_button')
                </div>
            </div>
        </div>
    </div>
    {{-- Like to discuss End --}}
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
