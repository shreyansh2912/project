<div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3" style="position:static;">
            <div class="profile-card">
            	<img src="<?php echo $this->url; ?>images/users/user-1.jpg" alt="user" class="profile-photo" />
            	<h5><a href="timeline" class="text-white">Sarah Cruiz</a></h5>
            	<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="home">Home</a></div></li>
              <li><i class="icon ion-ios-people"></i><div><a href="people-nearby">People Nearby</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="friend">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="message">Messages</a></div></li>
              <li><i class="icon ion-images"></i><div><a href="image">Images</a></div></li>
              <li><i class="icon ion-ios-videocam"></i><div><a href="video">Videos</a></div></li>
            </ul>
            <!--news-feed links ends-->
            <div id="chat-block">
              <div class="title">Chat online</div>
              <ul class="online-users list-inline">
                <li><a href="newsfeed-messages" title="Linda Lohan"><img src="<?php echo $this->url;?>images/users/user-2.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages" title="Sophia Lee"><img src="<?php echo $this->url;?>images/users/user-3.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages" title="John Doe"><img src="<?php echo $this->url;?>images/users/user-4.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages" title="Alexis Clark"><img src="<?php echo $this->url;?>images/users/user-5.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages" title="James Carter"><img src="<?php echo $this->url;?>images/users/user-6.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages" title="Robert Cook"><img src="<?php echo $this->url;?>images/users/user-7.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages" title="Richard Bell"><img src="<?php echo $this->url;?>images/users/user-8.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages" title="Anna Young"><img src="<?php echo $this->url;?>images/users/user-9.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="newsfeed-messages" title="Julia Cox"><img src="<?php echo $this->url;?>images/users/user-10.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
              </ul>
            </div><!--chat block ends-->
          </div>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="<?php echo $this->url;?>images/users/user-1.jpg" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a href="#"><i class="ion-compose"></i></a></li>
                      <li><a href="#"><i class="ion-images"></i></a></li>
                      <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                      <li><a href="#"><i class="ion-map"></i></a></li>
                    </ul>
                    <button class="btn btn-primary pull-right">Publish</button>
                  </div>
                </div>
            	</div>
            </div><!-- Post Create Box End -->

            <!-- Friend List
            ================================================= -->
            <div class="friend-list">
            	<div class="row">
            		<div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?php echo $this->url;?>images/covers/1.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?php echo $this->url;?>images/users/user-3.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline" class="profile-link">Sophia Lee</a></h5>
                      	<p>Student at Harvard</p>
                      </div>
                    </div>
                  </div>
                </div>
            		<div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?php echo $this->url;?>images/covers/3.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?php echo $this->url;?>images/users/user-4.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline" class="profile-link">John Doe</a></h5>
                      	<p>Traveler</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?php echo $this->url;?>images/covers/4.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?php echo $this->url;?>images/users/user-10.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="timeline" class="pull-right text-green">My Friend</a>
                      	<h5><a href="#" class="profile-link">Julia Cox</a></h5>
                      	<p>Art Designer</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?php echo $this->url;?>images/covers/5.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?php echo $this->url;?>images/users/user-7.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timelime" class="profile-link">Robert Cook</a></h5>
                      	<p>Photographer at Photography</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?php echo $this->url;?>images/covers/6.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?php echo $this->url;?>images/users/user-8.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline" class="profile-link">Richard Bell</a></h5>
                      	<p>Graphic Designer at Envato</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?php echo $this->url;?>images/covers/7.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?php echo $this->url;?>images/users/user-2.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline" class="profile-link">Linda Lohan</a></h5>
                      	<p>Software Engineer</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?php echo $this->url;?>images/covers/8.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?php echo $this->url;?>images/users/user-9.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline" class="profile-link">Anna Young</a></h5>
                      	<p>Musician</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?php echo $this->url;?>images/covers/9.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?php echo $this->url;?>images/users/user-6.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline" class="profile-link">James Carter</a></h5>
                      	<p>CEO at IT Farm</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="<?php echo $this->url;?>images/covers/10.jpg" alt="profile-cover" class="img-responsive cover" />
                  	<div class="card-info">
                      <img src="<?php echo $this->url;?>images/users/user-5.jpg" alt="user" class="profile-photo-lg" />
                      <div class="friend-info">
                        <a href="#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="timeline" class="profile-link">Alexis Clark</a></h5>
                      	<p>Traveler</p>
                      </div>
                    </div>
                  </div>
                </div>
            	</div>
            </div>
          </div>

    			<!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			<div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Who to Follow</h4>
              <div class="follow-user">
                <img src="<?php echo $this->url;?>images/users/user-11.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline">Diana Amber</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="<?php echo $this->url;?>images/users/user-12.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline">Cris Haris</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="<?php echo $this->url;?>images/users/user-13.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline">Brian Walton</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="<?php echo $this->url;?>images/users/user-14.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline">Olivia Steward</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="<?php echo $this->url;?>images/users/user-15.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="timeline">Sophia Page</a></h5>
                  <a href="#" class="text-green">Add friend</a>
                </div>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </div>