<!--
Purpose of this page: This displays sign up for blog.
If I have time, the publisher will have special access to this page and can add/delete or edit a blog post.

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
        <title>CMS Sessions: Blog</title>
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

<!--end content-->
<!--sign up GET form-->
 <h1>Subscribe to our monthly blog!</h1>
        <form action="blog_success.php"  method="GET">
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
        <h3>Receive notifications about our events and promotions?</h3>
            <p><input type="radio" name="1" value="yes" required>Yes please!</p>
            <p><input type="radio" name="1" value="no" required>No thanks!</p>
        <button type="submit">Subscribe</button>
        </form>
<!--end form-->



<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>