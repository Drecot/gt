<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">
    <title>GameTrade.ng | Checkout</title>
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

    <main class="site-main">
        <section>
            <div class="container-fluid mt-50 mb-100">
                <form action="">
                    <div class="container-fluid">

                        <div class="col-md-8 ">
                            <div class="m-l-25 m-r--38 m-lr-0-xl ">
                                <div class="wrap-table-shopping-cart bor10">
                                    <div class="container col-md-12 bb">
                                        <h4 class="brown bold"><i class="fa fa-truck"></i> Delivery Address</h4>
                                    </div>

                                    <div>
                                        <div class="col-md-12 mt-20 mb-150">
                                            <div class="col-md-6 address-box">

                                                <div class="bb mb-2">
                                                    <input id="addressId1283778" name="address" type="radio"
                                                        value="1283778"><label class="">Select this address</label>

                                                    <a href="#xedit" class="pr-15 pl-5 pr-5 address-btn fr">Edit</a>

                                                </div>

                                                <div>
                                                    <div class="mb-2">
                                                        <span><i class="fa fa-user-circle-o"></i> Kennedy Izuegbu</span>
                                                    </div>

                                                    <div class="mb-2">
                                                        <i class="fa fa-home"></i><span> no. 4 inua mohammed street ajao
                                                            estate
                                                            Isolo, Lagos, White House</span>
                                                    </div>

                                                    <div class="mb-2">
                                                        <span><i class="fa fa-phone"></i> 09093814456</span>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-md-6 address-box">

                                                <div class="bb mb-2">
                                                    <input id="addressId1283778" name="address" type="radio"
                                                        value="1283778"><label class="">Select this address</label>

                                                    <a href="#xedit" class="pr-15 pl-5 pr-5 address-btn fr">Edit</a>

                                                </div>

                                                <div>
                                                    <div class="mb-2">
                                                        <span><i class="fa fa-user-circle-o"></i> John Doe</span>
                                                    </div>

                                                    <div class="mb-2">
                                                        <i class="fa fa-home"></i><span> n0 12, western cresent, falomo,
                                                            Ikoyi, Lagos</span>
                                                    </div>

                                                    <div class="mb-2">
                                                        <span><i class="fa fa-phone"></i> 07000000000</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="col-md-6 add-box text-center">
                                                <div>
                                                    <span class="fa fa-plus-circle fa-2x"></span><br>
                                                    <span>Add Address</span>
                                                </div>
                                            </button>
                                        </div>

                                    </div>


                                </div>

                                <div class="container col-md-12 bb bor10 mt-20">
                                    <h4 class="brown bold"><i class="fa fa-credit-card"></i> Payment Options</h4>
                                </div>

                                <div class="container col-md-12 bb mt-20 bor10">
                                    <h4 class="brown bold"><i class="fa fa-file-text-o"></i> Review Order</h4>
                                </div>
                                <div class="wrap-table-shopping-cart bor10 mt-20">

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
                                                        <img src="/assets/img/cart/item-02.jpg" alt="IMG">
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

                                <div class="flex-w flex-t bor12 p-t-15 p-b-13 pb-13">
                                    <div class="wdt-345 w-full-ssm">
                                        <span class="cart-right-text-left cl2">
                                            Shipping:
                                        </span>
                                    </div>

                                    <div class="wdt-655">
                                        <span class="cart-right-text-right black333 cl2">
                                            ₦750
                                        </span>
                                    </div>
                                </div>

                                <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                    <div class=" w-full-ssm">
                                        <span class="cart-right-text-left cl2">
                                            Apply Coupon:
                                        </span>
                                    </div>

                                    <div class="">
                                        <input class=" black333 cl2 bb" placeholder="Enter Coupon Code">
                                        <button type="submit" class="button mt-20" style="width:40%">
                                            <span><span>Apply</span></span></button>

                                    </div>
                                </div>

                                <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                    <div class=" w-full-ssm">
                                        <span class="cart-right-text-left cl2">
                                            Round up for charity: <i class="fa fa-info-circle pointer"
                                                title="Make the total amount to be paid a round number and we would give the balance to charity"></i>
                                        </span>
                                    </div>

                                    <div class="">
                                        ₦ <input class=" black333 cl2 bb" placeholder="Input an amount"> <i
                                            class="fa fa-refresh pointer" title="Click here to auto round up"></i>

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
                                            ₦21,248
                                        </span>
                                    </div>
                                </div>

                                <div class="">
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
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/carousel.js"></script>
    <script src="/assets/js/preloader.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>

</body>

</html>