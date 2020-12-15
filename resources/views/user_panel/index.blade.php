@extends('user_panel.layouts.app')
@section('title', 'Designwala')

@push('styles')
@endpush

@section('content')
    {{-- Banner Section Start --}}
    <div class="section    sectionServiceBanner ptSm50 pbSm50 animate-bottom" id="sectionServiceBanner" >
        <div class="container-xl container-fluid-lg">
            <div class="row">
                <div class="col-lg-7 col-md-12 v-center">
                    <div class="sectionServiceBannerContent textsm-center">
                        <h1 class="font-medium d-none d-lg-block">Stop wasting time on hassling, let professionals do your job.</h1>
                        <h1 class="font-medium d-lg-none d-md-block text-center">Stop wasting time on hassling,<br> let professionals do your job.</h1>
                        <p class="d-none d-lg-block">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat </p>
                        <p class="d-lg-none d-md-block text-center">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat </p>
                        <form action="" class="pt-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-0" placeholder="e.g. logo design " aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <!--   button with svg -->
                                    <button class="btn text-white rounded-0" type="button" id=""> <img src="{{ asset('_user_panel/img/servicepage/icon_search.svg') }}" class="img-fluid" alt=""> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 v-center">
                    <div class="sectionServiceBannerImage">
                        <img src="{{ asset('_user_panel/img/servicepage/main_image.svg') }}" alt="banner image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Banner Section End --}}

    {{-- Why Designwala Section Start --}}
    <div class="section whydesignWala" id="whydesignWala">
        <div class="container">
            <div class="row bg-white whyDesignwalaPosition">
                <!--               box one -->
                <div class="col-lg-2 col-md-6 p-0 ">
                    <div class="whydesignwalaSingleService p-3">
                        <div class="text-center pt-3 pb-2">
                            <img src="{{ asset('_user_panel/img/servicepage/whydesignwalasection/reliable_and_quick.svg') }}" alt="service image" class="img-fluid ">
                        </div>
                        <div class="text-center py-3">
                            <p class="mb-0">Reliable and Quick Communication</p>
                        </div>
                    </div>
                </div>
                <!--                box two -->
                <div class="col-lg-2 col-md-6 p-0 ">
                    <div class="whydesignwalaSingleService p-3">
                        <div class="text-center pt-3 pb-2">
                            <img src="{{ asset('_user_panel/img/servicepage/whydesignwalasection/human.svg') }}" alt="service image" class="img-fluid ">
                        </div>
                        <div class="text-center py-3">
                            <p class="mb-0">Reliable and Quick Communication</p>
                        </div>
                    </div>
                </div>
                <!--                box three -->
                <div class="col-lg-2 col-md-6 p-0 ">
                    <div class="whydesignwalaSingleService p-3">
                        <div class="text-center pt-3 pb-2">
                            <img src="{{ asset('_user_panel/img/servicepage/whydesignwalasection/satisfactory_services.svg') }}" alt="service image" class="img-fluid ">
                        </div>
                        <div class="text-center py-3">
                            <p class="mb-0">Satisfactory and Quick Communication</p>
                        </div>
                    </div>
                </div>
                <!--                box four -->
                <div class="col-lg-2 col-md-6 p-0 ">
                    <div class="whydesignwalaSingleService p-3">
                        <div class="text-center pt-3 pb-2">
                            <img src="{{ asset('_user_panel/img/servicepage/whydesignwalasection/modern_designs.svg') }}" alt="service image" class="img-fluid ">
                        </div>
                        <div class="text-center py-3">
                            <p class="mb-0">Reliable and Quick Communication</p>
                        </div>
                    </div>
                </div>
                <!--                box five -->
                <div class="col-lg-2 col-md-6 p-0 ">
                    <div class="whydesignwalaSingleService p-3">
                        <div class="text-center pt-3 pb-2">
                            <img src="{{ asset('_user_panel/img/servicepage/whydesignwalasection/on_time_delivery.svg') }}" alt="service image" class="img-fluid ">
                        </div>
                        <div class="text-center py-3">
                            <p class="mb-0">Reliable and Quick Communication</p>
                        </div>
                    </div>
                </div>
                <!--                box six -->
                <div class="col-lg-2 col-md-6 p-0 ">
                    <div class="whydesignwalaSingleService p-3">
                        <div class="text-center pt-3 pb-2">
                            <img src="{{ asset('_user_panel/img/servicepage/whydesignwalasection/unlimited_revisions.svg') }}" alt="service image" class="img-fluid ">
                        </div>
                        <div class="text-center py-3">
                            <p class="mb-0">Reliable and Quick Communication</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Why Designwala Section End --}}

    {{-- Popular Categories Section Start --}}
    <div class="section pb100 pt100 bgcustomLightgray ptSm50 pbSm50 sectionServicePopularCategories" id="sectionServicePopularCategories" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class=" font-medium populartext">Popular Categories</h1>
                </div>
            </div>
            <!--               popular categories items single-->
            <div class="row">
                <!--               col 1 -->
                <div class="col-lg-4 col-md-6 text-center py-5 popularCetegoriesSmallpadding">
                    <div class="sectionServicePopularCategoriesSingleCategories  m-auto">
                        <div class="sectionServicePopularCategoriesSingleImage">

                            <img src="{{ asset('_user_panel/img/servicepage/popularcategories/logo_branding.svg') }}" alt="categories image one" class="img-fluid">
                        </div>
                        <div class="sectionServicePopularCategoriesSingleContent">
                            <h3 class="pt-3"><a href="" class="text-dark">Logo and Branding</a></h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                            <h4 class="  ">Starts at $10</h4>
                        </div>
                    </div>
                </div>
                <!--                        col-2-->
                <div class="col-lg-4 col-md-6 text-center py-5 popularCetegoriesSmallpadding">
                    <div class="sectionServicePopularCategoriesSingleCategories  m-auto">
                        <div class="sectionServicePopularCategoriesSingleImage">

                            <img src="{{ asset('_user_panel/img/servicepage/popularcategories/print_media.svg') }}" alt="categories image one" class="img-fluid">
                        </div>
                        <div class="sectionServicePopularCategoriesSingleContent">
                            <h3 class="pt-3"><a href="" class="text-dark">Print Design</a></h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                            <h4 class="  ">Starts at $10</h4>
                        </div>
                    </div>
                </div>
                <!--                        col-3 -->
                <div class="col-lg-4 col-md-6 text-center py-5 popularCetegoriesSmallpadding">
                    <div class="sectionServicePopularCategoriesSingleCategories  m-auto">
                        <div class="sectionServicePopularCategoriesSingleImage">
                            <img src="{{ asset('_user_panel/img/servicepage/popularcategories/social_media.svg') }}" alt="categories image one" class="img-fluid">
                        </div>
                        <div class="sectionServicePopularCategoriesSingleContent">
                            <h3 class="pt-3"><a href="" class="text-dark">Social Media Design</a></h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                            <h4 class="  ">Starts at $10</h4>
                        </div>
                    </div>
                </div>
                <!--                        col-4 -->
                <div class="col-lg-4 col-md-6 text-center py-5 popularCetegoriesSmallpadding">
                    <div class="sectionServicePopularCategoriesSingleCategories  m-auto">
                        <div class="sectionServicePopularCategoriesSingleImage">
                            <img src="{{ asset('_user_panel/img/servicepage/popularcategories/photo_editing.svg') }}" alt="categories image one" class="img-fluid">
                        </div>
                        <div class="sectionServicePopularCategoriesSingleContent">
                            <h3 class="pt-3"><a href="" class="text-dark">Product Photo Editing</a></h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                            <h4 class="  ">Starts at $10</h4>
                        </div>
                    </div>
                </div>
                <!--                        col-5 -->
                <div class="col-lg-4 col-md-6 text-center py-5 popularCetegoriesSmallpadding">
                    <div class="sectionServicePopularCategoriesSingleCategories  m-auto">
                        <div class="sectionServicePopularCategoriesSingleImage">
                            <img src="{{ asset('_user_panel/img/servicepage/popularcategories/web_design.svg') }}" alt="categories image one" class="img-fluid">
                        </div>
                        <div class="sectionServicePopularCategoriesSingleContent">
                            <h3 class="pt-3"><a href="" class="text-dark">Web Design</a></h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                            <h4 class="  ">Starts at $10</h4>
                        </div>
                    </div>
                </div>
                <!--                        col-6 -->
                <div class="col-lg-4 col-md-6 text-center py-5 popularCetegoriesSmallpadding">
                    <div class="sectionServicePopularCategoriesSingleCategories  m-auto">
                        <div class="sectionServicePopularCategoriesSingleImage">
                            <img src="{{ asset('_user_panel/img/servicepage/popularcategories/web_development.svg') }}" alt="categories image one" class="img-fluid"> </div>
                        <div class="sectionServicePopularCategoriesSingleContent">
                            <h3 class="pt-3"><a href="" class="text-dark">Web Development</a></h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                            <h4 class="  ">Starts at $10</h4>
                        </div>
                    </div>
                </div>
                <!--                        col-7 -->
                <div class="col-lg-4 col-md-6 text-center py-5 popularCetegoriesSmallpadding">
                    <div class="sectionServicePopularCategoriesSingleCategories  m-auto">
                        <div class="sectionServicePopularCategoriesSingleImage">
                            <img src="{{ asset('_user_panel/img/servicepage/popularcategories/wordpress.svg') }}" alt="categories image one" class="img-fluid">
                        </div>
                        <div class="sectionServicePopularCategoriesSingleContent">
                            <h3 class="pt-3"><a href="" class="text-dark">Wordpress</a></h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                            <h4 class="  ">Starts at $10</h4>
                        </div>
                    </div>
                </div>
                <!--                        col-8 -->
                <div class="col-lg-4 col-md-6 text-center py-5 popularCetegoriesSmallpadding">
                    <div class="sectionServicePopularCategoriesSingleCategories  m-auto">
                        <div class="sectionServicePopularCategoriesSingleImage">
                           <img src="{{ asset('_user_panel/img/servicepage/popularcategories/digital_marketing.svg') }}" alt="categories image one" class="img-fluid">
                        </div>
                        <div class="sectionServicePopularCategoriesSingleContent">
                            <h3 class="pt-3"><a href="" class="text-dark">Digital Marketing</a></h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                            <h4 class="  ">Starts at $10</h4>
                        </div>
                    </div>
                </div>
                <!--                        col-8 -->
                <div class="col-lg-4 col-md-12 text-center py-5 popularCetegoriesSmallpadding">
                    <div class="sectionServicePopularCategoriesSingleCategories  m-auto">
                        <div class="sectionServicePopularCategoriesSingleImage">
                            <img src="{{ asset('_user_panel/img/servicepage/popularcategories/seo.svg') }}" alt="categories image one" class="img-fluid">
                        </div>
                        <div class="sectionServicePopularCategoriesSingleContent">
                            <h3 class="pt-3"><a href="" class="text-dark">SEO</a></h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed is diam nonumy</p>
                            <h4 class="  ">Starts at $10</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Popular Categories Section End --}}

    {{-- How designwala works Section Start --}}
    <div class="section  sectionServiceHowdesignwalaWorks ptSm50 pbSm50" id="sectionServiceHowdesignwalaWorks">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="pb-5 font-medium">How Designwala Works?</h1>
                </div>
            </div>
            <div class="row justify-content-center py-4">
                <div class="col-lg-6 col-md-12">
                    <div class="card howdesignwalaworksCard mb-3" style="position: relative;">
                        <div class="PointNo"> <span>1</span> </div>
                        <div class="row no-gutters">
                            <div class="col-md-8 py-4">
                                <div class="card-body w-90 wSm100 textsm-center">
                                    <h5 class="card-title colorgreen">Place Order</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                            <div class="col-md-4 v-center">
                                <div class="howDesignwalaImg">
                                    <img src="{{ asset('_user_panel/img/servicepage/howdesignwalaworks/place_order.svg') }}" class="card-img img-fluid" alt="howdesignwalaworksCardimg"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--           row end -->
            <div class="row justify-content-center py-4">
                <div class="col-lg-6 col-md-12">
                    <div class="card howdesignwalaworksCard mb-3" style="position: relative;">
                        <div class="PointNo"> <span>2</span> </div>
                        <div class="row no-gutters">
                            <div class="col-md-8 py-4">
                                <div class="card-body w-90 wSm100 textsm-center">
                                    <h5 class="card-title colorgreen">Send your content</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                            <div class="col-md-4 v-center">
                                <div class="howDesignwalaImg"> <img src="{{ asset('_user_panel/img/servicepage/howdesignwalaworks/send_your_content.svg') }}" class="card-img img-fluid" alt="howdesignwalaworksCardimg"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--           row end -->
            <div class="row justify-content-center py-4">
                <div class="col-lg-6 col-md-12">
                    <div class="card howdesignwalaworksCard mb-3" style="position: relative;">
                        <div class="PointNo"> <span>3</span> </div>
                        <div class="row no-gutters">
                            <div class="col-md-8 py-4">
                                <div class="card-body w-90 wSm100 textsm-center">
                                    <h5 class="card-title colorgreen">Get your final delivery</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                            <div class="col-md-4 v-center">
                                <div class="howDesignwalaImg"> <img src="{{ asset('_user_panel/img/servicepage/howdesignwalaworks/get_your_final_delivery.svg') }}" class="card-img img-fluid" alt="howdesignwalaworksCardimg"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--           row end -->
        </div>
    </div>
    {{-- How designwala works Section End --}}

    {{-- Designwala Clip Section Start --}}
    <div class="section sectionServiceDesignwalainaClip bgcustomLightgray  ptSm50 pbSm50" id="sectionServiceDesignwalainaClip">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pb-5">
                    <h1 class="font-medium">Designwala In a clip</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 text-center">
                    <div class="video-wrapper  m-auto">
                        <video src="{{ asset('_user_panel/video/Sticker.mp4') }}" poster="{{ asset('_user_panel/img/servicepage/videobanner.jpg') }}"></video>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- Designwala Clip Section End --}}

    {{-- Blog Section Start --}}
    <div class="section  ptSm50 pbSm50 sectionServiceDesignwalaLatestNews" id="sectionServiceDesignwalaLatestNews">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pb-5">
                    <h1 class="font-medium">Latest News</h1>
                    <p>Reference site about Lorem Ipsum, giving information </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 pb-4">
                    <div class="card" style=""> <img src="https://picsum.photos/400/280" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Blog Title</h3>
                            <h5 class="pb-3 font-weight-normal">Name | Date</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et.</p>
                            <a href="#" class="btn btn-link colorOne p-0">see more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 pb-4">
                    <div class="card" style="">
                        <img src="https://picsum.photos/400/280" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Blog Title</h3>
                            <h5 class="pb-3 font-weight-normal">Name | Date</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et.</p>
                            <a href="#" class="btn btn-link colorOne p-0">see more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 pb-4">
                    <div class="card" style="">
                        <img src="https://picsum.photos/400/280" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Blog Title</h3>
                            <h5 class="pb-3 font-weight-normal">Name | Date</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et.</p>
                            <a href="#" class="btn btn-link colorOne p-0">see more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Blog Section End --}}

    {{-- Counter Section Start --}}
    <div class="section serviceCountSection bgcustomLightgray " id="serviceCountSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="text-center">
                        <div class="">
                            <!--                          <img src="img/service/Total%20Customers.png" alt="" class="img-fluid">-->
                            <img src="{{ asset('_user_panel/img/servicepage/homeservices/customer.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="py-3">
                            <h1 class="font-weight-bold colorFive timer  count-number" data-to="1000" data-speed="1500"></h1>
                            <p class="mb-0">Total Customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="text-center">
                        <div class="">
                            <!--                        <img src="img/service/Total%20Services.png" alt="" class="img-fluid">-->
                            <img src="{{ asset('_user_panel/img/servicepage/homeservices/employee.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="py-3">
                            <h1 class="font-weight-bold colorFive timer  count-number" data-to="1000" data-speed="1500"></h1>
                            <p class="mb-0">Total Customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="text-center">
                        <div class="">
                            <!--<img src="img/service/Services%20Sold.png" alt="" class="img-fluid">-->
                            <img src="{{ asset('_user_panel/img/servicepage/homeservices/order.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="py-3">
                            <h1 class="font-weight-bold colorFive timer  count-number" data-to="1000" data-speed="1500"></h1>
                            <p class="mb-0"> Total Customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="text-center">
                        <div class="">
                            <!--<img src="img/service/Services%20Sold.png" alt="" class="img-fluid">-->
                            <img src="{{ asset('_user_panel/img/servicepage/homeservices/sales.svg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="py-3">
                            <h1 class="font-weight-bold colorFive timer  count-number" data-to="1000" data-speed="1500">1000</h1>
                            <p class="mb-0">Total Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Counter Section End --}}

    {{-- Newsletter Section Start --}}
    <div class="section py50 ptSm50 pbSm50 sectionServiceDesignwalaNewsletter" id="sectionServiceDesignwalaNewsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="">Stay Updated With Our Newsletter</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="">
                        <form action="" class="pt-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-0" placeholder="Enter your email" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary px-3 text-white rounded-0" type="button" id="">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Newsletter Section End --}}
@endsection

@push('scripts')
    {{-- Video play Button Render --}}
    <script>
        videoMethods.renderVideoPlayButton();
    </script>
@endpush
