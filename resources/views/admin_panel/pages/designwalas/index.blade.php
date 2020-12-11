@extends('admin_panel.layouts.app')
@section('title', 'Designwalas')

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
                        <button type="button" class="btn shadow bg-white rounded" data-toggle="modal"
                                data-target="#designwala_invitation"> <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.672"
                                     viewBox="0 0 12.672 12.672">
                                    <path
                                        d="M20.848,14.512H16.09V9.754a.789.789,0,0,0-1.578,0v4.758H9.754a.789.789,0,0,0,0,1.578h4.758v4.758a.789.789,0,0,0,1.578,0V16.09h4.758a.789.789,0,0,0,0-1.578Z"
                                        transform="translate(-8.965 -8.965)" fill="#000"></path>
                                </svg></span> Invitation
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1 boxshadow rounded">
                <div class="col-xl-9 col-lg-8 col-md-8 v-center">
                    <div class="">
                        <h2 class="  m-0">Designwalas </h2></div>
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
        <div class="SectionDataTable">
            <div class="row m-0 py-3 bg-white ">
                <div class="col-md-12">
                    <div class="designwalsDataTables text-center">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">User name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Work Status</th>
                                <th scope="col">Status</th>
                                <th scope="col">Completed</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="text-center designwalaUserActive active" style=""><span
                                            class="position-relative">XYZ
                                            <div class="dashDesignwalaActiveSVG">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                     height="11" viewBox="0 0 11 11">
                                                    <rect width="11" height="11" rx="5.5"
                                                          fill="#038d08"></rect>
                                                </svg>
                                            </div>
                                        </span></div>
                                </td>
                                <td>XYZ@gmail.com</td>
                                <td>Graphic Design</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab  tabletabRED"><span class=""> Assigned <span> (5)</span></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabGREEN"><span
                                            class="">Verified</span></div>
                                </td>
                                <td>000</td>
                                <td>
                                    <a href="{{ route('designwalas.designwala.show') }}" class="btn m-0 p-0">
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
                                                    transform="translate(-6.305 -3.941)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center designwalaUserActive " style=""><span
                                            class="position-relative">XYZ
                                            <div class="dashDesignwalaActiveSVG">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                     height="11" viewBox="0 0 11 11">
                                                    <rect width="11" height="11" rx="5.5"
                                                          fill="#038d08"></rect>
                                                </svg>
                                            </div>
                                        </span></div>
                                </td>
                                <td>XYZ@gmail.com</td>
                                <td>Graphic Design</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab  tabletabGREEN"><span
                                            class="">Available</span></div>
                                </td>
                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabBLUE"><span class="">Invited</span>
                                    </div>
                                </td>
                                <td>000</td>
                                <td>
                                    <a href="{{ route('designwalas.designwala.show') }}" class="btn m-0 p-0">
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
                                                    transform="translate(-6.305 -3.941)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="1"></path>
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
    @include('admin_panel.includes.modal.designwala_invitation')
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
