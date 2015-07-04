<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DigiBoard</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome-4.1.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!-- Custom styles for this template -->
<link href="css/signin.css" rel="stylesheet">
<body>

    <div class="container">

      <form class="form-signin" role="form" action="login.php" method="post" name="formadd">
        <h2 class="form-signin-heading">Please sign in</h2><br>
        <input type="text" class="form-control" placeholder="Username" id="username" name="username" required autofocus>
        <input type="text" class="form-control" placeholder="Quiz Code" id="activequiz" name="activequiz" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit" name="submit">Sign in</button><br>
      	<?php
		error_reporting(E_ERROR);
		if ($_GET['n'] != "")
		{
			echo '
        <div class="alert alert-danger" role="alert" style="width:300px;">
		  	'. $_GET['n'] .'
		</div>
		';
		}
		?>
      </form>
		
    </div> <!-- /container -->
  </body>
</html>