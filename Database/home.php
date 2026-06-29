<!--
CSIS 410: Web Development: Database Assignment
By: Victoria Young
Date Due: 6/29/2026

References: 
Murach, J., Harris, R., & Dlamater, M. (2022). Murach’s PHP and MySQL (A. Boehm & L. Cooper, Eds.; 4th ed.) [Paperback]. Mike Murach & Associates, Inc.

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Ruvalcaba, Z., Boehm, A., & Delamater, M. (2024). Murach’s HTML and CSS (J. Murach & S. McCoy, Eds.; 6th ed.) [Paperback]. Mike Murach & Associates, Inc.

W3Schools.com. (2026). Retrieved June 14, 2026, from https://www.w3schools.com/

PHP Documentation Group. (2026). PHP: var_dump - Manual. Retrieved June 23, 2026, from https://www.php.net/manual/en/function.var-dump.php


Purpose of this page: This is the connect page/home page where it prints the comments from the database. 
I wanted to hardcode a "post" of a blog recipe for communion bread to comment on.

Honesty Statement: I promise I wrote this code, line by line,
not using any help or any previous code.-->


<?php

require 'connect.php';

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
  
    <?php include 'header.php'?>
    </div>

        <div class="blogpost">
        <img src="naanbreadpost.png" alt="blog post about naan bread recipe that is very informative" height=1000px>
        </div>



    <?php

    $sql = "SELECT id, name, title, comment, comment_date FROM comments ORDER BY id DESC";
    $result = $conn->query($sql);

    //try to print data
    if($result->num_rows > 0){
        //output data from each row
        
        while($row = $result->fetch_assoc()){
            echo '<div class="commentbox">';
            echo "<h2>Name: " . $row["name"]. "</h2>";
            echo "<h3>Title: " . $row["title"]. "</h3>";
            echo "<h3>Date: " . $row["comment_date"]. "</h3>";
            echo "<h3>Comment: " . $row["comment"]. "</h3>";
            
            echo "<br>";
            //maybe put buttons here to update/delete?
            //add a form at the bottom for adding a comment
            //Hidden input to carry the specific comment ID
        echo "<form action='delete.php' method='POST'>
            <input type='hidden' name='id' value= ". $row["id"]. "> 
            <button type='submit' name='delete' onclick='return confirm('Are you sure?');>
            Delete
        </button>
    </form>";
            //update form not working yet (delete and add work)
            //adding button to send id to update program...
            //submission happens after the form is filled though
        echo '<button><a href="update.php">Edit Comment</a></button>';
        echo '<div class="commentbox">';
        }
        } else {
            echo "0 results";
        }

        
    ?>
    <!--note to self delete and add button works! don't touch it!! -->
    <h2>Add a comment</h2>

    <?php
    $current_time = date('Y-m-d H:i:s', time());
        echo "<form action='insert.php' method='post'>
                <input type='hidden' name='id' value='Anonymous'>
                <input type='hidden' name='comment_date' value='". $current_time ."'>
                <label for='name'>Name</label><br>
                <input type='text' name='name' placeholder='Your name' required><br>
                <label for='title'>Title:</label><br>
                <input type='text' name='title' placeholder='Title here' required><br>
                <label for='comment'>Comment</label><br>
                <textarea name='comment'></textarea><br>
                <button type='submit' name='submit'>Comment</button>
            </form>"
    ?>
    <?php include "footer.php";?>
</body>
</html>