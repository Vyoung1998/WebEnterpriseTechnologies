<!--
Purpose of this page: Logged in, this appears in the conditional menu. Displays different information depending on the user.
If not, it displays their name based on who's logged in. Then their variables (which will be grouped in arrays/controls).

Honesty Statement: I promise I wrote this code, line by line,
not using any help or any previous code.
-->
<?php
   session_start();

   // Check if user is logged in
   if (!isset($_SESSION['username'])) {
      header("Location: login.php");
      exit;
   }

//if logged in, display name
  $username = $_SESSION['username'];
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CMS Sessions: Your Profile</title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">
        
    </head>

    <body>
<!--menu-->
 <?php include 'header.php'; 
 
 $admintasks = array("Events", "Current Volunteers", "Employees", "Email Publishers");
 $publishtasks = array("Blog Posts Needed", "Answer Emails", "Draft Posts", "Schedule Newsletter");
 $customerorders = array("2 Piece Mugs", "Tshirts", "Hoodies", "3 baseball hats");

 ?>
<!--end menu-->

<!--content-->
<div class="content">
<h1>Your Profile</h1>
<?php if($_SESSION['username'] === 'admin'){//display information depending on who is signed in
            echo "<img src='images/adminpic.png' alt='admin profile pic' height=200px>";
    }
    elseif ($_SESSION['username'] === 'publisher'){
        echo "<img src='images/publishpic.png' alt='publisher profile pic' height=200px>";
        }
    elseif($_SESSION['username'] === 'customer'){
        echo "<img src='images/customerpic.png' alt='customer profile pic' height=200px>";
        } else {
            echo "Failed";
        }
   ?>
<h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<p>Your Information:</p>
<p>Username: <?php echo htmlspecialchars($_SESSION['username']);?></p>
<p>Password: <?php echo htmlspecialchars($_SESSION['password']);?></p>
<br>

<?php if($_SESSION['username'] === 'admin'){//display information depending on who is signed in
            echo "<h2>Upcoming Tasks:</h2>";  
            foreach ($admintasks as $task) {
            echo "<p>$task</p> <br>";}
    }
    elseif ($_SESSION['username'] === 'publisher'){
        echo "<h2>To Do List:</h2>"; 
        foreach($publishtasks as $task){  
        echo "<p>$task</p> <br>";}
        }
    elseif($_SESSION['username'] === 'customer'){
        echo "<h2>Your Past Orders:</h2>";  
        foreach($customerorders as $order){     
        echo "<p>$order</p> <br>";}
        } else {
            echo "Failed";
        }
   ?>
</div>
<!--end content-->

<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>