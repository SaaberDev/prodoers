@extends('admin_panel.layouts.app')
@section('title', 'Add Coupon')

@push('styles')
    {{-- Internal Styles --}}
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
                        <h2 class="  m-0">Add Coupon</h2></div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <form action="{{ route('offers.coupon.store') }}" method="POST">
                @csrf @method('POST')
                <div class="row m-0  py-3 bg-white rounded">
                    @livewire('admin.offers.coupon.form.apply-coupon-to-dropdown')

                    <div class="col-md-2 mt-4">
                        <div class=" text-right">
                            <label for="">
                                <h5>Publish</h5></label>
                            <div class="">
                                <input id="published_status" name="published_status" value="{{ old('published_status') ?? 0 }}" {{ old('published_status') == 1 ? 'checked='.'"'.'checked'.'"' : '' }} type="checkbox" data-on="Active" data-off="Inactive" data-toggle="toggle">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-4">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Title</h5></label>
                            <div class="input-group">
                                <input name="title" value="{{ old('title') }}" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" type="text">
                                @if($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-4">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Code</h5></label>
                            <div class="input-group">
                                <input name="coupon_code" value="{{ old('coupon_code') }}" class="form-control {{ $errors->has('coupon_code') ? ' is-invalid' : '' }}" type="text">
                                @if($errors->has('coupon_code'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('coupon_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mt-4">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>Start Date</h5></label>
                            <input type="datetime-local" value="{{ old('start_date') }}" name="start_date" class="form-control {{ $errors->has('start_date') ? ' is-invalid' : '' }}" id="start_date" aria-describedby="start_date" placeholder="{{ old('start_date') }}">
                            @if($errors->has('start_date'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('start_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3 mt-4">
                        <div class="form-group mb-0">
                            <label for="">
                                <h5>End Date</h5></label>
                            <input type="datetime-local" value="{{ old('end_date') }}" name="end_date" class="form-control {{ $errors->has('end_date') ? ' is-invalid' : '' }}" id="end_date" aria-describedby="end_date" placeholder="{{ old('end_date') }}">
                            @if($errors->has('end_date'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('end_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    @livewire('admin.offers.coupon.form.coupon-type-dropdown')
                    <div class="col-md-12 py-4 ">
                        <div class="text-right">
                            <button type="submit" class="btn shadow bgOne rounded text-white px-4">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    <script>
        $('#published_status').change(function () {
            let isChecked = $(this).prop('checked') === true ? 1 : 0;
            $(this).val(isChecked);
        });

        const myInput = [
            document.querySelector("#start_date"),
            document.querySelector("#end_date"),
        ];
        const fp = flatpickr(myInput, {
            enableTime: true,
            enableSeconds: true,
            dateFormat: "d-m-Y G:i:S K",
            // dateFormat: "d-m-Y H:i",
            weekNumbers: true,
            // parseDate: true,
            parseDate: (datestr, format) => {
                return moment(datestr, format, true).toDate();
            },
            // time_24hr: true
        });


        // flatpickr("#start_date", {
        //     enableTime: true,
        //     enableSeconds: true,
        //     dateFormat: "d-m-Y G:i:SS K",
        //     weekNumbers: true,
        //     parseDate: true,
        //     time_24hr: true
        // });
        //
        // flatpickr("#end_date", {
        //     enableTime: true,
        //     enableSeconds: true,
        //     dateFormat: "d-m-Y G:i:SS K",
        //     weekNumbers: true,
        //     parseDate: true,
        //     time_24hr: true
        // });
    </script>
@endpush
