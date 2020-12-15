@extends('user_panel.layouts.app')
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
                        <h2 class="">Logo Design</h2>
                        <p class="">Reference site about Lorem Ipsum, giving information
                            on its origins, as well as a random Lipsum generator.</p>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-6 singlecaregoryBannerImg">
                    <div class="text-right pr-md-4">
                        <img src="{{ asset('_user_panel/img/singlecategorypage/singlecategorydetails.svg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Category Banner End --}}

    {{-- Services by category Start --}}
    <div class="singleCategorySingleCategories pt-4" id="singleCategorySingleCategories">
        <div class="container">
            <div class="row">
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
                <!--           row end -->
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <nav aria-label="Page navigation example" class=" d-none d-lg-block">
                        <ul class="pagination justify-content-center mb-0 ">
                            <li class="page-item ">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                    </svg> </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                    </svg> </a>
                            </li>
                        </ul>
                    </nav>
                    <!--               button-->
                    <div class="d-lg-none d-sm-block pt-3 pb-4">
                        <button class="btn bgOne text-light rounded-0">See More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Services by category End --}}

    {{-- Similar Services Start --}}
    <div class="singleCategorySimilarService bgcustomLightgray py-5" id="singleCategorySimilarService">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pb-3">
                        <h1>Similar Services</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <!--               ******************-->
                <!--               ******************-->
                <!--      Single Card -->
                <!--               ******************-->
                <!--               ******************-->
                <div class="col-lg-4 col-md-6 padding25">
                    <div class="searchPageResultSingle position-relative">
                        <div class="card "> <img src="{{ asset('_user_panel/img/searchpage/search.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title ">
                                    <span class="w-75 float-left font-medium"><a href="" class="text-dark">Card Title</a></span> <span class="w-25 float-right text-right font-medium">$20</span>
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
            </div>
        </div>
    </div>
    {{-- Similar Services End --}}

    {{-- FAQ Start --}}
    <div class="singleCategoryDetailContent py-5" id="singleCategoryDetailContent">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="py-3">
                        <div class="detailsContent">
                            <h4>Logo and Branding : Types of logo</h4>
                            <p class="mb-0">Monogram logos or lettermarks are logos that consist of letters, usually brand initials. IBM, CNN, HP, HBO… Noticing a pattern, yes? They’re the initialisms of a few famous businesses with rather lengthy names. With 2 or 3 words to remember, they’ve each turned to using their initials for brand-identification purposes.</p>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="detailsContent">
                            <h4>Logo and Branding : Types of logo</h4>
                            <p class="mb-0">Monogram logos or lettermarks are logos that consist of letters, usually brand initials. IBM, CNN, HP, HBO… Noticing a pattern, yes? They’re the initialisms of a few famous businesses with rather lengthy names. With 2 or 3 words to remember, they’ve each turned to using their initials for brand-identification purposes.</p>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="detailsContent">
                            <h4>Logo and Branding : Types of logo</h4>
                            <p class="mb-0">Monogram logos or lettermarks are logos that consist of letters, usually brand initials. IBM, CNN, HP, HBO… Noticing a pattern, yes? They’re the initialisms of a few famous businesses with rather lengthy names. With 2 or 3 words to remember, they’ve each turned to using their initials for brand-identification purposes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="py-3">
                        <div class="detailsContent">
                            <h4>Logo and Branding : Types of logo</h4>
                            <p class="mb-0">Monogram logos or lettermarks are logos that consist of letters, usually brand initials. IBM, CNN, HP, HBO… Noticing a pattern, yes? They’re the initialisms of a few famous businesses with rather lengthy names. With 2 or 3 words to remember, they’ve each turned to using their initials for brand-identification purposes.</p>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="detailsContent">
                            <h4>Logo and Branding : Types of logo</h4>
                            <p class="mb-0">Monogram logos or lettermarks are logos that consist of letters, usually brand initials. IBM, CNN, HP, HBO… Noticing a pattern, yes? They’re the initialisms of a few famous businesses with rather lengthy names. With 2 or 3 words to remember, they’ve each turned to using their initials for brand-identification purposes.</p>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="detailsContent">
                            <h4>Logo and Branding : Types of logo</h4>
                            <p class="mb-0">Monogram logos or lettermarks are logos that consist of letters, usually brand initials. IBM, CNN, HP, HBO… Noticing a pattern, yes? They’re the initialisms of a few famous businesses with rather lengthy names. With 2 or 3 words to remember, they’ve each turned to using their initials for brand-identification purposes.</p>
                        </div>
                    </div>
                </div>
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
                    <div class="textsm-center pt-3">
                        <button type="button" class="btn bgOne rounded-0 px-5 text-white py-2">Let's Talk</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Like to discuss End --}}
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
