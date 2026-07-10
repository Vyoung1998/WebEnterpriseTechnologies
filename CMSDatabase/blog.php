<!--
Purpose of this page: This displays sign up for blog.
If I have time, the publisher will have special access to this page and can add/delete or edit a blog post.

Honesty Statement: I promise I wrote this code, line by line,
not using any help or any previous code.
-->
<?php
   session_start();
//no check here, available for guests
include 'connect.php';
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

<!--blog contents-->
     <?php

    $sql = "SELECT blogID, blogTitle, blogContents, userID, blog_dateAdded, image_url FROM BlogPosts";
    $result = $conn->query($sql);

    //try to print data
    if($result->num_rows > 0){
        //output data from each row
        
        while($row = $result->fetch_assoc()){
            echo '<div class="blogposts">';
            echo "<h2>Title: " . $row["blogTitle"]. "</h2>";
            echo "<h3>Contents: " . $row["blogContents"]. "</h3>";
            echo "<h3>Author: " . $row["userID"]. "</h3>";
            echo "<h3>Date Added: " . $row["blog_dateAdded"]. "</h3>";
            echo '<h2><img src=' . $row["image_url"]. ' alt=blog pic image height=500px></h2>';
            echo "<br>";
            //maybe put buttons here to update/delete?
            //add a form at the bottom for adding a comment
            //Hidden input to carry the specific comment ID
        echo "<form action='delete_blogpost.php' method='POST'>
            <input type='hidden' name='blogID' value= ". $row["blogID"]. "> 
            <button type='submit' name='delete' onclick='return confirm('Are you sure you want to delete?');>
            Delete
        </button>
    </form>";
            //update form not working yet (delete and add work)
            //adding button to send id to update program...
            //submission happens after the form is filled though
       
        echo '</div>';
        }
        } else {
            echo "0 results";
        }

        
    ?>


        <?php
    $current_time = date('Y-m-d H:i:s', time());
        echo "<form action='insert_blogpost.php' method='post'>
                <input type='hidden' name='blogID' value='Anonymous'>
                <input type='hidden' name='blog_dateAdded' value='". $current_time ."'>
                <label for='blogTitle'>Title</label><br>
                <input type='text' name='blogTitle' placeholder='Title of Blog Post' required><br>
                <label for='blogContents'>Contents:</label><br>
                <input type='text' name='blogContents' placeholder='Blog Contents Here' required><br>
                <label for='image_url'>Image URL:</label><br>
                <input type='text' name='blogContents' placeholder='write like this: folder/imagename.type'><br>
                <label for='userID'>User ID:</label><br>
                <input type='number' name='userID' placeholder='Put 2 for Publisher' required><br>
                <button type='submit' name='submit'>Add Blog Post</button>
            </form>"
    ?>


<!--end blog contents-->



<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>