<div class="dashboard">
<h2 class="color1"><span class="glyphicon glyphicon-thumbs-up">  Female Candidates</span> </h2>
<?php
if (isset($_SESSION['member_id']))
{
	$txt = "Vote Now! "; 
	echo '<form action="vote.php" method="post">';
}
else
{
	$txt = "Login to Vote "; 
	echo '<form method="post" action="../login.php">';
}


?>
<table class="table table-responsive">
      <tbody>
      <tr>
      <td><img src="_/css/images/10426286_536230929812167_8944427096511436894_n.jpg" width="200px" height="auto" /></td>
      <td><img src="_/css/images/1620691_536230959812164_1922750294674465280_n.jpg" width="200px" height="auto" /></td>
      <td><img src="_/css/images/10645031_536230856478841_3500954442548921348_n.jpg" width="200px" height="auto" /></td>
      <td><img src="_/css/images/10352886_536230889812171_5266498965062408645_n.jpg" width="200px" height="auto" /></td>
      </tr>
      <tr>
      <td><button type="submit" class="btn btn-danger" id="btn_vote" name="btn_vote" value="-1"> <?php echo $txt . awesomecount('-1'); ?></button></td>
      <td><button type="submit" class="btn btn-danger" id="btn_vote" name="btn_vote" value="-2"> <?php echo $txt . awesomecount('-2'); ?></button></td>
      <td><button type="submit" class="btn btn-danger" id="btn_vote" name="btn_vote" value="-3"> <?php echo $txt . awesomecount('-3'); ?></button></td>
      <td><button type="submit" class="btn btn-danger" id="btn_vote" name="btn_vote" value="-4"> <?php echo $txt . awesomecount('-4'); ?></button></td>
      </tr>
      <tr style="margin-top:10px;">
      <td><img src="_/css/images/10653365_536230859812174_3247142328444371667_n.jpg" width="200px" height="auto" /></td>
      <td><img src="_/css/images/10689702_536230989812161_583997632950510027_n.jpg" width="200px" height="auto" /></td>
      <td><img src="_/css/images/10646865_536230986478828_9143198687953154693_n.jpg" width="200px" height="auto" /></td>
      <td></td>
      </tr>
      <tr>
      <td><button type="submit" class="btn btn-danger" id="btn_vote" name="btn_vote" value="-5"> <?php echo $txt . awesomecount('-5'); ?></button></td>
      <td><button type="submit" class="btn btn-danger" id="btn_vote" name="btn_vote" value="-6"> <?php echo $txt . awesomecount('-6'); ?></button></td>
      <td><button type="submit" class="btn btn-danger" id="btn_vote" name="btn_vote" value="-7"> <?php echo $txt . awesomecount('-7'); ?></button></td>
      <td></td>
      </tr>
      </tbody>
	</table>
</form>
</div>
<br/>
