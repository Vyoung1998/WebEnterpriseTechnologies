<!--
Purpose of this page: This is the blog success page. Alerts the user that they successfully
subscribed. 

Honesty Statement: I promise I wrote this code, line by line,
not using any help or any previous code.
-->
<?php
   session_start();
//no check here, available for guests
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CMS Sessions: Blog Form Success</title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">
        
    </head>

    <body>
<!--menu-->
    <?php include 'header.php'; ?>
<!--end menu-->

<!--Newsletter success Form-->
    <h1 class="message">Thank you <?php echo $_GET["firstname"]. " " . $_GET["lastname"] ?> for your feedback. God bless you!</h1>
    <h3>Your email: <?php echo $_GET["email"]; ?>.</h3>
    <h3>You're interested our notifications and promotions: <?php echo $_GET["1"];?></h3>
<!--end form message-->

<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>