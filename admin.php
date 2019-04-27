<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">
    <title>GameTrade.ng | Admin</title>
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

<div class="container-fluid sidenav">

    <!-- <div class="row container-fluid header" style="padding-top:50px; padding-bottom:50px">
                                <img src="assets/img/logo.png" width="100%" height="100%"  alt="Reference">
                        </div> -->

    <div class="row container-fluid header user-info" style="padding-top:10px; padding-bottom:30px">
        <div class="image">
            <img src="assets/img//user.png" width="48" height="48" alt="User">
        </div>
        <div class="info-container">
            <div class="name bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome Back,</div>
            <div class="name bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kennedy
                Izuegbu</div>
            <div class="email">kennedy@dreacot.com</div>
        </div>
    </div>

    <div class="row menu">
        <button class="dropdown-btn active"><i class="fa fa-dashboard"></i> Dashboard
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container" style="display: block;">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>

        <a href="transactions">
            <i class="fa fa-line-chart"></i> Product List
        </a>

        <a href="transactions">
            <i class="fa fa-line-chart"></i> Orders
        </a>

        <a href="receipts">
            <i class="fa fa-download"></i> Customers
        </a>

        <a href="receipts">
            <i class="fa fa-download"></i> Merchants
        </a>

        <a href="tickets">
            <i class="fa fa-ticket"></i> Analytics
        </a>

        <a href="tickets">
            <i class="fa fa-ticket"></i> Chat <span class="label-count">2</span>
        </a>

        <a href="support">
            <i class="fa fa-envelope"></i> Support
        </a>
    </div>


    <div class="row logout">
        <a href="#logout">
            <i class="fa fa-sign-out"></i> Logout
        </a>
    </div>

</div>



<div class="container-fluid main">
    <header class="site-header">
        <!-- <main class="site-main"> -->
        <div>
            <nav class="navbar navbar-default" id="title">
                <div class="container-fluid">



                    <a href="#x" class=" navbar-brand " style="width: 50px; margin-top: 30px;">
                        <div class="menu-switcher-pro">
                            <button type="button" id="sidebarCollapse"
                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </a>

                    <!-- the search container -->
                    <div class="search-container col-md-8">
                        <form class="search" action="/action_page.php">
                            <input class="" type="text" placeholder="SEARCH ANY GAME..." name="search">
                            <button type="submit" class="bold"><i class=""></i>SEARCH</button>
                        </form>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-navbar-collapse">

                        <ul class="nav navbar-nav main-navbar-nav">

                            <li><a href="#xcart" onclick="toggle_visibility('myCart');"><i class="fa fa-envelope fa-2x"
                                        aria-hidden=" true"></i>
                                    <span class="header-icons-noti-top-aft">2</span></a></li>

                            <div class="form-popup" id="myCart">
                                <ul class="menu" style="overflow: hidden; width: auto;">
                                    <li>
                                        <a href="javascript:void(0);" class=" waves-effect waves-block">
                                            <div class="icon-circle bg-light-green">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <div class="menu-info">
                                                <h3>John Doe</h3>
                                                <h4>This project is due today</h4>
                                                <p>
                                                    <i class="fa fa-clock-o"></i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <li><a href="#xcart" onclick="toggle_visibility('myNotification');"><i
                                        class="dis fa fa-bell fa-2x" aria-hidden=" true"></i><span
                                        class=" header-icons-noti-noti">1</span></a>
                            </li>
                            <!-- /.navbar-collapse -->

                            <div class="notification-popup" id="myNotification">
                                <div class="form-container">
                                    <ul class="menu" style="overflow: hidden; width: auto; height: 254px;">
                                        <li>
                                            <a href="javascript:void(0);" class=" waves-effect waves-block">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>12 new members joined</h4>
                                                    <p>
                                                        <i class="fa fa-clock-o"></i> 14 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class=" waves-effect waves-block">
                                                <div class="icon-circle bg-cyan">
                                                    <i class="fa fa-cart-plus"></i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>4 sales made</h4>
                                                    <p>
                                                        <i class="fa fa-clock-o"></i> 22 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class=" waves-effect waves-block">
                                                <div class="icon-circle bg-red">
                                                    <i class="fa fa-trash"></i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                                    <p>
                                                        <i class="fa fa-clock-o"></i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class=" waves-effect waves-block">
                                                <div class="icon-circle bg-orange">
                                                    <i class="fa fa-pencil"></i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy</b> changed name</h4>
                                                    <p>
                                                        <i class="fa fa-clock-o"></i> 2 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class=" waves-effect waves-block">
                                                <div class="icon-circle bg-blue-grey">
                                                    <i class="material-icons">comment</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> commented your post</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 4 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class=" waves-effect waves-block">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">cached</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> updated status</h4>
                                                    <p>
                                                        <i class="fa fa-clock-o">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class=" waves-effect waves-block">
                                                <div class="icon-circle bg-purple">
                                                    <i class="material-icons">settings</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>Settings updated</h4>
                                                    <p>
                                                        <i class="fa fa-clock-o">access_time</i> Yesterday
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <li><a href="#xaccount" onclick="toggle_visibility('myForm');"><i class=" fa fa-user fa-2x"
                                        aria-hidden=" true""></i>
                                    Hi,
                                    <b>
                                        <?php if (isset($_SESSION['user'])){ echo $_SESSION['firstname']; } else {echo "Login"; }?></b>
                                    <i class=" fa fa-caret-down fa-2x"></i></a>
                            </li>
                            <div class=" form-popup" id="myForm">
                                <div id="defaultOpen1" class="">
                                    <div class="form-container border">
                                        <div>
                                            <a href="account">
                                                <p class="header-dropdown">
                                                    <i class="fa fa-user"></i>
                                                    My
                                                    Profile
                                                </p>
                                            </a>
                                            <a href="orders">
                                                <p class="header-dropdown">
                                                    <i class="fa fa-shopping-bag"></i>
                                                    My
                                                    Orders
                                                </p>
                                            </a>
                                            <a href="wishlist">
                                                <p class="header-dropdown">
                                                    <i class="fa fa-heart"></i>
                                                    My
                                                    Wishlist
                                                </p>
                                            </a>
                                            <a href="#xwallet">
                                                <p class="header-dropdown">
                                                    <i class="fa fa-credit-card"></i>
                                                    My
                                                    Wallet
                                                </p>
                                            </a>
                                            <a href="#x">
                                                <p class="header-dropdown">
                                                    <i class="fa fa-map-marker"></i>
                                                    Track
                                                    My
                                                    Order
                                                </p>
                                            </a>
                                            <p class=header-dropdown>
                                                <i class="fa fa-moon-o"></i>
                                                Night
                                                Mode
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </p>

                                            <a href="/exchange/logout">
                                                <p class="header-dropdown logout">
                                                    <i class="fa fa-sign-out"></i>
                                                    Logout
                                                </p>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </nav>
    </header>

    <div class="container-fluid row" style="padding-bottom: 5px; padding-top: 10px;">
        <div class="column">
            <div class="card">
                <h3><i class="fa fa-money"></i> Revenue </h3>
                <h1 class="bold">
                    <i>₦</i> 37,499
                </h1>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <h3><i class="fa fa-shopping-cart"></i>New Orders </h3>
                <h1 class="bold"> 15
                </h1>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <h3><i class="fa fa-users"></i> New Customers </h3>
                <h1 class="bold">8</h1>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <h3><i class="fa fa-question"></i> Support Tickets</h3>
                <h1 class="bold">1</h1>
            </div>
        </div>




    </div>

    <div class="container-fluid row" style="padding-bottom: 5px;">
        <div class="col-md-8">
            <div class="card">
                <div style="background-color:white;color: #000; text-align: left">
                    <h3>Sales Overview</h3>
                </div>
                <div>
                    <img src="assets/img/chart.png">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div>
                    <div>Total Customers</div>
                    <div class="bold">1727</div>
                </div>

                <tr>
                    <td>Total Sales</td>
                    <td>987</td>
                </tr>
                <tr>
                    <td>Total Orders</td>
                    <td>987</td>
                </tr>
                <tr>
                    <td>Total Revenue</td>
                    <td>₦ 2,037,499</td>
                </tr>
                <tr>
                    <td>Total Products</td>
                    <td>987</td>
                </tr>
                <p class="bold"> 15
                </p>
                <p class="bold"> 15
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid row" style="padding-bottom: 5px; padding-top: 10px;">
        <div class="col-md-4">
            <div class="card">
                <h3>Today's Schedule</h3>
                <ul id="myUL">
                    <li>Hit the gym</li>
                    <li class="checked">Pay bills</li>
                    <li>Meet George</li>
                    <li>Buy eggs</li>
                    <li>Read a book</li>
                    <li>Organize office</li>
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h3><i class="fa fa-shopping-cart"></i>New Orders </h3>
                <p class="bold"> 15
                </p>
                <p class="bold"> 15
                </p>
                <p class="bold"> 15
                </p>
                <p class="bold"> 15
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h3>Answered Tickets</h3>
                <p class="bold"> 15
                </p>
                <p class="bold"> 15
                </p>
                <p class="bold"> 15
                </p>
                <p class="bold"> 15
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid row" style="padding-bottom: 5px; padding-top: 10px;">
        <div class="col-md-8">
            <div class="card">
                <div style="background-color:white;color: #000; text-align: left">
                    <h3>Recent Orders</h3>
                </div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Date Subscribed</th>
                        <th>Date Unsubscribed</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kennedy</td>
                        <td>Izuegbu</td>
                        <td>kennedyizuegbu@yahoo.com</td>
                        <td>2019-04-10 23:31:39</td>
                        <td>0000-00-00 00:00:00</td>
                        <td>SUBSCRIBED</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kennedy</td>
                        <td>Izuegbu</td>
                        <td>kennedyizuegbu@yahoo.com</td>
                        <td>2019-04-10 23:31:39</td>
                        <td>0000-00-00 00:00:00</td>
                        <td>SUBSCRIBED</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kennedy</td>
                        <td>Izuegbu</td>
                        <td>kennedyizuegbu@yahoo.com</td>
                        <td>2019-04-10 23:31:39</td>
                        <td>0000-00-00 00:00:00</td>
                        <td>SUBSCRIBED</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kennedy</td>
                        <td>Izuegbu</td>
                        <td>kennedyizuegbu@yahoo.com</td>
                        <td>2019-04-10 23:31:39</td>
                        <td>0000-00-00 00:00:00</td>
                        <td>SUBSCRIBED</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kennedy</td>
                        <td>Izuegbu</td>
                        <td>kennedyizuegbu@yahoo.com</td>
                        <td>2019-04-10 23:31:39</td>
                        <td>0000-00-00 00:00:00</td>
                        <td>SUBSCRIBED</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h3><i class="fa fa-shopping-cart"></i>New Orders </h3>
                <p class="bold"> 15
                </p>
            </div>
        </div>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/js/animated-search-filter.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/carousel.js"></script>
<script src="assets/js/preloader.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}
</script>
</body>

</html>