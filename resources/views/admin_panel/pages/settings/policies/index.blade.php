@extends('admin_panel.layouts.app')
@section('title', 'page_name')

@push('styles')
    {{-- Internal Styles --}}
    <style>
        .area-height{
            height: 300px!important;
        }
    </style>
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style">
        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-12 col-sm-12  v-center">
                    <!-- breadcrumb  -->
                    @include('admin_panel.includes.breadcrumb')
                </div>
            </div>
        </div>
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1 boxshadow rounded">
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="  m-0">Policies</h2></div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="{{ route('settings.footer_section.policy.update') }}" method="POST">
                @csrf @method('PATCH')
                <div class="row m-0 py-3 boxshadow rounded">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">PRIVACY POLICIY </h5></label>
                            <textarea class="form-control {{ $errors->has('privacy_policy') ? ' is-invalid' : '' }} area-height" name="privacy_policy" id="exampleFormControlTextarea1" rows="5">{{ getPolicyKey('policy_privacy') }}</textarea>
                            @if($errors->has('privacy_policy'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('privacy_policy') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">Cookie POLICIY </h5></label>
                            <textarea class="form-control {{ $errors->has('cookie_policy') ? ' is-invalid' : '' }} area-height" name="cookie_policy" id="exampleFormControlTextarea1" rows="5">{{ getPolicyKey('policy_cookie') }}</textarea>
                            @if($errors->has('cookie_policy'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('cookie_policy') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">Payment POLICIY </h5></label>
                            <textarea class="form-control {{ $errors->has('payment_policy') ? ' is-invalid' : '' }} area-height" name="payment_policy" id="exampleFormControlTextarea1" rows="5">{{ getPolicyKey('policy_payment') }}</textarea>
                            @if($errors->has('payment_policy'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('payment_policy') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">terms and conditions </h5></label>
                            <textarea class="form-control {{ $errors->has('terms_and_condition') ? ' is-invalid' : '' }} area-height" name="terms_and_condition" id="exampleFormControlTextarea1" rows="5">{{ getPolicyKey('policy_terms_and_conditions') }}</textarea>
                            @if($errors->has('terms_and_condition'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('terms_and_condition') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12 py-4 text-right">
                        <button type="submit" class="btn bgOne text-white">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
