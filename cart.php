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
                                                        <img src="assets/img/cart/item-01.jpg" alt="IMG">
                                                    </div>
                                                </td>
                                                <td class="column-2 black">Ghost Recon: Advanced Warfighter [PS4]</td>
                                                <td class="column-3">₦ 11,499</td>
                                                <td class="column-4">
                                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                        <div
                                                            class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                                        </div>

                                                        <input class="mtext-104 cl3 txt-center num-product"
                                                            type="number" id="quantity" name="num-product1" value="1"
                                                            min="1" max="100">

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
                                                        <img src="assets/img/cart/item-02.jpg" alt="IMG">
                                                    </div>
                                                </td>
                                                <td class="column-2">Grand Theft Auto V [PS4]</td>
                                                <td class="column-3">₦ 8,999</td>
                                                <td class="column-4">
                                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                        <div
                                                            class="btn-num-product-down2 cl8 hov-btn3 trans-04 flex-c-m">
                                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                                        </div>

                                                        <input class="mtext-104 cl3 txt-center num-product"
                                                            type="number" id="quantity2" name="num-product2" value="1"
                                                            min="1" max="100">

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
                                        <div
                                            class="flex-c-m stext-101 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10 fr">
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
    <?php include 'footer.php';?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/preloader.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

</body>

</html>