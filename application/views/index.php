<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="keywords" content="" />
      <meta name="author" content="Dreacot">
      <title>GameTrade.ng | Home</title>
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
      <header class="site-header" >
         <!-- <main class="site-main"> -->
         <div >
         <nav class="navbar navbar-default" id="title" >
            <div class="container">
               <div class="navbar-header">
                  <div class="container">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse, #bs-navbar-collapse1">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <a href="index" class="navbar-brand brand-logo" style="height:70px; width:252px;">
                     <img style="width:100%; height:100%;" src="/assets/img/logo.png" srcset="/assets/img/logo2.png 2x, img/logo3.png 3x" alt="Post"
                        width="100%" height="100%">
                     </a>
                  </div>
               </div>
               <div class="collapse navbar-collapse" id="bs-navbar-collapse1" style="float: left">
                  <ul class="nav navbar-nav main-navbar-nav">
                     <li><a href="#xwhishlist" class="fa fa-heart-o" onclick="toggle_visibility('myWishlist');"> Wishlist</a></li>
                     <div class="wishlist-popup" id="myWishlist">
                        <form action="/action_page.php" class="wishlist-container">
                           <ul class="header-cart-wrapitem">
                              <li class="header-cart-item">
                                 <div class="header-cart-item-img">
                                    <img src="/assets/img/wishlist/item-01.jpg" alt="IMG">
                                 </div>
                                 <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                    Grand Theft Auto V
                                    </a>
                                    <span class="header-cart-item-info">
                                    ₦5,600.00
                                    </span>
                                 </div>
                              </li>
                              <hr>
                              <li class="header-cart-item">
                                 <div class="header-cart-item-img">
                                    <img src="/assets/img/wishlist/item-01.jpg" alt="IMG">
                                 </div>
                                 <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                    The Last of Us
                                    </a>
                                    <span class="header-cart-item-info">
                                    ₦5,600.00
                                    </span>
                                 </div>
                              </li>
                           </ul>
                        </form>
                     </div>
                     <li><a href="#xsearch" class="fa fa-search" onclick="toggle_visibility('mySearch');"> Search</a></li>
                     <div class="search-popup" id="mySearch">
                        <form action="/action_page.php" class="search-container">
                           <input type="search" placeholder="Search..." name="search"   >
                           <div class="close-icon fa fa-times-thin" onclick="toggle_visibility('mySearch');"></div>
                        </form>
                     </div>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->  
               <a href="index.php" class="topnav-centered navbar-brand ">
               <img src="/assets/img/logo.png" srcset="/assets/img/logo2.png 2x, img/logo3.png 3x"   alt="Post">
               </a>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                  <ul class="nav navbar-nav main-navbar-nav">
                  <li><a href="#xcart" class=" fa fa-cart-plus" onclick="toggle_visibility('myCart');"> Cart</a></li>
                  <span class="header-icons-noti-top">5</span>
                  <div class="form-popup" id="myCart">
                     <form action="/action_page.php" class="form-container">
                        <ul class="header-cart-wrapitem">
                           <li class="header-cart-item">
                              <div class="header-cart-item-img">
                                 <img src="/assets/img/cart/item-01.jpg" alt="IMG">
                              </div>
                              <div class="header-cart-item-txt">
                                 <a href="#" class="header-cart-item-name">
                                 Ghost Recon: Advanced Warfighter
                                 </a>
                                 <span class="header-cart-item-info">
                                 1 x ₦5,600.00
                                 </span>
                              </div>
                           </li>
                           <hr>
                           <li class="header-cart-item">
                              <div class="header-cart-item-img">
                                 <img src="/assets/img/cart/item-01.jpg" alt="IMG">
                              </div>
                              <div class="header-cart-item-txt">
                                 <a href="#" class="header-cart-item-name">
                                 Detriot has fallen
                                 </a>
                                 <span class="header-cart-item-info">
                                 1 x ₦15,600.00
                                 </span>
                              </div>
                           </li>
                        </ul>
                        <div class="header-cart-total">
                           Total: ₦34,400.00
                        </div>
                        <div class="header-cart-buttons">
                           <div class="header-cart-wrapbtn">
                              <!-- Button -->
                              <a href="#xcart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              View Cart
                              </a>
                           </div>
                           <div class="header-cart-wrapbtn">
                              <!-- Button -->
                              <a href="#xcheckout" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                              Check Out
                              </a>
                           </div>
                        </div>
                     </form>
                  </div>
                  <!-- <account Dropdown> -->    
                  <li><a href="#xaccount" class=" fa fa-user-o" onclick="toggle_visibility('myForm');"> <?php if (isset($_SESSION['user'])){ echo $_SESSION['firstname']; } else {echo "Login"; }?></a></li>
                  <!-- <Form housing login and signup dropdown> -->    
                  <div class=" form-popup" id="myForm">
                     <!-- <login Dropdown> -->    
                     <div id="defaultOpen1" class="">
                        <form action="/exchange/process_login" method="post" class="form-container">
                           <h1 style="font-size: 14px; text-align: center">Login</h1>
                           <label for="email"><b>Email</b></label>
                           <input type="text" placeholder="Enter Email" name="email" required>
                           <label for="psw"><b>Password</b></label>
                           <input type="password" placeholder="Enter Password" name="password" required>
                           <div style="padding-bottom:20px; margin-top: -20px; font-size: 12px;  ">
                              <input type="checkbox"  name="psw" style="float: left;"  >
                              <label for="checkbox"><b style="float: left;" >Remember me
                              </b></label>
                              <a class="brown" href="#xforgot" style="float: right" onclick="toggle_visibility('myReset');toggle_visibility('myForm');" >Forgot Password?</a>
                           </div>
                           <button type="submit" class="btn">Login</button>
                           <div class="text-center">
                              <p>Need an account? <a href="#x" class="brown" data-toggle="modal" data-target="#myModal">Sign up here</a></p>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                     <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                           <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title text-center">Sign Up</h4>
                           </div>
                           <div class="modal-body ">
                              <form action="/exchange/process_register" class="signup-form-container">
                                 <div class="form-group ">
                                    <label for="firstname"><b>First Name</b></label>
                                    <input type="text" placeholder="Enter First Name" name="firstname"  required>
                                    <span class="help-block"></span>
                                 </div>
                                 <div class="form-group ">
                                    <label for="lastname"><b>Last Name</b></label>
                                    <input type="text" placeholder="Enter Last Name" name="lastname" required>
                                    <span class="help-block"></span>
                                 </div>
                                 <div class="form-group ">
                                    <label for="email"><b>Email</b></label>
                                    <input type="text" placeholder="Enter Email" name="email"  required>
                                    <span class="help-block"></span>
                                 </div>
                                 <div class="form-group ">
                                    <label for="phonenumber"><b>Phone Number</b></label>
                                    <input type="tel" placeholder="Enter Phone Number" name="phonenumber" minlength="11" maxlength="11"  required>
                                    <span class="help-block"></span>
                                 </div>
                                 <div class="form-group ">
                                    <label for="password"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="password" minlength="8"  required>
                                    <span class="help-block"></span>
                                 </div>
                                 <div class="form-group ">
                                    <label for="confirm_password"><b>Confirm Password</b></label>
                                    <input type="password" placeholder="Confirm Password" name="confirm_password" minlength="8" required>
                                    <span class="help-block"></span>
                                 </div>
                                 <p class="" >
                                    <input type="checkbox" placeholder="Confirm Password" name="psw" required>
                                    I have read and accepted the <a class="brown" href="#xterms">terms and conditions</a>
                                 </p>
                                 <button type="submit" class="btn">Sign Up</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <password Dropdown> -->    
                  <div class="form-popup" id="myReset">
                     <form action="/action_page.php" class="form-container">
                        <h1 style="font-size: 14px; text-align: center">Reset Password</h1>
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                        <button type="submit" class="btn">Reset Password</button>
                        <div style=" text-align: center">
                           <a class="brown" href="#xforgot"  onclick="toggle_visibility('myReset');toggle_visibility('myForm');" >Login</a>
                        </div>
                     </form>
                  </div>
                  <!-- /.navbar-collapse -->                
                  <!-- END MAIN NAVIGATION -->
               </div>
         </nav>
         <!-- <Carousel> -->    
         <div class="">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <!-- Wrapper for slides -->
         <div class="carousel-inner">
         <div class="item active">
         <img src="/assets/img/hero.jpg" alt="Los Angeles" style="width:100%; ">
         </div>
         <div class="item">
         <img src="/assets/img/hero.jpg" alt="Chicago" style="width:100%;">
         </div>
         <div class="item">
         <img src="/assets/img/hero.jpg" alt="New york" style="width:100%;">
         </div>
         </div>
         </div>
         </div>
         </div>
      </header>
      <!-- <main body of the site> -->    
      <section style=" background: #fbfbfb;">
         <!-- Console Navigation -->
         <div class="category " id="title" >
            <div class="nav-wrapper">
               <!-- Tab links -->
               <div class=" nline">
                  <!-- <affix class for console navigation> -->    
                  <div class="tab container-fluid affix"  data-spy="affix" data-offset-top="585" >
                     <!-- <responsive for mobile> -->    
                     <div class="navbar-header">
                        <button type="button" class="game-button navbar-toggle" data-toggle="collapse" data-target="#console-navbar-collapse">
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
                              <li><button class="tablinks" onclick="openCity(event, 'PS4')"id="defaultOpen">PS4</button></li>
                              <li><button class="tablinks" onclick="openCity(event, 'PS3')">PS3</button></li>
                              <li><button class="tablinks" onclick="openCity(event, 'XBOX ONE')">XBOX ONE</button></li>
                              <li><button class="tablinks" onclick="openCity(event, 'XBOX 360')">XBOX 360</button></li>
                              <li><button class="tablinks" onclick="openCity(event, 'NINTENDO')">NINTENDO</button></li>
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
               <div class="col-md-3" >
                  <div class="box ">
                     <!-- <filter toggle show/hide> -->    
                     <div id="chng" onclick="toggle_visibility('myFilter');">
                        <h2 class="active text-center" style=" font-size: 20px" > FILTERS  <span class="glyphicon glyphicon-chevron-down"  onclick="toggle_visibility('myFilter');"></span></h2>
                     </div>
                     <!-- <Filter body> -->    
                     <div  id='myFilter'>
                        <form action="/action_page.php" class="search-filter">
                           <!-- <searchbox> -->    
                           <div class="cd-filter-block" id="cg"  style=" padding-top: 20px;">
                              <h3  onclick="toggle_visibility('cd-filter-content');">Search</h3>
                              <div class="cd-filter-content" id="cd-filter-content" style="display: block;">
                                 <input type="search"  id="myInput"  placeholder="Try Fifa...">
                              </div>
                              <!-- cd-filter-content -->
                           </div>
                           <!-- <filter  price> -->    
                           <div style=" padding-top: 20px;">
                              <h3>Price</h3>
                              <div class="slidecontainer">
                                 <input type="range" min="3000" max="30000" value="26000" class="slider" id="myRange" >
                                 <p>Value: ₦<span id="demo"></span></p>
                              </div>
                           </div>
                           <!-- <filter sortby> -->    
                           <div style=" padding-top: 20px;">
                              <h3 >Sort By</h3>
                              <!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
                              <div class="custom-select" >
                                 <select>
                                    <option value="0">Sort By:</option>
                                    <option value="1" onclick="filterSelection('recent')" >Most Recent</option>
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
                              <input type="radio" checked="checked" name="radio" onclick="filterSelection('all')">
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
                              <span class="checkmark" ></span>
                              </label>     
                              <label class="genre">Horror
                              <input type="radio" name="radio" onclick="filterSelection('horror')">
                              <span class="checkmark" ></span>
                              </label>                                             
                              <label class="genre">Interactive Motion
                              <input type="radio" name="radio" onclick="filterSelection('interactive-motion')">
                              <span class="checkmark" ></span>
                              </label>
                              <label class="genre">Racing
                              <input type="radio" name="radio" onclick="filterSelection('racing')">
                              <span class="checkmark" ></span>
                              </label>                                            
                              <label class="genre">Sports
                              <input type="radio" name="radio"  onclick="filterSelection('sports')">
                              <span class="checkmark"></span>
                              </label>
                              <label class="genre">Survival
                              <input type="radio" name="radio"  onclick="filterSelection('survival')">
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
                     <button class="btn-style active" onclick="filterSelection('all')" > Show all</button>
                     <button class="btn-style" onclick="filterSelection('new')"> New</button>
                     <button class="btn-style " onclick="filterSelection('used')"> Used</button>
                     <button class="btn-style " onclick="filterSelection('trade')" > Exchange</button>
                  </div>
                  <!-- <ps4 products> -->    
                  <div id="PS4" class=" tabcontent">
                     <h3>PS4</h3>
                     <div class="row " id="users">
                        <div class="col-md-3 filterDiv new action adventure resident-evil-2 recent">
                           <div class=" game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/ps4/resevil.jpg" alt="Fifa 19" width="100%" height="100%">
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
                                 <img src="/assets/img/ps4/fifa19.jpg" alt="Fifa 19" width="100%" height="100%">
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
                                 <img src="/assets/img/ps4/2K19.jpg" alt="Fifa 19" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>NBA 2K19</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦17,999</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used action ghost-recon old">
                           <div class="  game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/ps4/ghst.jpg" alt="Fifa 19" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>GHOST RECON: WILDLANDS</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦7,499</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used action adventure gtav old">
                           <div class="  game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/ps4/GTAV.jpg" alt="Fifa 19" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>GTA V</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦6,999</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
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
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=" col-md-3 filterDiv trade action call-of-duty-modern-warfare-remastered old">
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
                                    <a href="trade.php#ex" target="blank"><button class="game-button btn"><i ></i></button></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=" col-md-3 filterDiv trade action adventure days-gone recent">
                           <div class=" game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/ps4/daysgone.jpg" alt="Fifa 19" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>DAYS GONE</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">EX</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <a href="trade.php#ex" target="blank"><button class="game-button btn"><i ></i></button></a>
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
                                 <img src="/assets/img/ps3/beyond.jpg" alt="Fifa 19" width="100%" height="100%">
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
                                 <img src="/assets/img/ps3/army.jpg" alt="Fifa 19" width="100%" height="100%">
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
                                 <img src="/assets/img/ps3/gtav.jpg" alt="Fifa 19" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>GTA V</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦6,499</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used action killzone3 old">
                           <div class="  game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/ps3/killzone3.jpg" alt="Fifa 19" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>KILLZONE 3</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦5,499</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used sports fifa-16 old">
                           <div class="  game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/ps3/fifa16.jpg" alt="Fifa 16" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>FIFA 16: DELUXE EDITION</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦5,999</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used fighting adventure mortalkombat recent">
                           <div class="game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/ps3/mortalk.jpg" alt="Mortal Kombat" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>MORTAL KOMBAT: KOMPLETE EDITION</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦3,499</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used fighting action adventure assassinscreed recent">
                           <div class="game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/ps3/blackflag.jpg" alt="Assassin's Creed" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>ASSASSIN'S CREED IV: BLACK FLAG</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦3,499</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=" col-md-3 filterDiv used action transformers3 old">
                           <div class=" game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/ps3/transformers.jpg" alt="Transformers 3" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>TRANSFORMERS 3</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦3,999</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
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
                                 <img src="/assets/img/xbox1/nfsplayback.jpg" alt="Need For Speed" width="100%" height="100%">
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
                                 <img src="/assets/img/xbox1/nba2k18.jpg" alt="Nba 2k18" width="100%" height="100%">
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
                                 <img src="/assets/img/xbox1/fifa17.jpg" alt="Fifa 17" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>FIFA 17</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦7,999</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used action call-of-duty-legacy-edition old">
                           <div class="  game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/xbox1/cod-legacy.jpg" alt="Cod-Legacy" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>CALL OF DUTY: LEGACY EDITION</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦9,499</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv trade action adventure watchdogs old">
                           <div class="  game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/xbox1/watchdogs.jpg" alt="Watch Dogs" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>WATCH DOGS</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">EX</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used survival horror the-evil-within recent">
                           <div class="game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/xbox1/theevilwithin.jpg" alt="The Evil Within" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>THE EVIL WITHIN</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦6,999</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=" col-md-3 filterDiv trade action rainbow-six-seige old">
                           <div class=" game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/xbox1/rainbowsix.jpg" alt="Rainbow Six" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>RAINBOW SIX SEIGE</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">EX</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=" col-md-3 filterDiv trade action battleborn recent">
                           <div class=" game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/xbox1/battleborn.jpg" alt="Battleborn" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>BATTLEBORN</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">EX</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
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
                                 <img src="/assets/img/xbox360/sniperelite.JPG" alt="Sniper Elite" width="100%" height="100%">
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
                                 <img src="/assets/img/xbox360/fightersuncaged.jpg" alt="Fighters Uncated" width="100%" height="100%">
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
                                 <img src="/assets/img/xbox360/RON.jpg" alt="Rise of Nightmares" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>RISE OF NIGHTMARES</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">EX</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used action call-of-duty-black-ops old">
                           <div class="  game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/xbox360/blackops.jpg" alt="Black Ops" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>CALL OF DUTY: BLACK OPS III</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦9,999</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used action titanfall old">
                           <div class="  game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/xbox360/titanfall.jpg" alt="Titan Fall" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>TITAN FALL</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦5,999</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv trade action fallout recent">
                           <div class="game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/xbox360/fallout.jpg" alt="Fallout 3" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p> FALLOUT 3</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">EX</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=" col-md-3 filterDiv used action transformers old">
                           <div class=" game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/xbox360/transformers.jpg" alt="Transformers" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>TRANSFORMERS: REVENGE OF THE FALLEN</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦7,499</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=" col-md-3 filterDiv trade action hitman recent">
                           <div class=" game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/xbox360/hitman.jpg" alt="Hitman" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>HITMAN: BLOOD MONEY</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">EX</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
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
                                 <img src="/assets/img/nintendo/mariotennis.jpg" alt="Mario Tennis" width="100%" height="100%">
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
                                 <img src="/assets/img/nintendo/mariotennis.jpg" alt="Fighters Uncated" width="100%" height="100%">
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
                                 <img src="/assets/img/nintendo/mariotennis.jpg" alt="Rise of Nightmares" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>RISE OF NIGHTMARES</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">EX</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used action call-of-duty-black-ops old">
                           <div class="  game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/nintendo/mariotennis.jpg" alt="Black Ops" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>CALL OF DUTY: BLACK OPS III</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦9,999</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 filterDiv used action titanfall old">
                           <div class="  game-box">
                              <div class="game-picture">
                                 <img src="/assets/img/nintendo/mariotennis.jpg" alt="Titan Fall" width="100%" height="100%">
                              </div>
                              <div class="game-name">
                                 <p>TITAN FALL</p>
                              </div>
                              <div class=" game-info" style="width: 100%;">
                                 <div class="" style=" float: right">
                                    <p class=" notice">₦5,999</p>
                                 </div>
                                 <div class="add" style=" float: left">
                                    <button class="game-button btn"><i ></i></button>
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
      <!-- <site footer> -->    
      <footer class="site-footer">
         <div class="container text-center smtx">
            <!-- Allow the contact us be at the foremost left hand side-->
            <div class="col-sm-12">
               <div class="hvr-grow col-sm-4  whbx">
                  <span class="fa fa-motorcycle" > </span>
                  <h4  > SAME DAY DELIVERY</h4>
               </div>
               <div class="hvr-grow col-sm-4  whbx" >
                  <span class="fa fa-rotate-left" > </span>
                  <h4 > 7 DAYS RETURN</h4>
               </div>
               <div class="hvr-grow col-sm-4  whbx" >
                  <span class="fa fa-money" > </span>
                  <h4  > CASH ON DELIVERY</h4>
               </div>
            </div>
         </div>
         <div class="container " style=" background-color: #555">
            <div class="row second">
               <!-- Allow the contact us be at the foremost left hand side-->
               <div class="col-md-3 col-sm-6 col-xs-12 fbox" >
                  <h4>GET IN TOUCH</h4>
                  <p><a href="#x"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> KM 10, Idiroko Road</a></p>
                  <p><a href="tel:+2348159827634"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +234 815 9827 634</a></p>
                  <p><a href="mailto:info@gametrade.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> support@gametrade.com</a></p>
                  <p>
                     <a href="#x" class="pad fa fa-facebook"></a>
                     <a href="#x" class="pad fa fa-instagram"></a>
                     <a href="#x" class="pad fa fa-twitter"></a>
                  </p>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 fbox" >
                  <h4>COMPANY</h4>
                  <p><a href="aboutus.php"> About Us</a></p>
                  <p><a href="#x">How it Works</a></p>
                  <p><a href="#x">Our Services</a></p>
                  <p><a href="#x"> Contact Us</a></p>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 fbox" >
                  <h4>HELP</h4>
                  <p><a href="faq.php"> FAQs</a></p>
                  <p><a href="track-order.php"> Track Order</a></p>
                  <p><a href="#xreturn"> Returns</a></p>
                  <p><a href="#xdelivery"> Tickets</a></p>
                  <p><a href="#xpartner"> Become a Merchant</a></p>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 fbox" >
                  <h4>JOIN OUR NEWSLETTER</h4>
                  <div class="block-footer block-5">
                     <div class=" block-subscribe">
                        <div class="block-content">
                           <form action="https://www.gametrade.com/index.php/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
                              <div class="newsletter-content">
                                 <div class="form-subscribe-header">
                                    <p>Receive coupons, exclusive offers, discounts and more from us.</p>
                                 </div>
                                 <div class="news-content-inner">
                                    <div class="input-box">
                                       <input type="text" name="email" id="newsletter" title="Sign up for our newsletter"placeholder="Enter Email" required>
                                    </div>
                                    <div class="actions">
                                       <button type="submit" title="Subscribe" class="button">
                                       <span><span>Subscribe</span></span></button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <script type="text/javascript">
                           //<![CDATA[
                           var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
                           //]]>
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <span>
                        <p class="pull-left">&copy; 2019 GAME EXCHANGE ALL RIGHTS RESERVED |</p>
                        <a href="#x">
                           <p>&nbsp Privacy Policy |
                           <p>
                        </a>
                        <a href="#x"><p>&nbsp Terms of Service <p></a>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="/assets/js/animated-search-filter.js"></script>
      <script src="/assets/js/custom.js"></script>
      <script src="/assets/js/carousel.js"></script>
      <script src="/assets/js/preloader.js"></script>
      <script src="/assets/js/jquery.easing.min.js"></script>
   </body>
</html>