<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from themified.com/friend-finder/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2023 13:17:19 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Friend Finder | A Complete Social Network Template</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="<?php echo $this->url; ?>css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo $this->url; ?>css/style.css" />
		<link rel="stylesheet" href="<?php echo $this->url; ?>css/ionicons.min.css" />
    <link rel="stylesheet" href="<?php echo $this->url; ?>css/font-awesome.min.css" />
    
    <!--Google Font-->
    <link href="<?php echo $this->url;?>https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php echo $this->url; ?>images/fav.png"/>
	</head>
	<body>


<!-- Header
    ================================================= -->
    <header id="header" >
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
            <a class="navbar-brand" href="index-register"><img src="<?php echo $this->url; ?>images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="<?php echo $this->url; ?>images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="index ">Landing Page 1</a></li>
                    <li><a href="index-register">Landing Page 2</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="<?php echo $this->url; ?>images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="home">Home</a></li>
                    <li><a href="people-nearby">Poeple Nearly</a></li>
                    <li><a href="friend">My friend</a></li>
                    <li><a href="message">Chatroom</a></li>
                    <li><a href="image">Images</a></li>
                    <li><a href="video">Videos</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="<?php echo $this->url; ?>images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline">Timeline</a></li>
                  <li><a href="timeline-about">Timeline About</a></li>
                  <li><a href="album">Timeline Album</a></li>
                  <li><a href="friends">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic">Edit: Basic Info</a></li>
                  <li><a href="edit-profile-work-edu">Edit: Work</a></li>
                  <li><a href="edit-profile-interest">Edit: Interests</a></li>
                  <li><a href="edit-profile-settings">Account Settings</a></li>
                  <li><a href="edit-profile-password">Change Password</a></li>
                </ul>
              </li>
              <!-- <li class="dropdown">
                <a href="<?php echo $this->url; ?>" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="<?php echo $this->url; ?>images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="index">Landing Page 1</a></li>
                  <li><a href="index-register">Landing Page 2</a></li>
                  <li><a href="home">Newsfeed</a></li>
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
              </li> -->
              <li class="dropdown"><a href="contact-us">Contact-us</a></li>
              <li class="dropdown"><a href="login">Login</a></li>
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