<div>
    <section class="order-section d-md-block d-none  py-5">
        <div class="container">
            <div class="h-wraper">
                <h2> Order Summery</h2>
            </div>
            <div class="order-wraper">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="img-thumb">
                            <img src="{{ showImage($service, 'service') }}" class="img-fluid" alt="Designwala">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 border-right">
                        <div class="logo-design-area">
                            <h2>{{ $service->title }} (${{ $service->price }})</h2>
                            <div class="review-area">
                                <div class="row review-area-row">
                                    {{--<div class=" col-md-7 col-lg-6 col-xl-5 col-xxl-4">
                                        <div class="starIcons">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.906" height="25.667" viewBox="0 0 28.906 27.667">
                                                <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00"/>
                                            </svg>
                                        </span>
                                            <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.906" height="25.667" viewBox="0 0 28.906 27.667">
                                                <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00"/>
                                            </svg>
                                        </span>
                                            <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.906" height="25.667" viewBox="0 0 28.906 27.667">
                                                <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00"/>
                                            </svg>
                                        </span> <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.906" height="25.667" viewBox="0 0 28.906 27.667">
                                                <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00"/>
                                            </svg>
                                        </span>
                                            <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.906" height="25.667" viewBox="0 0 28.906 27.667">
                                                <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00"/>
                                            </svg>
                                        </span>
                                            <span>
                                            <p class="p-wraper">(15 Review)</p>
                                        </span>
                                        </div>
                                    </div>--}}

                                    <div class="col-lg-5 col-xl-4 col-md-5">
                                        <div class="d-flex">
                                            <p class="p-wraper">Delivery Time</p>
                                            <p class="p-wraper3">{{ $service->delivery_time }} Days</p>
                                        </div>
                                    </div>
                                    <div class="p-wraper4">
                                        <p>{{ $service->short_desc }}</p>
                                    </div>

                                    <div class="accordien_wrapper-2">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <a class="nav-link collapsed custom custom-2  " data-bs-toggle="collapse" href="#services" role="button" aria-expanded="true">What Includes

                                                        <span class="nav-arrow custom-arrow">
                                                            <img src="{{ asset('_assets/_guest/img/paymentdetails/dropdown.svg') }}" class="img-fluid" alt="dropdown">
                                                        </span>
                                                    </a>

                                                    <div class="collapse show cl-custom" id="services">
                                                        <div class="row">
                                                            <div class="col-lg-5 col-md-5">
                                                                <ul class="list-unstyled">
                                                                    <li class=""><a href="#">Print Ready Files</a></li>
                                                                    <li><a href="#">High Resolution</a></li>
                                                                    <li><a href="#">Two Unique Concepts</a></li>

                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-7 col-md-7">
                                                                <ul class="list-unstyled">
                                                                    <li class=""><a href="#">Four Revisions </a></li>
                                                                    <li><a href="#">100% Ownership Rights</a></li>
                                                                    <li><a href="#">Print and Web Files : RGB, CMYK, JPEG, PNG, PDF</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="order-price-total">
                            <div class="order-section">
                                <h2>Order Details</h2>
                                <div class="row justify-content-between">
                                    <div class="col-lg-9 col-md-9"><p>Price</p></div>
                                    <div class="col-lg-3 col-md-3"><p class="p-left">${{ $service->price }}</p></div>
                                    @if(session()->has('coupon'))
                                        <div class="col-lg-9 col-md-3">
                                            <div class="discont-wraper d-flex">
                                                <p>Discount <span>({{ session('coupon.code', 'XXXX') }}) {{ session('coupon.percent') ? '(-' . session('coupon.percent') . '%)' : '0%' }}</span></p>
                                                <a wire:click.prevent="removeCoupon"><img src="{{ asset('_assets/_guest/img/paymentdetails/x.svg') }}" alt="close"></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-3">
                                            <p class="color">{{ '-$' . session('coupon.discount', 0) }}</p>
                                        </div>
                                    @endif
{{--                                    <div class="col-lg-9 col-md-9"><p>Service Charge</p></div>--}}
{{--                                    <div class="col-lg-3 col-md-3"><p class="p-left">$10</p></div>--}}
                                </div>
                            </div>
                            <hr>
                            <div class="total-section">
                                <div class="row justify-content-between">
                                    <div class="col-lg-8 col-md-7">
                                        <h3 class="total-text2">Total</h3>
                                    </div>
                                    <div class="col-lg-4 col-md-5">
                                        <h3 class="total-text">${{ session('order.grand_total', 0) }}</h3>
                                    </div>
                                </div>
                                <p>Service charge are counted for Vat exclusive</p>

                            </div>
                            @if(!session()->has('coupon'))
                            <div class="cupon-wraper">
                                <form action="" class="for-flex">
                                    <input type="text"
                                           wire:model.defer="form.coupon"
                                           class="cp {{ ($errors->has('form.coupon') ? ' warning-border-color' : '') }}"
                                           placeholder="Promo Code"
                                    >
                                    @if($errors->has('form.coupon'))
                                        <span class="error-message" style="padding: 6px 0 0 0;">
                                            <p>{{ $errors->first('form.coupon') }}</p>
                                        </span>
                                    @endif
                                    <div>
                                        <button wire:click.prevent="checkCoupon" class="c2">Apply</button>
                                    </div>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                </div> <!--row-->
            </div>
        </div>
    </section>

    <!-- Order Requirement start -->
    <section class="Order-Requirement d-md-block d-none">
        <div class="container">
            <span class="hr-border"></span>
            <h2> Order Requirement</h2>
            <div class="row">

                <div class="col-lg-7 col-md-7">
                    <div class="text-area-wraper d-md-block d-none ">
                        <textarea wire:model.defer="form.requirements"
                                  class="form-control c-custom rounded-0 {{ ($errors->has('form.requirements') ? ' warning-border-color' : '') }}"
                                  id="exampleFormControlTextarea1"
                                  rows="10"
                                  placeholder="Write here if you want to tell anything"
                        ></textarea>
                        @if($errors->has('form.requirements'))
                            <div class="error-message" style="padding: 6px 0 0 0;">
                                <p>{{ $errors->first('form.requirements') }}</p>
                            </div>
                        @endif
                        <div class="problem" style="{{ $errors->has('form.requirements') ? 'margin-top: 8px;' : '' }}">
                            <div class="form-group">
                                <div class="needsclick dropzone" id="multiple-media-dropzone">
                                    <div class="dz-message" data-dz-message>
                                        <span>Drop files here or click to upload.</span>
                                        <span>Maximum allowed file size 2MB. Allowed file types are jpeg, png.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 d-md-block d-none ">
                    <div class="Instruction">
                        <h3>Instruction</h3>
                        <ul>
                            @forelse($service->serviceCategories->serviceCategoryInstructions as $instructions)
                                <li>{{ $instructions->order_instructions }}</li>
                            @empty
                                No Instruction Available
                            @endforelse
                        </ul>
                        <p>{{ $service->serviceCategories->order_instruction_desc }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pyment-getway d-md-block d-none">
        <div class="container">
            <span class="hr-border"></span>
            <div class="row align-items-center">
                @if($errors->has('form.paymentMethod'))
                    <div class="row">
                        <div class="col-md-12" style="display: flex; justify-content: center;">
                            <div class="error-message" style="padding: 6px 0 0 0;margin-left: 109px;">
                                <p>{{ $errors->first('form.paymentMethod') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="offset-lg-3 col-lg-2 offset-xl-5 offset-md-1 col-xl-2 col-md-3">
                    <div class="pyment-wraper">
                        <h2>Select Payment</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-5 col-md-8">
                    <div class="selectablescustom">
                        <input type="text" value="" class="{{ $errors->has('form.paymentMethod') ? ' is-invalid' : '' }}" hidden>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class=" form-check form-check-inline">
                                    <input wire:model.defer="form.paymentMethod"
                                           class="form-check-input css-checkbox"
                                           type="radio"
                                           name="payment_method"
                                           id="inlineRadio1"
                                           value="paypal"
                                    >
                                    <label class="form-check-label css-label" for="inlineRadio1"> <img src="{{ asset('_assets/_guest/img/paymentdetails/paypal.png') }}" alt="" class=" ui-state-default  img-fluid  "></label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="form-check form-check-inline">
                                    <input wire:model.defer="form.paymentMethod"
                                           class="form-check-input css-checkbox"
                                           type="radio"
                                           name="payment_method"
                                           id="inlineRadio2"
                                           value="visa"
                                    >
                                    <label class="form-check-label css-label" for="inlineRadio2"><img src="{{ asset('_assets/_guest/img/paymentdetails/visa.png') }}" alt="" class=" ui-state-default  img-fluid  "></label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="form-check form-check-inline">
                                    <input wire:model.defer="form.paymentMethod"
                                           class="form-check-input css-checkbox"
                                           type="radio"
                                           name="payment_method"
                                           id="inlineRadio3"
                                           value="bkash"
                                    >
                                    <label class="form-check-label css-label" for="inlineRadio3"><img src="{{ asset('_assets/_guest/img/paymentdetails/bkash.png') }}" alt="" class=" ui-state-default  img-fluid  "> </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="form-check form-check-inline">
                                    <input wire:model.defer="form.paymentMethod"
                                           class="form-check-input css-checkbox"
                                           type="radio"
                                           name="payment_method"
                                           id="inlineRadio4"
                                           value="mastercard"
                                    >
                                    <label class="form-check-label css-label" for="inlineRadio4"><img src="{{ asset('_assets/_guest/img/paymentdetails/master.png') }}" alt="" class=" ui-state-default  img-fluid  "></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group my-label">
                    <input class="form-check-input" type="checkbox" id="gridCheck" style="margin-right:9px;">
                    <label class=" paymentdetailsCheck my-label" for="gridCheck" style="display: inline;">By clicking continue, I agreed to <span class="">Designwala</span> <span><button class="btn btn-link m-0 p-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-1"> Terms &amp; Condition</button></span> and <span><button class="btn btn-link m-0 p-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-2">Privacy Policy</button></span> of designwala
                    </label>
                </div>
            </div>
            <div class="row justify-content-end g-3">
                <div class="col-lg-4 col-md-4">
                    <div class="checkout_btn_wraper" wire:ignore>
                        <button wire:click.prevent="store"
                                type="submit"
                                class="custom-checkout-btn"
                                id="checkout-btn"
                        >
                            Continue to checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="Payment-getway d-md-block d-none  py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7 col-md-10">
                <div class="payment_gatway_wraper">
                    <h4 class="text-center">Payment getway</h4>
                    <img src="{{ asset('_assets/_guest/img/paymentdetails/payment-icon.svg') }}" class="img-fluid" alt="sslcommerz">
                    <h4 class="text-center m-t">Verified by</h4>
                    <div class="sslcommerz_wraper text-center">
                        <img src="{{ asset('_assets/_guest/img/paymentdetails/sslcomers.svg') }}" class="img-fluid" alt="sslcommerz">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Order Requirement end -->

<!-- ****************************** Mobile start*****************************************-->

    {{-- Step One --}}
    <div id="orderRequirement" class="{{ $currentStep != 1 ? 'd-none' : '' }}">
        <section class="order-wraper2 d-block d-md-none">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="logo-area">
                            <h2>Logo Design Professional ($50)</h2>
{{--                            <div class="row rating-row align-items-center">--}}
{{--                                <div class="col-4">--}}
{{--                                    <div class="starIcons ">--}}
{{--                                            <span>--}}
{{--                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 28.906 27.667">--}}
{{--                                                    <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M14.344.962,10.816,8.115,2.922,9.266a1.73,1.73,0,0,0-.956,2.95l5.711,5.565L6.326,25.642a1.728,1.728,0,0,0,2.507,1.821l7.062-3.712,7.062,3.712a1.729,1.729,0,0,0,2.507-1.821l-1.351-7.861,5.711-5.565a1.73,1.73,0,0,0-.956-2.95L20.973,8.115,17.445.962a1.73,1.73,0,0,0-3.1,0Z" transform="translate(-1.441 0.001)" fill="#f9bf00"/>--}}
{{--                                                </svg>--}}

{{--                                            </span>--}}

{{--                                        <span class="review2">4.9</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-8">--}}
{{--                                    <p class="p-wraper2">(15 Review)</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="row align-items-center">
                                <div class="col-7">
                                    <p class="p-wraper6">Delivery Time</p>
                                </div>
                                <div class="col-5">
                                    <p class="p-wraper5">2 Days</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="img-thumb2">
                            <img src="{{ asset('_assets/_guest/img/paymentdetails/rectangle.svg') }}" alt="Designwala">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="accordien_wrapper-3">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <a class="nav-link collapsed custom custom-2  " data-bs-toggle="collapse" href="#services" role="button" aria-expanded="false">What Includeds

                                        <span class="nav-arrow custom-arrow">
                                        <img src="{{ asset('_assets/_guest/img/paymentdetails/dropdown.svg') }}" class="img-fluid" alt="Designwala">
                                    </span>
                                    </a>
                                    <div class="collapse cl-custom" id="services">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="list-unstyled">
                                                    <li class=""><a href="#">Print Ready Files</a></li>
                                                    <li><a href="#">High Resolution</a></li>
                                                    <li><a href="#">Two Unique Concepts</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-unstyled">
                                                    <li class=""><a href="#">Four Revisions </a></li>
                                                    <li><a href="#">100% Ownership Rights</a></li>
                                                    <li><a href="#">Print and Web Files : RGB, CMYK, JPEG, PNG, PDF</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="order-require d-block d-md-none">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <p class="p-order">Order Requirement</p>
                    </div>
                    <div class="col-5">
                        <div class="tol-tip">
                            <a href="#" class="a">Instruction (?)</a>
                            <p class="p">
                                <span>
                                    @forelse($service->serviceCategories->serviceCategoryInstructions as $instructions)
                                    ▪  {{ $instructions->order_instructions }} <br>
                                    @empty
                                        No Instruction Available
                                    @endforelse
                                </span>
                                {{ $service->serviceCategories->order_instruction_desc }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-area">
                    <textarea wire:model.defer="form.requirements"
                              class="form-control c-custom rounded-0 {{ ($errors->has('form.requirements') ? ' warning-border-color' : '') }}"
                              id="exampleFormControlTextarea1"
                              rows="10"
                              placeholder="Write here if you want to tell anything"
                    ></textarea>
                    @if($errors->has('form.requirements'))
                        <div class="error-message" style="padding: 6px 0 0 0;">
                            <p>{{ $errors->first('form.requirements') }}</p>
                        </div>
                    @endif

                    <div class="form-group">
                        <div class="needsclick dropzone" id="multiple-media-dropzone-mobile">
                            <div class="dz-message" data-dz-message>
                                <span>Drop files here or click to upload.</span>
                                <span>Maximum allowed file size 2MB. Allowed file types are jpeg, png.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container d-block d-md-none">
            <div class="btn-ct">
                <button id="requirementBtn" wire:click.prevent="stepOne" class="c-btn-order">Order Summery<img src="{{ asset('_assets/_guest/img/paymentdetails/arrow-down.svg') }}" alt="designwala"></button>
            </div>
        </div>
    </div>

    {{-- Step Two --}}
    <div id="orderSummery" class="orderSummery {{ $currentStep != 2 ? 'd-none' : '' }}">
        <section class="order-summ d-block d-md-none">
            <div class="container">
                <div class="ct2">
                    <button wire:click.prevent="back(1)" id="orderSummeryBtn" class="c-btn-order2"><img src="{{ asset('_assets/_guest/img/paymentdetails/right.svg') }}" class="right" alt="designwala">Order Requirements</button>
                </div>
                <div class="order">
                    <h4>Order Summery</h4>
                    <div class="row">
                        <div class="col-10">
                            <div class="wraper-or">
                                <p>Price</p>
                                @if(session()->has('coupon'))
                                    <p>Discount ({{ session('coupon.code', 'XXXX') }}) {{ session('coupon.percent') ? '(-' . session('coupon.percent') . '%)' : '0%' }}<a wire:click.prevent="removeCoupon"><img src="{{ asset('_assets/_guest/img/paymentdetails/x.svg') }}" alt="close"></a></p>
                                @endif
    {{--                            <p>Service Charge</p>--}}
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="price-wraper">
                                <p>${{ $service->price }}</p>
                                @if(session()->has('coupon'))
                                    <p class="cp">{{ '-$' . session('coupon.discount', 0) }}</p>
                                @endif
    {{--                            <p>$10</p>--}}
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <p class="total">Total</p>
                        </div>
                        <div class="col-2">
                            <p class="total"> {{ '$' . presentPrice($service->price) }}</p>
                        </div>
                    </div>
                    <div class="servic">
                        <p>Service charge are counted for Vat exclusive</p>
                    </div>

                    @if(!session()->has('coupon'))
                        <div class="cupon-wraper" style="padding-bottom: 0px;">
                            <form action="">
                                <input type="text"
                                       wire:model.defer="form.coupon"
                                       class="cp {{ ($errors->has('form.coupon') ? ' warning-border-color' : '') }}"
                                       placeholder="Promo Code"
                                >
                                @if($errors->has('form.coupon'))
                                    <span class="error-message" style="padding: 6px 0 0 0;">
                                        <p>{{ $errors->first('form.coupon') }}</p>
                                    </span>
                                @endif

                                <div>
                                    <button wire:click.prevent="checkCoupon" class="custom-checkout-btn c2">Apply</button>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
                <div class="select-part">
                    <div class="h5">
                        <h5>Select payment</h5>
                    </div>
                    <div class="col-12" style="text-align: center;">
                        <div class="selectablescustom">

                            <!--Payemnt Method-->
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" value="" class="{{ $errors->has('form.paymentMethod') ? ' is-invalid' : '' }}" hidden>
                                    <div class=" form-check form-check-inline">
                                        <input wire:model.defer="form.paymentMethod"
                                               class="form-check-input css-checkbox"
                                               type="radio"
                                               name="payment_method"
                                               id="inlineRadio5"
                                               value="paypal"
                                        >
                                        <label class="form-check-label css-label" for="inlineRadio5"> <img src="{{ asset('_assets/_guest/img/paymentdetails/paypal.png') }}" alt="" class=" ui-state-default  img-fluid  "></label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check form-check-inline">
                                        <input wire:model.defer="form.paymentMethod"
                                               class="form-check-input css-checkbox"
                                               type="radio"
                                               name="payment_method"
                                               id="inlineRadio6"
                                               value="visa"
                                        >
                                        <label class="form-check-label css-label" for="inlineRadio6"><img src="{{ asset('_assets/_guest/img/paymentdetails/visa.png') }}" alt="" class=" ui-state-default  img-fluid  "></label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check form-check-inline">
                                        <input wire:model.defer="form.paymentMethod"
                                               class="form-check-input css-checkbox"
                                               type="radio"
                                               name="payment_method"
                                               id="inlineRadio7"
                                               value="bkash"
                                        >
                                        <label class="form-check-label css-label" for="inlineRadio7"><img src="{{ asset('_assets/_guest/img/paymentdetails/bkash.png') }}" alt="" class=" ui-state-default  img-fluid  "> </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check form-check-inline">
                                        <input wire:model.defer="form.paymentMethod"
                                               class="form-check-input css-checkbox"
                                               type="radio"
                                               name="payment_method"
                                               id="inlineRadio8"
                                               value="mastercard"
                                        >
                                        <label class="form-check-label css-label" for="inlineRadio8"><img src="{{ asset('_assets/_guest/img/paymentdetails/master.png') }}" alt="" class=" ui-state-default  img-fluid  "></label>
                                    </div>
                                </div>
                            </div>

                            <!--Payemnt Method-->

                            <div class="row">
                                <div class=" offset-7 col-lg-5 col-md-5 d-md-block d-none">
                                    <div class="form-group my-label">
                                        <input class="form-check-input" type="checkbox" id="gridCheck" style="margin-right:9px;">
                                        <label class=" paymentdetailsCheck my-label" for="gridCheck" style="display: inline;">By clicking continue, I agreed to <span class="">Designwala</span> <span><button class="btn btn-link ra" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-1"> Terms &amp; Condition</button></span> and <span><button class="btn btn-link ra" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal-2">Privacy Policy</button></span> of designwala
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if($errors->has('form.paymentMethod'))
                <div class="row">
                    <div class="col-md-12" style="display: flex; justify-content: center;">
                        <div class="error-message" style="padding: 6px 0 0 0;margin-left: 109px;">
                            <p>{{ $errors->first('form.paymentMethod') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="container d-block d-md-none ">
                <div class="btn-ct">
                    <button  wire:click.prevent="store" class="c-btn-order">Continue to pay<img src="{{ asset('_assets/_guest/img/paymentdetails/arrow-down.svg') }}" alt="designwala"></button>
                </div>
            </div>
            <div class="Payment-getway d-block  d-md-none">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="payment_gatway_wraper">
                                <h4 class="text-center m-t">Verified by</h4>
                                <div class="sslcommerz_wraper text-center">
                                    <img src="{{ asset('_assets/_guest/img/paymentdetails/sslcomers.svg') }}" class="img-fluid" alt="sslcommerz">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

</div>

@push('scripts')
    @include('alerts.admin_panel.livewire.toast_alert')
@endpush
