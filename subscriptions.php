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
            <div class="name bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kennedy
                Izuegbu</div>
            <div class="email">kennedy@dreacot.com</div>
        </div>
    </div>

    <div class="row menu">
        <a href="admin">
            <i class="fa fa-dashboard"></i> Dashboard
        </a>

        <a class="active" href="subscriptions">
            <i class="fa fa-bus"></i> Subscriptions
        </a>

        <a href="transactions">
            <i class="fa fa-line-chart"></i> Transactions
        </a>

        <a href="receipts">
            <i class="fa fa-download"></i> Receipts
        </a>

        <a href="tickets">
            <i class="fa fa-ticket"></i> Tickets <span class="label-count">2</span>
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

    <div class="container-fluid"
        style="background-color:white; margin-top: 20px; margin-bottom:20px; color: #000; text-align: left">
        <h3>Subscriptions</h3>
    </div>

    <div style="overflow-x:auto;">

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
            <?php
         $i = 1;
         
         foreach ($record as $result)
		  {
			 echo "<tr>";
             echo "<td>".$i."</td>";
             echo "<td>".$result->first_name."</td>";
			 echo "<td>".$result->last_name."</td>";
			 echo "<td>".$result->email."</td>";
             echo "<td>".$result->date_subscribe."</td>";
             echo "<td>".$result->date_unsubscribe."</td>";
             echo "<td>".$result->status."</td>";
             echo "</tr>";
             $i++;
        }
	  ?>
        </table>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>