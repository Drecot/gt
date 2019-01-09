<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="Dreacot">
	<title>GameTrade.ng | Cart</title>
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
	<!-- <<<<<<< HEAD -->
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
					<a href="index.php" class="topnav-centered navbar-brand ">
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
												Check Out
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
		</div>
	</header>
	<?php } else { ?>


	<!----------------------------------------------->
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
					<a href="index.php" class="topnav-centered navbar-brand ">
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
											<a href="#xcart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
												View Cart
											</a>
										</div>
										<div class="header-cart-wrapbtn">
											<!-- Button -->
											<a href="#xcheckout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
												Check Out
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
		</div>
	</header>

	<?php } ?>
	<main class="site-main">
		<section>
			<div class="container-fluid mt-50 mb-100">
				<form action="/exchange/checkout">
					<div class="container-fluid">

						<div class="col-md-8 ">
							<div class="m-l-25 m-r--38 m-lr-0-xl ">
								<div class="wrap-table-shopping-cart">
									<table class="table-shopping-cart">
										<tbody>
											<tr class="table_head">
												<th class="column-1">Product</th>
												<th class="column-2"></th>
												<th class="column-3">Price</th>
												<th class="column-4">Quantity</th>
												<th class="column-5">Total</th>
											</tr>

											<tr class="table_row">
												<td class="column-1">
													<div class="how-itemcart1">
														<img src="/assets/img/cart/item-01.jpg" alt="IMG">
													</div>
												</td>
												<td class="column-2 black">Ghost Recon: Advanced Warfighter [PS4]</td>
												<td class="column-3">₦ 11,499</td>
												<td class="column-4">
													<div class="wrap-num-product flex-w m-l-auto m-r-0">
														<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
															<i class="fs-16 zmdi zmdi-minus"></i>
														</div>

														<input class="mtext-104 cl3 txt-center num-product" type="number" id="quantity" name="num-product1" value="1" min="1" max="100">

														<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
															<i class="fs-16 zmdi zmdi-plus"></i>
														</div>
													</div>
												</td>
												<td class="column-5">₦ 11,499</td>
											</tr>

											<tr class="table_row">
												<td class="column-1">
													<div class="how-itemcart1">
														<img src="/assets/img/cart/item-02.jpg" alt="IMG">
													</div>
												</td>
												<td class="column-2">Grand Theft Auto V [PS4]</td>
												<td class="column-3">₦ 8,999</td>
												<td class="column-4">
													<div class="wrap-num-product flex-w m-l-auto m-r-0">
														<div class="btn-num-product-down2 cl8 hov-btn3 trans-04 flex-c-m">
															<i class="fs-16 zmdi zmdi-minus"></i>
														</div>

														<input class="mtext-104 cl3 txt-center num-product" type="number" id="quantity2" name="num-product2" value="1" min="1" max="100">

														<div class="btn-num-product-up2 cl8 hov-btn3 trans-04 flex-c-m">
															<i class="fs-16 zmdi zmdi-plus"></i>
														</div>
													</div>
												</td>
												<td class="column-5">₦ 8,999</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
									<div class="container">
										<div class="flex-c-m stext-101 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10 fr">
											<div>Update Cart</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4 ">
							<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
								<h4 class="cart-right-header-text black333 bold pb-30">
									Order Summary
								</h4>

								<div class="flex-w flex-t bor12 pb-13">
									<div class="wdt-345">
										<span class="cart-right-text-left cl2">
											Subtotal:
										</span>
									</div>

									<div class="wdt-655">
										<span class="cart-right-text-right black333 cl2">
											₦20,498
										</span>
									</div>
								</div>

								<div class="flex-w flex-t bor12 p-t-15 p-b-13">
									<div class="wdt-345 w-full-ssm">
										<span class="cart-right-text-left cl2">
											Shipping:
										</span>
									</div>

									<div class="wdt-655 p-r-18 p-r-0-sm w-full-ssm">
										<p class="stext-111 cl6 p-t-2">
											Shipping fees not included yet
										</p>

									</div>
								</div>

								<div class="flex-w flex-t p-t-27 p-b-33">
									<div class="size-208">
										<span class="mtext-101 bold cl2">
											Total:
										</span>
									</div>

									<div class="size-209 p-t-1">
										<span class="cart-right-text-right black333 cl2">
											₦20,498
										</span>
									</div>
								</div>

								<div class="text-center pb-30">
									<button type="submit" class="button" style="width:80%;">
										<span><span>PROCEED TO CHECKOUT</span></span></button>
								</div>

							</div>
						</div>

					</div>
				</form>
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
					<p><a href="#xpartner"> Become a Merchant</a></p>
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
								<?php echo date("Y") ?> GAME EXCHANGE ALL RIGHTS RESERVED |</p>
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

		$(document).ready(function(){

		var quantity=0;
  		 $('.btn-num-product-up').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.btn-num-product-down').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
    

	
});

$(document).ready(function(){

var quantity=0;
   $('.btn-num-product-up2').click(function(e){

// Stop acting like a button
e.preventDefault();
// Get the field name
var quantity2 = parseInt($('#quantity2').val());

// If is not undefined
	
	$('#quantity2').val(quantity2 + 1);

  
	// Increment

});

$('.btn-num-product-down2').click(function(e){
// Stop acting like a button
e.preventDefault();
// Get the field name
var quantity2 = parseInt($('#quantity2').val());

// If is not undefined

	// Increment
	if(quantity2>0){
	$('#quantity2').val(quantity2 - 1);
	}
});



});

	</script>
</body>

</html>
