<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/add-cruise.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:47:23 GMT -->
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
    <link rel="stylesheet" href="css/leaflet.css">
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
<section class="breadcrumb-area bread-bg-3">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content text-center">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">List your cruise with the world's <br>
                                largest travel community</h2>
                        </div>
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
    START FORM AREA
================================= -->
<section class="listing-form section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="listing-header pb-4">
                    <h3 class="title font-size-28 pb-2">List a cruise on Trizen</h3>
                    <p class="font-size-14">If you are listing a vacation rental, please <a href="#" class="text-color">click here.</a></p>
                    <p class="font-size-14"><a href="#" class="text-color">Read the complete Trizen policy for accommodations.</a></p>
                </div>
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-user mr-2 text-gray"></i>Your information</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Your Name</label>
                                    <div class="form-group">
                                        <span class="la la-user form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Your name">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Your Email</label>
                                    <div class="form-group">
                                        <span class="la la-envelope-o form-icon"></span>
                                        <input class="form-control" type="email" name="email" placeholder="Your email">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">What is your role at this business?</label>
                                    <div class="form-group select-contain w-100">
                                        <select class="select-contain-select">
                                            <option value="">Select one</option>
                                            <option value="OWNER">Owner</option>
                                            <option value="GENERAL_MANAGER">General Manager</option>
                                            <option value="INNKEEPER">Innkeeper</option>
                                            <option value="AGENCY_CONSULTANT">Agency / Consultant</option>
                                            <option value="ACCOUNTING_FINANCE">Accounting / Finance</option>
                                            <option value="GUEST_SERVICES">Guest Services / Front Office</option>
                                            <option value="MARKETING">Marketing</option>
                                            <option value="REVENUE_MANAGEMENT">Revenue Management</option>
                                            <option value="SALES">Sales</option>
                                            <option value="OTHER">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-gear mr-2 text-gray"></i>Listing information for your cruise</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Official cruise name</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Enter cruise name">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Category</label>
                                    <div class="form-group select-contain w-100">
                                        <select class="select-contain-select">
                                            <option value="1">Popular Cruises</option>
                                            <option value="2">Luxury Cruises</option>
                                            <option value="3">River Cruises</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Country</label>
                                    <div class="form-group select-contain w-100">
                                        <select class="select-contain-select">
                                            <option value="">Select a country </option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">City/Town, State/Province/Region</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Start typing city/town, state/province">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Street address</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Enter building number and street name">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Country/region code</label>
                                    <div class="form-group select-contain w-100">
                                        <select class="select-contain-select">
                                            <option value="">Select country code</option>
                                            <option value="ALB">Albania (355)</option>
                                            <option value="DZA">Algeria (213)</option>
                                            <option value="ASM">American Samoa (1)</option>
                                            <option value="AND">Andorra (376)</option>
                                            <option value="AIA">Anguilla (1)</option>
                                            <option value="ATA">Antarctica (672)</option>
                                            <option value="ATG">Antigua and Barbuda (1)</option>
                                            <option value="ARG">Argentina (54)</option>
                                            <option value="ARM">Armenia (374)</option>
                                            <option value="ABW">Aruba (297)</option>
                                            <option value="AUS">Australia (61)</option>
                                            <option value="AUT">Austria (43)</option>
                                            <option value="AZE">Azerbaijan (994)</option>
                                            <option value="BHS">Bahamas (1)</option>
                                            <option value="BHR">Bahrain (973)</option>
                                            <option value="BGD">Bangladesh (880)</option>
                                            <option value="BRB">Barbados (1)</option>
                                            <option value="BLR">Belarus (375)</option>
                                            <option value="BEL">Belgium (32)</option>
                                            <option value="BLZ">Belize (501)</option>
                                            <option value="BEN">Benin (229)</option>
                                            <option value="BMU">Bermuda (1)</option>
                                            <option value="BTN">Bhutan (975)</option>
                                            <option value="BOL">Bolivia (591)</option>
                                            <option value="BES">Bonaire, Sint Eustatius and Saba (599)</option>
                                            <option value="BIH">Bosnia and Herzegovina (387)</option>
                                            <option value="BWA">Botswana (267)</option>
                                            <option value="BVT">Bouvet Island (47)</option>
                                            <option value="BRA">Brazil (55)</option>
                                            <option value="VGB">British Virgin Islands (1)</option>
                                            <option value="BRN">Brunei (673)</option>
                                            <option value="BGR">Bulgaria (359)</option>
                                            <option value="BFA">Burkina Faso (226)</option>
                                            <option value="BDI">Burundi (257)</option>
                                            <option value="KHM">Cambodia (855)</option>
                                            <option value="CMR">Cameroon (237)</option>
                                            <option value="CAN">Canada (1)</option>
                                            <option value="CPV">Cape Verde (238)</option>
                                            <option value="CYM">Cayman Islands (1)</option>
                                            <option value="TCD">Chad (235)</option>
                                            <option value="CHL">Chile (56)</option>
                                            <option value="CHN">China (86)</option>
                                            <option value="CXR">Christmas Island (61)</option>
                                            <option value="CCK">Cocos Islands (61)</option>
                                            <option value="COL">Colombia (57)</option>
                                            <option value="COM">Comoros (269)</option>
                                            <option value="COK">Cook Islands (682)</option>
                                            <option value="CRI">Costa Rica (506)</option>
                                            <option value="CIV">Cote d’ivoire (225)</option>
                                            <option value="HRV">Croatia (385)</option>
                                            <option value="CUB">Cuba (53)</option>
                                            <option value="CUW">Curaçao (599)</option>
                                            <option value="CYP">Cyprus (357)</option>
                                            <option value="CZE">Czech Republic (420)</option>
                                            <option value="COD">Democratic Republic of the Congo (243)</option>
                                            <option value="DNK">Denmark (45)</option>
                                            <option value="DJI">Djibouti (253)</option>
                                            <option value="DMA">Dominica (1)</option>
                                            <option value="DOM">Dominican Republic (1)</option>
                                            <option value="ECU">Ecuador (593)</option>
                                            <option value="EGY">Egypt (20)</option>
                                            <option value="SLV">El Salvador (503)</option>
                                            <option value="GNQ">Equatorial Guinea (240)</option>
                                            <option value="ERI">Eritrea (291)</option>
                                            <option value="EST">Estonia (372)</option>
                                            <option value="ETH">Ethiopia (251)</option>
                                            <option value="FLK">Falkland Islands (500)</option>
                                            <option value="FRO">Faroe Islands (298)</option>
                                            <option value="FJI">Fiji (679)</option>
                                            <option value="FIN">Finland (358)</option>
                                            <option value="FRA">France (33)</option>
                                            <option value="GUF">French Guiana (594)</option>
                                            <option value="PYF">French Polynesia (689)</option>
                                            <option value="GAB">Gabon (241)</option>
                                            <option value="GMB">Gambia (220)</option>
                                            <option value="GEO">Georgia (995)</option>
                                            <option value="DEU">Germany (49)</option>
                                            <option value="GHA">Ghana (233)</option>
                                            <option value="GIB">Gibraltar (350)</option>
                                            <option value="GRC">Greece (30)</option>
                                            <option value="GRL">Greenland (299)</option>
                                            <option value="GRD">Grenada (1)</option>
                                            <option value="GLP">Guadeloupe (590)</option>
                                            <option value="GUM">Guam (1)</option>
                                            <option value="GTM">Guatemala (502)</option>
                                            <option value="GIN">Guinea (224)</option>
                                            <option value="GNB">Guinea-Bissau (245)</option>
                                            <option value="GUY">Guyana (592)</option>
                                            <option value="HTI">Haiti (509)</option>
                                            <option value="HND">Honduras (504)</option>
                                            <option value="HKG">Hong Kong (852)</option>
                                            <option value="HUN">Hungary (36)</option>
                                            <option value="ISL">Iceland (354)</option>
                                            <option value="IND">India (91)</option>
                                            <option value="IDN">Indonesia (62)</option>
                                            <option value="IRL">Ireland (353)</option>
                                            <option value="ISR">Israel (972)</option>
                                            <option value="ITA">Italy (39)</option>
                                            <option value="JAM">Jamaica (1)</option>
                                            <option value="JPN">Japan (81)</option>
                                            <option value="JOR">Jordan (962)</option>
                                            <option value="KAZ">Kazakhstan (7)</option>
                                            <option value="KEN">Kenya (254)</option>
                                            <option value="KIR">Kiribati (686)</option>
                                            <option value="KWT">Kuwait (965)</option>
                                            <option value="KGZ">Kyrgyzstan (996)</option>
                                            <option value="LAO">Laos (856)</option>
                                            <option value="LVA">Latvia (371)</option>
                                            <option value="LBN">Lebanon (961)</option>
                                            <option value="LSO">Lesotho (266)</option>
                                            <option value="LBR">Liberia (231)</option>
                                            <option value="LBY">Libya (218)</option>
                                            <option value="LIE">Liechtenstein (423)</option>
                                            <option value="LTU">Lithuania (370)</option>
                                            <option value="LUX">Luxembourg (352)</option>
                                            <option value="MAC">Macau (853)</option>
                                            <option value="MKD">Macedonia (389)</option>
                                            <option value="MDG">Madagascar (261)</option>
                                            <option value="MWI">Malawi (265)</option>
                                            <option value="MYS">Malaysia (60)</option>
                                            <option value="MDV">Maldives (960)</option>
                                            <option value="MLI">Mali (223)</option>
                                            <option value="MLT">Malta (356)</option>
                                            <option value="MHL">Marshall Islands (692)</option>
                                            <option value="MTQ">Martinique (596)</option>
                                            <option value="MRT">Mauritania (222)</option>
                                            <option value="MUS">Mauritius (230)</option>
                                            <option value="MYT">Mayotte (269)</option>
                                            <option value="MEX">Mexico (52)</option>
                                            <option value="FSM">Micronesia (691)</option>
                                            <option value="MDA">Moldova (373)</option>
                                            <option value="MCO">Monaco (377)</option>
                                            <option value="MNG">Mongolia (976)</option>
                                            <option value="MNE">Montenegro (382)</option>
                                            <option value="MSR">Montserrat (1)</option>
                                            <option value="MAR">Morocco (212)</option>
                                            <option value="MOZ">Mozambique (258)</option>
                                            <option value="MMR">Myanmar (95)</option>
                                            <option value="NAM">Namibia (264)</option>
                                            <option value="NRU">Nauru (674)</option>
                                            <option value="NPL">Nepal (977)</option>
                                            <option value="NLD">Netherlands (31)</option>
                                            <option value="NCL">New Caledonia (687)</option>
                                            <option value="NZL">New Zealand (64)</option>
                                            <option value="NIC">Nicaragua (505)</option>
                                            <option value="NER">Niger (227)</option>
                                            <option value="NGA">Nigeria (234)</option>
                                            <option value="NIU">Niue (683)</option>
                                            <option value="NFK">Norfolk Island (672)</option>
                                            <option value="MNP">Northern Mariana Islands (1)</option>
                                            <option value="NOR">Norway (47)</option>
                                            <option value="OMN">Oman (968)</option>
                                            <option value="PAK">Pakistan (92)</option>
                                            <option value="PLW">Palau (680)</option>
                                            <option value="PAN">Panama (507)</option>
                                            <option value="PNG">Papua New Guinea (675)</option>
                                            <option value="PRY">Paraguay (595)</option>
                                            <option value="PER">Peru (51)</option>
                                            <option value="PHL">Philippines (63)</option>
                                            <option value="PCN">Pitcairn Island (64)</option>
                                            <option value="POL">Poland (48)</option>
                                            <option value="PRT">Portugal (351)</option>
                                            <option value="PRI">Puerto Rico (1)</option>
                                            <option value="QAT">Qatar (974)</option>
                                            <option value="COG">Republic of the Congo (242)</option>
                                            <option value="REU">Reunion (262)</option>
                                            <option value="ROU">Romania (40)</option>
                                            <option value="RUS">Russia (7)</option>
                                            <option value="RWA">Rwanda (250)</option>
                                            <option value="WSM">Samoa (685)</option>
                                            <option value="SMR">San Marino (378)</option>
                                            <option value="STP">São Tomé and Príncipe (239)</option>
                                            <option value="SAU">Saudi Arabia (966)</option>
                                            <option value="SEN">Senegal (221)</option>
                                            <option value="SRB">Serbia (381)</option>
                                            <option value="SYC">Seychelles (248)</option>
                                            <option value="SLE">Sierra Leone (232)</option>
                                            <option value="SGP">Singapore (65)</option>
                                            <option value="SXM">Sint Maarten (1)</option>
                                            <option value="SVK">Slovakia (421)</option>
                                            <option value="SVN">Slovenia (386)</option>
                                            <option value="SLB">Solomon Islands (677)</option>
                                            <option value="ZAF">South Africa (27)</option>
                                            <option value="KOR">South Korea (82)</option>
                                            <option value="ESP">Spain (34)</option>
                                            <option value="LKA">Sri Lanka (94)</option>
                                            <option value="BLM">St Barthélemy (590)</option>
                                            <option value="SHN">St Helena (290)</option>
                                            <option value="KNA">St Kitts and Nevis (1)</option>
                                            <option value="LCA">St Lucia (1)</option>
                                            <option value="MAF">St Martin (590)</option>
                                            <option value="SPM">St Pierre and Miquelon (508)</option>
                                            <option value="VCT">St Vincent and the Grenadines (1)</option>
                                            <option value="SUR">Suriname (597)</option>
                                            <option value="SJM">Svalbard (47)</option>
                                            <option value="SWZ">Swaziland (268)</option>
                                            <option value="SWE">Sweden (46)</option>
                                            <option value="CHE">Switzerland (41)</option>
                                            <option value="TWN">Taiwan (886)</option>
                                            <option value="TJK">Tajikistan (992)</option>
                                            <option value="TZA">Tanzania (255)</option>
                                            <option value="THA">Thailand (66)</option>
                                            <option value="TGO">Togo (228)</option>
                                            <option value="TKL">Tokelau (690)</option>
                                            <option value="TON">Tonga (676)</option>
                                            <option value="TTO">Trinidad and Tobago (1)</option>
                                            <option value="TUN">Tunisia (216)</option>
                                            <option value="TUR">Turkey (90)</option>
                                            <option value="TKM">Turkmenistan (993)</option>
                                            <option value="TCA">Turks and Caicos (1)</option>
                                            <option value="TUV">Tuvalu (688)</option>
                                            <option value="UGA">Uganda (256)</option>
                                            <option value="UKR">Ukraine (380)</option>
                                            <option value="ARE">United Arab Emirates (971)</option>
                                            <option value="GBR">United Kingdom (44)</option>
                                            <option value="USA">United States of America (1)</option>
                                            <option value="URY">Uruguay (598)</option>
                                            <option value="VIR">US Virgin Islands (1)</option>
                                            <option value="UZB">Uzbekistan (998)</option>
                                            <option value="VUT">Vanuatu (678)</option>
                                            <option value="VAT">Vatican City (39)</option>
                                            <option value="VEN">Venezuela (58)</option>
                                            <option value="VNM">Vietnam (84)</option>
                                            <option value="WLF">Wallis and Futuna (681)</option>
                                            <option value="PSE">West Bank and Gaza (970)</option>
                                            <option value="ESH">Western Sahara (212)</option>
                                            <option value="ZMB">Zambia (260)</option>
                                            <option value="ZWE">Zimbabwe (263)</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">Additional address information (Optional)</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Suite number, intersection, plaza, square">
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text mb-0 line-height-20">Description of your cruise</label>
                                    <p class="font-size-13 mb-3 line-height-20">400 character limit</p>
                                    <div class="form-group">
                                        <span class="la la-pencil form-icon"></span>
                                        <textarea class="message-control form-control" name="message" placeholder="In English only, no HTML, no web or email address, no ALL CAPS           "></textarea>
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Included</label>
                                    <div class="form-group select-contain w-100">
                                        <select class="select-contain-select">
                                            <option value="">---Included---</option>
                                            <option value="Airfare">Airfare</option>
                                            <option value="Airfare">Airfare</option>
                                            <option value="Airfare">Airfare</option>
                                            <option value="Airfare">Airfare</option>
                                            <option value="Airfare">Airfare</option>
                                            <option value="Airfare">Airfare</option>
                                            <option value="Airfare">Airfare</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Not Included</label>
                                    <div class="form-group select-contain w-100">
                                        <select class="select-contain-select">
                                            <option value="">---Not Included---</option>
                                            <option value="EntranceFees">Entrance Fees</option>
                                            <option value="EntranceFees">Entrance Fees</option>
                                            <option value="EntranceFees">Entrance Fees</option>
                                            <option value="EntranceFees">Entrance Fees</option>
                                            <option value="EntranceFees">Entrance Fees</option>
                                            <option value="EntranceFees">Entrance Fees</option>
                                            <option value="EntranceFees">Entrance Fees</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-ship mr-2 text-gray"></i>Ship Statistics</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Date Launched</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="1989">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                             <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Age of Ship</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="29 years">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Age of Ship</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="29 years">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Refurbished Date</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="01/01/2017">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Tonnage</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="93,558 grt">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Length</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="965 ft">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Beam</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="105 ft">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Draft</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="28 ft">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Speed</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="22.5 knots">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Guest Capacity</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="23,400">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                             <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Total Staff</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="9,078 crew">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Officers</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Italian">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Dining Crew</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="International">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Other Crew</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="International">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Registry</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Panama">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                            <div class="col-lg-4 responsive-column">
                                <div class="input-box">
                                    <label class="label-text">Ship Type</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Luxury Cruise">
                                    </div>
                                </div>
                            </div><!-- end col-lg-4 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-map mr-2 text-gray"></i>Map Location</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Longitude</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" id="longitude" type="text" placeholder="Map Longitude">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Latitude</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" id="latitude" type="text" placeholder="Map Latitude">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">For precise location, drag the blue marker on the map.</label>
                                    <div class="form-group map-container">
                                        <div id="singleMap" class="drag-map" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->
                            <div class="col-lg-12">
                                <label class="label-text">Or enter Coordinates (longitude and latitude) Manually.</label>
                            </div><!-- end col-lg-12 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Longitude</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" type="text" placeholder="40.731444531797315">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Latitude</label>
                                    <div class="form-group">
                                        <span class="la la-map form-icon"></span>
                                        <input class="form-control" type="text" placeholder="40.731444531797315">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-12">
                                <div class="btn-box">
                                    <button type="button" class="theme-btn theme-btn-small">Find on Map</button>
                                </div>
                            </div><!-- end col-lg-12 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-user mr-2 text-gray"></i>Contact Details</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Phone</label>
                                    <div class="form-group">
                                        <span class="la la-phone form-icon"></span>
                                        <input class="form-control" type="text" placeholder="+1(1)8547632521">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Fax</label>
                                    <div class="form-group">
                                        <span class="la la-print form-icon"></span>
                                        <input class="form-control" type="text" placeholder="+1(1)1147521433">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Email</label>
                                    <div class="form-group">
                                        <span class="la la-envelope-o form-icon"></span>
                                        <input class="form-control" type="text" placeholder="Email for customer inquiries">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Your Website Address</label>
                                    <div class="form-group">
                                        <span class="la la-globe form-icon"></span>
                                        <input class="form-control" type="text" placeholder="https://www.techydevs.com/">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Facebook Page</label>
                                    <div class="form-group">
                                        <span class="la la-facebook form-icon"></span>
                                        <input class="form-control" type="text" placeholder="https://www.facebook.com/">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Instagram Page</label>
                                    <div class="form-group">
                                        <span class="la la-instagram form-icon"></span>
                                        <input class="form-control" type="text" placeholder="https://www.instagram.com/">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Twitter Page</label>
                                    <div class="form-group">
                                        <span class="la la-twitter form-icon"></span>
                                        <input class="form-control" type="text" placeholder="https://www.twitter.com/">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Linkedin Page</label>
                                    <div class="form-group">
                                        <span class="la la-linkedin form-icon"></span>
                                        <input class="form-control" type="text" placeholder="https://www.linkedin.com/">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-clock mr-2 text-gray"></i>Cruise itinerary</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Day</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Example: day 1">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Itinerary Name (comma separated)</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="Itinerary Name Example: Miami, Florida">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Arrival</label>
                                    <div class="form-group">
                                        <span class="la la-clock form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="4:00 AM">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="input-box">
                                    <label class="label-text">Departure</label>
                                    <div class="form-group">
                                        <span class="la la-clock form-icon"></span>
                                        <input class="form-control" type="text" name="text" placeholder="8:00 PM">
                                    </div>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-12">
                                <div class="file-upload-wrap file-upload-wrap-2">
                                    <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple>
                                    <span class="file-upload-text"><i class="la la-upload mr-2"></i>Upload Image</span>
                                </div>
                            </div><!-- end col-lg-12 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-gift mr-2 text-gray"></i>Ship Amenities</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-6">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="AirportTransportation">
                                    <label for="AirportTransportation">Airport Transportation</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="BarLounge">
                                    <label for="BarLounge">Bar / Lounge</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="Beach">
                                    <label for="Beach">Beach</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="BeverageSelection">
                                    <label for="BeverageSelection">Beverage Selection</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="SwimmingPool">
                                    <label for="SwimmingPool">Swimming Pool</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="WIFI">
                                    <label for="WIFI">WI-FI</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="Coffee">
                                    <label for="Coffee">Coffee</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="AirConditioning">
                                    <label for="AirConditioning">Air Conditioning</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="Entertainment">
                                    <label for="Entertainment">Entertainment</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="ElevatorInBuilding">
                                    <label for="ElevatorInBuilding">Elevator In Building</label>
                                </div>
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="WheelchairAccess">
                                    <label for="WheelchairAccess">Wheelchair access</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="FitnessFacility">
                                    <label for="FitnessFacility">Fitness Facility</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="Breakfast">
                                    <label for="Breakfast">Breakfast</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="HandicapAccessible">
                                    <label for="HandicapAccessible">Handicap Accessible</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="PetsAllowed">
                                    <label for="PetsAllowed">Pets Allowed</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="SuitableForEvents">
                                    <label for="SuitableForEvents">Suitable For Events</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="Restaurant">
                                    <label for="Restaurant">Restaurant</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="Doorman">
                                    <label for="Doorman">Doorman</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="FreeParking">
                                    <label for="FreeParking">Free Parking</label>
                                </div>
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="WineBar">
                                    <label for="WineBar">Wine Bar</label>
                                </div>
                            </div><!-- end col-lg-6 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-photo mr-2 text-gray"></i>Choose a photo to represent this listing</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content contact-form-action">
                        <form method="post" class="row">
                            <div class="col-lg-12">
                                <div class="file-upload-wrap">
                                    <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple maxlength="3">
                                    <span class="file-upload-text"><i class="la la-upload mr-2"></i>Click or drag images here to upload</span>
                                </div>
                            </div><!-- end col-lg-12 -->
                        </form>
                    </div><!-- end form-content -->
                </div><!-- end form-box -->
                <div class="submit-box">
                    <h3 class="title pb-3">Submit this listing</h3>
                    <div class="custom-checkbox">
                        <input type="checkbox" id="agreeChb">
                        <label for="agreeChb">Check this box to certify that you are an official representative of the property for which you are submitting this listing and that the information you have submitted is correct. In submitting a photo, you also certify that you have the right to use the photo on the web and agree to hold Trizen harmless for any and all copyright issues arising from your use of the image.</label>
                    </div>
                    <div class="btn-box pt-3">
                        <button type="submit" class="theme-btn">Submit Listing <i class="la la-arrow-right ml-1"></i></button>
                    </div>
                </div><!-- end submit-box -->
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end listing-form -->
<!-- ================================
    END FORM AREA
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
<script src="js/jquery.multi-file.min.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYzby4yYDVaXPmtu4jZAGR258K6IYwjIY&amp;libraries"></script>
<script src="js/map-add.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/add-cruise.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:47:23 GMT -->
</html>