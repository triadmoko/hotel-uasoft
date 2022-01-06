<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:48:31 GMT -->
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
    <div class="header-menu-wrapper border-bottom padding-right-100px padding-left-100px">
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
    START USER AREA
================================= -->
<section class="user-area padding-top-100px padding-bottom-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <h3 class="title font-size-24">Partner Information</h3>
                <div class="card-item user-card card-item-list mt-4 mb-0">
                    <div class="card-img">
                        <img src="images/team7.jpg" alt="user image" class="h-auto">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">TechyDevs</h3>
                        <p class="card-meta">Member since April 2016</p>
                        <div class="d-flex justify-content-between pt-3">
                            <ul class="list-items list-items-2 flex-grow-1">
                                <li><span>Email:</span>contact@techydevs.com</li>
                                <li><span>Phone:</span>+22 12345678</li>
                                <li><span>Paypal Email:</span>contact@techydevs.com</li>
                                <li><span>Home Airport:</span>Knoxville, TN 37920, USA</li>
                                <li><span>Address:</span>2701 Spence Pl, Knoxville, USA</li>
                                <li><span>Website:</span><a href="#">techydevs.com</a></li>
                            </ul>
                             <ul class="list-items flex-grow-1">
                                <li><h3 class="title">Verifications</h3></li>
                                <li class="d-flex justify-content-between align-items-center"><span class="color-text-2 font-weight-medium mr-2">Phone</span><span class="theme-btn theme-btn-small theme-btn-rgb theme-btn-danger-rgb">Not verified</span></li>
                                <li class="d-flex justify-content-between align-items-center"><span class="color-text-2 font-weight-medium mr-2">Email</span><span class="theme-btn theme-btn-small theme-btn-rgb">Verified</span></li>
                                <li class="d-flex justify-content-between align-items-center"><span class="color-text-2 font-weight-medium mr-2">ID Card</span><span class="theme-btn theme-btn-small theme-btn-rgb">Verified</span></li>
                                <li class="d-flex justify-content-between align-items-center"><span class="color-text-2 font-weight-medium mr-2">Travel Certificate</span><span class="theme-btn theme-btn-small theme-btn-rgb">Verified</span></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-70px">
            <div class="col-lg-9">
                <h3 class="title font-size-24">Partner's Service</h3>
                <div class="section-tab section-tab-3 pt-4 pb-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="my-hotel-tab" data-toggle="tab" href="#my-hotel" role="tab" aria-controls="my-hotel" aria-selected="true">
                                Hotel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="my-tour-tab" data-toggle="tab" href="#my-tour" role="tab" aria-controls="my-tour" aria-selected="false">
                                Tour
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="my-activity-tab" data-toggle="tab" href="#my-activity" role="tab" aria-controls="my-activity" aria-selected="false">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="my-car-tab" data-toggle="tab" href="#my-car" role="tab" aria-controls="my-car" aria-selected="false">
                                Car
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="my-flight-tab" data-toggle="tab" href="#my-flight" role="tab" aria-controls="my-flight" aria-selected="false">
                                Flight
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="my-review-tab" data-toggle="tab" href="#my-review" role="tab" aria-controls="my-review" aria-selected="false">
                                Reviews
                            </a>
                        </li>
                    </ul>
                </div><!-- end section-tab -->
                <div class="tab-content margin-bottom-40px" id="myTabcontent">
                    <div class="tab-pane fade show active" id="my-hotel" role="tabpanel" aria-labelledby="my-hotel-tab">
                        <div class="my-service-list">
                            <div class="card-item card-item-list">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img1.jpg" alt="hotel-img">
                                    </a>
                                    <span class="badge">Featured</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">The Millennium Hilton New York</a></h3>
                                    <p class="card-meta">124 E Huron St, New york</p>
                                    <div class="card-rating d-flex align-items-center pt-1">
                                        <span class="rating__text">Hotel star</span>
                                        <span class="ratings d-flex align-items-center mx-2">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </span>
                                        <span class="rating__text">5 of 5</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$00.00</span>
                                        </p>
                                        <a href="hotel-single.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item card-item-list">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img2.jpg" alt="hotel-img">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">Hyatt Centric Times Square New York</a></h3>
                                    <p class="card-meta">6782 Sarasea Circle, Siesta Key, Paris</p>
                                    <div class="card-rating d-flex align-items-center pt-1">
                                        <span class="rating__text">Hotel star</span>
                                        <span class="ratings d-flex align-items-center mx-2">
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                            <i class="la la-star-o"></i>
                                        </span>
                                        <span class="rating__text">0 of 5</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$00.00</span>
                                        </p>
                                        <a href="hotel-single.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item card-item-list">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img3.jpg" alt="hotel-img">
                                    </a>
                                    <span class="badge">Featured</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">Hotel WBF Kitasemba WEST</a></h3>
                                    <p class="card-meta">6782 Sarasea Circle, Siesta Key, Paris</p>
                                    <div class="card-rating d-flex align-items-center pt-1">
                                        <span class="rating__text">Hotel star</span>
                                        <span class="ratings d-flex align-items-center mx-2">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </span>
                                        <span class="rating__text">5 of 5</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$00.00</span>
                                        </p>
                                        <a href="hotel-single.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item card-item-list">
                                <div class="card-img">
                                    <a href="hotel-single.html" class="d-block">
                                        <img src="images/img4.jpg" alt="hotel-img">
                                    </a>
                                    <span class="badge">Featured</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="hotel-single.html">Hotel Monterey Le Frere Osaka</a></h3>
                                    <p class="card-meta">124 E Huron St, New york</p>
                                    <div class="card-rating d-flex align-items-center pt-1">
                                        <span class="rating__text">Hotel star</span>
                                        <span class="ratings d-flex align-items-center mx-2">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </span>
                                        <span class="rating__text">5 of 5</span>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$00.00</span>
                                        </p>
                                        <a href="hotel-single.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                        </div><!-- end my-service-list -->
                        <nav aria-label="Page navigation example" class="pt-4">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="my-tour" role="tabpanel" aria-labelledby="my-tour-tab">
                        <div class="my-service-list">
                            <div class="card-item card-item-list card-item--list">
                                <div class="card-img">
                                    <a href="tour-details.html" class="d-block">
                                        <img src="images/img9.jpg" alt="Destination-img">
                                    </a>
                                    <span class="badge">Featured</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="tour-details.html">A Paris walk to Remember</a></h3>
                                    <p class="card-meta">124 E Huron St, New york</p>
                                    <div class="card-rating d-flex align-items-center pt-0">
                                        <span class="ratings d-flex align-items-center mr-2">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </span>
                                        <span class="rating__text mr-2">4.5 of 5</span>
                                        <span class="rating__text">(3 Comments)</span>
                                    </div>
                                    <ul class="list-items list-items-2">
                                        <li><span>Travellers:</span>30 people</li>
                                        <li><span>Date:</span>12 Jun 2020</li>
                                        <li><span>Booking details:</span> 0 user booked</li>
                                    </ul>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$989.00</span>
                                        </p>
                                        <a href="tour-details.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item card-item-list card-item--list">
                                <div class="card-img">
                                    <a href="tour-details.html" class="d-block">
                                        <img src="images/img10.jpg" alt="Destination-img">
                                    </a>
                                    <span class="badge badge-ribbon">Save 39%</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="tour-details.html">London to Florence in 10 Days</a></h3>
                                    <p class="card-meta">124 E Huron St, New york</p>
                                    <div class="card-rating d-flex align-items-center pt-0">
                                        <span class="ratings d-flex align-items-center mr-2">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </span>
                                        <span class="rating__text mr-2">4.5 of 5</span>
                                        <span class="rating__text">(3 Comments)</span>
                                    </div>
                                    <ul class="list-items list-items-2">
                                        <li><span>Travellers:</span>10 people</li>
                                        <li><span>Booking details:</span> 0 user booked</li>
                                    </ul>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$950.00</span>
                                            <span class="price__num before-price color-text-3">$989.00</span>
                                        </p>
                                        <a href="tour-details.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item card-item-list card-item--list">
                                <div class="card-img">
                                    <a href="tour-details.html" class="d-block">
                                        <img src="images/img11.jpg" alt="Destination-img">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="tour-details.html">River Cruise Tour on the Seine</a></h3>
                                    <p class="card-meta">124 E Huron St, New york</p>
                                    <div class="card-rating d-flex align-items-center pt-0">
                                        <span class="ratings d-flex align-items-center mr-2">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </span>
                                        <span class="rating__text mr-2">4.5 of 5</span>
                                        <span class="rating__text">(3 Comments)</span>
                                    </div>
                                    <ul class="list-items list-items-2">
                                        <li><span>Travellers:</span>30 people</li>
                                        <li><span>Date:</span>12 Jun 2020</li>
                                        <li><span>Booking details:</span> 0 user booked</li>
                                    </ul>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$989.00</span>
                                        </p>
                                        <a href="tour-details.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item card-item-list card-item--list">
                                <div class="card-img">
                                    <a href="tour-details.html" class="d-block">
                                        <img src="images/img12.jpg" alt="Destination-img">
                                    </a>
                                    <span class="badge">Featured</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="tour-details.html">3-Day Loire Mer Extraordinaire</a></h3>
                                    <p class="card-meta">Champs-Elysées, 8ème 5 rue de Berri</p>
                                    <div class="card-rating d-flex align-items-center pt-0">
                                        <span class="ratings d-flex align-items-center mr-2">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </span>
                                        <span class="rating__text mr-2">4.5 of 5</span>
                                        <span class="rating__text">(1 Comments)</span>
                                    </div>
                                    <ul class="list-items list-items-2">
                                        <li><span>Travellers:</span>30 people</li>
                                        <li><span>Date:</span>12 Jun 2020</li>
                                        <li><span>Booking details:</span> 0 user booked</li>
                                    </ul>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$989.00</span>
                                        </p>
                                        <a href="tour-details.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                        </div><!-- end my-service-list -->
                        <nav aria-label="Page navigation example" class="pt-4">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="my-activity" role="tabpanel" aria-labelledby="my-activity-tab">
                        <div class="my-service-list">
                            <div class="card-item card-item-list card-item--list">
                                <div class="card-img">
                                    <a href="tour-details.html" class="d-block">
                                        <img src="images/img13.jpg" alt="Destination-img">
                                    </a>
                                    <span class="badge">Featured</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="tour-details.html">Manhattan Skyline</a></h3>
                                    <p class="card-meta">Avenue of the Americas, New York</p>
                                    <div class="card-rating d-flex align-items-center pt-0">
                                        <span class="ratings d-flex align-items-center mr-2">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </span>
                                        <span class="rating__text mr-2">4.5 of 5</span>
                                        <span class="rating__text">(3 Reviews)</span>
                                    </div>
                                    <ul class="list-items list-items-2">
                                        <li><span>Activity Type:</span>Specific Date</li>
                                    </ul>
                                    <p class="card-meta">Follow the coming-of-age tale of lion cub Simba in this vibrant and colorful family-friendly ...</p>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$989.00</span>
                                        </p>
                                        <a href="tour-details.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item card-item-list card-item--list">
                                <div class="card-img">
                                    <a href="tour-details.html" class="d-block">
                                        <img src="images/img14.jpg" alt="Destination-img">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="tour-details.html">Best Day for Hiking</a></h3>
                                    <p class="card-meta">Des Beaux Arts, Paris France</p>
                                    <div class="card-rating d-flex align-items-center pt-0">
                                        <span class="ratings d-flex align-items-center mr-2">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </span>
                                        <span class="rating__text mr-2">4.5 of 5</span>
                                        <span class="rating__text">(3 Reviews)</span>
                                    </div>
                                    <ul class="list-items list-items-2">
                                        <li><span>Activity Type:</span>Daily Activity</li>
                                    </ul>
                                    <p class="card-meta">Follow the coming-of-age tale of lion cub Simba in this vibrant and colorful family-friendly ...</p>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$989.00</span>
                                        </p>
                                        <a href="tour-details.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item card-item-list card-item--list">
                                <div class="card-img">
                                    <a href="tour-details.html" class="d-block">
                                        <img src="images/img15.jpg" alt="Destination-img">
                                    </a>
                                    <span class="badge">Featured</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="tour-details.html">Splendous Skyline View</a></h3>
                                    <p class="card-meta">Avenue of the Americas, New York</p>
                                    <div class="card-rating d-flex align-items-center pt-0">
                                        <span class="ratings d-flex align-items-center mr-2">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </span>
                                        <span class="rating__text mr-2">4.5 of 5</span>
                                        <span class="rating__text">(3 Reviews)</span>
                                    </div>
                                    <ul class="list-items list-items-2">
                                        <li><span>Activity Type:</span>Specific Date</li>
                                    </ul>
                                    <p class="card-meta">Follow the coming-of-age tale of lion cub Simba in this vibrant and colorful family-friendly ...</p>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$989.00</span>
                                        </p>
                                        <a href="tour-details.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item card-item-list card-item--list">
                                <div class="card-img">
                                    <a href="tour-details.html" class="d-block">
                                        <img src="images/img16.jpg" alt="Destination-img">
                                    </a>
                                    <span class="badge badge-ribbon">Save 39%</span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><a href="tour-details.html">A Walk into the Old Little Town</a></h3>
                                    <p class="card-meta">Avenue of the Americas, New York</p>
                                    <div class="card-rating d-flex align-items-center pt-0">
                                        <span class="ratings d-flex align-items-center mr-2">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </span>
                                        <span class="rating__text mr-2">4.5 of 5</span>
                                        <span class="rating__text">(3 Reviews)</span>
                                    </div>
                                    <ul class="list-items list-items-2">
                                        <li><span>Activity Type:</span>Specific Date</li>
                                    </ul>
                                    <p class="card-meta">Follow the coming-of-age tale of lion cub Simba in this vibrant and colorful family-friendly ...</p>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$950.00</span>
                                            <span class="price__num before-price color-text-3">$989.00</span>
                                        </p>
                                        <a href="tour-details.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                        </div><!-- end my-service-list -->
                        <nav aria-label="Page navigation example" class="pt-4">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade " id="my-car" role="tabpanel" aria-labelledby="my-car-tab">
                        <div class="my-service-list">
                            <div class="card-item car-card card-item-list">
                                <div class="card-img padding-top-40px">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img.png" alt="car-img" class="h-auto">
                                    </a>
                                    <span class="badge">Bestseller</span>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta">Compact SUV</p>
                                    <h3 class="card-title"><a href="car-single.html">Toyota Corolla or Similar</a></h3>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-attributes">
                                        <ul class="d-flex align-items-center">
                                            <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passengers"><i class="la la-users"></i><span>4</span></li>
                                            <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>2</span></li>
                                        </ul>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$23.00</span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <a href="car-single.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item car-card card-item-list">
                                <div class="card-img padding-top-40px">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img2.png" alt="car-img" class="h-auto">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta">BelCharles Car</p>
                                    <h3 class="card-title"><a href="car-single.html">Volkswagen Jetta 2 Doors or Similar</a></h3>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-attributes">
                                        <ul class="d-flex align-items-center">
                                            <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passengers"><i class="la la-users"></i><span>4</span></li>
                                            <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>2</span></li>
                                        </ul>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$23.00</span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <a href="car-single.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item car-card card-item-list">
                                <div class="card-img padding-top-40px">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img3.png" alt="car-img" class="h-auto">
                                    </a>
                                    <span class="badge">Bestseller</span>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta">Lamborghini</p>
                                    <h3 class="card-title"><a href="car-single.html">Mercedes E Class or Similar</a></h3>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-attributes">
                                        <ul class="d-flex align-items-center">
                                            <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passengers"><i class="la la-users"></i><span>4</span></li>
                                            <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>2</span></li>
                                        </ul>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$23.00</span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <a href="car-single.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                            <div class="card-item car-card card-item-list">
                                <div class="card-img padding-top-40px">
                                    <a href="car-single.html" class="d-block">
                                        <img src="images/car-img4.png" alt="car-img" class="h-auto">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-meta">BelChar Car</p>
                                    <h3 class="card-title"><a href="car-single.html">Fiat Fiesta 2 Doors or Similar</a></h3>
                                    <div class="card-rating">
                                        <span class="badge text-white">4.4/5</span>
                                        <span class="review__text">Average</span>
                                        <span class="rating__text">(30 Reviews)</span>
                                    </div>
                                    <div class="card-attributes">
                                        <ul class="d-flex align-items-center">
                                            <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passengers"><i class="la la-users"></i><span>4</span></li>
                                            <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>2</span></li>
                                        </ul>
                                    </div>
                                    <div class="card-price d-flex align-items-center justify-content-between">
                                        <p>
                                            <span class="price__from">Price from</span>
                                            <span class="price__num">$23.00</span>
                                            <span class="price__text">Per day</span>
                                        </p>
                                        <a href="car-single.html" class="theme-btn theme-btn-small">Book Now</a>
                                    </div>
                                </div>
                            </div><!-- end card-item -->
                        </div><!-- end my-service-list -->
                        <nav aria-label="Page navigation example" class="pt-4">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="my-flight" role="tabpanel" aria-labelledby="my-flight-tab">
                        <div class="my-service-list">
                            <div class="card-item flight-card flight--card card-item-list card-item-list-2">
                                <div class="card-img">
                                    <img src="images/airline-img7.png" alt="flight-logo-img">
                                </div>
                                <div class="card-body">
                                    <div class="card-top-title d-flex justify-content-between">
                                        <div>
                                            <h3 class="card-title font-size-17">San Francisco (SFO) - Sydney (SYD)</h3>
                                            <p class="card-meta font-size-14">One way flight</p>
                                        </div>
                                        <div>
                                            <div class="text-right">
                                                <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                                <h6 class="font-weight-bold text-black">$350.00</h6>
                                            </div>
                                        </div>
                                    </div><!-- end card-top-title -->
                                    <ul class="list-items list-items-2 py-2">
                                        <li><span>Flight Type:</span>Direct</li>
                                        <li><span>Departure Time:</span>12:00 PM</li>
                                        <li><span>Total Time:</span> 2 hrs 30 min</li>
                                    </ul>
                                    <div class="btn-box text-center">
                                        <a href="flight-single.html" class="theme-btn theme-btn-small w-100">Book Now</a>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card-item -->
                             <div class="card-item flight-card flight--card card-item-list card-item-list-2">
                                <div class="card-img">
                                    <img src="images/airline-img8.png" alt="flight-logo-img">
                                </div>
                                <div class="card-body">
                                    <div class="card-top-title d-flex justify-content-between">
                                        <div>
                                            <h3 class="card-title font-size-17">San Francisco (SFO) - Berlin (BER)</h3>
                                            <p class="card-meta font-size-14">One way flight</p>
                                        </div>
                                        <div>
                                            <div class="text-right">
                                                <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                                <h6 class="font-weight-bold text-black">$299.00</h6>
                                            </div>
                                        </div>
                                    </div><!-- end card-top-title -->
                                    <ul class="list-items list-items-2 py-2">
                                        <li><span>Flight Type:</span>Direct</li>
                                        <li><span>Departure Time:</span>12:00 PM</li>
                                        <li><span>Total Time:</span> 2 hrs 30 min</li>
                                    </ul>
                                    <div class="btn-box text-center">
                                        <a href="flight-single.html" class="theme-btn theme-btn-small w-100">Book Now</a>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card-item -->
                             <div class="card-item flight-card flight--card card-item-list card-item-list-2">
                                <div class="card-img">
                                    <img src="images/airline-img9.png" alt="flight-logo-img">
                                </div>
                                <div class="card-body">
                                    <div class="card-top-title d-flex justify-content-between">
                                        <div>
                                            <h3 class="card-title font-size-17">Ha Noi (HAN) - Paris (CDG)</h3>
                                            <p class="card-meta font-size-14">One way flight</p>
                                        </div>
                                        <div>
                                            <div class="text-right">
                                                <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                                <h6 class="font-weight-bold text-black">$399.00</h6>
                                            </div>
                                        </div>
                                    </div><!-- end card-top-title -->
                                    <ul class="list-items list-items-2 py-2">
                                        <li><span>Flight Type:</span>Direct</li>
                                        <li><span>Departure Time:</span>12:00 PM</li>
                                        <li><span>Total Time:</span> 12 hrs 30 min</li>
                                    </ul>
                                    <div class="btn-box text-center">
                                        <a href="flight-single.html" class="theme-btn theme-btn-small w-100">Book Now</a>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card-item -->
                             <div class="card-item flight-card flight--card card-item-list card-item-list-2">
                                <div class="card-img">
                                    <img src="images/airline-img10.png" alt="flight-logo-img">
                                </div>
                                <div class="card-body">
                                    <div class="card-top-title d-flex justify-content-between">
                                        <div>
                                            <h3 class="card-title font-size-17">New York City (JFK) - Paris (CDG)</h3>
                                            <p class="card-meta font-size-14">Roundtrip flight</p>
                                        </div>
                                        <div>
                                            <div class="text-right">
                                                <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                                <h6 class="font-weight-bold text-black">$750.00</h6>
                                            </div>
                                        </div>
                                    </div><!-- end card-top-title -->
                                    <ul class="list-items list-items-2 py-2">
                                        <li><span>Flight Type:</span>2 stop</li>
                                        <li><span>Departure Time:</span>12:00 PM</li>
                                        <li><span>Total Time:</span> 4 hrs 30 min</li>
                                    </ul>
                                    <div class="btn-box text-center">
                                        <a href="flight-single.html" class="theme-btn theme-btn-small w-100">Book Now</a>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card-item -->
                        </div><!-- end my-service-list -->
                        <nav aria-label="Page navigation example" class="pt-4">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="my-review" role="tabpanel" aria-labelledby="my-review-tab">
                        <div class="my-service-list">
                            <div class="review-bars padding-bottom-30px">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="progress-item">
                                            <h3 class="progressbar-title">Service</h3>
                                            <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                <div class="progressbar-box flex-shrink-0">
                                                    <div class="progressbar-line" data-percent="70%">
                                                        <div class="progressbar-line-item bar-bg-1"></div>
                                                    </div> <!-- End Skill Bar -->
                                                </div>
                                                <div class="bar-percent">4.6</div>
                                            </div>
                                        </div><!-- end progress-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="progress-item">
                                            <h3 class="progressbar-title">Location</h3>
                                            <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                <div class="progressbar-box flex-shrink-0">
                                                    <div class="progressbar-line" data-percent="55%">
                                                        <div class="progressbar-line-item bar-bg-2"></div>
                                                    </div> <!-- End Skill Bar -->
                                                </div>
                                                <div class="bar-percent">4.7</div>
                                            </div>
                                        </div><!-- end progress-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="progress-item">
                                            <h3 class="progressbar-title">Value for Money</h3>
                                            <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                <div class="progressbar-box flex-shrink-0">
                                                    <div class="progressbar-line" data-percent="40%">
                                                        <div class="progressbar-line-item bar-bg-3"></div>
                                                    </div> <!-- End Skill Bar -->
                                                </div>
                                                <div class="bar-percent">2.6</div>
                                            </div>
                                        </div><!-- end progress-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="progress-item">
                                            <h3 class="progressbar-title">Cleanliness</h3>
                                            <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                <div class="progressbar-box flex-shrink-0">
                                                    <div class="progressbar-line" data-percent="60%">
                                                        <div class="progressbar-line-item bar-bg-4"></div>
                                                    </div> <!-- End Skill Bar -->
                                                </div>
                                                <div class="bar-percent">3.6</div>
                                            </div>
                                        </div><!-- end progress-item -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="progress-item">
                                            <h3 class="progressbar-title">Facilities</h3>
                                            <div class="progressbar-content line-height-20 d-flex align-items-center justify-content-between">
                                                <div class="progressbar-box flex-shrink-0">
                                                    <div class="progressbar-line" data-percent="50%">
                                                        <div class="progressbar-line-item bar-bg-5"></div>
                                                    </div> <!-- End Skill Bar -->
                                                </div>
                                                <div class="bar-percent">2.6</div>
                                            </div>
                                        </div><!-- end progress-item -->
                                    </div><!-- end col-lg-6 -->
                                </div><!-- end row -->
                            </div>
                            <div class="section-block"></div>
                            <div class="review-box padding-top-45px">
                                <h3 class="title font-size-20">List of Reviews</h3>
                                <div class="comments-list padding-top-40px">
                                    <div class="comment">
                                        <div class="comment-avatar">
                                            <a href="#" class="d-block">
                                                <img class="avatar__img" alt="" src="images/team8.jpg">
                                            </a>
                                            <h3 class="title font-size-16 pt-3">Bob Marly</h3>
                                            <a href="#" class="color-text font-size-14">30 Reviews</a>
                                        </div>
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <h3 class="comment__meta font-size-18 pb-2">"Very good"</h3>
                                                <h3 class="comment__author font-size-15 font-weight-medium">Review for <a href="#" class="color-text">Grand Plaza Apartments</a></h3>
                                                <div class="meta-data-inner d-flex">
                                                    <span class="ratings d-flex align-items-center mr-1">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                    <p class="comment__date">April 5, 2019</p>
                                                </div>
                                            </div>
                                            <p class="comment-content font-size-15 line-height-24">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias corporis eveniet exercitationem fuga id laborum nostrum numquam quo repellendus similique.
                                            </p>
                                            <div class="comment-reply">
                                                <div class="reviews-reaction">
                                                    <span class="font-size-15 mr-1">Was this review helpful?</span>
                                                    <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                    <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="comment-avatar">
                                            <a href="#" class="d-block">
                                                <img class="avatar__img" alt="" src="images/team9.jpg">
                                            </a>
                                            <h3 class="title font-size-16 pt-3">Josh Purdial</h3>
                                            <a href="#" class="color-text font-size-14">44 Reviews</a>
                                        </div>
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <h3 class="comment__meta font-size-18 pb-2">"Excellent"</h3>
                                                <h3 class="comment__author font-size-15 font-weight-medium">Review for <a href="#" class="color-text">Park Hyatt Paris-Vendome</a></h3>
                                                <div class="meta-data-inner d-flex">
                                                    <span class="ratings d-flex align-items-center mr-1">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                    <p class="comment__date">April 5, 2019</p>
                                                </div>
                                            </div>
                                            <p class="comment-content font-size-15 line-height-24">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias corporis eveniet exercitationem fuga id laborum nostrum numquam quo repellendus similique.
                                            </p>
                                            <div class="comment-reply">
                                                <div class="reviews-reaction">
                                                    <span class="font-size-15 mr-1">Was this review helpful?</span>
                                                    <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                    <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="comment-avatar">
                                            <a href="#" class="d-block">
                                                <img class="avatar__img" alt="" src="images/team10.jpg">
                                            </a>
                                            <h3 class="title font-size-16 pt-3">Adi Purdila</h3>
                                            <a href="#" class="color-text font-size-14">12 Reviews</a>
                                        </div>
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <h3 class="comment__meta font-size-18 pb-2">"Amazing"</h3>
                                                <h3 class="comment__author font-size-15 font-weight-medium">Review for <a href="#" class="color-text">Wellington Hotel</a></h3>
                                                <div class="meta-data-inner d-flex">
                                                    <span class="ratings d-flex align-items-center mr-1">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                    <p class="comment__date">April 5, 2019</p>
                                                </div>
                                            </div>
                                            <p class="comment-content font-size-15 line-height-24">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias corporis eveniet exercitationem fuga id laborum nostrum numquam quo repellendus similique.
                                            </p>
                                            <div class="comment-reply">
                                                <div class="reviews-reaction">
                                                    <span class="font-size-15 mr-1">Was this review helpful?</span>
                                                    <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                    <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <div class="comment-avatar">
                                            <a href="#" class="d-block">
                                                <img class="avatar__img" alt="" src="images/team11.jpg">
                                            </a>
                                            <h3 class="title font-size-16 pt-3">Markus nai</h3>
                                            <a href="#" class="color-text font-size-14">23 Reviews</a>
                                        </div>
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <h3 class="comment__meta font-size-18 pb-2">"Good"</h3>
                                                <h3 class="comment__author font-size-15 font-weight-medium">Review for <a href="#" class="color-text">The Pearl Hotel NewYork City</a></h3>
                                                <div class="meta-data-inner d-flex">
                                                    <span class="ratings d-flex align-items-center mr-1">
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                        <i class="la la-star"></i>
                                                    </span>
                                                    <p class="comment__date">April 5, 2019</p>
                                                </div>
                                            </div>
                                            <p class="comment-content font-size-15 line-height-24">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias corporis eveniet exercitationem fuga id laborum nostrum numquam quo repellendus similique.
                                            </p>
                                            <div class="comment-reply">
                                                <div class="reviews-reaction">
                                                    <span class="font-size-15 mr-1">Was this review helpful?</span>
                                                    <a href="#" class="comment-like"><i class="la la-thumbs-up"></i> 13</a>
                                                    <a href="#" class="comment-dislike"><i class="la la-thumbs-down"></i> 2</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end comments-list -->
                            </div>
                            <nav aria-label="Page navigation example" class="pt-4">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link page-link-nav" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div><!-- end tab-pane -->
                </div>
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="review-summary mt-2 section-bg">
                    <p>Average Rating</p>
                    <h2>4.5<span>/5</span></h2>
                    <span class="ratings d-flex justify-content-center align-items-center font-size-17">
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star"></i>
                        <i class="la la-star-half-alt"></i>
                    </span>
                    <span class="font-size-14">(Based on 199 reviews)</span>
                </div><!-- end review-summary -->
                <div class="form-box margin-top-30px mb-0">
                    <div class="form-title-wrap">
                        <h3 class="title">Contact Partner</h3>
                    </div>
                    <div class="form-content">
                        <div class="contact-form-action">
                            <form method="post">
                                <div class="input-box">
                                    <label class="label-text">Your Name</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Enter name">
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label class="label-text">Your Email</label>
                                    <div class="form-group">
                                        <span class="la la-envelope-o form-icon"></span>
                                        <input class="form-control" type="email" name="email" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label class="label-text">Message</label>
                                    <div class="form-group">
                                        <span class="la la-pencil form-icon"></span>
                                        <textarea class="message-control form-control" name="message" placeholder="Write message"></textarea>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <button type="submit" class="theme-btn">Send Message</button>
                                </div>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end user-area -->
<!-- ================================
    END USER AREA
================================= -->


<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area section-bg padding-top-100px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-td-6">
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
            <div class="col-lg-3 responsive-column-td-6">
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
            <div class="col-lg-3 responsive-column-td-6">
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
            <div class="col-lg-3 responsive-column-td-6">
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

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:48:39 GMT -->
</html>