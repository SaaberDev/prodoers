@extends('client.layouts.app')
@section('title', 'page_name')

@push('styles')
{{-- Internal Styles --}}

@if(request()->get('page')== 'delivered')

    <link rel="stylesheet" href="{{ asset('_assets/_client/css/start-rating.css') }}">

@endif

@endpush

@section('content')
{{-- Body Content --}}

@if(request()->get('page') == 'pending')

    <section class="dashboard-main">
        <div class="container">
            <!--Breadcrumb-->
            <div class="row breadcrumb-row">
              <div class="col-lg-12">
                  <div class="dashboard">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item" aria-current="page">
                              <a href="{{ route('client.dashboard') }}">Dashboard</a>
                          </li>
                          <li class="breadcrumb-item" aria-current="page">
                              <a href="{{ route('client.order.index') }}">Orders</a>
                          </li>
                          <li class="breadcrumb-item active" aria-current="page">
                              <a href="{{ route('client.order.show', ['order_id'=>$orders['order_number'],'page'=>$orders['order_status']]) }}">{{ $orders['order_number'] }}</a>
                          </li>
                        </ol>
                    </nav>
                  </div>
              </div>
            </div>
            <!--Breadcrumb-->

            <!--Pending Orders Section Start-->
            <div class="row pending-order ">
              <div class="col-sm-4 col-md-3 col-lg-2">
                  <div class="pending-order-img">
                  <img src="{{ asset('_assets/_client/images/pending-order-img.svg') }}" alt="dashboard" class="img-fluid">
                  </div>
              </div>
              <div class="d-none d-sm-block d-md-none col-sm-8 col-md-12 col-lg-3">
                  <div class="order-status">
                  <p>Order Id : {{ $orders['order_number'] }}</p>
                  <p>Order Date : 05.05.2021</p>
                  <p>Status: <span class="pending">Pending</span></p>
                  </div>
              </div>
              <div class="col-sm-12 col-md-9 col-lg-7">
                  <div class="requirement-details">
                  <h3>{{ $orders['services']['title'] }}</h3>
                  <div class="row">
                      <div class="col-sm-6 col-lg-6 col-xxl-4">
                      <div class="orders-info">
                          <p>Order Id: {{ $orders['order_number'] }}</p>
                          <p>Price: ${{ $orders['payments']['paid_amount'] }}</p>
                          @if($orders['applied_coupon'])
                            <p>Promo Code: {{ $orders['applied_coupon'] }}</p>
                          @endif
                          <p>Payment Method: {{ $orders['payments']['payment_method'] }}</p>
                      </div>
                      </div>
                      <div class="col-sm-6 col-lg-6 col-xxl-5">
                      <div class="orders-info">
                          <p>Delivery Time: {{ $orders['services']['delivery_time'] }} days</p>
                          <p>Revisions: {{ $orders['services']['revision_limit'] }}</p>
                          <p>Transaction ID : {{ $orders['payments']['transaction_id'] }}</p>
                          <p>Payment Status : {{ $orders['payments']['payment_status'] }}</p>
                      </div>
                      </div>
                  </div>
                  </div>
              </div>
              <div class="d-sm-none d-md-block col-sm-6 col-md-12 col-lg-3">
                  <div class="order-status">
                  <p>Order Id : {{ $orders['order_number'] }}</p>
                  <p>Order Date : 05.05.2021</p>
                  <p>Status: <span class="pending"> Pending</span></p>
                  </div>
              </div>
            </div>
            <!--Pending Orders Section End-->

            <!--Orders Requirement Section Start-->
            <div class="row pending-order-requirement">

                @include('client.includes.accordion.order-requirement')

              <div class="col-lg-12">
                  <div class="contact-soon-notice">
                  <p>A designwala will contact you soon and start the order</p>
                  </div>
              </div>
            </div>
            <!--Orders Requirement Section End-->

        </div>
    </section>

@elseif(request()->get('page') == 'ongoing')

    <section class="dashboard-main">
        <div class="container">
          <!--Breadcrumb-->
          <div class="row breadcrumb-row">
            <div class="col-lg-12">
              <div class="dashboard">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">
                      <a href="{{ route('client.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{ route('client.order.index') }}">Orders</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('client.order.show', ['order_id'=>$orders['order_number'],'page'=>$orders['order_status']]) }}">{{ $orders['order_number'] }}</a>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!--Breadcrumb-->

          <!--Pending Orders Section Start-->
          <div class="row pending-order ">
            <div class="col-sm-4 col-md-3 col-lg-2">
              <div class="pending-order-img">
                <img src="{{ asset('_assets/_client/images/pending-order-img.svg') }}" alt="dashboard" class="img-fluid">
              </div>
            </div>
            <div class="d-none d-sm-block d-md-none col-sm-8 col-md-12 col-lg-3">
              <div class="order-status">
                <p>Order Id : {{ $orders['order_number'] }}</p>
                <p>Order Date : 05.05.2021</p>
                <p>Status: <span class="ongoing">Ongoing</span></p>
              </div>
            </div>
            <div class="col-md-9 col-lg-7">
              <div class="requirement-details">
                <h3>{{ $orders['services']['title'] }}</h3>
                <div class="row">
                  <div class="col-sm-6 col-lg-5 col-xxl-4">
                    <div class="orders-info">
                      <p>Order Id: {{ $orders['order_number'] }}</p>
                      <p>Price: ${{ $orders['payments']['paid_amount'] }}</p>
                      @if($orders['applied_coupon'])
                        <p>Promo Code: {{ $orders['applied_coupon'] }}</p>
                      @endif
                      <p>Payment Method: {{ $orders['payments']['payment_method'] }}</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-6 col-xxl-5">
                    <div class="orders-info">
                      <p>Delivery Time: {{ $orders['services']['delivery_time'] }} days</p>
                      <p>Revisions: {{ $orders['services']['revision_limit'] }}</p>
                      <p>Transaction ID : {{ $orders['payments']['transaction_id'] }}</p>
                      <p>Payment Status : {{ $orders['payments']['payment_status'] }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-sm-none d-md-block col-md-12 col-lg-3">
              <div class="order-status">
                <p>Order Id : {{ $orders['order_number'] }}</p>
                <p>Order Date : 05.05.2021</p>
                <p>Status: <span class="ongoing">Ongoing</span></p>
              </div>
            </div>
          </div>
          <!--Pending Orders Section End-->

          <!--Orders Requirement Section Start-->
          <div class="row ongoing-order-requirement">

              @include('client.includes.accordion.order-requirement')

          </div>
          <!--Orders Requirement Section End-->

          <!--Chat Section Start-->

          @include('client.includes.chat')

        </div>
    </section>

@elseif(request()->get('page') == 'delivered')

    <section class="dashboard-main">
        <div class="container">
          <!--Breadcrumb-->
          <div class="row breadcrumb-row">
            <div class="col-lg-12">
              <div class="dashboard">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">
                      <a href="{{ route('client.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{ route('client.order.index') }}">Orders</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('client.order.show', ['order_id'=>$orders['order_number'],'page'=>$orders['order_status']]) }}">{{ $orders['order_number'] }}</a>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!--Breadcrumb-->

          <!--Pending Orders Section Start-->
          <div class="row pending-order ">
            <div class="col-sm-4 col-md-3 col-lg-2">
              <div class="pending-order-img">
                <img src="{{ asset('_assets/_client//images/pending-order-img.svg') }}" alt="dashboard" class="img-fluid">
              </div>
            </div>
            <div class="d-none d-sm-block d-md-none  col-sm-8 col-md-12 col-lg-3">
              <div class="order-status">
                <p>Order Id : {{ $orders['order_number'] }}</p>
                <p>Order Date : 05.05.2021</p>
                <p>Status: <span class="delivered">Delivered</span></p>
              </div>
            </div>
            <div class="col-md-9 col-lg-7">
              <div class="requirement-details">
                <h3>{{ $orders['services']['title'] }}</h3>
                <div class="row">
                  <div class="col-sm-6 col-lg-5 col-xxl-4">
                    <div class="orders-info">
                      <p>Order Id: {{ $orders['order_number'] }}</p>
                      <p>Price: ${{ $orders['payments']['paid_amount'] }}</p>
                      @if($orders['applied_coupon'])
                        <p>Promo Code: {{ $orders['applied_coupon'] }}</p>
                      @endif
                      <p>Payment Method: {{ $orders['payments']['payment_method'] }}</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-6 col-xxl-5">
                    <div class="orders-info">
                        <p>Delivery Time: {{ $orders['services']['delivery_time'] }} days</p>
                        <p>Revisions: {{ $orders['services']['revision_limit'] }}</p>
                        <p>Transaction ID : {{ $orders['payments']['transaction_id'] }}</p>
                      <p>Payment Status : {{ $orders['payments']['payment_status'] }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-sm-none d-md-block col-md-12 col-lg-3">
              <div class="order-status">
                <p>Order Id : {{ $orders['order_number'] }}</p>
                <p>Order Date : 05.05.2021</p>
                <p>Status: <span class="delivered">Delivered</span></p>
              </div>
            </div>
          </div>
          <!--Pending Orders Section End-->

          <!--Orders Requirement Section Start-->
          <div class="row delivered-order-requirement">
              @include('client.includes.accordion.order-requirement')
          </div>
          <!--Orders Requirement Section End-->

          <!--Chat Section Start-->

          @include('client.includes.chat')

          <!--Delivered Order Section Start-->
          <div class="row delivered-orders">
              <div class="col-lg-12">
                  <div class="delivered-notice">
                    <p>Your order has been delivered!</p>
                    <p>You may accept the order or ask for a revision.</p>
                  </div>
              </div>
          </div>


          <div class="row delivered-files-area">
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client//images/delivered-img-one.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Image.jpg</p>
                    </a>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client/images/delivered-img-two.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Image.jpg</p>
                    </a>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client/images/delivered-img-three.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Image.jpg</p>
                    </a>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client//images/delivered-img-four.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Image.jpg</p>
                    </a>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client/images/delivered-img-two.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Image.jpg</p>
                    </a>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client/images/delivered-img-four.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Image.jpg</p>
                    </a>
                  </div>
              </div>
          </div>


          <div class="row delivered-confirm-btn">
            <div class="col-lg-12">
                <div class="confirm-decline-btn" id="confirm-decline-btn">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#acceptedModal" id="accept-btn" class="btn accept-btn">Accept Delivery</button>                    
                    <button type="button" data-bs-toggle="modal" data-bs-target="#declineModal" class="btn decline-btn">Ask For Revision</button>                    
                </div>
                <div class="accepted-text text-center" id="accepted-text">
                  <p>Order {{ $orders['payments']['payment_status'] }}!</p>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#acceptedModal" class="btn">Give us feedback</button>
                </div>
            </div>
          </div>

          <!--Delivered Order Section End-->

          <!--=======Modal Start==========-->

            <!-- Accept Modal Start-->
            

            @include('client.includes.modal.accept-order')


            <!--Accept Modal End-->

            <!--Decline Modal Start-->

            @include('client.includes.modal.revision-order')

            <!--Decline Modal End-->
          <!--=======Modal Start==========-->

        </div>
    </section>

@elseif(request()->get('page') == 'in_revision')

    <section class="dashboard-main">
        <div class="container">
          <!--Breadcrumb-->
          <div class="row breadcrumb-row">
            <div class="col-lg-12">
              <div class="dashboard">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">
                      <a href="{{ route('client.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{ route('client.order.index') }}">Orders</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('client.order.show', ['order_id'=>$orders['order_number'],'page'=>$orders['order_status']]) }}">{{ $orders['order_number'] }}</a>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!--Breadcrumb-->

          <!--Pending Orders Section Start-->
          <div class="row pending-order">
            <div class="col-sm-4 col-md-3 col-lg-2">
              <div class="pending-order-img">
                <img src="{{ asset('_assets/_client/images/pending-order-img.svg') }}" alt="dashboard" class="img-fluid">
              </div>
            </div>
            <div class="d-none d-sm-block d-md-none col-sm-8 col-md-12 col-lg-3">
              <div class="order-status">
                <p>Order Id : {{ $orders['order_number'] }}</p>
                <p>Order Date : 05.05.2021</p>
                <p>Status: <span class="in-revision"> In Revision </span></p>
              </div>
            </div>
            <div class="col-md-9 col-lg-7">
              <div class="requirement-details">
                <h3>{{ $orders['services']['title'] }}</h3>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-5 col-xxl-4">
                    <div class="orders-info">
                      <p>Order Id: {{ $orders['order_number'] }}</p>
                      <p>Price: ${{ $orders['payments']['paid_amount'] }}</p>
                      @if($orders['applied_coupon'])
                        <p>Promo Code: {{ $orders['applied_coupon'] }}</p>
                      @endif
                      <p>Payment Method: {{ $orders['payments']['payment_method'] }}</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-5">
                    <div class="orders-info">
                        <p>Delivery Time: {{ $orders['services']['delivery_time'] }} days</p>
                        <p>Revisions: {{ $orders['services']['revision_limit'] }}</p>
                        <p>Transaction ID : {{ $orders['payments']['transaction_id'] }}</p>
                      <p>Payment Status : {{ $orders['payments']['payment_status'] }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-sm-none d-md-block col-md-12 col-lg-3">
              <div class="order-status">
                <p>Order Id : {{ $orders['order_number'] }}</p>
                <p>Order Date : 05.05.2021</p>
                <p>Status: <span class="in-revision">In Revision</span></p>
              </div>
            </div>
          </div>
          <!--Pending Orders Section End-->

          <!--Orders Requirement Section Start-->
          <div class="row ongoing-order-requirement">
              @include('client.includes.accordion.order-requirement')
          </div>
          <!--Orders Requirement Section End-->


          <!--Orders Requirement Section Start-->
          <div class="row revision-order-requirement">
              @include('client.includes.accordion.revision-requirement')
          </div>
          <!--Orders Requirement Section End-->


          <!--Chat Section Start-->

          @include('client.includes.chat')

        </div>
    </section>

@elseif(request()->get('page') == 'cancelled')
    <section class="dashboard-main">
        <div class="container">
          <!--Breadcrumb-->
          <div class="row breadcrumb-row">
            <div class="col-lg-12">
              <div class="dashboard">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">
                      <a href="{{ route('client.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{ route('client.order.index') }}">Orders</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('client.order.show', ['order_id'=>$orders['order_number'],'page'=>$orders['order_status']]) }}">{{ $orders['order_number'] }}</a>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!--Breadcrumb-->

          <!--Pending Orders Section Start-->
          <div class="row pending-order">
            <div class="col-sm-4 col-md-3 col-lg-2">
              <div class="pending-order-img">
                <img src="{{ asset('_assets/_client/images/pending-order-img.svg') }}" alt="dashboard" class="img-fluid">
              </div>
            </div>
            <div class="d-none d-sm-block d-md-none col-sm-8 col-md-12 col-lg-3">
              <div class="order-status">
                <p>Order Id : {{ $orders['order_number'] }}</p>
                <p>Order Date : 05.05.2021</p>
                <p>Status: <span class="cancelled">Cancelled</span></p>
              </div>
            </div>
            <div class="col-md-9 col-lg-7">
              <div class="requirement-details">
                <h3>{{ $orders['services']['title'] }}</h3>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-5 col-xxl-4">
                    <div class="orders-info">
                      <p>Order Id: {{ $orders['order_number'] }}</p>
                      <p>Price: ${{ $orders['payments']['paid_amount'] }}</p>
                      @if($orders['applied_coupon'])
                        <p>Promo Code: {{ $orders['applied_coupon'] }}</p>
                      @endif
                      <p>Payment Method: {{ $orders['payments']['payment_method'] }}</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-5">
                    <div class="orders-info">
                        <p>Delivery Time: {{ $orders['services']['delivery_time'] }} days</p>
                        <p>Revisions: {{ $orders['services']['revision_limit'] }}</p>
                        <p>Transaction ID : {{ $orders['payments']['transaction_id'] }}</p>
                      <p>Payment Status : {{ $orders['payments']['payment_status'] }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-sm-none d-md-block col-md-12 col-lg-3">
              <div class="order-status">
                <p>Order Id : {{ $orders['order_number'] }}</p>
                <p>Order Date : 05.05.2021</p>
                <p>Status: <span class="cancelled">Cancelled</span></p>
              </div>
            </div>
          </div>
          <!--Pending Orders Section End-->

          <!--Orders Requirement Section Start-->
          <div class="row ongoing-order-requirement">
              @include('client.includes.accordion.order-requirement')
          </div>
          <!--Orders Requirement Section End-->


          <!--Chat Section Start-->

          @include('client.includes.chat')

        </div>
    </section>

        
@elseif(request()->get('page') == 'completed')}')

    <section class="dashboard-main">
        <div class="container">
          <!--Breadcrumb-->
          <div class="row breadcrumb-row">
            <div class="col-lg-12">
              <div class="dashboard">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">
                      <a href="{{ route('client.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{ route('client.order.index') }}">Orders</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('client.order.show', ['order_id'=>$orders['order_number'],'page'=>$orders['order_status']]) }}">{{ $orders['order_number'] }}</a>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!--Breadcrumb-->

          <!--Pending Orders Section Start-->
          <div class="row pending-order">
            <div class="col-sm-4 col-md-3 col-lg-2">
              <div class="pending-order-img">
                <img src="{{ asset('_assets/_client/images/pending-order-img.svg') }}" alt="dashboard" class="img-fluid">
              </div>
            </div>
            <div class="d-none d-sm-block d-md-none col-sm-8 col-md-12 col-lg-3">
              <div class="order-status">
                <p>Order Id : {{ $orders['order_number'] }}</p>
                <p>Order Date : 05.05.2021</p>
                <p>Status: <span class="complete">Complete</span></p>
              </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-7">
              <div class="requirement-details">
                <h3>{{ $orders['services']['title'] }}</h3>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-4">
                    <div class="orders-info">
                      <p>Order Id: {{ $orders['order_number'] }}</p>
                      <p>Price: ${{ $orders['payments']['paid_amount'] }}</p>
                      @if($orders['applied_coupon'])
                        <p>Promo Code: {{ $orders['applied_coupon'] }}</p>
                      @endif
                      <p>Payment Method: {{ $orders['payments']['payment_method'] }}</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-5">
                    <div class="orders-info">
                      <p>Delivery Time: {{ $orders['services']['delivery_time'] }} days</p>
                      <p>Revisions: {{ $orders['services']['revision_limit'] }}</p>
                      <p>Transaction ID : {{ $orders['payments']['transaction_id'] }}</p>
                      <p>Payment Status : {{ $orders['payments']['payment_status'] }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-sm-none d-md-block col-md-12 col-lg-3">
              <div class="order-status">
                <p>Order Id : {{ $orders['order_number'] }}</p>
                <p>Order Date : 05.05.2021</p>
                <p>Status: <span class="complete">Complete</span></p>
              </div>
            </div>
          </div>
          <!--Pending Orders Section End-->

          <!--Orders Requirement Section Start-->
          <div class="row delivered-order-requirement">
              @include('client.includes.accordion.order-requirement')
          </div>
          <!--Orders Requirement Section End-->

          @include('client.includes.chat')

          <!--Delivered Order Section Start-->

          <div class="row delivered-files-area rating-review-area">
              <div class="col-lg-12">
                  <div class="rating-review">
                      <p class="complete">Order is Complete!</p>
                      <ul class="list-inline">
                          <li class="list-inline-item">
                            <img src="{{ asset('_assets/_client/images/rating-star.svg') }}" alt="dashboard" class="img-fluid">
                          </li>
                          <li class="list-inline-item">
                            <img src="{{ asset('_assets/_client/images/rating-star.svg') }}" alt="dashboard" class="img-fluid">
                          </li>
                          <li class="list-inline-item">
                            <img src="{{ asset('_assets/_client/images/rating-star.svg') }}" alt="dashboard" class="img-fluid">
                          </li>
                          <li class="list-inline-item">
                            <img src="{{ asset('_assets/_client/images/rating-star.svg') }}" alt="dashboard" class="img-fluid">
                          </li>
                          <li class="list-inline-item">
                            <img src="{{ asset('_assets/_client/images/star-stroke.svg') }}" alt="dashboard" class="img-fluid">
                          </li>
                          <li class="list-inline-item">
                            <p>(4/5)</p>
                          </li>
                      </ul>
                      <p class="review">
                        Great communication with the Designwala. He followed my initial instructions, and came up with great concept designs. They were so good, additional revisions were not needed. Will order again soon!
                      </p>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client/images/delivered-img-one.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Image.jpg</p>
                    </a>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client/images/delivered-img-two.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Source File.zip</p>
                    </a>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client/images/delivered-img-three.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Image.jpg</p>
                    </a>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client//images/delivered-img-four.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Source File.zip</p>
                    </a>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client/images/delivered-img-two.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Source File.zip</p>
                    </a>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="delivered-files">
                    <img src="{{ asset('_assets/_client/images/delivered-img-three.svg') }}" alt="dashboard" class="img-fluid">
                    <a href="#" class="d-flex justify-content-center align-items-center">
                      <button type="button">
                        <img src="{{ asset('_assets/_client/images/delivered-download-icon.svg') }}" alt="dashboard" class="img-fluid">
                      </button>
                      <p>Image.jpg</p>
                    </a>
                </div>
              </div>
          </div>
          <!--Delivered Order Section End-->

        </div>
    </section>

@endif

@endsection

@push('scripts')
{{-- Internal Scripts --}}

@if(request()->get('page')== 'delivered')

    <script src="{{ asset('_assets/_client/js/start-rating.js') }}"></script>

@endif

@endpush

