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
                                        <h4 class="card-title">Dear Client's name, your order has been placed
                                            successfully!</h4>
                                        <p class="card-text mb-4">We will assign a Designwala who will communicate with you within the next 24 hours </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <!--Pending Orders Section Start-->
            <div class="row pending-order">
                <div class="col-sm-3 col-md-3 col-lg-2 col-xl-3 col-xxl-2">
                    <div class="pending-order-img">
                        <img src="{{ asset('_assets/_guest/img/confirmationpage/order-img.svg') }}" alt="confirm" class="dashboard img-fluid">
                    </div>
                </div>
                <div class="d-none d-sm-block d-md-none col-sm-9 col-md-12 col-lg-3 col-xl-3">
                    <div class="order-status">
                        <p>Order ID : <br> #{{ $orderData['data']->order_number }}</p>
                        <p>Order Date : 05.05.2021</p>
                    </div>
                </div>
                <div class="col-md-9 col-lg-7 col-xl-6 col-xxl-7">
                    <div class="requirement-details">
                        <h3>Social Media Post Design</h3>
                        <div class="row">
                            <div class="col-sm-6 col-xl-5 col-xxl-4">
                                <div class="orders-info">
                                    <p>Order ID: #{{ $orderData['data']->order_number }}</p>
                                    <p>Price: $60</p>
                                    <p>Promo Code: XYZ123</p>
                                    <p>Payment Method: Bkash</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-6 col-xxl-5">
                                <div class="orders-info">
                                    <p>Delivery Time: 4 days</p>
                                    <p>Revisions: 2</p>
                                    <p>Transaction ID : ABC456</p>
                                    <p>Payment Status : Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-none d-md-block col-md-12 col-lg-3 col-xxl-3">
                    <div class="order-status">
                        <p>Order ID : #{{ $orderData['data']->order_number }}</p>
                        <p>Order Date : {{ formatDMY($orderData['data']->updated_at) }}</p>
                    </div>
                </div>
            </div>
            <!--Pending Orders Section End-->



        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
