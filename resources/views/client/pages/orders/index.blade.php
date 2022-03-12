@extends('client.layouts.app')
@section('title', 'page_name')

@push('styles')
{{-- Internal Styles --}}

<link rel="stylesheet" href="{{ asset('_assets/_client/css/show.item.css') }}">

@endpush

@section('content')
{{-- Body Content --}}
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
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('client.order.index') }}">Orders</a>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!--Breadcrumb-->

          <div class="row all-orders-row align-items-center">
            <div class="col-sm-3 col-md-4 col-lg-2 col-xxl-1">
              <div class="all-orders d-flex justify-content-center justify-content-sm-start justify-content-md-center align-items-center">
                <p>All Orders</p>    
              </div>
            </div>
            <div class=" col-sm-4 col-md-4 col-lg-3 col-xxl-3">
              
              @include('client.includes.order-show')

            </div>
            <div class="col-sm-5 col-md-4 col-lg-3 col-xxl-3">
              <div class="all-orders d-flex justify-content-center justify-content-lg-start justify-content-sm-end justify-content-md-center align-items-center">
                
                @include('client.includes.order-status')
              
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-4 offset-xxl-2 col-xxl-3">
              <div class="all-orders-pagination d-flex justify-content-end justify-content-md-end align-items-center">
                <div class="d-none d-lg-block order-pagination ">

                    @include('vendor.pagination.frontend-pagination')

                </div>
              </div>
            </div>
          </div>

          <!--Order Table start-->

           <!--Order Table start-->

           <div class="table-responsive">
            <table class="table">
              <thead>
                <tr class="table-head">
                  <td>Order ID</td>
                  <td>Service Name</td>
                  <td>Timeline</td>
                  <td>Price</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
              @forelse($orders as $order)
                  <tr data-href="{{ route('client.order.show', ['order_id'=>$order['order_number'],'page'=>$order['order_status']])}}">
                    <td>{{$order['order_number']}}</td>
                    <td>{{$order['services']['title']}}</td>
                    <td>
                      <p>{{$order['services']['delivery_time']}} days</p>
                    </td>
                    <td>${{$order['payments']['paid_amount']}}</td>
                    <td>
                      <p class="@if($order['order_status']=='in_revision'){{'in-revision'}}@else{{$order['order_status']}}@endif">

                        @if($order['order_status']=='in_revision')
                            {{ucfirst('revision')}}
                        @else
                          {{ucfirst($order['order_status'])}}
                        @endif

                      </p>
                    </td>
                  </tr>
                  @empty
                    <tr>
                      <td colspan="5">You don't have any order right now.</td>
                    </tr>
                @endforelse
              </tbody>
            </table>
          </div>

          <!--Order Table End-->


          <!--Show More Pagination-->
          <div class="row">
            <div class="col-lg-12">
              <div class="sm-pagination d-flex justify-content-center align-items-center">
                <div class="d-lg-none order-pagination ">

                    @include('vendor.pagination.frontend-pagination')

                </div>
              </div>
            </div>
          </div>

          <!--Show More Pagination-->

          <!--Order Table End-->

        </div>
    </section>
@endsection

@push('scripts')
{{-- Internal Scripts --}}

<script src="{{ asset('_assets/_client/js/select2.min.js') }}"></script>
<script src="{{ asset('_assets/_client/js/show.item.js') }}"></script>
<script src="{{ asset('_assets/_client/js/table.js') }}"></script>

@endpush

