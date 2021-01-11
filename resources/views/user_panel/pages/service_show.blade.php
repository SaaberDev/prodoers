@extends('user_panel.layouts.app')
@section('title', 'service_name')

@push('styles')
    {{-- Internal Styles --}}
    {{--<style>
        /* The snackbar - position it at the bottom and in the middle of the screen */
        #snackbar {
            visibility: hidden; /* Hidden by default. Visible on click */
            min-width: 250px; /* Set a default minimum width */
            margin-left: -125px; /* Divide value of min-width by 2 */
            background-color: #333; /* Black background color */
            color: #fff; /* White text color */
            text-align: center; /* Centered text */
            border-radius: 2px; /* Rounded borders */
            padding: 16px; /* Padding */
            position: fixed; /* Sit on top of the screen */
            z-index: 100000; /* Add a z-index if needed */
            left: 50%; /* Center the snackbar */
            bottom: 30px; /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #snackbar.show {
            visibility: visible; /* Show the snackbar */
            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
            However, delay the fade out process for 2.5 seconds */
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
    </style>--}}
@endpush

@section('content')
    {{-- Service Image & Features Start --}}
    <div class="singleCategoryItemSectionOne bgcustomLightgray pt-3" id="singleCategoryItemSectionOne">
        <div class="container">
            <div class="row bgcustomLightgray">
                <div class="col-lg-7 col-md-12 ">
                    <div class="bg-white leftside" style="position: relative;">
                        <div class="row justify-content-center  m-auto iconShareDIv" style="">
                            <div class="col-lg-6 col-md-6  v-center smWidth50 xsWidth60 px0forsm">
                                <div class="starIcons clearfix">
                                    <span class="starIconsLeftIcon">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.957" height="21.317"
                                                 viewBox="0 0 22.957 21.317">
                                                <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star"
                                                      d="M24.336,10.754H16.8L14.507,3.918a.83.83,0,0,0-1.558,0l-2.291,6.836H3.07a.822.822,0,0,0-.82.82.6.6,0,0,0,.015.138.788.788,0,0,0,.343.579l6.2,4.366L6.426,23.57a.822.822,0,0,0,.282.922.793.793,0,0,0,.461.2,1,1,0,0,0,.512-.184l6.047-4.31,6.047,4.31a.96.96,0,0,0,.512.184.736.736,0,0,0,.456-.2.812.812,0,0,0,.282-.922l-2.378-6.913,6.144-4.407.149-.128a.86.86,0,0,0,.266-.548A.868.868,0,0,0,24.336,10.754Z"
                                                      transform="translate(-2.25 -3.375)" fill="#ffc506"/>
                                            </svg> </span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.957" height="21.317"
                                                 viewBox="0 0 22.957 21.317">
                                                <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star"
                                                      d="M24.336,10.754H16.8L14.507,3.918a.83.83,0,0,0-1.558,0l-2.291,6.836H3.07a.822.822,0,0,0-.82.82.6.6,0,0,0,.015.138.788.788,0,0,0,.343.579l6.2,4.366L6.426,23.57a.822.822,0,0,0,.282.922.793.793,0,0,0,.461.2,1,1,0,0,0,.512-.184l6.047-4.31,6.047,4.31a.96.96,0,0,0,.512.184.736.736,0,0,0,.456-.2.812.812,0,0,0,.282-.922l-2.378-6.913,6.144-4.407.149-.128a.86.86,0,0,0,.266-.548A.868.868,0,0,0,24.336,10.754Z"
                                                      transform="translate(-2.25 -3.375)" fill="#ffc506"/>
                                            </svg> </span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.957" height="21.317"
                                                 viewBox="0 0 22.957 21.317">
                                                <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star"
                                                      d="M24.336,10.754H16.8L14.507,3.918a.83.83,0,0,0-1.558,0l-2.291,6.836H3.07a.822.822,0,0,0-.82.82.6.6,0,0,0,.015.138.788.788,0,0,0,.343.579l6.2,4.366L6.426,23.57a.822.822,0,0,0,.282.922.793.793,0,0,0,.461.2,1,1,0,0,0,.512-.184l6.047-4.31,6.047,4.31a.96.96,0,0,0,.512.184.736.736,0,0,0,.456-.2.812.812,0,0,0,.282-.922l-2.378-6.913,6.144-4.407.149-.128a.86.86,0,0,0,.266-.548A.868.868,0,0,0,24.336,10.754Z"
                                                      transform="translate(-2.25 -3.375)" fill="#ffc506"/>
                                            </svg> </span>
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.957" height="21.317"
                                                 viewBox="0 0 22.957 21.317">
                                                <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star"
                                                      d="M24.336,10.754H16.8L14.507,3.918a.83.83,0,0,0-1.558,0l-2.291,6.836H3.07a.822.822,0,0,0-.82.82.6.6,0,0,0,.015.138.788.788,0,0,0,.343.579l6.2,4.366L6.426,23.57a.822.822,0,0,0,.282.922.793.793,0,0,0,.461.2,1,1,0,0,0,.512-.184l6.047-4.31,6.047,4.31a.96.96,0,0,0,.512.184.736.736,0,0,0,.456-.2.812.812,0,0,0,.282-.922l-2.378-6.913,6.144-4.407.149-.128a.86.86,0,0,0,.266-.548A.868.868,0,0,0,24.336,10.754Z"
                                                      transform="translate(-2.25 -3.375)" fill="#ffc506"/>
                                            </svg> </span>
                                        <span class="whitesvg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.957" height="21.317"
                                                 viewBox="0 0 22.957 21.317">
                                                <path id="Icon_ionic-ios-star" data-name="Icon ionic-ios-star"
                                                      d="M24.336,10.754H16.8L14.507,3.918a.83.83,0,0,0-1.558,0l-2.291,6.836H3.07a.822.822,0,0,0-.82.82.6.6,0,0,0,.015.138.788.788,0,0,0,.343.579l6.2,4.366L6.426,23.57a.822.822,0,0,0,.282.922.793.793,0,0,0,.461.2,1,1,0,0,0,.512-.184l6.047-4.31,6.047,4.31a.96.96,0,0,0,.512.184.736.736,0,0,0,.456-.2.812.812,0,0,0,.282-.922l-2.378-6.913,6.144-4.407.149-.128a.86.86,0,0,0,.266-.548A.868.868,0,0,0,24.336,10.754Z"
                                                      transform="translate(-2.25 -3.375)" fill="#ffc506"/>
                                            </svg> </span>
                                    </span>
                                    <span class="pl-2 starIconsRightIcon">75 Sales</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 v-center smWidth50 xsWidth40"
                                 style="position: relative;overflow: hidden;padding-top: 25px;padding-bottom: 25px;">
                                <div class="cardShareIcon">
                                    <div class="float-sm">
                                        <a class="fl-fl float-fb">
                                            <span class="firstIconOnShareIcon copy-clipboard" style="cursor: pointer">
                                                <svg data-brackets-id="2683" xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 29">
                                                    <path data-brackets-id="2684" id="Icon_awesome-share-alt"
                                                          data-name="Icon awesome-share-alt"
                                                          d="M19.643,18.125a5.285,5.285,0,0,0-3.336,1.184L10.587,15.68a5.549,5.549,0,0,0,0-2.361l5.719-3.628a5.285,5.285,0,0,0,3.336,1.184A5.4,5.4,0,0,0,25,5.438a5.358,5.358,0,1,0-10.714,0,5.533,5.533,0,0,0,.127,1.18L8.694,10.246A5.285,5.285,0,0,0,5.357,9.063a5.438,5.438,0,0,0,0,10.875,5.285,5.285,0,0,0,3.336-1.184l5.719,3.628a5.533,5.533,0,0,0-.127,1.18,5.358,5.358,0,1,0,5.357-5.437Z"
                                                          fill="#038d08">
                                                    </path>
                                                </svg>
                                            </span>
{{--                                            open('/', 'test', params);--}}
                                            <span style="cursor: pointer" onclick="window.open('{{ $services->getShareUrl('facebook') }}', 'services', params)">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15.406" height="20"
                                                     viewBox="0 0 15.406 28.764">
                                                    <path id="Icon_awesome-facebook-f"
                                                          data-name="Icon awesome-facebook-f"
                                                          d="M16.005,16.18l.8-5.206H11.809V7.6a2.6,2.6,0,0,1,2.935-2.812h2.271V.352A27.692,27.692,0,0,0,12.984,0c-4.113,0-6.8,2.493-6.8,7.007v3.967H1.609V16.18H6.182V28.764h5.628V16.18Z"
                                                          transform="translate(-1.609)" fill="#3b5999"></path>
                                                </svg>
                                            </span>
                                            <span style="cursor: pointer" onclick="window.open('', '_blank')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28.764" height="20"
                                                     viewBox="0 0 28.764 23.362">
                                                    <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter"
                                                          d="M25.807,9.2c.018.256.018.511.018.767,0,7.793-5.932,16.773-16.773,16.773A16.659,16.659,0,0,1,0,24.1a12.2,12.2,0,0,0,1.424.073A11.806,11.806,0,0,0,8.742,21.65,5.906,5.906,0,0,1,3.23,17.562a7.434,7.434,0,0,0,1.113.091,6.235,6.235,0,0,0,1.551-.2,5.9,5.9,0,0,1-4.727-5.786v-.073a5.937,5.937,0,0,0,2.665.748A5.9,5.9,0,0,1,2.008,4.458a16.757,16.757,0,0,0,12.155,6.169,6.655,6.655,0,0,1-.146-1.351,5.9,5.9,0,0,1,10.2-4.034,11.606,11.606,0,0,0,3.742-1.424,5.879,5.879,0,0,1-2.592,3.249,11.818,11.818,0,0,0,3.395-.913A12.672,12.672,0,0,1,25.807,9.2Z"
                                                          transform="translate(0 -3.381)" fill="#0797f8"></path>
                                                </svg>
                                            </span> <span style="cursor: pointer" onclick="window.open('', '_blank')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25.168" height="20"
                                                     viewBox="0 0 25.168 25.168">
                                                    <path id="Icon_awesome-linkedin-in"
                                                          data-name="Icon awesome-linkedin-in"
                                                          d="M5.634,25.169H.416V8.365H5.634ZM3.022,6.073A3.036,3.036,0,1,1,6.044,3.023,3.047,3.047,0,0,1,3.022,6.073Zm22.141,19.1H19.956v-8.18c0-1.949-.039-4.449-2.713-4.449-2.713,0-3.129,2.118-3.129,4.309v8.32H8.9V8.365h5v2.292h.073a5.483,5.483,0,0,1,4.937-2.713c5.281,0,6.252,3.478,6.252,7.994v9.23Z"
                                                          transform="translate(0 -0.001)" fill="#0173b2"></path>
                                                </svg>
                                            </span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                        carousel -->
                        <div class="">
                            <div class="owl-carousel">
                                @foreach($services->serviceImages as $service)
                                <div class="owlCustom" style="">
                                    <img src="{{ asset(config('designwala_paths.admin.images.show.services.service_image') . $service->filename) }}" alt="" class="img-fluid">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5  col-md-12">
                    <div class="bg-white p-4 rightSide shadow-sm" style="">
                        <div class="pt-3 pb-4 socialMediaBannerTxtpadding">
                            <h3 style="">{{ $services->title }}</h3>
                        </div>
                        <div class=" " style="height: 308px;">
                            <h4 class="pb-2">Features:</h4>
                            @forelse($services->serviceFeatures->take(7) as $service)
                            <p><span><svg xmlns="http://www.w3.org/2000/svg" width="12.711" height="9.479"
                                          viewBox="0 0 12.711 9.479">
                                        <path id="Icon_awesome-check" data-name="Icon awesome-check"
                                              d="M4.317,13.87.186,9.739a.636.636,0,0,1,0-.9l.9-.9a.636.636,0,0,1,.9,0l2.783,2.783,5.961-5.961a.636.636,0,0,1,.9,0l.9.9a.636.636,0,0,1,0,.9L5.216,13.87A.636.636,0,0,1,4.317,13.87Z"
                                              transform="translate(0 -4.577)" fill="#038d08"/>
                                    </svg>
                                </span> <span>{{ $service->feature_desc }}</span></p>
                            @empty
                                No Features
                            @endforelse


                        </div>
                        <div class="row py-5 pricepadding">
                            <div class="col-md-12">
                                <h2 class="colorOne mb-0" style="font-size: 25px;">$ {{ $services->price }}</h2>
                            </div>
                            <!--
                            <div class="col-md-8">
                                <div class=""> <img src="_user_panel/img/singleCategortyItem/Group%20184.png" alt="" class="img-fluid"> </div>
                            </div>
-->
                        </div>
                        <div class="">
                            <button type="button" class="btn bgOne text-white btn-lg btn-block rounded-0">Place Oder
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Service Image & Features End --}}

    {{-- Description, Service FAQ & Review Start --}}
    <div class="singlecategoryDescriptionReviewFaq bgcustomLightgray py-3" id="singlecategoryDescriptionReviewFaq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class=" bg-white tabSection shadow-sm">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" id="description-tab"
                                                                        data-toggle="tab" href="#description" role="tab"
                                                                        aria-controls="home" aria-selected="true">Description </a>
                            </li>
                            <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab"
                                                                        data-toggle="tab" href="#faq" role="tab"
                                                                        aria-controls="profile" aria-selected="false">FAQ</a>
                            </li>
                            <li class="nav-item" role="presentation"><a class="nav-link" id="contact-tab"
                                                                        data-toggle="tab" href="#reviews" role="tab"
                                                                        aria-controls="contact" aria-selected="false">Reviews(00)</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-4" id="myTabContent">
                            <div class="tab-pane fade show active " id="description" role="tabpanel"
                                 aria-labelledby="home-tab">
                                <p>
                                    {{ $services->service_desc }}
                                </p>
                            </div>
                            <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="">
                                    <div class="accordion" id="accordionExample275">
                                        <div class="card z-depth-0 bordered">
                                            <div class="card-header" id="headingOne2">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left accordianFaq"
                                                            type="button" data-toggle="collapse"
                                                            data-target="#collapseOne2" aria-expanded="true"
                                                            aria-controls="collapseOne2">
                                                        Collapsible Group Item #1
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne2"
                                                 data-parent="#accordionExample275">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod
                                                    high life accusamus terry richardson ad squid. 3 wolf moon officia
                                                    aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                                    a bird on it squid single-origin coffee nulla assumenda shoreditch
                                                    et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                    aesthetic synth nesciunt you probably haven't heard of them
                                                    accusamus labore sustainable.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card z-depth-0 bordered">
                                            <div class="card-header" id="headingTwo2">
                                                <h5 class="mb-0">
                                                    <button
                                                        class="btn btn-link btn-block text-left collapsed accordianFaq"
                                                        type="button" data-toggle="collapse" data-target="#collapseTwo2"
                                                        aria-expanded="false" aria-controls="collapseTwo2">
                                                        Collapsible Group Item #2
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2"
                                                 data-parent="#accordionExample275">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod
                                                    high life accusamus terry richardson ad squid. 3 wolf moon officia
                                                    aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                                    a bird on it squid single-origin coffee nulla assumenda shoreditch
                                                    et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                    aesthetic synth nesciunt you probably haven't heard of them
                                                    accusamus labore sustainable.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card z-depth-0 bordered">
                                            <div class="card-header" id="headingThree2">
                                                <h5 class="mb-0">
                                                    <button
                                                        class="btn btn-link btn-block text-left collapsed accordianFaq"
                                                        type="button" data-toggle="collapse"
                                                        data-target="#collapseThree2" aria-expanded="false"
                                                        aria-controls="collapseThree2">
                                                        Collapsible Group Item #3
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2"
                                                 data-parent="#accordionExample275">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod
                                                    high life accusamus terry richardson ad squid. 3 wolf moon officia
                                                    aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put
                                                    a bird on it squid single-origin coffee nulla assumenda shoreditch
                                                    et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                                    cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                                    aesthetic synth nesciunt you probably haven't heard of them
                                                    accusamus labore sustainable.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="reviewstabContent">
                                    <!--         row-->
                                    <!--         row-->
                                    <div class="row py-3">
                                        <div class="col-md-12">
                                            <div class="reviewstabSingle clearfix">
                                                <div class="boxOne">
                                                    <div class=""><img src="#"
                                                                       alt="" class="img-fluid border"></div>
                                                </div>
                                                <div class="boxTwo">
                                                    <div class="">
                                                        <h5 class="mb-0">Tom Ako</h5>
                                                        <p class="box2content mb-0"> August 15,2020</p>
                                                    </div>
                                                </div>
                                                <div class="boxThree">
                                                    <div class="">
                                                        <div class=""> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="28.342" height="27.667"
                                                                                  viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span></div>
                                                        <p class="m-0 pt-2"> Lorem ipsum dolor sit amet, consetetur
                                                            sadipscing elitr, sed diam nonumy eirmod. Lorem ipsum dolor
                                                            sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                            eirmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--         row-->
                                    <div class="row py-3">
                                        <div class="col-md-12">
                                            <div class="reviewstabSingle clearfix">
                                                <div class="boxOne">
                                                    <div class=""><img src="#"
                                                                       alt="" class="img-fluid border"></div>
                                                </div>
                                                <div class="boxTwo">
                                                    <div class="">
                                                        <h5 class="mb-0">Tom Ako</h5>
                                                        <p class="box2content mb-0"> August 15,2020</p>
                                                    </div>
                                                </div>
                                                <div class="boxThree">
                                                    <div class="">
                                                        <div class=""> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="28.342" height="27.667"
                                                                                  viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span></div>
                                                        <p class="m-0 pt-2"> Lorem ipsum dolor sit amet, consetetur
                                                            sadipscing elitr, sed diam nonumy eirmod. Lorem ipsum dolor
                                                            sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                            eirmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--         row-->
                                    <div class="row py-3">
                                        <div class="col-md-12">
                                            <div class="reviewstabSingle clearfix">
                                                <div class="boxOne">
                                                    <div class=""><img src="#"
                                                                       alt="" class="img-fluid border"></div>
                                                </div>
                                                <div class="boxTwo">
                                                    <div class="">
                                                        <h5 class="mb-0">Tom Ako</h5>
                                                        <p class="box2content mb-0"> August 15,2020</p>
                                                    </div>
                                                </div>
                                                <div class="boxThree">
                                                    <div class="">
                                                        <div class=""> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="28.342" height="27.667"
                                                                                  viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span></div>
                                                        <p class="m-0 pt-2"> Lorem ipsum dolor sit amet, consetetur
                                                            sadipscing elitr, sed diam nonumy eirmod. Lorem ipsum dolor
                                                            sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                            eirmod. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--         row-->
                                    <div class="row py-3">
                                        <div class="col-md-12">
                                            <div class="reviewstabSingle clearfix">
                                                <div class="boxOne">
                                                    <div class=""><img src="#"
                                                                       alt="" class="img-fluid border"></div>
                                                </div>
                                                <div class="boxTwo">
                                                    <div class="">
                                                        <h5 class="mb-0">Tom Ako</h5>
                                                        <p class="box2content mb-0"> August 15,2020</p>
                                                    </div>
                                                </div>
                                                <div class="boxThree">
                                                    <div class="">
                                                        <div class=""> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="28.342" height="27.667"
                                                                                  viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span> <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                               width="28.342" height="27.667"
                                                                               viewBox="0 0 28.342 27.667">
                                                                    <path id="Icon_awesome-star"
                                                                          data-name="Icon awesome-star"
                                                                          d="M14.092.962,10.633,8.115,2.893,9.266a1.739,1.739,0,0,0-.938,2.95l5.6,5.565L6.23,25.642a1.7,1.7,0,0,0,2.458,1.821l6.924-3.712,6.924,3.712a1.7,1.7,0,0,0,2.458-1.821L23.67,17.781l5.6-5.565a1.739,1.739,0,0,0-.938-2.95l-7.74-1.151L17.133.962a1.682,1.682,0,0,0-3.041,0Z"
                                                                          transform="translate(-1.441 0.001)"
                                                                          fill="#f9bf00"/>
                                                                </svg>
                                                            </span></div>
                                                        <p class="m-0 pt-2"> Lorem ipsum dolor sit amet, consetetur
                                                            sadipscing elitr, sed diam nonumy eirmod. Lorem ipsum dolor
                                                            sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                            eirmod. </p>
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
            </div>
        </div>
    </div>
    {{-- Description, Service FAQ & Review End --}}

    {{-- Related Services Start --}}
    <div class="singleCategoryrelatedService  py-5" id="singleCategoryrelatedService">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1>Related Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse($related_services as $related_service)
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "><img src="{{ asset(config('designwala_paths.admin.images.show.services.thumbnails') . $related_service->thumbnail) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="{{ route('guest.service.index', $related_service->slug) }}"
                                                                                 class="text-dark">{{ $related_service->title }}</a></span>
                                    <span class="w-25 float-right text-right font-medium">$ {{ $related_service->price }}</span>
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
                    No Data
                @endforelse
            </div>
        </div>
    </div>
    {{-- Related Services End --}}

    {{-- FAQ Start --}}
    <div class="singleCategoryItemDetailContent py-5 bgcustomLightgray" id="singleCategoryItemDetailContent">
        <div class="container">
            <div class="row">
                @forelse($services->serviceFaqs as $faq)
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
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    {{--<script>
        $(".owl-carousel").owlCarousel({
            pagination: true,
            items: 1,
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: false,
            dots: false, //nav: false,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    loop: true,
                },
                500: {
                    items: 1,
                    nav: true,
                    loop: true,
                },
                768: {
                    items: 1,
                    nav: true,
                    loop: true,
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                }
            }
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [0])
        })
        $('.stop').on('click', function() {
            owl.trigger('stop.owl.autoplay')
        })
    </script>--}}

    <script>
        let params = `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,width=0,height=0,left=-1000,top=-1000`;
    </script>

    <script>
        $('.copy-clipboard').click(function() {
            Snackbar.show({
                text: 'Copied to Clipboard',
                pos: 'bottom-center',
                actionTextColor: '#038c08',
                duration: 1500
            });
        });
    </script>
@endpush
