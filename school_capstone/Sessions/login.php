<!--
CSIS 410: Web Development: Sessions Assignment
By: Victoria Young
Date Due: 6/15/2026

References: 

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

W3Schools.com. (2026). W3schools. Retrieved May 24, 2026, from https://www.w3schools.com/pHp/php_includes.asp

Web Tech Knowledge. (2021, December 18). How to make Logout with SESSION in PHP in 2 minutes [Video]. YouTube. Retrieved June 12, 2026, from https://www.youtube.com/watch?v=LThQrcPhSKk

Purpose of this page: This is the login page, visible to everyone. Must be correct login to continue.

Honesty Statement: I promise I wrote this cord, line by line,
not using any help or any previous code.
-->

<?php 
session_start();
//checking if valid
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === "customer" && $password === "customer") {
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        
      exit();
    } else {
        echo "Invalid Login.";
        echo "<a href = 'login.php'>Login</a>";
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Sessions: Login</title>
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
    </div>
<!--end menu-->

<!--content-->
    <!--login form-->
        <form action="home_loggedin.php" method="post">
            <div class="username">
                <label for="username">Username</label>
                <input type="password" placeholder="Enter Username" name="username" required>
            </div>
            <div class="password">
                <label for="password">Password</label>
                <input type="password" placeholder="Enter Password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
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
        </div>
    </div>
<!--end footer-->
    </body>
</html>
