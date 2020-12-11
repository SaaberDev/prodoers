@extends('admin_panel.layouts.app')
@section('title', 'page_name')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style">
        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-8 col-sm-8  v-center">
                    <!-- breadcrumb  -->
                    @include('admin_panel.includes.breadcrumb')
                </div>
                <div class="col-md-4 col-sm-4  v-center">
                    <div class="text-right">
                        <a href="#" class="btn shadow bg-white rounded" data-toggle="modal"
                           data-target="#add_email"> <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.672"
                                     viewBox="0 0 12.672 12.672">
                                    <path
                                        d="M20.848,14.512H16.09V9.754a.789.789,0,0,0-1.578,0v4.758H9.754a.789.789,0,0,0,0,1.578h4.758v4.758a.789.789,0,0,0,1.578,0V16.09h4.758a.789.789,0,0,0,0-1.578Z"
                                        transform="translate(-8.965 -8.965)" fill="#000"></path>
                                </svg></span> Add New Email </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1 boxshadow rounded">
                <div class="col-xl-9 col-lg-8 col-md-8 v-center">
                    <div class="">
                        <h2 class="  m-0">All Emails </h2></div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 v-center">
                    <div class="text-right">
                        <div class="adminPageDetailsSearch">
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username"
                                       aria-describedby="button-addon2">
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
        </div>
        <div class="selectsOptions">
            <div class="row m-0 py-3">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-4 "> show
                            <select class="custom-select custom-select-sm ">
                                <option selected="">15</option>
                                <option value="1">25</option>
                                <option value="2">50</option>
                                <option value="3">100</option>
                            </select>
                        </div>
                        <div class="col-xl-5 col-lg-4 col-md-4 "> User Type
                            <select class="custom-select custom-select-sm ">
                                <option selected="">ALL</option>
                                <option value="1">Client</option>
                                <option value="2">Designwala</option>
                                <option value="3">Subscriber</option>
                                <option value="4">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col-md-4">
                    <!-- pagination -->
                    @include('admin_panel.includes.pagination')
                </div>
            </div>
        </div>
        <div class="SectionDataTable ">
            <div class="row m-0 py-3 bg-white ">
                <div class="col-md-12">
                    <div class="designwalsDataTables text-center">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">user type</th>
                                <th scope="col">joined</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>XYZ</td>
                                <td>XYZ</td>
                                <td>username@gmail.com</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab  tabletabCREEAM text-dark"><span class=""> Client </span>
                                    </div>
                                </td>
                                <td> 09.09.20</td>
                                <td><a href="{{ route('promotions.email_marketing.create') }}"
                                       class="btn   tabletabGREEN border-0 p-0 m-0 text-white px-3"> Compose</a></td>
                            </tr>
                            <tr>
                                <td>XYZ</td>
                                <td>XYZ</td>
                                <td>username@gmail.com</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab  tabletabCREEAM text-dark"><span class=""> Designwala </span>
                                    </div>
                                </td>
                                <td> 09.09.20</td>
                                <td><a href="{{ route('promotions.email_marketing.create') }}"
                                       class="btn   tabletabGREEN border-0 p-0 m-0 text-white px-3"> Compose</a></td>
                            </tr>
                            <tr>
                                <td>XYZ</td>
                                <td>XYZ</td>
                                <td>username@gmail.com</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab  tabletabCREEAM text-dark"><span class=""> Subscriber </span>
                                    </div>
                                </td>
                                <td> 09.09.20</td>
                                <td><a href="{{ route('promotions.email_marketing.create') }}"
                                       class="btn   tabletabGREEN border-0 p-0 m-0 text-white px-3"> Compose</a></td>
                            </tr>
                            <tr>
                                <td>XYZ</td>
                                <td>XYZ</td>
                                <td>username@gmail.com</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab  tabletabCREEAM text-dark"><span class=""> Client </span>
                                    </div>
                                </td>
                                <td> 09.09.20</td>
                                <td><a href="{{ route('promotions.email_marketing.create') }}"
                                       class="btn   tabletabGREEN border-0 p-0 m-0 text-white px-3"> Compose</a></td>
                            </tr>
                            <tr>
                                <td>XYZ</td>
                                <td>XYZ</td>
                                <td>username@gmail.com</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab  tabletabCREEAM text-dark"><span class=""> other </span>
                                    </div>
                                </td>
                                <td> 09.09.20</td>
                                <td><a href="{{ route('promotions.email_marketing.create') }}"
                                       class="btn   tabletabGREEN border-0 p-0 m-0 text-white px-3"> Compose</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin_panel.includes.modal.add_email')
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
