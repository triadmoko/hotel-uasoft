<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themekita.com/demo-atlantis-bootstrap/livepreview/examples/demo1/boards.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Aug 2021 12:28:08 GMT -->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index-2.html" class="logo">
					<img src="../assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="../assets/img/profile2.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-danger rounded-circle">
														<i class="far fa-calendar-alt"></i>
													</div>
													<span class="text">Calendar</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-warning rounded-circle">
														<i class="fas fa-map"></i>
													</div>
													<span class="text">Maps</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-info rounded-circle">
														<i class="fas fa-file-excel"></i>
													</div>
													<span class="text">Reports</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-success rounded-circle">
														<i class="fas fa-envelope"></i>
													</div>
													<span class="text">Emails</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-primary rounded-circle">
														<i class="fas fa-file-invoice-dollar"></i>
													</div>
													<span class="text">Invoice</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<div class="avatar-item bg-secondary rounded-circle">
														<i class="fas fa-credit-card"></i>
													</div>
													<span class="text">Payments</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link quick-sidebar-toggler">
								<i class="fa fa-th"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									<li>
										<a href="index-2.html">
											<span class="sub-item">Dashboard 1</span>
										</a>
									</li>
									<li>
										<a href="../demo2/index-2.html">
											<span class="sub-item">Dashboard 2</span>
										</a>
									</li>
									<li>
										<a href="../demo3/index-2.html">
											<span class="sub-item">Dashboard 3</span>
										</a>
									</li>
									<li>
										<a href="../demo4/index-2.html">
											<span class="sub-item">Dashboard 4</span>
										</a>
									</li>
									<li>
										<a href="../demo5/index-2.html">
											<span class="sub-item">Dashboard 5</span>
										</a>
									</li>
									<li>
										<a href="../demo6/index-2.html">
											<span class="sub-item">Dashboard 6</span>
										</a>
									</li>
									<li>
										<a href="../demo7/index-2.html">
											<span class="sub-item">Dashboard 7</span>
										</a>
									</li>
									<li>
										<a href="../demo8/index-2.html">
											<span class="sub-item">Dashboard 8</span>
										</a>
									</li>
									<li>
										<a href="../demo9/index-2.html">
											<span class="sub-item">Dashboard 9</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Base</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="components/avatars.html">
											<span class="sub-item">Avatars</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Buttons</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Grid System</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Panels</span>
										</a>
									</li>
									<li>
										<a href="components/notifications.html">
											<span class="sub-item">Notifications</span>
										</a>
									</li>
									<li>
										<a href="components/sweetalert.html">
											<span class="sub-item">Sweet Alert</span>
										</a>
									</li>
									<li>
										<a href="components/lists.html">
											<span class="sub-item">Lists</span>
										</a>
									</li>
									<li>
										<a href="components/owl-carousel.html">
											<span class="sub-item">Owl Carousel</span>
										</a>
									</li>
									<li>
										<a href="components/magnific-popup.html">
											<span class="sub-item">Magnific Popup</span>
										</a>
									</li>
									<li>
										<a href="components/font-awesome-icons.html">
											<span class="sub-item">Font Awesome Icons</span>
										</a>
									</li>
									<li>
										<a href="components/simple-line-icons.html">
											<span class="sub-item">Simple Line Icons</span>
										</a>
									</li>
									<li>
										<a href="components/flaticons.html">
											<span class="sub-item">Flaticons</span>
										</a>
									</li>
									<li>
										<a href="components/typography.html">
											<span class="sub-item">Typography</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>Sidebar Layouts</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="sidebar-style-1.html">
											<span class="sub-item">Sidebar Style 1</span>
										</a>
									</li>
									<li>
										<a href="overlay-sidebar.html">
											<span class="sub-item">Overlay Sidebar</span>
										</a>
									</li>
									<li>
										<a href="compact-sidebar.html">
											<span class="sub-item">Compact Sidebar</span>
										</a>
									</li>
									<li>
										<a href="static-sidebar.html">
											<span class="sub-item">Static Sidebar</span>
										</a>
									</li>
									<li>
										<a href="icon-menu.html">
											<span class="sub-item">Icon Menu</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-pen-square"></i>
								<p>Forms</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="forms/forms.html">
											<span class="sub-item">Basic Form</span>
										</a>
									</li>
									<li>
										<a href="forms/formvalidation.html">
											<span class="sub-item">Form Validation</span>
										</a>
									</li>
									<li>
										<a href="forms/formwidget.html">
											<span class="sub-item">Form Widget</span>
										</a>
									</li>
									<li>
										<a href="forms/formwizard.html">
											<span class="sub-item">Form Wizard</span>
										</a>
									</li>
									<li>
										<a href="forms/formupload.html">
											<span class="sub-item">Multiple Upload</span>
										</a>
									</li>
									<li>
										<a href="forms/formwysiwyg.html">
											<span class="sub-item">WYSIWYG Editor</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Tables</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="tables/tables.html">
											<span class="sub-item">Basic Table</span>
										</a>
									</li>
									<li>
										<a href="tables/datatables.html">
											<span class="sub-item">Datatables</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#maps">
								<i class="fas fa-map-marker-alt"></i>
								<p>Maps</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li>
										<a href="maps/googlemaps.html">
											<span class="sub-item">Google Maps</span>
										</a>
									</li>
									<li>
										<a href="maps/fullscreenmaps.html">
											<span class="sub-item">Full Screen Maps</span>
										</a>
									</li>
									<li>
										<a href="maps/jqvmap.html">
											<span class="sub-item">JQVMap</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#charts">
								<i class="far fa-chart-bar"></i>
								<p>Charts</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="charts">
								<ul class="nav nav-collapse">
									<li>
										<a href="charts/charts.html">
											<span class="sub-item">Chart Js</span>
										</a>
									</li>
									<li>
										<a href="charts/sparkline.html">
											<span class="sub-item">Sparkline</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="calendar.html">
								<i class="far fa-calendar-alt"></i>
								<p>Calendar</p>
								<span class="badge badge-info">1</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="widgets.html">
								<i class="fas fa-desktop"></i>
								<p>Widgets</p>
								<span class="badge badge-success">4</span>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Snippets</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#email-nav">
								<i class="far fa-envelope"></i>
								<p>Email</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="email-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="email-inbox.html">
											<span class="sub-item">Inbox</span>
										</a>
									</li>
									<li>
										<a href="email-compose.html">
											<span class="sub-item">Email Compose</span>
										</a>
									</li>
									<li>
										<a href="email-detail.html">
											<span class="sub-item">Email Detail</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#messages-app-nav">
								<i class="far fa-paper-plane"></i>
								<p>Messages App</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="messages-app-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="messages.html">
											<span class="sub-item">Messages</span>
										</a>
									</li>
									<li>
										<a href="conversations.html">
											<span class="sub-item">Conversations</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="projects.html">
								<i class="fas fa-file-signature"></i>
								<p>Projects</p>
								<span class="badge badge-count">5</span>
							</a>
						</li>
						<li class="nav-item active">
							<a href="boards.html">
								<i class="fas fa-th-list"></i>
								<p>Boards</p>
								<span class="badge badge-count">4</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="invoice.html">
								<i class="fas fa-file-invoice-dollar"></i>
								<p>Invoices</p>
								<span class="badge badge-count">6</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="pricing.html">
								<i class="fas fa-tag"></i>
								<p>Pricing</p>
								<span class="badge badge-count">6</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="faqs.html">
								<i class="far fa-question-circle"></i>
								<p>Faqs</p>
								<span class="badge badge-count">6</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#custompages">
								<i class="fas fa-paint-roller"></i>
								<p>Custom Pages</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="custompages">
								<ul class="nav nav-collapse">
									<li>
										<a href="login.html">
											<span class="sub-item">Login & Register 1</span>
										</a>
									</li>
									<li>
										<a href="login2.html">
											<span class="sub-item">Login & Register 2</span>
										</a>
									</li>
									<li>
										<a href="login3.html">
											<span class="sub-item">Login & Register 3</span>
										</a>
									</li>
									<li>
										<a href="userprofile.html">
											<span class="sub-item">User Profile</span>
										</a>
									</li>
									<li>
										<a href="404.html">
											<span class="sub-item">404</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#submenu">
								<i class="fas fa-bars"></i>
								<p>Menu Levels</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="submenu">
								<ul class="nav nav-collapse">
									<li>
										<a data-toggle="collapse" href="#subnav1">
											<span class="sub-item">Level 1</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="subnav1">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="#">
														<span class="sub-item">Level 2</span>
													</a>
												</li>
												<li>
													<a href="#">
														<span class="sub-item">Level 2</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a data-toggle="collapse" href="#subnav2">
											<span class="sub-item">Level 1</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="subnav2">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="#">
														<span class="sub-item">Level 2</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a href="#">
											<span class="sub-item">Level 1</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="container container-full">
				<div class="page-navs bg-white py-3 pr-2">
					<div class="card-title fw-bold">Boards</div>
				</div>
				<div class="page-inner page-inner-fill">
					<div id="myKanban" class="board">
						<div data-id="_todo" class="kanban-board">
							<header class="kanban-board-header">
								<div class="kanban-title-board">Backlogs</div>
								<div class="kanban-title-button d-inline-flex">
									<button class="mr-2"><i class="fas fa-plus-circle"></i></button>
									<div class="dropdown dropdown-kanban">
										<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="icon-options-vertical"></i>
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#">Edit</a>
											<a class="dropdown-item" href="#">Move</a>
											<a class="dropdown-item" href="#">Duplicate</a>
											<a class="dropdown-item" href="#">Trash</a>
										</div>
									</div>
								</div>
							</header>
							<main class="kanban-drag">
								<div class="kanban-item">
									<div class="kanban-image">
										<img src="../assets/img/examples/product8.jpg" class="img-fluid">
									</div>
									<a href="#" class="kanban-title">Briefing</a>
									<div class="kanban-badges">
										<div class="kanban-badge">
											<i class="far fa-comment-alt"></i>
											<span class="badge-text">2</span>
										</div>
										<div class="kanban-badge">
											<i class="fas fa-paperclip"></i>
											<span class="badge-text">10</span>
										</div>
									</div>
									<div class="kanban-edit">
										<i class="fa fa-pencil-alt"></i>
									</div>
								</div>
								<div class="kanban-item">
									<a href="#" class="kanban-title">Requirment/SOP</a>
									<div class="kanban-badges">
										<div class="kanban-badge">
											<i class="far fa-comment-alt"></i>
											<span class="badge-text">2</span>
										</div>
										<div class="kanban-badge bg-success">
											<i class="far fa-check-square"></i>
											<span class="badge-text">12/12</span>
										</div>
									</div>
									<div class="kanban-edit">
										<i class="fa fa-pencil-alt"></i>
									</div>
								</div>
								<div class="kanban-item">
									<a href="#" class="kanban-title">Report</a>
									<div class="kanban-badges">
										<div class="kanban-badge bg-danger">
											<i class="far fa-clock"></i>
											<span class="badge-text">Oct 8, 2018</span>
										</div>
										<div class="kanban-badge">
											<i class="far fa-check-square"></i>
											<span class="badge-text">1/5</span>
										</div>
									</div>
									<div class="kanban-edit">
										<i class="fa fa-pencil-alt"></i>
									</div>
								</div>
							</main>
						</div>
						<div data-id="_working" class="kanban-board">
							<header class="kanban-board-header d-flex align-items-center">
								<div class="kanban-title-board">Working</div>
								<div class="kanban-title-button ml-auto d-inline-flex">
									<button class="mr-2"><i class="fas fa-plus-circle"></i></button>
									<div class="dropdown dropdown-kanban">
										<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="icon-options-vertical"></i>
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#">Edit</a>
											<a class="dropdown-item" href="#">Move</a>
											<a class="dropdown-item" href="#">Duplicate</a>
											<a class="dropdown-item" href="#">Trash</a>
										</div>
									</div>
								</div>
							</header>
							<main class="kanban-drag">
								<div class="kanban-item">
									<a href="#" class="kanban-title">Boards</a>
									<div class="kanban-badges">
										<div class="kanban-badge">
											<i class="far fa-comment-alt"></i>
											<span class="badge-text">3</span>
										</div>
										<div class="kanban-badge">
											<i class="far fa-check-square"></i>
											<span class="badge-text">5/12</span>
										</div>
									</div>
									<div class="kanban-edit">
										<i class="fa fa-pencil-alt"></i>
									</div>
								</div>
								<div class="kanban-item">
									<div class="kanban-image">
										<img src="../assets/img/examples/product4.jpg" class="img-fluid">
									</div>
									<a href="#" class="kanban-title">Backend Development</a>
									<div class="kanban-badges">
										<div class="kanban-badge bg-danger">
											<i class="far fa-clock"></i>
											<span class="badge-text">Oct 12, 2018</span>
										</div>
										<div class="kanban-badge">
											<i class="far fa-comment-alt"></i>
											<span class="badge-text">6</span>
										</div>
										<div class="kanban-badge">
											<i class="far fa-check-square"></i>
											<span class="badge-text">2/4</span>
										</div>
									</div>
									<div class="kanban-edit">
										<i class="fa fa-pencil-alt"></i>
									</div>
								</div>
								<div class="kanban-item">
									<a href="#" class="kanban-title">Test the Application</a>
									<div class="kanban-badges">
										<div class="kanban-badge">
											<i class="far fa-comment-alt"></i>
											<span class="badge-text">10</span>
										</div>
										<div class="kanban-badge">
											<i class="far fa-check-square"></i>
											<span class="badge-text">0/24</span>
										</div>
									</div>
									<div class="kanban-edit">
										<i class="fa fa-pencil-alt"></i>
									</div>
								</div>
							</main>
						</div>
						<div data-id="_done" class="kanban-board">
							<header class="kanban-board-header success">
								<div class="kanban-title-board">Done</div>
								<div class="kanban-title-button d-inline-flex">
									<button class="mr-2"><i class="fas fa-plus-circle"></i></button>
									<div class="dropdown dropdown-kanban">
										<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="icon-options-vertical"></i>
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#">Edit</a>
											<a class="dropdown-item" href="#">Move</a>
											<a class="dropdown-item" href="#">Duplicate</a>
											<a class="dropdown-item" href="#">Trash</a>
										</div>
									</div>
								</div>
							</header>
							<main class="kanban-drag">
								<div class="kanban-item">
									<a href="#" class="kanban-title">Launching the application</a>
									<div class="kanban-badges">
										<div class="kanban-badge">
											<i class="far fa-comment-alt"></i>
											<span class="badge-text">12</span>
										</div>
									</div>
									<div class="kanban-edit">
										<i class="fa fa-pencil-alt"></i>
									</div>
								</div>
							</main>
						</div>
						<div data-id="_done" class="kanban-board">
							<header class="kanban-board-header success">
								<div class="kanban-title-board">Launch</div>
								<div class="kanban-title-button d-inline-flex">
									<button class="mr-2"><i class="fas fa-plus-circle"></i></button>
									<div class="dropdown dropdown-kanban">
										<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="icon-options-vertical"></i>
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#">Edit</a>
											<a class="dropdown-item" href="#">Move</a>
											<a class="dropdown-item" href="#">Duplicate</a>
											<a class="dropdown-item" href="#">Trash</a>
										</div>
									</div>
								</div>
							</header>
							<main class="kanban-drag">
								<div class="kanban-item">
									<a href="#" class="kanban-title">Launching the application</a>
									<div class="kanban-badges">
										<div class="kanban-badge">
											<i class="far fa-comment-alt"></i>
											<span class="badge-text">12</span>
										</div>
									</div>
									<div class="kanban-edit">
										<i class="fa fa-pencil-alt"></i>
									</div>
								</div>
								<div class="kanban-item">
									<a href="#" class="kanban-title">Make a Card</a>
									<div class="kanban-badges">
										<div class="kanban-badge">
											<i class="far fa-comment-alt"></i>
											<span class="badge-text">0</span>
										</div>
									</div>
									<div class="kanban-edit">
										<i class="fa fa-pencil-alt"></i>
									</div>
								</div>
							</main>
						</div>
					</div>				
				</div>
			</div>
		</div>
		<div class="quick-sidebar">
			<a href="#" class="close-quick-sidebar">
				<i class="flaticon-cross"></i>
			</a>
			<div class="quick-sidebar-wrapper">
				<ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
					<li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#messages" role="tab" aria-selected="true">Messages</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tasks" role="tab" aria-selected="false">Tasks</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>
				</ul>
				<div class="tab-content mt-3">
					<div class="tab-chat tab-pane fade show active" id="messages" role="tabpanel">
						<div class="messages-contact">
							<div class="quick-wrapper">
								<div class="quick-scroll scrollbar-outer">
									<div class="quick-content contact-content">
										<span class="category-title mt-0">Contacts</span>
										<div class="avatar-group">
											<div class="avatar">
												<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
											</div>
											<div class="avatar">
												<span class="avatar-title rounded-circle border border-white">+</span>
											</div>
										</div>
										<span class="category-title">Recent</span>
										<div class="contact-list contact-list-recent">
											<div class="user">
												<a href="#">
													<div class="avatar avatar-online">
														<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data">
														<span class="name">Jimmy Denis</span>
														<span class="message">How are you ?</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-offline">
														<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data">
														<span class="name">Chad</span>
														<span class="message">Ok, Thanks !</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-offline">
														<img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data">
														<span class="name">John Doe</span>
														<span class="message">Ready for the meeting today with...</span>
													</div>
												</a>
											</div>
										</div>
										<span class="category-title">Other Contacts</span>
										<div class="contact-list">
											<div class="user">
												<a href="#">
													<div class="avatar avatar-online">
														<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data2">
														<span class="name">Jimmy Denis</span>
														<span class="status">Online</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-offline">
														<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data2">
														<span class="name">Chad</span>
														<span class="status">Active 2h ago</span>
													</div>
												</a>
											</div>
											<div class="user">
												<a href="#">
													<div class="avatar avatar-away">
														<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle border border-white">
													</div>
													<div class="user-data2">
														<span class="name">Talha</span>
														<span class="status">Away</span>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="messages-wrapper">
							<div class="messages-title">
								<div class="user">
									<div class="avatar avatar-offline float-right ml-2">
										<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
									</div>
									<span class="name">Chad</span>
									<span class="last-active">Active 2h ago</span>
								</div>
								<button class="return">
									<i class="flaticon-left-arrow-3"></i>
								</button>
							</div>
							<div class="messages-body messages-scroll scrollbar-outer">
								<div class="message-content-wrapper">
									<div class="message message-in">
										<div class="avatar avatar-sm">
											<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="message-body">
											<div class="message-content">
												<div class="name">Chad</div>
												<div class="content">Hello, Rian</div>
											</div>
											<div class="date">12.31</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-out">
										<div class="message-body">
											<div class="message-content">
												<div class="content">
													Hello, Chad
												</div>
											</div>
											<div class="message-content">
												<div class="content">
													What's up?
												</div>
											</div>
											<div class="date">12.35</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-in">
										<div class="avatar avatar-sm">
											<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="message-body">
											<div class="message-content">
												<div class="name">Chad</div>
												<div class="content">
													Thanks
												</div>
											</div>
											<div class="message-content">
												<div class="content">
													When is the deadline of the project we are working on ?
												</div>
											</div>
											<div class="date">13.00</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-out">
										<div class="message-body">
											<div class="message-content">
												<div class="content">
													The deadline is about 2 months away
												</div>
											</div>
											<div class="date">13.10</div>
										</div>
									</div>
								</div>
								<div class="message-content-wrapper">
									<div class="message message-in">
										<div class="avatar avatar-sm">
											<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle border border-white">
										</div>
										<div class="message-body">
											<div class="message-content">
												<div class="name">Chad</div>
												<div class="content">
													Ok, Thanks !
												</div>
											</div>
											<div class="date">13.15</div>
										</div>
									</div>
								</div>
							</div>
							<div class="messages-form">
								<div class="messages-form-control">
									<input type="text" placeholder="Type here" class="form-control input-pill input-solid message-input">
								</div>
								<div class="messages-form-tool">
									<a href="#" class="attachment">
										<i class="flaticon-file"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="tasks" role="tabpanel">
						<div class="quick-wrapper tasks-wrapper">
							<div class="tasks-scroll scrollbar-outer">
								<div class="tasks-content">
									<span class="category-title mt-0">Today</span>
									<ul class="tasks-list">
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" checked="" class="custom-control-input"><span class="custom-control-label">Planning new project structure</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Create the main structure							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Add new Post</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Finalise the design proposal</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
									</ul>

									<span class="category-title">Tomorrow</span>
									<ul class="tasks-list">
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Initialize the project							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Create the main structure							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span class="custom-control-label">Updates changes to GitHub							</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
										<li>
											<label class="custom-checkbox custom-control checkbox-secondary">
												<input type="checkbox" class="custom-control-input"><span title="This task is too long to be displayed in a normal space!" class="custom-control-label">This task is too long to be displayed in a normal space!				</span>
												<span class="task-action">
													<a href="#" class="link text-danger">
														<i class="flaticon-interface-5"></i>
													</a>
												</span>
											</label>
										</li>
									</ul>

									<div class="mt-3">
										<div class="btn btn-primary btn-rounded btn-sm">
											<span class="btn-label">
												<i class="fa fa-plus"></i>
											</span>
											Add Task
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="settings" role="tabpanel">
						<div class="quick-wrapper settings-wrapper">
							<div class="quick-scroll scrollbar-outer">
								<div class="quick-content settings-content">

									<span class="category-title mt-0">General Settings</span>
									<ul class="settings-list">
										<li>
											<span class="item-label">Enable Notifications</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Signin with social media</span>
											<div class="item-control">
												<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Backup storage</span>
											<div class="item-control">
												<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">SMS Alert</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
									</ul>

									<span class="category-title mt-0">Notifications</span>
									<ul class="settings-list">
										<li>
											<span class="item-label">Email Notifications</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">New Comments</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Chat Messages</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">Project Updates</span>
											<div class="item-control">
												<input type="checkbox" data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
										<li>
											<span class="item-label">New Tasks</span>
											<div class="item-control">
												<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-style="btn-round">
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Sortable-->
	<script src="../assets/js/plugin/sortable/sortable.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo.js"></script>
	<script>
		'use strict';

		// Kanban Board Demo
		// =============================================================

		var boardDemo = {
			init: function init() {

				this.bindUIActions();
			},
			bindUIActions: function bindUIActions() {
				// event handlers
				this.handleBoardStyle();
				this.handleSortable();
			},
			byId: function byId(id) {
				return document.getElementById(id);
			},
			handleBoardStyle: function handleBoardStyle() {
				$(document).on('mouseenter mouseleave', '.kanban-board-header', function (e) {
					var isHover = e.type === 'mouseenter';
					$(this).parent().toggleClass('hover', isHover);
				});
			},
			handleSortable: function handleSortable() {
				var board = this.byId('myKanban');
				// Multi groups
				Sortable.create(board, {
					animation: 150,
					draggable: '.kanban-board',
					handle: '.kanban-board-header',
					filter: '.ignore-sort',
					forceFallback: true
				});[].forEach.call(board.querySelectorAll('.kanban-drag'), function (el) {
					Sortable.create(el, {
						group: 'tasks',
						animation: 150,
						filter: '.ignore-sort',
						forceFallback: true
					});
				});
			}
		};

		boardDemo.init();
	</script>
</body>

<!-- Mirrored from themekita.com/demo-atlantis-bootstrap/livepreview/examples/demo1/boards.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Aug 2021 12:28:09 GMT -->
</html>