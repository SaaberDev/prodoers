@extends('guest.layouts.app')
@section('title', 'Order Requirements')

@push('styles')
    {{-- Internal Styles --}}
    <link rel="stylesheet" href="{{ mix('_assets/plugins/dropzone/css/dropzone.css') }}">
    <style>
        .text-area-wraper .problem {
            background-color: #f6f6f6;
            margin-top: 36px;
        }
        .orderSummery {
            display: block;
        }
    </style>
@endpush

@section('content')
    @livewire('guest.order.order-component', ['service' => $service])
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
    <script src="{{ mix('_assets/plugins/dropzone/js/dropzone.js') }}"></script>
    {{-- Dropzone Service Image --}}
    @include('plugins.dropzone.create.multiple', [
        'dropzone' => Str::camel('multiple-media-dropzone'),
        'fileInputName' => 'multiple_media',
        'store' => route('super_admin.service.self.storeMedia'),
        'delete' => route('super_admin.service.self.deleteMedia'),
        'maxFilesize' => 2,
        'maxFiles' => 5,
        'acceptedFiles' => 'image/jpeg, image/png',
    ])

    {{-- Dropzone Service Image -- Mobile -- --}}
    @include('plugins.dropzone.create.multiple', [
        'dropzone' => Str::camel('multiple-media-dropzone-mobile'),
        'fileInputName' => 'multiple_media',
        'store' => route('super_admin.service.self.storeMedia'),
        'delete' => route('super_admin.service.self.deleteMedia'),
        'maxFilesize' => 2,
        'maxFiles' => 5,
        'acceptedFiles' => 'image/jpeg, image/png',
    ])
@endpush
