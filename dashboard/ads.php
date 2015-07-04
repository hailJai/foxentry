							  <?php $id = randomize_image("dashad");?>
                              <div class="panel panel-default">
                                <div class="panel-heading"><h4>Sponsored</h4></div>
                                <div class="panel-thumbnail"><img src="<?php echo image_data($id,"url");?>" class="img-responsive"></div>
                               	<div class="panel-body">
                                <?php echo image_data($id,"caption");?>
                                </div>
                              </div>
