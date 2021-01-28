@extends('guest.layouts.app')
@section('title', 'Payment Policy')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    {{-- Body Content --}}
    <div class="container">
        <h3 style="margin: 30px 0 30px 0;">@yield('title')</h3>
        <p style="text-align: justify">{{ getPolicyKey('policy_payment') }}</p>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
