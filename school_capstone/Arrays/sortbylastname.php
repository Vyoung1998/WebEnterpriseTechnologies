<!--
CSIS 410: Web Development: Arrays Assignment
By: Victoria Young
Date Due: 6/8/2026

References: 

The PHP Documentation Group. (2026). PHP: sort - Manual. PHP.net. Retrieved June 5, 2026, from https://www.php.net/manual/en/function.sort.php

The PHP Documentation Group. (2026). PHP: array_multisort - Manual. Retrieved June 6, 2026, from https://www.php.net/manual/en/function.array-multisort.php

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Ruvalcaba, Z., Boehm, A., & Delamater, M. (2024). Murach’s HTML and CSS (J. Murach & S. McCoy, Eds.; 6th ed.) [Paperback]. Mike Murach & Associates, Inc.

W3Schools.com. (2026). W3schools. Retrieved May 24, 2026, from https://www.w3schools.com/pHp/php_includes.asp


Purpose of this page: This page displays the home page for arrays assignment, maybe a list of employees basic information.

Honesty Statement: I promise I wrote this cord, line by line,
not using any help or any previous code.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Arrays: Sort By Last Name</title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">
        
    </head>

    <body>
<!--Menu-->
       <div class="wrapper">
        <div class="menutitle">
            <h1>Let it Bean</h1>
        </div>
        <div class="menu">
            <?php 
             //show menu
             //add to menu the three views described
            include 'menu.php'; ?>
        </div>
    </div>
<!--end Menu-->
<!--content-->
    <div class="content">
    <h1>Sort By Last Name</h1>
    <?php 
        //passing array data to this variable to be more efficient
        //from textbook and w3schools
        $employees = include 'arrays.php';
        //printing list ascending by last name
        //extracting by last name
          //from multisort examples on PHP documentation and w3schools
        $lastname = array_column($employees, 'LastName');
        //sort by this value
        array_multisort($employees, SORT_ASC, $lastname);
        
        //loop through array in table format(idea from w3schools example)
        echo "<table>";
        echo "<tr><th>First Name</th><th>Last Name</th><th>Department</th><th>Team Name</th><th>Email</th><th>Phone</th><th>Age</th><th>Role</th><th>Favorite Scripture</th>";
        //looping through data with formatting        
        foreach ($employees as $row){
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>" . $cell . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
  
    ?>
    </div>
<!--end content-->
<!--Footer-->
    <div class = "footer">
        
        <div class="footer-left">
        <a href="../index.php"><h3>Return to Master Menu</h3></a>
        
        </div>
        <img src="valid-css2-blue.png" alt="valid xhtml icon" height = auto>
        <img src="valid-xhtmlprint10-blue.png" alt="valid xhtml icon" height = auto>
        <div class="footer-right">
        <?php
        //show last modified
        include 'lastmodified.php';
        ?>
        </div>
    </div>
<!--end Footer-->
    </body>
</html>