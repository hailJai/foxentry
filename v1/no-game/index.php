<?php
include "conn2.php";
include "../ng/this.php";
include "../predef/verify.php";
include "../ng/usable.php";
checkAccount();



?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="shortcut icon" href="images/favicon.ico" ><title>No Game Interface</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=ABeeZee|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" type="text/css" media="screen">
  </head>
  
  <body id="home" onLoad="updateinfo();">
	
	<section class="container-fluid col-offset-2">
		<div class="row">
		<?php include "_/components/php/header.php"; ?>	
		
			<section class="main col col-lg-10">
            
            
      <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <h4 class="modal-title" id="myModalLabel">Please Input Basic Information</h4>
            </div>
            <div class="modal-body">
            	<center>
            		<img width="200px" height="200px" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo basicinfo("scode"); ?>"/>
            		<h5>Personal Key: <strong><?php echo basicinfo("scode"); ?></strong></h5>
                	<h5>Receiver Key: <strong><?php echo basicinfo("rkey"); ?></strong></h5><br>
           	 	</center>
                <form class="registration form-horizontal" action="../ng/update_account.php" method="post">
                <section class="row">
                	<label class="col col-lg-4 control-label" for="receiver">Code Name : </label>
                	<div class="controls">
                		<input class="col col-lg-6" type="text" name="cname" id="cname" required maxlength="15">
                	</div>
                </section>
                <section class="row">
                	<label class="col col-lg-4 control-label" for="receiver">Motto : </label>
                	<div class="controls">
                		<input class="col col-lg-6" type="text" name="motto" id="motto" required max="35">
                	</div>
                </section>
                
            </div>
            <div class="modal-footer">    
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        	</div>
    	</div> 
  </div>
  </div>      
            
            
            
            <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#accountinfo" id="showmodal">Account Info</a>
            
			
			
	<div class="modal fade" id="accountinfo" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                 <h4 class="modal-title" id="myModalLabel">Basic Information</h4>
            </div>
            <div class="modal-body">
            	<center>
            		<img width="200px" height="200px" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo basicinfo("scode"); ?>"/>
            		<h5>Personal Key: <span style="color:#333"><strong><?php echo basicinfo("scode"); ?></strong></span></h5>
                	<h5>Receiver Key: <span style="color:#333"><strong><?php echo basicinfo("rkey"); ?></strong></span></h5><br>
           	 	</center>
                <form class="registration form-horizontal" action="../ng/update.php" method="post">
                <section class="row">
                	<label class="col col-lg-4 control-label" for="receiver">Code Name : </label>
                	<div class="controls">
                		<input class="col col-lg-6" type="text" name="cname" id="cname" required value="<?php echo basicinfo("codename"); ?>" maxlength="15">
                	</div>
                </section>
                <section class="row">
                	<label class="col col-lg-4 control-label" for="receiver">Motto : </label>
                	<div class="controls">
                		<input class="col col-lg-6" type="text" name="motto" id="motto" required value="<?php echo basicinfo("motto"); ?>" maxlength="35">
                	</div>
                </section>
                <section class="row">
                <center>
                	You currently have <span style="font-size:40px"><?php echo balance_per($_SESSION['member_id'])?></span>points
                </center>
                </section>

            </div>
            <div class="modal-footer"> 
              
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            
        	</div>
    	</div> 
  </div>
  </div>
            
	 <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#redeem" id="showmodal">Redeem Points</a>
            
			
			
	<div class="modal fade" id="redeem" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Redeem Code</h4>
            </div>
            
            <div class="modal-body">
            <!--modalbody-->	
                <form class="form-horizontal" role="form" action="../ng/redeem.php" method="post">
				<div class="form-group padding-form">
				<label class="col col-lg-3 control-label" for="">Code : </label>
				<input class="col col-lg-5" type="text"  name="code" id="code" required><br>

                </div>
            <!--modalbody-->	    
        	</div>
            
            <div class="modal-footer">    
            <button class="btn btn-primary btn-margin-top" id="redeem">Redeem</button>
            </form>
        	</div>
    	</div> 
  </div>
  </div>
  
  
  
  
  <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#share" id="showmodal">Share Points</a>
            
			
			
	<div class="modal fade" id="share" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title" id="myModalLabel">Share Points</h4>
            </div>
            
            <div class="modal-body">
            <!--modalbody-->	
            <form class="form-horizontal " action="../ng/share.php" method="post" name="frmshare">
			<input type="hidden" id="current" name="current" value="<?php echo balance_per($_SESSION['member_id']); ?>" />

			<section class="row">
				<label class="col col-lg-4 control-label" for="receiver">To : </label>
				<div class="controls">
					<input class="col col-lg-5" type="text" name="rkey" id="rkey" placeholder="Receiver's Key" required>
				</div>
			</section>
			
			<section class="row">
				<label class="col col-lg-4 control-label" for="amount">Amount : </label>
				<div class="controls">
					<input class="col col-lg-5" type="text" name="amount" id="amount" required onkeyup="calbal();">
				</div>
			</section>
			<section class="row">
			<label class="col col-lg-4 control-label" for="note">New Balance : </label>
			<div class="controls">
				<input class="col col-lg-5" type="text" name="new" id="new" disabled>
			</div>
                
			</section>
            <section class="row">
            <center>
            <span id="result" style="font-size:14px; color:#F00"><?php echo $_GET['c']; ?></span>
            </center>
            </section>
	
			<section class="row">
    
			
  			</section>
	
            <!--modalbody-->	    
        	</div>
            
            <div class="modal-footer">    
            <center><button class="btn  btn-primary " name="share" id="share">
			<span class="glyphicon glyphicon-envelope"></span>
			</button></center>
            </form>
        	</div>
    	</div> 
  </div>
  </div>
  
			
            <?php 
            if ($_GET['n'] == 'done')
			{
			echo '
			<div class="alert alert-success" role="alert" style="margin-top:10px;">
		  	<strong>Congratulations!</strong> Your account is now ready to use.
			</div>';
			}
			elseif ($_GET['n'] == 'redeem')
			{
			echo'
			<div class="alert alert-danger" role="alert" style="margin-top:10px;">
		  	<strong>Oops!</strong> Code already redeemed.
			</div>
			';
			}
			elseif ($_GET['n'] == 'notset')
			{
			echo'
			<div class="alert alert-danger" role="alert" style="margin-top:10px;">
		  	<strong>Oops!</strong> Something went wrong.
			</div>
			';
			}
			?>
			
			<?php include "_/components/php/dashboard.php"; ?>
			<?php include "_/components/php/leaderboard.php"; ?>
			<?php // include "_/components/php/audit.php"; ?>
			
			</section><!--main-->
			

		</div><!--content-->
		
	</section><!--container-->
	
	
 
  
	<script src="_/js/jquery-1.11.1.min.js"></script>
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
    <script src="_/js/validate_calculate.js"></script>
    <?php checkinfo(); ?>

  </body>
</html>
