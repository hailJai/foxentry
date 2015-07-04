<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>file upload</title>
</head>
<style type="text/css">
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	color: #000;
}
</style>

<body><?php
for($i=1;$i<=(int)($_POST["hdnLine"]);$i++)  
{  
// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'.$i])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file'.$i]['error'] == 0) {
        // Connect to the database
        $dbLink = new mysqli('localhost','root','claypass3*','a5584945_clients');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['uploaded_file'.$i]['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploaded_file'.$i]['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file'.$i]['tmp_name']));
        $size = intval($_FILES['uploaded_file'.$i]['size']);
 
        // Create the SQL query
        $query = "
            INSERT INTO `fox_files` (
                `name`, `mime`, `size`, `data`, `created`, `aID`, `type`
            )
            VALUES (
                '{$name}', '{$mime}', {$size}, '{$data}', NOW(),'".$_POST["txtaID"]."','".$_POST["txtType"]."'
            )";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
 
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file'.$i]['error']);
    }
 
 
 
 
}
else {
    echo 'Error! A file was not sent!';
}
 
}
 
$count = $i - 1;
 
if($result) {
			header( "refresh:0;url=dashboard.php" );  
			echo "<center><br>";
			
            echo "Profile Changed!";
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
			echo "</center>";
        }
 
 
 
// Echo a link back to the main page
?>

</body>
</html>