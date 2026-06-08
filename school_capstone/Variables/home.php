<!--
CSIS 410: Web Development: Variables Assignment
By: Victoria Young
Date Due: 5/25/2026

References: 

Powers, D. (2021). Php 8 solutions : Dynamic web design and development made easy. Apress L. P.

Ruvalcaba, Z., Boehm, A., & Delamater, M. (2024). Murach’s HTML and CSS (J. Murach & S. McCoy, Eds.; 6th ed.) [Paperback]. Mike Murach & Associates, Inc.

W3Schools.com. (2026). W3schools. Retrieved May 24, 2026, from https://www.w3schools.com/pHp/php_includes.asp


Purpose of this page: This page displays the home page for employee organizational chart.

Honesty Statement: I promise I wrote this cord, line by line,
not using any help or any previous code.
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Variables: Home Chart</title>
        <link rel="stylesheet" href="varstyles.css">
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">
        
    </head>

    <body>
   <!--menu-->
    <div class="wrapper">
        <div class="menutitle">
            <h1>Let it Bean</h1>
        </div>
        <div class="menu">
            <?php 
             //show menu
            include 'menu.php'; ?>
        </div>
    </div>
    <!--end menu-->

    <!--This is where the columns of two are going to be made, pictures and linkt to their information-->
    <div class="chart">
    <table style="width:100%">
        <!--headers-->
        <tr>
            <th>Employee Photos</th>
            <th>Employee Information</th>
        </tr>
        <!--Employee1 Emily-->
        <tr>
            <td><img src="Emily.png" alt="A young woman barista with brown hair and green eyes. She is smiling"></td>
            <td>
            <ul>
                <li><?php include 'variables.php';
                        echo "<h2>$emp1_name</h2>";
                    ?>
                </li>
                <li><?php include 'variables.php';
                        echo "<a href= $emp1_page><h3>More Information</h3></a>";
                    ?>
                </li>
            </ul>    
            </td>
        </tr>
        <!--Employee2 Jason-->
        <tr>
            <td><img src="Jason.png" alt="A young man barista with blonde hair and brown eyes. He is smiling"></td>
            <td>
            <ul>
                 <li><?php include 'variables.php';
                        echo "<h2>$emp2_name</h2>";
                    ?>
                </li>
                <li><?php include 'variables.php';
                        echo "<a href= $emp2_page><h3>More Information</h3></a>";
                    ?>
                </li>
            </ul>    
            </td>
        </tr>
        <!--Employee3 Oscar-->
        <tr>
            <td><img src="Oscar.png" alt="An older man barista with red, greying hair and brown eyes. He is smiling"></td>
            <td>
            <ul>
                 <li><?php include 'variables.php';
                        echo "<h2>$emp3_name</h2>";
                    ?>
                </li>
                <li><?php include 'variables.php';
                        echo "<a href= $emp3_page><h3>More Information</h3></a>";
                    ?>
                </li>
            </ul>    
            </td>
        </tr>
    </table>
     <!--end of table-->
    </div>
   

    <div class="message"><h4>All images above were generated with Chatgpt.</h4></div>

    <!--footer-->
    <div class = "footer">
        <div class="footer-left">
        <a href="../index.php"><h3>Return to Master Menu</h3></a>
        </div>
        <div class="footer-right">
        <?php
        //show last modified
        include 'lastmodified.php';
        ?>
        </div>
    </div>
    <!--end footer-->
    </body>
</html>