@extends('admin_panel.layouts.app')
@section('title', 'Add Service Tags')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    @livewire('admin.services.tag.index-component')
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    <script>
        document.addEventListener('livewire:load', function () {
            // The DOM element you wish to replace with Tagify
            const input = document.querySelector('input[name=tags]');
            // initialize Tagify on the above input node reference
            new Tagify(input, {
                pattern             : /^[^\W_]{3,48}$/,
                delimiters          : ",| ",
            });
        })

    </script>
    @include('alerts.admin_panel.delete_confirmation_modal')
@endpush
