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
  <body id="prof">
	<section class="container-fluid col-offset-2">
		<div class="row">
			<?php include "_/components/php/header.php"; ?>
			
			<section class="main col col-lg-10">
            
            <?php
				if (($_SESSION['accesslvl'] == 1) || ($_SESSION['accesslvl'] == 8) || ($_SESSION['accesslvl'] == 64))
				{
					include "_/components/php/pgenerate.php";
				}
				else
				{
					echo '<div class="alert alert-warning" role="alert"><strong>Wait!</strong> You are not authorized to view this page.</div>';
				}
			
			
			?>
			</section>

		</div>
		<?php //include "_/components/php/footer.php"; ?>
	</section>
	
	
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
    <script src="_/js/validate_calculate.js"></script>
  </body>
</html>
