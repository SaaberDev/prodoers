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
                        <h2 class="  m-0">Site CMS</h2></div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="">
                <div class="row m-0 py-3 bg-white rounded">
                    <div class="col-md-6 py-3">
                        <div class="form-group mb-0 mt-3">
                            <label for="">Brand Logo</label>
                            <div class="input-group">
                                <input type="text" class="form-control" readonly>
                                <div class="input-group-btn">
                                    <span class="fileUpload btn btnOne">
                                        <span class="upl" id="upload">Choose</span>
                                        <input type="file" class="upload up" id="up"
                                               onchange="readURL(this);" />
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 border">
                            <ul class="row list-unstyled previewimg">
                                <li class="col-md-4 py-4 text-center position-relative m-auto">
                                    <div class=""><img src="img/devimg/rectangle.png" alt="">
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
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="form-group mb-0 mt-3">
                            <label for="">browser tab favicon</label>
                            <div class="input-group">
                                <input type="text" class="form-control" readonly>
                                <div class="input-group-btn"> <span class="fileUpload btn btnOne">
                                        <span class="upl" id="upload">Choose</span>
                                        <input type="file" class="upload up" id="up"
                                               onchange="readURL(this);" /> </span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 border">
                            <ul class="row list-unstyled previewimg">
                                <li class="col-md-4 py-4 text-center position-relative m-auto">
                                    <div class=""><img src="img/devimg/rectangle.png" alt="">
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
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="form-group mb-0 mt-3">
                            <label for="">Designwala Clip</label>
                            <div class="input-group">
                                <input type="text" class="form-control" readonly>
                                <div class="input-group-btn"> <span class="fileUpload btn btnOne">
                                        <span class="upl" id="upload">Choose</span>
                                        <input type="file" class="upload up" id="up"
                                               onchange="readURL(this);" /> </span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 border">
                            <ul class="row list-unstyled previewimg">
                                <li class="col-md-4 py-4 text-center position-relative m-auto">
                                    <div class=""><img src="img/devimg/rectangle.png" alt="">
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
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6  py-3">
                        <div class="form-group ">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="12"></textarea>
                        </div>
                    </div>


                    <div class="col-md-12 py-4 ">
                        <div class="text-right">
                            <button type="submit" class="btn shadow bgOne rounded text-white px-4"> Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
