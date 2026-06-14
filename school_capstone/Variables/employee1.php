<!--
CSIS 410: Web Development: Variables Assignment
By: Victoria Young
Date Due: 5/25/2026

References: 

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Ruvalcaba, Z., Boehm, A., & Delamater, M. (2024). Murach’s HTML and CSS (J. Murach & S. McCoy, Eds.; 6th ed.) [Paperback]. Mike Murach & Associates, Inc.

W3Schools.com. (2026). W3schools. Retrieved May 24, 2026, from https://www.w3schools.com/pHp/php_includes.asp

Purpose of this page: This page displays the information for employee 1: Emily Pennyworth.

Honesty Statement: I promise I wrote this cord, line by line,
not using any help or any previous code.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Variables: Emily</title>
        <link rel="stylesheet" href="varstyles.css">
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">
        
    </head>

    <body>
   <!--menu-->
    <div class="wrapper">
        <div class="menutitle">
            <h1>Let it Bean</h1>
        </div>
        <div class="menu">
            <?php 
             //show menu
            include 'menu.php'; ?>
        </div>
    </div>
    <!--end menu-->
    
    <!--main content-->
    <div>
    <!--left column-->
    <div class = "emp_left">
        <img src="Emily.png" alt="A young woman barista with brown hair and green eyes. She is smiling" height = 200px width= auto>
    </div>
    <!--right column-->
    <div class="emp_right">
        <?php 
        include 'variables.php';
            echo "
            <h1>Hello! My name is " . $emp1_name . ".</h1>
            <hr>
            <h3>I am " . $emp1_age . " years old.</h3>
            <h3>My job title is " . $emp1_jobTitle . ".</h3>
            <h3>My favorite drink is a " . $emp1_favDrink . ".</h3>
            <h3>My favorite scripture in the Bible is " . $emp1_favScripture . ".</h3>
            ";
        ?>
    </div>
    </div>


  <!--footer-->
    <div class = "footer">
        <div class="footer-left">
        <a href="../index.php"><h3>Return to Master Menu</h3></a>
        </div>
        <div class="footer-right">
        <?php
        //show last modified
        include 'lastmodified.php';
        ?>
        </div>
    </div>
    <!--end footer-->
    </body>
</html>