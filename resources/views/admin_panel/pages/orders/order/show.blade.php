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
                                <div class="col-md-4"> <img src="{{ optional($order_details['service_info'])->service_thumb }}" class="card-img" alt="..."> </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title m-0">{{ $order_details['service_info']->service_name }}</h4>
                                        <p class="card-text m-0">Order ID : #{{ $order_details['order_info']->order_number }}</p>
                                        <p class="card-text m-0">Amount&#40; USD &#41; : ${{ $order_details['payment_info']->paid_amount }} <span> &#40; -${{ $order_details['payment_info']->discount }} &#41;</span></p>
                                        <p class="card-text m-0">Promo Code : {{ $order_details['order_info']->applied_coupon }} </p>
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
                                <h4>{{ $order_details['user_info']->name }}</h4>
                                <p class="m-0">{{ $order_details['user_info']->email }}</p>
                                <p class="pt-4 m-0">Transaction ID : #{{ $order_details['payment_info']->transaction_id }}</p>
                                <p class="m-0">Payment method : {{ $order_details['payment_info']->payment_method }}</p>
                                <p class="m-0">Assigned To :
                                    @forelse($order_details['assigned_users'] as $assignUsers)
                                        <span class="tabletabLightSKY text-white font-weight-bold">{{ $assignUsers->username }}</span>
                                        @if(!$loop->last)
                                            ,
                                        @endif
                                    @empty
                                        Not Assigned Yet
                                    @endforelse
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 v-center">
                            <div class="text-center pt-5">
                                <p class="tabletabLightSKY text-white font-weight-bold">{{ $order_details['order_info']->order_status }}</p>
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
                        <div class="w-50 float-left">{{ $order_details['order_info']->requirements }}</div>
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
                    @forelse($order_details['order_info']->attachments as $attachment)
                    <li class="col-md-2 py-3">
                        <a href="#"><img src="{{ $attachment }}" alt="" class="img-thumbnail"></a>
                    </li>
                    @empty
                        No Attachments
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
