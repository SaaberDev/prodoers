@extends('guest.layouts.app')
@section('title', 'page_name')

@push('styles')
{{-- Internal Styles --}}
@endpush

@section('content')
{{-- Body Content --}}
    <div style="height: 100vh">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session()->has('failed'))
            <div class="alert alert-danger">
                {{ session('failed') }}
            </div>
        @elseif(session()->has('orderSuccess'))
            <div class="alert alert-success">
                {{ session('orderSuccess') }}
            </div>
        @endif
        <form action="{{ route('test.placeOrder') }}" method="GET">
            @error('payment_method')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment_method" value="paypal" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Paypal
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment_method" value="visa" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Visa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment_method" value="mastercard" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault3">
                    MasterCard
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="payment_method" value="bkash" id="flexRadioDefault4">
                <label class="form-check-label" for="flexRadioDefault4">
                    BKash
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Pay Now</button>
        </form>
    </div>
@endsection

@push('scripts')
{{-- Internal Scripts --}}
@endpush


{{--{{ $errors->has('service_category_title') ? ' is-invalid' : '' }}--}}
{{--@if($errors->has('service_category_title'))--}}
{{--    <span class="invalid-feedback">--}}
{{--        <strong>{{ $errors->first('service_category_title') }}</strong>--}}
{{--    </span>--}}
{{--@endif--}}

{{-- Radio Button backup --}}

{{--                                        <input type="text" value="" class="{{ $errors->has('paymentMethod') ? ' is-invalid' : '' }}" hidden>--}}
{{--                                        <div class="form-check form-check-inline">--}}
{{--                                            <input class="form-check-input"--}}
{{--                                                   wire:model.defer="paymentMethod"--}}
{{--                                                   name="inlineRadioOptions"--}}
{{--                                                   type="radio"--}}
{{--                                                   id="inlineRadio1"--}}
{{--                                                   value="paypal"--}}
{{--                                            >--}}
{{--                                            <label class="form-check-label" for="inlineRadio1">Paypal</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-check form-check-inline">--}}
{{--                                            <input class="form-check-input"--}}
{{--                                                   wire:model.defer="paymentMethod"--}}
{{--                                                   name="inlineRadioOptions"--}}
{{--                                                   type="radio"--}}
{{--                                                   id="inlineRadio2"--}}
{{--                                                   value="visa"--}}
{{--                                            >--}}
{{--                                            <label class="form-check-label" for="inlineRadio2">Visa</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-check form-check-inline">--}}
{{--                                            <input class="form-check-input"--}}
{{--                                                   wire:model.defer="paymentMethod"--}}
{{--                                                   name="inlineRadioOptions"--}}
{{--                                                   type="radio"--}}
{{--                                                   id="inlineRadio3"--}}
{{--                                                   value="bkash"--}}
{{--                                            >--}}
{{--                                            <label class="form-check-label" for="inlineRadio3">bKash</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-check form-check-inline">--}}
{{--                                            <input class="form-check-input"--}}
{{--                                                   wire:model.defer="paymentMethod"--}}
{{--                                                   name="inlineRadioOptions"--}}
{{--                                                   type="radio"--}}
{{--                                                   id="inlineRadio4"--}}
{{--                                                   value="mastercard"--}}
{{--                                            >--}}
{{--                                            <label class="form-check-label" for="inlineRadio4">MasterCard</label>--}}
{{--                                        </div>--}}
{{--                                        @if($errors->has('paymentMethod'))--}}
{{--                                            <div class="invalid-feedback">--}}
{{--                                                {{ $errors->first('paymentMethod') }}--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
