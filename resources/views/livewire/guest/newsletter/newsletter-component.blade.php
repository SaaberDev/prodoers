<form class="pt-3">
    <div class="input-group mb-3">
        <input wire:model.defer="newsletter"
               type="text"
               name="newsletter"
               class="form-control rounded-0 {{ $errors->has('newsletter') ? ' is-invalid' : '' }}"
               placeholder="Enter your email"
               aria-label="Recipient's Email"
               aria-describedby="button-addon2"
        >
        <div class="input-group-append">
            <button wire:click.prevent="store" class="btn btn-outline-secondary px-3 text-white rounded-0" type="button" id="">Subscribe</button>
        </div>
        @if($errors->has('newsletter'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('newsletter') }}</strong>
            </span>
        @endif
    </div>
    {{--<h5 class="text-center text-white" style="background-color: #038D08">Thank you for subscribing to our newsletter !</h5>--}}
</form>

@push('scripts')
    @include('alerts.admin_panel.livewire.toast_alert')
@endpush
