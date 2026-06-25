<!--
CSIS 410: Web Development: CMS Sessions Assignment
By: Victoria Young
Date Due: 6/22/2026

References: 
David Tang. (2013, November 30). creating a session based shopping cart with php [Video]. YouTube. Retrieved June 23, 2026, from https://www.youtube.com/watch?v=m_lQBoCefXw

GeeksforGeeks. (2024, January 17). How to Validate Password using Regular Expressions in PHP ? GeeksforGeeks. Retrieved June 20, 2026, from https://www.geeksforgeeks.org/php/how-to-validate-password-using-regular-expressions-in-php/

Murach, J., Harris, R., & Dlamater, M. (2022). Murach’s PHP and MySQL (A. Boehm & L. Cooper, Eds.; 4th ed.) [Paperback]. Mike Murach & Associates, Inc.

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Ruvalcaba, Z., Boehm, A., & Delamater, M. (2024). Murach’s HTML and CSS (J. Murach & S. McCoy, Eds.; 6th ed.) [Paperback]. Mike Murach & Associates, Inc.

W3Schools.com. (2026). Retrieved June 14, 2026, from https://www.w3schools.com/

PHP Documentation Group. (2026). PHP: var_dump - Manual. Retrieved June 23, 2026, from https://www.php.net/manual/en/function.var-dump.php


Purpose of this page: This is the home page. You can navigate to most main pages.
Contains main values, reviews of products, buy someone a meal donation, advertises featured products and links to newsletter and volunteering. 
Header contains name if logged in, see header.php (conditional set in header--see notes)

Honesty Statement: I promise I wrote this code, line by line,
not using any help or any previous code.-->

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
<div class="content">
    <!--As directed by assignment, Chatgpt was used to develop the images, narratives, product descriptions.
    I did the product prices-->
    <!--Hero Statement-->
    <h1>Food That Nourishes. Hope That Lasts.</h1>
    <p>Through catering services, community outreach, and our mission food truck, we help provide meals to families facing hunger while supporting local food banks and outreach programs.
    Every meal purchased helps make a difference.</p><br>
    
    <hr>
    <img src="images/1.png" alt="The Feed the Multitude food truck selling food to a customer." height=700px>
    <hr>
    <h2>50% of our proceeds are donated to food banks and hunger relief efforts.</h2>
    <button><a href="buyameal.php"><p>Support the Mission</p></a></button>
    <hr>
    
    <h1>More than a Meal.</h1>
    <p>Feed the Multitude was founded on a simple belief.</p>
    <h3>No one should have to wonder where their next meal will come from.</h3>
    <p>Inspired by the Biblical account of Jesus feeding the multitude, our mission combines faith, 
        service, and community action. Through catering events, food truck operations, fundraising efforts, and 
        volunteer outreach, 
        we work to provide practical support to individuals and families experiencing food insecurity.</p><br>
    <p>When you support Feed the Multitude, you're helping us:</p>
    <ul>
        <li>Provide meals to people in need</li>
        <li>Support local food banks</li>
        <li>Partner with churches and community organizations</li>
        <li>Create opportunities for service and compassion</li>
        <li>Share hope through tangible acts of kindness</li>
    </ul>
      
  
    <!--Mission Statement-->
   
    <h1>Our Mission</h1>
    <p>Our mission is to serve communities through food while demonstrating the love of Christ through practical acts of service. <br>
    We believe that a meal can do more than satisfy hunger—it can restore dignity, create connection, and remind people they are seen and valued.</p><br>
    <hr>

    <img src="images/3.png" alt="Images of hands handing another person a bowl of spaghetti, and another photo of hands passing a box of donated food products to another person. Words that say: Why we give is to help families overcome food insecurity." height =700px>
    <hr> 
    <!--How it Works Statement-->
  
    <h1>How it Works</h1><br>
    <h2>Book Catering</h2><br>
    <p>Whether it's a corporate lunch, church event, wedding, fundraiser, or community gathering, our catering services provide delicious meals with a greater purpose.</p><br>
    <h2>Support Community Outreach</h2><br>
    <p>A portion of every purchase from our store helps fund food bank donations and community meal initiatives.</p><br>
    <h2>Change Lives</h2><br>
    <p>Through partnerships with local organizations, we help ensure that more families have access to nutritious meals and support.</p>
    <h1>One meal can make a difference. One act of kindness can change a day. One community working together can change lives.
        <br>
        Thank you for being part of the mission to Feed the Multitude.</h1>

</div>    

<!--end content-->

<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>