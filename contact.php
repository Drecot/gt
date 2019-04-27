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
        <section class="hero_area2">
            <div class="middle2 text-center" style=" padding: 10px;">
                <div class="">
                    <h1 style="    margin-bottom: 1.5rem;"> Contact Us</h1>

                    <h2> How can we help?</h2>
                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">Help</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>

            </div>
        </section>

        <section style=" background: white; padding-bottom: 100px; padding-top: 50px;">

            <div class="container  " style=" margin-bottom: 50px; ">

                <div class="col-sm-6 ">

                    <div class="grey-map"></div>
                </div>


                <div class="col-sm-6 " style="  text-align: left;">
                    <h1 class="signature-red bold"><span class="glyphicon glyphicon-send"></span> Contact Us</h1>

                    <form class="signup-form-container" role="form" method="post" action="contact.php">
                        <div class="form-group">
                            <label for="fullname"><b>Full Name</b></label>
                            <input type="text" placeholder="Enter Full Name" name="fullname" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="subject"><b>Subject</b> </label> <br>
                            <select class="diff" id="businesstype" name="subject" value="" oninput="this.className = ''"
                                required="">
                                <option value="" disabled="disabled" selected="selected">--None--</option>
                                <option value="I want to confirm my order">I want to confirm my order</option>
                                <option value="I want to cancel my order">I want to cancel my order</option>
                                <option value="I have a Payment Issue" id="paymentcontact">I have a Payment Issue
                                </option>
                                <option value="I want to track my order">I want to track my order</option>
                                <option value="I want to return my order" id="">I want to return my order</option>
                                <option value="I want to track my return / refund request" id="">I want to track my
                                    return / refund request</option>
                                <option value="I have some other request" id="othercontact">I have some other request
                                </option>
                            </select>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="message"><b>Message</b></label>
                            <textarea rows="4" name="message" placeholder="How can we help?" required></textarea>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">

                            <input id=" submit" name="submit" type="submit" value="Send" class="btn">

                        </div>
                </div>

                <div class="form-group">
                    <div class=" col-sm-10 col-sm-offset-1" align="center" style=" padding-bottom: 10px">
                        <?php echo $result; ?>
                    </div>
                </div>
                </form>
            </div>

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