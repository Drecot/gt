<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">

    <title>GameTrade.ng | Track your order</title>

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
        <div class="spinner spinner-round">
        </div>
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
                    <h1 style="    margin-bottom: 1.5rem;"> Track Order</h1>

                    <h2> Track the progress of your order up until delivery to your doorstep</h2>

                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Track Order</li>
                    </ul>
                </div>

            </div>
        </section>

        <section class="grey-map">

            <div class="track-outer text-center" id="track" style="display:block;">

                <div class="track-inner">

                    <h1>TRACK ORDER</h1>

                    <div class="track-2">
                        <div class="">
                            <input class="track" type="text" name="email" id="" title="Enter Tracking Number"
                                placeholder="Enter Tracking Number">
                        </div>
                        <div class="">
                            <button type="submit" title="Track Order" class="button"
                                onclick="toggle_visibility('track');toggle_visibility('tracking');">
                                <span><span>Track Order</span></span></button>
                        </div>
                    </div>

                </div>

            </div>

            <div class="track-page-outer text-center" id="tracking" style="display:none;">

                <div class="track-page-inner">

                    <h1>ORDER TRACKING: #AKJ6F</h1>

                    <div>
                        <ol class="progtrckr" data-progtrckr-steps="5">
                            <li class="progtrckr-done">Order Received</li>
                            <!--
 -->
                            <li class="progtrckr-done">Order Processing</li>
                            <!--
 -->
                            <li class="progtrckr-done">Quality Check</li>
                            <!--
 -->
                            <li class="progtrckr-todo">Shipped</li>
                            <!--
 -->
                            <li class="progtrckr-todo">Delivered</li>
                        </ol>
                    </div>

                    <div class="col-sm-12 down1">

                        <div class="col-sm-4 thick">

                            Shipped Via:<br> MAX.NG

                        </div>

                        <div class="col-sm-4 thick">

                            Status:<br> Checking Quality

                        </div>

                        <div class="col-sm-4 thick">

                            Expected Date:<br> 21-SEP-2018

                        </div>

                    </div>

                    <div class="">
                        <button type="submit" title="Track Order" class="button1"
                            onclick="toggle_visibility('track');toggle_visibility('tracking');">
                            <span><span>Track Another Order</span></span></button>
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