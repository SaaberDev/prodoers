@extends('admin_panel.layouts.app')
@section('title', 'page_name')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style">
        <div class="">
            <div class="row  pb-3 m-0">
                <div class="col-md-8 col-sm-8  v-center">
                    <!-- breadcrumb  -->
                    @include('admin_panel.includes.breadcrumb')
                </div>

            </div>
        </div>
        <div class="boxshadow rounded mb-4">
            <div class="row justify-content-center m-0 py-1 boxshadow rounded">
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="  m-0">Designwala Profile</h2></div>
                </div>


            </div>
        </div>

        <div class="row  py-3 view_designwala_profile">
            <div class="col-md-4 view_designwala_profileCol">
                <div class="card mb-3" style="">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-3 v-center text-center">
                            <div class="customerProfileClientImg"><img src="{{ asset('img/headermanlogo.png') }}"
                                                                       class="card-img " alt="..."></div>
                        </div>
                        <div class="col-lg-8 col-md-9  v-center">
                            <div class="card-body">
                                <h4 class="card-title">CLIENT NAME <span data-toggle="tooltip"
                                                                         data-placement="top" title="Verified"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 18 18"><g transform="translate(-800 -372)"><circle
                                                    cx="9" cy="9" r="9" transform="translate(800 372)"
                                                    fill="#038d08"/><g transform="translate(804 367.557)"><path
                                                        d="M9.212,11.455,3.477,17.19a.129.129,0,0,1-.183,0L.038,13.933a.129.129,0,0,1,0-.183l.791-.791a.129.129,0,0,1,.183,0l2.374,2.374,4.853-4.853a.129.129,0,0,1,.183,0l.791.791A.129.129,0,0,1,9.212,11.455Z"
                                                        transform="translate(0 0)"
                                                        fill="#fff"/></g></g></svg></span> <span
                                        data-toggle="tooltip" data-placement="top" title="Verified"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="22.225"
                                            height="18.251" viewBox="0 0 22.225 18.251"><path
                                                d="M21.9,56.832,12.834,42.669a2.044,2.044,0,0,0-3.443,0L.322,56.832a2.044,2.044,0,0,0,1.721,3.146H20.181A2.044,2.044,0,0,0,21.9,56.832ZM9.974,47.484a1.127,1.127,0,0,1,2.255,0v4.838a1.127,1.127,0,0,1-2.255,0V47.484ZM11.08,57.532a1.409,1.409,0,1,1,1.409-1.409A1.409,1.409,0,0,1,11.08,57.532Z"
                                                transform="translate(0 -41.727)" fill="red"/></svg></span>
                                </h4>

                                <p class="card-text mb-1"><span>Designation</span>-<span>Affiliate</span></p>
                                <p class="card-text mb-1">Single Line Biodata </p>
                                <p class="card-text mb-1"><b>Orders Completed : </b> 100</p>
                                <p class="card-text mb-1"><b>Orders Assigned : </b> 100</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 view_designwala_profileCol">
                <div class="card rounded p-3 cardAddressDetails">
                    <p><span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="29.988" height="19.992"
                                 viewBox="0 0 29.988 19.992"><g
                                    transform="translate(0 0)"><path
                                        d="M26.864,85.333H3.124A3.128,3.128,0,0,0,0,88.457V102.2a3.128,3.128,0,0,0,3.124,3.124h23.74a3.128,3.128,0,0,0,3.124-3.124V88.457A3.128,3.128,0,0,0,26.864,85.333ZM28.738,102.2a1.876,1.876,0,0,1-1.874,1.874H3.124A1.876,1.876,0,0,1,1.249,102.2V88.457a1.876,1.876,0,0,1,1.874-1.874h23.74a1.876,1.876,0,0,1,1.874,1.874V102.2Z"
                                        transform="translate(0 -85.333)" fill="#2d2d2d"/></g><g
                                    transform="translate(2.5 2.499)"><path
                                        d="M67.55,128.272a.625.625,0,0,0-.868-.162l-10.247,7.011a2.237,2.237,0,0,1-2.54,0L43.647,128.11a.624.624,0,1,0-.7,1.031l10.247,7.011a3.476,3.476,0,0,0,3.951,0l10.247-7.011A.624.624,0,0,0,67.55,128.272Z"
                                        transform="translate(-42.67 -128)" fill="#2d2d2d"/></g><g
                                    transform="translate(2.498 9.996)"><g
                                        transform="translate(0 0)"><path
                                            d="M51.249,256.22a.628.628,0,0,0-.881-.08l-7.5,6.247a.625.625,0,0,0,.8.961l7.5-6.247A.626.626,0,0,0,51.249,256.22Z"
                                            transform="translate(-42.646 -255.996)" fill="#2d2d2d"/></g></g><g
                                    transform="translate(18.742 9.996)"><path
                                        d="M328.524,262.386l-7.5-6.247a.625.625,0,0,0-.8.961l7.5,6.247a.625.625,0,1,0,.8-.961Z"
                                        transform="translate(-320.001 -255.995)"
                                        fill="#2d2d2d"/></g></svg></span>
                        username@gmail.com
                    </p>
                    <p><span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27.584" height="26.496"
                                 viewBox="0 0 27.584 26.496"><g
                                    transform="translate(0 26.496) rotate(-90)"><g
                                        transform="translate(0 0)"><path
                                            d="M25.8,2.989c-.066-.062-.205-.167-.3-.237C23.774,1.448,21.116-.111,18.55.006,14.254.2,8.545,6,6.9,7.774S-.115,15.664,0,19.959A7.24,7.24,0,0,0,.45,22.213,14.738,14.738,0,0,0,3.225,26.67s.189.222.28.308a2.556,2.556,0,0,0,1.039.522,2.449,2.449,0,0,0,.658.084,2.655,2.655,0,0,0,.881-.142,2.564,2.564,0,0,0,.993-.593c.159-.171,3.193-4.043,3.21-4.068l.019-.029a2.683,2.683,0,0,0,.374-.652,2.6,2.6,0,0,0,.027-1.821,2.465,2.465,0,0,0-.638-.974L8.644,17.974a1.29,1.29,0,0,1-.292-.439,1.18,1.18,0,0,1-.021-.185l8.3-8.931a.159.159,0,0,1,.054-.038l.033.012a3.084,3.084,0,0,1,.486.38l1.425,1.317a2.576,2.576,0,0,0,2.823.426,3.06,3.06,0,0,0,.68-.474L22.2,9.99c.029-.026,3.607-3.286,3.741-3.432a2.689,2.689,0,0,0,.557-1.745,2.612,2.612,0,0,0-.315-1.345A2.383,2.383,0,0,0,25.8,2.989Zm-1.03,2.459c-.185.183-3.435,3.15-3.605,3.305l-.132.109a1.405,1.405,0,0,1-.291.21.939.939,0,0,1-1.027-.161L18.291,7.593a3.955,3.955,0,0,0-.948-.678,1.7,1.7,0,0,0-.682-.146,1.728,1.728,0,0,0-1.205.552L7.072,16.342a1.644,1.644,0,0,0-.3,1.484,2.729,2.729,0,0,0,.776,1.322l1.427,1.333a.866.866,0,0,1,.22.339,1,1,0,0,1-.01.693,1.106,1.106,0,0,1-.16.268,1,1,0,0,0-.059.084c-.288.371-2.9,3.7-3.057,3.881a1.38,1.38,0,0,1-.386.19,1.1,1.1,0,0,1-.319.04.835.835,0,0,1-.209-.02A1.621,1.621,0,0,1,4.6,25.8c-.052-.052-.141-.16-.157-.178a13.181,13.181,0,0,1-2.485-3.955,5.636,5.636,0,0,1-.354-1.753c-.08-2.934,3.434-7.786,6.467-11.05S15.69,1.746,18.624,1.611c2.115-.1,4.392,1.277,5.894,2.41l.058.043c.034.025.1.071.126.094a1.008,1.008,0,0,1,.1.148,1.162,1.162,0,0,1,.081.431A2.411,2.411,0,0,1,24.773,5.448Z"
                                            fill="#2d2d2d"/></g></g></svg></span> +880 0123 456 789
                    </p>
                    <p class="mb-0"><span><svg xmlns="http://www.w3.org/2000/svg" width="26.814" height="26.239"
                                               viewBox="0 0 26.814 26.239"><path
                                    d="M26.5,13.313a1.048,1.048,0,0,1-1.481,0l-.828-.834v3.814a1.047,1.047,0,1,1-2.095,0V10.366L14.135,2.347a1.047,1.047,0,0,0-1.359,0L4.712,10.392c0,.01,0,.02,0,.03v11.1A2.1,2.1,0,0,0,6.808,23.62H8.117a1.047,1.047,0,1,1,0,2.095H6.808a4.194,4.194,0,0,1-4.19-4.19V12.481l-.831.83a1.047,1.047,0,0,1-1.48-1.483L11.321.837,11.364.8A3.14,3.14,0,0,1,15.553.8L15.6.846,26.51,11.831a1.047,1.047,0,0,1,0,1.481Zm-3.357,7.165A1.047,1.047,0,0,0,22.1,21.525a2.1,2.1,0,0,1-2.095,2.095H18.7a1.047,1.047,0,1,0,0,2.095h1.309a4.194,4.194,0,0,0,4.19-4.19A1.047,1.047,0,0,0,23.148,20.478Zm-3.142-3.831c0,2.8-1.671,4.608-3.284,6.351a19.438,19.438,0,0,0-2.249,2.752,1.048,1.048,0,0,1-.885.488h-.36a1.048,1.048,0,0,1-.885-.488A19.438,19.438,0,0,0,10.092,23c-1.613-1.744-3.281-3.547-3.284-6.349a6.6,6.6,0,0,1,13.2,0Zm-2.095,0a4.5,4.5,0,0,0-9.008,0c0,1.981,1.2,3.281,2.727,4.926.6.645,1.209,1.306,1.777,2.048.568-.741,1.18-1.4,1.777-2.048,1.522-1.646,2.725-2.945,2.727-4.929ZM13.36,13.774a2.88,2.88,0,0,0,0,5.761,1.047,1.047,0,1,0,0-2.095.786.786,0,1,1,.786-.786,1.047,1.047,0,1,0,2.095,0A2.884,2.884,0,0,0,13.36,13.774Zm0,0"
                                    transform="translate(0 0)" fill="#2d2d2d"/></svg></span> Road no., Block
                        no.,
                        District, Country
                    </p>
                </div>
            </div>
            <div class="col-md-3 view_designwala_profileCol">
                <div class="card text-center">
                    <p>Joined : 6 Months Ago</p>
                    <div class="bg-danger text-white">
                        Already Assigned
                    </div>
                    <button class="btn colorOne">Contact</button>
                </div>
            </div>
            <div class="col-md-2 view_designwala_profileCol">
                <div class="card text-center">
                    <h5>Earn</h5>
                    <h4 class="colorOne">$50</h4>
                    <div>
                        <button type="button" class="btn btn-success  ">Withdraw</button>
                    </div>
                </div>
            </div>
            .
        </div>


        <div class="SectionDataTable bg-white">
            <div class="row justify-content-center m-0 py-3  rounded">
                <div class="col-xl-9 col-lg-8 col-md-8 v-center">
                    <div class="">
                        <h2 class="  m-0">Last Orders</h2></div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 v-center">
                    <div class="text-right">
                        <div class="adminPageDetailsSearch">
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder=""
                                       aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn " type="button" id="button-addon2">
                                    <svg id="magnifying-glass" xmlns="http://www.w3.org/2000/svg" width="20.16"
                                         height="20.164" viewBox="0 0 20.16 20.164">
                                        <path id="Path_42" data-name="Path 42"
                                              d="M20.036,19.136l-4.9-4.9a8.6,8.6,0,1,0-.849.849l4.9,4.9a.608.608,0,0,0,.425.179.589.589,0,0,0,.425-.179A.6.6,0,0,0,20.036,19.136ZM1.253,8.6a7.391,7.391,0,1,1,7.391,7.4A7.4,7.4,0,0,1,1.253,8.6Z"
                                              transform="translate(-0.05 0)" fill="#272d3b"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"></div>
            <div class="row m-0 py-3">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-4">
                            show <select class="custom-select custom-select-sm ">
                                <option selected="">15</option>
                                <option value="1">25</option>
                                <option value="2">50</option>
                                <option value="3">100</option>
                            </select>
                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-5">
                            status
                            <select class="custom-select custom-select-sm w-50">
                                <option selected="">All</option>
                                <option value="1">Not assigned</option>
                                <option value="2">Ongoing</option>
                                <option value="3">Delivered</option>
                                <option value="3">Completed</option>

                            </select>
                        </div>
                    </div>
                </div>


                <div class="col"></div>
                <div class="col-md-4">
                    <div class="tablesPagination">
                        <nav aria-label="Page navigation example ">
                            <ul class="pagination justify-content-end mb-0 ">
                                <li class="page-item ">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                             class="bi bi-chevron-left" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                             class="bi bi-chevron-right" fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row m-0 py-3 bg-white ">
                <div class="col-md-12">
                    <div class="designwalsDataTables text-center">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Client Name</th>

                                <th scope="col">Service Name</th>
                                <th scope="col">amount</th>

                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01.</td>
                                <td>XYZ</td>

                                <td> Logo Design</td>
                                <td> $100</td>

                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabRED"><span class="">
                                            Not assigned</span></div>
                                </td>
                                <td>
                                    <a href="{{ route('super_admin.doer.show') }}" class="btn m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.661" height="12.39"
                                             viewBox="0 0 16.661 12.39">
                                            <g transform="translate(-1 -5.5)">
                                                <path
                                                    d="M1.5,11.695S4.347,6,9.33,6s7.83,5.695,7.83,5.695S14.313,17.39,9.33,17.39,1.5,11.695,1.5,11.695Z"
                                                    transform="translate(0)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1"></path>
                                                <path
                                                    d="M17.771,15.636A2.136,2.136,0,1,1,15.636,13.5,2.136,2.136,0,0,1,17.771,15.636Z"
                                                    transform="translate(-6.305 -3.941)" fill="none"
                                                    stroke="#000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>01.</td>
                                <td>XYZ</td>

                                <td> Logo Design</td>
                                <td> $100</td>

                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabLightSKY"><span class="">
                                            pending</span></div>
                                </td>
                                <td>
                                    <a href="{{ route('super_admin.doer.show') }}" class="btn m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.661" height="12.39"
                                             viewBox="0 0 16.661 12.39">
                                            <g transform="translate(-1 -5.5)">
                                                <path
                                                    d="M1.5,11.695S4.347,6,9.33,6s7.83,5.695,7.83,5.695S14.313,17.39,9.33,17.39,1.5,11.695,1.5,11.695Z"
                                                    transform="translate(0)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1"></path>
                                                <path
                                                    d="M17.771,15.636A2.136,2.136,0,1,1,15.636,13.5,2.136,2.136,0,0,1,17.771,15.636Z"
                                                    transform="translate(-6.305 -3.941)" fill="none"
                                                    stroke="#000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>01.</td>
                                <td>XYZ</td>

                                <td> Logo Design</td>
                                <td> $100</td>

                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabORANGE"><span class="">
                                            Delivered</span></div>
                                </td>
                                <td>
                                    <a href="{{ route('super_admin.doer.show') }}" class="btn m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.661" height="12.39"
                                             viewBox="0 0 16.661 12.39">
                                            <g transform="translate(-1 -5.5)">
                                                <path
                                                    d="M1.5,11.695S4.347,6,9.33,6s7.83,5.695,7.83,5.695S14.313,17.39,9.33,17.39,1.5,11.695,1.5,11.695Z"
                                                    transform="translate(0)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1"></path>
                                                <path
                                                    d="M17.771,15.636A2.136,2.136,0,1,1,15.636,13.5,2.136,2.136,0,0,1,17.771,15.636Z"
                                                    transform="translate(-6.305 -3.941)" fill="none"
                                                    stroke="#000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>01.</td>
                                <td>XYZ</td>

                                <td> Logo Design</td>
                                <td> $100</td>

                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabGREEN"><span class="">
                                            Completed</span></div>
                                </td>
                                <td>
                                    <a href="{{ route('super_admin.doer.show') }}" class="btn m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.661" height="12.39"
                                             viewBox="0 0 16.661 12.39">
                                            <g transform="translate(-1 -5.5)">
                                                <path
                                                    d="M1.5,11.695S4.347,6,9.33,6s7.83,5.695,7.83,5.695S14.313,17.39,9.33,17.39,1.5,11.695,1.5,11.695Z"
                                                    transform="translate(0)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1"></path>
                                                <path
                                                    d="M17.771,15.636A2.136,2.136,0,1,1,15.636,13.5,2.136,2.136,0,0,1,17.771,15.636Z"
                                                    transform="translate(-6.305 -3.941)" fill="none"
                                                    stroke="#000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>01.</td>
                                <td>XYZ</td>
                                <td> Logo Design</td>
                                <td> $100</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabBLUE"><span class="">
                                            Ongoing</span></div>
                                </td>
                                <td>
                                    <a href="{{ route('super_admin.doer.show') }}" class="btn m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.661" height="12.39"
                                             viewBox="0 0 16.661 12.39">
                                            <g transform="translate(-1 -5.5)">
                                                <path
                                                    d="M1.5,11.695S4.347,6,9.33,6s7.83,5.695,7.83,5.695S14.313,17.39,9.33,17.39,1.5,11.695,1.5,11.695Z"
                                                    transform="translate(0)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1"></path>
                                                <path
                                                    d="M17.771,15.636A2.136,2.136,0,1,1,15.636,13.5,2.136,2.136,0,0,1,17.771,15.636Z"
                                                    transform="translate(-6.305 -3.941)" fill="none"
                                                    stroke="#000" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </a>
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
