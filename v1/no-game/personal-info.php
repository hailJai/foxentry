<?php
include "conn2.php";
include "../predef/verify.php";
include "../ng/usable.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>No Game Interface</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=ABeeZee|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
  </head>
  <body id="accountinfo">
	<section class="container-fluid col-offset-2">
		<div class="row">
			<?php include "_/components/php/header.php"; ?>

			
			<section class="main col col-lg-10">
            <?php 
            
			if($_GET['complete'] == 'true')
			{
			
			echo '
            <div class="alert alert-success" role="alert">
		  	<strong>Congratulations!</strong> Transfer is now complete.
			</div>';
			}
			if($_GET['complete'] == 'Invalid Code')
			{
			
			echo '
            <div class="alert alert-warning" role="alert">
		  	<strong>Wait!</strong> This code is invalid.
			</div>';
			}
			if($_GET['err'] == '1')
			{
			
			echo '
            <div class="alert alert-danger" role="alert">
		  	<strong>Oops!</strong> Code already redeemed.
			</div>';
			}
			if($_GET['err'] == '3')
			{
			
			echo '
            <div class="alert alert-danger" role="alert">
		  	<strong>Oops!</strong> Balance is not enough.
			</div>';
			}
			?>
            
			<?php include "_/components/php/account-info.php"; ?>
			<?php include "_/components/php/redeem.php"; ?>
			<?php include "_/components/php/share-points.php"; ?>
			</section><!--sidebar-->

		</div><!--content-->
		<?php //include "_/components/php/footer.php"; ?>
	</section><!--container-->
	
	
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
    <script src="_/js/validate_calculate.js"></script>
  </body>
</html>
