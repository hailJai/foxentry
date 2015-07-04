<div class="dashboard">
<h2 class="color1"><span class="glyphicon glyphicon-th-list">  DASHBOARD</span> </h2>

<p id="ttlpoints">TOTAL POINTS IN THE BANK : &nbsp; <span style="font-size:60px;"> <?php echo balance_rec('0000000'); ?> </span></p>
<table class="table">
		<thead>
        <tr>
          <th></th>
          <th>Transactions</th>
          <th>Time</th>
        </tr>
      </thead>
      <tbody>
        <?php echo dashboard(); ?>
      </tbody>
	</table>
</div>
 <br/>
