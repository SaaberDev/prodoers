<form wire:submit.prevent="store" {{--action="{{ route('guest.newsletter.store') }}"--}}class="pt-3">
{{--    @csrf @method('POST')--}}
    <div class="input-group mb-3">
        <input wire:model="newsletter"
               type="text"
               name="newsletter"
               class="form-control rounded-0 {{ $errors->has('newsletter') ? ' is-invalid' : '' }}"
               placeholder="Enter your email"
               aria-label="Recipient's Email"
               aria-describedby="button-addon2"
        >
        <div class="input-group-append">
            <button class="btn btn-outline-secondary px-3 text-white rounded-0" type="submit" id="">Subscribe</button>
        </div>
        @if($errors->has('newsletter'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('newsletter') }}</strong>
            </span>
        @endif
    </div>
</form>
