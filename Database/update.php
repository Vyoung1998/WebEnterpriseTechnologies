<?php
session_start();
include 'connect.php';

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
        <?php include "header.php";?>
    <h1>Edit Comment</h1>

<?php
    $current_time = date('Y-m-d H:i:s', time());
        echo "
        <form action='update.php' method='post'>
        <input type='hidden' name='id' value='". $_POST['id']."'>
        <label for='name'>Update Name</label><br>
        <input type='text' name='updated_name' placeholder='Your name' value='". $_POST['updated_name']."' required><br>
        <label for='title'>Update Title:</label><br>
        <input type='text' name='updated_title' placeholder='Title here' value='". $_POST['updated_title']."'  required><br>
        <input type='hidden' name='updated_comment_date' value='". $current_time ."'>
        <label for='comment'>Update Comment</label><br>
        <textarea name='updated_comment' value='". $_POST['updated_comment']."' ></textarea><br>
        <button type='submit' name='udpate'>Comment</button>
        </form>";

		if(isset($_POST['submit'])){
	$id=mysqli_real_escape_string($conn,$_POST['id']); //might do id automatically since it's the primary key
	$updated_name=mysqli_real_escape_string($conn,$_POST['updated_name']);
	$updated_title=mysqli_real_escape_string($conn,$_POST['updated_title']);
	$updated_comment=mysqli_real_escape_string($conn,$_POST['updated_comment']);
	$updated_comment_date=mysqli_real_escape_string($conn,$_POST['updated_comment_date']);//suppposed to do this automatically?

    $update=mysqli_query($conn,"UPDATE `comments` SET `comment`=`$updated_comment`, `name`=`$updated_name`, `title`=`$updated_title`, `comment_date`=`$updated_comment_date` WHERE `id`=`$id`");

if(mysqli_affected_rows($conn)>0){
		//status message
		$msg="<div class='alert alert-success'>record updated Successfully</div>";
	}
	else{
		$msg="<div class='alert alert-danger'>record not udpated Successfully</div>";
	}
}

?>

    </body>
</html>