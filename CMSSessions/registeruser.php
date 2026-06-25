<!--
Purpose of this page: This is the register user page. It is where you add the new information for a new user.
Created without database link yet.

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
        <title>CMS Sessions: Register User</title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">
        
    </head>

    <body>
<!--content-->
    <?php include 'header.php'; ?>
    <!--register user from 11-3 in Powers textbook-->
    <h1>Register User</h1>

    <form action="registeruser.php" method="POST">
        <!--username input field-->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <!--password input field-->
        <label for="pwd">Password:</label>
        <input type="text" id="pwd" name="pwd"><br><br>
        <!--password confirm input field-->
        <label for="conf-pwd">Confirm Password:</label>
        <input type="text" id="conf-pwd" name="conf-pwd"><br><br>
        <!--register button-->
        <input type="submit" value="register" name="register">
    </form>
<!--end content-->
<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->

    </body>
</html>

