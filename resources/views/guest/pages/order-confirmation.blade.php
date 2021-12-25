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
                                <div class="col-md-12">
                                    <div class="confirmedCheckIMg"> <img src="{{ asset('_assets/_guest/img/confirmationpage/confirmationimg.svg') }}" class="card-img " alt="designwala"> </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        @if($orderData['status'] == 'success')
                                            <h4 class="card-title">Dear {{ $orderData['data']->users->name }}, {{ $orderData['message'] }}</h4>
                                            <p class="card-text mb-4">We will assign a Designwala who will communicate with you within the next 24 hours </p>
                                        @else
                                            <h4 class="card-title">{{ $orderData['title'] }}</h4>
                                            <p class="card-text mb-4">{{ $orderData['message'] }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            {{-- Pending Orders Section Start--}}
            <div class="row pending-order">
                <div class="col-sm-3 col-md-3 col-lg-2 col-xl-3 col-xxl-2">
                    <div class="pending-order-img">
                        <img src="{{ showImage($orderData['data']->services->first(), 'service') /*asset('_assets/_guest/img/confirmationpage/order-img.svg')*/ }}" alt="confirm" class="dashboard img-fluid">
                    </div>
                </div>
                <div class="d-none d-sm-block d-md-none col-sm-9 col-md-12 col-lg-3 col-xl-3">
                    <div class="order-status">
                        <p>Order ID : <br> #{{ $orderData['data']->order_number }}</p>
                        <p>Order Date : {{ formatDMY($orderData['data']->updated_at) }}</p>
                    </div>
                </div>
                <div class="col-md-9 col-lg-7 col-xl-6 col-xxl-7">
                    <div class="requirement-details">
                        <h3>{{ $orderData['data']->services->title }}</h3>
                        <div class="row">
                            <div class="col-sm-6 col-xl-5 col-xxl-4">
                                <div class="orders-info">
                                    <p>Order ID: <br> #{{ $orderData['data']->order_number }}</p>
                                    <p>Price: ${{ $orderData['data']->services->price }}</p>
                                    @if(!empty($orderData['data']->applied_coupon))
                                        <p>Promo Code: {{ $orderData['data']->applied_coupon }}</p>
                                    @endif
                                    <p>Payment Method: {{ ucwords($orderData['data']->payments->payment_method) }}</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-6 col-xxl-5">
                                <div class="orders-info">
                                    <p>Delivery Time: {{ $orderData['data']->services->delivery_time }} days</p>
                                    <p>Revisions: {{ $orderData['data']->services->revision_limit }}</p>
                                    <p>Transaction ID : {{ $orderData['data']->payments->transaction_id  }}</p>
                                    <p>Payment Status : {{ $orderData['data']->payments->payment_status }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-none d-md-block col-md-12 col-lg-3 col-xxl-3">
                    <div class="order-status">
                        <p>Order ID : <br> #{{ $orderData['data']->order_number }}</p>
                        <p>Order Date : {{ formatDMY($orderData['data']->updated_at) }}</p>
                    </div>
                </div>
            </div>
        {{-- Pending Orders Section End--}}
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
