@extends('admin_panel.layouts.app')
@section('title', 'Payment Details')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style" >
        <div class="">
            <div class="row  pb-3 m-0">
                <div class="col-md-8 col-sm-8  v-center">
                    <!-- breadcrumb  -->
                    @include('admin_panel.includes.breadcrumb')
                </div>
            </div>
        </div>
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1 boxshadow rounded">
                <div class="col-xl-9 col-lg-8 col-md-8 v-center">
                    <div class="">
                        <h2 class="  m-0">View Payments</h2> </div>
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
        <div class="boxshadow rounded my-4">
            <div class="row m-0 py-3">
                <div class="col-md-12 clearfix">
                    <div class="w-100 ">
                        <div class="w-75 float-left">
                            <h2>Order ID : #DW001</h2> </div>
                        <div class="w-25 float-left">
                            <h2 class="text-right">$500</h2> </div>
                    </div>
                    <div class="">
                        <p class="m-0">John Smith | October 20, 2020</p>
                    </div>
                    <div class="">
                        <p class="m-0">Transaction ID : #DW001</p>
                    </div>
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
                                <th scope="col" style="width: 40%;text-align: left;">service name</th>
                                <th scope="col">currency</th>
                                <th scope="col">discount</th>
                                <th scope="col">total </th>
                                <th scope="col">Payment Method</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="width: 40%;text-align: left;vertical-align: bottom">
                                    <h2 class="m-0">Flyer Design</h2> </td>
                                <td style="vertical-align: bottom">USD</td>
                                <td style="vertical-align: bottom">$50 </td>
                                <td style="vertical-align: bottom"> $500 </td>
                                <td style="vertical-align: bottom"> <img src="img/devimg/paypal.png" alt=""> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="row  m-0 py-3">
                <div class="col-md-12 text-right">
                    <button class="btn bg-white mr-4">PDF</button>
                    <button class="btn bgOne text-white">send invoice</button>
                </div>
            </div>
        </div>
        <div class="">
            <div class="row  m-0 py-3 shadow bg-white mt-3">
                <div class="col-md-12">
                    <h2 class="colorOne mb-0">DESIGNWALA</h2>
                    <P>www.Designwala.net</P>
                </div>
                <div class="col-md-12">
                    <div class="row justify-content-between">
                        <div class="col-md-3">
                            <div class="pt-4">
                                <h6>Invoice To</h6>
                                <h5>David K. Manning</h5>
                                <hr class="hrOne">
                                <div class="clearfix">
                                    <div class="w-100 font13">
                                        <div class="w-30 float-left">Phone NO</div>
                                        <div class="w-70 float-left"> : 01111111100011</div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="w-100 font13">
                                        <div class="w-30 float-left">Email</div>
                                        <div class="w-70 float-left"> : name@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-center">
                                <h1 class="text-uppercase display-4">Invoice</h1>
                                <hr class="hrOne"> </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pt-4">
                                <h6>Total</h6>
                                <h5>TK : 1000</h5>
                                <hr class="hrOne">
                                <div class="clearfix">
                                    <div class="w-100 font13">
                                        <div class="w-30 float-left ">Order ID</div>
                                        <div class="w-70 float-left">: 55gh55jk</div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="w-100 font13">
                                        <div class="w-30 float-left">Invoice No</div>
                                        <div class="w-70 float-left">: 55gh55jk</div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="w-100 font13">
                                        <div class="w-30 float-left">Transaction ID</div>
                                        <div class="w-70 float-left">: 55gh55jk</div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="w-100 font13">
                                        <div class="w-30 float-left">Issues Date</div>
                                        <div class="w-70 float-left">: 25 June 2020</div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="w-100 font13">
                                        <div class="w-30 float-left">Invoice Date</div>
                                        <div class="w-70 float-left">: 25 June 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="SectionDataTable ">
                        <div class="designwalsDataTables text-center py-5">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Discription </th>
                                    <th scope="col">Payment Method </th>
                                    <th scope="col">Price </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Logo design</td>
                                    <td>Bkash </td>
                                    <td> 1000 TK </td>
                                </tr>
                                <tr>
                                    <td> &nbsp; </td>
                                    <td>&nbsp; </td>
                                    <td> <span class="colorOne font-weight-bold">Total : 1000 TK</span> </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="">
                                <h5>Thank You For Your Order</h5>
                                <hr class="hrOne">
                                <div class="clearfix">
                                    <div class="w-100 font13">
                                        <div class="w-30 float-left"> Call </div>
                                        <div class="w-70 float-left"> : </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="w-100 font13">
                                        <div class="w-30 float-left">Email</div>
                                        <div class="w-70 float-left"> : </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="w-100 font13">
                                        <div class="w-30 float-left">Website</div>
                                        <div class="w-70 float-left"> : </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
