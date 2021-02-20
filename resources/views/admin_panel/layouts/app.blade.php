<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('_assets/_admin_panel/img/D.png')}}" type="image/png" sizes="16x16">

    {{-- SEO Meta Tags --}}
    @include('admin_panel.includes.seo_meta')

    {{-- Styles --}}
    <link href="{{ mix('_assets/_admin_panel/css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    @stack('styles')
</head>
<body class="classPage1dashboard">

{{-- Header Section --}}
@include('admin_panel.includes.header')

{{-- Navbar for mobile view --}}
@include('admin_panel.includes.navbar.mobile_left_navbar')

<div class="section sidebarNavBody">
    <div class="container-fluid ">
        <div class="row">
            {{-- Left Navbar --}}
            @include('admin_panel.includes.navbar.left_navbar')
            {{-- Body Content--}}
            @yield('content')
        </div>
    </div>
</div>
{{-- footer_section --}}
@include('admin_panel.includes.footer')
{{-- footer_section --}}
<script src="{{ mix('_assets/_admin_panel/js/dashboard.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
@livewireScripts
@stack('scripts')
@include('alerts.admin_panel._alert')
</body>
</html>
