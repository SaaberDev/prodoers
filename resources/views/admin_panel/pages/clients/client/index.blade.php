@extends('admin_panel.layouts.app')
@section('title', 'Clients')

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
                        <h2 class="  m-0">Customers</h2></div>
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
                        <div class="col-xl-4 col-lg-4 col-md-4 "> status
                            <select class="custom-select custom-select-sm w-40">
                                <option selected="">ALL</option>
                                <option value="1">Verified</option>
                                <option value="2">Not Verified</option>
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
            <div class="row m-0 py-3 bg-white rounded">
                <div class="col-md-12">
                    <div class="designwalsDataTables text-center">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">customer ID</th>
                                <th scope="col">customer Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Total Spent</th>
                                <th scope="col">Total order</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>#GD-0001</td>
                                <td>XYZ</td>
                                <td>email@.com</td>
                                <td> $100</td>
                                <td> 001</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab  tabletabRED"><span
                                            class="">Not verified </span></div>
                                </td>
                                <td>
                                    <div class="">
                                        <a href="{{ route('super_admin.client.self.show') }}" class="btn p-0 m-0">
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
                                <td>#GD-0001</td>
                                <td>XYZ</td>
                                <td>email@.com</td>
                                <td> $100</td>
                                <td> 001</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabGREEN"><span
                                            class="">Verified</span></div>
                                </td>
                                <td>
                                    <div class="">
                                        <a href="{{ route('super_admin.client.self.show') }}" class="btn p-0 m-0">
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
