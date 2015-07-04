		<div class="share">

		<h2 class="color3"><span class="glyphicon glyphicon-share"> Share Points</span></h2>
<br/>
	<form class="form-horizontal " action="../ng/share.php" method="post" name="frmshare">
	<input type="hidden" id="current" name="current" value="<?php echo balance_per($_SESSION['member_id']); ?>" />

			<section class="row">
				<label class="col col-lg-4 control-label" for="receiver">To : </label>
				<div class="controls">
					<input class="col col-lg-5" type="text" name="rkey" id="rkey" placeholder="Receiver's Key" required>
				</div>
			</section>
			
			<section class="row">
				<label class="col col-lg-4 control-label" for="amount">Amount : </label>
				<div class="controls">
					<input class="col col-lg-5" type="text" name="amount" id="amount" required onkeyup="calbal();">
				</div>
			</section>
			
			<section class="row">
				<label class="col col-lg-4 control-label" for="note">Note : </label>
				<div class="controls">
					<textarea class="form-control col col-lg-5" name="note" id="note" rows="3"></textarea>

				</div>

			</section>
			<section class="row">
				<label class="col col-lg-4 control-label" for="note">New Balance : </label>
				<div class="controls">
					<input class="col col-lg-5" type="text" name="new" id="new" disabled>
				</div>
                
			</section>
            <section class="row">
            <center>
            <span id="result" style="font-size:14px; color:#F00"><?php echo $_GET['c']; ?></span>
            </center>
            </section>
	
	<section class="row">
    
		<center><button class="btn  btn-primary " name="share" id="share">
			 <span class="glyphicon glyphicon-envelope"></span>
		</button></center>
  	</section>
	
	</form>
	<br/>
</div>
<br/>
<br/>