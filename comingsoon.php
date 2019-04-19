<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameTrade Nigeria</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/hover-min.css" rel="stylesheet">
</head>

<body>

    <style>
    body {

        background-color: #ffffff !important;
    }

    .middle1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
    }

    .middle2 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        width: 70%;

    }



    hr {
        margin: auto;
        width: 40%;
        color: #ccc;
        background-color: #ccc;
    }

    .bottom {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        margin: 0 auto;
        font-size: 12px;

        text-align: center;

    }

    .top {
        position: absolute;

        left: 0;
        right: 0;
        margin: 0 auto;
        padding: 0 0;
        text-align: center;

    }

    .r {
        max-width: 100%;
        height: auto;
    }

    input#newsletter {
        width: 100%;
        padding: 8px;
        margin: 5px 0 10px 0;
        border: 1px solid #ccc;
    }

    button.button {
        background: brown;
        margin-bottom: 10px;
        border-radius: 1px;
    }

    button,
    html [type=button],
    [type=reset],
    [type=submit] {
        -webkit-appearance: button;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .pt-30 {
        padding-top: 30px;
    }

    * {
        box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column {
        position: relative;
        float: left;
        width: 50%;
        padding: 10px;
        height: 100%;
        /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    #clockdiv {

        color: #000;
        display: inline-block;
        font-weight: 100;
        text-align: center;
        font-size: 30px;
        -ms-transform: skewX(-20deg);
        -webkit-transform: skewX(-20deg);
        transform: skewX(-20deg);
    }

    #clockdiv>div {
        padding: 20px;
        border-radius: 3px;
        background: white;
        display: inline-block;
        margin-left: 5px;
        margin-right: 5px;
    }

    #clockdiv div>span {
        padding: 15px;
        border-radius: 3px;

    }

    @media only screen and (max-width: 992px) {
        .column {
            width: 100%;
        }
    }
    </style>

    <main class="site-main">

        <section>
            <div class="row">
                <div class="column" style="background-color:brown;color:white">
                    <div class="middle1">


                        <h1 style="font-size:50px;text-transform:uppercase">We are launching soon!</h1>

                        <div class="news-content-inner col-md-12 pt-30">
                            <div id="clockdiv">
                                <div>
                                    <span id="days">days</span>
                                    <div class="smalltext">d</div>
                                </div>
                                <div>
                                    <span id="hours">hours</span>
                                    <div class="smalltext">h</div>
                                </div>
                                <div>
                                    <span id="minutes">minutes</span>
                                    <div class="smalltext">m</div>
                                </div>
                                <div>
                                    <span id="seconds">seconds</span>
                                    <div class="smalltext">s</div>
                                </div>
                            </div>
                            <p id="demo">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="middle2">
                        <img class="img-fluid r" src="assets/img/logo.png" style="text-align: center;">
                        <div class="news-content-inner col-md-12 pt-30">
                            <p>Fill in your details below, and we would let you know as soon as we launch</p>
                            <p style="text-align: center; color: brown">
                                <?php if ($this->session->has_userdata('error'))
			                     { 
			                     	echo $this->session->userdata('error');
			                     	$this->session->unset_userdata('error');
			                     }
			                     ?>

                            </p>
                            <form action="/exchange/process_subscribe_newsletter" method="post" class="input-box">
                                <input type="text" name="firstname" id="newsletter" title="First Name"
                                    placeholder="Enter First Name" required>
                                <input type="text" name="lastname" id="newsletter" title="Last Name"
                                    placeholder="Enter Last Name">
                                <input type="text" name="email" id="newsletter" title="Email" placeholder="Enter Email"
                                    required>
                                <button type="submit" title="Sign up for our newsletter" class="button">
                                    <span><span>Notify Me</span></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




        </section>

    </main>
    <footer class='bottom'>

        <p>
            <div style="display:inline-block;color:white">&copy; 2019 GAMETRADE NIGER</div>
            <div style="display:inline-block;">IA | ALL RIGHTS RESERVED</div>
        </p>

    </footer>
    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("May 1, 2019 00:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>