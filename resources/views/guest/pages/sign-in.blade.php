@extends('guest.layouts.app')
@section('title', 'category_name')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')

    <section class="login__wrapper">
        <div class="container">
            <div class="row login__area">
                <div class="col-md-12 text-center">
                    <h3>Sign In</h3>
                    <p class="pt-3">Connect with</p>
                    <div class="modalButton">
                        <button type="button" class="btn bgFb">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.885" height="31.385" viewBox="0 0 16.885 31.385">
                                <path id="Icon_zocial-facebook" data-name="Icon zocial-facebook" d="M13.257,16.854V10.86h4.834V7.846a7.887,7.887,0,0,1,2.118-5.555A6.737,6.737,0,0,1,25.34,0h4.8V5.995h-4.8a1.057,1.057,0,0,0-.846.518,2.1,2.1,0,0,0-.377,1.271v3.076h6.025v5.994H24.116V31.385H18.09V16.854Z" transform="translate(-13.257)" fill="#fff"></path>
                            </svg>
                        </button>
                        <button type="button" class="btn bgGoogle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.015" height="24.408" viewBox="0 0 24.015 24.408">
                                <path id="Icon_awesome-google" data-name="Icon awesome-google" d="M24.015,13.052c0,6.963-4.768,11.919-11.81,11.919A12.2,12.2,0,1,1,12.2.563a11.736,11.736,0,0,1,8.184,3.194L17.066,6.95C12.721,2.757,4.641,5.907,4.641,12.767A7.645,7.645,0,0,0,12.2,20.473c4.832,0,6.643-3.464,6.929-5.261H12.2v-4.2H23.823A10.7,10.7,0,0,1,24.015,13.052Z" transform="translate(0 -0.563)" fill="#fff"></path>
                            </svg>
                        </button>
                        <button type="button" class="btn bgTwitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31.679" height="25.729" viewBox="0 0 31.679 25.729">
                                <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter" d="M28.423,9.793c.02.281.02.563.02.844,0,8.583-6.533,18.473-18.473,18.473A18.348,18.348,0,0,1,0,26.2a13.431,13.431,0,0,0,1.568.08A13,13,0,0,0,9.628,23.5,6.5,6.5,0,0,1,3.558,19a8.187,8.187,0,0,0,1.226.1,6.867,6.867,0,0,0,1.709-.221,6.494,6.494,0,0,1-5.206-6.372v-.08a6.539,6.539,0,0,0,2.935.824,6.5,6.5,0,0,1-2.01-8.684A18.455,18.455,0,0,0,15.6,11.361a7.329,7.329,0,0,1-.161-1.487A6.5,6.5,0,0,1,26.674,5.431a12.783,12.783,0,0,0,4.121-1.568A6.475,6.475,0,0,1,27.94,7.441a13.016,13.016,0,0,0,3.739-1.005,13.957,13.957,0,0,1-3.256,3.357Z" transform="translate(0 -3.381)" fill="#fff"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="about_head py-4">
                        <p class="linebackground text-uppercase"><span>Or</span></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div>
                        <form class="row">
                            <div class="mb-3 col-md-12">
                                <input type="text" class="form-control login_email " id="login_email" aria-label="Login Email" placeholder="Email Address">
                            </div>
                            <div class="mb-3 col-md-12">
                                <input type="password" class="form-control login_pass " id="login_pass" aria-label="Login Password" placeholder="Password">
                            </div>
                            <div class="col-md-12">
                                <button id="success_login" class="btn btn-block bgOne text-white py-2 signIn_button">
                                    Sign In
                                </button>
                            </div>
                            <div class="col-md-12 px-4">
                                <div class="row py-4">
                                    <div class="col-sm-6">
                                        <div class=" remember-me form-check">
                                            <input type="checkbox" class="form-check-input" id="remember_me">
                                            <label class="form-check-label" for="remember_me">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="forgotPass">
                                            <a href="#" class="">Forgot Password ?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-center forgotPass">
                                    <h6>Not a member yet?
                                        <a class="btn colorOne px-0" href="#sign_up">Signup</a>
                                    </h6>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
