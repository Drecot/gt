<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">
    <title>GameTrade.ng | Merchant Login</title>
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

    <div class="container-fluid main-signin limiter" style="width:100%;">
        <div class="container-login100">
            <div class="col-md-4 centered">
                <div class="container-fluid text-center">
                    <img id="logo-main" src="/assets/img/logo.png" width="200" alt="Logo Thing main logo">
                </div>
                <h1 style="font-size: 26px; text-align: center">MerchantHQ</h1>
                <form class="signup-form-container" action="/exchange/process_login" method="post">
                    <div class="out-box">
                        <h1 style="font-size: 14px; text-align: center">Log In</h1>
                        <p style="text-align: center; color: brown">
                            <?php if ($this->session->has_userdata('error'))
			                     { 
			                     	echo $this->session->userdata('error');
			                     	$this->session->unset_userdata('error');
			                     }
			                     ?>

                        </p>
                        <div class="form-group col-md-12">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required>
                        </div>
                        <div class="form-group col-md-12" style=" margin-bottom:0px;">
                            <label for="password"><b>Password</b></label>
                            <input style=" margin-bottom:0px;" type="password" placeholder="Enter Password"
                                name="password" minlength="8" required>
                        </div>
                        <div class="">
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
                        <div class="col-md-12" style=" margin-top:20px;">
                            <button type="submit" class="btn">Login</button>
                        </div>
                        <div class="text-center">
                            <p>Need an account? <a href="/exchange/signupmerchant" class="brown">Sign up here</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

</body>

</html>