@extends('client.layouts.app')
@section('title', 'page_name')

@push('styles')
{{-- Internal Styles --}}
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
                    <a href="notification.html">Notifications</a>
                </li>
                </ol>
            </nav>
            </div>
        </div>
        </div>
        <!--Breadcrumb-->

        <!--All notifications Section Start-->
        <div class="row all-notifications">
        <div class="col-lg-12">
            <div class="mark-btn">
            <button class="btn">Mark all as read</button>
            </div>
            <div class="single-notifications">
            <a href="#" class="active">Congrats! Your order has been delivered.</a>
            <a href="#">01.05.2021</a>
            </div>
            <div class="single-notifications">
            <a href="#">Your revision request is accepted.</a>
            <a href="#">01.05.2021</a>
            </div>
            <div class="single-notifications">
            <a href="#">Your profile picture has been changed</a>
            <a href="#">01.05.2021</a>
            </div>
            <div class="single-notifications">
            <a href="#">Congrats! Your order has been delivered.</a>
            <a href="#">01.05.2021</a>
            </div>
            <div class="single-notifications">
            <a href="#">Congrats! Your order has been delivered.</a>
            <a href="#">01.05.2021</a>
            </div>
            <div class="single-notifications">
            <a href="#">Congrats! Your order has been delivered.</a>
            <a>01.05.2021</a>
            </div>
            <div class="single-notifications">
            <a href="#">Congrats! Your order has been delivered.</a>
            <a href="#">01.05.2021</a>
            </div>
            <div class="load-btn">
            <button class="btn">Load More</button>
            </div>
        </div>
        </div>
        <!--All notifications Section End-->

    </div>
</section>
@endsection

@push('scripts')
{{-- Internal Scripts --}}
@endpush

