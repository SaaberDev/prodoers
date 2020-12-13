@extends('admin_panel.layouts.app')
@section('title', 'page_name')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style">
        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-12 col-sm-12  v-center">
                    <!-- breadcrumb  -->
                    @include('admin_panel.includes.breadcrumb')
                </div>
            </div>
        </div>
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1 boxshadow rounded">
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="  m-0">Footer</h2></div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="">
                <div class="row m-0 py-3 bg-white rounded">
                    <div class="col-md-12">
                        <h5>social media icons</h5></div>
                    <div class="col-md-12 py-3">
                        <!-- COMPONENT START -->
                        <div class="row">
                            <div class="col-md-1">
                                <div class="text-center socialmediaDelete">
                                    <img src="{{ asset('img/facebook.svg') }}" alt="" height="35" width="35">
                                    <a class="close closeImgdiv" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 18 18">
                                            <g transform="translate(-642 -792)">
                                                <circle cx="9" cy="9" r="9" transform="translate(642 792)"
                                                        fill="#ff6767"></circle>
                                                <g transform="translate(647.17 797.205)">
                                                    <g transform="translate(0 0)">
                                                        <line x2="7.442" y2="7.442" fill="none" stroke="#fff"
                                                              stroke-linecap="round" stroke-width="2"></line>
                                                        <line x1="7.442" y2="7.442" fill="none" stroke="#fff"
                                                              stroke-linecap="round" stroke-width="2"></line>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 position-relative" style="">
                                <div class="form-group">


                                    <div class="input-group">
                                        <input type="text" class="form-control" readonly>
                                        <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Upload</span>
                                                <input type="file" class="upload up" id="up" onchange="readURL(this);" multiple/>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-0">
                                    <input class="form-control" type="text" placeholder="title"></div>
                            </div>
                            <div class="col-md-4">
                                <!--	      <input class="form-control" type="text" placeholder="Url">-->
                                <div class="input-group ">
                                    <input type="text" class="form-control" placeholder="Url"
                                           aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn p-0 m-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="38.173" height="38.173"
                                                 viewBox="0 0 38.173 38.173">
                                                <path
                                                    d="M34.9,20.49H24.515V10.6a1.724,1.724,0,0,0-3.444,0V20.49H10.687a1.687,1.687,0,0,0-1.722,1.639,1.6,1.6,0,0,0,.506,1.158,1.761,1.761,0,0,0,1.216.481H21.071v9.886a1.6,1.6,0,0,0,.506,1.158,1.761,1.761,0,0,0,1.216.481,1.687,1.687,0,0,0,1.722-1.639V23.768H34.9a1.641,1.641,0,1,0,0-3.278Z"
                                                    transform="translate(18.617 -12.678) rotate(45)"
                                                    fill="#141414"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 py-3 ">
                        <!-- COMPONENT START -->
                        <div class="row">
                            <div class="col-md-1">
                                <div class="text-center socialmediaDelete">
                                    <img src="img/devimg/facebook.svg" alt="" height="35" width="35">
                                    <a class="close closeImgdiv" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                             viewBox="0 0 18 18">
                                            <g transform="translate(-642 -792)">
                                                <circle cx="9" cy="9" r="9" transform="translate(642 792)"
                                                        fill="#ff6767"></circle>
                                                <g transform="translate(647.17 797.205)">
                                                    <g transform="translate(0 0)">
                                                        <line x2="7.442" y2="7.442" fill="none" stroke="#fff"
                                                              stroke-linecap="round" stroke-width="2"></line>
                                                        <line x1="7.442" y2="7.442" fill="none" stroke="#fff"
                                                              stroke-linecap="round" stroke-width="2"></line>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 position-relative" style="">
                                <div class="form-group">


                                    <div class="input-group">
                                        <input type="text" class="form-control" readonly>
                                        <div class="input-group-btn">
                                            <span class="fileUpload btn btnOne">
                                                <span class="upl" id="upload">Upload</span>
                                                <input type="file" class="upload up" id="up" onchange="readURL(this);" multiple/>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-0">
                                    <input class="form-control" type="text" placeholder="title"></div>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" placeholder="Url">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-right">
                            <button type="button" class="btn shadow bg-white rounded"> <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.672"
                                         viewBox="0 0 12.672 12.672">
                                        <path
                                            d="M20.848,14.512H16.09V9.754a.789.789,0,0,0-1.578,0v4.758H9.754a.789.789,0,0,0,0,1.578h4.758v4.758a.789.789,0,0,0,1.578,0V16.09h4.758a.789.789,0,0,0,0-1.578Z"
                                            transform="translate(-8.965 -8.965)" fill="#000"></path>
                                    </svg></span> Add new field
                            </button>
                        </div>
                    </div>
                    <div class="col-md-12 py-4 ">
                        <div class="text-right">
                            <button type="submit" class="btn shadow bgOne rounded text-white px-4"> Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="SectionDataTable mt-4">
            <div class="row m-0 py-3 bg-white rounded">
                <div class="col-md-12">
                    <h5> social media links</h5>
                    <div class="designwalsDataTables text-center">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">icon</th>
                                <th scope="col">Title</th>
                                <th scope="col">url</th>
                                <th scope="col">last updated</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="img/devimg/facebook.svg" alt=""></td>
                                <td>Facebook</td>
                                <td>www.facebook.com</td>
                                <td> 09.09.20</td>
                                <td>
                                    <div class="">
                                        <a href="{{ route('settings.footer_section.social_link.edit') }}" class="btn p-0 m-0" data-toggle="tooltip" title=""
                                           data-original-title="view or edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.322" height="14.322"
                                                 viewBox="0 0 14.322 14.322">
                                                <g transform="translate(-2.5 -2.203)">
                                                    <path
                                                        d="M8.907,6H4.313A1.313,1.313,0,0,0,3,7.313V16.5a1.313,1.313,0,0,0,1.313,1.313H13.5A1.313,1.313,0,0,0,14.815,16.5V11.907"
                                                        transform="translate(0 -1.79)" fill="none" stroke="#000"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1"></path>
                                                    <path
                                                        d="M18.892,3.226a1.392,1.392,0,1,1,1.969,1.969l-6.236,6.236L12,12.087l.656-2.626Z"
                                                        transform="translate(-5.062 0)" fill="none" stroke="#000"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a class="btn m-0 p-0" data-toggle="modal" data-target="#deletemodal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027"
                                                 viewBox="0 0 11.91 16.027">
                                                <path
                                                    d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z"
                                                    transform="translate(-7 -3)" fill="none" stroke="#000"
                                                    stroke-width="1"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="img/devimg/facebook.svg" alt=""></td>
                                <td>Facebook</td>
                                <td>www.facebook.com</td>
                                <td> 09.09.20</td>
                                <td>
                                    <div class="">
                                        <a href="{{ route('settings.footer_section.social_link.edit') }}" class="btn p-0 m-0" data-toggle="tooltip" title=""
                                           data-original-title="view or edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.322" height="14.322"
                                                 viewBox="0 0 14.322 14.322">
                                                <g transform="translate(-2.5 -2.203)">
                                                    <path
                                                        d="M8.907,6H4.313A1.313,1.313,0,0,0,3,7.313V16.5a1.313,1.313,0,0,0,1.313,1.313H13.5A1.313,1.313,0,0,0,14.815,16.5V11.907"
                                                        transform="translate(0 -1.79)" fill="none" stroke="#000"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1"></path>
                                                    <path
                                                        d="M18.892,3.226a1.392,1.392,0,1,1,1.969,1.969l-6.236,6.236L12,12.087l.656-2.626Z"
                                                        transform="translate(-5.062 0)" fill="none" stroke="#000"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a class="btn m-0 p-0" data-toggle="modal" data-target="#deletemodal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027"
                                                 viewBox="0 0 11.91 16.027">
                                                <path
                                                    d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z"
                                                    transform="translate(-7 -3)" fill="none" stroke="#000"
                                                    stroke-width="1"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
