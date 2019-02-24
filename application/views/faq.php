<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">

    <title>GameTrade.ng | Frequently Asked Questions</title>

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

        <section class="hero_area2">
            <div class="middle2 text-center" style=" padding: 10px;">
                <div class="">
                    <h1 style="    margin-bottom: 1.5rem;"> Frequently Asked Questions</h1>

                </div>

                <div>
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li>FAQs</li>
                    </ul>
                </div>

            </div>
        </section>

        <section>

            <div class="container gap">
                <div class=" col-sm-12 flex w-full mb-4">
                    <div class="faq-search">
                        <input type="text" id="faqInput" onkeyup="myFunction()"
                            placeholder="Search on a topic e.g 'order'  'delivery'  'return'  'exchange'  'used' .... ">
                    </div>

                </div>

                <div class=" col-sm-12 flex w-full mb-4">
                    <div class="col-sm-6 question-header">
                        <p>Questions</p>
                    </div>
                    <div class="col-sm-6 answer-header w-6">
                        <p>Answers</p>
                    </div>
                </div>

                <div class="col-sm-12 flex w-full mb-4">
                    <div class=" col-sm-6 light-grey mr4">
                        <p>
                            Do you really do same day delivery?
                        </p>
                    </div>
                    <div class=" col-sm-6 light-grey w-6">
                        <p>
                            Yes we really do same day delivery, but only for orders placed before 12PM
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 flex w-full mb-4">
                    <div class="light-grey mr4">
                        <p>
                            Will I receive the same product that I see in the photo?
                        </p>
                    </div>
                    <div class="light-grey w-6">
                        <p>
                            Yes, you would receive the same product that you see in the photo, otherwise it would be
                            stated, like in the case of used games not in the original casing.
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 flex w-full mb-4">
                    <div class="light-grey mr4 ">
                        <p>
                            What should I do if I receive the wrong order?
                        </p>
                    </div>
                    <div class="light-grey w-6">
                        <p>
                            In the unlikely case you were to receive an item that you did not order, please contact our
                            customer service on <a style="color:brown; text-decoration: none" href="tel:+2348159827634">
                                +234 815 982 7634</a> to rectify the issue
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 flex w-full mb-4">
                    <div class="light-grey mr4">
                        <p>
                            Where can I receive my order?
                        </p>
                    </div>
                    <div class="light-grey w-6">
                        <p>
                            Your order can be sent to an address selected by you (home, work, etc. - not a PO Box)
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 flex w-full mb-4">
                    <div class="light-grey mr4">
                        <p>
                            How long will my order take to arrive?
                        </p>
                    </div>
                    <div class="light-grey w-6">
                        <p>
                            Standard deliveries take 1 to 2 working days.
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 flex w-full mb-4">
                    <div class="light-grey mr4">
                        <p>

                            How much do I pay for delivery service?
                        </p>
                    </div>
                    <div class="light-grey w-6">
                        <p>
                            Delivery within Lagos Mainland ranges from <span style="color:brown">₦500 -
                                ₦1,500.00</span>, while deliveries to Lagos Island ranges from <span
                                style="color:brown">₦1,500 - ₦2,500.00</span>.
                        </p>

                        <p> Please note that if there is a toll fare in your region it would be added to your bill on
                            checkout.
                        </p>

                    </div>
                </div>


                <div class="col-sm-12 flex w-full mb-4">
                    <div class="light-grey mr4">
                        <p>
                            How long do I have to return an item?
                        </p>
                    </div>
                    <div class="light-grey w-6">
                        <p>
                            Unfortunately returns are not accepted once the seal has been broken, however items that
                            have not been used and are still sealed in original wrapping can be exchanged within 7 days
                            from date of purchase for an item of similar value or higher with the balance paid.
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 flex w-full mb-4">
                    <div class="light-grey mr4">
                        <p>
                            Are used games working and in good condition?
                        </p>
                    </div>
                    <div class="light-grey w-6">
                        <p>
                            Yes, all used games listed on our site are fully guaranteed to work and are covered by
                            guarantee. Please note however some used games may not have the original game cover
                        </p>


                    </div>
                </div>

                <div class="col-sm-12 flex w-full mb-4">
                    <div class="light-grey mr4">
                        <p>
                            Can I pay cash on delivery?
                        </p>
                    </div>
                    <div class="light-grey w-6">
                        <p>
                            Yes, you can pay with cash or by POS on delivery
                        </p>
                    </div>
                </div>

                <div class="col-sm-12 flex w-full mb-4">
                    <div class="light-grey mr4">
                        <p>
                            Can you guarantee the perfect working condition of exchange games?
                        </p>
                    </div>
                    <div class="light-grey w-6">
                        <p>
                            As much a we would love to give a positive answer to this question,
                            games for exchange are not kept in our possession but rather, in possession
                            of the individual owners, therefore we cannot guarantee a 100% the working condition
                            of these games.
                        </p>
                        <p>
                            However, we have put measures in place to try and ensure that games put up for exchange are
                            in their perfect working
                            conditions.
                        </p>
                        <p>
                            We at the same time, employ all users to only put up games in their perfect working
                            conditions.
                        </p>
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