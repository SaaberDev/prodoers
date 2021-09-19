<div class="modalCtm" id="forgot_pass" style="display:none;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center forget-password-modal">
                <h3 class="pb-4">Forgot Password</h3>

                <img src="{{ asset('_assets/_guest/img/notfoundpage/notfound.svg') }}" class="img-fluid" alt="254" />
                <div class="modalButton">
                    <p>
                        Forgot your password ? No problem. Just let us know your email
                        address and we will email you a password reset link that will
                        allow you to choose a new one.
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                @livewire('auth.forgot-password-component')

                <div class="col-md-12">
                    <div class="text-center">
                        <h6>
                            <a class="btn colorOne px-0" href="#sign_in">Back to Sign In</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
