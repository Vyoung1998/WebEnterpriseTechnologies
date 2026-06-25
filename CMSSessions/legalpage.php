<!--
Purpose of this page: This is the legal page. Displays company terms and conditions, privacy policy, and returns/donations policy.
Most rich text is going to come from chatgpt for this fake company like assignment says. 
Will include a contact PHP filler at the end (using variables php) to fill in information. 

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
        <title>CMS Sessions: Legal</title>
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
<!--legal info-->
<div class="content">
    <h1>Legal Information</h1>
    <p>Last Updated: June 24, 2026
    <br>
    Welcome to Feed the Multitude. By accessing our website, participating 
    in our programs, purchasing products or services, making donations, or 
    engaging with our organization, you agree to the following terms and conditions.</p>
    <br>
    <hr>
    <h2>Donations</h2>
    <p>All donations made through Feed the Multitude are voluntary and non-refundable 
        unless otherwise required by applicable law.</p>
    <br>
    <hr>
    <h2>Food Safety</h2>
    <br>
    <p>Feed the Multitude is committed to maintaining food safety
         standards and complying with applicable health regulations.
    <br>
    While reasonable precautions are taken, individuals with food allergies 
    or dietary restrictions should notify staff prior to consuming any food 
    provided through our programs or events.
    <br>
    Feed the Multitude cannot guarantee that food products are free from 
    allergens or cross-contamination.</p>
    <br>
</div>
<!--legal info-->
<!--content-->
<div class = "contact">
<h1>Any Questions or Concerns? Contact Us!</h1>
<?php
    //printing contact information
    $companyname = "Feed the Multitude";
    $phonenumber = "123-223-3344";
    $email = "feedthemultitude@gmail.com";
    $address = "123 Wonderful Place Drive, Awesome City, MI 12345";
    //this is the contacts message below
    print "
   
    <h2>Feeding People | Sharing Hope | Changing Communities</h2>
    
    <ul>
        <li>Phone Number: " . $phonenumber . "</li>
        <li>Address: " . $address . "</li>
        <li>Email: " . $email . "</li>
    </ul>
   
    ";
    ?>
    </div> 
    <!--end class contact-->
<!--end content-->

<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>