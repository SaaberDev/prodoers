@extends('admin_panel.layouts.app')
@section('title', 'Policies')

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

        @if($company_policies)
        <div class="mt-4">
            <form action="{{ route('super_admin.settings.site_cms.policy.update') }}" method="POST" autocomplete="off">
                @csrf @method('PATCH')
                <div class="row m-0 py-3 boxshadow rounded">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">PRIVACY POLICY </h5></label>
                            <textarea class="form-control {{ $errors->has('privacy') ? ' is-invalid' : '' }} area-height" name="privacy" id="exampleFormControlTextarea1" rows="5">{{ $company_policies->privacy }}</textarea>
                            @if($errors->has('privacy'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('privacy') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">Cookie POLICIY </h5></label>
                            <textarea class="form-control {{ $errors->has('cookie') ? ' is-invalid' : '' }} area-height" name="cookie" id="exampleFormControlTextarea1" rows="5">{{ $company_policies->cookie }}</textarea>
                            @if($errors->has('cookie'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('cookie') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">Payment POLICIY </h5></label>
                            <textarea class="form-control {{ $errors->has('payment') ? ' is-invalid' : '' }} area-height" name="payment" id="exampleFormControlTextarea1" rows="5">{{ $company_policies->payment }}</textarea>
                            @if($errors->has('payment'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('payment') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">
                                <h5 class="text-uppercase">terms and conditions </h5></label>
                            <textarea class="form-control {{ $errors->has('terms_and_conditions') ? ' is-invalid' : '' }} area-height" name="terms_and_conditions" id="exampleFormControlTextarea1" rows="5">{{ $company_policies->terms_and_conditions }}</textarea>
                            @if($errors->has('terms_and_conditions'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('terms_and_conditions') }}</strong>
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
        @else
            <div class="mt-4">
                <div style="font-size: 30px;text-align: center;height: 60vh;display: flex;align-items: center;">
                    <p>This site has static data. Please run seeders to make changes or contact your
                        <strong><a href="https://facebook.com/saaberdev" target="_blank">Developer</a></strong>.
                    </p>
                </div>
            </div>
        @endif
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
