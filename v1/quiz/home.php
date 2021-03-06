<?php
error_reporting(E_ERROR);
include('defined.php');
if(!isset($_SESSION['username']))
{
	header( "refresh:0;url=logout.php" );
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>DigiBoard | Quiz</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome-4.1.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div id="navbar-wrapper">
  <div class="row">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="fa fa-user fa-2x"></span>
        </button>
        <a class="navbar-brand" href="#">Foxentry</a>
      </div>

      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><?php echo $_SESSION['username']; ?></a>
          </li>
          <li>
            <a href="#">Score: <?php echo showscore();?></a>
          </li>
          <li>
            <a href="logout.php"><span class="fa fa-power-off"></span>&nbsp;<p class="hidden-lg hiddeb-md hidden-sm">Log out</p></a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse --> 
    </nav>
  </div>
<!-- <div class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Foxentry</a>
        </div>
    </div>
</div -->
</div>
<div id="quiz-wrapper">
  <div class="container">
    <div class="row">
    <?php 
	if(isset($_GET['e'])){
	echo '
    <div class="alert alert-danger" role="alert">
		  	'. $_GET['e'] .'
	</div>
	';
	}
	elseif(isset($_GET['n'])){
	echo '
    <div class="alert alert-success" role="alert">
		  	<strong>Answer Saved.</strong> Your answer is <strong>'.showanswer().'</strong>
	</div>';
	}
	?>
      <div class=" main-content">
        <div class="question">
          <h3 class="text-left">Answer Here : </h3>
        </div><!--  end of question -->
          <div class="panel">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-9 col-md-offset-2 col-sm-offset-1 col-xs-offset-1">
                  <form action="answer.php" method="post">
                    <div class="input-group">
                      <input class="form-control" type="txt" placeholder="Answer" name="answer" id="answer">
                      <button class="btn btn-info btn-lg" type="submit">Submit</button>
                    </div>
                  </form><!--  end of form -->
              </div>  <!-- end of col-md -->
            </div><!--  end of row -->
          </div> <!-- end of panel-body -->
        </div> <!-- end of panel -->
      </div><!--  end of main content -->
    </div><!--  end of row -->
  </div><!--  end of container -->
</div> <!-- end of quiz wrapper -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>  
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>