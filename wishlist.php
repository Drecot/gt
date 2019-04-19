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
                    <h4> Wishlist</h4>
                </div>
                <div>
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li>Account</li>
                        <li>Wishlist</li>
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
                        <a href="deliveryaddress" class="f12px">Delivery Address</a><br><a href="inventory" class="f12px">Inventory</a>
                    </div>

                    <hr>

                    <div>
                        <h3><i class="fa fa-shopping-bag fa-2x"></i> My Orders</h3>
                        <div>
                            <a href="orders" class="f12px">Orders</a><br>
                            <a href="#x" class="f12px">Reviews & Ratings</a><br>
                            <a href="wishlist" class="active f12px">Wishlist</a>
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
                        <h2 class="brown bold">Wishlist</h2>
                    </div>

                    <div>
                        <div class="col-md-12 mt-20 mb-150 ex2">
                            <div class="wishlist-box">
                                <div class="wishlist-img">
                                    <img src="assets/img/wishlist/item-01.jpg" alt="IMG">
                                </div>

                                <div class="wishlist-text">
                                    <a href="#" class="header-cart-item-name">
                                        Grand Theft Auto V
                                    </a>
                                    <span class="header-cart-item-info">
                                        ₦5,600.00
                                    </span>

                                </div>

                                <hr>
                                <div class="col-md-12">
                                    <div class="col-md-3 float-right">
                                        <button type="submit" title="Subscribe" class="button button-skeleton">
                                            <span class="fa fa-trash"><span> Remove</span></span></button>
                                    </div>

                                    <div class="col-md-3 float-right">
                                        <button type="submit" title="Subscribe" class="button">
                                            <span><span>Add To Cart</span></span></button>
                                    </div>
                                </div>
                            </div>

                            <div class="wishlist-box">
                                <div class="wishlist-img">
                                    <img src="assets/img/wishlist/item-01.jpg" alt="IMG">
                                </div>

                                <div class="wishlist-text">
                                    <a href="#" class="header-cart-item-name">
                                        Grand Theft Auto V
                                    </a>
                                    <span class="header-cart-item-info">
                                        ₦5,600.00
                                    </span>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-3 float-right">
                                        <button type="submit" title="Subscribe" class="button button-skeleton">
                                            <span class="fa fa-trash"></span></button>
                                    </div>

                                    <div class="col-md-3 float-right">
                                        <button type="submit" title="Subscribe" class="button">
                                            <span><span>Add To Cart</span></span></button>
                                    </div>
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