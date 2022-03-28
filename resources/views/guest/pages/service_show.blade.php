@extends('guest.layouts.app')
@section('title', 'service_name')

@push('styles')
    {{-- Internal Styles --}}
    {{-- FancyBox --}}
    <link rel="stylesheet" href="{{ mix('_assets/plugins/fancybox/css/fancybox.css') }}">
    {{-- Slick --}}
    <link rel="stylesheet" href="{{ mix('_assets/plugins/slick/css/slick.css') }}">
    {{-- OwlCarousel --}}
    <link rel="stylesheet" href="{{ mix('_assets/plugins/owl-carousel/css/owl-carousel.css') }}">
@endpush

@section('content')
    {{-- Service Image & Features Start --}}
    <div class="singleCategoryItemSectionOne bgcustomLightgray pt-3" id="singleCategoryItemSectionOne">
        <div class="container">

            <!-- Breadcrumb -->
            {{--<nav class="back-section">
                <ul class=" list-unstyled d-flex">
                    <li class="social-banner-a home"><a href="index.php"> <span class="pd-10 home"><svg xmlns="http://www.w3.org/2000/svg" width="15.316" height="17.209" viewBox="0 0 18.316 17.209">
                    <path id="Icon_ionic-md-home" data-name="Icon ionic-md-home" d="M10.094,20.625V15.25h4.031v5.375h4.1V12.562h2.62L12.109,4.5,3.375,12.562H6v8.062Z" transform="translate(-2.951 -4.041)" fill="none" stroke="#212529" stroke-linejoin="bevel" stroke-width="1.25"/></svg></span> <span>Home</span></a></li>
                    <li class="social-banner-a right-arrow"><a href="#"> <span class="pd-10"><svg xmlns="http://www.w3.org/2000/svg" width="8.77" height="20.58" viewBox="0 0 11.77 20.58">
                <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M14.8,16.481,22.588,8.7A1.471,1.471,0,0,0,20.5,6.623l-8.826,8.816a1.467,1.467,0,0,0-.043,2.028L20.5,26.345a1.471,1.471,0,0,0,2.084-2.077Z" transform="translate(23.021 26.774) rotate(180)" fill="#212529"/>
                </svg>

                </span>Logo Design</a></li>
                    <li class="social-banner-a"><a href="#"><span class="pd-10"><svg xmlns="http://www.w3.org/2000/svg" width="8.77" height="20.58" viewBox="0 0 11.77 20.58">
                <path id="Icon_ionic-ios-arrow-back" data-name="Icon ionic-ios-arrow-back" d="M14.8,16.481,22.588,8.7A1.471,1.471,0,0,0,20.5,6.623l-8.826,8.816a1.467,1.467,0,0,0-.043,2.028L20.5,26.345a1.471,1.471,0,0,0,2.084-2.077Z" transform="translate(23.021 26.774) rotate(180)" fill="#212529"/>
                </svg>

                </span> Single Service</a></li>
                </ul>
            </nav>--}}


            <div class="row banner-wraper">
                <div class="col-lg-7 col-xl-8 banner-text">
                    <h2>{{ $service->title }}</h2>
                </div>
                <div class="col-lg-5 col-xl-4 sale-share">
                    <div class="sale-box">
                        <a href=""><span class="sale">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25.069" height="24.02" viewBox="0 0 25.069 24.02">
                                    <g id="Icon_feather-shopping-cart" data-name="Icon feather-shopping-cart" transform="translate(-0.5 -0.5)">
                                        <path id="Path_2236" data-name="Path 2236" d="M14.1,31.049A1.049,1.049,0,1,1,13.049,30,1.049,1.049,0,0,1,14.1,31.049Z" transform="translate(-3.16 -8.577)" fill="none" stroke="#212529" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Path_2237" data-name="Path 2237" d="M30.6,31.049A1.049,1.049,0,1,1,29.549,30,1.049,1.049,0,0,1,30.6,31.049Z" transform="translate(-8.126 -8.577)" fill="none" stroke="#212529" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <path id="Path_2238" data-name="Path 2238" d="M1.5,1.5H5.694L8.5,15.54a2.1,2.1,0,0,0,2.1,1.688H20.794a2.1,2.1,0,0,0,2.1-1.688l1.678-8.8H6.743" fill="none" stroke="#212529" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                </svg>
                            </span>
                            <span>312 sale</span>
                        </a>
                    </div>

                    <div>
                        <a style="cursor: pointer" onclick="window.open('{{ $service->getShareUrl('facebook') }}', 'services', params)">
                            <span class="social">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.645" height="18.008" viewBox="0 0 9.645 18.008">
                                    <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M10.622,10.129l.5-3.259H8V4.756A1.63,1.63,0,0,1,9.833,2.995h1.422V.22A17.337,17.337,0,0,0,8.731,0C6.155,0,4.472,1.561,4.472,4.387V6.87H1.609v3.259H4.472v7.878H8V10.129Z" transform="translate(-1.609)" fill="#212529"/>
                                </svg>
                            </span>
                        </a>

                        <a style="cursor: pointer" onclick="window.open('{{ $service->getShareUrl('linkedin') }}', 'services', params)">
                            <span class="social">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.16" height="15.16" viewBox="0 0 15.16 15.16">
                                    <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in" d="M3.393,15.161H.25V5.039H3.393ZM1.82,3.658a1.829,1.829,0,1,1,1.82-1.838A1.836,1.836,0,0,1,1.82,3.658Zm13.337,11.5H12.021V10.234c0-1.174-.024-2.68-1.634-2.68-1.634,0-1.885,1.276-1.885,2.6v5.012H5.362V5.039H8.377V6.42h.044a3.3,3.3,0,0,1,2.974-1.634c3.181,0,3.766,2.095,3.766,4.815v5.56Z" transform="translate(0 -0.001)" fill="#212529"/>
                                </svg>
                            </span>
                        </a>

                        <a style="cursor: pointer" onclick="window.open('{{ $service->getShareUrl('twitter') }}', 'services', params)">
                            <span class="social">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.134" height="13.104"  viewBox="0 0 16.134 13.104">
                                    <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter" d="M14.476,6.646c.01.143.01.287.01.43a9.344,9.344,0,0,1-9.408,9.408A9.344,9.344,0,0,1,0,15a6.84,6.84,0,0,0,.8.041A6.622,6.622,0,0,0,4.9,13.628a3.313,3.313,0,0,1-3.092-2.293,4.17,4.17,0,0,0,.625.051,3.5,3.5,0,0,0,.87-.113A3.307,3.307,0,0,1,.655,8.029V7.988a3.33,3.33,0,0,0,1.495.42A3.312,3.312,0,0,1,1.126,3.985a9.4,9.4,0,0,0,6.818,3.46,3.733,3.733,0,0,1-.082-.758,3.31,3.31,0,0,1,5.723-2.262,6.51,6.51,0,0,0,2.1-.8A3.3,3.3,0,0,1,14.23,5.449a6.629,6.629,0,0,0,1.9-.512A7.108,7.108,0,0,1,14.476,6.646Z" transform="translate(0 -3.381)" fill="#212529"/>
                                </svg>
                            </span>
                        </a>

                        <input id="copy-url" value="{{ url()->current() }}" style="display: none" aria-label="Copy Url">

                        <button id="copy-clipboard-mobile" class="copy-link-sm d-sm-none" >
                            <img src="{{ asset('_assets/_guest/img/singlecategoryitem/copy.svg') }}" id="copy-url-sm" class="img-fluid d-sm-none" alt="designwala" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Copied">
                        </button>

                        <button id="copy-url-lg" class="copy-link" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Copied">Copy Link</button>

                    </div>
                </div>
            </div>
            <div class=" order-section-wraper">
                <div class="row bgcustomLightgray">
                    <div class="col-lg-7 col-xl-8 col-md-12 ">

                        <div id="serviceImageCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @forelse($service->getMedia('service') as $media)
                                    <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}" data-fancybox="gallery" href="{{ showImage($media, 'service', 'multiple') }}" style="background:url({{ showImage($media, 'service', 'multiple') }});">

                                    </div>
                                @empty
                                    <div class="carousel-item active" data-fancybox="gallery" href="{{ asset(config('static_content._default.image.no_preview')) }}" style="background:url({{ asset(config('static_content._default.image.no_preview')) }});">

                                    </div>
                                    {{--<div class="carousel-item active">
                                        <div data-fancybox="gallery" href="{{ asset(config('static_content._default.image.no_preview')) }}" style='background:url({{ asset('_assets/_guest/img/notfoundpage/notfound.svg') }});'>
                                            <img src="{{ asset(config('static_content._default.image.no_preview')) }}" alt="{{ config('static_content._default.image.alt') }}" class="img-fluid">
                                        </div>
                                    </div>--}}
                                @endforelse
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#serviceImageCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#serviceImageCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>

                    </div>
                    <!-- carousel  end-->
                    <div class="col-lg-5 col-xl-4  col-md-12">
                        <div class="bg-white rightSide">

                            {{--<div class="d-flex justify-content-between align-items-center d-sm-none">
                                <div class="service-price">
                                    <h2 class="m-top">$50</h2>
                                </div>
                                <div class="review-text">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12.667"  viewBox="0 0 28.906 27.667">
                                        <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                    </svg>
                                </span>
                                    <span class="review">
                                    4.9  (15 Review)
                                </span>
                                </div>
                            </div>--}}

                            {{--<div class="starIcons ">

                                <div class="review-icon">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12.667"  viewBox="0 0 28.906 27.667">
                                        <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                    </svg>
                                </span>
                                    <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 28.906 27.667">
                                        <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                    </svg>
                                </span>
                                    <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 28.906 27.667">
                                        <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                    </svg>
                                </span>
                                    <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 28.906 27.667">
                                        <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                    </svg>
                                </span>
                                    <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 28.906 27.667">
                                        <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                    </svg>
                                </span>
                                </div>

                                <div class="review-text">
                                <span class="review">
                                    4.9  (15 Review)
                                </span>
                                </div>
                            </div>--}}

                            <div class="row pricepadding">
                                <div class="col-md-12">
                                    <h2 class="m-top">${{ $service->price }}</h2>
                                </div>
                            </div>
                            <div class="requirement">
                                <h4>Features</h4>
                                <p><span ><svg xmlns="http://www.w3.org/2000/svg" width="33.257" height="22.727" viewBox="0 0 33.257 22.727">
                                            <g id="Group_602" data-name="Group 602" transform="translate(-1502.204 -600.791)">
                                                <path id="Path_2215" data-name="Path 2215" d="M1536.148,629.515a3.79,3.79,0,1,1,3.79-3.79A3.8,3.8,0,0,1,1536.148,629.515Zm0-6.491a2.7,2.7,0,1,0,2.7,2.7A2.7,2.7,0,0,0,1536.148,623.024Z" transform="translate(-8.553 -5.997)" fill="#212529"/>
                                                <path id="Path_2216" data-name="Path 2216" d="M1515.508,629.515a3.79,3.79,0,1,1,3.791-3.79A3.795,3.795,0,0,1,1515.508,629.515Zm0-6.491a2.7,2.7,0,1,0,2.7,2.7A2.7,2.7,0,0,0,1515.508,623.024Z" transform="translate(-2.698 -5.997)" fill="#212529"/>
                                                <path id="Path_2217" data-name="Path 2217" d="M1538.137,605.2a.532.532,0,0,0-.48-.3h-4.493v-1.09h5.161a.544.544,0,0,1,.487.3l3.31,6.558-1.281-.094Z" transform="translate(-8.781 -0.857)" fill="#212529"/>
                                                <path id="Path_2218" data-name="Path 2218" d="M1507.027,627.6a.544.544,0,0,1,0-1.089h3.751a.544.544,0,1,1,0,1.089Z" transform="translate(-1.214 -7.296)" fill="#212529"/>
                                                <path id="Path_2219" data-name="Path 2219" d="M1532.055,620.308a.544.544,0,1,1,0-1.089h2.993a.538.538,0,0,0,.537-.537V613.1a.544.544,0,0,0-.113-.33l-1.575-2.029a.534.534,0,0,0-.424-.208h-8.414a.545.545,0,0,1-.544-.544v-7.573a.538.538,0,0,0-.537-.537h-16.95a.544.544,0,0,1,0-1.089h18.032a.544.544,0,0,1,.544.544v7.573a.539.539,0,0,0,.537.537H1534a.544.544,0,0,1,.431.211l2.127,2.74a.551.551,0,0,1,.114.335v7.033a.545.545,0,0,1-.544.544Z" transform="translate(-1.214)" fill="#212529"/>
                                                <path id="Path_2220" data-name="Path 2220" d="M1505.215,619.953a.545.545,0,0,1,0-1.09h4.977a.545.545,0,0,1,0,1.09Z" transform="translate(-0.7 -5.126)" fill="#212529"/>
                                                <path id="Path_2221" data-name="Path 2221" d="M1521.955,627.6c-.44,0-.8-.245-.8-.545s.356-.544.8-.544h7.272c.439,0,.8.244.8.544s-.358.545-.8.545Z" transform="translate(-5.376 -7.296)" fill="#212529"/>
                                                <path id="Path_2222" data-name="Path 2222" d="M1502.749,614.013a.545.545,0,0,1,0-1.09h9.231a.545.545,0,1,1,0,1.09Z" transform="translate(0 -3.441)" fill="#212529"/>
                                                <path id="Path_2223" data-name="Path 2223" d="M1505.215,608.072a.544.544,0,0,1,0-1.089h9.232a.544.544,0,1,1,0,1.089Z" transform="translate(-0.7 -1.756)" fill="#212529"/>
                                            </g>
                                        </svg>

                                    </span> <span class="requirement-text1">{{ $service->delivery_time }} Day delivery</span></p>
                                <p>
                                    <span >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="34.771" height="31.058" viewBox="0 0 34.771 31.058">
                                            <g id="Group_603" data-name="Group 603" transform="translate(-1547.486 -575.464)">
                                                <path id="Path_2224" data-name="Path 2224" d="M1559.8,601.468a.509.509,0,1,0,0-1.019h-6.031a.509.509,0,0,0,0,1.019Zm0,0" transform="translate(-1.421 -6.146)" fill="#212529"/>
                                                <path id="Path_2225" data-name="Path 2225" d="M1582.257,581.374a3.423,3.423,0,0,0-1.009-2.435l-2.477-2.477a3.463,3.463,0,0,0-.469-.393.509.509,0,1,0-.582.836,2.449,2.449,0,0,1,.331.277l2.476,2.477a2.424,2.424,0,0,1,0,3.43l-.893.894-5.907-5.907.893-.893a2.427,2.427,0,0,1,1.507-.7.509.509,0,0,0-.087-1.015,3.448,3.448,0,0,0-2.14,1l-.934.934a2.3,2.3,0,0,0-3.179,3.18l-3.982,3.982a4.215,4.215,0,0,0-.8-.077h-13.362a4.165,4.165,0,0,0-4.16,4.16v9.427a4.152,4.152,0,0,0,1.075,2.791.509.509,0,1,0,.755-.683,3.135,3.135,0,0,1-.812-2.107V588.64a3.144,3.144,0,0,1,3.141-3.141h13.217l-1.545,1.544a5.064,5.064,0,0,0-1.04,1.507.51.51,0,0,0-.207-.044h-9.72a.509.509,0,0,0,0,1.019h9.6c-.023.1-.043.2-.06.3l-.259,1.616h-9.285a.509.509,0,0,0,0,1.019h9.122l-.3,1.886a1.911,1.911,0,0,0,1.878,2.213,1.97,1.97,0,0,0,.31-.025l4.521-.724c.09-.014.179-.032.268-.051v2.305a3.144,3.144,0,0,1-3.14,3.141h-5.293a.511.511,0,0,0-.36.149l-3.814,3.814a1.119,1.119,0,0,1-1.909-.791v-2.662a.51.51,0,0,0-.51-.51h-1.477a3.119,3.119,0,0,1-.882-.125.509.509,0,1,0-.286.977,4.135,4.135,0,0,0,1.167.167h.968v2.154a2.1,2.1,0,0,0,1.319,1.974,2.174,2.174,0,0,0,.832.168,2.106,2.106,0,0,0,1.5-.631l3.665-3.665h5.082a4.164,4.164,0,0,0,4.159-4.159v-2.639a5.07,5.07,0,0,0,1.5-1.037l6.468-6.469a2.3,2.3,0,0,0,3.179-3.179l.933-.934a3.422,3.422,0,0,0,1.01-2.436Zm-11.911,11.568a2.464,2.464,0,0,0-1.371-.7l6.2-6.2,1.2,1.2-5.871,5.871c-.05-.059-.1-.116-.157-.171Zm.121-11.607,1.2,1.2-6.2,6.2a2.473,2.473,0,0,0-.7-1.373q-.082-.083-.172-.156Zm1.918,1.918,2.07,2.07-6.2,6.2a2.479,2.479,0,0,0-2.068-2.07Zm-9.187,12.277a.891.891,0,0,1-1.021-1.022l.239-1.49,2.273,2.273Zm4.52-.724-1.788.286-3.315-3.316.286-1.788a4.026,4.026,0,0,1,.973-2.051,1.424,1.424,0,0,1,.172.145,1.464,1.464,0,0,1,0,2.069.509.509,0,0,0,.72.721,1.463,1.463,0,0,1,2.069,2.069.509.509,0,0,0,.721.72,1.464,1.464,0,0,1,2.069,0,1.509,1.509,0,0,1,.145.172,4.022,4.022,0,0,1-2.051.973Zm11.554-7.925a1.288,1.288,0,0,1-1.819,0l-6.627-6.627h0a1.287,1.287,0,1,1,1.82-1.819l6.627,6.628a1.288,1.288,0,0,1,0,1.82Zm0,0" fill="#212529"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="requirement-text2">{{ $service->revision_limit }} Revisions</span>
                                </p>

                                <p>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31.887" height="32" viewBox="0 0 31.887 32">
                                            <g id="Group_604" data-name="Group 604" transform="translate(-1215.681 -615.211)">
                                                <path id="Path_2226" data-name="Path 2226" d="M1236.239,619.278a.63.63,0,0,0,.63-.63v-2.807a.629.629,0,1,0-1.259,0v2.807a.629.629,0,0,0,.629.63Zm0,0" transform="translate(-4.67 0)" fill="#212529"/>
                                                <path id="Path_2227" data-name="Path 2227" d="M1246.955,638.406l-1.113-1.109a2.106,2.106,0,0,0-2.494-.355l-2.1-2.093.1-.1a2.185,2.185,0,0,0,0-3.085,2.156,2.156,0,0,0-1.1-.592,2.214,2.214,0,0,0,.086-.613,2.179,2.179,0,0,0-1.734-2.135,2.2,2.2,0,0,0,.087-.612,2.177,2.177,0,0,0-1.734-2.134,2.178,2.178,0,0,0-2.328-2.78l-4.152-.786a2.246,2.246,0,0,0-1.924.256,1.092,1.092,0,0,0-.095.1,2.19,2.19,0,0,0-2.3.505,2.165,2.165,0,0,0-.637,1.543,2.21,2.21,0,0,0,.086.613,2.179,2.179,0,0,0-1.734,2.132,2.221,2.221,0,0,0,.087.614,3.78,3.78,0,0,1-2.191,3.89,2.185,2.185,0,0,0,0,3.086l.1.1-2.1,2.092a2.1,2.1,0,0,0-2.381.413l-1.113,1.109a2.1,2.1,0,0,0,0,2.969l1.389,1.387a.629.629,0,1,0,.889-.891l-1.388-1.387a.845.845,0,0,1,0-1.188l1.113-1.109a.843.843,0,0,1,1.027-.126.68.68,0,0,0,.079.1.658.658,0,0,0,.181.126l6.381,6.371a.621.621,0,0,0,.3.307.841.841,0,0,1-.035,1.149l-1.111,1.11a.846.846,0,0,1-1.191,0l-1.388-1.389a.63.63,0,0,0-.891.891l1.39,1.39a2.107,2.107,0,0,0,2.969,0l1.112-1.111a2.1,2.1,0,0,0,.295-2.6l2.358-2.356.008-.007c.27-.279,1.022-.227,1.75-.177a9.04,9.04,0,0,0,1.656.011l2.583,2.58a2.1,2.1,0,0,0,.357,2.492l1.113,1.111a2.1,2.1,0,0,0,2.968,0l6.746-6.738a2.1,2.1,0,0,0,0-2.97Zm-16.7-15.159,2.73.517-1.635,1.634a3.979,3.979,0,0,1-.979-.712,2.9,2.9,0,0,1-.927-1.431h0a.447.447,0,0,1,0-.062,2.135,2.135,0,0,1,.812.055Zm-3.191.513a.928.928,0,0,1,1.175-.111,4.508,4.508,0,0,0,1.263,1.946,4.664,4.664,0,0,0,1.813,1.123.924.924,0,0,1-1.412,1.18h0l-2.839-2.833a.928.928,0,0,1,0-1.3Zm-1.645,2.747a.928.928,0,0,1,1.308,0l2.286,2.281a.925.925,0,0,1-1.31,1.307l-1.734-1.733-.008-.008-.543-.542a.924.924,0,0,1,0-1.305Zm-1.648,2.746a.933.933,0,0,1,1.3,0l1.739,1.739a.925.925,0,0,1,0,1.3.933.933,0,0,1-1.309,0l-.631-.63h0l-1.1-1.1a.926.926,0,0,1,0-1.306Zm-1.1,3.3a.932.932,0,0,1,1.31,0l.632.631a.924.924,0,0,1-1.31,1.3l-.079-.079,0,0,0,0-.546-.544a.924.924,0,0,1,0-1.3Zm12.827,7.153a.63.63,0,0,0-.891,0l-.56.559c-.532.532-1.5.465-2.429.4-1.012-.07-2.06-.143-2.737.553l-2.318,2.315-5.8-5.789,2.052-2.047a2.184,2.184,0,0,0,3.323-1.862v-.016h.016a2.176,2.176,0,0,0,2.182-2.179v-.016h.016a2.175,2.175,0,0,0,2.182-2.2h.017a2.184,2.184,0,0,0,1.863-3.319l1.8-1.8a.92.92,0,0,1,.473-.252l.055-.008a.922.922,0,0,1,.784,1.565l-.548.545-.005.005-.631.63a.629.629,0,1,0,.89.891l.55-.549h0l.083-.083a.927.927,0,0,1,1.306,0,.923.923,0,0,1,0,1.305l-.55.551h0l-.631.628a.629.629,0,0,0,.888.892l.634-.631a.924.924,0,1,1,1.307,1.305l-1.1,1.1a.629.629,0,1,0,.89.89l.538-.538.01-.008a.928.928,0,0,1,1.308,0,.925.925,0,0,1,0,1.3l-.548.547h0l-.869.867a.629.629,0,0,0,.89.89l.425-.424,2.036,2.034-5.8,5.79-2.077-2.075a2.448,2.448,0,0,0,.413-.332l.56-.559a.63.63,0,0,0,0-.891Zm10.567.779-6.746,6.739a.846.846,0,0,1-1.189,0l-1.113-1.111a.843.843,0,0,1,0-1.187l6.746-6.738a.846.846,0,0,1,1.19,0l1.112,1.109a.844.844,0,0,1,0,1.188Zm0,0" transform="translate(0 -1.571)" fill="#212529"/>
                                                <path id="Path_2228" data-name="Path 2228" d="M1224.757,618.8a.629.629,0,1,0,.889-.891l-2.294-2.289a.629.629,0,0,0-.889.891Zm0,0" transform="translate(-1.546 -0.052)" fill="#212529"/>
                                                <path id="Path_2229" data-name="Path 2229" d="M1246.574,618.982a.626.626,0,0,0,.444-.184l2.292-2.289a.629.629,0,0,0-.89-.891l-2.292,2.289a.629.629,0,0,0,.445,1.074Zm0,0" transform="translate(-7.091 -0.053)" fill="#212529"/>
                                                <path id="Path_2230" data-name="Path 2230" d="M1220.68,650.515a.63.63,0,0,0,.008.89l0,0a.629.629,0,1,0-.01-.892Zm0,0" transform="translate(-1.129 -8.228)" fill="#212529"/>
                                                <path id="Path_2231" data-name="Path 2231" d="M1243.38,643.58a.629.629,0,1,0-.282-1.191l0,0a.629.629,0,0,0,.286,1.19Zm0,0" transform="translate(-6.343 -6.352)" fill="#212529"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="requirement-text3">Support</span>
                                </p>



                                <p><span ><svg xmlns="http://www.w3.org/2000/svg" width="31.194" height="32.456" viewBox="0 0 31.194 32.456">
                                            <g id="Group_607" data-name="Group 607" transform="translate(-1207 -659)">
                                                <path id="Path_2234" data-name="Path 2234" d="M2020.577,616.848a7.552,7.552,0,1,1,7.552-7.552,7.561,7.561,0,0,1-7.552,7.552Zm0-13.594a6.042,6.042,0,1,0,6.042,6.042,6.047,6.047,0,0,0-6.042-6.042Zm0,0" transform="translate(-799.983 57.256)" fill="#212529"/>
                                                <path id="Path_2235" data-name="Path 2235" d="M2017.1,641.63h-12.083a.756.756,0,0,1-.755-.755v-6.042a6.8,6.8,0,0,1,6.8-6.8h9.062a.755.755,0,1,1,0,1.51h-9.062a5.292,5.292,0,0,0-5.286,5.286v5.287H2017.1a.755.755,0,1,1,0,1.51Zm0,0" transform="translate(-797.261 49.089)" fill="#212529"/>
                                                <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M2042.845,635.568a6.591,6.591,0,1,1-6.592-6.591h0a6.59,6.59,0,0,1,6.592,6.59Zm-7.354,3.49,4.89-4.888a.426.426,0,0,0,0-.6h0l-.6-.6a.424.424,0,0,0-.6,0h0l-3.989,3.988-1.862-1.862a.425.425,0,0,0-.6,0h0l-.6.6a.425.425,0,0,0,0,.6h0l2.764,2.764a.425.425,0,0,0,.6,0Z" transform="translate(-805.152 48.796)" fill="none" stroke="#212529" stroke-width="1"/>
                                            </g>
                                        </svg>

                                    </span> <span class="requirement-text4">Dedicated Project manager</span></p>
                            </div>
                            <div class="place-order-btn">
                                <a href="{{ route('guest.order.index', $service->slug) }}" id="place_order" class="btn bgOne text-white btn-lg">Place Order</a>
                            </div>
                            <a href="#"  class="order-btn">Contact the Designwala Help Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Service Image & Features End --}}

    {{-- Description, Service FAQ & Review Start --}}
    <div class="singlecategoryDescriptionReviewFaq bgcustomLightgray" id="singlecategoryDescriptionReviewFaq">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8 border_right">
                    <div class=" bg-white tabSection">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation"> <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="home" aria-selected="true">Description </a> </li>
                            <li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#faq" role="tab" aria-controls="profile" aria-selected="false">FAQ</a> </li>
                            {{--                            <li class="nav-item" role="presentation"> <a class="nav-link p-0" id="contact-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="contact" aria-selected="false">Reviews</a> </li>--}}
                        </ul>
                        <div class="tab-content pt-4" id="myTabContent">
                            {{-- Description --}}
                            <div class="tab-pane fade show active " id="description" role="tabpanel" aria-labelledby="home-tab">
                                <p>
                                    {{ $service->short_desc }}
                                </p>


                                <p class="text-color">Banner Sizes:</p>
                                <p>▪  Large Rectangle 336×280</p>
                                <p>▪  Medium Rectangle 300×250</p>
                                <p>▪  Banner 468×60</p>
                                <p>▪  Mobile 320×100</p>
                                <p>▪  Social Media Post 1080×1080</p>
                                <p>▪  Instagram Stories 1080×1920</p>
                                <p>▪  Facebook AD 1200×628</p>
                                <p>▪  Facebook Cover 1350×500</p>
                                <p>▪  Website Slider Banner 1500×500</p>
                            </div>

                            {{-- FAQ Accordion --}}
                            <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="profile-tab">
                                <div>
                                    <div class="accordion" id="accordionExample275">
                                        @forelse($service->serviceFaqs->take(6) as $faq)
                                            <div class="card z-depth-0 bordered">
                                                <div class="card-header" id="headingOne2">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left accordianFaq" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-{{ $loop->index }}" aria-expanded="true" aria-controls="collapseOne-{{ $loop->index }}">
                                                            {{ $faq->question }}
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne-{{ $loop->index }}" class="collapse {{ $loop->index == 0 ? 'show' : '' }}" aria-labelledby="headingOne2" data-bs-parent="#accordionExample275">
                                                    <div class="card-body">
                                                        <p>
                                                            {{ $faq->answer }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-md-10  text-center">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <div class="notfound-2 position-relative">
                                                        <img src="{{ asset('_assets/_guest/img/notfoundpage/notfound.svg') }}" alt="" class="img-fluid  ">

                                                        <p class="notfound-p">Not Available !</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>

                            {{-- Review --}}
                            {{--<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="reviewstabContent">
                                    <!--         row-->
                                    <div class="row py-3">
                                        <div class="col-3 col-sm-2 col-lg-2">
                                            <div class="boxOne">
                                                <img src="https://via.placeholder.com/100x100.png" alt="" class="img-fluid border">
                                            </div>
                                        </div>
                                        <div class="col-9 col-sm-4 col-lg-3 ">
                                            <div class="boxTwo">
                                                <h5 >Monica Fernandez</h5>
                                                <p class="box2content "> August 15, 2020</p>
                                                <div class="review-start">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28.342" height="27.667" viewBox="0 0 28.342 27.667">
                                                            <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                                        </svg>
                                                    </span>
                                                    <span>4.9</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-7 boxThree">
                                            <div>
                                                <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--         row-->
                                    <div class="row py-3">
                                        <div class="col-3 col-sm-2 col-lg-2">
                                            <div class="boxOne">
                                                <img src="https://via.placeholder.com/100x100.png" alt="" class="img-fluid border">
                                            </div>
                                        </div>
                                        <div class="col-9 col-sm-4 col-lg-3 ">
                                            <div class="boxTwo">
                                                <h5 >Monica Fernandez</h5>
                                                <p class="box2content "> August 15, 2020</p>
                                                <div class="review-start">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28.342" height="27.667" viewBox="0 0 28.342 27.667">
                                                            <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                                        </svg>
                                                    </span>
                                                    <span>4.9</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-7 boxThree">
                                            <div>
                                                <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--         row-->
                                    <div class="row py-3">
                                        <div class="col-3 col-sm-2 col-lg-2">
                                            <div class="boxOne">
                                                <img src="https://via.placeholder.com/100x100.png" alt="" class="img-fluid border">
                                            </div>
                                        </div>
                                        <div class="col-9 col-sm-4 col-lg-3 ">
                                            <div class="boxTwo">
                                                <h5 >Monica Fernandez</h5>
                                                <p class="box2content "> August 15, 2020</p>
                                                <div class="review-start">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28.342" height="27.667" viewBox="0 0 28.342 27.667">
                                                            <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                                        </svg>
                                                    </span>
                                                    <span>4.9</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-7 boxThree">
                                            <div>
                                                <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--         row-->
                                    <div class="row py-3">
                                        <div class="col-3 col-sm-2 col-lg-2">
                                            <div class="boxOne">
                                                <img src="https://via.placeholder.com/100x100.png" alt="" class="img-fluid border">
                                            </div>
                                        </div>
                                        <div class="col-9 col-sm-4 col-lg-3 ">
                                            <div class="boxTwo">
                                                <h5 >Monica Fernandez</h5>
                                                <p class="box2content "> August 15, 2020</p>
                                                <div class="review-start">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28.342" height="27.667" viewBox="0 0 28.342 27.667">
                                                            <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00" />
                                                        </svg>
                                                    </span>
                                                    <span>4.9</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-7 boxThree">
                                            <div>
                                                <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod. </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="delivery-section after py-3">
                        <h4>Delivery Files</h4>
                        <p>Marketing File</p>
                        <p>Source File</p>
                        <p>Source File</p>
                        <p>Source File</p>
                        <div class="tag">
                            <h4>Tags</h4>
                            <p>
                                {{-- TODO -- add comma at the end --}}
                                @foreach($tags as $tag)
                                    {{ $tag->title }}@if(!$loop->last), @endif
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Description, Service FAQ & Review End --}}

    @if(count($related_services) > 0)
        {{-- Related Services Start --}}
        <div class="singleCategoryrelatedService" id="singleCategoryrelatedService">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="related-h1">
                            <h1>Related Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="related-services">
            <div class="container">
                <div class="slider">
                    {{-- Related Services Image Slider --}}
                    @foreach($related_services as $related_service)
                        <div>
                            <div class="searchPageResultSingle position-relative">
                                <div class="card">
                                    <img src="{{ showImage($related_service, 'service_thumb') }}" class="card-img-top" alt="designwala">

                                    <div class="card-body">
                                        <div class="card-title ">
                                            <h5>
                                                <a href="{{ route('guest.service.index', $related_service->slug) }}" class="text-dark">{{ $related_service->title }}</a>
                                            </h5>
                                            <h5 class="price">${{ $related_service->price }}</h5>
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
                                            <span>
                                                &#40;200&#41;
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- Related Services End --}}
    @endif
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    {{-- FancyBox --}}
    <script src="{{ mix('_assets/plugins/fancybox/js/fancybox.js') }}"></script>
    {{-- Slick --}}
    <script src="{{ mix('_assets/plugins/slick/js/slick.js') }}"></script>
    {{-- OwlCarousel --}}
    <script src="{{ mix('_assets/plugins/owl-carousel/js/owl-carousel.js') }}"></script>
    <script>
        var myCarousel = document.querySelector('#serviceImageCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 50000,
            wrap: true,
        })
        $(document).ready(function(){
            $("[data-fancybox]").fancybox();
            $('html').on('click', function(e) {
                if (typeof $(e.target).data('bs-content') == 'undefined' && !$(e.target).parents().is('.popover.in')) {
                    $('[data-bs-content]').popover('hide');
                }
            });
        });

        var copy_lg = new bootstrap.Popover(document.querySelector('#copy-url-lg'), {
            container: 'body'
        })

        var copy_sm = new bootstrap.Popover(document.querySelector('#copy-url-sm'), {
            container: 'body'
        })
    </script>

    {{-- Social Sharing Parameters --}}
    <script>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,width=0,height=0,left=-1000,top=-1000`;
    </script>

    {{-- Copy to Clipboard --}}
    <script>
        var copyBtn = $("#copy-url-lg"),
            copyBtnMobile = $("#copy-clipboard-mobile"),
            input = $("#copy-url");

        function copyToClipboardFF(text) {
            window.prompt ("Copy to clipboard: Ctrl C, Enter", text);
        }

        function copyToClipboard() {
            var success   = true,
                range     = document.createRange(),
                selection;

            // For IE.
            if (window.clipboardData) {
                window.clipboardData.setData("Text", input.val());
            } else {
                // Create a temporary element off screen.
                var tmpElem = $('<div>');
                tmpElem.css({
                    position: "absolute",
                    left:     "-1000px",
                    top:      "-1000px",
                });
                // Add the input value to the temp element.
                tmpElem.text(input.val());
                $("body").append(tmpElem);
                // Select temp element.
                range.selectNodeContents(tmpElem.get(0));
                selection = window.getSelection ();
                selection.removeAllRanges ();
                selection.addRange (range);
                // Lets copy.
                try {
                    success = document.execCommand ("copy", false, null);
                }
                catch (e) {
                    copyToClipboardFF(input.val());
                }
                if (success) {
                    // bs-popover-bottom
                    // setTimeout(function() {
                    //     $(".bs-popover-bottom").hide('blind', {}, 500)
                    // }, 5000);

                    alert('Copied')
                }
            }
        }
        copyBtn.on('click', copyToClipboard);
        copyBtnMobile.on('click', copyToClipboard);
    </script>

    @guest
        <script>
            var logged_in = false;
            $('#place_order').click(function (event){
                event.preventDefault();
                initAuthSession();
                if (!logged_in){
                    $('#logged_in').modalCtm({
                        closeExisting: true,
                        fadeDuration: 250
                    });
                }
            })

            function initAuthSession() {
                $.ajax({
                    url: '{{ route('guest.service.initAuthSession', $service->slug) }}',
                    type: 'POST',
                    data: {
                        slug: '{{ $service->slug }}'
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        // console.log(response)
                    }
                });
            }
        </script>
    @endguest
@endpush
