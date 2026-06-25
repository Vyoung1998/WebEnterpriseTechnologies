<!--
Purpose of this page: This is the testimonies page.
It uses variables to fill in data to tell stories of those we helped people. 

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
        <title>CMS Sessions: Contact</title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">
        
    </head>

    <body>
<!--menu-->
    <?php include 'header.php'; ?>
<!--end menu-->

<!--content-->
<h1>Testimonies</h1>
    <div class = "content">
          <?php 
        include 'variables.php';
            echo "
            <h2>My name is " . $test1_name . "</h2>
            <h3>" . $test1_quote . "</h3>
            <h3>" . $test1_info . "</h3>
            <hr>";

            echo "
            <h2>My name is " . $test2_name . "</h2>
            <h3>" . $test2_quote . "</h3>
            <h3>" . $test2_info . "</h3>
            <hr>";

            echo "
            <h2>My name is " . $test3_name . "</h2>
            <h3>" . $test3_quote . "</h3>
            <h3>" . $test3_info . "</h3>
            <hr>";
        ?>
    </div>
<!--end content-->

<!--end content-->
<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>