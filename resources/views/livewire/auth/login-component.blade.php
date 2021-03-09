<form class="row" wire:submit.prevent="store" {{--action="{{ route('login') }}" method="POST"--}}>
        {{--    @csrf--}}
        {{--    @csrf @method('POST')--}}
        <div class="mb-3 col-md-12">
            <input type="text"
                   wire:model.defer="form.email"
                   class="form-control {{ $errors->has('form.email') ? ' is-invalid' : '' }}"
                   id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="{{ __('Email Address / Username') }}"
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
                   class="form-control {{ $errors->has('form.password') ? ' is-invalid' : '' }}"
                   id="exampleInputPassword1"
                   placeholder="{{ __('Password') }}">
            @if($errors->has('form.password'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('form.password') }}</strong>
            </span>
            @endif
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-block bgOne text-white py-2">
                {{ __('Sign In') }}
            </button>
        </div>
        <div class="col-md-12">
            <div class="row py-4">
                <div class="col-md-6">
                    <div class=" form-check">
                        <input type="checkbox" class="form-check-input"
                               id="exampleCheck1">
                        <label class="form-check-label"
                               for="exampleCheck1">{{ __('Remember Me') }}</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="forgotPass">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="">{{ __('Forgot Password?') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
        </div>
    </form>
