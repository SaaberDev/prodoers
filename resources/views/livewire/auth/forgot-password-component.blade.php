<div>
    @if (session()->has('status'))
        <div id="successMessage" class="alert alert-success">
            {{ session('status') }}
        </div>
        <script>
            $(document).ready(function(){
                setTimeout(function() {
                    $('#successMessage').fadeOut('slow');
                }, 3000);
            });
        </script>
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
    </form>
</div>


