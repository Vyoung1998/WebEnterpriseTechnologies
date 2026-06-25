<!--
Purpose of this page: This is the contact success page. (FORM 1)
Alerts the user that they successfully filled out the form. 

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
        <title>CMS Sessions: Contact Form Success</title>
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
<div class = "contact">
<h1>Contact Us</h1>
<?php
    //printing contact information
    $companyname = "Feed the Multitude";
    $phonenumber = "123-223-3344";
    $email = "feedthemultitude@gmail.com";
    $address = "123 Wonderful Place Drive, Awesome City, MI 12345";
    $message = "Fill out the form below and you'll receive a call and/or email by a representative.";
    //this is the contacts message below
    print "
   
    <h2>Feeding People | Sharing Hope | Changing Communities</h2>
    
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
    <!--Contact Form-->
    <h1 class="message">Thank you <?php echo $_POST["firstname"]. " " . $_POST["lastname"] ?> for your feedback. God bless you!</h1>
    <h3>Your email: <?php echo $_POST["email"]; ?>.</h3>
    <h3>You're interested in volunteering by doing the following: <?php echo $_POST["1"];?></h3>
    <h3>Your comments: <?php echo $_POST['comments'];?></h3>
</div>
<!--end content-->

<!--end content-->
<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>