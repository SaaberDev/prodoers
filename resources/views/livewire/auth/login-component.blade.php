<div>
    @if (session()->has('message'))
        <div id="successMessage" class="alert alert-success">
            {{ session('message') }}
        </div>
    @elseif (session()->has('error'))
        <div id="errorMessage" class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form class="row" wire:submit.prevent="store">
        <div class="mb-3 col-md-12">
            <input type="text"
                   wire:model.defer="form.email"
                   class="form-control login_email {{ $errors->has('form.email') ? ' is-invalid' : '' }}"
                   id="login_email"
                   aria-label="Login Email"
                   placeholder="{{ __('Email Address') }}"
            >
            @if($errors->has('form.email'))
                <span class="invalid-feedback" style="padding: 0 26px;">
                <strong>{{ $errors->first('form.email') }}</strong>
            </span>
            @endif
        </div>
        <div class="mb-3 col-md-12">
            <input type="password"
                   wire:model.defer="form.password"
                   class="form-control login_pass {{ $errors->has('form.password') ? ' is-invalid' : '' }}"
                   id="login_pass"
                   aria-label="Login Password"
                   placeholder="{{ __('Password') }}">
            @if($errors->has('form.password'))
                <span class="invalid-feedback" style="padding: 0 26px;">
                <strong>{{ $errors->first('form.password') }}</strong>
            </span>
            @endif
        </div>
        <div class="col-md-12">
            <button id="success_login" class="btn btn-block bgOne text-white py-2 signIn_button">
                {{ __('Sign In') }}
            </button>
        </div>
        <div class="col-md-12 px-4">
            <div class="row py-4">
                <div class="col-md-6">
                    <div class=" form-check">
                        <input type="checkbox"
                               wire:model="remember"
                               class="form-check-input"
                               id="remember_me"
                        >
                        <label class="form-check-label"
                               for="remember_me">{{ __('Remember Me') }}</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="forgotPass">
                        <a href="#forgot_pass" class="">Forgot Password ?</a>
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
