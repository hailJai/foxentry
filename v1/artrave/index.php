<!DOCTYPE html>
<html>
  <head>
   <link rel="shortcut icon" href="../images/logo_fox.ico" />
   <title>ART RAVE - Online Voting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=ABeeZee|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" type="text/css" media="screen">
  </head>
  
  <body id="home" onLoad="updateinfo();">
  <center>
	<iframe src="http://free.timeanddate.com/countdown/i4c619qc/n2280/cf12/cm0/cu4/ct0/cs1/ca0/co0/cr0/ss0/cac74b521/cpc000/pct/tcfff/fs100/szw600/szh253/iso2014-09-27T00:00:00" frameborder="0" width="197" height="54"></iframe>

  </center>
	<section class="container-fluid col-offset-2">
		<div class="row">
		<?php include "_/components/php/header.php"; ?>	
  
  <div class="modal fade bs-example-modal-lg" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                 <h4 class="modal-title" id="myModalLabel">This event would not be possible without</h4>
            </div>
            <div class="modal-body">
            	<center>              
                	<img src="_/css/images/globetel.png" height="230px" width="230px"/>
                	<img src="_/css/images/switchlogo.png" height="230px" width="230px" />
                	<img src="_/css/images/1059px-711Logo.jpg" height="230px" width="230px" />
                	<img src="_/css/images/sussies.jpg" height="230px" width="230px" />
                    <img src="_/css/images/spasignature.jpg" height="230px" width="230px" />
                    <img src="_/css/images/francisds.jpg" height="230px" width="230px" />
                    <img src="_/css/images/coffenections.jpg" height="230px" width="230px" />
                    <img src="_/css/images/laarmonia.png" height="230px" width="230px" />
                    <img src="_/css/images/jstnpneda.png" height="230px" width="230px" />
                    <img src="_/css/images/joelbautista.png" height="230px" width="230px" />
                </center>
                
                
            </div>
            <div class="modal-footer">    
            <button type="button" data-dismiss="modal" class="btn btn-primary">Okay</button>
            
        	</div>
    	</div> 
  </div>
  </div> 
        
        
			<section class="main col col-lg-10">
            
  			<?php include "../predef/usable.php"; ?>
			<?php include "_/components/php/female.php"; ?>
            <?php include "_/components/php/male.php"; ?>
            <?php include "_/components/php/foot.php"; ?>
            

			</section><!--main-->
			

		</div><!--content-->
		
	</section><!--container-->
	
	
  
	<script src="_/js/jquery-1.11.1.min.js"></script>
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>

  </body>
</html>
