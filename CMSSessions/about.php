<!--
Purpose of this page: This is the about page. 
It introduces the company goals and action statements and some people. 
You can navigate to most main pages, except the ones requiring login.
(CHRISTIAN WORLDVIEW AND RAPPORT)

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
        <title>CMS Sessions: Home</title>
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
<!--content-->
<div class="content">
    <!--As directed by assignment, Chatgpt was used to develop the images, narratives, product descriptions.
    I did the product prices-->
    <!--Hero Statement-->
    <h1>About Feed the Multitude</h1>
    <h2>A Mission Born From Compassion</h2>
    <p>
        Feed the Multitude exists to serve communities through food, compassion, and practical acts of 
        generosity.
    </p>
    <br>
    <p>
        Inspired by the Biblical account of Jesus feeding the multitude with a few loaves and fish, we 
        believe that even small acts of kindness can create a lasting impact. What begins as a meal can
        become a conversation. A friendship. A reminder that someone cares.
    <br>
        Every day, families, seniors, veterans, and individuals face food insecurity in communities
        across our nation. Our mission is to help bridge that gap by providing meals, supporting food 
        banks, and creating opportunities for people to experience hope through service.</p>
    <hr>
    <img src="images/2.png" alt="The Feed the Multitude volunteers smiling at the camera." height=700px>
    <hr>
    <h2>50% of our proceeds are donated to food banks and hunger relief efforts.</h2>
    <button href="buyameal.php"><p>Support the Mission</p></button>
    <hr>
    
    <h1>What We Do</h1>
    <br>
    <p>
        Our work combines food service and community outreach to create meaningful impact.
    </p>
    <br>
    <hr>
        <h3>Food Truck Outreach</h3>
    <br>
    <p>Our mobile food truck allows us to meet people where they are. From community events to 
        outreach initiatives, 
        we serve meals while building relationships and supporting local hunger-relief efforts.
    </p>
    <br>
    <hr>
        <h3>Catering with Purpose</h3>
    <p>
        Every catered event helps fund our mission. Whether we're serving a corporate lunch, 
        church gathering, wedding, 
        fundraiser, or community celebration, each booking contributes directly to helping 
        feed those in need.
    </p>
    <br>
    <button><a href="contact.php">Get in Touch to Book</a></button>
    <hr>
    <br>
        <h3>Food Bank Partnerships</h3>
    <br>
    <p>
        A significant portion of our proceeds supports food banks and organizations working on the
        front lines of hunger relief. Together, we can reach more people than we ever could alone.
    </p>
    <br>
    <h1>Why "Feed the Multitude"?</h1><br>
    <p>The name comes from one of the most well-known miracles recorded in Scripture.
    <br>
        Faced with a hungry crowd and limited resources, Jesus took what was available and 
        used it to feed thousands.
    <br>
        That story reminds us that impact isn't measured by how much we have—it is measured 
        by what we are willing to give.
    <br>
        Through every meal served, every event catered, every volunteer hour donated, 
        and every partnership formed, we strive to continue that spirit of generosity today.
    </p>
  </div>  
<!--end content-->
<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>