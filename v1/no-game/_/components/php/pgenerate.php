<div class="pgenerate">
	<h2 class="color5"><span class="glyphicon glyphicon-qrcode"> Generate a Code </span></h2>
	<br/>
	<form class="registration form-horizontal" action="../ng/pcodegen.php" method="post" name="frmAdd" onsubmit='return checkbal();'>
    
    
	
			<section class="row">
            <input type="hidden" id="current" name="current" value="<?php echo balance_per($_SESSION['member_id']); ?>" />
				<label class="col col-lg-4 control-label" for="receiver">Points Amount : </label>
				<div class="controls">
					<input class="col col-lg-6" type="text" name="pamount" id="pamount" required>
				</div> 
			</section>
			
			<section class="row">
				<label class="col col-lg-4 control-label" for="amount">Number of Codes : </label>
				<div class="controls">
					<input class="col col-lg-6" type="text" name="item" id="item"  required onkeyup="calbalprof();">
				</div>
			</section>

	<section class="row">
		<center><button class="btn btn-primary btn-mini" id="generate" type="submit">Generate</a></center>
  	</section>

			
			<section class="row">
				<label class="col col-lg-4 control-label" for="note">Current Balance : </label>
				<div class="controls">
					<input class="col col-lg-6" type="text" name="bal" id="bal"  disabled>
				</div>
			</section>


	
	</form>
	<br/>
</div><br />
<div class="pgenerate">
	<h2 class="color5"><span class="glyphicon glyphicon-qrcode"> Professor Generated Codes</span></h2>
    <section class="row">
    <table class="table table table-striped">
		<thead>
        <tr>
       	  <th></th>
          <th>Count</th>
          <th>Amount</th>
          <th>Code</th>
        </tr>
      </thead>
      <tbody>
	  <?php echo profcodes($_SESSION['member_id']); ?>
      </tbody>
	</table>
    </section>
    </div>
<br/>
<br/>