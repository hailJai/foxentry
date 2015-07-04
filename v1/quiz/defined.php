<?php
session_start();
function showscore(){
	$username = $_SESSION['username'];
	include("../account/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM qz_account WHERE username LIKE '".$username."'");
	while($row3 = mysqli_fetch_array($result3))
  	{
 		$info = $row3['score'];
  	}
	return $info;
}
function showanswer(){
	$username = $_SESSION['username'];
	include("../account/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM qz_account WHERE username LIKE '".$username."'");
	while($row3 = mysqli_fetch_array($result3))
  	{
 		$info = $row3['answer'];
  	}
	return $info;
}
function showquizzes(){
	include("../account/conn2.php");
	$result3 = mysqli_query($con,"SELECT DISTINCT activequiz FROM qz_account");
	while($row3 = mysqli_fetch_array($result3))
  	{
 		echo '<button type="submit" class="btn btn-success" value="'.$row3['activequiz'].'" id="quiz" name="quiz">'.$row3['activequiz'].'</button>&nbsp';
  	}
}
function showresults($quizname){
	include("../account/conn2.php");
	$result3 = mysqli_query($con,"SELECT * FROM qz_account WHERE activequiz LIKE '".$quizname."'");
	while($row3 = mysqli_fetch_array($result3))
  	{
 		echo '
		<div class="row center-block">
		<tr>
		<td>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <h3>'.$row3['username'].'</h3>
              </div>
        </td>
		<td> 
			  <div class="col-lg-4 col-md-4 col-sm-4">
                <h3>'.$row3['answer'].'</h3>
              </div>
        </td>
		<td>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <h3 class="text-center">'.$row3['score'].'</h3>
              </div>
		</td>
		</tr>
		';
  	}
}
?>