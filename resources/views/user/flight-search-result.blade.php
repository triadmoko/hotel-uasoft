<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/flight-search-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:49:32 GMT -->
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
<section class="breadcrumb-area bread-bg-6">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="search-result-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">Flight Search Result</h2>
                        </div>
                        <div class="search-fields-container margin-top-30px">
                            <div class="contact-form-action">
                                <form action="#" class="row">
                                    <div class="col-lg-3 col-sm-6 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Destination</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input class="form-control" type="text" placeholder="City or airport">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 col-sm-6 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Check in</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 col-sm-6 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Check out</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single" readonly>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="input-box">
                                            <label class="label-text">Passengers</label>
                                            <div class="form-group">
                                                <div class="select-contain select-contain-shadow w-auto">
                                                    <select class="select-contain-select">
                                                        <option value="0">Select Passenger</option>
                                                        <option value="1">1 Passenger</option>
                                                        <option value="2">2 Passengers</option>
                                                        <option value="3">3 Passengers</option>
                                                        <option value="4">4 Passengers</option>
                                                        <option value="5">5 Passengers</option>
                                                        <option value="6">6 Passengers</option>
                                                        <option value="7">7 Passengers</option>
                                                        <option value="8">8 Passengers</option>
                                                        <option value="9">9 Passengers</option>
                                                        <option value="10">10 Passengers</option>
                                                        <option value="11">11 Passengers</option>
                                                        <option value="12">12 Passengers</option>
                                                        <option value="13">13 Passengers</option>
                                                        <option value="14">14 Passengers</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-3 -->
                                </form>
                            </div><!-- end contact-form-action -->
                            <div class="advanced-wrap">
                                <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                    More option <i class="la la-angle-down ml-1"></i>
                                </a>
                                <div class="pt-3 collapse" id="collapseTwo">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="input-box">
                                                <label class="label-text">Preferred airlines</label>
                                                <div class="form-group">
                                                    <div class="select-contain select-contain-shadow w-auto">
                                                        <select class="select-contain-select">
                                                            <option selected="selected" value=""> No preference</option>
                                                            <option value="AN">Advanced Air</option>
                                                            <option value="A3">Aegean</option>
                                                            <option value="EI">Aer Lingus</option>
                                                            <option value="5G">Aerocuahonte / Mayair</option>
                                                            <option value="SU">Aeroflot-Russian Airlines</option>
                                                            <option value="AR">Aerolineas Argentinas</option>
                                                            <option value="VW">Aeromar Airlines</option>
                                                            <option value="AM">Aeromexico</option>
                                                            <option value="ZI">Aigle Azur</option>
                                                            <option value="AH">Air Algerie</option>
                                                            <option value="KC">Air Astana</option>
                                                            <option value="UU">Air Austral</option>
                                                            <option value="BT">Air Baltic</option>
                                                            <option value="BP">Air Botswana</option>
                                                            <option value="AC">Air Canada</option>
                                                            <option value="TX">Air Caraibes</option>
                                                            <option value="CA">Air China</option>
                                                            <option value="3E">Air Choice One</option>
                                                            <option value="XK">Air Corsica</option>
                                                            <option value="UX">Air Europa</option>
                                                            <option value="X4">Air Excursions LLC</option>
                                                            <option value="AF">Air France</option>
                                                            <option value="NY">Air Iceland Connect</option>
                                                            <option value="AI">Air India</option>
                                                            <option value="IG">Air Italy</option>
                                                            <option value="MD">Air Madagascar</option>
                                                            <option value="KM">Air Malta</option>
                                                            <option value="MK">Air Mauritius</option>
                                                            <option value="9U">Air Moldova</option>
                                                            <option value="NZ">Air New Zealand</option>
                                                            <option value="PX">Air Niugini</option>
                                                            <option value="OG">Air Onix</option>
                                                            <option value="JU">Air Serbia</option>
                                                            <option value="TN">Air Tahiti Nui</option>
                                                            <option value="TS">Air Transat</option>
                                                            <option value="H/">AirAsia with baggage</option>
                                                            <option value="AS">Alaska Airlines</option>
                                                            <option value="AZ">Alitalia</option>
                                                            <option value="NH">All Nippon Airways</option>
                                                            <option value="G4">Allegiant Air</option>
                                                            <option value="AA">American Airlines</option>
                                                            <option value="OY">Andes Lineas Aereas</option>
                                                            <option value="OZ">Asiana Airlines</option>
                                                            <option value="KP">ASKY</option>
                                                            <option value="OS">Austrian Airlines</option>
                                                            <option value="AV">Avianca</option>
                                                            <option value="2K">Avianca Ecuador</option>
                                                            <option value="9V">Avior Airlines</option>
                                                            <option value="J2">Azerbaijan Airlines</option>
                                                            <option value="AD">Azul</option>
                                                            <option value="JD">Beijing Capital Airlines</option>
                                                            <option value="0B">BlueAir</option>
                                                            <option value="OB">Boliviana De Aviacion</option>
                                                            <option value="4B">Boutique Air</option>
                                                            <option value="BA">British Airways</option>
                                                            <option value="SN">Brussels Airlines</option>
                                                            <option value="A7">Calafia Airlines</option>
                                                            <option value="K6">Cambodia Angkor Air</option>
                                                            <option value="BW">Caribbean Airlines</option>
                                                            <option value="CX">Cathay Pacific</option>
                                                            <option value="KX">Cayman Airways</option>
                                                            <option value="CI">China Airlines</option>
                                                            <option value="MU">China Eastern Airlines</option>
                                                            <option value="CZ">China Southern Airlines</option>
                                                            <option value="CC">CM Airlines</option>
                                                            <option value="DE">Condor</option>
                                                            <option value="LF">Contour Airlines</option>
                                                            <option value="CM">Copa</option>
                                                            <option value="SS">Corsair</option>
                                                            <option value="OK">Czech Airlines</option>
                                                            <option value="DL">Delta</option>
                                                            <option value="KG">Denver Air Connection</option>
                                                            <option value="U2">easyJet</option>
                                                            <option value="MS">Egyptair</option>
                                                            <option value="LY">EL AL Israel Airlines</option>
                                                            <option value="7Q">Elite Airways</option>
                                                            <option value="EL">Ellinair</option>
                                                            <option value="EK">Emirates</option>
                                                            <option value="ET">Ethiopian Airlines</option>
                                                            <option value="EY">Etihad Airways</option>
                                                            <option value="EW">Eurowings</option>
                                                            <option value="BR">EVA Airways</option>
                                                            <option value="FJ">Fiji Airways</option>
                                                            <option value="AY">Finnair</option>
                                                            <option value="FY">Firefly</option>
                                                            <option value="F8">Flair Airlines</option>
                                                            <option value="BE">Flybe</option>
                                                            <option value="FZ">flydubai</option>
                                                            <option value="XY">flynas</option>
                                                            <option value="F9">Frontier Airlines</option>
                                                            <option value="GA">Garuda Indonesia</option>
                                                            <option value="GM">Germania Flug AG</option>
                                                            <option value="4U">Germanwings</option>
                                                            <option value="G3">GOL Linhas Aereas S.A.</option>
                                                            <option value="ZK">Great Lakes Airlines</option>
                                                            <option value="GF">Gulf Air</option>
                                                            <option value="HU">Hainan Airlines</option>
                                                            <option value="HA">Hawaiian Airlines</option>
                                                            <option value="HX">Hong Kong Airlines</option>
                                                            <option value="IB">Iberia</option>
                                                            <option value="FI">Icelandair</option>
                                                            <option value="JY">interCaribbean Airways</option>
                                                            <option value="4O">Interjet</option>
                                                            <option value="03">Involatus</option>
                                                            <option value="JL">Japan Airlines</option>
                                                            <option value="9W">Jet Airways</option>
                                                            <option value="B6">JetBlue Airways</option>
                                                            <option value="DV">JSC Aircompany SCAT</option>
                                                            <option value="KQ">Kenya Airways</option>
                                                            <option value="KL">KLM</option>
                                                            <option value="KE">Korean Air</option>
                                                            <option value="B0">La Compagnie</option>
                                                            <option value="LR">LACSA</option>
                                                            <option value="QV">Lao Airlines</option>
                                                            <option value="LP">LATAM Airlines Group</option>
                                                            <option value="LA">LATAM Airlines Group</option>
                                                            <option value="JJ">LATAM Airlines Group</option>
                                                            <option value="XL">LATAM Airlines Group</option>
                                                            <option value="4M">LATAM Airlines Group</option>
                                                            <option value="W4">LC Peru</option>
                                                            <option value="LI">Liat</option>
                                                            <option value="LO">LOT-Polish Airlines</option>
                                                            <option value="LH">Lufthansa</option>
                                                            <option value="LG">Luxair</option>
                                                            <option value="MH">Malaysia Airlines</option>
                                                            <option value="OD">Malindo Air</option>
                                                            <option value="2M">Maya Island Air</option>
                                                            <option value="7M">Mayair</option>
                                                            <option value="OM">MIAT-Mongolian Airlines</option>
                                                            <option value="ME">Middle East Airlines</option>
                                                            <option value="YM">Montenegro</option>
                                                            <option value="8M">Myanmar Airways International</option>
                                                            <option value="NO">Neos S.P.A.</option>
                                                            <option value="RA">Nepal Airlines</option>
                                                            <option value="NP">Nile Air</option>
                                                            <option value="W/">NokScoot with baggage</option>
                                                            <option value="DN">Norwegian Air Argentina</option>
                                                            <option value="D8">Norwegian Air International Ltd</option>
                                                            <option value="DY">Norwegian Air Shuttle</option>
                                                            <option value="DI">Norwegian Air UK</option>
                                                            <option value="Y/">Olympic Air with baggage</option>
                                                            <option value="WY">Oman Air</option>
                                                            <option value="8Q">Onur Air</option>
                                                            <option value="8P">Pacific Coastal Airlines</option>
                                                            <option value="PK">Pakistan International Airlines</option>
                                                            <option value="ZM">Pegasus Asia</option>
                                                            <option value="KS">PenAir</option>
                                                            <option value="PR">Philippine Airlines</option>
                                                            <option value="PU">Plus Ultra Lineas Aereas S. A.</option>
                                                            <option value="PD">Porter Airlines</option>
                                                            <option value="PW">PrecisionAir</option>
                                                            <option value="P0">Proflight Zambia</option>
                                                            <option value="QF">Qantas Airways</option>
                                                            <option value="QR">Qatar Airways</option>
                                                            <option value="7H">Ravn Alaska</option>
                                                            <option value="WZ">Red Wings Airlines</option>
                                                            <option value="4P">Regional Sky</option>
                                                            <option value="AT">Royal Air Maroc</option>
                                                            <option value="BI">Royal Brunei Airlines</option>
                                                            <option value="RJ">Royal Jordanian</option>
                                                            <option value="WB">Rwandair</option>
                                                            <option value="SK">SAS</option>
                                                            <option value="S4">SATA International-Azores Airlines S.A.</option>
                                                            <option value="SV">Saudi Arabian Airlines</option>
                                                            <option value="/Y">Scoot with baggage</option>
                                                            <option value="BB">Seaborne Airlines</option>
                                                            <option value="SC">Shandong Airlines</option>
                                                            <option value="3U">Sichuan Airlines</option>
                                                            <option value="3M">Silver Airways</option>
                                                            <option value="SQ">Singapore Airlines</option>
                                                            <option value="H2">Sky Airlines</option>
                                                            <option value="GQ">Sky Express</option>
                                                            <option value="IE">Solomon Airlines</option>
                                                            <option value="SA">South African Airways</option>
                                                            <option value="9X">Southern Airways</option>
                                                            <option value="NK">Spirit Airlines</option>
                                                            <option value="UL">SriLankan Airlines</option>
                                                            <option value="2I">STAR PERU</option>
                                                            <option value="6G">Sun Air Express</option>
                                                            <option value="SY">Sun Country Airlines</option>
                                                            <option value="PY">Surinam Airways</option>
                                                            <option value="LX">Swiss International Air Lines</option>
                                                            <option value="WO">Swoop</option>
                                                            <option value="DT">TAAG Angola Airlines</option>
                                                            <option value="TA">TACA Airlines</option>
                                                            <option value="VR">TACV-Cabo Verde Airlines</option>
                                                            <option value="5U">TAG Airlines</option>
                                                            <option value="EQ">Tame</option>
                                                            <option value="TP">TAP Portugal</option>
                                                            <option value="RO">Tarom-Romanian Air Transport</option>
                                                            <option value="TG">Thai Airways International</option>
                                                            <option value="MT">Thomas Cook Airlines</option>
                                                            <option value="/X">Tigerair Australia with Bag</option>
                                                            <option value="IT">Tigerair Taiwan</option>
                                                            <option value="/Z">Tigerair Taiwan with bag</option>
                                                            <option value="TJ">Tradewind Aviation</option>
                                                            <option value="9N">Tropic Air</option>
                                                            <option value="TB">TUI fly</option>
                                                            <option value="TK">Turkish Airlines</option>
                                                            <option value="PS">Ukraine International Airlines</option>
                                                            <option value="UA">United</option>
                                                            <option value="UT">Utair Aviation</option>
                                                            <option value="HY">Uzbekistan Airways</option>
                                                            <option value="VN">Vietnam Airlines</option>
                                                            <option value="VX">Virgin America</option>
                                                            <option value="VS">Virgin Atlantic</option>
                                                            <option value="VA">Virgin Australia</option>
                                                            <option value="V2">Vision Airlines</option>
                                                            <option value="VB">Viva Aerobus</option>
                                                            <option value="F1">Viva Air Colombia</option>
                                                            <option value="VV">Viva Airlines Peru</option>
                                                            <option value="Y4">Volaris</option>
                                                            <option value="V7">Volotea</option>
                                                            <option value="VY">Vueling Airlines</option>
                                                            <option value="WS">WestJet</option>
                                                            <option value="WM">Windward Island Airways International</option>
                                                            <option value="MF">Xiamen Airlines</option>
                                                            <option value="SE">XL Airways</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-3 -->
                                    </div><!-- end row -->
                                </div>
                            </div>
                            <div class="btn-box pt-3">
                                <a href="#" class="theme-btn">Search Now</a>
                            </div>
                        </div>
                    </div><!-- end search-result-content -->
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
                <div class="filter-wrap margin-bottom-30px">
                    <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                        <div>
                            <h3 class="title font-size-24">New Jersey: 24 Flights found</h3>
                            <p class="font-size-14"><span class="mr-1 pt-1">Book with confidence:</span>No flight booking fees</p>
                        </div>
                        <div class="layout-view d-flex align-items-center">
                            <a href="flight-grid.html" data-toggle="tooltip" data-placement="top" title="Grid View" class="active"><i class="la la-th-large"></i></a>
                            <a href="flight-list.html" data-toggle="tooltip" data-placement="top" title="List View"><i class="la la-th-list"></i></a>
                        </div>
                    </div><!-- end filter-top -->
                    <div class="filter-bar d-flex align-items-center justify-content-between">
                        <div class="filter-bar-filter d-flex flex-wrap align-items-center">
                            <div class="filter-option">
                                <h3 class="title font-size-16">Filter by:</h3>
                            </div>
                            <div class="filter-option">
                                <div class="dropdown dropdown-contain">
                                    <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button" data-toggle="dropdown">
                                        Filter Price
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-wrap">
                                        <div class="dropdown-item">
                                            <div class="slider-range-wrap">
                                                <div class="price-slider-amount padding-bottom-20px">
                                                    <label for="amount" class="filter__label">Price:</label>
                                                    <input type="text" id="amount" class="amounts">
                                                </div><!-- end price-slider-amount -->
                                                <div id="slider-range"></div><!-- end slider-range -->
                                            </div><!-- end slider-range-wrap -->
                                            <div class="btn-box pt-4">
                                                <button class="theme-btn theme-btn-small theme-btn-transparent" type="button">Apply</button>
                                            </div>
                                        </div><!-- end dropdown-item -->
                                    </div><!-- end dropdown-menu -->
                                </div><!-- end dropdown -->
                            </div>
                            <div class="filter-option">
                                <div class="dropdown dropdown-contain">
                                    <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button" data-toggle="dropdown">
                                        Review Score
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-wrap">
                                        <div class="dropdown-item">
                                            <div class="checkbox-wrap">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r1">
                                                    <label for="r1">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(55.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r2">
                                                    <label for="r2">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(40.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r3">
                                                    <label for="r3">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(23.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r4">
                                                    <label for="r4">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(12.590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="r5">
                                                    <label for="r5">
                                                        <span class="ratings d-flex align-items-center">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <i class="la la-star-o"></i>
                                                            <span class="color-text-3 font-size-13 ml-1">(590)</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div><!-- end dropdown-item -->
                                    </div><!-- end dropdown-menu -->
                                </div><!-- end dropdown -->
                            </div>
                            <div class="filter-option">
                                <div class="dropdown dropdown-contain">
                                    <a class="dropdown-toggle dropdown-btn dropdown--btn" href="#" role="button" data-toggle="dropdown">
                                        Airlines
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-wrap">
                                        <div class="dropdown-item">
                                            <div class="checkbox-wrap">
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb1">
                                                    <label for="catChb1">Major Airlines</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb2">
                                                    <label for="catChb2">United Airlines</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb3">
                                                    <label for="catChb3">Delta Airlines</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb4">
                                                    <label for="catChb4">Alitalia</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb5">
                                                    <label for="catChb5">US Airways</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb6">
                                                    <label for="catChb6">Air France</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb7">
                                                    <label for="catChb7">Air Tahiti Nui</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" id="catChb8">
                                                    <label for="catChb8">Indigo</label>
                                                </div>
                                            </div>
                                        </div><!-- end dropdown-item -->
                                    </div><!-- end dropdown-menu -->
                                </div><!-- end dropdown -->
                            </div>
                        </div><!-- end filter-bar-filter -->
                        <div class="select-contain">
                            <select class="select-contain-select">
                                <option value="1">Short by default</option>
                                <option value="2">Popular Flight</option>
                                <option value="3">Price: low to high</option>
                                <option value="4">Price: high to low</option>
                                <option value="5">A to Z</option>
                            </select>
                        </div><!-- end select-contain -->
                    </div><!-- end filter-bar -->
                </div><!-- end filter-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="images/airline-img7.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">Beijing</h3>
                                <p class="card-meta font-size-14">One way flight</p>
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$350.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12 Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                            <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="images/airline-img8.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">Paris</h3>
                                <p class="card-meta font-size-14">Round flight</p>
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$650.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12 Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                            <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="images/airline-img9.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">Dubai</h3>
                                <p class="card-meta font-size-14">One way flight</p>
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$350.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12 Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                            <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="images/airline-img10.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">Turkey</h3>
                                <p class="card-meta font-size-14">One way flight</p>
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$350.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12 Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                            <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="images/airline-img11.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">New york</h3>
                                <p class="card-meta font-size-14">Round flight</p>
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$650.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12 Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                            <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item flight-card flight--card">
                    <div class="card-img">
                        <img src="images/airline-img7.png" alt="flight-logo-img">
                    </div>
                    <div class="card-body">
                        <div class="card-top-title d-flex justify-content-between">
                            <div>
                                <h3 class="card-title font-size-17">London</h3>
                                <p class="card-meta font-size-14">One way flight</p>
                            </div>
                            <div>
                                <div class="text-right">
                                    <span class="font-weight-regular font-size-14 d-block">avg/person</span>
                                    <h6 class="font-weight-bold color-text">$350.00</h6>
                                </div>
                            </div>
                        </div><!-- end card-top-title -->
                        <div class="flight-details py-3">
                            <div class="flight-time pb-3">
                                <div class="flight-time-item take-off d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Take off</h3>
                                        <p class="card-meta font-size-14">Wed Nov 12 6:50 AM</p>
                                    </div>
                                </div>
                                <div class="flight-time-item landing d-flex">
                                    <div class="flex-shrink-0 mr-2">
                                        <i class="la la-plane"></i>
                                    </div>
                                    <div>
                                        <h3 class="card-title font-size-15 font-weight-medium mb-0">Landing</h3>
                                        <p class="card-meta font-size-14">Thu Nov 13 8:50 AM</p>
                                    </div>
                                </div>
                            </div><!-- end flight-time -->
                            <p class="font-size-14 text-center"><span class="color-text-2 mr-1">Total Time:</span>12 Hours 30 Minutes</p>
                        </div><!-- end flight-details -->
                        <div class="btn-box text-center">
                            <a href="flight-single.html" class="theme-btn theme-btn-small w-100">View Details</a>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box mt-3 text-center">
                    <button type="button" class="theme-btn"><i class="la la-refresh mr-1"></i>Load More</button>
                    <p class="font-size-13 pt-2">Showing 1 - 6 of 24 Flights</p>
                </div><!-- end btn-box -->
            </div><!-- end col-lg-12 -->
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
<script src="js/quantity-input.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/trizen-demo/trizen/flight-search-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 03:49:32 GMT -->
</html>