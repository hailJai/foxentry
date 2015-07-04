<?php
if($_GET['profile'] == ''){
  $profile = $_SESSION['member_id'];
}
else{
  $profile = $_GET['profile'];
}

?>

                                <div class="panel panel-default">
                                <div class="panel-thumbnail"><img src="<?php echo user_photo("cover",$profile); ?>" class="img-responsive"  onerror="this.src='images/samplead12807203.png';"></div>
                                <div class="panel-body"><img src="<?php echo user_photo("dp",$profile); ?>" class="img-circle pull-left" style="margin-top:-1px; margin-right:5px;" onerror="this.src='images/user.png';">
                                  <p class="lead" style="margin-top:10px; margin-left:10px">&nbsp;<?php echo user_info("fname",$profile) ." ". user_info("lname",$profile)?></p>
                              
                                  <p><?php echo follower_count($profile); ?> Followers, <?php echo total_post_count($profile); ?> Posts</p>
                                  <p>
                                     <?php follower_preview($profile); ?>
                                  </p>
                                  <p>
                                  <i class="glyphicon glyphicon-tag"></i> <?php echo user_info("course",$profile) ." ". user_info("specialization",$profile); ?>
                                  </p>
                                  <p>
                                  <i class="glyphicon glyphicon-tag"></i> <?php echo user_info("position",$profile); ?>
                                  </p>
                                </div>
                              </div>
