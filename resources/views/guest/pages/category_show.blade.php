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
                    <div class="text-md-left">
                        <h2>{{ $category->title }}</h2>
                        <p >{{ $category->desc }}</p>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 singlecaregoryBannerImg">
                    <div class="text-center">
                        <img src="{{ asset(optional($category)->getFirstMedia('category_thumb') ? $category->getFirstMediaUrl('category_thumb')  : config('designwala_paths.default.no_preview')) }}" alt="designwala" class="img-fluid float-end">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Category Banner End --}}

    {{-- Single Category Items --}}
    @livewire('guest.category.category-component', ['category' => $category])
    {{-- Single Category Items --}}

    {{-- Similar Services Start --}}
    @if(count($popular_services) > 0)
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
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card ">
                            <div class="img-pad">
                                <img src="{{ asset(optional($popular_service)->getFirstMedia('service_thumb') ? $popular_service->getFirstMediaUrl('service_thumb') : config('static_content._default.image.no_preview')) }}" class="card-img-top img-fluid" alt="{{ config('static_content._default.image.alt') }}">
                            </div>
                            <div class="card-body">
                                <div class="card-title ">
                                    <h5>
                                        <a href="{{ route('guest.service.index', $popular_service->slug) }}" class="text-dark">{{ $popular_service->title }}</a>
                                    </h5>
                                    <h5 class="price">${{ $popular_service->price }}</h5>
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
                    No Services
                @endforelse
            </div>
        </div>
    </div>
    @endif
    {{-- Similar Services End --}}

    {{-- FAQ Start --}}
    @if(count($category->serviceCategoryFaqs) > 0)
        <div class="singleCategoryDetailContent py-5" id="singleCategoryDetailContent">
            <div class="container">
                <div class="row">
                    @foreach($category->serviceCategoryFaqs->take(6) as $faq)
                        <div class="col-md-6">
                            <div class="py-3">
                                <div class="detailsContent">
                                    <h4>{{ $faq->question }}</h4>
                                    <p class="mb-0">{{ $faq->answer }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    {{-- FAQ End --}}
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
