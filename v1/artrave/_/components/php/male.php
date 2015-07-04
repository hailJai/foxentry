<div class="dashboard">
<h2 class="color2"><span class="glyphicon glyphicon-thumbs-up">  Male Candidates</span> </h2>
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

<table class="table">
      <tbody>
      <tr>
      <td><img src="_/css/images/10678641_536231083145485_394072199659463049_n.jpg" width="200px" height="auto" /></td>
      <td><img src="_/css/images/10689815_536231069812153_343320012831232707_n.jpg" width="200px" height="auto" /></td>
      <td><img src="_/css/images/10671206_536231143145479_7367048512160771097_n.jpg" width="200px" height="auto" /></td>
      <td><img src="_/css/images/16363_536231223145471_5866368845489563965_n.jpg" width="200px" height="auto" /></td>
      </tr>
      <tr>
      <td><button type="submit" class="btn btn-primary" id="btn_vote" name="btn_vote" value="-8"><?php echo $txt . awesomecount('-8'); ?></button></td>
      <td><button type="submit" class="btn btn-primary" id="btn_vote" name="btn_vote" value="-9"><?php echo $txt . awesomecount('-9'); ?></button></td>
      <td><button type="submit" class="btn btn-primary" id="btn_vote" name="btn_vote" value="-10"><?php echo $txt . awesomecount('-10'); ?></button></td>
      <td><button type="submit" class="btn btn-primary" id="btn_vote" name="btn_vote" value="-11"><?php echo $txt . awesomecount('-11'); ?></button></td>
      </tr>
      <tr style="margin-top:10px;">
      <td><img src="_/css/images/10400814_536231153145478_8436977808144142650_n.jpg" width="200px" height="auto" /></td>
      <td><img src="_/css/images/10454919_536231229812137_2525302347728323551_n.jpg" width="200px" height="auto" /></td>
      <td><img src="_/css/images/10685538_536231243145469_8988376961359323229_n.jpg" width="200px" height="auto" /></td>
      <td><img src="_/css/images/10411937_536231313145462_1474098899563303546_n.jpg" width="200px" height="auto" /></td>
      </tr>
      <tr>
      <td><button type="submit" class="btn btn-primary" id="btn_vote" name="btn_vote" value="-12"><?php echo $txt . awesomecount('-12'); ?></button></td>
      <td><button type="submit" class="btn btn-primary" id="btn_vote" name="btn_vote" value="-13"><?php echo $txt . awesomecount('-13'); ?></button></td>
      <td><button type="submit" class="btn btn-primary" id="btn_vote" name="btn_vote" value="-14"><?php echo $txt . awesomecount('-14'); ?></button></td>
    <td><button type="submit" class="btn btn-primary" id="btn_vote" name="btn_vote" value="-15"><?php echo $txt . awesomecount('-15'); ?></button></td>
      </tr>
      </tbody>
	</table>
</form>
</div>
<br/>
