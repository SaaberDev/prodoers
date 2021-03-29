<div>
    {{-- Service Preview Start --}}
    <div class="paymentDetailsPreview py-5" id="paymentDetailsPreview">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6  col-lg-8 col-md-10 col-sm-11 border py-4 border">
                    <div class="w-100 paymentdetailsOrdersummrytext">
                        <h4 class="">Order Summery </h4>
                    </div>
                    <div class="w-100 ">
                        <div class="w25imgdiv ">
                            <div class="text-center">
                                <img src="https://via.placeholder.com/100x100.png" alt="img-fluid w-10" style="height: 100px;width: 100px;">
                            </div>
                        </div>
                        <div class="w75cartdiv ">
                            <div class="">
                                <h5>{{ $service->title }}</h5>
                                <p class="m-0">{{ $service->service_desc }}</p>
                                <p class=" m-0 font-weight-bold text-dark">
                                    <span class="small"> Price :</span>
                                    <span>${{ $service->price }}</span>
                                    @if(session()->has('coupon'))
                                        <br>
                                        <span class="small"> Discount ({{ session('coupon.code') }}) {{ session('coupon.percent') ? '(-' . session('coupon.percent') . '%)' : '' }} :</span>
                                        {{--                                    <span class="text-danger"> &#40; - 30% &#41; </span>--}}
                                        <span class="text-danger"> {{ '-$' . session('coupon.discount') }} <a wire:click.prevent="removeCoupon" class="btn">Remove</a></span>
                                    @endif
                                    <br>
                                    <span>Grand Total: {{ '$' . presentPrice($service->price) }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Service Preview End --}}


    {{-- Order Requirements Form Start --}}
    <div class="sectionPaymentdetailsOrderRequirement  bgcustomLightgray " id="sectionPaymentdetailsOrderRequirement">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                    <div class="">
                        <h4 class="orderRequirementsTxt pb-3">Order Requirements</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                    <form wire:submit.prevent="store" class="row g-3 needs-validation" novalidate autocomplete="off">
                        <div class="col-md-12">
                            <input type="text"
                                   wire:model.defer="form.title"
                                   class="form-control rounded-0 {{ ($errors->has('form.title') ? ' is-invalid' : '') }}"
                                   id="validationCustom01"
                                   value=""
                                   placeholder="Title*"
                            >
                            @if($errors->has('form.title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('form.title') }}
                                </div>
                            @endif
                        </div>

{{--                        <div class="col-md-12">--}}
{{--                            <div class="form-file">--}}
{{--                                <div class="">--}}
{{--                                    <input id="filePondinput1" type="file" class="filepond border" name="filepond"--}}
{{--                                           multiple data-max-file-size="10MB" data-max-files="100">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="form-file">--}}
{{--                                <div class="">--}}
{{--                                    <input id="filePondinput2" type="file" class="filepond border" name="filepond"--}}
{{--                                           multiple data-max-file-size="10MB" data-max-files="100">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-md-12 pt-3">
                            <textarea class="form-control rounded-0 {{ ($errors->has('form.desc') ? ' is-invalid' : '') }}"
                                      wire:model.defer="form.desc"
                                      id="exampleFormControlTextarea1"
                                      rows="8"
                                      placeholder="Addditional Requirements"
                            ></textarea>
                            @if($errors->has('form.desc'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('form.desc') }}
                                </div>
                            @endif
                        </div>
                        @if(!session()->has('coupon'))
                            <div class="col-md-12 pt-3">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="position-relative" style="">
                                            <input type="text"
                                                   wire:model.defer="form.coupon"
                                                   class="form-control rounded-0 {{ ($errors->has('form.coupon') ? ' is-invalid' : '') }}"
                                                   placeholder="Promo Code"
                                            >
                                            @if($errors->has('form.coupon'))
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('form.coupon') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="text-center p-3">
                                            <a wire:click.prevent="checkCoupon" class="btn  bgOne text-white rounded-0 px-5 py-2">Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        <div class="col-md-12 pt-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 textsmCenter">
                                    <label for="validationDefault01" class="form-label rounded-0">Payment
                                        Method*</label>
                                </div>
                                <!--                                selectable payment method -->
                                <div class="col-lg-12 col-md-12">
                                    <div class="selectablescustom">
                                        <div class=" form-check form-check-inline">
                                            <input type="radio"
                                                   wire:model.defer="paymentMethod.paypal"
                                                   class="form-check-input css-checkbox"
                                                   id="inlineRadio1"
                                            >
                                            <label class="form-check-label css-label" for="inlineRadio1"> <img
                                                    src="{{ asset('_assets/_guest/img/paymentdetails/paypal.png') }}"
                                                    alt="" class=" ui-state-default  img-fluid  "></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio"
                                                   wire:model.defer="paymentMethod.visa"
                                                   class="form-check-input css-checkbox"
                                                   id="inlineRadio2"
                                            >
                                            <label class="form-check-label css-label" for="inlineRadio2"><img
                                                    src="{{ asset('_assets/_guest/img/paymentdetails/visa.png') }}"
                                                    alt="" class=" ui-state-default  img-fluid  "></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio"
                                                   wire:model.defer="paymentMethod.bkash"
                                                   class="form-check-input css-checkbox"
                                                   id="inlineRadio3"
                                            >
                                            <label class="form-check-label css-label" for="inlineRadio3"><img
                                                    src="{{ asset('_assets/_guest/img/paymentdetails/bkash.png') }}"
                                                    alt="" class=" ui-state-default  img-fluid  "> </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio"
                                                   wire:model.defer="paymentMethod.mastercard"
                                                   id="inlineRadio4"
                                                   class="form-check-input css-checkbox"
                                            >
                                            <label class="form-check-label css-label" for="inlineRadio4"><img
                                                    src="{{ asset('_assets/_guest/img/paymentdetails/master.png') }}"
                                                    alt="" class=" ui-state-default  img-fluid  "></label>
                                        </div>
                                    </div>
                                </div>

                                @if($errors->has('paymentMethod.' . $item))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('paymentMethod.' . $item) }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 pt-3">
                            <div class="form-group d-none d-lg-block">
                                <div class="form-check text-center">
                                    <label class="form-check-label paymentdetailsCheck" for="gridCheck" style="display: inline;">
                                        By clicking continue, I agreed to <span class="">Designwala's</span> <br> <span><button class="btn btn-link m-0 p-0" type="button" data-toggle="modal" data-target="#exampleModal-1"> Terms &amp; Condition</button></span> and <span><button class="btn btn-link m-0 p-0" type="button" data-toggle="modal" data-target="#exampleModal-2">Privacy Policy</button></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group d-lg-none d-md-block">
                                <div class="form-check text-center">
                                    <label class="form-check-label paymentdetailsCheck" for="gridCheck" style="display: inline;">
                                        By clicking continue, I agreed to <span class="">Designwala  <br> </span> <span><button
                                                class="btn btn-link m-0 p-0" type="button" data-toggle="modal"
                                                data-target="#exampleModal-1"> Terms &amp; Condition</button></span> and
                                        <span><button class="btn btn-link m-0 p-0" type="button" data-toggle="modal"
                                                      data-target="#exampleModal-2">Privacy Policy</button></span>
                                    </label>
                                </div>
                            </div>
                            <div class="text-center p-3">
                                <button class="btn  bgOne text-white rounded-0 px-5 py-2">Continue</button>
                            </div>
                        </div>
                        <div class="col-md-12"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Order Requirements Form End --}}
</div>

@push('scripts')
    @include('alerts.admin_panel.livewire.toast_alert')
@endpush
