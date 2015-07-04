<?php 

	$result3 = mysqli_query($con,"SELECT * FROM ng_account WHERE uID = '".$_SESSION['member_id']."'");
	while($rec = mysqli_fetch_array($result3))
  	{

?>

<div class="accountinfo">
<h2 class="color1"><span class="glyphicon glyphicon-user"> Account Information</span></h2>
<center>




<table class="table-condensed">
        <tr>
          <td class="formLabel">Codename: </td>
          <td class="info"><?php echo $rec['codename']?></td>
          <td rowspan="5"><img class="hidden-sm hidden-xs" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo $rec['secode']?>" id="selfie"></td>
        </tr>

        <tr>
          <td class="formLabel">Received Key: </td>
          <td class="info"><?php echo $rec['rkey']?></td>
        </tr>

        <tr> 
          <td class="formLabel">Sender Key: </td>
          <td class="info"><?php echo $rec['skey']?></td>
          </tr>

          <tr>
          <td class="formLabel">Security Code: </td>
          <td class="info"><?php echo $rec['secode']?></td>
        </tr>

        <tr>
          <td class="formLabel">Motto:</td>
          <td class="info"><?php echo $rec['motto']?> </td>
        </tr>

         <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>

        <tr>
        <td colspan="3" id="balance">POINT BALANCE: &nbsp; <span style="font-size:50px"><?php echo $rec['balance']?></span></td>
      </tr>

      </table>
</center>

  </div>
  <?php } ?>