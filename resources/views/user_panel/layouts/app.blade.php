<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}
    <link rel="icon" href="{{ asset('_user_panel/img/D.png') }}" type="image/png" sizes="16x16">

    {{-- SEO Meta Tags --}}
    @include('user_panel.includes.seo_meta')

    {{-- Styles --}}
    <link href="{{ mix('_user_panel/css/user_panel.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
@include('user_panel.includes.header')
@yield('content')
{{-- footer_section --}}
@include('user_panel.includes.footer')
{{-- footer_section --}}
<script src="{{ mix('_user_panel/js/user_panel.js') }}"></script>
@include('user_panel.includes.tawk_to.tawk_to')
<script src="{{ mix('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
