@extends('user_panel.layouts.app')
@section('title', 'Order Requirements')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
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
                            <div class="text-center"> <img src="https://via.placeholder.com/100x100.png" alt="img-fluid w-10" style="height: 100px;width: 100px;"> </div>
                        </div>
                        <div class="w75cartdiv ">
                            <div class="">
                                <h5>Social media Banner</h5>
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, recusandae.</p>
                                <p class=" m-0 font-weight-bold text-dark"> <span class="small"> Price :</span> <span>$50</span> <span class="text-danger"> &#40; - $10 &#41; </span> </p>
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
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12">
                            <!--    <label for="validationCustom01" class="form-label">Brand Name*</label>-->
                            <input type="text" class="form-control rounded-0 is-valid" id="validationCustom01" value="" placeholder="Brand Name*" required>
                            <div class="valid-feedback"> Looks good! </div>
                        </div>
                        <div class="col-md-12">
                            <!--    <label for="validationCustom02" class="form-label">Tagline</label>-->
                            <input type="text" class="form-control rounded-0 is-invalid" id="validationCustom02" value="" placeholder="Tagline" required>
                            <div class="valid-feedback"> Looks good! </div>
                            <div class="invalid-feedback"> Looks good! </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-file">
                                <div class="">
                                    <input id="filePondinput1" type="file" class="filepond border" name="filepond" multiple data-max-file-size="10MB" data-max-files="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-file">
                                <div class="">
                                    <input id="filePondinput2" type="file" class="filepond border" name="filepond" multiple data-max-file-size="10MB" data-max-files="100">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 pt-3">
                            <!--    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>-->
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="8" placeholder="Addditional Requirements"></textarea>
                        </div>
                        <div class="col-md-12 pt-3">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="position-relative" style="">
                                        <input type="text" class="form-control rounded-0 is-valid" id="" value="" placeholder="Promo Code">
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Looks good! </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 textsmCenter">
                                    <label for="validationDefault01" class="form-label rounded-0">Payment Method*</label>
                                </div>
                                <!--                                selectable payment method -->
                                <div class="col-lg-12 col-md-12">
                                    <div class="selectablescustom">
                                        <div class=" form-check form-check-inline">
                                            <input class="form-check-input css-checkbox" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label css-label" for="inlineRadio1"> <img src="{{ asset('_user_panel/img/paymentdetails/paypal.png') }}" alt="" class=" ui-state-default  img-fluid  "></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input css-checkbox" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label css-label" for="inlineRadio2"><img src="{{ asset('_user_panel/img/paymentdetails/visa.png') }}" alt="" class=" ui-state-default  img-fluid  "></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input css-checkbox" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                            <label class="form-check-label css-label" for="inlineRadio3"><img src="{{ asset('_user_panel/img/paymentdetails/bkash.png') }}" alt="" class=" ui-state-default  img-fluid  "> </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input css-checkbox" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                            <label class="form-check-label css-label" for="inlineRadio4"><img src="{{ asset('_user_panel/img/paymentdetails/master.png') }}" alt="" class=" ui-state-default  img-fluid  "></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-3">
                            <div class="form-group d-none d-lg-block">
                                <div class="form-check text-center">
                                    <input class="form-check-input float-none" type="checkbox" id="gridCheck" style="
    margin-right: 9px;
">
                                    <label class="form-check-label paymentdetailsCheck" for="gridCheck" style="
    display: inline;
">
                                        I agreed to <span class="">Designwala</span> <span><button class="btn btn-link m-0 p-0" type="button" data-toggle="modal" data-target="#exampleModal-1"> Terms &amp; Condition</button></span> and <span><button class="btn btn-link m-0 p-0" type="button" data-toggle="modal" data-target="#exampleModal-2">Privacy Policy</button></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group d-lg-none d-md-block">
                                <div class="form-check text-center">
                                    <input class="form-check-input float-none" type="checkbox" id="gridCheck" style="
    margin-right: 9px;
">
                                    <label class="form-check-label paymentdetailsCheck" for="gridCheck" style="
    display: inline;
">
                                        I agreed to <span class="">Designwala  <br> </span> <span><button class="btn btn-link m-0 p-0" type="button" data-toggle="modal" data-target="#exampleModal-1"> Terms &amp; Condition</button></span> and <span><button class="btn btn-link m-0 p-0" type="button" data-toggle="modal" data-target="#exampleModal-2">Privacy Policy</button></span>
                                    </label>
                                </div>
                            </div>
                            <div class="text-center p-3">
                                <button class="btn  bgOne text-white rounded-0 px-5 py-2" type="submit" data-toggle="modal" data-target="#signUp">Continue</button>
                            </div>
                        </div>
                        <div class="col-md-12"> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Order Requirements Form End --}}
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
