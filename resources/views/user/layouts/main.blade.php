<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trizen - Travel Booking HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" href="/user-asset/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="/user-asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user-asset/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/user-asset/css/line-awesome.css">
    <link rel="stylesheet" href="/user-asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/user-asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/user-asset/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/user-asset/css/daterangepicker.css">
    <link rel="stylesheet" href="/user-asset/css/animate.min.css">
    <link rel="stylesheet" href="/user-asset/css/animated-headline.css">
    <link rel="stylesheet" href="/user-asset/css/jquery-ui.css">
    <link rel="stylesheet" href="/user-asset/css/flag-icon.min.css">
    <link rel="stylesheet" href="/user-asset/css/style.css">
</head>
<body>
<!-- start cssload-loader -->
<div class="preloader" id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
@include('user.partials.header')
<!-- ================================
         END HEADER AREA
================================= -->
@yield('container')

<!-- ================================
       START FOOTER AREA
================================= -->
@include('user.partials.footer')
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- Template JS Files -->
<script src="/user-asset/js/jquery-3.4.1.min.js"></script>
<script src="/user-asset/js/jquery-ui.js"></script>
<script src="/user-asset/js/popper.min.js"></script>
<script src="/user-asset/js/bootstrap.min.js"></script>
<script src="/user-asset/js/bootstrap-select.min.js"></script>
<script src="/user-asset/js/moment.min.js"></script>
<script src="/user-asset/js/daterangepicker.js"></script>
<script src="/user-asset/js/owl.carousel.min.js"></script>
<script src="/user-asset/js/jquery.fancybox.min.js"></script>
<script src="/user-asset/js/jquery.countTo.min.js"></script>
<script src="/user-asset/js/animated-headline.js"></script>
<script src="/user-asset/js/jquery.ripples-min.js"></script>
<script src="/user-asset/js/quantity-input.js"></script>
<script src="/user-asset/js/main.js"></script>
</body>

</html>