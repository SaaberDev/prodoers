@extends('guest.layouts.app')
@section('title', 'Terms and Conditions')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    {{-- Body Content --}}
    <div class="container">
        <h3 style="margin: 30px 0 30px 0;">@yield('title')</h3>
        {!! $company_policy['terms_and_conditions'] !!}
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
