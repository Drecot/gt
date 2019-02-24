<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="Dreacot">
    <title>GAMETRADE - Products</title>
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

    <!-- <main body of the site> -->
    <main class="site-main">
        <section class="hero_area2">
            <div class="middle2 text-center" style=" padding: 10px;">
                <div class="">
                    <h1 style="    margin-bottom: 1.5rem;"> All Products</h1>
                </div>
                <div>
                    <ul class="breadcrumb">
                        <li><a href="index">Home</a></li>
                        <li>Products</li>
                    </ul>
                </div>

            </div>
        </section>

        <section style=" background: #fbfbfb;">
            <!-- Console Navigation -->
            <div class="category " id="title">
                <div class="nav-wrapper">
                    <!-- Tab links -->
                    <div class=" nline">
                        <!-- <affix class for console navigation> -->
                        <div class="tab container-fluid affix" data-spy="affix" data-offset-top="585">
                            <!-- <responsive for mobile> -->
                            <div class="navbar-header">
                                <button type="button" class="game-button navbar-toggle" data-toggle="collapse"
                                    data-target="#console-navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="brand-logo">
                                    <h2 id="currentCity"></h2>
                                </div>
                            </div>
                            <!-- <select game tabs> -->
                            <div class="collapse navbar-collapse" id="console-navbar-collapse">
                                <div class="space">
                                    <ul class="nav navbar-nav">
                                        <li><button class="tablinks" onclick="openCity(event, 'PS4')"
                                                id="defaultOpen">PS4</button></li>
                                        <li><button class="tablinks" onclick="openCity(event, 'PS3')">PS3</button></li>
                                        <li><button class="tablinks" onclick="openCity(event, 'XBOX ONE')">XBOX
                                                ONE</button>
                                        </li>
                                        <li><button class="tablinks" onclick="openCity(event, 'XBOX 360')">XBOX
                                                360</button>
                                        </li>
                                        <li><button class="tablinks"
                                                onclick="openCity(event, 'NINTENDO')">NINTENDO</button>
                                        </li>
                                        <!-- <a href="#xcart" class=" fa fa-shopping-bag" style="color:white; font-size:25px; top:24px; position: absolute;"></a>
                                 <span class="header-icons-noti">3</span> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <product listing> -->
            <div class="container">
                <div class="row">
                    <!-- search filters on the left -->
                    <div class="col-md-3">
                        <div class="box ">
                            <!-- <filter toggle show/hide> -->
                            <div id="chng" onclick="toggle_visibility('myFilter');">
                                <h2 class="active text-center" style=" font-size: 20px"> FILTERS <span
                                        class="glyphicon glyphicon-chevron-down"
                                        onclick="toggle_visibility('myFilter');"></span></h2>
                            </div>
                            <!-- <Filter body> -->
                            <div id='myFilter'>
                                <form action="/action_page.php" class="search-filter">
                                    <!-- <searchbox> -->
                                    <div class="cd-filter-block" id="cg" style=" padding-top: 20px;">
                                        <h3 onclick="toggle_visibility('cd-filter-content');">Search</h3>
                                        <div class="cd-filter-content" id="cd-filter-content" style="display: block;">
                                            <input type="search" id="myInput" placeholder="Try Fifa...">
                                        </div>
                                        <!-- cd-filter-content -->
                                    </div>
                                    <!-- <filter  price> -->
                                    <div style=" padding-top: 20px;">
                                        <h3>Price</h3>
                                        <div class="slidecontainer">
                                            <input type="range" min="3000" max="30000" value="26000" class="slider"
                                                id="myRange">
                                            <p>Value: ₦<span id="demo"></span></p>
                                        </div>
                                    </div>
                                    <!-- <filter sortby> -->
                                    <div style=" padding-top: 20px;">
                                        <h3>Sort By</h3>
                                        <!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
                                        <div class="custom-select">
                                            <select>
                                                <option value="0">Sort By:</option>
                                                <option value="1" onclick="filterSelection('recent')">Most Recent
                                                </option>
                                                <option value="2">Price: Low to High</option>
                                                <option value="3">Price: High to Low</option>
                                                <option value="4">Average rating</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <filter category> -->
                                    <div style=" padding-top: 20px;">
                                        <h3>Category</h3>
                                        <label class="genre">All
                                            <input type="radio" checked="checked" name="radio"
                                                onclick="filterSelection('all')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Action
                                            <input type="radio" name="radio" onclick="filterSelection('action')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Adventure
                                            <input type="radio" name="radio" onclick="filterSelection('adventure')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Fighting
                                            <input type="radio" name="radio" onclick="filterSelection('fighting')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Horror
                                            <input type="radio" name="radio" onclick="filterSelection('horror')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Interactive Motion
                                            <input type="radio" name="radio"
                                                onclick="filterSelection('interactive-motion')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Racing
                                            <input type="radio" name="radio" onclick="filterSelection('racing')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Sports
                                            <input type="radio" name="radio" onclick="filterSelection('sports')">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="genre">Survival
                                            <input type="radio" name="radio" onclick="filterSelection('survival')">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <products display from console tab selection> -->
                    <div class="col-md-9">
                        <!-- <filter for new/used game> -->
                        <div class=" text-center" id="myBtnContainer">
                            <button class="btn-style active" onclick="filterSelection('all')"> Show all</button>
                            <button class="btn-style" onclick="filterSelection('new')"> New</button>
                            <button class="btn-style " onclick="filterSelection('used')"> Used</button>
                            <button class="btn-style " onclick="filterSelection('trade')"> Exchange</button>
                        </div>
                        <!-- <ps4 products> -->
                        <div id="PS4" class=" tabcontent">
                            <h3>PS4</h3>
                            <div class="row " id="users">
                                <div class="col-md-3 filterDiv new action adventure resident-evil-2 recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps4/resevil.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>RESIDENT EVIL 2: REVELATIONS</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦25,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv new sports fifa-19 recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps4/fifa19.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>FIFA 19</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦22,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv new sports nba2k19 recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps4/2K19.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>NBA 2K19</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦17,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action ghost-recon old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps4/ghst.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>GHOST RECON: WILDLANDS</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦7,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action adventure gtav old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps4/GTAV.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>GTA V</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦6,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action call-of-duty-infinite-warfare recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps4/COD.jpg" alt="Fifa 19" width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>CALL OF DUTY: INFINITE WARFARE</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦3,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class=" col-md-3 filterDiv trade action call-of-duty-modern-warfare-remastered old">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps4/MWR.jpg" alt="Fifa 19" width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>CALL OF DUTY: MODERN WARFARE REMASTERED</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">EX</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <a href="trade.php#ex" target="blank"><button
                                                        class="game-button btn"><i></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-3 filterDiv trade action adventure days-gone recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps4/daysgone.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>DAYS GONE</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">EX</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <a href="trade.php#ex" target="blank"><button
                                                        class="game-button btn"><i></i></button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <ps3 products> -->
                        <div id="PS3" class="tabcontent">
                            <h3>PS3</h3>
                            <div class="row">
                                <div class="col-md-3 filterDiv used adventure interactive-motion beyond-two-souls old">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps3/beyond.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name ">
                                            <p>BEYOND TWO SOULS</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦4,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action army-of-two recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps3/army.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>ARMY OF TWO: THE DEVILS CARTEL</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦3,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action adventure gta-v recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps3/gtav.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>GTA V</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦6,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action killzone3 old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps3/killzone3.jpg" alt="Fifa 19" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>KILLZONE 3</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦5,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used sports fifa-16 old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps3/fifa16.jpg" alt="Fifa 16" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>FIFA 16: DELUXE EDITION</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦5,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used fighting adventure mortalkombat recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps3/mortalk.jpg" alt="Mortal Kombat" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>MORTAL KOMBAT: KOMPLETE EDITION</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦3,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used fighting action adventure assassinscreed recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps3/blackflag.jpg" alt="Assassin's Creed" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>ASSASSIN'S CREED IV: BLACK FLAG</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦3,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-3 filterDiv used action transformers3 old">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/ps3/transformers.jpg" alt="Transformers 3"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>TRANSFORMERS 3</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦3,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <xbox1 products> -->
                        <div id="XBOX ONE" class="tabcontent">
                            <h3>XBOX ONE</h3>
                            <div class="row">
                                <div class="col-md-3 filterDiv new sports racing need-for-speed-payback recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox1/nfsplayback.jpg" alt="Need For Speed"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>NEED FOR SPEED: PAYBACK</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦21,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv new sports fnba2k18 recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox1/nba2k18.jpg" alt="Nba 2k18" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>NBA 2K18</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦16,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used sports fifa-17 recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox1/fifa17.jpg" alt="Fifa 17" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>FIFA 17</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦7,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action call-of-duty-legacy-edition old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox1/cod-legacy.jpg" alt="Cod-Legacy" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>CALL OF DUTY: LEGACY EDITION</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦9,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv trade action adventure watchdogs old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox1/watchdogs.jpg" alt="Watch Dogs" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>WATCH DOGS</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">EX</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used survival horror the-evil-within recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox1/theevilwithin.jpg" alt="The Evil Within"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>THE EVIL WITHIN</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦6,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-3 filterDiv trade action rainbow-six-seige old">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox1/rainbowsix.jpg" alt="Rainbow Six" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>RAINBOW SIX SEIGE</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">EX</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-3 filterDiv trade action battleborn recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox1/battleborn.jpg" alt="Battleborn" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>BATTLEBORN</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">EX</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <xbox360 products> -->
                        <div id="XBOX 360" class="tabcontent">
                            <h3>XBOX 360</h3>
                            <div class="row">
                                <div class="col-md-3 filterDiv new action sniperelite recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox360/sniperelite.JPG" alt="Sniper Elite"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>SNIPER ELITE</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦17,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used fighting fighters-uncaged recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox360/fightersuncaged.jpg" alt="Fighters Uncated"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>FIGHTERS UNCAGED</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦12,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv trade horror survival rise-of-nightmares recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox360/RON.jpg" alt="Rise of Nightmares" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>RISE OF NIGHTMARES</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">EX</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action call-of-duty-black-ops old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox360/blackops.jpg" alt="Black Ops" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>CALL OF DUTY: BLACK OPS III</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦9,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action titanfall old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox360/titanfall.jpg" alt="Titan Fall" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>TITAN FALL</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦5,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv trade action fallout recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox360/fallout.jpg" alt="Fallout 3" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p> FALLOUT 3</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">EX</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-3 filterDiv used action transformers old">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox360/transformers.jpg" alt="Transformers"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>TRANSFORMERS: REVENGE OF THE FALLEN</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦7,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-3 filterDiv trade action hitman recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/xbox360/hitman.jpg" alt="Hitman" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>HITMAN: BLOOD MONEY</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">EX</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <nintendo products -->
                        <div id="NINTENDO" class="tabcontent">
                            <h3>NINTENDO</h3>
                            <div class="row">
                                <div class="col-md-3 filterDiv new sport mariotennis recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/nintendo/mariotennis.jpg" alt="Mario Tennis"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>MARIO TENNIS</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦18,499</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used fighting fighters-uncaged recent">
                                    <div class=" game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/nintendo/mariotennis.jpg" alt="Fighters Uncated"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>FIGHTERS UNCAGED</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦12,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i class=""></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv trade horror survival rise-of-nightmares recent">
                                    <div class="game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/nintendo/mariotennis.jpg" alt="Rise of Nightmares"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>RISE OF NIGHTMARES</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">EX</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action call-of-duty-black-ops old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/nintendo/mariotennis.jpg" alt="Black Ops" width="100%"
                                                height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>CALL OF DUTY: BLACK OPS III</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦9,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 filterDiv used action titanfall old">
                                    <div class="  game-box">
                                        <div class="game-picture">
                                            <img src="/assets/img/nintendo/mariotennis.jpg" alt="Titan Fall"
                                                width="100%" height="100%">
                                        </div>
                                        <div class="game-name">
                                            <p>TITAN FALL</p>
                                        </div>
                                        <div class=" game-info" style="width: 100%;">
                                            <div class="" style=" float: right">
                                                <p class=" notice">₦5,999</p>
                                            </div>
                                            <div class="add" style=" float: left">
                                                <button class="game-button btn"><i></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="fa fa-plus"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

<!-- <site footer> -->
<?php include 'footer.php';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/assets/js/animated-search-filter.js"></script>
<script src="/assets/js/custom.js"></script>
<script src="/assets/js/carousel.js"></script>
<script src="/assets/js/preloader.js"></script>
<script src="/assets/js/jquery.easing.min.js"></script>


<!--Wishlist Modal -->
<div class="modal fade" id="wishlistModal" role="dialog">
    <div class="modal-dialog modal-sm modal-wishlist">
        <div class="modal-content">
            <div class="wishlist-icon wishlist-icon--success">
                <span class="wishlist-icon--success__line wishlist-icon--success__line--long"></span>
                <span class="wishlist-icon--success__line wishlist-icon--success__line--tip"></span>

                <div class="wishlist-icon--success__ring"></div>
                <div class="wishlist-icon--success__hide-corners"></div>
            </div>

            <div class="wishlist-title" style="">

                <span id="myText"></span>
            </div>

            <div class="wishlist-text text-center" style="">is added to wishlist !</div>

            <div class="wishlist-footer">
                <div class="wishlist-button-container">

                    <button class="wishlist-button wishlist-button--confirm " data-dismiss="modal">OK</button>

                    <div class="wishlist-button__loader">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart Modal -->
<div class="modal fade" id="cartModal" role="dialog">
    <div class="modal-dialog modal-sm modal-cart">
        <div class="modal-content">
            <div class="cart-icon cart-icon--success">
                <span class="cart-icon--success__line cart-icon--success__line--long"></span>
                <span class="cart-icon--success__line cart-icon--success__line--tip"></span>

                <div class="cart-icon--success__ring"></div>
                <div class="cart-icon--success__hide-corners"></div>
            </div>

            <div class="cart-title" style="">

                <span id="myText"></span>
            </div>

            <div class="cart-text text-center" style="">is added to cart !</div>

            <div class="cart-footer">
                <div class="cart-button-container">

                    <button class="cart-button cart-button--confirm " data-dismiss="modal">OK</button>

                    <div class="cart-button__loader">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>