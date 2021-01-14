<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}
    <link rel="icon" href="{{ asset('_user_panel/img/D.png') }}" type="image/png" sizes="16x16">

    {{-- Styles --}}
    <link href="{{ mix('_user_panel/css/user_panel.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    @stack('styles')
</head>
<body>
@include('user_panel.includes.header')
@yield('content')
{{-- footer_section --}}
@include('user_panel.includes.footer')
{{-- footer_section --}}
<script src="{{ mix('_user_panel/js/user_panel.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
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
