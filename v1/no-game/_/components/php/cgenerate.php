	<div class="cgenerate">
	<h2 class="color4"><span class="glyphicon glyphicon-qrcode"> Generate Code</span></h2>
<br/>
	<form class="registration form-horizontal" action="../ng/cgc.php" method="post">
			<section class="row">
				<label class="col col-lg-4 control-label" for="receiver">Total Points : </label>
				<div class="controls">
					<input class="col col-lg-6" type="text" name="tpoints" id="tpoints" required onkeyup="indepen();">
				</div>
			</section>
			
			<section class="row">
				<label class="col col-lg-4 control-label" for="amount">Max Receiver : </label>
				<div class="controls">
					<input class="col col-lg-6" type="text" name="maxr" id="maxr" required onkeyup="indepen();">
				</div>
			</section>
			
			<section class="row">
				<label class="col col-lg-4 control-label" for="note">Individual Points : </label>
				<div class="controls">
					<input class="col col-lg-6" type="text" name="ipoints" id="ipoints" readonly>

				</div>
			</section>

			
			<section class="row">
				<label class="col col-lg-4 control-label" for="note">Code : </label>
				<div class="controls">
					<input class="col col-lg-6" type="text" name="code" id="code" value="<?php echo generate_key('council','1234567890','ABCDEFGHIJKLMNOPQRSTUVWXYZ'); ?>" readonly>
				</div>
			</section>

	<section class="row">
		<center><button class="btn  btn-primary " type="submit">Save
		</button></center>
  	</section>
	
	</form>
	<br/>
</div>
<br />
<div class="cgenerate">
	<h2 class="color4"><span class="glyphicon glyphicon-qrcode"> Codes Generated</span></h2>
    <section class="row">
    <table class="table table table-striped">
		<thead>
        <tr>
       	  <th></th>
          <th>Status</th>
          <th>Total</th>
          <th>iPoint</th>
          <th>Code</th>
        </tr>
      </thead>
      <tbody>
	  <?php echo cgc(); ?>
      </tbody>
	</table>
    </section>
    </div>
	<br/>
		<br/>
	<br/>
		<br/>