<!--
CSIS 410: Web Development: Foundations Assignment#
By: Victoria Young
Date Due: 5/25/2026

References: 
A, T. (n.d.). How to create and use a phpinfo file to check your PHP information – Hostinger Tutorials. Hostinger.com. Retrieved May 23, 2026, 
from https://www.hostinger.com/ng/tutorials/how-to-create-phpinfo-file

Dumlao, N. (2017, November 17). Three people holding coffees. Unsplash. Retrieved May 24, 2026, from https://unsplash.com/photos/three-person-holding-mug-and-glass-with-beverage-inside-71u2fOofI-U

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Ruvalcaba, Z., Boehm, A., & Delamater, M. (2024). Murach’s HTML and CSS (J. Murach & S. McCoy, Eds.; 6th ed.) [Paperback]. Mike Murach & Associates, Inc.

Seven Weeks Coffee® | Drink coffee. Save Lives. (n.d.-b). Seven Weeks Coffee. Retrieved May 23, 2026, from https://sevenweekscoffee.com/

W3Schools.com. (2026). W3schools. Retrieved May 24, 2026, from https://www.w3schools.com/pHp/php_includes.asp


Purpose of this page: This page displays php information.

Honesty Statement: I promise I wrote this cord, line by line,
not using any help or any previous code.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Foundations: PHP Info</title>
        <link rel="stylesheet" href="styles.css">
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
    </div><!--end menu-->
    <div class ="phpinfo">
    <?php
    //show php info, got this from hostinger.com, sited above.
        phpinfo();
    ?>
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