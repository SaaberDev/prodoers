@extends('emails.layouts.app')
@section('title', 'New Order')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    {{-- Body Content --}}
    <div class="container">
        <div class="row" style="height: 513px;">
            <h4 class="mt-5 mb-5">Hello {{ $user->name }},</h4>
            <h4 class="mt-5 mb-5">You have been assigned to a new work.</h4>
            <h4 class="mt-5 mb-5">Hop in, and earn !</h4>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
