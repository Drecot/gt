<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">

    <title>GameTrade.ng - Trade</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/infinite-slider.css" rel="stylesheet">
    <link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet">
    <link href="style1.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/faith's.css">
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">

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

        <section class="hero_area1">
            <div class="middle text-center" style=" padding: 10px;">
                <div class="">
                    <h1 style="    margin-bottom: 1.5rem;"> Exchange Your Used Game</h1>

                    <h2> Exchange your used game with another user for free</h2>


                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Exchange</li>
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
                                                <img src="img/xbox1/fifa17.jpg" alt="Fifa 17" width="100%"
                                                    height="100%">
                                            </div>
                                            <div class="game-name1">
                                                <p>FIFA 17</p>
                                            </div>

                                        </div>
                                    </div>




                                </div>

                                <div class="item">

                                    <div class=" " style="margin: auto; float: none;">
                                        <div class="  game-box1">
                                            <div class="game-picture1">
                                                <img src="img/xbox1/cod-legacy.jpg" alt="Cod-Legacy" width="100%"
                                                    height="100%">
                                            </div>
                                            <div class="game-name1">
                                                <p>CALL OF DUTY: LEGACY EDITION</p>
                                            </div>

                                        </div>
                                    </div>



                                </div>

                                <div class="item">
                                    <div class=" " style="margin: auto; float: none;">
                                        <div class=" game-box1">
                                            <div class="game-picture1">
                                                <img src="img/xbox1/rainbowsix.jpg" alt="Rainbow Six" width="100%"
                                                    height="100%">
                                            </div>
                                            <div class="game-name1">
                                                <p>RAINBOW SIX SEIGE</p>
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
                                data-target="#addGame"
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
                                <img src="img/xbox1/nfsplayback.jpg" alt="Need For Speed" width="100%" height="100%">
                            </div>
                            <div class="game-name1">
                                <p>NEED FOR SPEED: PAYBACK</p>
                            </div>

                        </div>
                    </div>

                </div>


                <!-- Modal -->
                <div class="modal fade" id="addGame" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-center">Add Another Game To Your Inventory</h4>
                            </div>
                            <div class="modal-body text-center">
                                <p>This is a small modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
    <script src="js/animated-search-filter.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <script>
    $(document).ready(function() {
        $("body").mouseup(function(e) {
            var subject = $("#myForm");

            if (e.target.id !== subject.attr('id') && !subject.has(e.target).length) {
                subject.fadeOut();
            }

        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $("body").mouseup(function(e) {
            var subject = $("#myCart");

            if (e.target.id !== subject.attr('id') && !subject.has(e.target).length) {
                subject.fadeOut();
            }

        });
    });
    </script>



    <script>
    $(document).ready(function() {
        $("body").mouseup(function(e) {
            var subject = $("#myWishlist");

            if (e.target.id !== subject.attr('id') && !subject.has(e.target).length) {
                subject.fadeOut();
            }

        });
    });
    </script>


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