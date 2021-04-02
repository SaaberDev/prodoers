@extends('admin_panel.layouts.app')
@section('title', 'page_name')

@push('styles')
{{-- Internal Styles --}}
@endpush

@section('content')
{{-- Body Content --}}
@endsection

@push('scripts')
{{-- Internal Scripts --}}
@endpush


{{ $errors->has('service_category_title') ? ' is-invalid' : '' }}
@if($errors->has('service_category_title'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('service_category_title') }}</strong>
    </span>
@endif

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
