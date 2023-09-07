<?php


if (isset($_REQUEST['register'])) 
{
	// setcookie("name",$_REQUEST["name"],time()+3600,"");
	// setcookie("email",$_REQUEST["email"],time()+3600,"");
	// setcookie("phone",$_REQUEST["phone"],time()+3600,"");
	// setcookie("password",$_REQUEST["password"],time()+3600,"");
	// header("location:/login.php");
	echo"success";

}
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themified.com/friend-finder/index-register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 13:17:19 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Friend Finder | A Complete Social Network Template</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="<?php echo $this->url;?>css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo $this->url;?>css/style.css" />
		<link rel="stylesheet" href="<?php echo $this->url;?>css/ionicons.min.css" />
        <link rel="stylesheet" href="<?php echo $this->url;?>css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="<?php echo $this->url;?>https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="<?php echo $this->url;?>shortcut icon" type="image/png" href="<?php echo $this->url;?>images/fav.png"/>
	</head>
	<body>
    
    <!-- Header
    ================================================= -->
		<header id="header-inverse">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-register"><img src="<?php echo $this->url;?>images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="index">Landing Page 1</a></li>
                    <li><a href="index-register">Landing Page 2</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="newsfeed">Newsfeed</a></li>
                    <li><a href="newsfeed-people-nearby">Poeple Nearly</a></li>
                    <li><a href="newsfeed-friends">My friends</a></li>
                    <li><a href="newsfeed-messages">Chatroom</a></li>
                    <li><a href="newsfeed-images">Images</a></li>
                    <li><a href="newsfeed-videos">Videos</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline">Timeline</a></li>
                  <li><a href="timeline-about">Timeline About</a></li>
                  <li><a href="timeline-album">Timeline Album</a></li>
                  <li><a href="timeline-friends">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic">Edit: Basic Info</a></li>
                  <li><a href="edit-profile-work-edu">Edit: Work</a></li>
                  <li><a href="edit-profile-interests">Edit: Interests</a></li>
                  <li><a href="edit-profile-settings">Account Settings</a></li>
                  <li><a href="edit-profile-password">Change Password</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="index">Landing Page 1</a></li>
                  <li><a href="index-register">Landing Page 2</a></li>
                  <li><a href="newsfeed">Newsfeed</a></li>
                  <li><a href="newsfeed-people-nearby">Poeple Nearly</a></li>
                  <li><a href="newsfeed-friends">My friends</a></li>
                  <li><a href="newsfeed-messages">Chatroom</a></li>
                  <li><a href="newsfeed-images">Images</a></li>
                  <li><a href="newsfeed-videos">Videos</a></li>
                  <li><a href="timeline">Timeline</a></li>
                  <li><a href="timeline-about">Timeline About</a></li>
                  <li><a href="timeline-album">Timeline Album</a></li>
                  <li><a href="timeline-friends">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic">Edit Profile</a></li>
                  <li><a href="contact">Contact Us</a></li>
                  <li><a href="faq">FAQ Page</a></li>
                  <li><a href="404">404 Not Found</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="contact-us">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->
    
    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white">Make Cool Friends !!!</h1>
            	<p>Friend Finder is a social network template that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /> <br />Why are you waiting for? Buy it now.</p>
              <button class="btn btn-primary">Learn More</button>
            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container"> 
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li ><a href="#register" data-toggle="tab">Register</a></li>
                  <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>
              <!--Login-->
              <div class="tab-pane" id="login">
                  <h3>Login</h3>
                  <p class="text-muted">Log into your account</p>
                    
                  <!--Login Form-->
                  <form name="tab-content active" id='Login_form' method='post' >
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-email" class="sr-only">Email</label>
                        <input id="my-email" class="form-control input-group-lg" type="text" name="username" title="Enter Email" required placeholder="Your Email or username"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-password" class="sr-only">Password</label>
                        <input id="my-password" class="form-control input-group-lg" type="password" name="password" title="Enter password" required placeholder="Password"/>
                      </div>
                    </div>
                    <p><a href="#">Forgot Password?</a></p>
                    <button class="btn btn-primary" name="login-btn" id ="login-btn">Login Now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form><!--Login Form Ends-->       
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
          
            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="<?php echo $this->url;?>js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo $this->url;?>js/bootstrap.min.js"></script>
    <script src="<?php echo $this->url;?>js/jquery.appear.min.js"></script>
	<script src="<?php echo $this->url;?>js/jquery.incremental-counter.js"></script>
    <script src="<?php echo $this->url;?>js/script.js"></script>
    
	</body>

<!-- Mirrored from themified.com/friend-finder/index-register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 13:17:19 GMT -->
</html>
