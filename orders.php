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
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/infinite-slider.css" rel="stylesheet">
    <link href='assets/fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/w3.css" rel="stylesheet">
    <link href="assets/css/hover-min.css" rel="stylesheet">
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
        <section class="hero_area2">
            <div class="middle2 text-center" style=" padding: 10px;">
                <div class="">
                    <h1> Orders</h1>
                </div>
                <div>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Account</li>
                        <li>Orders</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="container-fluid" style="background-color:#f0f0f0; padding-bottom: 100px; padding-top: 50px;">

            <div class="container-fluid">
                <div class="col-md-2 rd-2 white float-left">

                    <div>
                        <h3><i class="fa fa-user fa-2x"></i> My Profile</h3>
                        <a href="account" class="f12px">Account Information</a><br>
                        <a href="deliveryaddress" class="f12px">Delivery Address</a><br><a href="inventory" class="f12px">Inventory</a> <br>                                                    <a href="#xsupport.php" class="f12px">Support Tickets</a>    <a href="#xsupport.php" class="f12px">Support Tickets</a>
                    </div>

                    <hr>

                    <div>
                        <h3><i class="fa fa-shopping-bag fa-2x"></i> My Orders</h3>
                        <div>
                            <a href="orders" class="active f12px">Orders</a><br>
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
                        <h2 class="brown bold">Orders</h2>
                    </div>

                    <div>
                        <div class="col-md-12 mt-20">
                            <div class="col-md-6 ex1">
                                <div class="col-md-12 orders-box">

                                    <div class="bb mb-2">
                                        <label class="black">Order Date : 5 Jan 2019</label>
                                    </div>

                                    <div class="col-md-6" style="float:left;">

                                        <div>
                                            <span class="bold">Product: </span>God Of War [PS4]
                                        </div>

                                        <div>
                                            <span class="bold">Total: </span><span
                                                style="font-family: sans-serif; margin-right: 1px;">₦</span>15,360
                                        </div>

                                        <div>
                                            <span class="bold">Order No: </span>R201901964
                                        </div>

                                        <div class="aeb19_1ea6D"><span class="bold">Payment Method: </span>Pay Now
                                        </div>
                                    </div>

                                    <div class="col-md-6" style="float:right;">
                                        <span class="bold">Delivery Address:</span>
                                        <div>no 4 inua mohammed street ajao estate </div>
                                    </div>

                                </div>

                                <div class="col-md-12 orders-box">

                                    <div class="bb mb-2">
                                        <label class="black">Order Date : 3 Jan 2019</label>
                                    </div>

                                    <div class="col-md-6" style="float:left;">

                                        <div>
                                            <span class="bold">Product: </span>Beyond Two Souls [PS3]
                                        </div>
                                        <div>
                                            <span class="bold">Total: </span><span
                                                style="font-family: sans-serif; margin-right: 1px;">₦</span>3,490
                                        </div>

                                        <div>
                                            <span class="bold">Order No: </span>R201901964
                                        </div>

                                        <div class="aeb19_1ea6D"><span class="bold">Payment Method: </span>Pay Now
                                        </div>
                                    </div>

                                    <div class="col-md-6" style="float:right;">
                                        <span class="bold">Delivery Address:</span>
                                        <div>no 4 inua mohammed street ajao estate </div>
                                    </div>

                                </div>

                                <div class="col-md-12 orders-box">

                                    <div class="bb mb-2">
                                        <label class="black">Order Date : 25 Dec 2018</label>
                                    </div>

                                    <div class="col-md-6" style="float:left;">

                                        <div>
                                            <span class="bold">Product: </span>Uncharted [PS4]
                                        </div>

                                        <div>
                                            <span class="bold">Total: </span><span
                                                style="font-family: sans-serif; margin-right: 1px;">₦</span>9,060
                                        </div>

                                        <div>
                                            <span class="bold">Order No: </span>R201901964
                                        </div>

                                        <div class="aeb19_1ea6D"><span class="bold">Payment Method: </span>Pay On
                                            Delivery
                                        </div>
                                    </div>

                                    <div class="col-md-6" style="float:right;">
                                        <span class="bold">Delivery Address:</span>
                                        <div>24, Montgomery Road, Yaba </div>
                                    </div>

                                </div>

                                <div class="col-md-12 orders-box">

                                    <div class="bb mb-2">
                                        <label class="black">Order Date : 17 Nov 2018</label>
                                    </div>

                                    <div class="col-md-6" style="float:left;">
                                        <div>
                                            <span class="bold">Product: </span>Product: Fifa 18 [XBOX360]
                                        </div>

                                        <div>
                                            <span class="bold">Total: </span><span
                                                style="font-family: sans-serif; margin-right: 1px;">₦</span>11,490
                                        </div>

                                        <div>
                                            <span class="bold">Order No: </span>R201901964
                                        </div>

                                        <div class="aeb19_1ea6D"><span class="bold">Payment Method: </span>Pay Now
                                        </div>
                                    </div>

                                    <div class="col-md-6" style="float:right;">
                                        <span class="bold">Delivery Address:</span>
                                        <div>no 4 inua mohammed street ajao estate </div>
                                    </div>

                                </div>

                            </div>


                            <div class="col-md-6 history-box text-center ex1">
                                <div>
                                    <span class="fa fa-history fa-5x"></span><br>
                                    <span>No transaction history</span>
                                    <p>Select an order</p>
                                </div>
                            </div>
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
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/preloader.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
</body>

</html>