<!--
CSIS 410: Web Development: Sessions Assignment
By: Victoria Young
Date Due: 6/15/2026

References: 
Murach, J., Harris, R., & Dlamater, M. (2022). Murach’s PHP and MySQL (A. Boehm & L. Cooper, Eds.; 4th ed.) [Paperback]. Mike Murach & Associates, Inc.

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Ruvalcaba, Z., Boehm, A., & Delamater, M. (2024). Murach’s HTML and CSS (J. Murach & S. McCoy, Eds.; 6th ed.) [Paperback]. Mike Murach & Associates, Inc.

W3Schools.com. (2026). Retrieved June 14, 2026, from https://www.w3schools.com/

Web Tech Knowledge. (2021, December 18). How to make Logout with SESSION in PHP in 2 minutes [Video]. YouTube. Retrieved June 12, 2026, from https://www.youtube.com/watch?v=LThQrcPhSKk

Purpose of this page: This home logged in page is only visible once logged in. The customer's 
profile would be here or the member's website maybe.

Honesty Statement: I promise I wrote this code, line by line,
not using any help or any previous code.
-->

<?php 
require_once 'auth.php';
//flag from Dr. Mary Cecil's help debugging
if(isset($_SESSION[' authenticated']) && $_SESSION[' authenticated '] === true)

 {echo "<p>Welcome back, " . htmlspecialchars($_SESSION['username']) . "!</p>";

 exit; }// Stop execution so the login form is not shown 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Sessions: Home</title>
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
            include 'menu2.php'; ?>
        </div>
    </div><!--end menu-->

    <!--content-->
        <!--content-->
    <div class="companyintro">
        <h1>Christ, Community, & Coffee.</h1>
        <h3>Every purchase has a purpose. 10% of all our profits go to our monthly charity, chosen by our members.</h3>
        <h4>Do you need a place to host a Bible study?</h4>
        <h4>Are you a Christian author that needs support for your books?</h4>
        <h4>Or simply want to enjoy a calming atmosphere?</h4> 
        <h2>Come visit us!</h2>  
    </div>
    <!--end content-->
    <!--contact starts-->
    <div class = "contact">
    <?php
    //printing contact information
    $companyname = "Let It Bean";
    $phonenumber = "123-223-3344";
    $email = "letitbean@gmail.com";
    $address = "123 Wonderful Place Drive, Awesome City, MI 12345";
    $message = "Call to place an order, or come visit us!";
    //this is the contacts message below
    print "
   
    <h2>You're always welcome here.</h2>
    
    <ul>
        <li>Phone Number: " . $phonenumber . "</li>
        <li>Address: " . $address . "</li>
        <li>Email: " . $email . "</li>
        <li><h3>$message</h3></li>
    </ul>
   
    ";
    ?>
    </div> 
    <!--end class contact-->
    <!--picture-->
    <div class="image">
        <img src="coffee_three.jpg" alt="Three people holding their coffees together" width="700" height=auto>
    </div>
    <!--end picture-->

    <!--end content-->



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
            <!--logout button-->
        <form action="logout.php" method="POST">
            <button type="submit" name="logout" onclick="return confirm('Are you sure you want to logout?');">Log Out</button>
        </form>
        </div>
    </div>
    <!--end footer-->
    </body>
</html>