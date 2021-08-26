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

<body class="home home-4">
		<div id="all">
			<!-- Header -->
			<header id="header">
				<div class="container">
					<div class="header-top">
						<div class="row align-items-center">
							<!-- Header Left -->
							<div class="col-lg-5 col-md-5 col-sm-12">
								<!-- Main Menu -->
								<div id="main-menu">
									<ul class="menu">
										<li class="dropdown">
											<a href="<?= base_url();?>" title="Homepage">Home</a>
										</li>
										
										<li class="dropdown">
											<a href="" title="Product">Product</a>
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
													<li class="has-image rounded">
														<img src="assets/img/product/moocs.png" alt="Product Category Image">
														<a href="<?= base_url('details');?>" title="Smart MOOCS">Smart MOOCS</a>
													</li>
													<li class="has-image">
														<img src="assets/img/product/idbookstore.png" alt="Product Category Image">
														<a href="<?= base_url('details');?>" title="idbookstore">Idbookstore</a>
													</li>
													<li class="has-image">
														<img src="assets/img/product/koolinera.png" alt="Product Category Image">
														<a href="<?= base_url('details');?>" title="koolinera">Koolinera</a>
													</li>
													<li class="has-image">
														<img src="assets/img/product/Craftivity.png" alt="Product Category Image">
														<a href="<?= base_url('details');?>" title="Craftivity">Craftivity</a>
													</li>
													<li class="has-image">
														<img src="assets/img/product/vistalks.png" alt="Product Category Image">
														<a href="<?= base_url('details');?>" title="vistalks">Vistalks</a>
													</li>
													<li class="has-image">
														<img src="assets/img/product/muse.png" alt="Product Category Image">
														<a href="<?= base_url('details');?>" title="muse">Muse Akademi</a>
													</li>
													<li class="has-image">
														<img src="assets/img/product/medisain.png" alt="Product Category Image">
														<a href="<?= base_url('details');?>" title="medisain">Medisain</a>
													</li>
													<li class="has-image">
														<img src="assets/img/product/sensitif.png" alt="Product Category Image">
														<a href="<?= base_url('details');?>" title="sensitif">Sensitif</a>
													</li>
												</ul>
											</div>
										</li>									
										
										<li class="dropdown">
											<a href="">Blog</a>

										</li>
										
										<li>
											<a href="">About Us</a>
										</li>
										
										<li>
											<a href="">Contact</a>
										</li>
									</ul>
								</div>
							</div>
							
							<!-- Header Center -->
							<div class="col-lg-2 col-md-2 col-sm-12 header-center justify-content-center">
								<!-- Logo -->		
								<div class="logo">
									<a href="<?= base_url() ?>">
										<img class="img-responsive" src="assets/img/Logo/dli-logo.png" alt="Logo">
									</a>
								</div>
								
								<span id="toggle-mobile-menu"><i class="zmdi zmdi-menu"></i></span>
							</div>
							
							
							<!-- Header Right -->
							<div class="col-lg-5 col-md-5 col-sm-12 header-right d-flex justify-content-end align-items-center">
								<!-- Search -->							
								<div class="form-search">
									<form action="#" method="get">
										<input type="text" class="form-input" placeholder="Search">
										<button type="submit" class="fa fa-search"></button>
									</form>
								</div>
								
								<!-- Cart -->
								<div class="block-cart dropdown">
									<a href="<?= base_url('cart') ?>">
										<div class="cart-title">
											<i class="fa fa-shopping-basket" aria-hidden="true"></i>
										</div>
									</a>
								</div>
								
								
								<!-- My Account -->
								<div class="my-account dropdown toggle-icon">
									<div class="dropdown-toggle" data-toggle="dropdown">
										<i class="zmdi zmdi-menu"></i>
									</div>
									<div class="dropdown-menu">										
										<div class="item">
											<a href="#" title="Log in to your customer account"><i class="fa fa-cog"></i>My Account</a>
										</div>
										<div class="item">
											<a href="<?= base_url('login') ?>" title="Log in to your customer account"><i class="fa fa-sign-in"></i>Login</a>
										</div>
										<div class="item">
											<a href="<?= base_url('register') ?>" title="Register Account"><i class="fa fa-user"></i>Register</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</header>