<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">
    <title>GameTrade.ng | Product Details</title>
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
        <section class="hero_area2">
            <div class="middle2 text-center" style=" padding: 10px;">
                <div class="">
                    <h1 style="    margin-bottom: 1.5rem;"> All Products</h1>
                </div>
                <div>
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li>Products</li>
                        <li>Games</li>
                        <li>PS3</li>
                    </ul>
                </div>

            </div>
        </section>

        <section>
            <div class="container bgwhite p-t-35 p-b-80">
                <div class="flex-w flex-sb">
                    <div class="w-size13 p-t-30 respon5">
                        <div class="wrap-slick3 flex-sb flex-w">

                            <div class="slick3 slick-initialized slick-slider slick-dotted">
                                <div class="slick-list draggable">
                                    <div class="slick-track">
                                        <div class="item-slick3 slick-slide slick-current slick-active"
                                            data-thumb="images/thumb-item-01.jpg" data-slick-index="0"
                                            aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10"
                                            aria-describedby="slick-slide-control10"
                                            style="width: 501px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                            <div class="wrap-pic-w">

                                                <img src="assets/img/ps3/killzone3.jpg" width="100%" height="100%"
                                                    alt="IMG-PRODUCT">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                =
                            </div>
                        </div>
                    </div>

                    <div class="w-size14 p-t-30 respon5">
                        <h4 class="product-detail-name m-text16 bold">
                            KILLZONE 3
                        </h4>
                        <div class="p-b-45">
                            <span class="s-text8 m-r-35">SKU: USED-01</span>
                            <span class="s-text8">Categories: USED . PS3</span>
                        </div>

                        <span class="m-text17 bold">
                            ₦5,499
                        </span>
                        <span class="m-text14" style="text-decoration:line-through">
                            ₦5,999
                        </span>
                        <span class="m-text14" style="color:brown">
                            You save ₦500
                        </span>
                        <!--  -->
                        <div class="p-t-33 p-b-60">

                            <div class="flex-r-m flex-w p-t-10 p-b-13">
                                <div class="w-size16 flex-m flex-w">
                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                        <div class="btn-num-product-down2 cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" id="quantity2"
                                            name="num-product2" value="1" min="1" max="100">

                                        <div class="btn-num-product-up2 cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>

                                </div>
                                <div><i class="fa fa-heart-o fa-3x wishlistpointer" title="Add to wishlist"
                                        data-toggle="modal" data-target="#wishlistModal"></i></div>
                            </div>


                            <div class="text-center">
                                <button type="submit" class="button" data-toggle="modal" data-target="#cartModal"
                                    style="width:100%;">
                                    <span><span>ADD TO CART</span></span></button>
                            </div>
                        </div>


                        <!--  -->
                        <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                            <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                                Description
                                <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                                <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                            </h5>

                            <div class="dropdown-content dis-none p-t-15 p-b-23">
                                <p class="s-text8">
                                    Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit
                                    ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
                                </p>
                            </div>
                        </div>

                        <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                            <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                                Shipping
                                <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                                <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                            </h5>

                            <div class="dropdown-content dis-none p-t-15 p-b-23">
                                <p class="s-text8">
                                    <ul>
                                        <li><i class="fa fa-truck" style="color:brown"></i> Pay on Delivery
                                            Available</li>
                                        <li><i class="fa fa-bolt" style="color:brown"></i> Express Delivery Available
                                        </li>
                                        <li><i class="fa fa-home" style="color:brown"></i> GameTrade Warehouse</li>
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                            <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                                Return Policy
                                <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                                <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                            </h5>

                            <div class="dropdown-content dis-none p-t-15 p-b-23">
                                <p class="s-text8">
                                    Returns only allowed for defected items
                                </p>
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
    <script type="text/javascript">
    $('.active-dropdown-content .js-toggle-dropdown-content').toggleClass('show-dropdown-content');
    $('.active-dropdown-content .dropdown-content').slideToggle('fast');

    $('.js-toggle-dropdown-content').on('click', function() {
        $(this).toggleClass('show-dropdown-content');
        $(this).parent().find('.dropdown-content').slideToggle('fast');
    });
    </script>
    <script type="text/javascript">
    $('.wishlistpointer').on('click', function(e) {
        e.preventDefault();
        $(this).addClass('fa-heart');
        $(this).removeClass('fa-heart-o');
        $(this).off('click');
    });
    </script>
    <script type="text/javascript">
    function myFunction() {
        var nameProduct = $('.game-name').find('.block2-name').html();
        document.getElementById("wishlistText").innerHTML = nameProduct;
        var nameProduct = $('.game-name').find('.block2-name').html();
        document.getElementById("cartText").innerHTML = nameProduct;
    }
    </script>

    <!--Wishlist Modal -->
    <div class="modal fade" id="wishlistModal" role="dialog">
        <div class="modal-dialog modal-sm modal-wishlist">
            <div class="modal-content">
                <div class="wishlist-icon wishlist-icon--success">
                    <span class="wishlist-icon--success__line wishlist-icon--success__line--long"></span>
                    <span class="wishlist-icon--success__line wishlist-icon--success__line--tip"></span>

                    <div class="wishlist-icon--success__ring"></div>
                    <div class="wishlist-icon--success__hide-corners"></div>
                </div>

                <div class="wishlist-title" style="">

                    <span id="wishlistText"></span>
                </div>

                <div class="wishlist-text text-center" style="">is added to wishlist !</div>

                <div class="wishlist-footer">
                    <div class="wishlist-button-container">

                        <button class="wishlist-button wishlist-button--confirm " data-dismiss="modal">OK</button>

                        <div class="wishlist-button__loader">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="modal fade" id="cartModal" role="dialog">
        <div class="modal-dialog modal-sm modal-cart">
            <div class="modal-content">
                <div class="cart-icon cart-icon--success">
                    <span class="cart-icon--success__line cart-icon--success__line--long"></span>
                    <span class="cart-icon--success__line cart-icon--success__line--tip"></span>

                    <div class="cart-icon--success__ring"></div>
                    <div class="cart-icon--success__hide-corners"></div>
                </div>

                <div class="cart-title" style="">

                    <span id="cartText"></span>
                </div>

                <div class="cart-text text-center" style="">is added to cart !</div>

                <div class="cart-footer">
                    <div class="cart-button-container">

                        <button class="cart-button cart-button--confirm " data-dismiss="modal">OK</button>

                        <div class="cart-button__loader">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>