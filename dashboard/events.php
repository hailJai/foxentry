                              <?php $id = selectData('fox_events','id', "WHERE status = 'active' ORDER BY id DESC LIMIT 1"); ?>
                              <div class="panel panel-default">
                                 <div class="panel-heading"><a href="?v=1&p=events" class="pull-right">View all</a> <h4>Latest Events</h4></div>
                                  <div class="panel-thumbnail"><a href="?v=1&p=events&id=<?php echo $id; ?>"><img src="<?php echo selectData('fox_events','display', "WHERE status = 'active' ORDER BY id DESC LIMIT 1"); ?>" class="img-responsive"></a></div>
                               	
                                  <div class="panel-body">
                                    <h3><?php echo selectData('fox_events','name', "WHERE status = 'active' ORDER BY id DESC LIMIT 1"); ?></h3>                              
                                    <div class="clearfix"></div>
                                    <?php echo selectData('fox_events','shortdescription', "WHERE status = 'active' ORDER BY id DESC LIMIT 1"); ?>
                                    <hr>
                                  </div>
                              </div>