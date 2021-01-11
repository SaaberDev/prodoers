@extends('admin_panel.layouts.app')
@section('title', 'Add Tags')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    @livewire('services.tag.index-component')
@endsection

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
        document.addEventListener('refreshComponent', function () {
            tagify.refresh();
        })
    </script>
@endpush
