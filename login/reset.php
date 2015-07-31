<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Foxentry | Forgot Password</title>
</head>
<link rel="stylesheet" type="text/css" href="../_/css/bootstrap.css">
<link rel="icon" href="../images/logo_fox.ico">
<!-- Custom styles for this template -->
<link href="../_/css/check.css" rel="stylesheet" type="text/css">
<link href="../_/css/login.css" rel="stylesheet" type="text/css">
<body class="login">

    <div class="container">
    <?php
    include("../predef/usable.php");
    error_reporting(E_ERROR);
      $tokenExist = selectCount("fox_users","'token'","WHERE token = '".$_GET['t']."'");
      if(isset($_GET['t'])){
      if($tokenExist > 0){
        echo '
        <form class="form-signin" role="form" action="../predef/update.php?action=recoverpassword&t='.$_GET['t'].'" method="post" name="formadd">
          <h2 class="form-signin-heading">Update Password.</h2><br>
          <input type="password" class="form-control" placeholder="New Password" id="password" name="password" required autofocus><br>
          <button class="btn btn-lg btn-primary btn-block" type="submit" id="recoverpassword" name="recoverpassword">Update Password</button><br>
        ';
      }
      else{
        echo '
        <form class="form-signin">
        <h2 class="form-signin-heading">Oops!</h2><br>
        <div class="alert alert-danger" role="alert" style="max-width:300px;">
        Link expired. <a href="../">Home</a>
        </div>
        ';
      }
      }
    else{
      echo '
        <form class="form-signin" role="form" action="../predef/update.php?action=recovery" method="post" name="formadd">
        <h2 class="form-signin-heading">Enter your email.</h2><br>
        <input type="text" class="form-control" placeholder="Email Address" id="email" name="email" required autofocus><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="recovery" name="recovery">Reset Password</button><br>
        <p>Doncha worry, we\'ll send a recovery link!</p>
       ';

        if ($_GET['n'] != "")
        {
          echo '
            <div class="alert alert-danger" role="alert" style="max-width:300px;">
            '. $_GET['n'] .'
          </div>
        ';
        }

    }
    ?>
      <footer>
        <p><?php include("../predef/footer.inc") ?></p>
    	</footer>
      </form>
    </div> <!-- /container -->
  </body>
</html>