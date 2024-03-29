@extends('guest.layouts.app')
@section('title', 'Cookie Policy')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    {{-- Body Content --}}
    <div class="container">
        <h3 style="margin: 30px 0 30px 0;">@yield('title')</h3>
        <p style="text-align: justify">{{ getKey('policy_cookie') }}</p>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
