@extends('admin_panel.layouts.app')
@section('title', 'Add Tags')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    @livewire('admin.services.tag.index-component')
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    @include('alerts.admin_panel.delete_confirmation_modal')
    <script>
        /*
        *  Tagify for Service Tags
        * */
        Livewire.on('postAdded', function (){
            const inputTag = document.querySelector('input[name=tags]')
            new Tagify(inputTag, {
                originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(','),
            });
        })
    </script>
@endpush
