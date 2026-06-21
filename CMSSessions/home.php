<!--
CSIS 410: Web Development: CMS Sessions Assignment
By: Victoria Young
Date Due: 6/22/2026

References: 
GeeksforGeeks. (2024, January 17). How to Validate Password using Regular Expressions in PHP ? GeeksforGeeks. Retrieved June 20, 2026, from https://www.geeksforgeeks.org/php/how-to-validate-password-using-regular-expressions-in-php/

Murach, J., Harris, R., & Dlamater, M. (2022). Murach’s PHP and MySQL (A. Boehm & L. Cooper, Eds.; 4th ed.) [Paperback]. Mike Murach & Associates, Inc.

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Ruvalcaba, Z., Boehm, A., & Delamater, M. (2024). Murach’s HTML and CSS (J. Murach & S. McCoy, Eds.; 6th ed.) [Paperback]. Mike Murach & Associates, Inc.

W3Schools.com. (2026). Retrieved June 14, 2026, from https://www.w3schools.com/



Purpose of this page: This is the home page. You can navigate to most main pages.
Contains main values, reviews of products, buy someone a meal donation, advertises featured products and links to newsletter and volunteering. 
Header contains name if logged in, see header.php (conditional set in header--see notes)

Honesty Statement: I promise I wrote this code, line by line,
not using any help or any previous code.


//similar to previous Sessions assignment. Checks if logged in, then says hi
//change to require auth.php once it's ready
//flag from Dr. Mary Cecil's help debugging-->
<?php
   session_start();
//no check here, available for guests
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
<!--menu--> 
    <?php include 'header.php'; ?>
<!--end menu-->

<!--content-->
    <h1>Home</h1><br>
    <p>content here</p>
<!--end content-->

<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>