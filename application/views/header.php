<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="all,follow">
		<!-- Bootstrap CSS-->
		<link rel="stylesheet" href="<?php echo base_url('/public/vendor/bootstrap/css/bootstrap.min.css'); ?>">
		<!-- Font Awesome CSS-->
		<link rel="stylesheet" href="<?php echo base_url('/public/vendor/font-awesome/css/font-awesome.min.css'); ?>">
		<!-- Fontastic Custom icon font-->
		<link rel="stylesheet" href="<?php echo base_url('/public/css/fontastic.css'); ?>">
		<!-- Google fonts - Poppins -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
		<!-- theme stylesheet-->
		<link rel="stylesheet" href="<?php echo base_url('/public/css/style.default.css'); ?>" id="theme-stylesheet">
		<link rel="stylesheet" href="<?php echo base_url('/public/vendor/bs-steppe/bs-stepper.min.css'); ?>">
		<!-- Custom stylesheet - for your changes-->
		<link rel="stylesheet" href="<?php echo base_url('/public/css/custom.css'); ?>">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?php echo base_url('/public/img/favicon.ico'); ?>">
		<script src="<?php echo base_url('/public/vendor/jquery/jquery.min.js'); ?>"></script>
	</head>
	<body>
		<div class="page">
			<!-- Main Navbar-->
			<header class="header">
				<nav class="navbar">
					<div class="container-fluid">
						<div class="navbar-holder d-flex align-items-center justify-content-between">
							<!-- Navbar Header-->
							<div class="navbar-header">
								<!-- Navbar Brand --><a href="<?php echo site_url('/'); ?>"
														class="navbar-brand d-none d-sm-inline-block">
									<div class="brand-text d-none d-lg-inline-block">
										<span> </span><strong>新农科建设绩效评价系统</strong></div>
									<div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>
								</a>
								<!-- Toggle Button--><a id="toggle-btn" href="#"
														class="menu-btn active"><span></span><span></span><span></span></a>
							</div>
							<!-- Navbar Menu -->
							<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
								<li class="nav-item"><a href="<?php echo site_url('/logout'); ?>"
														class="nav-link logout"> <span
											class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</header>
			<div class="page-content d-flex align-items-stretch">
				<!-- Side Navbar -->
				
