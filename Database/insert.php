<?php
//make database connection
session_start();
include 'connect.php';

$msg="";
//for form submit
if(isset($_POST['submit'])){
	$id=mysqli_real_escape_string($conn,$_POST['id']); //might do id automatically since it's the primary key
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$title=mysqli_real_escape_string($conn,$_POST['title']);
	$comment=mysqli_real_escape_string($conn,$_POST['comment']);
	$comment_date=mysqli_real_escape_string($conn,$_POST['comment_date']);//suppposed to do this automatically?
	//query to insert records intodatabase
	$insert=mysqli_query($conn,"INSERT INTO `comments`(`ID`, `name`, `title`, `comment`, `comment_date`) VALUES ('$id','$name','$title','$comment','$comment_date')");
	if(mysqli_affected_rows($conn)>0){
		//status message
		$msg="Record added Successfully";
	}
	else{
		$msg="Record not added Successfully";
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CMS Sessions: Home</title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">
        
    </head>

    <body>
		<?php include "header.php"?>

		<p><?php echo $msg;?></p>

		<?php include "footer.php"?>
	</body>
</html>