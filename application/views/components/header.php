<!DOCTYPE html>
<html lang="zxx">
	

<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" scontent="IE=edge">
		<title>DLI Shop</title>
		
		<meta name="keywords" content="Murah, Kualitas Bagus, Pengiriman Cepat">
		<meta name="description" content="Harga pasti dijamin murah, Kualitas pun dijamin, Pengiriman juga cepat">
		<meta name="author" content="tivatheme">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/Logo/dli-logo.png" type="image/png">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="assets/libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="assets/libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="assets/libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="assets/libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/libs/slider-range/css/jslider.css">
		
		<!-- Template CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/reponsive.css">
</head>
	
<body class="home home-1">
	<div id="all">

	<header id="header">
				<!-- Topbar -->
				<div class="topbar">
					<!-- Close Topbar -->
					<div class="close-topbar">
						<i class="zmdi zmdi-close"></i>
					</div>
					
					<!-- Topbar Content -->
					<div class="container topbar-content">
						<div class="row">
							<!-- Topbar Left -->
							<div class="col-md-7 col-sm-7 col-xs-12">
								<div class="topbar-left d-flex">
									<div class="email">
										<i class="fa fa-envelope" aria-hidden="true"></i>Email: tivatheme@gmail.com
									</div>
								</div>
							</div>
							
							<!-- Topbar Right -->
							<div class="col-md-5 col-sm-5 col-xs-12">
								<div class="topbar-right d-flex justify-content-end">
									<!-- My Account -->
									<div class="dropdown account">
										<div class="dropdown-toggle" data-toggle="dropdown">
											My Account
										</div>
										<div class="dropdown-menu">									
											<div class="item">
												<a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>My Account</a>
											</div>
											<div class="item">
												<a href="<?= base_url('login');?>" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
											</div>
											<div class="item">
												<a href="<?= base_url('register');?>" ><i class="fa fa-user"></i>Register</a>
											</div>
										</div>
									</div>
									

									
								</div>
							</div>
						</div>
					</div>
					
					<!-- Open Topbar -->
					<div class="container active">
						<div id="toggle-topbar"><i class="zmdi zmdi-plus"></i></div>
					</div>
				</div>
				
				<!-- Header Top -->
				<div class="header-top">
					<div class="container">
						<div class="row">
							<!-- Search -->
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="logo">
									<a href="<?= base_url();?>">
										<img class="img-responsive" src="assets/img/Logo/dli-logo.png" alt="Logo">
									</a>
								</div>
								
								<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>

							</div>
							
							<!-- Logo -->
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="form-search">
									<form action="#" method="get">
										<input type="text" class="form-input" placeholder="Search">
										<button type="submit" class="fa fa-search"></button>
									</form>
								</div>
							</div>
							
							<!-- Cart -->
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="block-cart dropdown">
									<div class="cart-title">
										<a href="<?= base_url('cart');?>"><i class="fa fa-shopping-basket"></i></a>
									</div>
									
									
								</div>	
							</div>	
						</div>
					</div>
				</div>
				
				<!-- Main Menu -->
				<div id="main-menu">
					<ul class="menu">
						<li class="dropdown">
							<a href="<?= base_url();?>" title="Homepage">Home</a>
						</li>
						
						<li class="dropdown">
							<a href="<?= base_url('collections');?>" title="Product">Product</a>
							<div class="dropdown-menu">
								<ul>
									<li class="has-image dropdown-submenu">
										<img src="assets/img/product/product-category-1.png" alt="Product Category Image">
										<a href="product-grid-left-sidebar.html" title="Vegetables">Vegetables</a>
										<div class="dropdown-menu level2">
											<ul>
												<li><a href="product-grid-left-sidebar.html" title="Product Grid - Left Sidebar">Product Grid - Left Sidebar</a></li>
												<li><a href="product-grid-right-sidebar.html" title="Product Grid - Right Sidebar">Product Grid - Right Sidebar</a></li>
												<li><a href="product-grid-full-width.html" title="Product Grid - Full Width">Product Grid - Full Width</a></li>
												<li><a href="product-list-left-sidebar.html" title="Product List - Left Sidebar">Product List - Left Sidebar</a></li>
											</ul>
										</div>
									</li>
									<li class="has-image">
										<img src="assets/img/product/product-category-2.png" alt="Product Category Image">
										<a href="product-grid-left-sidebar.html" title="Fruits">Fruits</a>
									</li>
									<li class="has-image">
										<img src="assets/img/product/product-category-3.png" alt="Product Category Image">
										<a href="product-grid-left-sidebar.html" title="Bread">Bread</a>
									</li>
									<li class="has-image">
										<img src="assets/img/product/product-category-4.png" alt="Product Category Image">
										<a href="product-grid-left-sidebar.html" title="Juices">Juices</a>
									</li>
									<li class="has-image">
										<img src="assets/img/product/product-category-5.png" alt="Product Category Image">
										<a href="product-grid-left-sidebar.html" title="Tea and coffee">Tea and coffee</a>
									</li>
								</ul>
							</div>
						</li>
						
						
						<li>
							<a href="page-about-us.html">About Us</a>
						</li>
						
						<li>
							<a href="page-contact.html">Contact</a>
						</li>
					</ul>
				</div>
		</header>