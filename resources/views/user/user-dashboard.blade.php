<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:47:23 GMT -->
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
                <li class="page-active"><a href="user-dashboard.html"><i class="la la-dashboard mr-2"></i>Dashboard</a></li>
                <li><a href="user-dashboard-booking.html"><i class="la la-shopping-cart mr-2 text-color"></i>My Booking</a></li>
                <li><a href="user-dashboard-profile.html"><i class="la la-user mr-2 text-color-2"></i>My Profile</a></li>
                <li><a href="user-dashboard-reviews.html"><i class="la la-star mr-2 text-color-3"></i>My Reviews</a></li>
                <li><a href="user-dashboard-wishlist.html"><i class="la la-heart mr-2 text-color-4"></i>Wishlist</a></li>
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
        <div class="dashboard-bread">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Hi, Ali Welcome Back!</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="index-2.html" class="text-white">Home</a></li>
                                <li>Pages</li>
                                <li>User Dashboard</li>
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
                <div class="row mt-4">
                    <div class="col-lg-3 responsive-column-m">
                        <div class="icon-box icon-layout-2 dashboard-icon-box">
                            <div class="d-flex">
                                <div class="info-icon icon-element flex-shrink-0">
                                   <i class="la la-shopping-cart"></i>
                                </div><!-- end info-icon-->
                                <div class="info-content">
                                    <p class="info__desc">Total Booking</p>
                                    <h4 class="info__title">44</h4>
                                </div><!-- end info-content -->
                            </div>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-m">
                        <div class="icon-box icon-layout-2 dashboard-icon-box">
                            <div class="d-flex">
                                <div class="info-icon icon-element bg-2 flex-shrink-0">
                                   <i class="la la-bookmark"></i>
                                </div><!-- end info-icon-->
                                <div class="info-content">
                                    <p class="info__desc">Wishlist</p>
                                    <h4 class="info__title">15</h4>
                                </div><!-- end info-content -->
                            </div>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-m">
                        <div class="icon-box icon-layout-2 dashboard-icon-box">
                            <div class="d-flex">
                                <div class="info-icon icon-element bg-3 flex-shrink-0">
                                   <i class="la la-plane"></i>
                                </div><!-- end info-icon-->
                                <div class="info-content">
                                    <p class="info__desc">Total Travel</p>
                                    <h4 class="info__title">25</h4>
                                </div><!-- end info-content -->
                            </div>
                        </div>
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 responsive-column-m">
                        <div class="icon-box icon-layout-2 dashboard-icon-box">
                            <div class="d-flex">
                                <div class="info-icon icon-element bg-4 flex-shrink-0">
                                   <i class="la la-star"></i>
                                </div><!-- end info-icon-->
                                <div class="info-content">
                                    <p class="info__desc">Reviews</p>
                                    <h4 class="info__title">20</h4>
                                </div><!-- end info-content -->
                            </div>
                        </div>
                    </div><!-- end col-lg-3 -->
                </div><!-- end row -->
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 responsive-column--m">
                        <div class="form-box">
                            <div class="form-title-wrap">
                                <h3 class="title">Statics Results</h3>
                            </div>
                            <div class="form-content">
                                <canvas id="bar-chart"></canvas>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column--m">
                        <div class="form-box dashboard-card">
                            <div class="form-title-wrap">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="title">Notifications</h3>
                                    <button type="button" class="icon-element mark-as-read-btn ml-auto mr-0" data-toggle="tooltip" data-placement="left" title="Mark all as read">
                                        <i class="la la-check-square"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="form-content p-0">
                                <div class="list-group drop-reveal-list">
                                    <a href="#" class="list-group-item list-group-item-action border-top-0">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="la la-bell"></i></div>
                                            <div class="msg-content w-100">
                                                <h3 class="title pb-1">Group Trip - Available</h3>
                                                <p class="msg-text">2 min ago</p>
                                            </div>
                                            <span class="icon-element mark-as-read-btn flex-shrink-0 ml-auto mr-0" data-toggle="tooltip" data-placement="left" title="Mark as read">
                                                <i class="la la-check-square"></i>
                                            </span>
                                        </div><!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="icon-element bg-1 flex-shrink-0 mr-3 ml-0"><i class="la la-bell"></i></div>
                                            <div class="msg-content w-100">
                                                <h3 class="title pb-1">50% Discount Offer</h3>
                                                <p class="msg-text">2 min ago</p>
                                            </div>
                                            <span class="icon-element mark-as-read-btn flex-shrink-0 ml-auto mr-0" data-toggle="tooltip" data-placement="left" title="Mark as read">
                                                <i class="la la-check-square"></i>
                                            </span>
                                        </div><!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i class="la la-check"></i></div>
                                            <div class="msg-content w-100">
                                                <h3 class="title pb-1">Your account has been created</h3>
                                                <p class="msg-text">1 day ago</p>
                                            </div>
                                            <span class="icon-element mark-as-read-btn flex-shrink-0 ml-auto mr-0" data-toggle="tooltip" data-placement="left" title="Mark as read">
                                                <i class="la la-check-square"></i>
                                            </span>
                                        </div><!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i class="la la-user"></i></div>
                                            <div class="msg-content w-100">
                                                <h3 class="title pb-1">Your account updated</h3>
                                                <p class="msg-text">2 hrs ago</p>
                                            </div>
                                            <span class="icon-element mark-as-read-btn flex-shrink-0 ml-auto mr-0" data-toggle="tooltip" data-placement="left" title="Mark as read">
                                                <i class="la la-check-square"></i>
                                            </span>
                                        </div><!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i class="la la-lock"></i></div>
                                            <div class="msg-content w-100">
                                                <h3 class="title pb-1">Your password changed</h3>
                                                <p class="msg-text">Yesterday</p>
                                            </div>
                                            <span class="icon-element mark-as-read-btn flex-shrink-0 ml-auto mr-0" data-toggle="tooltip" data-placement="left" title="Mark as read">
                                                <i class="la la-check-square"></i>
                                            </span>
                                        </div><!-- end msg-body -->
                                    </a>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column--m">
                        <div class="form-box dashboard-card">
                            <div class="form-title-wrap">
                                <h3 class="title">Tasks</h3>
                            </div>
                            <div class="form-content">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <i class="la la-check mr-2"></i>Your booking <a href="#" class="alert-link">Shimla to Goa</a> has been done!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <i class="la la-check mr-2"></i>Sent Email to <strong>dev@gmail.com</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <i class="la la-check mr-2"></i>Received Email from <strong>tripstar@yahoo.com</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <i class="la la-check mr-2"></i>your payment is pending for <a href="#" class="alert-link">Manali</a> Trip tour!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <i class="la la-check mr-2"></i>Someone reply on your comment on <a href="#" class="alert-link">London Trip</a> Tour!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <i class="la la-check mr-2"></i>You have canceled <a href="#" class="alert-link">Dubai to london Trip</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <i class="la la-check mr-2"></i>You have give a review on <span class="badge badge-warning text-white">4.5</span> <a href="#" class="alert-link">EnVision Hotel Boston</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6 responsive-column--m">
                        <div class="form-box dashboard-card order-card border-0">
                            <div class="form-title-wrap">
                                <h3 class="title">Orders</h3>
                            </div>
                            <div class="form-content p-0">
                                <div class="list-group drop-reveal-list">
                                    <div class="list-group-item list-group-item-action border-top-0">
                                        <div class="msg-body d-flex align-items-center justify-content-between">
                                            <div class="msg-content">
                                                <h3 class="title pb-2">3 - Night Bahamas - Miami Round-Trip</h3>
                                                <ul class="list-items d-flex align-items-center">
                                                    <li class="font-size-14 mr-2"><span class="badge badge-success py-1 px-2 font-size-13 font-weight-medium">Paid</span></li>
                                                    <li class="font-size-14 mr-2">Order: #232</li>
                                                    <li class="font-size-14">Date: 11/05/2019</li>
                                                </ul>
                                            </div>
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent font-size-13">
                                                View Invoice
                                            </a>
                                        </div><!-- end msg-body -->
                                    </div>
                                    <div class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center justify-content-between">
                                            <div class="msg-content">
                                                <h3 class="title pb-2">California To Newyork</h3>
                                                <ul class="list-items d-flex align-items-center">
                                                    <li class="font-size-14 mr-2"><span class="badge badge-danger py-1 px-2 font-size-13 font-weight-medium">UnPaid</span></li>
                                                    <li class="font-size-14 mr-2">Order: #232</li>
                                                    <li class="font-size-14">Date: 11/05/2019</li>
                                                </ul>
                                            </div>
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent font-size-13">
                                                Finish Payment
                                            </a>
                                        </div><!-- end msg-body -->
                                    </div>
                                    <div class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center justify-content-between">
                                            <div class="msg-content">
                                                <h3 class="title pb-2">Two Hour Walking Tour of Manhattan</h3>
                                                <ul class="list-items d-flex align-items-center">
                                                    <li class="font-size-14 mr-2"><span class="badge badge-success py-1 px-2 font-size-13 font-weight-medium">Paid</span></li>
                                                    <li class="font-size-14 mr-2">Order: #232</li>
                                                    <li class="font-size-14">Date: 11/05/2019</li>
                                                </ul>
                                            </div>
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent font-size-13">
                                                View Invoice
                                            </a>
                                        </div><!-- end msg-body -->
                                    </div>
                                     <div class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center justify-content-between">
                                            <div class="msg-content">
                                                <h3 class="title pb-2">Dubai to Spain</h3>
                                                <ul class="list-items d-flex align-items-center">
                                                    <li class="font-size-14 mr-2"><span class="badge badge-success py-1 px-2 font-size-13 font-weight-medium">Paid</span></li>
                                                    <li class="font-size-14 mr-2">Order: #232</li>
                                                    <li class="font-size-14">Date: 11/05/2019</li>
                                                </ul>
                                            </div>
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent font-size-13">
                                                View Invoice
                                            </a>
                                        </div><!-- end msg-body -->
                                    </div>
                                     <div class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center justify-content-between">
                                            <div class="msg-content">
                                                <h3 class="title pb-2">Parian Holiday Villas</h3>
                                                <ul class="list-items d-flex align-items-center">
                                                    <li class="font-size-14 mr-2"><span class="badge badge-success py-1 px-2 font-size-13 font-weight-medium">Paid</span></li>
                                                    <li class="font-size-14 mr-2">Order: #232</li>
                                                    <li class="font-size-14">Date: 11/05/2019</li>
                                                </ul>
                                            </div>
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent font-size-13">
                                                View Invoice
                                            </a>
                                        </div><!-- end msg-body -->
                                    </div>
                                    <div class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center justify-content-between">
                                            <div class="msg-content">
                                                <h3 class="title pb-2">Lake Palace Hotel</h3>
                                                <ul class="list-items d-flex align-items-center">
                                                    <li class="font-size-14 mr-2"><span class="badge badge-success py-1 px-2 font-size-13 font-weight-medium">Paid</span></li>
                                                    <li class="font-size-14 mr-2">Order: #232</li>
                                                    <li class="font-size-14">Date: 11/05/2019</li>
                                                </ul>
                                            </div>
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent font-size-13">
                                                View Invoice
                                            </a>
                                        </div><!-- end msg-body -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
                <div class="border-top mt-4"></div>
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
<script src="js/chart.js"></script>
<script src="js/chart.extension.js"></script>
<script src="js/bar-chart.js"></script
<script src="js/jquery.ripples-min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:47:38 GMT -->
</html>