<header class="site-header">
    <div>
        <nav class="navbar navbar-default" id="title">
            <div class="container">
                <div class="navbar-header">
                    <div class="container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-navbar-collapse, #bs-navbar-collapse1">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php" class="navbar-brand brand-logo">
                            <img src="assets/img/logo.png" srcset="assets/img/logo2.png 2x, img/logo3.png 3x"
                                alt="Post" width="100%" height="100%">
                        </a>
                    </div>
                </div>
                <a href="index.php" class=" navbar-brand " style="
    width: 250px;
    margin-top: 30px;
">
                    <img src="assets/img/logo.png" srcset="assets/img/logo2.png 2x, img/logo3.png 3x" alt="Post">
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

                        <li><a href="#xcart" class="fa fa-cart-plus" onclick="toggle_visibility('myCart');">
                                Cart<span class="header-icons-noti-top-aft">2</span></a></li>

                        <div class="form-popup" id="myCart">
                            <form action="/action_page.php" class="form-container">
                                <ul class="header-cart-wrapitem">
                                    <li class="header-cart-item">
                                        <div class="header-cart-item-img">
                                            <img src="assets/img/cart/item-01.jpg" alt="IMG">
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
                                            <img src="assets/img/cart/item-01.jpg" alt="IMG">
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
                                        <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            View Cart
                                        </a>
                                    </div>
                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->
                                        <a href="checkout.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            Checkout
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>



                        <li><a href="#xaccount" class=" fa fa-user-o" onclick="toggle_visibility('myForm');">
                                Login</a></li>
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
                                        <a class="brown" href="#xforgot" style="float: right"
                                            onclick="toggle_visibility('myReset');toggle_visibility('myForm');">Forgot
                                            Password?</a>
                                    </div>
                                    <button type="submit" class="btn">Login</button>
                                    <div class="text-center">
                                        <p>Need an account? <a href="#x" class="brown" data-toggle="modal"
                                                data-target="#myModal">Sign up here</a></p>
                                    </div>
                                </form>
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
                                                <input type="text" placeholder="Enter First Name" name="firstname"
                                                    required>
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group ">
                                                <label for="lastname"><b>Last Name</b></label>
                                                <input type="text" placeholder="Enter Last Name" name="lastname"
                                                    required>
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group ">
                                                <label for="email"><b>Email</b></label>
                                                <input type="text" placeholder="Enter Email" name="email" required>
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group ">
                                                <label for="phonenumber"><b>Phone Number</b></label>
                                                <input type="tel" placeholder="Enter Phone Number" name="phonenumber"
                                                    minlength="11" maxlength="11" required>
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group ">
                                                <label for="password"><b>Password</b></label>
                                                <input type="password" placeholder="Enter Password" name="password"
                                                    minlength="8" required>
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group ">
                                                <label for="confirm_password"><b>Confirm Password</b></label>
                                                <input type="password" placeholder="Confirm Password"
                                                    name="confirm_password" minlength="8" required>
                                                <span class="help-block"></span>
                                            </div>
                                            <p class="">
                                                <input type="checkbox" placeholder="Confirm Password" name="psw"
                                                    required>
                                                I have read and accepted the <a class="brown" href="#xterms">terms
                                                    and conditions</a>
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
                                    <a class="brown" href="#xforgot"
                                        onclick="toggle_visibility('myReset');toggle_visibility('myForm');">Login</a>
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
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img/hero1.jpg" alt="Los Angeles" style="width:100%; ">
                        <div class="centered1">BATTLEFIELD
                            <h6>Bring the battle home in this intriguing first person shooter game
                                <a class="bold"">Buy Now - ₦15,499</a>
                                </h6>
                            </div>
                        </div>
                        <div class=" item">
                                    <img src="assets/img/hero2.jpg" alt="Chicago" style="width:100%;">
                                    <div class="centered1">FIFA 19<h6>The all new Fifa 19 just an order away<br><a
                                                class="bold"">Buy Now - ₦21,999</a></h6>
                                            
                                        </div>

                            </div>
                            <div class=" item">
                                                <img src="assets/img/hero3.jpg" alt="New york" style="width:100%;">
                                                <div class="centered1">NEED FOR SPEED<h6>Race through the streets
                                                        with
                                                        your only speed
                                                        limit being your speedometer<a class="bold"">Buy Now - ₦19,499</a>
                                                        </h6>
                                                    </div>
                                        </div>
                                        <div class=" item">
                                                            <img src="assets/img/hero4.jpg" alt="Chicago"
                                                                style="width:100%;">
                                                            <div class="centered1">ASSASSINS CREED: ODYSSEY MEDUSA
                                                                <h6>The Medusa fight is the hardest battle in all of
                                                                    Assassin's Creed Odyssey. Are you capable?<br><a
                                                                        class="bold"">Buy Now - ₦20,999</a></h6>
                                                                </div>
                                                    </div>
                                                    <div class=" item">
                                                                        <img src="assets/img/hero5.jpg" alt="New york"
                                                                            style="width:100%;">
                                                                        <div class="centered1">MORTAL KOMBAT 11<h6>
                                                                                Take down your opponent with swift
                                                                                combo moves
                                                                                <a class="bold"">Pre-Order Now - ₦16,999</a></h6>
                                                                            </div>
                                                                </div>
                                                    </div>
                                        </div>
                            </div>
                        </div>
    </header>