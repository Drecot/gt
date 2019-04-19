<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">
    <title>GAMETRADE - Products</title>
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

    <!-- <main body of the site> -->
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
                    </ul>
                </div>

            </div>
        </section>

        <section style=" background: #fbfbfb; margin-top:100px;">
            <div class="col-md-2">
                <div class="adverts">
                    <a href="#ad1">
                        <img src="assets/img/ad1.jpg" height="100%" width="100%" alt="Reference">
                    </a>
                </div>
            </div>

            <div class="col-md-8">
                <!-- <product listing> -->
                <div class="container">

                    <!-- search filters on the left -->
                    <div class="col-md-3">
                        <div class="box ">
                            <!-- <filter toggle show/hide> -->
                            <div id="chng" onclick="toggle_visibility('myFilter');">
                                <h2 class="active text-center" style=" font-size: 20px"> FILTERS <span
                                        class="glyphicon glyphicon-chevron-down"
                                        onclick="toggle_visibility('myFilter');"></span></h2>
                            </div>
                            <!-- <Filter body> -->
                            <div id='myFilter'>
                                <form action="/action_page.php" class="search-filter">
                                    <!-- <searchbox> -->
                                    <div class="cd-filter-block" id="cg" style=" padding-top: 20px;">
                                        <h3 onclick="toggle_visibility('cd-filter-content');">Search</h3>
                                        <div class="cd-filter-content" id="cd-filter-content" style="display: block;">
                                            <input type="search" id="myInput" placeholder="Try Fifa...">
                                        </div>
                                        <!-- cd-filter-content -->
                                    </div>
                                    <!-- <filter  price> -->
                                    <div style=" padding-top: 20px;">
                                        <h3>Price</h3>
                                        <div class="slidecontainer">
                                            <input type="range" min="3000" max="30000" value="26000" class="slider"
                                                id="myRange">
                                            <p>Value: ₦<span id="demo"></span></p>
                                        </div>
                                    </div>
                                    <!-- <filter sortby> -->
                                    <div style=" padding-top: 20px;">
                                        <h3>Sort By</h3>
                                        <!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
                                        <div class="custom-select">
                                            <select>
                                                <option value="0">Sort By:</option>
                                                <option value="1" onclick="filterSelection('recent')">Most Recent
                                                </option>
                                                <option value="2">Price: Low to High</option>
                                                <option value="3">Price: High to Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <filter category> -->
                                    <div style=" padding-top: 20px;">
                                        <h3>Category</h3>
                                        <label class="genre">All
                                            <input type="radio" checked="checked" name="category"
                                                onclick="filterSelection('all')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Games
                                            <input type="radio" name="category" onclick="filterSelection('games')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Consoles
                                            <input type="radio" name="category" onclick="filterSelection('consoles')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Accessories
                                            <input type="radio" name="category"
                                                onclick="filterSelection('accessories')">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <!-- <filter category> -->
                                    <div style=" padding-top: 20px;">
                                        <h3>Genre</h3>
                                        <label class="genre">All
                                            <input type="radio" checked="checked" name="radio"
                                                onclick="filterSelection('all')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Action
                                            <input type="radio" name="radio" onclick="filterSelection('action')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Adventure
                                            <input type="radio" name="radio" onclick="filterSelection('adventure')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Fighting
                                            <input type="radio" name="radio" onclick="filterSelection('fighting')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Horror
                                            <input type="radio" name="radio" onclick="filterSelection('horror')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Interactive Motion
                                            <input type="radio" name="radio"
                                                onclick="filterSelection('interactive-motion')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Racing
                                            <input type="radio" name="radio" onclick="filterSelection('racing')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Sports
                                            <input type="radio" name="radio" onclick="filterSelection('sports')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Survival
                                            <input type="radio" name="radio" onclick="filterSelection('survival')">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <!-- <filter platform> -->
                                    <div style=" padding-top: 20px;">
                                        <h3>Platform</h3>
                                        <label class="platform">All
                                            <input type="radio" checked="checked" name="platform"
                                                onclick="filterSelection('all')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="platform">PS2
                                            <input type="radio" name="platform" onclick="filterSelection('ps2')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="platform">PS3
                                            <input type="radio" name="platform" onclick="filterSelection('ps3')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="platform">PS4
                                            <input type="radio" name="platform" onclick="filterSelection('ps4')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="platform">XBOX ONE
                                            <input type="radio" name="platform" onclick="filterSelection('xboxone')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="platform">XBOX 360
                                            <input type="radio" name="platform" onclick="filterSelection('xbox360')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="platform">NINTENDO SWITCH
                                            <input type="radio" name="platform"
                                                onclick="filterSelection('nintendoswitch')">
                                            <span class=" checkmark"></span>
                                        </label>
                                        <label class="platform">NINTENDO WII
                                            <input type="radio" name="platform"
                                                onclick="filterSelection('nintendowii')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="platform">NINTENDO 3DS
                                            <input type="radio" name="platform"
                                                onclick="filterSelection('nintendo3ds')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="platform">PLAYSTATION VITA
                                            <input type="radio" name="platform" onclick="filterSelection('psvita')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="platform">PLAYSTATION PORTABLE (PSP)
                                            <input type="radio" name="platform" onclick="filterSelection('psp')">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <products display from console tab selection> -->
                    <div class="col-md-9">
                        <!-- <filter for new/used game> -->
                        <div class=" text-center" id="myBtnContainer">
                            <button class="btn-style active" onclick="filterSelection('all')"> Show all</button>
                            <button class="btn-style" onclick="filterSelection('new')"> New</button>
                            <button class="btn-style" onclick="filterSelection('used')"> Used</button>
                            <button class="btn-style" onclick="filterSelection('trade')"> Exchange</button>
                        </div>
                        <!-- <ps4 products> -->
                        <div>
                            <br>
                            <div class="row " id="users">
                                <div class="col-md-3 filterDiv new sport mariotennis recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="assets/img/nintendo/mariotennis.jpg" alt="Mario Tennis"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <i class="fa fa-heart-o wishlistpointer" title="Add to wishlist"
                                                data-toggle="modal" data-target="#wishlistModal"></i>
                                            <p class="block2-name">MARIO TENNIS</p>
                                            <h6 class="block2-name" style="font-size:9px">new . NINTENDO SWITCH
                                            </h6>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦18,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn" data-toggle="modal"
                                                    data-target="#cartModal"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action killzone3 old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="assets/img/ps3/killzone3.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <i class="fa fa-heart-o wishlistpointer" title="Add to wishlist"
                                                data-toggle="modal" data-target="#wishlistModal"></i>
                                            <p class="block2-name">KILLZONE 3</p>
                                            <h6 class="block2-name" style="font-size:9px">used . PS3
                                            </h6>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦5,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn" data-toggle="modal"
                                                    data-target="#cartModal"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv new sports nba2k19 recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="assets/img/ps4/2K19.jpg" alt="Fifa 19" width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <i class="fa fa-heart-o wishlistpointer" title="Add to wishlist"
                                                data-toggle="modal" data-target="#wishlistModal"></i>
                                            <p class="block2-name">NBA 2K19</p>
                                            <h6 class="block2-name" style="font-size:9px">new . PS4
                                            </h6>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦17,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn" data-toggle="modal"
                                                    data-target="#cartModal"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action ghost-recon old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="assets/img/ps4/ghst.jpg" alt="Fifa 19" width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <i class="fa fa-heart-o wishlistpointer" title="Add to wishlist"
                                                data-toggle="modal" data-target="#wishlistModal"></i>
                                            <p class="block2-name">GHOST RECON: WILDLANDS</p>
                                            <h6 class="block2-name" style="font-size:9px">used . PS4
                                            </h6>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦7,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn" data-toggle="modal"
                                                    data-target="#cartModal"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action call-of-duty-infinite-warfare recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="assets/img/ps4/COD.jpg" alt="Fifa 19" width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <i class="fa fa-heart-o wishlistpointer" title="Add to wishlist"
                                                data-toggle="modal" data-target="#wishlistModal"></i>
                                            <p class="block2-name">CALL OF DUTY: INFINITE WARFARE</p>
                                            <h6 class="block2-name" style="font-size:9px">used . PS4
                                            </h6>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦3,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn" data-toggle="modal"
                                                    data-target="#cartModal"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv new sports racing need-for-speed-payback recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="assets/img/xbox1/nfsplayback.jpg" alt="Need For Speed"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <i class="fa fa-heart-o wishlistpointer" title="Add to wishlist"
                                                data-toggle="modal" data-target="#wishlistModal"></i>
                                            <p class="block2-name">NEED FOR SPEED: PAYBACK</p>
                                            <h6 class="block2-name" style="font-size:9px">new . XBOX ONE
                                            </h6>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦21,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn" data-toggle="modal"
                                                    data-target="#cartModal"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-3 filterDiv trade action adventure days-gone recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="assets/img/ps4/daysgone.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <i class="fa fa-heart-o wishlistpointer" title="Add to wishlist"
                                                data-toggle="modal" data-target="#wishlistModal"></i>
                                            <p class="block2-name">DAYS GONE</p>
                                            <h6 class="block2-name" style="font-size:9px">exchange . PS4
                                            </h6>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">EX</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <a href="trade.php#ex" target="blank"><button
                                                        class="game-button btn"><i></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-3 filterDiv trade action hitman recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="assets/img/xbox360/hitman.jpg" alt="Hitman" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <i class="fa fa-heart-o wishlistpointer" title="Add to wishlist"
                                                data-toggle="modal" data-target="#wishlistModal"></i>
                                            <p class="block2-name">HITMAN: BLOOD MONEY</p>
                                            <h6 class="block2-name" style="font-size:9px">exchange . XBOX 360
                                            </h6>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">EX</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <a href="trade.php#ex" target="blank"><button
                                                        class="game-button btn"><i></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-2">
                <div class="adverts">
                    <a href="#ad2">
                        <img src="assets/img/ad2.jpg" height="100%" width="100%" alt="Reference">
                    </a>
                </div>
            </div>
        </section>
    </main>

</body>

<!-- <site footer> -->
<?php include 'footer.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/js/animated-search-filter.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/carousel.js"></script>
<script src="assets/js/preloader.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
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