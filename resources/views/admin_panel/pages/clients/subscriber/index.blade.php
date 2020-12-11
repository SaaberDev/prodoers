@extends('admin_panel.layouts.app')
@section('title', 'Subscribers')

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
                <div class="col-xl-9 col-lg-8 col-md-8 v-center">
                    <div class="">
                        <h2 class="  m-0">Subscribers</h2></div>
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
                        <div class="col-xl-5 col-lg-4 col-md-4 "> Status
                            <select class="custom-select custom-select-sm ">
                                <option selected="">ALL</option>
                                <option value="1">Subscriber</option>
                                <option value="2">Unsubscribe</option>
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
            <div class="row m-0 py-3 bg-white">
                <div class="col-md-12">
                    <div class="designwalsDataTables text-center">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Serial no</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subscription Date</th>
                                <th scope="col">Subscription Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td>email@gmail.com</td>
                                <td>09.09.20</td>
                                <td>
                                    <button class="btn tableDataLastButtonLiketab  tabletabRED">Unsubscribe</button>
                                </td>
                                <td>
                                    <a class="btn m-0 p-0" data-toggle="modal" data-target="#deletemodal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027"
                                             viewBox="0 0 11.91 16.027">
                                            <path
                                                d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z"
                                                transform="translate(-7 -3)" fill="none" stroke="#000"
                                                stroke-width="1"></path>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>email@gmail.com</td>
                                <td>09.09.20</td>
                                <td>
                                    <button class="btn tableDataLastButtonLiketab   tabletabGREEN">Subscribe</button>
                                </td>
                                <td>
                                    <a class="btn m-0 p-0" data-toggle="modal" data-target="#deletemodal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027"
                                             viewBox="0 0 11.91 16.027">
                                            <path
                                                d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z"
                                                transform="translate(-7 -3)" fill="none" stroke="#000"
                                                stroke-width="1"></path>
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
