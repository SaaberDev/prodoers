@extends('emails.layouts.app')
@section('title', 'Welcome')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    {{-- Body Content --}}
    <div class="container">
        <div class="row" style="height: 513px;">
            <h4 class="mt-5 mb-5">Hello {{ $user->name }},</h4>
            <h4 class="mt-5 mb-5">Thank you for joining Designwala. Please verify your email address.</h4>
            <a class="btn btn-success" href="{{ $url }}">Verify Email</a>
            <h4 class="mt-5 mb-5">Ignore this mail if you are already verified.</h4>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
