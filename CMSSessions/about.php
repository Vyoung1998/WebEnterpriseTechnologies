<!--
CSIS 410: Web Development: CMS Sessions Assignment
By: Victoria Young
Date Due: 6/22/2026

References: 
Murach, J., Harris, R., & Dlamater, M. (2022). Murach’s PHP and MySQL (A. Boehm & L. Cooper, Eds.; 4th ed.) [Paperback]. Mike Murach & Associates, Inc.

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Ruvalcaba, Z., Boehm, A., & Delamater, M. (2024). Murach’s HTML and CSS (J. Murach & S. McCoy, Eds.; 6th ed.) [Paperback]. Mike Murach & Associates, Inc.

W3Schools.com. (2026). Retrieved June 14, 2026, from https://www.w3schools.com/

Purpose of this page: This is the about page. 
It introduces the company goals and action statements and some people. 
You can navigate to most main pages, except the ones requiring login.
(CHRISTIAN WORLDVIEW AND RAPPORT)

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
<h1>About Company</h1>
<!--end content-->
<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>