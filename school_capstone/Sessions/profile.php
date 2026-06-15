<!--
CSIS 410: Web Development: Sessions Assignment
By: Victoria Young
Date Due: 6/15/2026

References: 

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

W3Schools.com. (2026). W3schools. Retrieved June 14, 2026, from https://www.w3schools.com/pHp/php_sessions.asp

Web Tech Knowledge. (2021, December 18). How to make Logout with SESSION in PHP in 2 minutes [Video]. YouTube. Retrieved June 12, 2026, from https://www.youtube.com/watch?v=LThQrcPhSKk

Proverbs 31:30 - The virtues of a noble woman. (2026). Bible Hub. Retrieved June 14, 2026, from https://biblehub.com/proverbs/31-30.htm

Purpose of this page: This is the customer's profile, only visible if logged in.

Honesty Statement: I promise I wrote this cord, line by line,
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
        <title>Sessions: Profile </title>
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
    
    <div class = "profileinfo">
    <div class="pfppic">
     <h1>Mia Thompson</h1>
    <img src="girlpfp.png" alt="A girl with red hair and pastel clothes, smiling." height= 450px>
    </div>
    <div class="about">
        <table style="width:100%">
                <tr>
                    <th>Bio</th>
                    <th>Likes</th>
                    <th>Date Joined</th>
                    <th>Favorite Scripture</th>
                </tr>
                <tr>
                    <td><p>Just a girl who loves coffee and Jesus! I love this community at Let it Bean!</p></td>
                    <td><p>Caramel Machiatto and Pastels</p></td>
                    <td><p>Became a member of the Bean Scene on 3/2/2026</p></td>
                    <td><p>Proverbs 31:30 "Charm is deceptive, and beauty does not last; but a woman who fears the LORD will be greatly praised."</p></td>
                </tr>
            </table>
    </div>
    </div>
    <h3>Favorite Moments:</h3>
    <div class="images">
        <img src="biblestudy.png" alt="Two girls studying the bible together drinking coffee." height= 250px>
        <img src="coffeehangout.png" alt="three girls hanging out drinking coffee together, a barista brings them their drinks." height= 250px>
        <img src="openingday.png" alt="An image of the entrance to a crowded cafe." height= 250px>
        <img src="openingdayselfie.png" alt="A selfie of a young adult woman outsite the cafe on opening day." height= 250px>
        
    </div>
    
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