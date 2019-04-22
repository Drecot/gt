<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">
    <title>GameTrade.ng | Signup</title>

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
        <section class="hero_area1">
            <div class="middle text-center" style=" padding: 10px;">
                <div class="">
                    <h1 style="    margin-bottom: 1.5rem;"> Create an Account</h1>
                    <h2> Partner with us by becoming a merchant, selling to our gigantous userbase</h2>
                </div>
                <div>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </section>
        <section style=" background: white; padding-bottom: 100px; padding-top: 50px;">
            <div>
                <form action="/exchange/process_register" method="post" class="signup-form-container">
                    <h1 style="font-size: 14px; text-align: center">Sign Up</h1>
                    <p style="text-align: center; color: brown">
                        for errors

                    </p>
                    <div class="form-group ">
                        <label for="firstname"><b>First Name</b></label>
                        <input id="firstname" type="text" placeholder="Enter First Name" name="firstname" required>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group ">
                        <label for="lastname"><b>Last Name</b></label>
                        <input id="lastname" type="text" placeholder="Enter Last Name" name="lastname" required>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group ">
                        <label for="email"><b>Email</b></label>
                        <input id="email" type="email" placeholder="Enter Email" name="email" required>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group ">
                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input id="number" type="tel" placeholder="Enter Phone Number" name="phonenumber" minlength="11"
                            maxlength="11" required>
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group ">
                        <label for="password"><b>Password</b></label>
                        <input class="pass" id="password" type="password" placeholder="Enter Password" name="password"
                            minlength="8" required>
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group ">
                        <p id="no_match" style="color: brown; text-align: center; display: none;">Passwords do not match
                        </p>
                        <label for="confirm_password"><b>Confirm Password</b></label>
                        <input class="pass" id="cpassword" type="password" placeholder="Confirm Password"
                            name="confirm_password" minlength="8" required>
                        <span class="help-block"></span>
                    </div>
                    <div style="    padding-bottom: 20px;margin-top: -20px;">
                        <p class="">
                            <input type="checkbox" placeholder="Confirm Password" name="psw" required>
                            I have read and accepted the <a class="brown" href="#xterms">terms and conditions</a>
                        </p>
                    </div>
                    <button disabled="true" id="execute" type="submit" class="btn">Sign Up</button>
                    <div class="text-center">
                        <p>Have an account? <a href="login" class="brown">Login here</a></p>
                    </div>
                </form>
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
    $('input').keyup(function() {
        if ($('#password').val() == $('#cpassword').val()) {
            $('#execute').css('color', 'red');
            $('#execute').removeAttr('disabled');
            $('#no_match').css('display', 'none');
        } else {
            $('#execute').css('color', 'white');
            $('#execute').attr('disabled', 'true');
            $('#no_match').css('display', 'block');
        }
    })
    </script>

</body>

</html>