<!--
Purpose of this page: This is the login page. 
It will be where the three types of users can login or redirect to "register" a new user if needed.

Honesty Statement: I promise I wrote this code, line by line,
not using any help or any previous code.
-->

<?php 
//REWRITE THIS FOR ALL THREE USER TYPES AND TEST
session_start();

// //checking if valid
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     //variables
//     $emp_user = "";
//     $emp_pass = "";
//     $emp_user = $_POST['username'] ?? '';//links to form inputs
//     $emp_pass = $_POST['password'] ?? '';

// //makes sure it is authenticated and makes cookie if it is
// //for all three user types
//     if ($emp_user === "admin" && $emp_pass === "Admin123!") {
//         $_SESSION['authenticated'] = true;
//         $_SESSION['username'] = $emp_user;
//         $_SESSION['password'] = $emp_pass;
//         //give access level 3=highest
//         $access='3';
//       exit();
//     } 
//     elseif($emp_user === "publisher" && $emp_pass === "Publisher123!") {
//         $_SESSION['authenticated'] = true;
//         $_SESSION['username'] = $emp_user;
//         $_SESSION['password'] = $emp_pass;
//         //give access level 2=medium
//         $access='2';
//       exit();
//     } 
//     elseif($emp_user === "customer" && $emp_pass === "Customer123!") {
//         $_SESSION['authenticated'] = true;
//         $_SESSION['username'] = $emp_user;
//         $_SESSION['password'] = $emp_pass;
//         //give access level 1=basic
//         $access='1';
//       exit();
// } 
//     else {
//         echo "Invalid Login. <br>";
//         echo "<button><a href = 'login.php'>Login</a></button>";
//         exit();
//         }
// }
//try to convert above to database driven code

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CMS Sessions: Login</title>
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
    <!--login form-->
    <h1>Login User</h1>
        <form action=""  method="POST">
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
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>