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
        <button class="dropdown-btn active"><i class="fa fa-dashboard"></i> Dahboard
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container" style="display: block;">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>

        <a href="subscriptions">
            <i class="fa fa-bus"></i> Email
        </a>

        <a href="subscriptions">
            <i class="fa fa-bus"></i> Calender
        </a>

        <a href="transactions">
            <i class="fa fa-line-chart"></i> Product List
        </a>

        <a href="receipts">
            <i class="fa fa-download"></i> Receipts
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
    <?php if (!isset($_SESSION['user'])){ ?>

    <?php include 'header_beforelogin.php';?>

    <?php } else { ?>

    <?php include 'header_afterlogin.php';?>

    <?php } ?>

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