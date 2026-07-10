<!--
Purpose of this page: This is the Buy a Meal page. Users can either donate money or buy meals valued at different price points. 
$15 meal feeds one person. $50 meal feeds a family. $150 feeds five families.

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
        <title>CMS Sessions: Buy a Meal</title>
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
<div class="content">
<h1>Donate by buying a meal here</h1>

<h3>Also support by volunteering to cook Saturdays, use our catering services, or attend our monthly cookouts.</h3>

        <h3>Fill out the form to volunteer!</h3>
        <button><a href="contact.php"><p>Get in Touch to Help</p></a></button>
        <h3>Check out our blog to learn about past events.</h3>
        <button><a href="blog.php"><p>Read About It</p></a></button>
        <br>

<br>
 <img src="images/feedthemultitudeproject.png" alt="The Feed the Multitude buy a meal event, a man handing someone food, donations, and a kid smiling" height=700px>
   
<h2>5$ feeds one person, 25$ feeds a family, 100$ feeds a community.</h2>
<button  type="submit" onclick="alert('Thank you!');">Donate $5</button>
&nbsp;
<button  type="submit" onclick="alert('Thank you!');">Donate $25</button>
&nbsp;
<button  type="submit" onclick="alert('Thank you!');">Donate $100</button>
</div> 
<!--end content-->
<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>