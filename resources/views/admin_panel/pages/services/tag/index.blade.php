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
    @include('alerts.admin_panel.delete_confirmation_modal')
@endpush
