<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Designwala</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--All CSS files-->
    <link rel="stylesheet" href="{{ asset('_assets/_client/css/main.css') }}">

    @stack('styles')
</head>

<body>
  
        
    @include('client.includes.header')


    <!--Dashboard-Main Section Start-->

    @yield('content')

    <!--Dashboard-Main Section End-->



    @include('client.includes.footer')


    <!--Javascript files-->
    
    <script src="{{ asset('_assets/_client/js/main.js') }}"></script>

    @stack('scripts')


</body>

</html>