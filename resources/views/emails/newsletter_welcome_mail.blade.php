@extends('emails.layouts.app')
@section('title', 'Welcome')

@push('styles')
{{-- Internal Styles --}}
@endpush

@section('content')
{{-- Body Content --}}
<div class="container">
    <div class="row" style="height: 513px;">
        <h4 class="mt-5 mb-5">Hello {{ $subscriber->name }},</h4>
        <h4 class="mt-5 mb-5">Welcome to Designwala Newsletter.</h4>
        <h4 class="mt-5 mb-5">Here are some services you might be interested in !</h4>

        <div>
            <h4 class="mt-5 mb-5">Services</h4>
        </div>
    </div>
</div>
@endsection

@push('scripts')
{{-- Internal Scripts --}}
@endpush
