<div>
    <form class="d-flex" style="{{ $errors->has('subscriber_mail') ? 'border: 1px solid #aa0719;' : '' }}">
        <input wire:model.defer="subscriber_mail"
               class="form-control"
               placeholder="Type your email address"
               type="text"
        >

        <button wire:click.prevent="store"
                class="btn"
                type="submit"
        >
            Subscribe
        </button>
    </form>

    @if($errors->has('subscriber_mail'))
        <span class="">
            <strong>{{ $errors->first('subscriber_mail') }}</strong>
        </span>
    @endif
</div>

@push('scripts')
    @include('alerts.admin_panel.livewire.toast_alert')
@endpush
