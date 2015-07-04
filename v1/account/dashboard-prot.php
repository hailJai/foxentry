<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<style type="text/css">
a {
	color: #F60;
}
a:visited {
	color: #F60;
	text-decoration: none;
}
a:hover {
	color: #F40;
	text-decoration: underline;
}
a:active {
	color: #F60;
	text-decoration: none;
}
a:link {
	text-decoration: none;
}
.dashpost{
	width:600px;
	border:0px solid;
	display:inline-block;
	margin-top:5px;
}
.imgdp{
	width:74px;
	margin-right:-4px;
	background-image:url(../images/dp-bg.png);
	background-repeat:no-repeat;
	display:inline-block;
}
.imgdp a.radius img{
	cursor: pointer;
	border-radius: 30em;
	-webkit-border-radius: 30em;
	-moz-border-radius: 30em;
	-o-border-radius: 30em;
	width: 54px;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
}
.imgdp a img:hover{
	opacity: 0.7;
}
.postcontainer{
	width:500px;
	display:inline-block;
	vertical-align:top;
	padding:5px;
	border:solid 1px #F9A32F;
	min-height:60px;
}
.postcontainer_com{
	width: 400px;
	display: inline-block;
	vertical-align: top;
	padding: 5px;
	border: solid 1px #F9A32F;
	min-height: 40px;
}
.nameplate{
	font-family:Arial, Helvetica, sans-serif;
	color:#F60;
	font-size:14px;
	font-weight:bold;
}
.nameplate span {
	font-size:12px;
	color:#999;
	font-weight:normal;
}
.update{
	width:490px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	color:#333;
	font-weight:normal;
	font-style:normal;
}
.pluspost{
	margin-top:5px;
	width:490px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#999;
	font-weight:normal;
	font-style:normal;
}
.pluspost a{
	background-color:#2B3554;
	color:#F0F1F2;
	padding:3px;
	margin-right:1px;
	margin-left:1px;
}
.pluspost a:hover{
	background-color:#425280;
	color:#F0F1F2;
	padding:3px;
}
.pluspost form{
	display:inline-block;
}
.deletepost a{
	background-color:#D99066;
	color:#F0F1F2;
	padding:3px;
	margin-right:1px;
	margin-left:1px;
}
.deletepost a:hover{
	background-color:#ECC7B0;
	color:#F0F1F2;
	padding:3px;
}
.comment{
	margin-top:5px;
}
.postcomment{
	margin-top:5px;
	padding:3px;
	font-family:Arial, Helvetica, sans-serif;
	width:595px;
}
#txtKeyword {
	height: 25px;
	width: 451px;
	border: 1px solid #999;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	padding: 3px;
	float:left;
	padding-right:40px;
	border:#F9A32F solid 1px;
}
#searchSubmit{
    background: transparent url("../images/paperfly-icon-com.png") no-repeat;
    width: 22px;
    height: 22px;
    border: none;
    cursor: pointer;
    margin-left: -30px; /* image is 20x20px, so leave little extra */
	margin-top:8px;
	margin-right:12px;
}
#awesomepost{
    width: auto;
	height:25px;
	background-color:#A64F1C;
	color:#F0F1F2;
	font-size:12px;
	font-weight:bold;
	padding:3px;
	cursor:pointer;
	border:none;
}
#awesomecom{
    background: transparent url("../images/Emoticons-Cool-icon-com.png") no-repeat;
    width: 85px;
    height: 20px;
    border: none;
    cursor: pointer;
	color:#ffa854;
}
.update img {
	width:500px;
	height:auto;
	margin-top:5px;
	margin-bottom:5px;
	min-width:500px;
	max-width:500px;
}
.update object {
	width:500px;
	height:auto;
	max-width:500px;
	min-width:500px;
}
</style>
<?php

function showName(){
	
}


?>
<body  style="background-color:#FFF">
<div class="container-main">
<div class="dashpost">
	<div class="imgdp"><a href="" class="radius"><img src="../images/jairenz.jpg" width="54" height="54" /></a></div>
    <div class="postcontainer">
    	<div class="nameplate">Jairenz Batu<span> Director for Academic Affairs</span></div>
        <div class="update">Welcome <a href="">CICT Students!</a></div>
        <div class="pluspost"> <form><input type='submit' name='awesome' id='awesomepost' accesskey='a' tabindex='3' value='+1' /></form><a href="">Delete Post</a><a href="#">Jairenz Batu</a></div>
        <div class="comment">
        	<input name="txtComment" maxlength="140" type="text" id="txtKeyword" tabindex="1" value="" onblur="if (this.value == '') {this.value = 'comment here';}" onfocus="if (this.value == 'comment here') {this.value = '';}"/>
        	<input name='btn_search' type='submit'  id='searchSubmit' value=''/>
           
        </div>
    </div>
</div>
<div class="dashpost">
	<div class="imgdp"><a href="" class="radius"><img src="../images/user.png" width="54" height="54" /></a></div>
    <div class="postcontainer">
    	<div class="nameplate">Jairenz Batu<span> Director for Academic Affairs</span></div>
        <div class="update">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor!</div>
        <div class="comment">
        	<input name="txtComment" maxlength="140" type="text" id="txtKeyword" tabindex="1" value="" onblur="if (this.value == '') {this.value = 'comment here';}" onfocus="if (this.value == 'comment here') {this.value = '';}"/>
        	<input name='btn_search' type='submit'  id='searchSubmit' value=''/>
            <input type='submit' name='awesome' id='awesomepost' accesskey='a' tabindex='3' value='+100' />
        	
            
          <div class="postcomment">
            <div class="imgdp"><a href="" class="radius"><img src="../images/user.png" width="54" height="54" /></a></div>
            <div class="postcontainer_com">
            	<div class="nameplate">Jairenz Batu<span> Director for Academic Affairs</span></div>
            	Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor!
        		</div>
            </div>
            
            
          <div class="postcomment">
            <div class="imgdp"><a href="" class="radius"><img src="../images/user.png" width="54" height="54" /></a></div>
            <div class="postcontainer_com">
            	<div class="nameplate">Jairenz Batu<span> Director for Academic Affairs</span></div>
            	Hello
        		</div>
            </div>
            <div class="postcomment">
            <div class="imgdp"><a href="" class="radius"><img src="../images/user.png" width="54" height="54" /></a></div>
            <div class="postcontainer_com">
            	<div class="nameplate">Jairenz Batu<span> Director for Academic Affairs</span></div>
            	Hello
        		</div>
            </div>    
      </div>
    </div>
</div>
<div class="dashpost">
	<div class="imgdp"><a href="" class="radius"><img src="../images/user.png" width="54" height="54" /></a></div>
    <div class="postcontainer">
    	<div class="nameplate">Jairenz Batu<span> Director for Academic Affairs</span></div>
        <div class="update"><img src="../images/sampleadvert.jpg"/>Support Project Selfie</div>
      <div class="comment">
        	<input name="txtComment" maxlength="140" type="text" id="txtKeyword" tabindex="1" value="" onblur="if (this.value == '') {this.value = 'comment here';}" onfocus="if (this.value == 'comment here') {this.value = '';}"/>
        	<input name='btn_search' type='submit'  id='searchSubmit' value=''/>
            <input type='submit' name='awesome' id='awesomepost' accesskey='a' tabindex='3' value='+100' />
        </div>
    </div>
</div>

<div class="dashpost">
	<div class="imgdp"><a href="" class="radius"><img src="../images/user.png" width="54" height="54" /></a></div>
    <div class="postcontainer">
    	<div class="nameplate">Jairenz Batu<span> Director for Academic Affairs</span></div>
        <div class="update"><iframe style="margin-top:5px; margin-bottom:5px" width="500" height="375" src="//www.youtube.com/embed/bFCjFznu06k" frameborder="0" allowfullscreen></iframe>Support Project Selfie</div>
      <div class="comment">
        	<input name="txtComment" maxlength="140" type="text" id="txtKeyword" tabindex="1" value="" onblur="if (this.value == '') {this.value = 'comment here';}" onfocus="if (this.value == 'comment here') {this.value = '';}"/>
        	<input name='btn_search' type='submit'  id='searchSubmit' value=''/>
            <input type='submit' name='awesome' id='awesomepost' accesskey='a' tabindex='3' value='+100' />
        </div>
    </div>
</div>

</div>
</body>
</html>