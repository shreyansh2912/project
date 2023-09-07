<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
ob_start();
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$OTP = rand(1000,9999);
if (isset($_REQUEST['register']))
 {
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username   = 'd4dummy11@gmail.com';                     //SMTP username
    $mail->Password   = 'vfwcnwmtsydnlaye';  // your password 2step varified 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                
    $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
    $mail->setFrom('d4dummy11@gmail.com', 'friend-finder.com');
    $mail->addAddress($_REQUEST['email']);   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    
    $bodyContent = "<h1>Hello </h1>".$_POST["name"].": OTP : $OTP";
    $bodyContent .= "<p> Welcome to friend-finder.com <br> You're username is</p>".$_POST["username"]."<p> You're Login password is </p>".$_POST["password"] ;
    $bodyContent .= "<h1 style='color:green;'>Thanks for visiting our website </h1>";
    // $bodyContent .= "<img src='' alt='' height='150px' width='150px'>";
// 

    $mail->Body = $bodyContent."<br>";
    $mail->Subject = 'Welcome to frind-finder.com';
    if(!$mail->send()) 
	{
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } 
	else 
	{
      
    }
}

?>
<?php


if (isset($_REQUEST['register'])) 
{
	// setcookie("name",$_REQUEST["name"],time()+3600,"");
	// setcookie("email",$_REQUEST["email"],time()+3600,"");
	// setcookie("phone",$_REQUEST["phone"],time()+3600,"");
	// setcookie("password",$_REQUEST["password"],time()+3600,"");
	// header("location:login");											
	// echo"success";

}
?>
<!-- Top Banner
    ================================================= -->
    <section id="banner">
			<div class="container">
				

        <!-- Sign Up Form
        ================================================= -->
        <div class="sign-up-form" >
					<a href="login" class="logo"><img src="<?php echo $this->url;?>images/logo.png" alt="Friend Finder"/></a>
					<h2 class="text-white">Find My Friends</h2>
					<div class="line-divider"></div>
					<div class="form-wrapper">
						<p class="signup-text">Signup now and meet awesome people around the world</p>
						<form action="" method="post" >
							<fieldset class="form-group">
								<input type="text" class="form-control" id="example-name" name = "name" placeholder="Enter name">
							</fieldset>
							<fieldset class="form-group">
								<input type="text" class="form-control" id="username" name = "username" placeholder="Enter user-name">
							</fieldset>
							<fieldset class="form-group">
								<input type="email" class="form-control" id="email"name = "email" placeholder="Enter email">
							</fieldset> 
							<fieldset class="form-group">
							<input type="password" class="form-control" id="password" name = "password" placeholder="Enter a password">
							</fieldset>
							<input type="checkbox" required="" >
							<p>By signning up you agree to the terms</p>
							<button class="btn-secondary" name="register" id 	>Signup</button>
						</div>
						<a href="#">Already have an account?</a>
						<img class="form-shadow" src="<?php echo $this->url; ?>images/bottom-shadow.png" alt="" />
					</div><!-- Sign Up Form End -->
				</form>

        <svg class="arrows hidden-xs hidden-sm">
          <path class="a1" d="M0 0 L30 32 L60 0"></path>
          <path class="a2" d="M0 20 L30 52 L60 20"></path>
          <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg>
			</div>
		</section>

    <!-- Features Section
    ================================================= -->
		<section id="features">
			<div class="container wrapper">
				<h1 class="section-title slideDown">social herd</h1>
				<div class="row slideUp">
					<div class="feature-item col-md-2 col-sm-6 col-xs-6 col-md-offset-2">
						<div class="feature-icon"><i class="icon ion-person-add"></i></div>
						<h3>Make Friends</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-images"></i></div>
						<h3>Publish Posts</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-chatbox-working"></i></div>
						<h3>Private Chats</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-compose"></i></div>
						<h3>Create Polls</h3>
					</div>
				</div>
				<h2 class="sub-title">find awesome people like you</h2>
				<div id="incremental-counter" data-value="101242"></div>
				<p>People Already Signed Up</p>
				<img src="<?php echo $this->url; ?>images/face-map.png" alt="" class="img-responsive face-map slideUp hidden-sm hidden-xs" />
			</div>

		</section>

    <!-- Download Section
    ================================================= -->
		<section id="app-download">
			<div class="container wrapper">
				<h1 class="section-title slideDown">download</h1>
				<ul class="app-btn list-inline slideUp">
					<li><button class="btn-secondary"><img src="<?php echo $this->url; ?>images/app-store.png" alt="App Store" /></button></li>
					<li><button class="btn-secondary"><img src="<?php echo $this->url; ?>images/google-play.png" alt="Google Play" /></button></li>
				</ul>
				<h2 class="sub-title">stay connected anytime, anywhere</h2>
				<img src="<?php echo $this->url; ?>images/iPhone.png" alt="iPhone" class="img-responsive" />
			</div>
		</section>

    <!-- Image Divider
    ================================================= -->
    <div class="img-divider hidden-sm hidden-xs"></div>

    <!-- Facts Section
    ================================================= -->
		<section id="site-facts">
			<div class="container wrapper">
				<div class="circle">
					<ul class="facts-list">
						<li>
							<div class="fact-icon"><i class="icon ion-ios-people-outline"></i></div>
							<h3 class="text-white">1,01,242</h3>
							<p>People registered</p>
						</li>
						<li>
							<div class="fact-icon"><i class="icon ion-images"></i></div>
							<h3 class="text-white">21,01,242</h3>
							<p>Posts published</p>
						</li>
						<li>
							<div class="fact-icon"><i class="icon ion-checkmark-round"></i></div>
							<h3 class="text-white">41,242</h3>
							<p>People online</p>
						</li>
					</ul>
				</div>
			</div>
		</section>

    <!-- Live Feed Section
    ================================================= -->
		<section id="live-feed">
			<div class="container wrapper">
				<h1 class="section-title slideDown">live feed</h1>
				<ul class="online-users list-inline slideUp">
					<li#><a href="#" title="Alexis Clark"><img src="<?php echo $this->url; ?>images/users/user-5.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li#>
          <li><a href="#" title="James Carter"><img src="<?php echo $this->url; ?>images/users/user-6.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Robert Cook"><img src="<?php echo $this->url; ?>images/users/user-7.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Richard Bell"><img src="<?php echo $this->url; ?>images/users/user-8.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Anna Young"><img src="<?php echo $this->url; ?>images/users/user-9.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Julia Cox"><img src="<?php echo $this->url; ?>images/users/user-10.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
				</ul>
				<h2 class="sub-title">see what’s happening now</h2>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="feed-item">
							<img src="<?php echo $this->url; ?>images/users/user-1.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Sarah</a> just posted a photo from Moscow</p>
								<p class="text-muted">20 Secs ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="<?php echo $this->url; ?>images/users/user-4.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">John</a> Published a post from Sydney</p>
								<p class="text-muted">1 min ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="<?php echo $this->url; ?>images/users/user-10.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Julia</a> Updated her status from London</p>
								<p class="text-muted">5 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="<?php echo $this->url; ?>images/users/user-3.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Sophia</a> Share a photo from Virginia</p>
								<p class="text-muted">10 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="<?php echo $this->url; ?>images/users/user-2.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Linda</a> just posted a photo from Toronto</p>
								<p class="text-muted">20 mins ago</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feed-item">
							<img src="<?php echo $this->url; ?>images/users/user-17.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Nora</a> Shared an article from Ohio</p>
								<p class="text-muted">22 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="<?php echo $this->url; ?>images/users/user-18.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Addison</a> Created a poll from Barcelona</p>
								<p class="text-muted">23 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="<?php echo $this->url; ?>images/users/user-11.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Diana</a> Posted a video from Captown</p>
								<p class="text-muted">27 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="<?php echo $this->url; ?>images/users/user-1.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Sarah</a> Shared friend's post from Moscow</p>
								<p class="text-muted">30 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="<?php echo $this->url; ?>images/users/user-16.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Emma</a> Started a new job at Torronto</p>
								<p class="text-muted">33 mins ago</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
