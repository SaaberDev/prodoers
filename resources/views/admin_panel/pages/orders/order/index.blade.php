@extends('admin_panel.layouts.app')
@section('title', 'Orders')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style" >
        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-12 col-sm-8  v-center">
                    <!-- breadcrumb  -->
                    @include('admin_panel.includes.breadcrumb')
                </div>
            </div>
        </div>
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1 boxshadow rounded">
                <div class="col-xl-9 col-lg-8 col-md-8 v-center">
                    <div class="">
                        <h2 class="  m-0">Total Orders</h2> </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 v-center">
                    <div class="text-right">
                        <div class="adminPageDetailsSearch">
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn " type="button" id="button-addon2">
                                    <svg id="magnifying-glass" xmlns="http://www.w3.org/2000/svg" width="20.16" height="20.164" viewBox="0 0 20.16 20.164">
                                        <path id="Path_42" data-name="Path 42" d="M20.036,19.136l-4.9-4.9a8.6,8.6,0,1,0-.849.849l4.9,4.9a.608.608,0,0,0,.425.179.589.589,0,0,0,.425-.179A.6.6,0,0,0,20.036,19.136ZM1.253,8.6a7.391,7.391,0,1,1,7.391,7.4A7.4,7.4,0,0,1,1.253,8.6Z" transform="translate(-0.05 0)" fill="#272d3b" /> </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
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
                        <div class="col-xl-5 col-lg-4 col-md-4 "> Payment Method
                            <select class="custom-select custom-select-sm ">
                                <option selected="">ALL</option>
                                <option value="1">Nogod</option>
                                <option value="2">Visa</option>
                                <option value="3">Mastercard</option>
                                <option value="4">Bkash</option>
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-8 "> status
                            <select class="custom-select custom-select-sm ">
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
                                <th scope="col">Order ID</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Assigned to</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01.</td>
                                <td>XYZ</td>
                                <td>XYZ</td>
                                <td> Logo Design </td>
                                <td> $100 <span class="text-danger">&#40; - $15 &#41;</span> </td>
                                <td>Bkash</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabRED"><span class="">
                                                            Not assigned</span></div>
                                </td>
                                <td>
                                    <a href="{{ route('orders.order.show') }}" class="btn m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.661" height="12.39" viewBox="0 0 16.661 12.39">
                                            <g transform="translate(-1 -5.5)">
                                                <path d="M1.5,11.695S4.347,6,9.33,6s7.83,5.695,7.83,5.695S14.313,17.39,9.33,17.39,1.5,11.695,1.5,11.695Z" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                <path d="M17.771,15.636A2.136,2.136,0,1,1,15.636,13.5,2.136,2.136,0,0,1,17.771,15.636Z" transform="translate(-6.305 -3.941)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>01.</td>
                                <td>XYZ</td>
                                <td>XYZ</td>
                                <td> Logo Design </td>
                                <td> $100 <span class="text-danger">&#40; - $15 &#41;</span> </td>
                                <td>Bkash</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabLightSKY"><span class="">
                                                            Ongoing</span></div>
                                </td>
                                <td>
                                    <a href="{{ route('orders.order.show') }}" class="btn m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.661" height="12.39" viewBox="0 0 16.661 12.39">
                                            <g transform="translate(-1 -5.5)">
                                                <path d="M1.5,11.695S4.347,6,9.33,6s7.83,5.695,7.83,5.695S14.313,17.39,9.33,17.39,1.5,11.695,1.5,11.695Z" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                <path d="M17.771,15.636A2.136,2.136,0,1,1,15.636,13.5,2.136,2.136,0,0,1,17.771,15.636Z" transform="translate(-6.305 -3.941)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>01.</td>
                                <td>XYZ</td>
                                <td>XYZ</td>
                                <td> Logo Design </td>
                                <td> $100 </td>
                                <td>Bkash</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabORANGE"><span class="">
                                                            Delivered</span></div>
                                </td>
                                <td>
                                    <a href="{{ route('orders.order.show') }}" class="btn m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.661" height="12.39" viewBox="0 0 16.661 12.39">
                                            <g transform="translate(-1 -5.5)">
                                                <path d="M1.5,11.695S4.347,6,9.33,6s7.83,5.695,7.83,5.695S14.313,17.39,9.33,17.39,1.5,11.695,1.5,11.695Z" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                <path d="M17.771,15.636A2.136,2.136,0,1,1,15.636,13.5,2.136,2.136,0,0,1,17.771,15.636Z" transform="translate(-6.305 -3.941)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>01.</td>
                                <td>XYZ</td>
                                <td>XYZ</td>
                                <td> Logo Design </td>
                                <td> $100 </td>
                                <td>Bkash</td>
                                <td>
                                    <div class="tableDataLastButtonLiketab   tabletabGREEN"><span class="">
                                                            Completed</span></div>
                                </td>
                                <td>
                                    <a href="{{ route('orders.order.show') }}" class="btn m-0 p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.661" height="12.39" viewBox="0 0 16.661 12.39">
                                            <g transform="translate(-1 -5.5)">
                                                <path d="M1.5,11.695S4.347,6,9.33,6s7.83,5.695,7.83,5.695S14.313,17.39,9.33,17.39,1.5,11.695,1.5,11.695Z" transform="translate(0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                <path d="M17.771,15.636A2.136,2.136,0,1,1,15.636,13.5,2.136,2.136,0,0,1,17.771,15.636Z" transform="translate(-6.305 -3.941)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
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
