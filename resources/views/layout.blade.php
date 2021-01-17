<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Kinle</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/plaza-icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">

    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/plugin/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugin/material-scrolltop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugin/price_range_style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugin/in-number.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugin/venobox.min.css')}}">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"/>
    <link rel="stylesheet" href="assets/css/plugin/plugins.min.css"/>
    <link rel="stylesheet" href="assets/css/main.min.css"> -->

    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body>
<!-- ::::::  Start  Header Section  ::::::  -->
@include('layouts.header')
<!-- ::::::  End  Header Section  ::::::  -->

<!-- ::::::  Start  Main Container Section  ::::::  -->
@yield('content')
<!-- ::::::  End  Main Container Section  ::::::  -->

<!-- ::::::  Start  Footer Section  ::::::  -->
@include('layouts.footer')
<!-- ::::::  End  Footer Section  ::::::  -->

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"></button>

<!-- Start Modal Add cart -->
@include('layouts.shipping')
<!-- End Modal Add cart -->


<!-- ::::::::::::::All Javascripts Files here ::::::::::::::-->

<!-- Vendor JS Files -->
<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.js')}}"></script>

<!-- Plugins JS Files -->
<script src="{{asset('assets/js/plugin/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/material-scrolltop.js')}}"></script>
<script src="{{asset('assets/js/plugin/price_range_script.js')}}"></script>
<script src="{{asset('assets/js/plugin/in-number.js')}}"></script>
<script src="{{asset('assets/js/plugin/jquery.elevateZoom-3.0.8.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/venobox.min.js')}}"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugin/plugins.min.js"></script> -->

<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
