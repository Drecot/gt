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
    <script type="text/javascript">
    function myFunction() {
        var nameProduct = $('.game-name').find('.block2-name').html();
        document.getElementById("wishlistText").innerHTML = nameProduct;
        var nameProduct = $('.game-name').find('.block2-name').html();
        document.getElementById("cartText").innerHTML = nameProduct;
    }
    </script>
</head>

<body onload="myFunction()">
    <!-- <preloader> -->
    <div id="preloader">
        <div class="spinner spinner-round"></div>
    </div>
    <!-- site header-->
    <?php if (!isset($_SESSION['user'])){ ?>

    <?php include 'header_beforelogin_home.php';?>

    <?php } else { ?>

    <?php include 'header_afterlogin_home.php';?>

    <?php } ?>

    <!-- <main body of the site> -->
    <main class="site-main">
        <section
            style="
                                                                                        background: #fbfbfb;">
            <div class="col-md-12 text-center bold" style="background-color:#333; color:white; padding:35px">
                <h1 class="" style=>
                    ₦
                    1,086,592
                </h1>
                <span>RAISED
                    FOR
                    CHARITY</span>
            </div>
        </section>

        <section>
            <div class="col-md-12 test-outer">
                <div class="col-md-4 test-box pointer">
                    <a href="products"><img src=/assets/img/ps3.jpg /></a>
                </div>
                <div class="col-md-4 test-box pointer">
                    <a href="products"><img src=/assets/img/ps4.jpg /></a>
                </div>
                <div class="col-md-4 test-box pointer">
                    <a href="products"><img src=/assets/img/xboxone.jpg /></a>
                </div>
                <div class="col-md-4 test-box pointer">
                    <a href="products"><img src=/assets/img/xbox360.jpg /></a>
                </div>
                <div class="col-md-4 test-box pointer">
                    <a href="products"><img src=/assets/img/switch.jpg /></a>
                </div>
                <div class="col-md-4 test-box pointer">
                    <a href="products"><img src=/assets/img/wii.jpg /></a>
                </div>
            </div>
        </section>

        <section>
            <div class="h-500 col-md-12 test-outer">
                <div class="col-sm-6 left-cat test-outer">
                    <div class="child ">
                        <a href="#x">Action
                            Games</a>
                    </div>

                </div>
                <div class="col-sm-6 test-outer">
                    <div class="block right-top-cat">
                        <div class="child ">
                            <a href="#x">Fighting
                                Games</a>
                        </div>
                    </div>
                    <div class="block right-bottom-cat">
                        <div class="child ">
                            <a href="#x">Adventure
                                Games</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="col-md-12 test-outer">
                <div class="p-relative pointer text-center">
                    <img src="/assets/img/deals.jpg" alt="Los Angeles" width="100%" height="100%" />
                    <div class="centered">
                        <h1>DEALS
                        </h1>
                        <p>"Checkout
                            our
                            all
                            new
                            deals
                            and
                            exclusive
                            offers"
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>

            <div class="col-md-12 container-fluid mt-30 pb-30">

                <h1 class="black text-center pb-30 bold">
                    NEWLY
                    ADDED
                </h1>
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
                                                        <img src="/assets/img/ps4/2K19.jpg" alt="Fifa 19" width="100%"
                                                            height="100%">
                                                    </div>
                                                    <div class="game-name">
                                                        <i class="fa fa-heart-o pointer" title="Add to wishlist"
                                                            data-toggle="modal" data-target="#wishlistModal"></i>
                                                        <p class="block2-name">NBA
                                                            2K19
                                                        </p>
                                                    </div>
                                                    <div class=" game-info" style="width: 100%;">
                                                        <div class="" style=" float: right">
                                                            <p class=" notice">
                                                                ₦17,999
                                                            </p>
                                                        </div>
                                                        <div class="add" style=" float: left">
                                                            <button class="game-button btn" data-toggle="modal"
                                                                data-target="#cartModal"><i></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2 new sports racing need-for-speed-payback recent">
                                                <div class=" game-box">
                                                    <div class="game-picture">
                                                        <img src="/assets/img/xbox1/nfsplayback.jpg"
                                                            alt="Need For Speed" width="100%" height="100%">
                                                    </div>
                                                    <div class="game-name">
                                                        <i class="fa fa-heart-o pointer" title="Add to wishlist"
                                                            data-toggle="modal" data-target="#wishlistModal"></i>
                                                        <p class="block2-name">NEED
                                                            FOR
                                                            SPEED:
                                                            PAYBACK
                                                        </p>
                                                    </div>
                                                    <div class=" game-info" style="width: 100%;">
                                                        <div class="" style=" float: right">
                                                            <p class=" notice">
                                                                ₦21,499
                                                            </p>
                                                        </div>
                                                        <div class="add" style=" float: left">
                                                            <button class="game-button btn" data-toggle="modal"
                                                                data-target="#cartModal"><i class=""></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-md-2 trade action adventure days-gone recent">
                                                <div class=" game-box">
                                                    <div class="game-picture">
                                                        <img src="/assets/img/ps4/daysgone.jpg" alt="Fifa 19"
                                                            width="100%" height="100%">
                                                    </div>
                                                    <div class="game-name">
                                                        <i class="fa fa-heart-o pointer" title="Add to wishlist"
                                                            data-toggle="modal" data-target="#wishlistModal"></i>
                                                        <p>DAYS
                                                            GONE
                                                        </p>
                                                    </div>
                                                    <div class=" game-info" style="width: 100%;">
                                                        <div class="" style=" float: right">
                                                            <p class=" notice">
                                                                EX
                                                            </p>
                                                        </div>
                                                        <div class="add" style=" float: left">
                                                            <a href="trade#ex" target="blank"><button
                                                                    class="game-button btn"><i></i></button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" col-md-2 used action transformers old">
                                                <div class=" game-box">
                                                    <div class="game-picture">
                                                        <img src="/assets/img/xbox360/transformers.jpg"
                                                            alt="Transformers" width="100%" height="100%">
                                                    </div>
                                                    <div class="game-name">
                                                        <i class="fa fa-heart-o pointer" title="Add to wishlist"
                                                            data-toggle="modal" data-target="#wishlistModal"></i>
                                                        <p>TRANSFORMERS:
                                                            REVENGE
                                                            OF
                                                            THE
                                                            FALLEN
                                                        </p>
                                                    </div>
                                                    <div class=" game-info" style="width: 100%;">
                                                        <div class="" style=" float: right">
                                                            <p class=" notice">
                                                                ₦7,499
                                                            </p>
                                                        </div>
                                                        <div class="add" style=" float: left">
                                                            <button class="game-button btn" data-toggle="modal"
                                                                data-target="#cartModal"><i></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="col-md-2 used adventure interactive-motion beyond-two-souls old">
                                                <div class=" game-box">
                                                    <div class="game-picture">
                                                        <img src="/assets/img/ps3/beyond.jpg" alt="Fifa 19" width="100%"
                                                            height="100%">
                                                    </div>
                                                    <div class="game-name ">
                                                        <i class="fa fa-heart-o pointer" title="Add to wishlist"
                                                            data-toggle="modal" data-target="#wishlistModal"></i>
                                                        <p>BEYOND
                                                            TWO
                                                            SOULS
                                                        </p>

                                                    </div>
                                                    <div class=" game-info" style="width: 100%;">
                                                        <div class="" style=" float: right">
                                                            <p class=" notice">
                                                                ₦4,499
                                                            </p>
                                                        </div>
                                                        <div class="add" style=" float: left">
                                                            <button class="game-button btn" data-toggle="modal"
                                                                data-target="#cartModal"><i class=""></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-2 new sport mariotennis recent">
                                                <div class=" game-box">
                                                    <div class="game-picture">
                                                        <img src="/assets/img/nintendo/mariotennis.jpg"
                                                            alt="Mario Tennis" width="100%" height="100%">
                                                    </div>
                                                    <div class="game-name">
                                                        <i class="fa fa-heart-o pointer" title="Add to wishlist"
                                                            data-toggle="modal" data-target="#wishlistModal"></i>
                                                        <p>MARIO
                                                            TENNIS
                                                        </p>

                                                    </div>
                                                    <div class=" game-info" style="width: 100%;">
                                                        <div class="" style=" float: right">
                                                            <p class=" notice">
                                                                ₦18,499
                                                            </p>

                                                        </div>
                                                        <div class="add" style=" float: left">
                                                            <button class="game-button btn" data-toggle="modal"
                                                                data-target="#cartModal"><i class=""></i></button>
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
    </main>

    <!-- <site footer> -->
    <?php include 'footer.php';?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/assets/js/animated-search-filter.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/carousel.js"></script>
    <script src="/assets/js/preloader.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script type="text/javascript">
    $('.pointer').on('click', function(e) {
        e.preventDefault();
        $(this).addClass('fa-heart');
        $(this).removeClass('fa-heart-o');
        $(this).off('click');
    });
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