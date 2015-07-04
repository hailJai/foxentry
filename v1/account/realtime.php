<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>realtime-test</title>
</head>
<?php

include("../predef/usable.php");
include('../predef/verify.php');
include('conn2.php');
include("../this.php");



?>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<body>
 <form name="frmSearch" method="post">
        <textarea id="postContent" name="postContent" rows="4" style="width:288px; margin-bottom:-10px" onfocus="empty()" onclick="empty()"></textarea>
        <input type="hidden" name="txtaID" value="1"/>
        <input name="btn_search" type="submit"  id="searchSubmit" value=""/>
       
</form>
<div id="info" />
        <ul id="comment"></ul>
        </div>
</body>
</html>
 <script type="text/javascript">
               $(document).ready(function(){

                    function showComment(){
                      $.ajax({
                        type:"post",
                        url:"update_2.php",
                        data:"action=showcomment",
                        success:function(data){
                             $("#comment").html(data);
                        }
                      });
                    }

                    showComment();


               	    $("#searchSubmit").click(function(){

                          var postContent=$("#postContent").val();
                          var txtaID=$("#txtaID").val();

                          $.ajax({
                              type:"post",
                              url:"update_2.php",
                              data:"postContent="+postContent+"&txtaID="+txtaID+"&action=addcomment",
                              success:function(data){
                                showComment();
                                 
                              }

                          });

                    });
               });
</script>