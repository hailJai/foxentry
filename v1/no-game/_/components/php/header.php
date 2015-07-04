<div class="col-lg-10 col-lg-offset-2">
	<header class="clearfix">
		<p></p>			
		<section class="navbar">
			<ul class="nav navbar-nav">
				<li><a href="index.php" target="_parent"><span class="glyphicon glyphicon-home"></span></a></li>
				<li><a href="personal-info.php">Account Info</a></li>
				<?php
				if (($_SESSION['accesslvl'] == 1) || ($_SESSION['accesslvl'] == 2) || ($_SESSION['accesslvl'] == 4))
				{
					echo '<li><a href="council.php">Council Generated</a></li>';
				}
				if (($_SESSION['accesslvl'] == 1) || ($_SESSION['accesslvl'] == 8) || ($_SESSION['accesslvl'] == 64))
				{
					echo '<li><a href="prof.php">Prof Generated</a></li>';
				}
				?>
                
				
			</ul><!--navigation-->
		</section>			
	</header><!--header-->
</div><!--column-->
