<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" href="img/D.png" type="image/png" sizes="16x16">

    {{-- SEO Meta Tags --}}
    @include('admin.includes.seo_meta')

    {{-- Styles --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="classPage1dashboard">

{{-- Header Section --}}
@include('admin.includes.header')

{{-- Navbar for mobile view --}}
@include('admin.includes.navbar.mobile_left_navbar')

<div class="section sidebarNavBody">
    <div class="container-fluid ">
        <div class="row ">
            {{-- Left Navbar --}}
            @include('admin.includes.navbar.left_navbar')
            {{-- Body Content--}}
            @yield('content')
        </div>
    </div>
</div>
{{-- footer --}}
@include('admin.includes.footer')
{{-- footer --}}
<script src="{{ mix('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
