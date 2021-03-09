<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>ALmoasher - TASK</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">

    <!-- Favicon -->

    <link rel="icon" href="{{asset('assets/admin/img/brand/favicon.png')}}" type="image/x-icon"/>
@yield('styles')
<!-- Icons css -->
    <link href="{{asset('assets/admin/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/closed-sidemenu.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">

    @notify_css
</head>
<body class="main-body app">
<!-- Loader -->
<div id="global-loader">
    <img src="{{asset('assets/admin/img/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

<!-- container -->
@include('admin.include.alerts')
<div class="no-gutter mt-auto mb-auto">
@yield('content')
</div>
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>


@notify_js
@notify_render
<!-- JQuery min js -->
<script src="{{asset('assets/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap Bundle js -->
<script src="{{asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{asset('assets/admin/plugins/ionicons/ionicons.js')}}"></script>
<!-- Rating js-->
<script src="{{asset('assets/admin/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="{{asset('assets/admin/plugins/rating/jquery.barrating.js')}}"></script>

<!--Internal  Perfect-scrollbar js -->
<script src="{{asset('assets/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/perfect-scrollbar/p-scroll.js')}}"></script>
<!--Internal Sparkline js -->
<script src="{{asset('assets/admin/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Custom Scroll bar Js-->
<script src="{{asset('assets/admin/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Eva-icons js -->
<script src="{{asset('assets/admin/js/eva-icons.min.js')}}"></script>
<!-- Sticky js -->
<script src="{{asset('assets/admin/js/sticky.js')}}"></script>

@yield('vendor')

<!-- custom js -->
<script src="{{asset('assets/admin/js/custom.js')}}"></script><!-- Left-menu js-->
<script src="{{asset('assets/admin/plugins/side-menu/sidemenu.js')}}"></script>

@yield('scripts')
</body>

</html>

