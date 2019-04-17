<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">
    <title>GameTrade.ng | Become a Merchant</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/infinite-slider.css" rel="stylesheet">
    <link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/faith's.css">
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
</head>

<body>
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
                    <h1 style="    margin-bottom: 1.5rem;"> Partner with us</h1>
                    <h2> Partner with us by becoming a merchant, selling to our gigantous userbase</h2>
                </div>
                <div>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Partner</li>
                    </ul>
                </div>
            </div>
        </section>
        <section style=" background: white; padding-bottom: 100px; padding-top: 50px;">
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

</body>

</html>