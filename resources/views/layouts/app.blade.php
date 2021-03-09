<!doctype html>
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
    <link href="{{ asset('assets/front/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/iconmoon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/chosen.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/jquery.mobile-menu.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/widget.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/cs-smartstudy-plugin.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/front/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/front/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>

</head>
<body class="wp-smartstudy">
    <div class="wrapper" id="app">
        <!-- Side Menu Start -->
        <div id="overlay"></div>
        <!-- Side Menu End -->

        <!-- Header Start -->
        @include('front.includes.header')
        @yield('content')
        @include('front.includes.footer')
        <!-- Footer End -->
    </div>

    <script src="{{ asset('assets/front/js/responsive.menu.js') }}"></script>
    <!-- Slick Nav js -->
    <script src="{{ asset('assets/front/js/chosen.select.js') }}"></script>
    <!-- Chosen js -->
    <script src="{{ asset('assets/front/js/slick.js') }}"></script>

    <!-- Slick Slider js -->
    <script src="{{ asset('assets/front/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.mobile-menu.min.js') }}"></script>

    <!-- Side Menu js -->
    <script src="{{ asset('assets/front/js/counter.js') }}"></script>
    <!-- Counter js -->

    <!-- Put all Functions in functions.js -->
    <script src="{{ asset('assets/front/js/functions.js') }}"></script>
@yield('scripts')
</body>
</html>
