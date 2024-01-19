<?php
include '../connection.php'; 
include '../admin_session.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Kider-Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />


	<meta name="author" content="Codedthemes" />

	<!-- Favicon icon -->
	 <link href="assets/images/crop.jpg" rel="farmer">	<!-- fontawesome icon -->
	<link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
	<!-- animation css -->
	<link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menupos-fixed menu-light brand-orange ">
		<div class="navbar-wrapper ">
			<div class="navbar-brand header-logo" style="background-color: #f37105">
				<a href="../index.php" class="text-white">Kider-Admin
				</a>
				<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			</div>
			<div class="navbar-content scroll-div">
				<ul class="nav pcoded-inner-navbar">
					<li class="nav-item pcoded-menu-caption">
						<label>Dashboard</label>
					</li>
					<li class="nav-item">
						<a href="index.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					
					
					<li class="nav-item pcoded-menu-caption">
						<label>website</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="classes.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Add Content</span></a>
						<ul class="pcoded-submenu">
                                
                          
                            <li><a href="about.php">About</a></li>
                            <li><a href="classes.php">Classes</a></li>
                            <li><a href="question.php">Questions</a></li>
                            <li><a href="user.php">User</a></li>
                            <li><a href="testimonial.php">Testimony</a></li>
                            <li><a href="appointment.php">Appointment</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->

	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
			<a href="index.html" class="b-brand">
				<img src="assets/images/logo.svg" alt="" class="logo images">
				<img src="assets/images/logo-icon.svg" alt="" class="logo-thumb images">
			</a>
		</div>
		<a class="mobile-menu" id="mobile-header" href="#!">
			<i class="feather icon-more-horizontal"></i>
		</a>
		<div class="collapse navbar-collapse">
			<a href="#!" class="mob-toggler"></a>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<div class="main-search open">
						<div class="input-group">
							<input type="text" id="m-search" class="form-control" placeholder="Search . . .">
							<a href="#!" class="input-group-append search-close">
								<i class="feather icon-x input-group-text"></i>
							</a>
							<span class="input-group-append search-btn btn btn-primary">
								<i class="feather icon-search input-group-text"></i>
							</span>
						</div>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon feather icon-settings"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<span><?php echo $admin_username ?></span>
								<a href="signout.php" class="dud-logout" title="Logout">
									<i class="feather icon-log-out"></i>
								</a>
							</div>
							<ul class="pro-body">
								<li><a href="signout.php" class="dropdown-item"><i class="feather icon-lock"></i> Logout</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</header>
	<!-- [ Header ] end -->