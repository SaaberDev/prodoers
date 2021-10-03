<div>
    <form class="d-flex {{ $errors->has('subscriber_mail') ? 'warning-border-color' : '' }}">
        <input wire:model.defer="subscriber_mail"
               class="form-control"
               type="text"
               aria-label="Subscribe to newsletter"
               placeholder="Type your email address"
        >
        <button wire:click.prevent="store"
                class="btn"
                type="submit"
        >
            Subscribe
        </button>
    </form>

    @if($errors->has('subscriber_mail'))
        <span class="error-message">
            <p>{{ $errors->first('subscriber_mail') }}</p>
        </span>
    @endif
</div>

@push('scripts')
    @include('alerts.admin_panel.livewire.toast_alert')
@endpush
