<!--
CSIS 410: Web Development: CMS Sessions Assignment
By: Victoria Young
Date Due: 6/22/2026

References: 
Murach, J., Harris, R., & Dlamater, M. (2022). Murach’s PHP and MySQL (A. Boehm & L. Cooper, Eds.; 4th ed.) [Paperback]. Mike Murach & Associates, Inc.

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Ruvalcaba, Z., Boehm, A., & Delamater, M. (2024). Murach’s HTML and CSS (J. Murach & S. McCoy, Eds.; 6th ed.) [Paperback]. Mike Murach & Associates, Inc.

W3Schools.com. (2026). Retrieved June 14, 2026, from https://www.w3schools.com/

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

<!--content inspired by RegisterUser application from the textbook noted (Murach et al. 2022).-->
    <!--menu-->
    <?php include 'header.php'; ?>
<!--end menu-->
<?php
    //got error, declaring these variables so they can be reset by form
    //kept flagging $name, I try to make a declaration to make it work here
    require_once 'model/fields.php';
    require_once 'model/validate.php';
       ?>
    <main>
        <form action "." method="post">
        <fieldset>
            <legend>User Information</legend>
            <label>Username</label>
            <input type="text" name="username"
            value="<?php echo htmlspecialchars($username);?>">
            <?php echo $fields->getFields('username')->getHTML();?>
            <br>
<!--kept getting this error with fields not being defined, I don't know why. I already included the files.-->
            <label>Password</label>
            <input type="text" name="password"
            value="<?php echo htmlspecialchars($password);?>">
             <?php echo $fields->getFields('password')->getHTML();?>
            <br>
        </fieldset>
        <fieldset>
            <legend>Submit Registration</legend>
           
            <input type="submit" name="action" value="Register"/>
            <input type="submit" name="action" value="Reset"/><br>
        </fieldset>
        </form>
    </main>
<!--end content-->
<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->

    </body>
</html>