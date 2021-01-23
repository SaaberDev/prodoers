<div class="col-md-3 ">Show
    <select wire:model="recordPerPage" class="custom-select custom-select-sm ">
        <option>5</option>
        <option>10</option>
        <option>15</option>
    </select>
</div>

@push('scripts')
    {{-- Internal Scripts --}}
    <script>
        /*
        *  Tagify for Service Tags
        * */

        const input = document.querySelector('input[name=tags]');
        const tagify = new Tagify(input, {
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(',')
        });
    </script>
@endpush
