@extends('guest.layouts.app')
@section('title', 'Order Requirements')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    @livewire('guest.order.order-component', ['service' => $service])
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
