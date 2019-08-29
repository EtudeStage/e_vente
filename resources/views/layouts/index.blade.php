<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap4/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main_styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


    @yield('CSS')


</head>
<body>
<div class="super_container">

   @include('layouts.navigation.main-navigation')

    <div class="page-content">
        @yield('content')
    </div>

</div>
<script src="{{"js/jquery-3.2.1.min.js"}}"></script>
<script src="{{"css/bootstrap4/popper.js"}}"></script>
<script src="{{"css/bootstrap4/bootstrap.min.js"}}"></script>
<script src="{{"plugins/Isotope/isotope.pkgd.min.js"}}"></script>
<script src="{{"plugins/OwlCarousel2-2.2.1/owl.carousel.js"}}"></script>
<script src="{{"plugins/easing/easing.js"}}"></script>
<script src="{{"js/custom.js"}}"></script>
</body>
</html>
