<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/room-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:49:32 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trizen - Travel Booking HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/flag-icon.min.css">
    <link rel="stylesheet" href="css/style.css">
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
<header class="header-area">
    <div class="header-top-bar padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-left">
                            <ul class="list-items">
                                <li><a href="#"><i class="la la-phone mr-1"></i>(123) 123-456</a></li>
                                <li><a href="#"><i class="la la-envelope mr-1"></i>trizen@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-content">
                        <div class="header-right d-flex align-items-center justify-content-end">
                            <div class="header-right-action">
                                <div class="select-contain select--contain w-auto">
                                    <select class="select-contain-select">
                                        <option data-content='<span class="flag-icon flag-icon-id mr-1"></span> Bahasa Indonesia'>Bahasa Indonesia</option>
                                        <option data-content='<span class="flag-icon flag-icon-de mr-1"></span> Deutsch'>Deutsch</option>
                                        <option data-content='<span class="flag-icon flag-icon-us mr-1"></span> English(US)' selected>English US</option>
                                        <option data-content='<span class="flag-icon flag-icon-gb-eng mr-1"></span> English(UK)'>English UK</option>
                                        <option data-content='<span class="flag-icon flag-icon-ro mr-1"></span> Romanian'>Romanian</option>
                                        <option data-content='<span class="flag-icon flag-icon-es mr-1"></span> Español'>Español</option>
                                        <option data-content='<span class="flag-icon flag-icon-fr mr-1"></span> Francais'>Francais</option>
                                        <option data-content='<span class="flag-icon flag-icon-it mr-1"></span> Italiano'>Italiano</option>
                                        <option data-content='<span class="flag-icon flag-icon-pl mr-1"></span> Polski'>Polski</option>
                                        <option data-content='<span class="flag-icon flag-icon-pt mr-1"></span> Portuguese'>Portuguese</option>
                                        <option data-content='<span class="flag-icon flag-icon-tr mr-1"></span> Turkish'>Turkish</option>
                                        <option data-content='<span class="flag-icon flag-icon-ru mr-1"></span> Russian'>Russian</option>
                                        <option data-content='<span class="flag-icon flag-icon-jp mr-1"></span> Japanese'>Japanese</option>
                                        <option data-content='<span class="flag-icon flag-icon-cn mr-1"></span> Mandarin'>Mandarin</option>
                                        <option data-content='<span class="flag-icon flag-icon-tw mr-1"></span> Mandarin Chinese'>Mandarin Chinese</option>
                                        <option data-content='<span class="flag-icon flag-icon-kr mr-1"></span> Korean'>Korean</option>
                                        <option data-content='<span class="flag-icon flag-icon-in mr-1"></span> Hindi'>Hindi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="header-right-action">
                                <div class="select-contain select--contain w-auto">
                                    <select class="select-contain-select">
                                        <option value="1">AED</option>
                                        <option value="2">AUD</option>
                                        <option value="3">BRL</option>
                                        <option value="4">CAD</option>
                                        <option value="5">CHF</option>
                                        <option value="6">CNY</option>
                                        <option value="7">EUR</option>
                                        <option value="8">GBP</option>
                                        <option value="9">HKD</option>
                                        <option value="10">IDR</option>
                                        <option value="11">INR</option>
                                        <option value="12">JPY</option>
                                        <option value="13">KRW</option>
                                        <option value="14">MYR</option>
                                        <option value="15">NZD</option>
                                        <option value="16">PHP</option>
                                        <option value="17">PLN</option>
                                        <option value="18">RUB</option>
                                        <option value="19">SAR</option>
                                        <option value="20">SGD</option>
                                        <option value="21">THB</option>
                                        <option value="22">TRY</option>
                                        <option value="23">TWD</option>
                                        <option value="24" selected>USD</option>
                                        <option value="25">VND</option>
                                        <option value="26">MXN</option>
                                        <option value="27">ARS</option>
                                        <option value="28">INR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="header-right-action">
                                <a href="#" class="theme-btn theme-btn-small theme-btn-transparent mr-1" data-toggle="modal" data-target="#signupPopupForm">Sign Up</a>
                                <a href="#" class="theme-btn theme-btn-small" data-toggle="modal" data-target="#loginPopupForm">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrapper">
                        <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                        <div class="logo">
                            <a href="index-2.html"><img src="images/logo.png" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div><!-- end menu-toggler -->
                        </div><!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Home <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="index-2.html">Home - main</a></li>
                                            <li><a href="index2.html">Home - Hotel</a></li>
                                            <li><a href="index3.html">Home - Activity</a></li>
                                            <li><a href="index4.html">Home - Car</a></li>
                                            <li><a href="index5.html">Home - Cruise</a></li>
                                            <li><a href="index6.html">Home - Flight</a></li>
                                            <li><a href="index7.html">Home - City Tour <span class="badge bg-2 text-white">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Tour <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="tour-fullwidth.html">Tour Full width</a></li>
                                            <li><a href="tour-grid.html">Tour Grid</a></li>
                                            <li><a href="tour-list.html">Tour List</a></li>
                                            <li><a href="tour-left-sidebar.html">Tour Left Sidebar</a></li>
                                            <li><a href="tour-right-sidebar.html">Tour Right Sidebar</a></li>
                                            <li><a href="tour-details.html">Tour details</a></li>
                                            <li><a href="tour-booking.html">Tour Booking</a></li>
                                            <li><a href="tour-search-result.html">Tour Search Result</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Cruise <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="cruises.html">Cruises</a></li>
                                            <li><a href="cruises-list.html">Cruise list</a></li>
                                            <li><a href="cruise-sidebar.html">Cruise Sidebar</a></li>
                                            <li><a href="cruise-details.html">Cruise details</a></li>
                                            <li><a href="cruise-booking.html">Cruise Booking</a></li>
                                            <li><a href="cruise-search-result.html">Cruise Search Result</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages <i class="la la-angle-down"></i></a>
                                        <div class="dropdown-menu-item mega-menu">
                                            <ul class="row no-gutters">
                                                <li class="col-lg-3 mega-menu-item">
                                                    <ul>
                                                        <li><a href="add-hotel.html">add hotel </a></li>
                                                        <li><a href="add-flight.html">add flight </a></li>
                                                        <li><a href="add-tour.html">add tour </a></li>
                                                        <li><a href="add-cruise.html">add cruise </a></li>
                                                        <li><a href="add-car.html">add car</a></li>
                                                        <li><a href="user-dashboard.html">User Dashboard</a></li>
                                                        <li><a href="admin-dashboard.html">Admin Dashboard</a></li>
                                                        <li><a href="career.html">career <span class="badge bg-2 text-white">New</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3 mega-menu-item">
                                                    <ul>
                                                        <li><a href="career-details.html">career details<span class="badge bg-2 text-white">New</span></a></li>
                                                        <li><a href="user-profile.html">User profile</a></li>
                                                        <li><a href="become-local-expert.html">Become Local Expert</a></li>
                                                        <li><a href="contact.html">contact</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="recover.html">recover password</a></li>
                                                        <li><a href="payment-received.html">payment received</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3 mega-menu-item">
                                                    <ul>
                                                        <li><a href="payment-complete.html">payment complete</a></li>
                                                        <li><a href="destinations.html">Destinations</a></li>
                                                        <li><a href="about.html">about</a></li>
                                                        <li><a href="services.html">Our Services</a></li>
                                                        <li><a href="gallery.html">Gallery</a></li>
                                                        <li><a href="pricing.html">pricing</a></li>
                                                        <li><a href="faq.html">faq</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3 mega-menu-item">
                                                    <ul>
                                                        <li><a href="add-new-post.html">add new post</a></li>
                                                        <li><a href="blog-full-width.html">blog full width</a></li>
                                                        <li><a href="blog-grid.html">blog grid</a></li>
                                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                        <li><a href="blog-single.html">blog details</a></li>
                                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        <li><a href="page-404.html">404 page</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Flight <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="flight-grid.html">Flight grid</a></li>
                                            <li><a href="flight-list.html">Flight list</a></li>
                                            <li><a href="flight-sidebar.html">Flight sidebar </a></li>
                                            <li><a href="flight-single.html">Flight details</a></li>
                                            <li><a href="flight-booking.html">Flight Booking</a></li>
                                            <li><a href="flight-search-result.html">Flight Search Result</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Hotel <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="hotel-grid.html">Hotel grid</a></li>
                                            <li><a href="hotel-list.html">Hotel list</a></li>
                                            <li><a href="hotel-sidebar.html">Hotel sidebar </a></li>
                                            <li><a href="hotel-single.html">Hotel details</a></li>
                                            <li><a href="hotel-booking.html">Hotel Booking</a></li>
                                            <li><a href="hotel-search-result.html">Hotel Search Result</a></li>
                                            <li>
                                                <a href="#">Rooms <i class="la la-plus"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="room-list.html">Room List</a></li>
                                                    <li><a href="room-grid.html">Room Grid</a></li>
                                                    <li><a href="room-search-result.html">Search Result</a></li>
                                                    <li><a href="room-search-result-list.html">Search Result list</a></li>
                                                    <li><a href="room-details.html">Room Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">car <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="car-grid.html">car grid</a></li>
                                            <li><a href="car-list.html">car list</a></li>
                                            <li><a href="car-sidebar.html">car sidebar </a></li>
                                            <li><a href="car-single.html">car details</a></li>
                                            <li><a href="car-booking.html">Car Booking</a></li>
                                            <li><a href="car-search-result.html">Car Search Result</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="nav-btn">
                            <a href="become-local-expert.html" class="theme-btn">Become Local Expert</a>
                        </div><!-- end nav-btn -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bread-bg-10">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content text-center">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Room Grid</h2>
                        </div>
                        <span class="arrow-blink">
                            <i class="la la-arrow-down"></i>
                        </span>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><polygon points="100 0 50 10 0 0 0 10 100 10"></polygon></svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-wrap margin-bottom-40px">
                    <div class="filter-top d-flex align-items-center justify-content-between">
                        <div class="section-tab section-tab-3">
                            <ul class="nav nav-tabs" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="false">
                                        All
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="dorm-beds-tab" data-toggle="tab" href="#dorm-beds" role="tab" aria-controls="dorm-beds" aria-selected="false">
                                        Dorm Beds
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="private-room-tab" data-toggle="tab" href="#private-room" role="tab" aria-controls="private-room" aria-selected="false">
                                        Private Room
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="suites-tab" data-toggle="tab" href="#suites" role="tab" aria-controls="suites" aria-selected="false">
                                        Suites
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                        <div class="layout-view d-flex align-items-center">
                            <a href="room-grid.html" data-toggle="tooltip" data-placement="top" title="Grid View" class="active"><i class="la la-th-large"></i></a>
                            <a href="room-list.html" data-toggle="tooltip" data-placement="top" title="List View"><i class="la la-th-list"></i></a>
                        </div>
                    </div>
                </div><!-- end filter-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="tab-content" id="may-tabContent4">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img5.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img29.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img30.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Premium Lake View Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$45.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Standard 2 Bed Male Dorm</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Deluxe King Bed Private</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Premium Lake View Suite</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Superior Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Superior Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div>
            <div class="tab-pane fade" id="dorm-beds" role="tabpanel" aria-labelledby="dorm-beds-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Premium Lake View Suite</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Superior Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img5.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img29.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img30.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Premium Lake View Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$45.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Standard 2 Bed Male Dorm</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Deluxe King Bed Private</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Superior Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div>
            <div class="tab-pane fade" id="private-room" role="tabpanel" aria-labelledby="private-room-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img5.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img29.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img30.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Premium Lake View Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$45.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Standard 2 Bed Male Dorm</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Deluxe King Bed Private</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Premium Lake View Suite</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Superior Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Superior Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div>
            <div class="tab-pane fade" id="suites" role="tabpanel" aria-labelledby="suites-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$45.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Standard 2 Bed Male Dorm</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Deluxe King Bed Private</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img5.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img29.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img30.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$88.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Premium Lake View Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Premium Lake View Suite</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Superior Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="card-item room-card">
                            <div class="card-img-carousel carousel-action carousel--action">
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img31.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img32.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-img">
                                    <a href="room-details.html" class="d-block">
                                        <img src="images/img33.jpg" alt="hotel-img">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-price pb-2">
                                    <p>
                                        <span class="price__from">From</span>
                                        <span class="price__num">$145.00</span>
                                    </p>
                                </div>
                                <h3 class="card-title font-size-26"><a href="room-details.html">Superior Room</a></h3>
                                <p class="card-text pt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam asperiores commodi deleniti hic inventore laboriosam laborum molestias, non odit quaerat! Aperiam culpa facilis fuga impedit.</p>
                                <div class="card-attributes pt-3 pb-4">
                                    <ul class="d-flex align-items-center">
                                        <li class="d-flex align-items-center"><i class="la la-bed"></i><span>2 Beds</span></li>
                                        <li class="d-flex align-items-center"><i class="la la-building"></i><span>24 ft<sup>2</sup></span></li>
                                        <li class="d-flex align-items-center"><i class="la la-bathtub"></i><span>2 Bathrooms</span></li>
                                    </ul>
                                </div>
                                <div class="card-btn">
                                    <a href="room-details.html" class="theme-btn theme-btn-transparent">Book Now</a>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box mt-4 text-center">
                    <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                    <p class="font-size-13 pt-2">Showing 1 - 6 of 124 Rooms</p>
                </div><!-- end btn-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->

<!-- ================================
    START CHECK AVAILABILITY AREA
================================= -->
<section class="check-availability-area section-bg section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="check-availability-content">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Book Your Stay</h2>
                    </div><!-- end section-heading -->
                    <div class="contact-form-action padding-top-40px">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="input-box">
                                        <label class="label-text">Check-in</label>
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-3">
                                    <div class="input-box">
                                        <label class="label-text">Check-out</label>
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-3">
                                    <div class="input-box">
                                        <label class="label-text">Rooms</label>
                                        <div class="form-group">
                                            <div class="select-contain w-auto">
                                                <select class="select-contain-select">
                                                    <option value="0">Select Rooms</option>
                                                    <option value="1" selected>1 Room</option>
                                                    <option value="2">2 Rooms</option>
                                                    <option value="3">3 Rooms</option>
                                                    <option value="4">4 Rooms</option>
                                                    <option value="5">5 Rooms</option>
                                                    <option value="6">6 Rooms</option>
                                                    <option value="7">7 Rooms</option>
                                                    <option value="8">8 Rooms</option>
                                                    <option value="9">9 Rooms</option>
                                                    <option value="10">10 Rooms</option>
                                                    <option value="11">11 Rooms</option>
                                                    <option value="12">12 Rooms</option>
                                                    <option value="13">13 Rooms</option>
                                                    <option value="14">14 Rooms</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-3">
                                    <div class="input-box">
                                        <label class="label-text">Guests</label>
                                        <div class="form-group">
                                            <div class="dropdown dropdown-contain">
                                                <a class="dropdown-toggle dropdown-btn" href="#" data-toggle="dropdown">
                                                    <span>Total Guests <span class="qtyTotal guestTotal">0</span></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-wrap">
                                                    <div class="dropdown-item">
                                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                                            <label>Adults</label>
                                                            <div class="qtyBtn d-flex align-items-center">
                                                                <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                <input type="text" name="qtyInput" value="0">
                                                                <div class="qtyInc"><i class="la la-plus"></i></div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end dropdown-item -->
                                                    <div class="dropdown-item">
                                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                                            <label>Children <span>2-12 years old</span></label>
                                                            <div class="qtyBtn d-flex align-items-center">
                                                                <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                <input type="text" name="qtyInput" value="0">
                                                                <div class="qtyInc"><i class="la la-plus"></i></div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end dropdown-item -->
                                                    <div class="dropdown-item">
                                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                                            <label>Infants <span>0-2 years old</span></label>
                                                            <div class="qtyBtn d-flex align-items-center">
                                                                <div class="qtyDec"><i class="la la-minus"></i></div>
                                                                <input type="text" name="qtyInput" value="0">
                                                                <div class="qtyInc"><i class="la la-plus"></i></div>
                                                            </div>
                                                        </div><!-- end qty-box -->
                                                    </div><!-- end dropdown-item -->
                                                </div>
                                            </div><!-- end dropdown -->
                                        </div>
                                    </div>
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-12">
                                    <div class="btn-box text-center pt-2">
                                        <a href="#" class="theme-btn">Check Availability</a>
                                    </div>
                                </div><!-- end col-lg-3 -->
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end check-availability-area -->
<!-- ================================
    END CHECK AVAILABILITY AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area bg-white padding-top-100px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a href="index-2.html" class="foot__logo"><img src="images/logo.png" alt="logo"></a>
                    </div><!-- end logo -->
                    <p class="footer__desc">Morbi convallis bibendum urna ut viverra. Maecenas consequat</p>
                    <ul class="list-items pt-3">
                        <li>3015 Grand Ave, Coconut Grove,<br> Cerrick Way, FL 12345</li>
                        <li>+123-456-789</li>
                        <li><a href="#">trizen@yourwebsite.com</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Company</h4>
                    <ul class="list-items list--items">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="blog-grid.html">News</a></li>
                        <li><a href="contact.html">Support</a></li>
                        <li><a href="#">Advertising</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Services</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Trizen.com Rewards</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">List My Hotel</a></li>
                        <li><a href="#">All Hotels</a></li>
                        <li><a href="#">TV Ads</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Links</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">USA Vacation Packages</a></li>
                        <li><a href="#">USA Flights</a></li>
                        <li><a href="#">USA Hotels</a></li>
                        <li><a href="#">USA Car Hire</a></li>
                        <li><a href="#">Create an Account</a></li>
                        <li><a href="#">Trizen Reviews</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="term-box footer-item">
                    <ul class="list-items list--items d-flex align-items-center">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="footer-social-box text-right">
                    <ul class="social-profile">
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block mt-4"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                    <p class="copy__desc">
                        &copy; Copyright Trizen 2020. Made with
                        <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                    </p>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                    <h3 class="title font-size-15 pr-2">We Accept</h3>
                    <img src="images/payment-img.png" alt="">
                </div><!-- end copy-right-content -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type again password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Register Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Sign up Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">Remember me</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="recover.html">Forgot Password?</a>
                                    </p>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Login Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="modifyPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle3">Book Your Stay</h5>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="input-box">
                                        <label class="label-text">Check in</label>
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-sm-6">
                                    <div class="input-box">
                                        <label class="label-text">Check out</label>
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-sm-6">
                                    <div class="input-box">
                                        <label class="label-text">Adults</label>
                                        <div class="form-group">
                                            <div class="select-contain w-auto">
                                                <select class="select-contain-select">
                                                    <option value="0">Select Adult</option>
                                                    <option value="1" selected>1 Adult</option>
                                                    <option value="2">2 Adults</option>
                                                    <option value="3">3 Adults</option>
                                                    <option value="4">4 Adults</option>
                                                    <option value="5">5 Adults</option>
                                                    <option value="6">6 Adults</option>
                                                    <option value="7">7 Adults</option>
                                                    <option value="8">8 Adults</option>
                                                    <option value="9">9 Adults</option>
                                                    <option value="10">10 Adults</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 col-sm-6">
                                    <div class="input-box">
                                        <label class="label-text">Children</label>
                                        <div class="form-group">
                                            <div class="select-contain w-auto">
                                                <select class="select-contain-select">
                                                    <option value="0">Select Children</option>
                                                    <option value="1" selected>1 Children</option>
                                                    <option value="2">2 Children</option>
                                                    <option value="3">3 Children</option>
                                                    <option value="4">4 Children</option>
                                                    <option value="5">5 Children</option>
                                                    <option value="6">6 Children</option>
                                                    <option value="7">7 Children</option>
                                                    <option value="8">8 Children</option>
                                                    <option value="9">9 Children</option>
                                                    <option value="10">10 Children</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12">
                                    <div class="btn-box pt-3">
                                        <button type="button" class="theme-btn w-100">Check Availability</button>
                                    </div>
                                </div><!-- end col-lg-12 -->
                            </div><!-- end row -->
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- Template JS Files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.countTo.min.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="js/quantity-input.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/room-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:49:32 GMT -->
</html>