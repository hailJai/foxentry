<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>New Event - Foxentry</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome-4.1.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<script>
function autoSubmit()
{
    var formObject = document.forms['theForm'];
    formObject.submit();
}
function confirmreg()
{
	if(!confirm('By pressing ok you will added to the list. Confirm Registration?')){return false;}
}
</script>
<body>
<?php
include('../account/conn2.php');
include('../predef/usable.php');
$result = mysqli_query($con,"SELECT * FROM fox_events WHERE id='".$_GET["id"]."'");
while($row = mysqli_fetch_array($result))
  {
		
?>
<div class="container-fluid">
	<div class="event-container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
				<div class="banner-container">
					<img class="img-responsive banner-img" src="../images/header2.png">
					<!-- <img class="img-responsive event-logo" src="../images/quditch.png"> -->
					<div class="title-container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
								<img class="img-responsive event-logo" src="<?php echo eventdp($_GET["id"]) ?>">
							</div>
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
								<div class="event-title">
									<h2> <?php echo  $row['name']; ?> </h2>
                                    
                                    	<?php 
                                    	$registration = $row['registration'];
                                    	if ($registration == "Group")
                                    	{
                                    		echo '<a class="btn btn-success" data-toggle="modal" href="#myModal">Register</a>';
                                    	}
                                    	elseif ($registration == "Individual") 
                                    	{
											$counter = $row['count'];
											$regID=$row['id'];
                                    		echo '
                                    		<form action="register.php" name="register" method="post" onSubmit="return confirmreg();">
									 		<input type="hidden" name="txtcount" id="txtcount" value="'.$row['count'].'">
									 		<input type="hidden" name="txtaid" id="txtaid" value="'.$_SESSION['member_id'].'">
									  		<input type="hidden" name="txteid" id="txteid" value="'.$row['id'].'">
									  		<input type="submit" class="btn btn-success" name="register" id="register" value="Register!" align="right" );"/>
											</form>
                                    
                                    		';
                                    	}
										else
										{
										}
                                    	?>
                                    
    
									<h4><?php echo  $row['shortdescription']; ?></h4>
									<p>Organized by: <?php echo  $row['organizer']; ?> (<?php echo  contact($row['aID']); $organizer = $row['aID']; ?>)</p>
									<div class="rating">
										<h4>How interested are you in this event?</h4>
                                         <form action="ratings.php" method="post" id="theForm">
                                         <input type="radio" name="radiog_lite" id="radio5" class="css-checkbox" value="5" onChange="autoSubmit();" <?php echo checked($row['id'],$_SESSION['member_id'], 5) ?>/><label for="radio5" class="css-label">5</label>
                                         <input type="radio" name="radiog_lite" id="radio4" class="css-checkbox" value="4" onChange="autoSubmit();" <?php echo checked($row['id'],$_SESSION['member_id'], 4) ?>/><label for="radio4" class="css-label">4</label>
                                         <input type="radio" name="radiog_lite" id="radio3" class="css-checkbox" value="3" onChange="autoSubmit();" <?php echo checked($row['id'],$_SESSION['member_id'], 3) ?>/><label for="radio3" class="css-label">3</label>
                                         <input type="radio" name="radiog_lite" id="radio2" class="css-checkbox" value="2" onChange="autoSubmit();" <?php echo checked($row['id'],$_SESSION['member_id'], 2) ?>/><label for="radio2" class="css-label">2</label>
                                         <input type="radio" name="radiog_lite" id="radio1" class="css-checkbox" value="1" onChange="autoSubmit();" <?php echo checked($row['id'],$_SESSION['member_id'], 1) ?>/><label for="radio1" class="css-label">1</label>
                                         <input type="hidden" name="txtaid" id="txtaid" value="<?php echo $_SESSION['member_id'] ?>">
  	                                     <input type="hidden" name="txteid" id="txteid" value="<?php echo $row['id'];$regID=$row['id'] ?>">
                                         </form>
									</div>
						
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="event-content">
                	<p><?php echo  $row['longdesc']; ?></p>
				</div>
                	<?php
                	  }
                	?>
				<div class="registrants">
                <br>
                <p align="center">List of Students who registered for the event.</p>

					<table class="table" border="1" width="90%">
						<tr>
						<td><div align="center">#</div></td>
						<td><div align="center">Name</div></td>
						<td><div align="center">Section</div></td>
                        
						<td><div align="center">Year Level</div></td>	
                        <?php

						if($registration == "Group")
						{
						echo '<td><div align="center">Group Name</div></td>';
						}
						if($organizer == $_SESSION['member_id'])
							{
								
								echo '
								<td><div align="center">Contact</div></td>
								<td>Action</td>';
							}		
						?>	
						</tr>
                        
                        <?php 
					$x = 0;
					$regis = mysqli_query($con,"SELECT * FROM fox_users INNER JOIN fox_registrants ON fox_users.uID = fox_registrants.aID WHERE eID='".$regID."' ORDER BY team");
					while($reg = mysqli_fetch_array($regis))
					{
						$x++;
						echo "
						<tr>
						<td>".$x."</td>
						<td>".$reg['fname']." ".$reg['lname']."</td>
						<td>".$reg['section']."</td>
						<td>".$reg['yearlevel']."</td>
						";

						if ($registration == "Group")
						{
							echo "<td>".$reg['team']."  ";						
							echo "</td>";
						}
						if($organizer == $_SESSION['member_id'])
							{
								echo "
								<td>".$reg['contact']."</td>
								<td>
								<form action='register.php' name='register' method='post'>
								<input type='hidden' name='RID' id='RID' value='".$reg['rID']."'/>
								<input type='hidden' name='txteid' id='txteid' value='".$reg['eID']."'/>
								<input type='submit' name='del' id='del' value='X'/>
								</form>
								</td>
								";
							}	

						echo
						"
						</tr>
	
						";
					}

 					?>
                        
					</table>
				</div>
  			</div>
		</div>
  	</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria- labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                	<h4 class="modal-title" id="myModalLabel">Group Registration</h4>
            </div>
            <form class="form-horizontal" role="form" action="register.php" method="post">
            <div class="modal-body">
            	
            		 <div class="form-group">
            			<label class="col-sm-3">Group Name</label>
            			<div class="col-sm-9">
                			<input type="text" id="txtTeam" name="txtTeam" class="form-control" 
                    			placeholder="Enter Group Name" required>
            			</div>
          			</div>
          			<div class="form-group">
            			<label class="col-sm-3">Are you the </label>
            			<div id="txtMember" class="col-sm-9">
			              <select class="form-control" name="txtMember" required>
			                <option>Leader</option>
			                <option>Member</option>
			              </select>
            			</div>
          			</div>
          			<input type="hidden" name="txtcount" id="txtcount" value="<?php echo $counter; ?>">
 					<input type="hidden" name="txtaid" id="txtaid" value="<?php echo $_SESSION['member_id'] ?>">
  					<input type="hidden" name="txteid" id="txteid" value="<?php echo $regID ?>">
            	
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary register" id="grpReg" name="grpReg">Register!</button>
            </div>
            </form>
        </div>
	</div>
</div>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>


