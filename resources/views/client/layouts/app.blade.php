<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Designwala</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('_assets/_client/css/bootstrap.min.css') }}">
    <!--Small Menu CSS-->
    <link rel="stylesheet" href="{{ asset('_assets/_client/css/menukit.css') }}"> 
    <!--Theme CSS files-->
    <link rel="stylesheet" href="{{ asset('_assets/_client/css/style.css') }}">
    <!--Media CSS files-->
    <link rel="stylesheet" href="{{ asset('_assets/_client/css/media.css') }}">

    @stack('styles')
</head>

<body>
  
        
    @include('client.includes.header')


    <!--Dashboard-Main Section Start-->

    @yield('content')

    <!--Dashboard-Main Section End-->



    @include('client.includes.footer')


    <!--Javascript files-->
    <script src="{{ asset('_assets/_client/js/jquery.min.js') }}"></script>

    <script src="{{ asset('_assets/_client/js/popper.min.js') }}"></script>

    <script src="{{ asset('_assets/_client/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('_assets/_client/js/offcanvas.js') }}"></script>
    
    <script src="{{ asset('_assets/_client/js/main.js') }}"></script>

    @stack('scripts')


</body>

</html>