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
                <div class="row m-0 justify-content-between py-3 bg-white rounded">
                    <div class="col-md-4 ">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Footer logo</h5></label>


                            <div class="input-group">
                                <input type="text" class="form-control" readonly>
                                <div class="input-group-btn">
                                    <span class="fileUpload btn btnOne">
                                        <span class="upl" id="upload">Upload</span>
                                        <input type="file" class="upload up" id="up" onchange="readURL(this);"/>

                                    </span>
                                </div>
                                <br>

                            </div>

                            <div class="mt-4 border">
                                <ul class=" list-unstyled previewimg">
                                    <li class="col-md-10 py-4 text-center position-relative m-auto">
                                        <div class=""><img src="img/devimg/rectangle.png" alt="" id="blah"
                                                           style="width:100%;">
                                            <a class="close closeImgdiv" href="#"
                                               style=" position: absolute;top: 12px; right: 7px;">
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
                    </div>
                    <div class="col-md-7">
                        <div class="row justify-content-between">
                            <div class="col-md-8">
                                <div class="col-md-8">
                                    <div class="form-group mb-0">
                                        <label for="">
                                            <h5>copyright text</h5></label>
                                        <div class="input-group">
                                            <input value="edit_value" class="form-control" type="text" placeholder="Default input"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class=" ">
                                    <label for="">
                                        <h5>status</h5></label>
                                    <div class="">
                                        <input id="toggle-event" type="checkbox" data-toggle="toggle">
                                        <div id="console-event"></div>
                                        <script>
                                            $(function () {
                                                $('#toggle-event').change(function () {
                                                    $('#console-event').html('Toggle: ' + $(this).prop('checked'))
                                                })
                                            })
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="container-fluid">
                                    <label for="">
                                        <h5>Footer logo description </h5></label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="8"></textarea>
                                            <!--                                                                <textarea id="default">Hello, World!</textarea>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="SectionDataTable mt-4">
            <div class="row m-0 py-3 bg-white rounded">
                <div class="col-md-12">
                    <h5> footer</h5>
                    <div class="designwalsDataTables text-center">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">footer logo</th>
                                <th scope="col">copyright text</th>
                                <th scope="col">footer description</th>
                                <th scope="col">status</th>
                                <th scope="col">last updated</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><img src="img/devimg/designwalalogo.png" alt=""></td>
                                <td>Copyright @ 2020 DESIGNWALA</td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna
                                </td>
                                <td>
                                    <div class="tableDataLastButtonLiketab  tabletabRED"><span class=""> inactive</span>
                                    </div>
                                </td>
                                <td>09.09.20</td>
                                <td>
                                    <div class="">
                                        <a href="{{ route('settings.footer_section.footer.edit') }}" class="btn p-0 m-0" data-toggle="tooltip" title=""
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
                                        <a class="btn m-0 p-0">
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
                                <td><img src="img/devimg/designwalalogo.png" alt=""></td>
                                <td>Copyright @ 2020 DESIGNWALA</td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna
                                </td>
                                <td>
                                    <div class="tableDataLastButtonLiketab  tabletabGREEN"><span class=""> Active</span>
                                    </div>
                                </td>
                                <td>09.09.20</td>
                                <td>
                                    <div class="">
                                        <a href="{{ route('settings.footer_section.footer.edit') }}" class="btn p-0 m-0" data-toggle="tooltip" title=""
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
                                        <a class="btn m-0 p-0">
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
