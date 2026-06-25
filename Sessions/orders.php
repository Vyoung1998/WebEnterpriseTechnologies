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

Purpose of this page: This is the customer's orders, only visible if logged in.

Honesty Statement: I promise I wrote this code, line by line,
not using any help or any previous code.
-->

<?php 
session_start();
//flag from Dr. Mary Cecil's help debugging
if(isset($_SESSION[' authenticated']) && $_SESSION[' authenticated '] === true)

 {echo "<p>Welcome back, " . htmlspecialchars($_SESSION['username']) . "!</p>";

 exit; }// Stop execution so the login form is not shown 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Sessions: Orders</title>
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
            <table style="width:100%">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Image</th>
                </tr>
                <tr>
                    <td>Pastel Bible Stationery Pack</td>
                    <td>1</td>
                    <td>Pink Pastels</td>
                    <td>$15.50</td>
                    <td>6/14/2026</td>
                    <td><img src="biblestationery.png" alt="Bible and pastel stationery, pens, sticky notes, and a pastel pink bible." height= 200px></td>
                </tr>
                <tr>
                    <td>Iced Caramel Machiatto</td>
                    <td>1</td>
                    <td>Regular Size</td>
                    <td>$6.00</td>
                    <td>6/4/2026</td>
                    <td><img src="caramelmachiatto.png" alt="An iced caramel machiatto in a glass, sitting on a table at a cafe" height= 200px></td>
                </tr>
                  <tr>
                    <td>Iced Caramel Machiatto</td>
                    <td>3</td>
                    <td>Regular Size: To Go Cups</td>
                    <td>$18.00</td>
                    <td>3/15/2026</td>
                    <td><img src="caramelmachiatto.png" alt="An iced caramel machiatto in a glass, sitting on a table at a cafe" height= 200px></td>
                </tr>
                  <tr>
                    <td>Chocolate Coffee Latte</td>
                    <td>1</td>
                    <td>Regular Size</td>
                    <td>$5.50</td>
                    <td>4/6/2026</td>
                    <td> <img src="chocolatecoffeelatte.png" alt="A decadent chocolate coffee latte served with whip cream and chocolate syrup." height= 250px></td>
                </tr>
            </table>

    <!--end content-->



    <!--footer-->
    <div class = "footer">
        <div class="footer-left">
        <a href="../index.php"><h3>Return to Master Menu</h3></a>
        </div>
        
        <img src="valid-css2-blue.png" alt="valid xhtml icon" height = auto>
        <img src="valid-xhtmlprint10-blue.png" alt="valid xhtml icon" height = auto>
      
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