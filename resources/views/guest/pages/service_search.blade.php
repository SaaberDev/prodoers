@extends('guest.layouts.app')
@section('title', 'Services')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    @livewire('guest.search.search-result-page-component')
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
