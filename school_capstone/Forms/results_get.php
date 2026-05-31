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
        <title>Forms: Home</title>
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
            include 'menu.php'; ?>
        </div>
    </div>
    <!--end Menu-->

    <!--Get Form Results-->
   <h3 class="message">Thank you <?php echo $_GET["name"]; ?> for your feedback.</h3>
    <table>
        <tr>
            <th>
                <img src="frenchvanillacap.png" alt="A French Vanilla Cappucino in a mug, sitting on a table at a cafe" height= 250px><br>
                <h2>French Vanilla Cappucino</h2></li>
            </th>
            <th> 
              <img src="caramelmachiatto.png" alt="An iced caramel machiatto in a glass, sitting on a table at a cafe" height= 250px></li><br>
               <h2>Iced Caramel Machiatto</h2>
            </th>
            <th> 
                <img src="chocolatecoffeelatte.png" alt="A decadent chocolate coffee latte served with whip cream and chocolate syrup." height= 250px><br>
                <h2>Chocolate Coffee Latte</h2>
            </th>
        </tr>
<!--Question 1-->
        <tr>
            <td><h3>How would you rate the flavor profile of this coffee?</h3><br><p>You said <?php echo $_GET["1"]; ?></p></td>
            <td><h3>How would you rate the flavor profile of this coffee?</h3><br><p>You said <?php echo $_GET["6"]; ?></p></td>
            <td><h3>How would you rate the flavor profile of this coffee?</h3><br><p>You said <?php echo $_GET["11"]; ?></p></td>
        </tr>
<!--Question 2-->
        <tr>
            <td><h3>How satisfied are you with the value of this coffee for the price listed?</h3><br><p>You said <?php echo $_GET["2"]; ?></p></td>
            <td><h3>How satisfied are you with the value of this coffee for the price listed?</h3><br><p>You said <?php echo $_GET["7"]; ?></p></td>
            <td><h3>How satisfied are you with the value of this coffee for the price listed?</h3><br><p>You said <?php echo $_GET["12"]; ?></p></td>
        </tr>
<!--Question 3-->
        <tr>
            <td><h3>What additives would you enjoy the most with this drink?</h3><br><p>You said <?php echo $_GET["3"]; ?></p></td>
            <td><h3>What additives would you enjoy the most with this drink?</h3><br><p>You said <?php echo $_GET["8"]; ?></p></td>
            <td><h3>What additives would you enjoy the most with this drink?</h3><br><p>You said <?php echo $_GET["13"]; ?></p></td>
        </tr>
<!--Question 4-->
        <tr>
            <td><h3>How would you rank the aroma of this coffee before and during your first sip?</h3><br><p>You said <?php echo $_GET["4"]; ?></p></td>
            <td><h3>How would you rank the aroma of this coffee before and during your first sip?</h3><br><p>You said <?php echo $_GET["9"]; ?></p></td>
            <td><h3>How would you rank the aroma of this coffee before and during your first sip?</h3><br><p>You said <?php echo $_GET["14"]; ?></p></td>
        </tr>
<!--Question 5-->
        <tr>
            <td><h3>How would you rank the aroma of this coffee before and during your first sip?</h3><br><p>You said <?php echo $_GET["5"]; ?></p></td>
            <td><h3>How would you rank the aroma of this coffee before and during your first sip?</h3><br><p>You said <?php echo $_GET["10"]; ?></p></td>
            <td><h3>How would you rank the aroma of this coffee before and during your first sip?</h3><br><p>You said <?php echo $_GET["15"]; ?></p></td>
        </tr>
<!--Comments-->
        <tr>
            <td><h3>Your Comments:</h3> <br> <p><?php echo $_GET["comments_1"]; ?></p></td>
            <td><h3>Your Comments:</h3> <br> <p><?php echo $_GET["comments_2"]; ?></p></td>
            <td><h3>Your Comments:</h3> <br> <p><?php echo $_GET["comments_3"]; ?></p></td>
        </tr>
    </table>
    <!--end results-->

    <!--Footer-->
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
    <!--end Footer-->
    </body>
</html>