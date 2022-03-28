@extends('guest.layouts.app')
@section('title', 'category_name')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="confirmationCheck">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-xxl-8 offset-xl-1 offset-xxl-2">
                    <div class="confirmed">
                        <div class="card mb-3" style="">
                            <div class="row">
                                @if(request('status') === 'success')
                                    <div class="col-md-12">
                                        <div class="confirmedCheckIMg"> <img src="{{ asset('_assets/_guest/img/confirmationpage/confirmationimg.svg') }}" class="card-img " alt="designwala"> </div>
                                    </div>
                                @else
                                    <div class="col-md-12">
                                        <div class="confirmedCheckIMg"> <img src="{{ asset('_assets/_guest/img/confirmationpage/confirmationimg.svg') }}" class="card-img " alt="designwala"> </div>
                                    </div>
                                @endif
                                <div class="col-md-12">
                                    <div class="card-body">
                                        @if(request('status') === 'success')
                                            <h4 class="card-title">{{ request('title') }}</h4>
                                            <p class="card-text mb-4">Dear {{ $order->users->name }}, {{ request('message') }} </p>
                                            <p class="card-text mb-4">We will assign a Doer who will communicate with you within the next 24 hours </p>
                                        @else
                                            <h4 class="card-title">{{ request('title') }}</h4>
                                            <p class="card-text mb-4">{{ request('message') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            {{-- Pending Orders Section Start--}}
            @if(request('status') === 'success')
                <div class="row pending-order">
                    <div class="col-sm-3 col-md-3 col-lg-2 col-xl-3 col-xxl-2">
                        <div class="pending-order-img">
                            <img src="{{ showImage($order->services->first(), 'service') /*asset('_assets/_guest/img/confirmationpage/order-img.svg')*/ }}" alt="confirm" class="dashboard img-fluid">
                        </div>
                    </div>
                    <div class="d-none d-sm-block d-md-none col-sm-9 col-md-12 col-lg-3 col-xl-3">
                        <div class="order-status">
                            <p>Order ID : <br> #{{ $order->order_number }}</p>
                            <p>Order Date : {{ formatDMY($order->updated_at) }}</p>
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-7 col-xl-6 col-xxl-7">
                        <div class="requirement-details">
                            <h3>{{ $order->services->title }}</h3>
                            <div class="row">
                                <div class="col-sm-6 col-xl-5 col-xxl-4">
                                    <div class="orders-info">
                                        <p>Order ID: <br> #{{ $order->order_number }}</p>
                                        <p>Price: ${{ $order->services->price }}</p>
                                        @if(!empty($order->applied_coupon))
                                            <p>Promo Code: {{ $order->applied_coupon }}</p>
                                        @endif
                                        <p>Payment Method: {{ ucwords($order->payments->payment_status) }}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-6 col-xxl-5">
                                    <div class="orders-info">
                                        <p>Delivery Time: {{ $order->services->delivery_time }} days</p>
                                        <p>Revisions: {{ $order->services->revision_limit }}</p>
                                        <p>Transaction ID : {{ $order->payments->transaction_id  }}</p>
                                        <p>Payment Status : {{ $order->payments->payment_status }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-none d-md-block col-md-12 col-lg-3 col-xxl-3">
                        <div class="order-status">
                            <p>Order ID : <br> #{{ $order->order_number }}</p>
                            <p>Order Date : {{ formatDMY($order->updated_at) }}</p>
                        </div>
                    </div>
                </div>
            @endif
            {{-- Pending Orders Section End--}}
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
