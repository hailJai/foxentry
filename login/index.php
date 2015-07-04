<?php
error_reporting(E_ERROR); 
include("../predef/usable.php");
//include("../predef/filter.php");
$url = loginbg(login);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/logo_fox.ico">

    <title>Foxentry | Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../_/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../_/css/login.css" rel="stylesheet" type="text/css">

  </head>

  <body class="login">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height:50px">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="../images/logo.png" width="40" height="40" alt="logo" id="logo"> <?php include("../predef/name.inc");?></a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" method="post" action="validate.php">
            <div class="form-group">
              <input type="text" placeholder="Username" class="form-control" name="username" id="username">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-success" name="submit" id="sumbit">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron cover" style="background-image: url(<?php echo $url;?>);">
      <div class="container" style="color:#CCC">
        <h1>Howdy, Foxes!</h1>
        <p>Welcome to Foxentry. Tell us how do you feel about its new look! <br>Want your photographs to be featured here? Send them at foxentrydev@gmail.com</p>
        <p>Cover photo <?php echo caption($url); ?>. <a class="btn btn-warning" role="button">Follow @mysteries</a> </p>
        <p><a class="btn btn-primary btn-lg" role="button">Today is <?php
	date_default_timezone_set("Asia/Singapore");
	echo date("F jS, l", time()); 
	?></a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Hiring Developers!</h2>
          <p>Foxentry Developers are currently looking for Coders and Designers with or without experience in Web. Everyone that is interested is welcome.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Looking for the Council?</h2>
          <p>The council's office is at St. Joseph Hall Room 103. We are there from 9AM until 6:30 PM. If you have any concerns, feel free to drop by our office. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Having Problems?</h2>
          <p>Having problem accessing your account? Something in mind that you wanna ask? Interested in sending a photograph? Want to send a suggestion or comment?</p>
          <p><a class="btn btn-default" href="/foxentry/help.php" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p><?php include("../predef/footer.inc") ?></p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../_/js/jquery-1.11.1.min.js"></script>
    <script src="../_/js/bootstrap.min.js"></script>

  </body>
</html>