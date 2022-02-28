<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Generator --}}
    {!! SEO::generate() !!}
    <link rel="icon" href="{{ asset('_assets/_guest/img/favicon.svg') }}" type="image/png" sizes="18x18">

    {{-- Styles --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('_assets/_guest/css/main.css') }}" rel="stylesheet">
    <link href="{{ mix('_assets/plugins/jquery-modal/css/jquery-modal.css') }}" rel="stylesheet">

    {{-- Livewire Styles --}}
    @livewireStyles
    {{-- Internal Styles --}}
    @stack('styles')
</head>
<body>
{{-- Header --}}
@include('guest.includes.header')

{{-- Content --}}
@yield('content')

{{-- footer_section --}}
@include('guest.includes.footer')

{{-- Livewire Scripts --}}
@livewireScripts
{{--<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>--}}
{{-- Scripts --}}
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('_assets/_guest/js/main.js') }}"></script>
<script src="{{ mix('_assets/plugins/jquery-modal/js/jquery-modal.js') }}"></script>

{{-- Start of Tawk.to Script --}}
{{--<script type="text/javascript">--}}
{{--    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();--}}
{{--    (function(){--}}
{{--        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];--}}
{{--        s1.async=true;--}}
{{--        s1.src='https://embed.tawk.to/5fd806f7a8a254155ab36231/1ephtmdub';--}}
{{--        s1.charset='UTF-8';--}}
{{--        s1.setAttribute('crossorigin','*');--}}
{{--        s0.parentNode.insertBefore(s1,s0);--}}
{{--    })();--}}
{{--</script>--}}
{{-- End of Tawk.to Script --}}

{{--@if(Auth::check())--}}
    @if(Session::has('auth_modal') || Session::has('auth_modal') == 'login')
        <script>
            $('#logged_in').modalCtm({
                closeExisting: true,
                fadeDuration: 250
            });

            window.onpopstate = function() {
                alert("pop!");
            }
        </script>
    @endif
{{--@endif--}}
{{-- Internal Scripts --}}
@include('alerts.admin_panel._alert')
@stack('scripts')
</body>
</html>
