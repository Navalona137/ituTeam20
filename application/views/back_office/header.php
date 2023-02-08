<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shop &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css'); ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/flexslider.css'); ?>">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css'); ?>">

    <!-- FontAwesome-5  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/all.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/all.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/fontawesome.min.css'; ?>">
	<link rel="stylesheet" id="css-main" href="<?php echo base_url().'assets/css/codebase.min.css'?>">


	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo site_url('assets/js/modernizr-2.6.2.min.js'); ?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>
		.nav-bar {
			background-color: #d1c286;
		}
	</style>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav nav-bar" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.php">Switch.</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="<?php echo base_url('welcome/home'); ?>" class="white">Home</a>
							<ul class="dropdown">
								<li><a href="single.html">Item List</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url('cpersonne/userList'); ?>">User</a></li>
                        <li><a href="<?php echo base_url('cobjet/allItem'); ?>">Category</a></li>
						<li><a href="<?php echo base_url('cechange/exchangeList'); ?>">Exchange</a></li>
                        <li class="has-dropdown">
							<a href="services.html">Setting</a>
							<ul class="dropdown nav-menu">
								<li><a href="<?php echo base_url('welcome/admin'); ?>">Admin</a></li>
								<li><a href="#">Create User</a></li>
								<li><a href="#">Change User</a></li>
								<li><a href="#">Exit</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					
						<ul>
							<li class="search">
								<div class="input-group">
								<input type="text" placeholder="Search.." style="border-radius: 5px;">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
								</span>
								</div>
							</li>
							<li class="shopping-cart"><a href="#" class="cart"><span><small style="background-color: unset;color: grey;">Admin</small><i class="fa fa-user-circle" style="font-size: 1.4em;"></i></span></a></li>
						</ul>
					
				</div>
			</div>
			
		</div>
	</nav>