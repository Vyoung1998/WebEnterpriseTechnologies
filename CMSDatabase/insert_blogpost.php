<?php
//make database connection
session_start();
include 'connect.php';

$msg="";
//for form submit
if(isset($_POST['submit'])){
	$blogID=mysqli_real_escape_string($conn,$_POST['blogID']); //might do id automatically since it's the primary key
	$blogTitle=mysqli_real_escape_string($conn,$_POST['blogTitle']);
	$blogContents=mysqli_real_escape_string($conn,$_POST['blogContents']);
	$userID=mysqli_real_escape_string($conn,$_POST['userID']);
	$blog_dateAdded=mysqli_real_escape_string($conn,$_POST['blog_dateAdded']);//suppposed to do this automatically?
	$image_url=mysqli_real_escape_string($conn,$_POST['image_url']);
	
	//query to insert records intodatabase
	$insert=mysqli_query($conn,"INSERT INTO `BlogPosts`(`blogID`, `blogTitle`, `blogContents`, `userID`, `blog_dateAdded`, `image_url`) 
	VALUES ('$blogID','$blogTitle','$blogContents','$userID','$blog_dateAdded','$image_url')");
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
        <title>CMS Sessions: Insert Blog Post</title>
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