@extends('admin_panel.layouts.app')
@section('title', 'page_name')

@push('styles')
{{-- Internal Styles --}}
@endpush

@section('content')
{{-- Body Content --}}
@endsection

@push('scripts')
{{-- Internal Scripts --}}
@endpush


{{ $errors->has('service_category_title') ? ' is-invalid' : '' }}
@if($errors->has('service_category_title'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('service_category_title') }}</strong>
    </span>
@endif
