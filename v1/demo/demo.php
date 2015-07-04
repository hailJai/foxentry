<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

include "connect.php";
include "comment.class.php";


/*
/	Select all the comments and populate the $comments array with objects
*/

$comments = array();
$result = mysql_query("SELECT * FROM comments ORDER BY id ASC");

while($row = mysql_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple AJAX Commenting System | Tutorialzine demo</title>

<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>



<h1>Simple AJAX Commenting System</h1>
<h2><a href="http://tutorialzine.com/2010/06/simple-ajax-commenting-system/">Go Back to Tutorialzine &raquo;</a></h2>

<div id="main">

<?php

/*
/	Output the comments one by one:
*/

foreach($comments as $c){
	echo $c->markup();
}

?>

<div id="addCommentContainer">
	<p>Add a Comment</p>
	<form id="addCommentForm" method="post" action="">
    	<div>
        	<label for="name">Your Name</label>
        	<input type="text" name="name" id="name" />
            
            <label for="email">Your Email</label>
            <input type="text" name="email" id="email" />
            
            <label for="url">Website (not required)</label>
            <input type="text" name="url" id="url" />
            
            <label for="body">Comment Body</label>
            <textarea name="body" id="body" cols="20" rows="5"></textarea>
            
            <input type="submit" id="submit" value="Submit" />
        </div>
    </form>
</div>

</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</body>
</html>
