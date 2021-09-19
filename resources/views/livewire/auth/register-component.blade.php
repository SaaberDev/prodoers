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
                <span class="invalid-feedback" style="padding: 0 26px;">
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
                <span class="invalid-feedback" style="padding: 0 26px;">
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
                <span class="invalid-feedback" style="padding: 0 26px;">
                <strong>{{ $errors->first('form.confirm_password') }}</strong>
            </span>
            @endif
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-block bgOne text-white py-2 signUp_button">
                {{ __('Sign Up') }}
            </button>
        </div>
    </form>
</div>

