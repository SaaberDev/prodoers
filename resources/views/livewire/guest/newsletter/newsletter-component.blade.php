<form class="pt-3">
    <div class="input-group mb-3">
        <input wire:model.defer="subscriber_mail"
               type="text"
               class="form-control rounded-0 {{ $errors->has('subscriber_mail') ? ' is-invalid' : '' }}"
               placeholder="Enter your email"
        >
        <div class="input-group-append">
            <button wire:click.prevent="store" class="btn btn-outline-secondary px-3 text-white rounded-0" type="button" id="">Subscribe</button>
        </div>
        @if($errors->has('subscriber_mail'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('subscriber_mail') }}</strong>
            </span>
        @endif
    </div>
    {{--<h5 class="text-center text-white" style="background-color: #038D08">Thank you for subscribing to our newsletter !</h5>--}}
</form>

@push('scripts')
    @include('alerts.admin_panel.livewire.toast_alert')
@endpush
