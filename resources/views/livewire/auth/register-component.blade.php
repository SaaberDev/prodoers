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
                   id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="{{ __('Email Address') }}"
            >
            @if($errors->has('form.email'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('form.email') }}</strong>
            </span>
            @endif
        </div>
        <div class="mb-3 col-md-12">
            <input type="password"
                   wire:model.defer="form.password"
                   class="form-control login_pass {{ $errors->has('form.password') ? ' is-invalid' : '' }}"
                   id="exampleInputPassword1"
                   placeholder="{{ __('Password') }}"
            >
            @if($errors->has('form.password'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('form.password') }}</strong>
            </span>
            @endif
        </div>
        <div class="mb-3 col-md-12">
            <input type="password"
                   wire:model.defer="form.confirm_password"
                   class="form-control login_confirm_pass {{ $errors->has('form.confirm_password') ? ' is-invalid' : '' }}"
                   id="exampleInputPassword1"
                   placeholder="{{ __('Confirm Password') }}"
            >
            @if($errors->has('form.confirm_password'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('form.confirm_password') }}</strong>
            </span>
            @endif
            {{--        <label>8 characters or longer. Password must contain at least one uppercase, lowercase letter, a number and a--}}
            {{--            symbol.</label>--}}
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-block bgOne text-white py-2 signUp_button">
                {{ __('Sign Up') }}
            </button>
        </div>


        <div class="col-md-12">
            <div class="row py-4">
                <div class="col-md-12">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label agreement" style="font-size: 15px">
                            By signing up, I agree to<span class="colorOne"> ProDoers</span>
                            <span><a href="{{ route('guest.policy.terms_and_conditions') }}" class="btn btn-link m-0 p-0" style="font-size: 15px; color: #000000; font-weight: 600;" type="button" target="_blank"> Terms &amp; Condition</a></span> and
                            <span><a href="{{ route('guest.policy.privacy') }}" class="btn btn-link m-0 p-0" style="font-size: 15px; color: #000000; font-weight: 600;" type="button" target="_blank">Privacy Policy</a>, as well as receive promotional emails.</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="text-center forgotPass">
                <h6>Already a member?
                    <a class="btn colorOne px-0" href="#sign_in">Sign In</a>
                </h6>
            </div>
        </div>
    </form>
</div>

