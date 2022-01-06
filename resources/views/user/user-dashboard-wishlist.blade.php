<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/user-dashboard-wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:49:51 GMT -->
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
<body class="section-bg">
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
       START USER CANVAS MENU
================================= -->
<div class="user-canvas-container">
    <div class="side-menu-close">
        <i class="la la-times"></i>
    </div><!-- end menu-toggler -->
    <div class="user-canvas-nav">
        <div class="section-tab section-tab-2 text-center pt-4 pb-3 pl-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
                        Notifications
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true">
                        Account
                    </a>
                </li>
            </ul>
        </div><!-- end section-tab -->
    </div>
    <div class="user-canvas-nav-content">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                <div class="user-sidebar-item">
                    <div class="notification-item">
                        <div class="list-group drop-reveal-list">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="la la-bell"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your request has been sent</h3>
                                        <p class="msg-text">2 min ago</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i class="la la-check"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your account has been created</h3>
                                        <p class="msg-text">1 day ago</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i class="la la-user"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your account updated</h3>
                                        <p class="msg-text">2 hrs ago</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i class="la la-lock"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your password changed</h3>
                                        <p class="msg-text">Yesterday</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element bg-5 flex-shrink-0 mr-3 ml-0"><i class="la la-envelope"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your email sent</h3>
                                        <p class="msg-text">Yesterday</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="msg-body d-flex align-items-center">
                                    <div class="icon-element bg-6 flex-shrink-0 mr-3 ml-0"><i class="la la-envelope"></i></div>
                                    <div class="msg-content w-100">
                                        <h3 class="title pb-1">Your email changed</h3>
                                        <p class="msg-text">Yesterday</p>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                        </div>
                    </div><!-- end notification-item -->
                </div>
            </div>
            <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                <div class="user-action-wrap user-sidebar-panel">
                    <div class="notification-item">
                        <a href="user-dashboard-profile.html" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm flex-shrink-0 mr-2"><img src="images/team8.jpg" alt="team-img"></div>
                                <span class="font-size-14 font-weight-bold">Ali Tufan</span>
                            </div>
                        </a>
                        <div class="list-group drop-reveal-list user-drop-reveal-list">
                            <a href="user-dashboard-profile.html" class="list-group-item list-group-item-action">
                                <div class="msg-body">
                                    <div class="msg-content">
                                        <h3 class="title"><i class="la la-user mr-2"></i>My Profile</h3>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="user-dashboard-booking.html" class="list-group-item list-group-item-action">
                                <div class="msg-body">
                                    <div class="msg-content">
                                        <h3 class="title"><i class="la la-shopping-cart mr-2"></i>My Booking</h3>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="user-dashboard-reviews.html" class="list-group-item list-group-item-action">
                                <div class="msg-body">
                                    <div class="msg-content">
                                        <h3 class="title"><i class="la la-heart mr-2"></i>My Reviews</h3>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <a href="user-dashboard-settings.html" class="list-group-item list-group-item-action">
                                <div class="msg-body">
                                    <div class="msg-content">
                                        <h3 class="title"><i class="la la-gear mr-2"></i>Settings</h3>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                            <div class="section-block"></div>
                            <a href="index-2.html" class="list-group-item list-group-item-action">
                                <div class="msg-body">
                                    <div class="msg-content">
                                        <h3 class="title"><i class="la la-power-off mr-2"></i>Logout</h3>
                                    </div>
                                </div><!-- end msg-body -->
                            </a>
                        </div>
                    </div><!-- end notification-item -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end user-canvas-container -->
<!-- ================================
       END USER CANVAS MENU
================================= -->

<!-- ================================
       START DASHBOARD NAV
================================= -->
<div class="sidebar-nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    <img src="images/team8.jpg" alt="testimonial image">
                </div>
                <div class="author-bio">
                    <h4 class="author__title">Ali Tufan</h4>
                    <span class="author__meta">Member Since May 2017</span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu list-items">
                <li><a href="user-dashboard.html"><i class="la la-dashboard mr-2 text-color"></i>Dashboard</a></li>
                <li><a href="user-dashboard-booking.html"><i class="la la-shopping-cart mr-2 text-color-2"></i>My Booking</a></li>
                <li><a href="user-dashboard-profile.html"><i class="la la-user mr-2 text-color-3"></i>My Profile</a></li>
                <li><a href="user-dashboard-reviews.html"><i class="la la-star mr-2 text-color-4"></i>My Reviews</a></li>
                <li class="page-active"><a href="user-dashboard-wishlist.html"><i class="la la-heart mr-2"></i>Wishlist</a></li>
                <li><a href="user-dashboard-settings.html"><i class="la la-cog mr-2 text-color-5"></i>Settings</a></li>
                <li><a href="index-2.html"><i class="la la-power-off mr-2 text-color-6"></i>Logout</a></li>
            </ul>
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div><!-- end sidebar-nav -->
<!-- ================================
       END DASHBOARD NAV
================================= -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <div class="dashboard-nav">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-wrapper">
                        <div class="logo mr-5">
                            <a href="index-2.html"><img src="images/logo2.png" alt="logo"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div><!-- end menu-toggler -->
                            <div class="user-menu-open">
                                <i class="la la-user"></i>
                            </div><!-- end user-menu-open -->
                        </div>
                        <div class="dashboard-search-box">
                            <div class="contact-form-action">
                                <form action="#">
                                    <div class="form-group mb-0">
                                        <input class="form-control" type="text" name="text" placeholder="Search">
                                        <button class="search-btn"><i class="la la-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="nav-btn ml-auto">
                            <div class="notification-wrap d-flex align-items-center">
                                <div class="notification-item mr-2">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle drop-reveal-toggle-icon" id="notificationDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="la la-bell"></i>
                                            <span class="noti-count">4</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right">
                                            <div class="dropdown-header drop-reveal-header">
                                                <h6 class="title">You have <strong class="text-black">4</strong> notifications</h6>
                                            </div>
                                            <div class="list-group drop-reveal-list">
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="la la-bell"></i></div>
                                                        <div class="msg-content w-100">
                                                            <h3 class="title pb-1">Your request has been sent</h3>
                                                            <p class="msg-text">2 min ago</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i class="la la-check"></i></div>
                                                        <div class="msg-content w-100">
                                                            <h3 class="title pb-1">Your account has been created</h3>
                                                            <p class="msg-text">1 day ago</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i class="la la-user"></i></div>
                                                        <div class="msg-content w-100">
                                                            <h3 class="title pb-1">Your account updated</h3>
                                                            <p class="msg-text">2 hrs ago</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="msg-body d-flex align-items-center">
                                                        <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i class="la la-lock"></i></div>
                                                        <div class="msg-content w-100">
                                                            <h3 class="title pb-1">Your password changed</h3>
                                                            <p class="msg-text">Yesterday</p>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                            </div>
                                            <a href="#" class="dropdown-item drop-reveal-btn text-center">View all</a>
                                        </div><!-- end dropdown-menu -->
                                    </div>
                                </div><!-- end notification-item -->
                                <div class="notification-item">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-sm flex-shrink-0 mr-2"><img src="images/team8.jpg" alt="team-img"></div>
                                                <span class="font-size-14 font-weight-bold">Ali Tufan</span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-item drop-reveal-header user-reveal-header">
                                                <h6 class="title text-uppercase">Welcome!</h6>
                                            </div>
                                            <div class="list-group drop-reveal-list user-drop-reveal-list">
                                                <a href="user-dashboard-profile.html" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-user mr-2"></i>My Profile</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="user-dashboard-booking.html" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-shopping-cart mr-2"></i>My Booking</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="user-dashboard-reviews.html" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-heart mr-2"></i>My Reviews</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <a href="user-dashboard-settings.html" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-gear mr-2"></i>Settings</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                                <div class="section-block"></div>
                                                <a href="index-2.html" class="list-group-item list-group-item-action">
                                                    <div class="msg-body">
                                                        <div class="msg-content">
                                                            <h3 class="title"><i class="la la-power-off mr-2"></i>Logout</h3>
                                                        </div>
                                                    </div><!-- end msg-body -->
                                                </a>
                                            </div>
                                        </div><!-- end dropdown-menu -->
                                    </div>
                                </div><!-- end notification-item -->
                            </div>
                        </div><!-- end nav-btn -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-nav -->
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">My Wishlist</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="index-2.html" class="text-white">Home</a></li>
                                <li>Dashboard</li>
                                <li>My Wishlist</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <h3 class="title">Wishlist</h3>
                                <p class="font-size-14">Showing 1 - 6 of 28 results</p>
                            </div>
                            <div class="form-content pt-5 pb-0">
                                <div class="row">
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item">
                                            <div class="card-img">
                                                <a href="hotel-single.html" class="d-block">
                                                    <img src="images/img1.jpg" alt="hotel-img">
                                                </a>
                                                <span class="badge">Bestseller</span>
                                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title"><a href="hotel-single.html">The Millennium Hilton New York</a></h3>
                                                <p class="card-meta">124 E Huron St, New york</p>
                                                <div class="card-rating">
                                                    <span class="badge text-white">4.4/5</span>
                                                    <span class="review__text">Average</span>
                                                    <span class="rating__text">(30 Reviews)</span>
                                                </div>
                                                <div class="card-price d-flex align-items-center justify-content-between">
                                                    <p>
                                                        <span class="price__from">From</span>
                                                        <span class="price__num">$88.00</span>
                                                        <span class="price__text">Per night</span>
                                                    </p>
                                                    <a href="hotel-single.html" class="btn-text">See details<i class="la la-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item car-card">
                                            <div class="card-img">
                                                <a href="car-single.html" class="d-block">
                                                    <img src="images/car-img.png" alt="car-img">
                                                </a>
                                                <span class="badge">Bestseller</span>
                                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
                                                </div>
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
                                                        <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                                        <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                                                    </ul>
                                                </div>
                                                <div class="card-price d-flex align-items-center justify-content-between">
                                                    <p>
                                                        <span class="price__from">From</span>
                                                        <span class="price__num">$23.00</span>
                                                        <span class="price__text">Per day</span>
                                                    </p>
                                                    <a href="car-single.html" class="btn-text">See details<i class="la la-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item ">
                                            <div class="card-img">
                                                <a href="tour-details.html" class="d-block">
                                                    <img src="images/img9.jpg" alt="Destination-img">
                                                </a>
                                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title"><a href="tour-details.html">Empire State Building Admission</a></h3>
                                                <p class="card-meta">124 E Huron St, New york</p>
                                                <div class="card-rating">
                                                    <span class="badge text-white">4.4/5</span>
                                                    <span class="review__text">Average</span>
                                                    <span class="rating__text">(30 Reviews)</span>
                                                </div>
                                                <div class="card-price d-flex align-items-center justify-content-between">
                                                    <p>
                                                        <span class="price__from">From</span>
                                                        <span class="price__num">$124.00</span>
                                                    </p>
                                                    <span class="tour-hour"><i class="la la-clock-o mr-1"></i>Full day</span>
                                                </div>
                                            </div>
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item">
                                            <div class="card-img">
                                                <a href="hotel-single.html" class="d-block">
                                                    <img src="images/img1.jpg" alt="hotel-img">
                                                </a>
                                                <span class="badge">Bestseller</span>
                                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title"><a href="hotel-single.html">The Millennium Hilton New York</a></h3>
                                                <p class="card-meta">124 E Huron St, New york</p>
                                                <div class="card-rating">
                                                    <span class="badge text-white">4.4/5</span>
                                                    <span class="review__text">Average</span>
                                                    <span class="rating__text">(30 Reviews)</span>
                                                </div>
                                                <div class="card-price d-flex align-items-center justify-content-between">
                                                    <p>
                                                        <span class="price__from">From</span>
                                                        <span class="price__num">$88.00</span>
                                                        <span class="price__text">Per night</span>
                                                    </p>
                                                    <a href="hotel-single.html" class="btn-text">See details<i class="la la-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item car-card">
                                            <div class="card-img">
                                                <a href="car-single.html" class="d-block">
                                                    <img src="images/car-img.png" alt="car-img">
                                                </a>
                                                <span class="badge">Bestseller</span>
                                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
                                                </div>
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
                                                        <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Passenger"><i class="la la-users"></i><span>4</span></li>
                                                        <li class="d-flex align-items-center" data-toggle="tooltip" data-placement="top" title="Luggage"><i class="la la-suitcase"></i><span>1</span></li>
                                                    </ul>
                                                </div>
                                                <div class="card-price d-flex align-items-center justify-content-between">
                                                    <p>
                                                        <span class="price__from">From</span>
                                                        <span class="price__num">$23.00</span>
                                                        <span class="price__text">Per day</span>
                                                    </p>
                                                    <a href="car-single.html" class="btn-text">See details<i class="la la-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 responsive-column">
                                        <div class="card-item ">
                                            <div class="card-img">
                                                <a href="tour-details.html" class="d-block">
                                                    <img src="images/img9.jpg" alt="Destination-img">
                                                </a>
                                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title="Remove">
                                                    <i class="la la-heart"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title"><a href="tour-details.html">Empire State Building Admission</a></h3>
                                                <p class="card-meta">124 E Huron St, New york</p>
                                                <div class="card-rating">
                                                    <span class="badge text-white">4.4/5</span>
                                                    <span class="review__text">Average</span>
                                                    <span class="rating__text">(30 Reviews)</span>
                                                </div>
                                                <div class="card-price d-flex align-items-center justify-content-between">
                                                    <p>
                                                        <span class="price__from">From</span>
                                                        <span class="price__num">$124.00</span>
                                                    </p>
                                                    <span class="tour-hour"><i class="la la-clock-o mr-1"></i>Full day</span>
                                                </div>
                                            </div>
                                        </div><!-- end card-item -->
                                    </div><!-- end col-lg-4 -->
                                </div><!-- end row -->
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
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
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="border-top mt-5"></div>
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
                        <div class="copy-right-content text-right padding-top-30px">
                            <ul class="social-profile">
                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                            </ul>
                        </div><!-- end copy-right-content -->
                    </div><!-- end col-lg-5 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-main-content -->
    </div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

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

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/user-dashboard-wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:49:51 GMT -->
</html>