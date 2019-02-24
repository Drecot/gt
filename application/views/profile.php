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

    <?php include 'header_beforelogin.php';?>

    <?php } else { ?>

    <?php include 'header_afterlogin.php';?>

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
                                <input type="text" name="email" id="newsletter"
                                    value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['firstname']; }?>"
                                    required>
                            </div>

                            <div class="col-md-6 input-box">
                                <h6 class="bold f10px">Last Name</h6>
                                <input type="text" name="email" id="newsletter"
                                    value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['lastname']; }?>"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-6 input-box">
                                <h6 class="bold f10px">Phone Number</h6>
                                <input type="tel" name="email" id="newsletter" minlength="11" maxlength="11"
                                    value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['phonenumber']; }?>"
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
                                <input type="text" name="email" id="newsletter"
                                    value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['email']; }?>" readonly>
                            </div>

                            <div class="col-md-6 input-box">
                                <h6 class="bold f10px">Current Password</h6>
                                <input type="password" name="email" id="newsletter" minlength="8" placeholder=""
                                    required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-6 input-box">
                                <h6 class="bold f10px">New Password</h6>
                                <input type="password" name="email" id="newsletter" minlength="8" placeholder=""
                                    required>
                            </div>

                            <div class="col-md-6 input-box">
                                <h6 class="bold f10px">Confirm Password</h6>
                                <input type="password" name="email" id="newsletter" minlength="8" placeholder=""
                                    required>
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
    <?php include 'footer.php';?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/carousel.js"></script>
    <script src="/assets/js/preloader.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script>
    $(document).ready(function() {
        $("body").mouseup(function(e) {
            var subject = $("#myReset");

            if (e.target.id !== subject.attr('id') && !subject.has(e.target).length) {
                subject.fadeOut();
            }

        });
    });
    </script>
</body>

</html>