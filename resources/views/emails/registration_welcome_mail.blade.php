@extends('emails.layouts.app')
@section('title', 'Welcome')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    {{-- Body Content --}}
    <div class="container">
        <div class="row" style="height: 513px;">
            <h4 class="mt-5 mb-5">Welcome to Designwala ... :)</h4>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
