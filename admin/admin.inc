<link href="_/css/admin.css" rel="stylesheet">
<div class="row">
	<div class="col-sm-3">
      <!-- Left column -->
      <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>  
      
      <hr>
      
      <ul class="list-unstyled">
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
          <h5>Site Management <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
            <ul class="list-unstyled collapse in" id="userMenu">
                <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i> Foxentry Home</a></li>
                <li><a href="?v=1&p=new"><i class="glyphicon glyphicon-user"></i> Create Account <!-- <span class="badge badge-info">4</span> --></a></li>
                <li><a href="?v=1&p=accounts"><i class="glyphicon glyphicon-cog"></i> View Accounts</a></li>
                <li><a href="?v=1&p=attendance"><i class="glyphicon glyphicon-time"></i> Duty Hours</a></li>
                <li><a href="?v=1&p=ads"><i class="glyphicon glyphicon-flag"></i> Advertisements</a></li>
                <li><a href="?v=1&p=dashads"><i class="glyphicon glyphicon-photo"></i> Login BGs & Dash Ads</a></li>
                <li><a href="?v=1&p=logs"><i class="glyphicon glyphicon-exclamation-sign"></i> Log and Errors</a></li>
            </ul>
        </li>
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
          <h5>Reports <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>
        
            <ul class="list-unstyled collapse" id="menu2">
                <li><a href="#">Prof Reports</a>
                </li>
                <li><a href="#">Bullying Reports</a>
                </li>
                <li><a href="#">Developers Applications</a>
                </li>
                <li><a href="#">Suggestions to Council</a>
                </li>
            </ul>
        </li>
        <li class="nav-header">
        <a href="#" data-toggle="collapse" data-target="#menu3">
          <h5>Social Media <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>
        
            <ul class="list-unstyled collapse" id="menu3">
                <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
            </ul>
        </li>
      </ul>
           
      <hr>
      
      <div class="panel panel-default">
                  <div class="panel-heading"><h4>Reports</h4></div>
                  <div class="panel-body">
                    <?php 
                    $totalReports = selectCount("fox_messages", "*", "WHERE type='bully' OR type='dev' OR type='prof'");
                    $devApps = selectCount("fox_messages", "*", "WHERE type='dev'");
                    $bullying = selectCount("fox_messages", "*", "WHERE type='bully'");
                    $profReps = selectCount("fox_messages", "*", "WHERE type='prof'");
                    $barDev = ($devApps / $totalReports) * 100; 
                    $barBullying = ($bullying / $totalReports) * 100; 
                    $barProf = ($profReps / $totalReports) * 100; 
                    ?>
                    <small>Developer Applications</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $barDev ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $barDev ?>%">
                        <span class="sr-only"><?php echo $barDev ?>% of all Reports</span>
                      </div>
                    </div>
                    <small>Bullying</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $barBullying ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $barBullying ?>%">
                        <span class="sr-only"><?php echo $barBullying ?>% of all Reports</span>
                      </div>
                    </div>
                    <small>Prof Reports</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $barProf ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $barProf ?>%">
                        <span class="sr-only"><?php echo $barProf ?>% of all Reports (warning)</span>
                      </div>
                    </div>
                  </div><!--/panel-body-->
              </div><!--/panel-->
           
      
  	</div><!-- /col-3 -->
    <div class="col-sm-9">
      	
      <!-- column 2 -->	
      <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>  
      
      	<hr>
      
      <a href="#"><strong><i class="glyphicon glyphicon-comment"></i> Master List</strong></a>  
      
      <hr>
      
      <div class="row">
        <div class="col-md-12">
          <ul class="list-group">
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i>  CSO - MASTER LIST OF MEMBERS</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i>  LOOP - MASTER LIST OF MEMBERS</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i>  CodeGeeks - MASTER LIST OF MEMBERS</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i>  IAGORA - MASTER LIST OF MEMBERS</a></li>
            <!-- <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(1 hour ago)</small> Hi all, I've just post a report that show the relationship betwe..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(2 hrs ago)</small> Paul. That document you posted yesterday doesn't seem to contain the over..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart-empty"></i> <small>(4 hrs ago)</small> The map service on c243 is down today. I will be fixing the..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(yesterday)</small> I posted a new document that shows how to install the services layer..</a></li>
            <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(yesterday)</small> ..</a></li> -->
          </ul>
        </div>



        <hr>
      
		<div class="row">
           
            
          
            <!-- center left-->	
         	<div class="col-md-6">
			  <div class="well">Inbox Messages <span class="badge pull-right">3</span></div>
              
              <hr>
              
              <div class="btn-group btn-group-justified">
                <a href="../phpmyadmin" target="_new" class="btn btn-primary col-sm-3">
                  <i class="glyphicon glyphicon-plus"></i><br>
                  phpMyAdmin
                </a>
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="glyphicon glyphicon-cloud"></i><br>
                  FTP
                </a>
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="glyphicon glyphicon-question-sign"></i><br>
                  Help
                </a>
              </div>
              
              <hr>        
              
              <div class="panel panel-default">
                  <div class="panel-heading"><h4>New Requests</h4></div>
                  <div class="panel-body">
                    <div class="list-group">
                    <a href="#" class="list-group-item active">Hosting virtual mailbox serv..</a>
                    <a href="#" class="list-group-item">Dedicated server doesn't..</a>
                    <a href="#" class="list-group-item">RHEL 6 install on new..</a>
                    </div>
                  </div>
              </div>
   
          	</div><!--/col-->
        	<div class="col-md-6">
				<div class="panel panel-default">
                  <div class="panel-heading"><h4>Notices</h4></div>
                  <div class="panel-body">
                    
                  <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a dismissable alert.. just sayin'.
                  </div>

                  This is a dashboard-style layout that uses Bootstrap 3. You can use this template as a starting point to create something more unique.
                  <br><br>
                  Visit the Bootstrap Playground at <a href="http://bootply.com">Bootply</a> to tweak this layout or discover more useful code snippets.
                  </div>
              	</div>
              
                <table class="table table-striped">
                      <thead>
                        <tr><th>Visits</th><th>ROI</th><th>Source</th></tr>
                      </thead>
                      <tbody>
                        <tr><td>45</td><td>2.45%</td><td>Direct</td></tr>
                        <tr><td>289</td><td>56.2%</td><td>Referral</td></tr>
                        <tr><td>98</td><td>25%</td><td>Type</td></tr>
                        <tr><td>..</td><td>..</td><td>..</td></tr>
                        <tr><td>..</td><td>..</td><td>..</td></tr>
                      </tbody>
               	</table>                           
              
			</div><!--/col-span-6-->
     
      </div><!--/row-->
      
      
      </div>
  	</div><!--/col-span-9-->
</div>