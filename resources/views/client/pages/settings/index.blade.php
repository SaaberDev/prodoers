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
                    <a href="{{ route('client.dashboard') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('client.settings.index') }}">Settings</a>
                </li>
                </ol>
            </nav>
            </div>
        </div>
        </div>
        <!--Breadcrumb-->

        <!--profile setting section start-->
        <div class="row profile-setting">
        <div class="col-lg-12">
            <div class="setting-profile-info d-flex align-items-center">
            <div class="profile-img">
                <img src="{{ asset('_assets/_client/images/profile1.svg') }}" id="profile-image" alt="dashboard" class="img-fluid">
                <label for="profile-img">
                <img src="{{ asset('_assets/_client/images/camera.svg') }}" alt="dashboard" class="img-fluid">
                </label>
                <input type="file" name="profile-img" id="profile-img">
            </div>
            <div class="profile-name">
                <h3 >Monica Farnandez</h3>
                <p >city, country</p>
                <p><img src="{{ asset('_assets/_client/images/verified.svg') }}" alt="dashboard" class="img-fluid verified"> Verified</p>
                <p class="d-none"><img src="{{ asset('_assets/_client/images/not-verified.svg') }}" alt="dashboard" class="img-fluid not-verified"> Not Verified</p>
            </div>
            </div>
        </div>
        </div>
        <!--profile setting section End-->

        <!--General Info Section Start-->
        <div class="general-setting">
        <h3>General</h3>          
        <form class="row g-3">
            <div class="col-md-12">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                    <input type="text" placeholder="Username" name="username" id="username" class="form-control username">
                    </div>
                    <div class="col-md-6 col-lg-6">
                    <input type="text" placeholder="Name" class="form-control name" id="name" name="name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                    <input type="email" placeholder="Email" name="email" class="form-control email" id="email">
                    </div>
                    <div class="col-md-6 col-lg-6">
                    <input type="text" placeholder="Website" name="website" class="form-control website" id="website">
                    </div>
                </div>
                </div>
                <div class="col-md-4 col-lg-4">
                <textarea placeholder="Street Address" name="street-address" class="form-control street-address" id="street-address"></textarea>
                </div>
            </div>
            </div>
            <div class="col-md-4 col-lg-4">
            <input type="text" placeholder="Country" name="country" class="form-control country" id="country">
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="number-code">
                <input type="text" name="phone" placeholder="phone number*" class="form-control phone" id="phone">
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
            <input type="text" placeholder="Zip Code" name="zip-code" class="form-control zip-code"id="zip-code">
            </div>
        </form>
        </div>
        <!--General Info Section End-->

        <!--Password Info Section Start-->
        <div class="password-setting">
        <h3>Password</h3>          
        <form class="row g-3">
            <div class="col-md-4 col-lg-4">
            <input type="password" placeholder="Old Password" name="old-password" class="form-control old-password" id="old-password">
            </div>
            <div class="col-md-4 col-lg-4">
            <input type="password" placeholder="New Password" name="new-password" class="form-control new-password"id="new-password">
            </div>
            <div class="col-md-4 col-lg-4">
            <input type="password" placeholder="Retype New Password" name="retype-password" class="form-control retype-password"id="retype-password">
            </div>
        </form>
        </div>
        <!--Password Info Section End-->

        <!--Billing Info Section Start-->
        <div class="billing-setting">
        <h3>Billing Information</h3>          
        <form class="row g-3">
            <div class="col-md-12">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                    <input type="text" placeholder="Name" name="billing-name" id="billing-name" class="form-control billing-name">
                    </div>
                    <div class="col-md-6 col-lg-6">
                    <input type="email" placeholder="Email" class="form-control billing-email" id="billing-email" name="billing-email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                    <input type="text" placeholder="Company Name" name="company-name" class="form-control company-name" id="company-name">
                    </div>
                    <div class="col-md-6 col-lg-6">
                    <input type="text" placeholder="Tax ID" name="taxId" class="form-control taxid" id="taxId">
                    </div>
                </div>
                </div>
                <div class="col-md-4 col-lg-4">
                <textarea placeholder="Billing Address" name="billing-address" class="form-control billing-address" id="billing-address"></textarea>
                </div>
            </div>
            </div>
            <div class="col-md-4 col-lg-4">
            <input type="text" placeholder="Country" name="billing-country" class="form-control billing-country" id="billing-country">
            </div>
            <div class="col-md-4 col-lg-4">
            <input type="text" placeholder="City" name="city" class="form-control country city" id="city">
            </div>
            <div class="col-md-4 col-lg-4">
            <input type="text" placeholder="Zip Code" name="billing-zip-code" class="form-control billing-zip-code"id="billing-zip-code">
            </div>
        </form>
        </div>
        <!--Billing Info Section End-->
        <div class="row setting-update">
        <div class="col-md-12">
            <button type="submit">Update</button>
        </div>
        </div>


    </div>
</section>
@endsection

@push('scripts')
{{-- Internal Scripts --}}

<script src="{{ asset('_assets/_client/js/setting.js') }}"></script>

@endpush

