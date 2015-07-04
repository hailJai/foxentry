<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Foxentry | Checkpoint</title>
</head>
<link rel="stylesheet" type="text/css" href="../_/css/bootstrap.css">
<link rel="icon" href="../images/logo_fox.ico">
<!-- Custom styles for this template -->
<link href="../_/css/check.css" rel="stylesheet" type="text/css">
<link href="../_/css/login.css" rel="stylesheet" type="text/css">
<body class="login">

    <div class="container">

      <form class="form-signin" role="form" action="validate.php" method="post" name="formadd">
        <h2 class="form-signin-heading">Change Password!</h2><br>
        <div class="alert alert-warning" role="warning" style="max-width:300px;">
        It seems like your using the default password. Kindly change it now.
        </div>
        <input type="password" class="form-control" placeholder="New Password" id="npassword" name="npassword" required autofocus>
        <input type="password" class="form-control" placeholder="Re-type Password" id="rpassword" name="rpassword" required>
        <input type="text" class="form-control" placeholder="Student Number" id="studentNumber" name="studentNumber" required ><br>        
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="update" name="update">Update Password</button><br>
      	<?php
		error_reporting(E_ERROR);
		if ($_GET['n'] != "")
		{
			echo '
        <div class="alert alert-danger" role="alert" style="max-width:300px;">
		  	'. $_GET['n'] .'
		</div>
		';
		}
		?>
        <footer>
        <p><?php include("../predef/footer.inc") ?></p>
    	</footer>
      </form>	
    </div> <!-- /container -->
  </body>
</html>