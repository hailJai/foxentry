<?php
	
	include("predef/usable.php");
  include("predef/update.inc");
	authenticate();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Foxentry Home</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="_/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="images/logo_fox.ico" />
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="_/css/styles.css" rel="stylesheet">
    
	</head>  
<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
                      
          
            <!-- sidebar -->
            <?php include("dashboard/sidebar.php"); ?>
            <!-- /sidebar -->
          
            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                
                <!-- top nav -->
				<?php include("dashboard/top-nav.php"); ?>
                <!-- /top nav -->
              
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        <!-- content -->                      
                      	<div class="row">
                          
                         <!-- main col left --> 

                        <!-- MAIN PAGE --> 

                        <?php 

                        if($_GET['v'] == "1"){
                          echo '

                        <p class="bg-primary">This a Compatibility Canvas for Foxentry V1 | This canvas is not responsive.</p>
                        <iframe src="' . showPage($_GET["p"]) .'" width="880px" height="600px" id="iframe1" marginheight="0" frameborder="0" onload="autoResize(\'iframe1\');" name="forms" scrolling="no">Frame</iframe>
                        
                          ';
                        }
                        else{
                          includePage($_GET["p"]);
                        }

                        
                        ?>
                        <!-- END MAIN PAGE --> 

                       </div><!--/row-->
                      
                       <!-- news feeds -->
                       <?php include("dashboard/footer.php"); ?>
                       <!-- End news feeds-->
                
                        
                      
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
          
        </div>
    </div>
</div>


<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			Update Status
      </div>
      <form class="form center-block" action="predef/update.php" method="post">
      <div class="modal-body">
          
            <div class="form-group">
              <textarea class="form-control input-lg" autofocus="" placeholder="What do you want to share?" name="update" id="update"></textarea>
            </div>
          
      </div>
      <div class="modal-footer">
          <div>
          <button class="btn btn-primary btn-sm" aria-hidden="true" name="updateBtn" id="updateBtn" type="submit">Post</button>
            <ul class="pull-left list-inline"><li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li><li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li><li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li></ul>
		  </div>	
      </div>
      </form>
  </div>
  </div>
</div>


<div id="changeCover" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      Change Cover Photo
      </div>
      <form class="form center-block" action="predef/update.php" method="post">
      <div class="modal-body">
          
            <div class="form-group">
              <textarea class="form-control input-sm" autofocus="" placeholder="Paste image URL here." name="coverUrl" id="coverUrl"></textarea>
            </div>
          
      </div>
      <div class="modal-footer">
          <div>
          <button class="btn btn-primary btn-sm" aria-hidden="true" name="updateCover" id="updateCover" type="submit">Update</button>
          </div>  
      </div>
      </form>
  </div>
  </div>
</div>
<script language="JavaScript">

function autoResize(id){
    var newheight;
    var newwidth;
    if(document.getElementById){
        newheight=document.getElementById(id).contentWindow.document .body.scrollHeight;
        newwidth=document.getElementById(id).contentWindow.document .body.scrollWidth;
    }
    document.getElementById(id).height= (newheight+20) + "px";
    document.getElementById(id).width= (newwidth) + "px";
}
</script>
	<!-- script references -->
		<script src="_/js/jquery-1.11.1.min.js"></script>
		<script src="_/js/bootstrap.min.js"></script>
		<script src="_/js/scripts.js"></script>
	</body>
</html>