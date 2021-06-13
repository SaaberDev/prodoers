@extends('admin_panel.layouts.app')
@section('title', 'Order Details')

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
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="  m-0">View Order </h2>
                    </div>
                </div>

            </div>
        </div>
        <div class="boxshadow rounded my-4">
            <div class="row m-0 py-3">
                <div class="col-md-6">
                    <div class="">
                        <div class="card p-5" style="">
                            <div class="row no-gutters">
                                <div class="col-md-4"> <img src="img/devimg/rectangletwo.png" class="card-img" alt="..."> </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title m-0">{{ $order->services->title }}</h4>
                                        <p class="card-text m-0">Order ID : #{{ $order->order_number }}</p>
                                        <p class="card-text m-0">Amount&#40; USD &#41; : ${{ $order->payments->paid_amount }} <span> &#40; -${{ $order->payments->discount }} &#41;</span></p>
                                        <p class="card-text m-0">Promo Code : {{ $order->applied_coupon }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row p-4 border">
                        <div class="col-md-8">
                            <div class="">
                                <h4>John Smith</h4>
                                <p class="m-0">username@gmail.com</p>
                                <p class="pt-4 m-0">Transaction ID : #{{ $order->payments->transaction_id }}</p>
                                <p class="m-0">Payment method : {{ $order->payments->payment_method }}</p>
                                <p class="m-0">Assigned To : @username</p>
                            </div>
                        </div>
                        <div class="col-md-4 v-center">
                            <div class="text-center">
                                <button class="btn border shadow py-2 btn-block" data-toggle="modal" data-target="#assignorder">Assign Order <span class="pl-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.882" height="17.283" viewBox="0 0 9.882 17.283">
                                                        <path d="M18.149,14.834,11.609,8.3a1.23,1.23,0,0,1,0-1.744,1.245,1.245,0,0,1,1.749,0l7.41,7.4a1.233,1.233,0,0,1,.036,1.7l-7.441,7.456a1.235,1.235,0,0,1-1.749-1.744Z" transform="translate(-11.246 -6.196)" />
                                                    </svg></span></button>
                            </div>
                            <div class="text-center">
                                <button class="btn border shadow py-2 btn-block">accept<span class="pl-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.882" height="17.283" viewBox="0 0 9.882 17.283">
                                                        <path d="M18.149,14.834,11.609,8.3a1.23,1.23,0,0,1,0-1.744,1.245,1.245,0,0,1,1.749,0l7.41,7.4a1.233,1.233,0,0,1,.036,1.7l-7.441,7.456a1.235,1.235,0,0,1-1.749-1.744Z" transform="translate(-11.246 -6.196)" />
                                                    </svg></span></button>
                            </div>
                            <div class="text-center">
                                <button class="btn border shadow py-2 btn-block">Cancel<span class="pl-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.882" height="17.283" viewBox="0 0 9.882 17.283">
                                                        <path d="M18.149,14.834,11.609,8.3a1.23,1.23,0,0,1,0-1.744,1.245,1.245,0,0,1,1.749,0l7.41,7.4a1.233,1.233,0,0,1,.036,1.7l-7.441,7.456a1.235,1.235,0,0,1-1.749-1.744Z" transform="translate(-11.246 -6.196)" />
                                                    </svg></span></button>
                            </div>
                            <div class="text-center pt-5">
                                <p class="tabletabLightSKY text-white font-weight-bold">ongoing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="boxshadow rounded my-4">
            <div class="row  m-0 py-3">
                <div class="col-md-7 clearfix">
                    <h5>Order Requirements</h5>
                    <div class="w-100">
                        <div class="w-50 float-left">Brand Name</div>
                        <div class="w-50 float-left">XDesigns</div>
                    </div>
                    <div class="w-100">
                        <div class="w-50 float-left">Tagline</div>
                        <div class="w-50 float-left">Lorem ipsum is simply dummy text </div>
                    </div>
                    <div class="w-100">
                        <div class="w-50 float-left">Tagline</div>
                        <div class="w-50 float-left">Lorem ipsum is simply dummy text </div>
                    </div>
                </div>
            </div>
            <div class="   ">
                <div class="row  m-0 py-3">
                    <div class="col-md-6"><h5>Image</h5> </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                                    <g transform="translate(-3 -3)">
                                        <path d="M31.5,22.5v6a3,3,0,0,1-3,3H7.5a3,3,0,0,1-3-3v-6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                        <path d="M10.5,15,18,22.5,25.5,15" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                        <path d="M18,22.5V4.5" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="row m-0 py-3 previewimgTwo" style="list-style: none;">
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>

                </ul>
            </div>
            <div class="   ">
                <div class="row  m-0 py-3">
                    <div class="col-md-6"><h5>Image</h5> </div>
                    <div class="col-md-6">
                        <div class="text-right">
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                                    <g transform="translate(-3 -3)">
                                        <path d="M31.5,22.5v6a3,3,0,0,1-3,3H7.5a3,3,0,0,1-3-3v-6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                        <path d="M10.5,15,18,22.5,25.5,15" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                        <path d="M18,22.5V4.5" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="row m-0 py-3 previewimgTwo" style="list-style: none;">
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="img/devimg/rectangle.png" alt=""></a>
                    </li>

                </ul>
            </div>
            <div class="row  m-0 py-3">
                <div class="col-md-3">Additional Requirements </div>
                <div class="col-md-9"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore </div>
            </div>
        </div>
    </div>

    @include('admin_panel.includes.modal.assign_orders')
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
