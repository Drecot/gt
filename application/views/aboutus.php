<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">

    <title>GameTrade.ng | About Us</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico" />
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

        <section class="hero_area2">
            <div class="middle2 text-center" style=" padding: 10px;">
                <div class="">
                    <h1 style="    margin-bottom: 1.5rem;"> About Us</h1>

                    <h2> Let's tell you our story, where we are coming from, and where we are heading to</h2>
                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>

            </div>
        </section>

        <div id="like_button_container"></div>

        <section style=" background: white; padding-bottom: 100px; padding-top: 50px;">

            <div class="container  " style=" margin-bottom: 50px; ">

                <div class="col-sm-6" style=" text-align: left;">

                </div>


                <div class="col-sm-6 " style="  text-align: right;">
                    <h1 class="signature-red bold"> Our Story</h1>

                    <p style=" line-height: 2">GameTrade.ng started out as a random idea, trying to solve the problem of
                        an individual. That same idea now serves thousands of individuals in Nigeria.
                        We thought about how to make it easier for gamers in this part of the world to acquire games,
                        from the convenience of their homes and at a much cheaper price or possibly for free.
                        Yes for free! A lot of people dump games they are done playing in their houses, after buying
                        them for quite a lot of money. For hardcore gamers, it can take a day to complete a single disk.
                        Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu
                        facilisis, eu sodales lectus sagittis. Etiam pellentesque,
                        magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum,
                        turpis ut commodo efficitur, quam velit convallis ipsum,
                        et maximus enim ligula ac ligula. Vivamus tristique vulputate ultricies. Sed vitae ultrices
                        orci.</p>
                    <div class="bo13 p-l-29 m-l-9 p-b-10">
                        <p class="p-b-11">
                            Creativity is just connecting things. When you ask creative people how they did something,
                            they feel a little guilty because they didn't really do it, they just saw something. It
                            seemed obvious to them after a while.
                        </p>

                        <span class="s-text7">
                            - Steve Jobs
                        </span>
                    </div>
                </div>

            </div>


            <div class="container-fluid text-center" style=" background: #e6e6e6">

                <div class="hvr-grow col-sm-4  ">
                    <h4> We have over</h4>
                    <span class=" signature-red bold"> 500+ </span>
                </div>

                <div class="hvr-grow col-sm-4  ">


                    <h4> We have </h4>
                    <span class=" signature-red bold"> 1000+</span>

                </div>

                <div class="hvr-grow col-sm-4 ">
                    <h4> We've sold</h4>
                    <span class=" signature-red bold"> 2500+</span>

                </div>

            </div>

        </section>

    </main>

    <?php include 'footer.php';?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/assets/js/animated-search-filter.js"></script>
    <script src="/assets/js/custom.js"></script>
    <script src="/assets/js/carousel.js"></script>
    <script src="/assets/js/preloader.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>

</body>

</html>