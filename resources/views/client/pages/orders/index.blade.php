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
                      <a href="dashboard.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="orders.html">Orders</a>
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

                    @include('client.includes.pagination')

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
                <tr data-href="./ongoingorders.html">
                  <td>DWWXYZ123</td>
                  <td>Minimal Logo Design</td>
                  <td>3 Days</td>
                  <td>$50</td>
                  <td>
                    <p class="ongoing">Ongoing</p>
                  </td>
                </tr>
                <tr data-href="./revisionorder.html">
                  <td>DWWXYZ123</td>
                  <td>Web Design and Development</td>
                  <td>24 hours</td>
                  <td>$25</td>
                  <td>
                    <p class="in-revision">In Revision</p>
                  </td>
                </tr>
                <tr data-href="./ongoingorders.html">
                  <td>WXYZ123</td>
                  <td>Logo Design</td>
                  <td>
                    <p class="late">-18 hours</p>
                  </td>
                  <td>$70</td>
                  <td>
                    <p class="ongoing">Ongoing</p>
                  </td>
                </tr>
                <tr data-href="./deliveredorder.html">
                  <td>WXYZ123</td>
                  <td>Digital Marketing and social media</td>
                  <td>
                    <p class="late">-22 hours</p>
                  </td>
                  <td>$100</td>
                  <td>
                    <p class="delivered">Delivered</p>
                  </td>
                </tr>
                <tr data-href="./deliveredorder.html">
                  <td>DWWXYZ123</td>
                  <td>Logo Design, Brand design, Print Materials</td>
                  <td>
                    <p class="late">-22 hours</p>
                  </td>
                  <td>$100</td>
                  <td>
                    <p class="delivered">Delivered</p>
                  </td>
                </tr>
                <tr data-href="./ongoingorders.html">
                  <td>DWWXYZ123</td>
                  <td>Minimal Logo Design</td>
                  <td>3 Days</td>
                  <td>$50</td>
                  <td>
                    <p class="ongoing">Ongoing</p>
                  </td>
                </tr>
                <tr data-href="./revisionorder.html">
                  <td>DWWXYZ123</td>
                  <td>Web Design and Development</td>
                  <td>24 hours</td>
                  <td>$25</td>
                  <td>
                    <p class="in-revision">In Revision</p>
                  </td>
                </tr>
                <tr data-href="./ongoingorders.html">
                  <td>WXYZ123</td>
                  <td>Logo Design</td>
                  <td>
                    <p class="late">-18 hours</p>
                  </td>
                  <td>$70</td>
                  <td>
                    <p class="ongoing">Ongoing</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!--Order Table End-->


          <!--Show More Pagination-->
          <div class="row">
            <div class="col-lg-12">
              <div class="sm-pagination d-flex justify-content-center align-items-center">
                <div class="d-lg-none order-pagination ">

                    @include('client.includes.pagination')

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

