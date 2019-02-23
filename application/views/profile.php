<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="Dreacot">
	<title>GameTrade.ng | Account</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="/assets/css/infinite-slider.css" rel="stylesheet">
	<link href='/assets/fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
	<link href="/assets/css/style.css" rel="stylesheet">
	<link href="/assets/css/animate.css" rel="stylesheet">
	<link href="/assets/css/w3.css" rel="stylesheet">
	<link href="/assets/css/hover-min.css" rel="stylesheet">
</head>

<body>
	<!-- <preloader> -->
	<div id="preloader">
		<div class="spinner spinner-round"></div>
	</div>
<!-- site header-->
<?php if (!isset($_SESSION['user'])){ ?>
	<header class="site-header">
		<!-- <main class="site-main"> -->
		<div>
			<nav class="navbar navbar-default" id="title">
				<div class="container">
					<div class="navbar-header">
						<div class="container">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse, #bs-navbar-collapse1">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="index" class="navbar-brand brand-logo" style="height:70px; width:252px;">
								<img style="width:100%; height:100%;" src="/assets/img/logo.png" srcset="/assets/img/logo2.png 2x, img/logo3.png 3x"
								 alt="Post" width="100%" height="100%">
							</a>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="bs-navbar-collapse1" style="float: left">
						<ul class="nav navbar-nav main-navbar-nav">
							<li><a href="#xwhishlist" class="fa fa-heart-o" onclick="toggle_visibility('myWishlist');"> Wishlist</a></li>
							<div class="wishlist-popup" id="myWishlist">
								<form action="/action_page.php" class="wishlist-container">
									<ul class="header-cart-wrapitem">
										<li class="header-cart-item">
											<div class="header-cart-item-img">
												<img src="/assets/img/wishlist/item-01.jpg" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<a href="#" class="header-cart-item-name">
													Grand Theft Auto V
												</a>
												<span class="header-cart-item-info">
													₦5,600.00
												</span>
											</div>
										</li>
										<hr>
										<li class="header-cart-item">
											<div class="header-cart-item-img">
												<img src="/assets/img/wishlist/item-01.jpg" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<a href="#" class="header-cart-item-name">
													The Last of Us
												</a>
												<span class="header-cart-item-info">
													₦5,600.00
												</span>
											</div>
										</li>
									</ul>
								</form>
							</div>
							<li><a href="#xsearch" class="fa fa-search" onclick="toggle_visibility('mySearch');"> Search</a></li>
							<div class="search-popup" id="mySearch">
								<form action="/action_page.php" class="search-container">
									<input type="search" placeholder="Search..." name="search">
									<div class="close-icon fa fa-times-thin" onclick="toggle_visibility('mySearch');"></div>
								</form>
							</div>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
					<a href="index" class="topnav-centered navbar-brand ">
						<img src="/assets/img/logo.png" srcset="/assets/img/logo2.png 2x, img/logo3.png 3x" alt="Post">
					</a>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-navbar-collapse">
						<ul class="nav navbar-nav main-navbar-nav">
							<li><a href="#xcart" class=" fa fa-cart-plus" onclick="toggle_visibility('myCart');"> Cart</a></li>
							<span class="header-icons-noti-top">5</span>
							<div class="form-popup" id="myCart">
								<form action="/action_page.php" class="form-container">
									<ul class="header-cart-wrapitem">
										<li class="header-cart-item">
											<div class="header-cart-item-img">
												<img src="/assets/img/cart/item-01.jpg" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<a href="#" class="header-cart-item-name">
													Ghost Recon: Advanced Warfighter
												</a>
												<span class="header-cart-item-info">
													1 x ₦5,600.00
												</span>
											</div>
										</li>
										<hr>
										<li class="header-cart-item">
											<div class="header-cart-item-img">
												<img src="/assets/img/cart/item-01.jpg" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<a href="#" class="header-cart-item-name">
													Detriot has fallen
												</a>
												<span class="header-cart-item-info">
													1 x ₦15,600.00
												</span>
											</div>
										</li>
									</ul>
									<div class="header-cart-total">
										Total: ₦34,400.00
									</div>
									<div class="header-cart-buttons">
										<div class="header-cart-wrapbtn">
											<!-- Button -->
											<a href="#xcart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
												View Cart
											</a>
										</div>
										<div class="header-cart-wrapbtn">
											<!-- Button -->
											<a href="#xcheckout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
												CheckOut
											</a>
										</div>
									</div>
								</form>
							</div>
							<!-- <account Dropdown> -->
							<li><a href="#xaccount" class=" fa fa-user-o" onclick="toggle_visibility('myForm');">Login</a></li>
							<!-- <Form housing login and signup dropdown> -->
							<div class=" form-popup" id="myForm">
								<!-- <login Dropdown> -->
								<div id="defaultOpen1" class="">
									<form action="/exchange/process_login" method="post" class="form-container">
										<h1 style="font-size: 14px; text-align: center">Login</h1>
										<label for="email"><b>Email</b></label>
										<input type="text" placeholder="Enter Email" name="email" required>
										<label for="psw"><b>Password</b></label>
										<input type="password" placeholder="Enter Password" name="password" required>
										<div style="padding-bottom:20px; margin-top: -20px; font-size: 12px;  ">
											<input type="checkbox" name="psw" style="float: left;">
											<label for="checkbox"><b style="float: left;">Remember me
												</b></label>
											<a class="brown" href="#xforgot" style="float: right" onclick="toggle_visibility('myReset');toggle_visibility('myForm');">Forgot
												Password?</a>
										</div>
										<button type="submit" class="btn">Login</button>
										<div class="text-center">
											<p>Need an account? <a href="#x" class="brown" data-toggle="modal" data-target="#myModal">Sign up here</a></p>
										</div>
									</form>
								</div>
							</div>
							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title text-center">Sign Up</h4>
										</div>
										<div class="modal-body ">
											<form action="/exchange/process_register" class="signup-form-container">
												<div class="form-group ">
													<label for="firstname"><b>First Name</b></label>
													<input type="text" placeholder="Enter First Name" name="firstname" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="lastname"><b>Last Name</b></label>
													<input type="text" placeholder="Enter Last Name" name="lastname" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="email"><b>Email</b></label>
													<input type="text" placeholder="Enter Email" name="email" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="phonenumber"><b>Phone Number</b></label>
													<input type="tel" placeholder="Enter Phone Number" name="phonenumber" minlength="11" maxlength="11"
													 required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="password"><b>Password</b></label>
													<input type="password" placeholder="Enter Password" name="password" minlength="8" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="confirm_password"><b>Confirm Password</b></label>
													<input type="password" placeholder="Confirm Password" name="confirm_password" minlength="8" required>
													<span class="help-block"></span>
												</div>
												<p class="">
													<input type="checkbox" placeholder="Confirm Password" name="psw" required>
													I have read and accepted the <a class="brown" href="#xterms">terms and conditions</a>
												</p>
												<button type="submit" class="btn">Sign Up</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- <password Dropdown> -->
							<div class="form-popup" id="myReset">
								<form action="/action_page.php" class="form-container">
									<h1 style="font-size: 14px; text-align: center">Reset Password</h1>
									<label for="email"><b>Email</b></label>
									<input type="text" placeholder="Enter Email" name="email" required>
									<button type="submit" class="btn">Reset Password</button>
									<div style=" text-align: center">
										<a class="brown" href="#xforgot" onclick="toggle_visibility('myReset');toggle_visibility('myForm');">Login</a>
									</div>
								</form>
							</div>
							<!-- /.navbar-collapse -->
							<!-- END MAIN NAVIGATION -->
					</div>
			</nav>
	</header>
	<?php } else { ?>

	<header class="site-header">
		<div>
			<nav class="navbar navbar-default" id="title">
				<div class="container">
					<div class="navbar-header">
						<div class="container">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse, #bs-navbar-collapse1">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="index" class="navbar-brand brand-logo">
								<img src="/assets/img/logo.png" srcset="/assets/img/logo2.png 2x, img/logo3.png 3x" alt="Post" width="100%"
								 height="100%">
							</a>
						</div>
					</div>
					<a href="index" class=" navbar-brand ">
						<img src="/assets/img/logo.png" srcset="/assets/img/logo2.png 2x, img/logo3.png 3x" alt="Post">
					</a>

					<!-- the search container -->
					<div class="search-container col-md-6">
						<form class="search" action="/action_page.php">
							<input class="" type="text" placeholder="SEARCH ANY GAME..." name="search">
							<button type="submit" class="bold"><i class=""></i>SEARCH</button>
						</form>
					</div>
					<div class="collapse navbar-collapse" id="bs-navbar-collapse">

						<ul class="nav navbar-nav main-navbar-nav">
							<li><a href="#xcart" class=" fa fa-cart-plus" onclick="toggle_visibility('myCart');"> Cart</a></li>
							<span class="header-icons-noti-top-aft">5</span>
							<div class="form-popup" id="myCart">
								<form action="/action_page.php" class="form-container">
									<ul class="header-cart-wrapitem">
										<li class="header-cart-item">
											<div class="header-cart-item-img">
												<img src="/assets/img/cart/item-01.jpg" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<a href="#" class="header-cart-item-name">
													Ghost Recon: Advanced Warfighter
												</a>
												<span class="header-cart-item-info">
													1 x ₦5,600.00
												</span>
											</div>
										</li>
										<hr>
										<li class="header-cart-item">
											<div class="header-cart-item-img">
												<img src="/assets/img/cart/item-01.jpg" alt="IMG">
											</div>
											<div class="header-cart-item-txt">
												<a href="#" class="header-cart-item-name">
													Detriot has fallen
												</a>
												<span class="header-cart-item-info">
													1 x ₦15,600.00
												</span>
											</div>
										</li>
									</ul>
									<div class="header-cart-total">
										Total: ₦34,400.00
									</div>
									<div class="header-cart-buttons">
										<div class="header-cart-wrapbtn">
											<!-- Button -->
											<a href="cart" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
												View Cart
											</a>
										</div>
										<div class="header-cart-wrapbtn">
											<!-- Button -->
											<a href="checkout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
												Checkout
											</a>
										</div>
									</div>
								</form>
							</div>

							<li><a href="#xcart" class=" fa fa-bell" onclick="toggle_visibility('myNotification');"></a></li>
							<!-- /.navbar-collapse -->
							<span class="header-icons-noti-noti">1</span>
							<div class="notification-popup" id="myNotification">
								<div class="form-container">
									<div class="w-300 text-center">
										<span class="fa fa-bell fa-5x"></span><br>
										<span>No notification</span>
									</div>

								</div>
							</div>


							<li><a href="#xaccount" class=" fa fa-user-o" onclick="toggle_visibility('myForm');"> Hi,
									<b>
										<?php if (isset($_SESSION['user'])){ echo $_SESSION['firstname']; } else {echo "Login"; }?></b> <i class="fa fa-caret-down"></i></a></li>
							<div class=" form-popup" id="myForm">
								<div id="defaultOpen1" class="">
									<div class="form-container border">
										<div>
											<a href="account">
												<p class="header-dropdown"><i class="fa fa-user"></i> My Profile</p>
											</a>
											<a href="orders">
												<p class="header-dropdown"><i class="fa fa-shopping-bag"></i> My Orders</p>
											</a>
											<a href="wishlist">
												<p class="header-dropdown"><i class="fa fa-heart"></i> My Wishlist</p>
											</a>
											<a href="#xwallet">
												<p class="header-dropdown"><i class="fa fa-credit-card"></i> My Wallet</p>
											</a>
											<a href="#x">
												<p class="header-dropdown"><i class="fa fa-map-marker"></i> Track My Order</p>
											</a>
											<p class=header-dropdown><i class="fa fa-moon-o"></i>
												Night Mode <label class="switch">
													<input type="checkbox">
													<span class="slider round"></span>
												</label>
											</p>

											<a href="#xlogout">
												<p class="header-dropdown logout"><i class="fa fa-sign-out"></i> Logout</p>
											</a>
										</div>

									</div>
								</div>
							</div>
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title text-center">Sign Up</h4>
										</div>
										<div class="modal-body ">
											<form action="/exchange/process_register" class="signup-form-container">
												<div class="form-group ">
													<label for="firstname"><b>First Name</b></label>
													<input type="text" placeholder="Enter First Name" name="firstname" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="lastname"><b>Last Name</b></label>
													<input type="text" placeholder="Enter Last Name" name="lastname" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="email"><b>Email</b></label>
													<input type="text" placeholder="Enter Email" name="email" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="phonenumber"><b>Phone Number</b></label>
													<input type="tel" placeholder="Enter Phone Number" name="phonenumber" minlength="11" maxlength="11"
													 required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="password"><b>Password</b></label>
													<input type="password" placeholder="Enter Password" name="password" minlength="8" required>
													<span class="help-block"></span>
												</div>
												<div class="form-group ">
													<label for="confirm_password"><b>Confirm Password</b></label>
													<input type="password" placeholder="Confirm Password" name="confirm_password" minlength="8" required>
													<span class="help-block"></span>
												</div>
												<p class="">
													<input type="checkbox" placeholder="Confirm Password" name="psw" required>
													I have read and accepted the <a class="brown" href="#xterms">terms and conditions</a>
												</p>
												<button type="submit" class="btn">Sign Up</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="form-popup" id="myReset">
								<form action="/action_page.php" class="form-container">
									<h1 style="font-size: 14px; text-align: center">Reset Password</h1>
									<label for="email"><b>Email</b></label>
									<input type="text" placeholder="Enter Email" name="email" required>
									<button type="submit" class="btn">Reset Password</button>
									<div style=" text-align: center">
										<a class="brown" href="#xforgot" onclick="toggle_visibility('myReset');toggle_visibility('myForm');">Login</a>
									</div>
								</form>
								</form>
							</div>
					</div>
				</div>
			</nav>
	</header>

   <?php } ?>
	<!------------------------------>
				<main class="site-main">
					<section class="container-fluid" style="background-color:lightgrey; padding-bottom: 100px; padding-top: 50px;">

						<div class="container-fluid">
							<div class="col-md-2 rd-2 white float-left">

								<div>
									<h3><i class="fa fa-user fa-2x"></i> My Profile</h3>
									<a href="account" class="active f12px">Account Information</a><br>
									<a href="deliveryaddress" class="f12px">Delivery Address</a>
								</div>

								<hr>

								<div>
									<h3><i class="fa fa-shopping-bag fa-2x"></i> My Orders</h3>
									<div>
										<a href="orders" class="f12px">Orders</a><br>
										<a href="#x" class="f12px">Reviews & Ratings</a><br>
										<a href="wishlist" class="f12px">Wishlist</a>
									</div>
								</div>

								<hr>

								<div>
									<h3><i class="fa fa-credit-card fa-2x"></i> My Wallet</h3>
									<a href="#x" class="f12px">Wallet</a>
								</div>

								<hr>

								<div class="pb-20">
									<h3><i class="fa fa-gift fa-2x"></i> Promotions</h3>
									<a href="#x" class="f12px">Newsletter</a><br>
									<a href="coupons" class="f12px">Coupons</a>
								</div>


							</div>

							<div class="container col-md-9 rd-2 white float-right">
								<div class="container col-md-12 bb">
									<h2 class="brown bold">Account Information</h2>
								</div>

								<div>
									<div class="col-md-12 mt-20">
										<div class="col-md-6 input-box">
											<h6 class="bold f10px">First Name</h6>
											<input type="text" name="email" id="newsletter" value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['firstname']; }?>"
											 required>
										</div>

										<div class="col-md-6 input-box">
											<h6 class="bold f10px">Last Name</h6>
											<input type="text" name="email" id="newsletter" value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['lastname']; }?>"
											 required>
										</div>
									</div>

									<div class="col-md-12">
										<div class="col-md-6 input-box">
											<h6 class="bold f10px">Phone Number</h6>
											<input type="tel" name="email" id="newsletter" minlength="11" maxlength="11" value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['phonenumber']; }?>"
											 required>
										</div>

										<div class="col-md-6 input-box">
											<h6 class="bold f10px">Gender</h6>
											<select id="gender" name="gender" value="">
												<option value="">Select </option>
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>

									<div class="col-md-12">
										<div class="col-md-6 input-box">
											<h6 class="bold f10px">Email</h6>
											<input type="text" name="email" id="newsletter" value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['email']; }?>"
											 readonly>
										</div>

										<div class="col-md-6 input-box">
											<h6 class="bold f10px">Current Password</h6>
											<input type="password" name="email" id="newsletter" minlength="8" placeholder="" required>
										</div>
									</div>

									<div class="col-md-12">
										<div class="col-md-6 input-box">
											<h6 class="bold f10px">New Password</h6>
											<input type="password" name="email" id="newsletter" minlength="8" placeholder="" required>
										</div>

										<div class="col-md-6 input-box">
											<h6 class="bold f10px">Confirm Password</h6>
											<input type="password" name="email" id="newsletter" minlength="8" placeholder="" required>
										</div>
									</div>

									<div class="col-md-3 mr-15 mt-30 mb-100 float-right">
										<button type="submit" title="Subscribe" class="button">
											<span><span>Save</span></span></button>
									</div>

								</div>
							</div>
						</div>
					</section>

				</main>
				<!-- <site footer> -->
				<footer class="site-footer">
					<div class="container text-center smtx">
						<!-- Allow the contact us be at the foremost left hand side-->
						<div class="col-sm-12">
							<div class="hvr-grow col-sm-4  whbx">
								<span class="fa fa-motorcycle"> </span>
								<h4> SAME DAY DELIVERY</h4>
							</div>
							<div class="hvr-grow col-sm-4  whbx">
								<span class="fa fa-rotate-left"> </span>
								<h4> 7 DAYS RETURN</h4>
							</div>
							<div class="hvr-grow col-sm-4  whbx">
								<span class="fa fa-money"> </span>
								<h4> CASH ON DELIVERY</h4>
							</div>
						</div>
					</div>
					<div class="container " style=" background-color: #555">
						<div class="row second">
							<!-- Allow the contact us be at the foremost left hand side-->
							<div class="col-md-3 col-sm-6 col-xs-12 fbox">
								<h4>GET IN TOUCH</h4>
								<p><a href="#x"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> KM 10, Idiroko Road</a></p>
								<p><a href="tel:+2348159827634"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +234 815
										9827 634</a></p>
								<p><a href="mailto:info@gameexchange.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
										support@gameexchange.com</a></p>
								<p>
									<a href="#x" class="pad fa fa-facebook"></a>
									<a href="#x" class="pad fa fa-instagram"></a>
									<a href="#x" class="pad fa fa-twitter"></a>
								</p>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 fbox">
								<h4>COMPANY</h4>
								<p><a href="aboutus.php"> About Us</a></p>
								<p><a href="#x">How it Works</a></p>
								<p><a href="#x">Our Services</a></p>
								<p><a href="contact.php"> Contact Us</a></p>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 fbox">
								<h4>HELP</h4>
								<p><a href="faq.php"> FAQs</a></p>
								<p><a href="track-order.php"> Track Order</a></p>
								<p><a href="#xreturn"> Returns</a></p>
								<p><a href="#xdelivery"> Tickets</a></p>
								<p><a href="exchange/signupmerchant" target="_blank" class="merchant"> Become a Merchant <i class="fa fa-external-link"></i></a></p>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 fbox">
								<h4>JOIN OUR NEWSLETTER</h4>
								<div class="block-footer block-5">
									<div class=" block-subscribe">
										<div class="block-content">
											<form action="https://www.gameexchange.com/index.php/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
												<div class="newsletter-content">
													<div class="form-subscribe-header">
														<p>Receive coupons, exclusive offers, discounts and more from us.</p>
													</div>
													<div class="news-content-inner">
														<div class="input-box">
															<input type="text" name="email" id="newsletter" title="Sign up for our newsletter" placeholder="Enter Email"
															 required>
														</div>
														<div class="actions">
															<button type="submit" title="Subscribe" class="button">
																<span><span>Subscribe</span></span></button>
														</div>
													</div>
												</div>
											</form>
										</div>
										<script type="text/javascript">
											//<![CDATA[
											var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
											//]]>

										</script>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="copyright">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<span>
										<p class="pull-left">&copy;
											<?php echo date("Y") ?> GAMETRADE ALL RIGHTS RESERVED |</p>
										<a href="#x">
											<p>&nbsp Privacy Policy |
												<p>
										</a>
										<a href="#x">
											<p>&nbsp Terms of Service <p>
										</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</footer>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<script src="/assets/js/custom.js"></script>
				<script src="/assets/js/carousel.js"></script>
				<script src="/assets/js/preloader.js"></script>
				<script src="/assets/js/jquery.easing.min.js"></script>
				<script>
					$(document).ready(function () {
						$("body").mouseup(function (e) {
							var subject = $("#myReset");

							if (e.target.id !== subject.attr('id') && !subject.has(e.target).length) {
								subject.fadeOut();
							}

						});
					});

				</script>
			</body>

</html>
