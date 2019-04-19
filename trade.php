<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">

    <title>GameTrade.ng | Trade you game</title>

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
                    <h1 style="    margin-bottom: 1.5rem;"> Trade Your Used Game</h1>
                </div>
                <div>
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li>Trade</li>
                    </ul>
                </div>

            </div>
        </section>

        <section style=" background: white; padding-bottom: 100px; ">

            <div id="ex" class=" container ex-box" style="background: #e6e6e6;">
                <div class=" col-sm-6" style="margin: auto;  ">

                    <div class="" style="margin: auto">

                        <div>
                            <h3 class=" text-center"> Browse Your Inventory</h3>

                        </div>
                        <div id="myCarousel" class="carousel slide" style="margin: auto">


                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class=" " style="margin: auto; float: none;">
                                        <div class="game-box1">
                                            <div class="game-picture1">
                                                <img src="assets/img/xbox1/watchdogs.jpg" alt="Watch Dogs" width="100%"
                                                    height="100%">
                                            </div>
                                            <div class="game-name1">
                                                <p class="block2-name">WATCH DOGS</p>
                                                <h6 class="block2-name" style="font-size:9px">exchange .
                                                    PS4</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class=" " style="margin: auto; float: none;">
                                        <div class="game-box1">
                                            <div class="game-picture1">
                                                <img src="assets/img/ps4/MWR.jpg" alt="Fifa 19" width="100%"
                                                    height="100%">
                                            </div>
                                            <div class="game-name1">
                                                <p class="block2-name">WATCH DOGS</p>
                                                <h6 class="block2-name" style="font-size:9px">exchange .
                                                    PS4</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <div class=" text-center">

                            <button type="submit" title="Add Another Game" class="button" data-toggle="modal"
                                data-target="#addNewProduct"
                                style=" width: 50%; background: black; opacity: 0.8; border-radius: 100px ">
                                <span><span>Add Another Game</span></span></button>
                        </div>

                    </div>


                </div>


                <div class=" col-sm-6 " style="margin: auto;">
                    <div>
                        <h3 class=" text-center"> Disk To Be Requested</h3>

                    </div>
                    <div class="  " style="margin: auto; float: none;">
                        <div class=" game-box1">
                            <div class="game-picture1">
                                <img src="assets/img/xbox1/nfsplayback.jpg" alt="Need For Speed" width="100%"
                                    height="100%">
                            </div>
                            <div class="game-name1">
                                <p>NEED FOR SPEED: PAYBACK</p>
                            </div>

                        </div>
                    </div>

                </div>


                <!-- Modal -->
                <div class="modal fade" id="addNewProduct" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-center">Add New Product</h4>
                            </div>
                            <div class="modal-body ">
                                <form action="/exchange/process_addProduct" method="post" class="signup-form-container">
                                    <div class="form-group ">
                                        <label for="picture"><b>Product Picture</b></label>
                                        <input id="nid-docs" type="file" size="30" name="picture" id="file-upload">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label for="productname"><b>Product Name</b></label>
                                        <input type="text" placeholder="e.g SONY GRAND THEFT AUTO V" name="productname"
                                            required>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label for="merchantid"><b>Merchant ID</b></label>
                                        <input type="text" placeholder="e.g 2" name="merchantid" required>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label for="categoryid"><b>Category</b></label>
                                        <select class="diff" id="categoryid" name="categoryid" required>
                                            <option value="">SELECT A CATEGORY</option>
                                            <option value="3">Exchange</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label for="platform"><b>Platform</b></label>
                                        <select class="diff" id="platform" name="platform" required>
                                            <option value="">SELECT A PLATFORM</option>
                                            <option value="PS3">PS3</option>
                                            <option value="PS4">PS4</option>
                                            <option value="XBOX ONE">XBOX ONE</option>
                                            <option value="XBOX 360">XBOX 360</option>
                                            <option value="NINTENDO SWITCH">NINTENDO SWITCH</option>
                                            <option value="NINTENDO WII">NINTENDO WII</option>
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group ">
                                        <label for="quantity"><b>Quantity</b></label>
                                        <input type="text" placeholder="Enter Quantity" name="quantity" value="1"
                                            readonly>
                                        <span class="help-block"></span>
                                    </div>
                                    <p class="">
                                        <input type="checkbox" placeholder="Confirm Password" name="psw" required>
                                        I have read and accepted the <a class="brown" href="#xterms">terms
                                            and conditions</a>
                                    </p>
                                    <button type="submit" class="btn">Add Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="text-center">

                <button type="submit" title="Subscribe" class="button " style=" width: 40%; margin-top: 50px; ">
                    <span><span>Request Exchange</span></span></button>
            </div>

        </section>

    </main>

    <!-- <site footer> -->
    <?php include 'footer.php';?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/animated-search-filter.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/preloader.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>

</body>

</html>