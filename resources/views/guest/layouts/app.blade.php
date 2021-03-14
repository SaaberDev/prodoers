<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}
    <link rel="icon" href="{{ asset('_assets/_guest/img/D.png') }}" type="image/png" sizes="16x16">

    {{-- Styles --}}
{{--    <link href="{{ mix('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ mix('_assets/_guest/css/guest.css') }}" rel="stylesheet">
    <link href="{{ mix('_assets/_custom/css/custom_styles.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/plugins/jquery-modal/css/jquery.modal.css') }}" rel="stylesheet">
    @livewireStyles
    @stack('styles')
</head>
{{--<body onload="init()">--}}
<body>
@include('guest.includes.header')
@yield('content')
{{-- footer_section --}}
@include('guest.includes.footer')
{{-- footer_section --}}
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('_assets/_guest/js/guest.js') }}"></script>
<script src="{{ mix('_assets/_custom/js/custom_scripts.js') }}"></script>
<script src="{{ asset('vendor/plugins/jquery-modal/js/jquery.modal.js') }}"></script>
<script src="{{ asset('vendor/plugins/jquery-modal/js/custom.js') }}"></script>
@livewireScripts

<!--Start of Tawk.to Script-->
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
<!--End of Tawk.to Script-->

@stack('scripts')
</body>
</html>
