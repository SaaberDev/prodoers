@if (session()->has('status'))
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            </div>
        </div>
    </div>
@endif

<form class="row" wire:submit.prevent="store">
    <div class="col-md-12">
        <input type="text"
               wire:model.defer="form.email"
               class="form-control {{ $errors->has('form.email') ? ' is-invalid' : '' }}"
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
    <div class="col-md-12 py-4">
        <button type="submit" class="btn btn-block bgOne text-white py-2">
            {{ __('Send reset link') }}
        </button>
    </div>
    <div class="col-md-12">
        <div class="text-center">
            <h6>
                <a class="btn colorOne px-0" href="#sign_in">Back to Sign In</a>
            </h6>
        </div>
    </div>
</form>
