<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">
    
    <title>GameTrade.ng | Frequently Asked Questions</title>
    
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

<body >
   
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

    <main class="site-main">
        
          <section class="hero_area2">     
              <div class="middle2 text-center" style=" padding: 10px;">
                                <div class="">
                                    <h1 style="    margin-bottom: 1.5rem;" > Frequently Asked Questions</h1>
                                    
                                </div>
                  
                  <div> 
                      <ul class="breadcrumb">
                          <li><a href="index">Home</a></li>
                          <li>FAQs</li>
                      </ul>
                  </div>
                                
                            </div>
           </section>

    <section>

        <div class="container gap">
			<div class=" col-sm-12 flex w-full mb-4">
			<div class="faq-search">
				<input type="text" id="faqInput" onkeyup="myFunction()" placeholder="Search on a topic e.g 'order'  'delivery'  'return'  'exchange'  'used' .... ">
</div>
				
			</div>

            <div class=" col-sm-12 flex w-full mb-4">
                <div class="col-sm-6 question-header">
                    <p>Questions</p>
                </div>
                <div class="col-sm-6 answer-header w-6">
                    <p>Answers</p> 
                </div>
            </div>

        <div class="col-sm-12 flex w-full mb-4">
            <div class=" col-sm-6 light-grey mr4">
                <p>
                   Do you really do same day delivery?
                </p>
            </div>
            <div class=" col-sm-6 light-grey w-6">
                <p>
                 Yes we really do same day delivery, but only for orders placed before 12PM
                </p> 
            </div>
        </div>

        <div class="col-sm-12 flex w-full mb-4">
            <div class="light-grey mr4">
                <p>
                    Will I receive the same product that I see in the photo?
                </p>
            </div>
            <div class="light-grey w-6">
                <p>
                   Yes, you would receive the same product that you see in the photo, otherwise it would be stated, like in the case of used games not in the original casing.
                </p> 
            </div>
        </div>

        <div class="col-sm-12 flex w-full mb-4">
            <div class="light-grey mr4 ">
                <p>
                    What should I do if I receive the wrong order? 
                </p>
            </div>
            <div class="light-grey w-6">
                <p>
                    In the unlikely case you were to receive an item that you did not order, please contact our customer service on <a style="color:brown; text-decoration: none" href="tel:+2348159827634"> +234 815 982 7634</a> to rectify the issue
                </p> 
            </div>
        </div>

        <div class="col-sm-12 flex w-full mb-4">
            <div class="light-grey mr4">
                <p>
                    Where can I receive my order?
                </p>
            </div>
            <div class="light-grey w-6">
                <p>
                    Your order can be sent to an address selected by you (home, work, etc. - not a PO Box)
                </p> 
            </div>
        </div>

        <div class="col-sm-12 flex w-full mb-4">
            <div class="light-grey mr4">
                <p>
                    How long will my order take to arrive?
                </p>
            </div>
            <div class="light-grey w-6">
                <p>
                    Standard deliveries take 1 to 2 working days.
                </p> 
            </div>
        </div>

        <div class="col-sm-12 flex w-full mb-4">
            <div class="light-grey mr4">
                <p>
                    
How much do I pay for delivery service?
                </p>
            </div>
            <div class="light-grey w-6">
                <p>
                    Delivery within Lagos Mainland ranges from <span style="color:brown">₦500 - ₦1,500.00</span>, while deliveries to Lagos Island ranges from <span style="color:brown">₦1,500 - ₦2,500.00</span>.
                </p> 
                
                <p> Please note that if there is a toll fare in your region it would be added to your bill on checkout.
                </p>
                    
            </div>
        </div>


        <div class="col-sm-12 flex w-full mb-4">
            <div class="light-grey mr4">
                <p>
                    How long do I have to return an item?
                </p>
            </div>
            <div class="light-grey w-6">
                <p>
                    Unfortunately returns are not accepted once the seal has been broken, however items that have not been used and are still sealed in original wrapping can be exchanged within 7 days from date of purchase for an item of similar value or higher with the balance paid.
                </p> 
            </div>
        </div>

        <div class="col-sm-12 flex w-full mb-4">
            <div class="light-grey mr4">
                <p>
                    Are used games working and in good condition?
                </p>
            </div>
            <div class="light-grey w-6">
                <p>
                    Yes, all used games listed on our site are fully guaranteed to work and are covered by guarantee. Please note however some used games may not have the original game cover
                </p> 

               
            </div>
        </div>

        <div class="col-sm-12 flex w-full mb-4">
            <div class="light-grey mr4">
                <p>
                    Can I pay cash on delivery? 
                </p>
            </div>
            <div class="light-grey w-6">
                <p>
                    Yes, you can pay with cash or by POS on delivery
                </p> 
            </div>
        </div>

        <div class="col-sm-12 flex w-full mb-4">
            <div class="light-grey mr4">
                <p>
                    Can you guarantee the perfect working condition of exchange games? 
                </p>
            </div>
            <div class="light-grey w-6">
                <p>
                    As much a we would love to give a positive answer to this question,
                    games for exchange are not kept in our possession but rather, in possession
                    of the individual owners, therefore we cannot guarantee a 100% the working condition
                    of these games.
                </p> 
                <p>
                    However, we have put measures in place to try and ensure that games put up for exchange are in their perfect working
                    conditions.
                </p>
                <p>
                    We at the same time, employ all users to only put up games in their perfect working conditions.
                </p>
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
                    <span class="fa fa-motorcycle" > </span>
                    <h4  > SAME DAY DELIVERY</h4>
                </div>
                
               <div class="hvr-grow col-sm-4  whbx" >
                   <span class="fa fa-rotate-left" > </span>
                    <h4 > 7 DAYS RETURN</h4>
                </div>
                
                <div class="hvr-grow col-sm-4  whbx" >
                    <span class="fa fa-money" > </span>
                    <h4  > CASH ON DELIVERY</h4>
                </div>        
            </div>
        </div>
        
        <div class="container " style=" background-color: #555">
           
            <div class="row second">
                 <!-- Allow the contact us be at the foremost left hand side-->
                <div class="col-md-3 col-sm-6 col-xs-12 fbox" >
                    <h4>GET IN TOUCH</h4>
                    
                    <p><a href="#x"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> KM 10, Idiroko Road</a></p>
                    <p><a href="tel:+2348159827634"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +234 815 9827 634</a></p>
                    <p><a href="mailto:info@gameexchange.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> support@gameexchange.com</a></p>
                    <p>
			<a href="#x" class="pad fa fa-facebook"></a>
			<a href="#x" class="pad fa fa-instagram"></a>
			<a href="#x" class="pad fa fa-twitter"></a>
                    </p>                       
                   
                </div>
              
                <div class="col-md-3 col-sm-6 col-xs-12 fbox" >
                    <h4>COMPANY</h4>
                    <p><a href="aboutus.php"> About Us</a></p>
                    <p><a href="#x">How it Works</a></p>
                    <p><a href="#x">Our Services</a></p>
                    <p><a href="contact.php"> Contact Us</a></p>
                    
                </div> 
                
                <div class="col-md-3 col-sm-6 col-xs-12 fbox" >
                    <h4>HELP</h4>
                     <p><a href="faq.php"> FAQs</a></p>
                     <p><a href="track-order.php"> Track Order</a></p>
                     <p><a href="#xreturn"> Returns</a></p>
                     <p><a href="#xdelivery"> Tickets</a></p>
                     <p><a href="#xpartner"> Become a Merchant</a></p>
                  
                    
                </div>
                
                <div class="col-md-3 col-sm-6 col-xs-12 fbox" >
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
                                                    <input type="text" name="email" id="newsletter" title="Sign up for our newsletter"placeholder="Enter Email" required>
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
                        <p class="pull-left">&copy; <script>document.write(new Date().getFullYear());</script> GAMETRADE ALL RIGHTS RESERVED |</p>
						
						<a href="#x"><p>&nbsp Privacy Policy |<p></a>
						<a href="#x"><p>&nbsp Terms of Service <p></a>
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
    
<script>

	
		$(document).ready(function()
		{
			$("body").mouseup(function(e)
			{
				var subject = $("#myForm"); 

				if(e.target.id !== subject.attr('id') && !subject.has(e.target).length)
				{
					subject.fadeOut();
				}

			});
		});
</script>

<script>

		$(document).ready(function()
		{
			$("body").mouseup(function(e)
			{
				var subject = $("#myCart"); 

				if(e.target.id !== subject.attr('id') && !subject.has(e.target).length)
				{
					subject.fadeOut();
				}

			});
		});



</script>



<script>
$(document).ready(function()
		{
			$("body").mouseup(function(e)
			{
				var subject = $("#myWishlist"); 

				if(e.target.id !== subject.attr('id') && !subject.has(e.target).length)
				{
					subject.fadeOut();
				}

			});
		});



</script>


<script>

	$(document).ready(function()
		{
			$("body").mouseup(function(e)
			{
				var subject = $("#myReset"); 

				if(e.target.id !== subject.attr('id') && !subject.has(e.target).length)
				{
					subject.fadeOut();
				}

			});
		});


</script>

</body>
</html>