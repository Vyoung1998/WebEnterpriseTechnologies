<!-- 
CSIS 410: Web Development: Foundations Assignment
By: Victoria Young
Date Due: 5/25/2026

References: 
A, T. (n.d.). How to create and use a phpinfo file to check your PHP information – Hostinger Tutorials. Hostinger.com. Retrieved May 23, 2026, 
from https://www.hostinger.com/ng/tutorials/how-to-create-phpinfo-file

Dumlao, N. (2017, October 26). Photo. Unsplash. Retrieved May 23, 2026, 
from https://unsplash.com/photos/shallow-focus-photography-of-coffee-
late-in-mug-on-table-zUNs99PGDg0

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Seven Weeks Coffee® | Drink coffee. Save Lives. (n.d.-b). Seven Weeks Coffee. Retrieved May 23, 2026, from https://sevenweekscoffee.com/

W3Schools.com. (2026). W3schools. Retrieved May 24, 2026, from https://www.w3schools.com/pHp/php_includes.asp


Honesty Statement: I promise I wrote this cord, line by line,
not using any help or any previous code.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Victoria's Web Enterprise Site.</title>
        <link rel="stylesheet" href="homepage.css">
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">
        
    </head>

    <body>
        <div class="myintro">
            <h1>CSIS410: Web Enterprise Technologies</h1>
            <h2>By: Victoria Young</h2>
            <h2>Date Due: 5/25/2026</h2>
        </div>

        <ul class="menu" style = "list-style-type:none;">
            <li><a href="Foundations/home.php"><h3>Module 1: Week 1 Foundations</h3></a></li><!--put links src href here later-->
            <li><a href="Variables/home.php"><h3>Module 1: Week 1 Variables</h3></a></li>
            <li><a href="Forms/home.php"><h3>Module 2: Week 2 Forms</h3></a></li>
            <li><a href="Arrays/home.php"><h3>Module 3: Week 3 Arrays</h3></a></li>
            <li><h3>Module 4: Week 4 Sessions</h3></li>
            <li><h3>Module 5: Week 5 CMS Sessions</h3></li>
            <li><h3>Module 6: Week 6 Database</h3></li>
            <li><h3>Module 8: Week 8 CMS Database</h3></li>
        </ul>
    
    <div class="footer">
        <img src="valid-css2-blue.png" alt="valid xhtml icon" height = auto>
        <img src="valid-xhtmlprint10-blue.png" alt="valid xhtml icon" height = auto>
    </div>
         
        <?php  
        // To Get the last modification time.
        $last_modification="Last modified: " . date ("F d Y H:i:s.", getlastmod());

        // To Show the last modification time.
        echo $last_modification;
        ?>
    </body>
</html>