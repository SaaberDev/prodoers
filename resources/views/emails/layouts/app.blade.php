<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}
    <link rel="icon" href="{{ asset('_assets/_guest/img/D.png') }}" type="image/png" sizes="16x16">

    {{-- Styles --}}
    <link href="{{ mix('_assets/_guest/css/main.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        footer {
            color: white;
            background: #141414;
            padding-top: 0!important;
            padding-bottom: 0!important;
        }
    </style>
    @livewireStyles
    @stack('styles')
</head>
<body>
@include('emails.includes.header')
@yield('content')
{{-- footer_section --}}
@include('emails.includes.footer')
{{-- footer_section --}}
<script src="{{ mix('_assets/_guest/js/main.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>

@stack('scripts')
</body>
</html>
