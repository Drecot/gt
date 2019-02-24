<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">
    <title>GameTrade.ng | Login</title>
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
        <section class="hero_area1">
            <div class="middle text-center" style=" padding: 10px;">
                <div class="">
                    <h1 style="    margin-bottom: 1.5rem;"> Log in to your account</h1>
                    <h2> Partner with us by becoming a merchant, selling to our gigantous userbase</h2>
                </div>
                <div>
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li>Log In</li>

                    </ul>

                </div>
            </div>
        </section>
        <section style=" background: white; padding-bottom: 100px; padding-top: 50px;">
            <div>
                <form class="signup-form-container" action="/exchange/process_login" method="post">
                    <h1 style="font-size: 14px; text-align: center">Log In</h1>
                    <p style="text-align: center; color: brown">
                        <?php if ($this->session->has_userdata('error'))
			                     { 
			                     	echo $this->session->userdata('error');
			                     	$this->session->unset_userdata('error');
			                     }
			                     ?>

                    </p>
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group ">
                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" minlength="8" required>
                        <span class="help-block"></span>
                    </div>
                    <div class="row" style="margin-top:-20px; padding-top:-20px; margin-bottom:20px;">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="">
                                <input type="checkbox" placeholder="Confirm Password" name="psw">
                                Remember me
                            </p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="" style="float:right;">
                                <a class="brown" href="resetpassword">Forgot Password?</a>
                            </p>
                        </div>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="text-center">
                        <p>Need an account? <a href="/exchange/signup" class="brown">Sign up here</a></p>
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