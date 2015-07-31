              	<div class="navbar navbar-blue navbar-static-top">  
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
                      </button>
                      <a href="." class="navbar-brand logo"><img src="images/logo.png" width="40" style="margin-left:-6px; margin-top:-6px;"></a>
                  	</div>
                  	<nav class="collapse navbar-collapse" role="navigation">
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav">
                      <!-- <li><a href="?p=home"><i class="glyphicon glyphicon-home"></i> Home</a></li> -->
                      <li>
                        <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Post</a>
 	                    </li>
					            <li><a href="?v=1&p=msg"><i class="glyphicon glyphicon-envelope"></i> Messages <span class="badge"><?php echo selectCount('fox_messages','status',"WHERE receiver ='".$_SESSION['member_id']."' AND status='unread'");?></span></a></li>
                      <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-flag"></i> Notifications <span class="badge"><?php echo selectCount('fox_notifications','sender',"WHERE (msg = 'awesome' OR msg = 'comment') AND status = 'unread' AND receiver = '".$_SESSION['member_id']."'"); ?></span></a>
                        <ul class="dropdown-menu notif-menu">
                          <?php echo getNotifications(); ?>
                          <!-- <li>
                            <a href="?v=1&p=cdp">
                              <div class="notifimage">
                              <img src="http://localhost/foxentry/images/10174859_773537045990760_828173327444542584_n.jpg" width="35px" height="35px" onerror="this.src='images/user.png';">
                              </div>
                              <div class="notiftext">
                              <b>Flash Drive</b> added an awesome point to Jai's post. <br>
                              <small>One minute ago</small>
                              </div> 
                            </a>
                          </li> -->
                          
                          <li><a href="#"><center>All Notifications</center></a></li>
                        </ul>
                      </li>
                    	
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="?v=1&p=cdp">Change Display Photo</a></li>
                          <li><a href="#changeCover" role="button" data-toggle="modal">Change Cover Photo</a></li>
                          <li><a href="?v=1&p=info">Account Settings</a></li>
                          <li><a href="v1/help.php">Help</a></li>
                          <li><a href="">Send Suggestion</a></li>
                          <li><a href="login/logout.php">Log Out</a></li>
                        </ul>
                      </li>
                    </ul>
                  	</nav>
                </div>