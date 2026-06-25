<!--
Purpose of this page: This is the contact page. (FORM 1)
It will have the contact information for the company here. You can navigate to most main pages, except the ones requiring login. 

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
        <title>CMS Sessions: Contact</title>
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
    <!--Contact POST Form-->
    <div class="contact">
    <h1>Let's get to know each other!</h1>
        <form action="contact_success.php"  method="POST">
            <div class="firstname">
                <label for="firstname">First Name:</label>
                <input type="text" placeholder="First Name" name="firstname" required>
            </div>
            <div class="lastname">
                <label for="lastname">Last Name:</label>
                <input type="text" placeholder="Last Name" name="lastname" required>
            </div>
            <div class="email">
                <label for="email" name="email" required>Email:</label>
                <input type="email" id="email-address" name="email" required>
            </div>
            <!--question about what volunteering they're interested in.-->
        <h3>What volunteering are you interested in?</h3>
            <p><input type="radio" name="1" value="I'll volunteer to help the chefs" required>I'll volunteer to help the chefs.</p>
            <p><input type="radio" name="1" value="I'll help clean up after events" required>I'll help clean up after events.</p>
            <p><input type="radio" name="1" value="I'll help wash the food trucks" required>I'll help wash the food trucks.</p>
            <p><input type="radio" name="1" value="Assist at other events" required>Assist at other people's events.</p>
            <p><input type="radio" name="1" value="I want to have you cater my event" required>I want you to cater my event.</p>
            <p><input type="radio" name="1" value="I'll support by buying merch or buying a meal" required>I'll support by buying merch or buying a meal.</p>
            <p><input type="radio" name="1" value="other" required>Other (Please specify in comments below).</p>
          
         <h3>Any suggestions or comments on how we can improve?</br>
        <textarea name="comments" rows="3"
        cols="30"></textarea></h3>
        
        <button type="submit">Contact Us</button>
        </form>
    </div>
<!--end content-->

<!--end content-->
<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>