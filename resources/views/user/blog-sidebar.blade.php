<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/blog-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:49:16 GMT -->
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
<section class="breadcrumb-area bread-bg-9">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Blog Sidebar</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Blog</li>
                            <li>Blog Sidebar</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
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
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-photo"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">Travel</a>
                                        <a href="#" class="badge">lifestyle</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">When Traveling Avoid Expensive Hotels & Resorts</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 January, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">5 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team1.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Leroy Bell</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img2.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-play"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">Video</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">My Best Travel Tips: The Ultimate Travel Guide</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 February, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">4 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team2.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Phillip Hunt</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img3.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-music"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">audio</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">By all Means, Travel to Popular Sites & Don’t Rule Out Other Locations</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 March, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">3 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team3.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Luke Jacobs</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-photo"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">Travel</a>
                                        <a href="#" class="badge">lifestyle</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">When Traveling Avoid Expensive Hotels & Resorts</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 January, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">5 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team4.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Alex Smith</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img2.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-play"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">Video</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">My Best Travel Tips: The Ultimate Travel Guide</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 February, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">4 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team5.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Abraham Doe</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img3.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-music"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">audio</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">By all Means, Travel to Popular Sites & Don’t Rule Out Other Locations</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 March, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">3 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team6.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">David Martin</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img2.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-play"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">Video</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">My Best Travel Tips: The Ultimate Travel Guide</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 February, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">4 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team2.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Phillip Hunt</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img3.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-music"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">audio</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">By all Means, Travel to Popular Sites & Don’t Rule Out Other Locations</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 March, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">3 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team3.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Luke Jacobs</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img2.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-play"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">Video</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">My Best Travel Tips: The Ultimate Travel Guide</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 February, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">4 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team2.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Phillip Hunt</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img3.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-music"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">audio</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">By all Means, Travel to Popular Sites & Don’t Rule Out Other Locations</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 March, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">3 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team3.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Luke Jacobs</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img2.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-play"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">Video</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">My Best Travel Tips: The Ultimate Travel Guide</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 February, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">4 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team2.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Phillip Hunt</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column">
                        <div class="card-item blog-card">
                            <div class="card-img">
                                <img src="images/blog-img3.jpg" alt="blog-img">
                                <div class="post-format icon-element">
                                    <i class="la la-music"></i>
                                </div>
                                <div class="card-body">
                                    <div class="post-categories">
                                        <a href="#" class="badge">audio</a>
                                    </div>
                                    <h3 class="card-title line-height-26"><a href="blog-single.html">By all Means, Travel to Popular Sites & Don’t Rule Out Other Locations</a></h3>
                                    <p class="card-meta">
                                        <span class="post__date"> 1 March, 2020</span>
                                        <span class="post-dot"></span>
                                        <span class="post__time">3 Mins read</span>
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <div class="author-content d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="images/small-team3.jpg" alt="testimonial image">
                                    </div>
                                    <div class="author-bio">
                                        <a href="#" class="author__title">Luke Jacobs</a>
                                    </div>
                                </div>
                                <div class="post-share">
                                    <ul>
                                        <li>
                                            <i class="la la-share icon-element"></i>
                                            <ul class="post-share-dropdown d-flex align-items-center">
                                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- end card-item -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="btn-box mt-3 text-center">
                            <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                            <p class="font-size-13 pt-2">Showing 1 - 12 of 44 Posts</p>
                        </div><!-- end btn-box -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar mb-0">
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Search Post</h3>
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="input-box">
                                    <div class="form-group mb-0">
                                        <input class="form-control pl-3" type="text" placeholder="Type your keywords...">
                                        <button class="search-btn" type="submit"><i class="la la-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Categories</h3>
                        <div class="sidebar-category">
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat1">
                                <label for="cat1">All <span class="font-size-13 ml-1">(55)</span></label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat2">
                                <label for="cat2">Active Adventure Tours <span class="font-size-13 ml-1">(8)</span></label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat3">
                                <label for="cat3">Ecotourism <span class="font-size-13 ml-1">(5)</span></label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat4">
                                <label for="cat4">Escorted Tours <span class="font-size-13 ml-1">(2)</span></label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat5">
                                <label for="cat5">Group Tours <span class="font-size-13 ml-1">(11)</span></label>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" id="cat6">
                                <label for="cat6">Ligula <span class="font-size-13 ml-1">(3)</span></label>
                            </div>
                            <div class="collapse" id="categoryMenu">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat7">
                                    <label for="cat7">Family Tours <span class="font-size-13 ml-1">(4)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat8">
                                    <label for="cat8">City Trips <span class="font-size-13 ml-1">(5)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat9">
                                    <label for="cat9">National Parks Tours <span class="font-size-13 ml-1">(3)</span></label>
                                </div>
                                 <div class="custom-checkbox">
                                    <input type="checkbox" id="cat10">
                                    <label for="cat10">Vacations <span class="font-size-13 ml-1">(3)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat11">
                                    <label for="cat11">Early booking <span class="font-size-13 ml-1">(7)</span></label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="cat12">
                                    <label for="cat12">Last minute <span class="font-size-13 ml-1">(2)</span></label>
                                </div>
                            </div><!-- end collapse -->
                            <a class="btn-text" data-toggle="collapse" href="#categoryMenu" role="button" aria-expanded="false" aria-controls="categoryMenu">
                                <span class="show-more">Show More <i class="la la-angle-down"></i></span>
                                <span class="show-less">Show Less <i class="la la-angle-up"></i></span>
                            </a>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="section-tab section-tab-2 pb-3">
                            <ul class="nav nav-tabs justify-content-center" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">
                                       Recent
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="false">
                                        Popular
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="new-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false">
                                        New
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane " id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                <div class="card-item card-item-list recent-post-card">
                                    <div class="card-img">
                                        <a href="blog-single.html" class="d-block">
                                            <img src="images/small-img4.jpg" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="blog-single.html">Pack wisely before traveling</a></h3>
                                        <p class="card-meta">
                                            <span class="post__date"> 1 March, 2020</span>
                                            <span class="post-dot"></span>
                                            <span class="post__time">3 Mins read</span>
                                        </p>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item card-item-list recent-post-card">
                                    <div class="card-img">
                                        <a href="blog-single.html" class="d-block">
                                            <img src="images/small-img5.jpg" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="blog-single.html">Change your place and get the fresh air</a></h3>
                                        <p class="card-meta">
                                            <span class="post__date"> 1 March, 2020</span>
                                            <span class="post-dot"></span>
                                            <span class="post__time">3 Mins read</span>
                                        </p>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item card-item-list recent-post-card mb-0">
                                    <div class="card-img">
                                        <a href="blog-single.html" class="d-block">
                                            <img src="images/small-img6.jpg" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="blog-single.html">Introducing this amazing city</a></h3>
                                        <p class="card-meta">
                                            <span class="post__date"> 1 March, 2020</span>
                                            <span class="post-dot"></span>
                                            <span class="post__time">3 Mins read</span>
                                        </p>
                                    </div>
                                </div><!-- end card-item -->
                            </div><!-- end tab-pane -->
                            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                <div class="card-item card-item-list recent-post-card">
                                    <div class="card-img">
                                        <a href="blog-single.html" class="d-block">
                                            <img src="images/small-img7.jpg" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="blog-single.html">The Castle on the Cliff: Majestic, Magic</a></h3>
                                        <p class="card-meta">
                                            <span class="post__date"> 1 March, 2020</span>
                                            <span class="post-dot"></span>
                                            <span class="post__time">3 Mins read</span>
                                        </p>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item card-item-list recent-post-card">
                                    <div class="card-img">
                                        <a href="blog-single.html" class="d-block">
                                            <img src="images/small-img8.jpg" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="blog-single.html">Change your place and get the fresh air</a></h3>
                                        <p class="card-meta">
                                            <span class="post__date"> 1 March, 2020</span>
                                            <span class="post-dot"></span>
                                            <span class="post__time">3 Mins read</span>
                                        </p>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item card-item-list recent-post-card mb-0">
                                    <div class="card-img">
                                        <a href="blog-single.html" class="d-block">
                                            <img src="images/small-img9.jpg" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="blog-single.html">All Aboard the Rocky Mountaineer</a></h3>
                                        <p class="card-meta">
                                            <span class="post__date"> 1 March, 2020</span>
                                            <span class="post-dot"></span>
                                            <span class="post__time">3 Mins read</span>
                                        </p>
                                    </div>
                                </div><!-- end card-item -->
                            </div><!-- end tab-pane -->
                            <div class="tab-pane " id="new" role="tabpanel" aria-labelledby="new-tab">
                                <div class="card-item card-item-list recent-post-card">
                                    <div class="card-img">
                                        <a href="blog-single.html" class="d-block">
                                            <img src="images/small-img7.jpg" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="blog-single.html">The Castle on the Cliff: Majestic, Magic</a></h3>
                                        <p class="card-meta">
                                            <span class="post__date"> 1 March, 2020</span>
                                            <span class="post-dot"></span>
                                            <span class="post__time">3 Mins read</span>
                                        </p>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item card-item-list recent-post-card">
                                    <div class="card-img">
                                        <a href="blog-single.html" class="d-block">
                                            <img src="images/small-img8.jpg" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="blog-single.html">Change your place and get the fresh air</a></h3>
                                        <p class="card-meta">
                                            <span class="post__date"> 1 March, 2020</span>
                                            <span class="post-dot"></span>
                                            <span class="post__time">3 Mins read</span>
                                        </p>
                                    </div>
                                </div><!-- end card-item -->
                                <div class="card-item card-item-list recent-post-card mb-0">
                                    <div class="card-img">
                                        <a href="blog-single.html" class="d-block">
                                            <img src="images/small-img9.jpg" alt="blog-img">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="blog-single.html">All Aboard the Rocky Mountaineer</a></h3>
                                        <p class="card-meta">
                                            <span class="post__date"> 1 March, 2020</span>
                                            <span class="post-dot"></span>
                                            <span class="post__time">3 Mins read</span>
                                        </p>
                                    </div>
                                </div><!-- end card-item -->
                            </div><!-- end tab-pane -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Archives</h3>
                        <div class="sidebar-list">
                            <ul class="list-items">
                                <li><i class="la la-dot-circle mr-2 text-color"></i><a href="#">June 2015</a></li>
                                <li><i class="la la-dot-circle mr-2 text-color"></i><a href="#">May 2016</a></li>
                                <li><i class="la la-dot-circle mr-2 text-color"></i><a href="#">April 2017</a></li>
                                <li><i class="la la-dot-circle mr-2 text-color"></i><a href="#">February 2019</a></li>
                            </ul>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Tag Cloud</h3>
                        <ul class="tag-list">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Tour</a></li>
                            <li><a href="#">Nature</a></li>
                            <li><a href="#">Island</a></li>
                            <li><a href="#">Parks</a></li>
                            <li><a href="#">Cruise</a></li>
                            <li><a href="#">Mountains</a></li>
                            <li><a href="#">Tulips</a></li>
                            <li><a href="#">Museums</a></li>
                            <li><a href="#">Beaches</a></li>
                            <li><a href="#">Cultural</a></li>
                            <li><a href="#">National</a></li>
                        </ul>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">About us</h3>
                        <div class="sidebar-about">
                            <div class="sidebar-about-img">
                                <img src="images/destination-img3.jpg" alt="">
                                <p class="font-size-28 font-weight-bold text-white">Trizen</p>
                            </div>
                            <p class="pt-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem eaque ipsa quae ab illo inventore incididunt ut labore et dolore magna</p>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="title stroke-shape">Follow & Connect</h3>
                        <ul class="social-profile">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
    START INFO AREA
================================= -->
<section class="info-area info-bg padding-top-90px padding-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb text-color-2">
                        <i class="la la-phone"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Need Help? Contact us</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-2 text-color-3">
                        <i class="la la-money"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Payments</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <a href="#" class="icon-box icon-layout-2 d-flex">
                    <div class="info-icon flex-shrink-0 bg-rgb-3 text-color-4">
                        <i class="la la-times"></i>
                    </div><!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Cancel Policy</h4>
                        <p class="info__desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                        </p>
                    </div><!-- end info-content -->
                </a><!-- end icon-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end info-area -->
<!-- ================================
    END INFO AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area subscriber-area section-bg-2 padding-top-60px padding-bottom-60px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <h2 class="sec__title font-size-30 text-white">Subscribe to see Secret Deals</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="subscriber-box">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="input-box">
                                <label class="label-text text-white">Enter email address</label>
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                    <button class="theme-btn theme-btn-small submit-btn" type="submit">Subscribe</button>
                                    <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't worry your information is safe with us.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area section-bg padding-top-100px padding-bottom-30px">
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
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/blog-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:49:18 GMT -->
</html>