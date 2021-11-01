@extends('client.layouts.app')
@section('title', 'page_name')

@push('styles')
{{-- Internal Styles --}}
@endpush

@section('content')
{{-- Body Content --}}
    <section class="dashboard-main">
        <div class="container">
  
          <!--profile Section Start-->
          <div class="row profile align-items-center">
            <div class="col-md-5 col-lg-4">
              <div class="profile-info d-flex align-items-center">
                <div class="profile-img">
                  <img src="{{ asset('_assets/_client/images/profile1.svg') }}" alt="dashboard">
                </div>
                <div class="profile-name">
                  <h3>Monica Farnandez</h3>
                  <p>city, country</p>
                  <p><img src="{{ asset('_assets/_client/images/verified.svg') }}" alt="dashboard" class="img-fluid"> Verified</p>
                  <p class="d-none"><img src="./images/not-verified.svg" alt="dashboard" class="img-fluid not-verified"> Not Verified</p>
                </div>
              </div>
            </div>
            <div class=" d-none d-lg-block col-lg-1 ">
              <span class="profile-vertical-line"></span>
            </div>
            <div class="col-md-7 col-lg-7">
              <div class="earn-info">
                <h3 >Welcome back, Monica Farnandez</h3>
                <div class="project-spent d-flex">
                  <div>
                    <span>25</span> 
                    <p>Total Projects</p>
                  </div>
                  <div>
                    <span>08</span>
                    <p>Ongoing Projects</p>
                  </div>
                  <div>
                    <span>$2170.00</span> 
                    <p>Total Spent</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--profile Section End-->

          <!--Project Spent for mobile view-->
          <div class="row d-md-none project-spent-sm-area">
            <div class="col-lg-12">
              <div class="project-spent-sm">
                <h5>Total Projects</h5>
                <p>25</p> 
              </div>
            </div>
            <div class="col-lg-12">
              <div class="project-spent-sm">
                <h5>Ongoing Projects</h5>
                <p>08</p> 
              </div>
            </div>
            <div class="col-lg-12">
              <div class="project-spent-sm">
                <h5>Total Spent</h5>
                <p>$2170.00</p> 
              </div>
            </div>
          </div>
          <!--Project Spent for mobile view-->


          <div class="row recent-orders-row">
            <div class="col-6 col-md-3 col-lg-2">
              <div class="recent-orders d-flex justify-content-start justify-content-md-center align-items-center">
                <p>Recent Order</p>    
              </div>
            </div>
            <div class="col-6 col-md-2 offset-md-7 col-lg-2 offset-lg-8">
              <div class="recent-orders d-flex justify-content-end justify-content-md-center align-items-center">
                <a href="{{ route('client.order.index') }}">See All</a>
              </div>
            </div>
          </div>

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
                <tr data-href="{{ route('client.order.show', ['page' => 'ongoing']) }}">
                  <td>DWWXYZ123</td>
                  <td>Minimal Logo Design</td>
                  <td>3 Days</td>
                  <td>$50</td>
                  <td>
                    <p class="ongoing">Ongoing</p>
                  </td>
                </tr>
                <tr data-href="{{ route('client.order.show', ['page' => 'revision']) }}">
                  <td>DWWXYZ123</td>
                  <td>Web Design and Development</td>
                  <td>24 hours</td>
                  <td>$25</td>
                  <td>
                    <p class="in-revision">In Revision</p>
                  </td>
                </tr>
                <tr data-href="{{ route('client.order.show', ['page' => 'ongoing']) }}">
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
                <tr data-href="{{ route('client.order.show', ['page' => 'delivered']) }}">
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
                <tr data-href="{{ route('client.order.show', ['page' => 'pending']) }}">
                  <td>DWWXYZ123</td>
                  <td>Logo Design, Brand design, Print Materials</td>
                  <td>
                    <p class="late">-22 hours</p>
                  </td>
                  <td>$100</td>
                  <td>
                    <p class="pending">Pending</p>
                  </td>
                </tr>
                <tr data-href="{{ route('client.order.show', ['page' => 'completed']) }}">
                  <td>WXYZ123</td>
                  <td>Digital Marketing and social media</td>
                  <td>
                    <p class="late">-22 hours</p>
                  </td>
                  <td>$100</td>
                  <td>
                    <p class="completed">Completed</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!--Order Table End-->

        </div>
    </section>
@endsection

@push('scripts')
{{-- Internal Scripts --}}
<script src="{{asset('_assets/_client/js/table.js')}}"></script>
@endpush

