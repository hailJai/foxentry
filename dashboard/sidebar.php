			<div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
              
              	<ul class="nav">
          			<li><a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a></li>
            	</ul>
               
                <ul class="nav hidden-xs" id="lg-menu">
                    <li><a href="?v=1&p=events"><i class="glyphicon glyphicon-map-marker"></i> Events  </a></li>
                    <li><a href="?v=1&p=joined"><i class="glyphicon glyphicon-magnet"></i> Events Registered</a></li>
                    <li><a href="?v=1&p=dev"><i class="glyphicon glyphicon-flash"></i> Apply as Developer</a></li>
                    <li><a href="http://goo.gl/hrv2pq" target="new"><i class="glyphicon glyphicon-leaf"></i> Apply as Council Staff</a></li>
                    <li><a href="?v=1&p=bullying"><i class="glyphicon glyphicon-tag"></i> Report Bullying</a></li>
                    <li><a href="?v=1&p=prof"><i class="glyphicon glyphicon-book"></i> Report a Prof</a></li>
                    <li><a href="?v=1&p=achat"><i class="glyphicon glyphicon-tower"></i> Anonymous Chat</a></li>
                    <li><a href="v1/dev/"><i class="glyphicon glyphicon-tree-conifer"></i> Developers</a></li>
                    <br>
                    <li><a href="?v=1&p=myevents"><i class="glyphicon glyphicon-paperclip"></i> My Events</a></li>
                    <li><a href="?v=1&p=newevent"><i class="glyphicon glyphicon-file"></i> Create Event</a></li>
                    <br>
                    <?php 
                    if( user_info("user_level",$profile) < 32){
                        echo '<li><a href="?p=admin"><i class="glyphicon glyphicon-th"></i> Admin Dashboard</a></li>';
                    }
                    ?>
                    
                </ul>
                <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                    <li>
                      <a href="http://www.csccicthau.com"><h3>Howdy Foxes!</h3> created with <br><i class="glyphicon glyphicon-heart-empty"></i> by csccicthau</a>
                    </li>
                </ul>
              
              	<!-- tiny only nav-->
                <ul class="nav visible-xs" id="xs-menu">
                  	<li><a href="?v=1&p=events">&nbsp&nbsp<i class="glyphicon glyphicon-map-marker"></i></a></li>
                    <li><a href="?v=1&p=joined">&nbsp&nbsp<i class="glyphicon glyphicon-magnet"></i></a></li>
                    <li><a href="?v=1&p=dev">&nbsp&nbsp<i class="glyphicon glyphicon-flash"></i></a></li>
                    <li><a href="http://goo.gl/hrv2pq" target="new">&nbsp&nbsp<i class="glyphicon glyphicon-leaf"></i></a></li>
                    <li><a href="?v=1&p=bullying">&nbsp&nbsp<i class="glyphicon glyphicon-tag"></i></a></li>
                    <li><a href="?v=1&p=prof">&nbsp&nbsp<i class="glyphicon glyphicon-book"></i></a></li>
                    <li><a href="?v=1&p=achat">&nbsp&nbsp<i class="glyphicon glyphicon-tower"></i></a></li>
                    <li><a href="v1/dev/">&nbsp&nbsp<i class="glyphicon glyphicon-tree-conifer"></i></a></li>
                    <br>
                    <li><a href="?v=1&p=myevents">&nbsp&nbsp<i class="glyphicon glyphicon-paperclip"></i></a></li>
                    <li><a href="?v=1&p=newevent">&nbsp&nbsp<i class="glyphicon glyphicon-file"></i></a></li>
                    <br>
                    <?php 
                    if( user_info("user_level",$profile) < 32){
                        echo '<li><a href="?p=admin">&nbsp&nbsp<i class="glyphicon glyphicon-th"></i></a></li>';
                    }
                    ?>
                </ul>
              
            </div>