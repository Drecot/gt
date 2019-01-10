<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="Dreacot">
	<title>GameTrade.ng | Home</title>
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
			<!-- <Carousel> -->
			<div class="">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="/assets/img/hero1.jpg" alt="Los Angeles" style="width:100%; ">
							<div class="centered1">IT'S IN THE GAME</div>
						</div>
						<div class="item">
							<img src="/assets/img/hero2.jpg" alt="Chicago" style="width:100%;">
							<div class="centered1">IT'S IN THE GAME</div>
						</div>
						<div class="item">
							<img src="/assets/img/hero3.jpg" alt="New york" style="width:100%;">
							<div class="centered1">IT'S IN THE GAME</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
					<a href="index" class="topnav-centered navbar-brand ">
						<img src="/assets/img/logo.png" srcset="/assets/img/logo2.png 2x, img/logo3.png 3x" alt="Post">
					</a>
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
			<!-- <Carousel> -->
			<div class="">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="/assets/img/hero1.jpg" alt="Los Angeles" style="width:100%; ">
							<div class="centered1">IT'S IN THE GAME</div>
						</div>
						<div class="item">
							<img src="/assets/img/hero2.jpg" alt="Chicago" style="width:100%;">
							<div class="centered1">IT'S IN THE GAME</div>
						</div>
						<div class="item">
							<img src="/assets/img/hero3.jpg" alt="New york" style="width:100%;">
							<div class="centered1">IT'S IN THE GAME</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php } ?>

	<!-- <main body of the site> -->
	<section style=" background: #fbfbfb;">
		<div class="col-md-12 text-center bold" style="background-color:#333; color:white; padding:35px">
			<h1 class="">₦ 1,086,592 </h1><span>RAISED FOR CHARITY</span>
		</div>
	
	<div>
			<div class="col-md-12 test-outer">


				<div class="col-md-4 test-box pointer">
					<img src=/assets/img/ps3.jpg> 
				</div> 
				<div class="col-md-4 test-box pointer">
					<img
					 src=/assets/img/ps4.jpg> 
				</div> 
				<div class="col-md-4 test-box pointer">
					<img src=/assets/img/xboxone.jpg>
				 </div> 
				</div>
					 </div> 
					 <div class="col-md-12 test-outer">


					<div class="col-md-4 test-box pointer"><img src=/assets/img/xbox360.jpg> </div> <div class="col-md-4 test-box pointer"><img
						 src=/assets/img/switch.jpg> </div> <div class="col-md-4 test-box pointer"><img src=/assets/img/wii.jpg> </div> </div>
						 </div> </div>
						 
						 
						 
						 <div class="p-relative pointer text-center">
						<img src="/assets/img/deals.jpg" alt="Los Angeles" width="100%" height="100%">
						<div class="centered">
							<h1>DEALS</h1>
							<p>"Checkout our all new deals and exclusive offers"</p>
						</div>

					</div>

					<div class="container-fluid mt-30 pb-30">

						<h1 class="black text-center pb-30 bold">NEWLY ADDED</h1>
						<div class="container-fluid">
							<div class="container-fluid">
								<div class="container-fluid">
									<div class="container-fluid">
										<div class="container-fluid">
											<div class="container-fluid">
												<div class="container-fluid">


													<div class="col-md-2 new sports nba2k19 recent">
														<div class="game-box">
															<div class="game-picture">
																<img src="/assets/img/ps4/2K19.jpg" alt="Fifa 19" width="100%" height="100%">
															</div>
															<div class="game-name">
																<i class="fa fa-heart-o pointer" title="Add to wishlist"></i>
																<p>NBA 2K19</p>
															</div>
															<div class=" game-info" style="width: 100%;">
																<div class="" style=" float: right">
																	<p class=" notice">₦17,999</p>
																</div>
																<div class="add" style=" float: left">
																	<button class="game-button btn"><i></i></button>
																</div>
															</div>
														</div>
													</div>

													<div class="col-md-2 new sports racing need-for-speed-payback recent">
														<div class=" game-box">
															<div class="game-picture">
																<img src="/assets/img/xbox1/nfsplayback.jpg" alt="Need For Speed" width="100%" height="100%">
															</div>
															<div class="game-name">
																<i class="fa fa-heart-o pointer" title="Add to wishlist"></i>
																<p>NEED FOR SPEED: PAYBACK</p>
															</div>
															<div class=" game-info" style="width: 100%;">
																<div class="" style=" float: right">
																	<p class=" notice">₦21,499</p>
																</div>
																<div class="add" style=" float: left">
																	<button class="game-button btn"><i class=""></i></button>
																</div>
															</div>
														</div>
													</div>

													<div class="col-md-2 used action ghost-recon old">
														<div class="  game-box">
															<div class="game-picture">
																<img src="/assets/img/ps4/ghst.jpg" alt="Fifa 19" width="100%" height="100%">
															</div>
															<div class="game-name">
																<i class="fa fa-heart-o pointer" title="Add to wishlist"></i>
																<p>GHOST RECON: WILDLANDS</p>
															</div>
															<div class=" game-info" style="width: 100%;">
																<div class="" style=" float: right">
																	<p class=" notice">₦7,499</p>
																</div>
																<div class="add" style=" float: left">
																	<button class="game-button btn"><i></i></button>
																</div>
															</div>
														</div>
													</div>

													<div class=" col-md-2 used action transformers old">
														<div class=" game-box">
															<div class="game-picture">
																<img src="/assets/img/xbox360/transformers.jpg" alt="Transformers" width="100%" height="100%">
															</div>
															<div class="game-name">
																<i class="fa fa-heart-o pointer" title="Add to wishlist"></i>
																<p>TRANSFORMERS: REVENGE OF THE FALLEN</p>
															</div>
															<div class=" game-info" style="width: 100%;">
																<div class="" style=" float: right">
																	<p class=" notice">₦7,499</p>
																</div>
																<div class="add" style=" float: left">
																	<button class="game-button btn"><i></i></button>
																</div>
															</div>
														</div>
													</div>

													<div class="col-md-2 used adventure interactive-motion beyond-two-souls old">
														<div class=" game-box">
															<div class="game-picture">
																<img src="/assets/img/ps3/beyond.jpg" alt="Fifa 19" width="100%" height="100%">
															</div>
															<div class="game-name ">
																<i class="fa fa-heart-o pointer" title="Add to wishlist"></i>
																<p>BEYOND TWO SOULS </p>

															</div>
															<div class=" game-info" style="width: 100%;">
																<div class="" style=" float: right">
																	<p class=" notice">₦4,499</p>
																</div>
																<div class="add" style=" float: left">
																	<button class="game-button btn"><i class=""></i></button>
																</div>
															</div>
														</div>
													</div>

													<div class="col-md-2 new sport mariotennis recent">
														<div class=" game-box">
															<div class="game-picture">
																<img src="/assets/img/nintendo/mariotennis.jpg" alt="Mario Tennis" width="100%" height="100%">
															</div>
															<div class="game-name">
																<i class="fa fa-heart-o pointer" title="Add to wishlist"></i>
																<p>MARIO TENNIS</p>

															</div>
															<div class=" game-info" style="width: 100%;">
																<div class="" style=" float: right">
																	<p class=" notice">₦18,499</p>

																</div>
																<div class="add" style=" float: left">
																	<button class="game-button btn"><i class=""></i></button>
																</div>
															</div>
														</div>
													</div>


												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



	</section>
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
					<p><a href="mailto:info@gametrade.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							support@gametrade.com</a></p>
					<p>
						<a href="#x" class="pad fa fa-facebook"></a>
						<a href="#x" class="pad fa fa-instagram"></a>
						<a href="#x" class="pad fa fa-twitter"></a>
					</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 fbox">
					<h4>COMPANY</h4>
					<p><a href="aboutus"> About Us</a></p>
					<p><a href="#x">How it Works</a></p>
					<p><a href="#x">Our Services</a></p>
					<p><a href="#x"> Contact Us</a></p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 fbox">
					<h4>HELP</h4>
					<p><a href="faq"> FAQs</a></p>
					<p><a href="track-order"> Track Order</a></p>
					<p><a href="#xreturn"> Returns</a></p>
					<p><a href="#xdelivery"> Tickets</a></p>
					<p><a href="#xpartner"> Become a Merchant</a></p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 fbox">
					<h4>JOIN OUR NEWSLETTER</h4>
					<div class="block-footer block-5">
						<div class=" block-subscribe">
							<div class="block-content">
								<form action="https://www.gametrade.com/index.php/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
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
							<p class="pull-left">&copy; 2019 GAME EXCHANGE ALL RIGHTS RESERVED |</p>
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
	<script src="/assets/js/animated-search-filter.js"></script>
	<script src="/assets/js/custom.js"></script>
	<script src="/assets/js/carousel.js"></script>
	<script src="/assets/js/preloader.js"></script>
	<script src="/assets/js/jquery.easing.min.js"></script>

</body>

</html>
