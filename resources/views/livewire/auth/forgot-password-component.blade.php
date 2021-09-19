<div>
    <div>
        @if (session()->has('status'))
            <div id="successMessage" class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>


    <form class="row" wire:submit.prevent="store">
        <div class="col-md-12">
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
        <div class="col-md-12 py-4">
            <button type="submit" class="btn btn-block bgOne text-white py-2 signIn_button">
                {{ __('Send reset link') }}
            </button>
        </div>
    </form>
</div>

