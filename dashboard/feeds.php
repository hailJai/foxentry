                                <div class="well"> 
                                   
                                    <h4>News Feeds</h4>
                                   
                                </div>
                     		   <?php 

                           if($_GET['p'] == 'update'){
                              getUpdates($_GET['u'],'specific');
                           }
                           elseif($_GET['profile'] <> ""){
                              getUpdates($_GET['profile'],'user');
                           }
                           else{
                              getUpdates();
                           } 
                           ?>		
                               <!-- START OF PLAIN -->
                               
                            <!-- START OF PHOTO POST -->
                               
							<!-- END OF PHOTO POST -->