@extends('guest.layouts.app')
{{--@section('title', 'Designwala')--}}

@push('styles')
    {{-- internal css --}}
@endpush

@section('content')
    {{-- banner section start --}}
    <div class="section sectionServiceBanner ptSm50 pbSm50 animate-bottom" id="sectionServiceBanner">
        <div class="container-xl container">
            <div class="row">
                <div class="col-lg-7 col-md-12 v-center">
                    <div class="sectionServiceBannerContent textsm-center">
                        <h1 class="font-medium d-none d-lg-block">{{ $siteCms['banner_section']->headline }}</h1>
                        <h1 class="font-medium d-lg-none d-md-block text-center">Stop wasting time on hassling,<br> let professionals do your job.</h1>
                        <p class="d-none d-lg-block">{{ $siteCms['banner_section']->tagline }}</p>

                        {{-- search component --}}
                        @livewire('guest.search.guest-search-component')

                    </div>
                </div>
                <div class="col-lg-5 col-md-12 v-center">
                    <div class="sectionServiceBannerImage">
                        <img src="{{ !is_null($siteCms['banner_section']->banner) ? Storage::disk('public')->url(config('image-location.images.site_cms.banner') . $siteCms['banner_section']->banner) : config('image-location.default.no_preview') }}" alt="banner image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- banner section end --}}

    {{-- why prodoers section start --}}
    <div class="section whydesignWala" id="whydesignWala">
        <div class="container">
            <h2 class="d-block d-md-none text-center">Why designwala?</h2>
            <div class="row bg-white whyDesignwalaPosition">
                <!----------- box one ------------->
                @foreach($siteCms['service_processes'] as $service_process)
                    <div class="col-lg-2 col-md-4 col-6 p-0 ">
                        <div class="whydesignwalaSingleService p_3">
                            <div class="text-center ptpb_32">
                                <img src="{{ asset(!is_null($service_process->image) ? Storage::disk('public')->url(config('image-location.images.site_cms.service_process') . $service_process->image) : config('image-location.default.no_preview')) }}" alt="service image" class="img-fluid ">
                            </div>
                            <div class="text-center py_3">
                                <p class="mb-0">{{ $service_process->title }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <section class="whydesignWala-sm d-sm-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="whydesignWalaCarousel" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="whydesignwalaSingleService p_3">
                                            <div class="text-center ptpb_32">
                                                <img src="{{ asset('_assets/_guest/img/servicepage/whydesignwalasection/reliable_and_quick.svg') }}" alt="service image" class="img-fluid ">
                                            </div>
                                            <div class="text-center py_3">
                                                <p class="mb-0">Reliable and Quick Communication</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">


                                    <div class="col-12">
                                        <div class="whydesignwalaSingleService p_3">
                                            <div class="text-center ptpb_32">
                                                <img src="{{ asset('_assets/_guest/img/servicepage/whydesignwalasection/human.svg') }}" alt="service image" class="img-fluid ">
                                            </div>
                                            <div class="text-center py_3">
                                                <p class="mb-0">Reliable and Quick Communication</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row ">
                                    <div class="col-12">
                                        <div class="whydesignwalaSingleService p_3">
                                            <div class="text-center ptpb_32">
                                                <img src="{{ asset('_assets/_guest/img/servicepage/whydesignwalasection/satisfactory_services.svg') }}" alt="service image" class="img-fluid ">
                                            </div>
                                            <div class="text-center py_3">
                                                <p class="mb-0">Satisfactory and Quick Communication</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row ">
                                    <div class="col-12">
                                        <div class="whydesignwalaSingleService p_3">
                                            <div class="text-center ptpb_32">
                                                <img src="{{ asset('_assets/_guest/img/servicepage/whydesignwalasection/modern_designs.svg') }}" alt="service image" class="img-fluid ">
                                            </div>
                                            <div class="text-center py_3">
                                                <p class="mb-0">Reliable and Quick Communication</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="whydesignwalaSingleService p_3">
                                            <div class="text-center ptpb_32">
                                                <img src="{{ asset('_assets/_guest/img/servicepage/whydesignwalasection/on_time_delivery.svg') }}" alt="service image" class="img-fluid ">
                                            </div>
                                            <div class="text-center py_3">
                                                <p class="mb-0">Reliable and Quick Communication</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="whydesignwalaSingleService p_3">
                                            <div class="text-center ptpb_32">
                                                <img src="{{ asset('_assets/_guest/img/servicepage/whydesignwalasection/unlimited_revisions.svg') }}" alt="service image" class="img-fluid ">
                                            </div>
                                            <div class="text-center py_3">
                                                <p class="mb-0">Reliable and Quick Communication</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- why prodoers section end --}}

    {{-- popular categories section start --}}
    <div class="section pb100 pt100 bgcustomLightgray ptSm50 pbSm50 sectionServicePopularCategories" id="sectionServicePopularCategories">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class=" font-medium populartext">Popular Categories</h1>
                </div>
            </div>

            <div class="row">
                @foreach($popular_categories->take(9) as $popular_category)
                    <div class="col-lg-4 col-md-6 col-12 text-center py_md_5 popularCetegoriesSmallpadding">
                        <div class="sectionServicePopularCategoriesSingleCategories  m-auto">
                            <div class="sectionServicePopularCategoriesSingleImage">
                                <img src="{{ showImage($popular_category, 'category_thumb') }}" alt="{{ showAltText($popular_category, 'category_thumb', $popular_category->title) }}" class="img-fluid">
                            </div>
                            <div class="sectionServicePopularCategoriesSingleContent">
                                <h3 class="pt-3"><a href="{{ route('guest.service_category.index', $popular_category->slug) }}" class="text-dark">{{ $popular_category->title }}</a></h3>
                                <p class="d-none d-md-block">{{ Str::limit($popular_category->short_desc, $limit = 20, $end = ' ...') }}</p>
                                <h4 class="">Starts at ${{ $popular_category->services->min('price') }}</h4>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </div>
    {{-- popular categories section end --}}

    {{-- how prodoers works section start --}}
    <section class="main_how_works">
        <div class="container">
            <div class="hw_h1">
                <h1>How Designwala Works ?</h1>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7">

                    <div class="inst_img position-relative mb-4 mb-lg-0">
                        <img src="{{ asset('_assets/_guest/img/servicepage/play-button-bg.jpg') }}" alt="designwala" class="img-fluid">
                        <div class="play_btn position-absolute trans-center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#videoModal">
                                <img src="{{ asset('_assets/_guest/img/servicepage/play-button.svg') }}" class="img-fluid border-rounded play_button" alt="designwala"></a>
                            </button>
                        </div>
                        <div class="load_css">
                            <div class="ball-scale-multiple">
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-5 col-xxl-4">
                    <div class="hwpt">
                        <!-- 1st -->
                        <div class="hw_wrapper">
                            <!-- <div class="row"> -->
                            <div class="col-lg-3 col-3 col_3">
                                <div class="hw_no hw_no_line">
                                    1
                                </div>
                            </div>
                            <div class="col-lg-9 col-9">
                                <div class="hw_text">
                                    <h2>Place Order</h2>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <!-- 2nd -->
                        <div class="hw_wrapper">
                            <!-- <div class="row"> -->
                            <div class="col-lg-3 col-3 col_3">
                                <div class="hw_no hw_no_line">
                                    2
                                </div>
                            </div>
                            <div class="col-lg-9 col-9">
                                <div class="hw_text">
                                    <h2>Send your content</h2>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                        <!-- 3rd -->
                        <div class="hw_wrapper">
                            <!-- <div class="row"> -->
                            <div class="col-lg-3 col-3 col_3">
                                <div class="hw_no">
                                    3
                                </div>
                            </div>
                            <div class="col-lg-9 col-9">
                                <div class="hw_text">
                                    <h2>Get your final delivery</h2>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- how work end -->

    <!--?Video Modal-->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <video width="100%" controls>
                        <source src="{{ asset('_assets/_guest/video/nature.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!--?Video Modal-->
    {{-- how prodoers works section end --}}

    {{-- testimonial section start --}}
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="why-choose-us">
                        <h2>What Our Clients Say’s</h2>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="testimonialImage">
                                            <img src="{{ asset('_assets/_guest/img/servicepage/client-one.jpg') }}" class="card-img-top img-fluid" alt="designwala">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="testimonial-content">
                                            <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                            <h6>Cak Dikin</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="testimonialImage">
                                            <img src="{{ asset('_assets/_guest/img/servicepage/client-two.jpg') }}" class="card-img-top img-fluid" alt="designwala">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="testimonial-content">
                                            <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                            <h6>Cak Dikin</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="testimonialImage">
                                            <img src="{{ asset('_assets/_guest/img/servicepage/client-one.jpg') }}" class="card-img-top img-fluid" alt="designwala">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="testimonial-content">
                                            <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                            <h6>Cak Dikin</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <div class="testimonialImage">
                                            <img src="{{ asset('_assets/_guest/img/servicepage/client-two.jpg') }}" class="card-img-top img-fluid" alt="designwala">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="testimonial-content">
                                            <p>Nullam et velit mollis, dictum eros a, vehicula turpis. Aenean feugiat congue faucibus. Nullam dapibus ex ex, vulputate gravida nisi mattis in. Duis maximus odio sed turpis vehicula auctor sit amet ut urna. Nam non libero ut ex fermentum consectetur et in dolor. Morbi tempor gravida diam nec lacinia. Suspendisse vehicula ultricies arcu.</p>
                                            <h6>Cak Dikin</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- testimonial section end --}}

    {{-- counter section start --}}
    <div class="section serviceCountSection bgcustomLightgray " id="serviceCountSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="text-center counter_wrapper">
                        <div class="counter_icon">
                            <img src="{{ asset('_assets/_guest/img/servicepage/homeservices/customer.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="counter_title">
                            <h1 class="font-weight-bold colorFive timer  count-number" data-to="1000" data-speed="1500"></h1>
                            <p class="mb-0">Total Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="text-center counter_wrapper">
                        <div class="counter_icon">
                            <img src="{{ asset('_assets/_guest/img/servicepage/homeservices/employee.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="counter_title">
                            <h1 class="font-weight-bold colorFive timer  count-number" data-to="1000" data-speed="1500"></h1>
                            <p class="mb-0">Total Designwalas </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="text-center counter_wrapper">
                        <div class="counter_icon">
                            <img src="{{ asset('_assets/_guest/img/servicepage/homeservices/order.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="counter_title">
                            <h1 class="font-weight-bold colorFive timer  count-number" data-to="1000" data-speed="1500"></h1>
                            <p class="mb-0"> Total Orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="text-center counter_wrapper">
                        <div class="counter_icon">
                            <img src="{{ asset('_assets/_guest/img/servicepage/homeservices/sales.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="counter_title">
                            <h1 class="font-weight-bold colorFive timer  count-number" data-to="1000" data-speed="1500">1000</h1>
                            <p class="mb-0">Total Transactions </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- counter section end --}}
@endsection

@push('scripts')
    <script src="{{ mix('_assets/plugins/counter/js/count.js') }}"></script>
@endpush
