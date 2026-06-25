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
<!--Get Form Start-->
    <form action="results_get.php" method="get">
    <p>Name: <input type="text" name="name" size="20" required></p>
<!--Product 1-->    
    <div class="product">
        <div>
        <!--image of products and descriptions-->
        <img src="biblestationery.png" alt="Bible and pastel stationery, pens, sticky notes, and a pastel pink bible." height= 250px>
        <!--description of product-->
            <h2>Pastel Bible and Stationery Package</h2>
            <p>Study the Word with style with this pastel Bible and matching notebooks, sticky notes and pens. The light colors are cute and fun!
                 <br>
                The price is 15.50$.
            </p>
        </div>
    
            
    <!--Ask about color-->
        <h3>How do you like the colors of this product?</h3>
            <p><input type="radio" name="1" value="very satisfied" required>Very Satisfied</p>
            <p><input type="radio" name="1" value="somewhat satisfied" required>Somewhat Satisfied</p>
            <p><input type="radio" name="1" value="neutral" required>Neutral</p>
            <p><input type="radio" name="1" value="somewhat dissatisfied" required>Somewhat Dissatisfied</p>
            <p><input type="radio" name="1" value="very dissatisfied" required>Very Dissatisfied</p>    
    <!--Price satisfaction-->
        <h3>How satisfied are you with the value of this product for the price listed?</h3>
            <p><input type="radio" name="2" value="very satisfied" required>Very Satisfied</p>
            <p><input type="radio" name="2" value="somewhat satisfied" required>Somewhat Satisfied</p>
            <p><input type="radio" name="2" value="neutral" required>Neutral</p>
            <p><input type="radio" name="2" value="somewhat dissatisfied" required>Somewhat Dissatisfied</p>
            <p><input type="radio" name="2" value="very dissatisfied" required>Very Dissatisfied</p>  
    <!--what other colors are the best?-->
     <h3>What other colors would you like for this product?</h3>
            <p><input type="radio" name="3" value="black" required>Black</p>
            <p><input type="radio" name="3" value="dark brown" required>Dark Brown</p>
            <p><input type="radio" name="3" value="pastels" required>Pastels</p>
            <p><input type="radio" name="3" value="white" required>White</p>
            <p><input type="radio" name="3" value="red" required>Red</p>  
    <!--Asking about aroma-->
    <h3>How do you feel about the quality of this product?</h3>
            <p><input type="radio" name="4" value="very satisfied" required>Very Satisfied</p>
            <p><input type="radio" name="4" value="somewhat satisfied" required>Somewhat Satisfied</p>
            <p><input type="radio" name="4" value="neutral" required>Neutral</p>
            <p><input type="radio" name="4" value="somewhat dissatisfied" required>Somewhat Dissatisfied</p>
            <p><input type="radio" name="4" value="very dissatisfied" required>Very Dissatisfied</p>
    <!--This is the best coffee I've ever had-->
    <h3>Rate how true this statement is: "This is the best Bible and stationery pack ever."</h3>
            <p><input type="radio" name="5" value="strongly agree" required>Strongly Agree</p>
            <p><input type="radio" name="5" value="somewhat agree" required>Somewhat Agree</p>
            <p><input type="radio" name="5" value="neutral" required>Neutral</p>
            <p><input type="radio" name="5" value="somewhat disagree" required>Somewhat Disagree</p>
            <p><input type="radio" name="5" value="strongly disagree" required>Strongly Disagree</p>
    <p>Any suggestions or comments on how we can improve? </br>
        <textarea name="comments_1" rows="3"
        cols="30"></textarea></p>
    </div>
 
<!--Product 2-->
    <div class="product">
        <div>
            <!--image of products and descriptions-->
        <img src="caramelmachiatto.png" alt="An iced caramel machiatto in a glass, sitting on a table at a cafe" height= 250px>
            <!--description of product-->
            <h2>Iced Caramel Machiatto</h2>
            <p>This is our signature iced caramel machiatto, topped with caramel syrup. It's also availabe hot, but iced is more popular!
                 <br>
                The price is 6.00$.
            </p>
        </div>
    
    <!--Ask about taste-->
        <h3>How would you rate the flavor profile of this coffee?</h3>
            <p><input type="radio" name="6" value="very satisfied" required>Very Satisfied</p>
            <p><input type="radio" name="6" value="somewhat satisfied" required>Somewhat Satisfied</p>
            <p><input type="radio" name="6" value="neutral" required>Neutral</p>
            <p><input type="radio" name="6" value="somewhat dissatisfied" required>Somewhat Dissatisfied</p>
            <p><input type="radio" name="6" value="very dissatisfied" required>Very Dissatisfied</p>    
    <!--Price satisfaction-->
        <h3>How satisfied are you with the value of this coffee for the price listed?</h3>
            <p><input type="radio" name="7" value="very satisfied" required>Very Satisfied</p>
            <p><input type="radio" name="7" value="somewhat satisfied" required>Somewhat Satisfied</p>
            <p><input type="radio" name="7" value="neutral" required>Neutral</p>
            <p><input type="radio" name="7" value="somewhat dissatisfied" required>Somewhat Dissatisfied</p>
            <p><input type="radio" name="7" value="very dissatisfied" required>Very Dissatisfied</p>  
    <!--what flavors are the best?-->
      <h3>What additives would you enjoy the most with this drink?</h3>
            <p><input type="radio" name="8" value="whip cream" required>Whip Cream</p>
            <p><input type="radio" name="8" value="chocolate syrup" required>Chocolate Syrup</p>
            <p><input type="radio" name="8" value="caramel syrup" required>Caramel Syrup</p>
            <p><input type="radio" name="8" value="rainbow sprinkles" required>Rainbow Sprinkles</p>
            <p><input type="radio" name="8" value="cherry on top" required>Cherry on top</p>    
    <!--Asking about aroma-->
    <h3>How would you rank the aroma of this coffee before and during your first sip?</h3>
            <p><input type="radio" name="9" value="very satisfied" required>Very Satisfied</p>
            <p><input type="radio" name="9" value="somewhat satisfied" required>Somewhat Satisfied</p>
            <p><input type="radio" name="9" value="neutral" required>Neutral</p>
            <p><input type="radio" name="9" value="somewhat dissatisfied" required>Somewhat Dissatisfied</p>
            <p><input type="radio" name="9" value="very dissatisfied" required>Very Dissatisfied</p>
    <!--This is the best coffee I've ever had-->
    <h3>Rate how true this statement is: "This is the best cup of coffee I've ever had."</h3>
            <p><input type="radio" name="10" value="strongly agree" required>Strongly Agree</p>
            <p><input type="radio" name="10" value="somewhat agree" required>Somewhat Agree</p>
            <p><input type="radio" name="10" value="neutral" required>Neutral</p>
            <p><input type="radio" name="10" value="somewhat disagree" required>Somewhat Disagree</p>
            <p><input type="radio" name="10" value="strongly disagree" required>Strongly Disagree</p>
    <p>Any suggestions or comments on how we can improve? </br>
        <textarea name="comments_2" rows="3"
        cols="30"></textarea></p>
    </div>
    
<!--Product 3-->
  <div class="product">
        <div>
        <!--image of products and descriptions-->
        <img src="chocolatecoffeelatte.png" alt="A decadent chocolate coffee latte served with whip cream and chocolate syrup." height= 250px>
        <!--description of product-->
            <h2>Chocolate Coffee Latte</h2>
            <p>
                This is our signature iced caramel machiatto, topped with caramel syrup. It's also availabe hot, but iced is more popular!
            <br>
                The price is 5.50$.
            </p>
        </div>
    
    <!--Ask about taste-->
        <h3>How would you rate the flavor profile of this coffee?</h3>
            <p><input type="radio" name="11" value="very satisfied" required>Very Satisfied</p>
            <p><input type="radio" name="11" value="somewhat satisfied" required>Somewhat Satisfied</p>
            <p><input type="radio" name="11" value="neutral" required>Neutral</p>
            <p><input type="radio" name="11" value="somewhat dissatisfied" required>Somewhat Dissatisfied</p>
            <p><input type="radio" name="11" value="very dissatisfied" required>Very Dissatisfied</p>    
    <!--Price satisfaction-->
        <h3>How satisfied are you with the value of this coffee for the price listed?</h3>
            <p><input type="radio" name="12" value="very satisfied" required>Very Satisfied</p>
            <p><input type="radio" name="12" value="somewhat satisfied" required>Somewhat Satisfied</p>
            <p><input type="radio" name="12" value="neutral" required>Neutral</p>
            <p><input type="radio" name="12" value="somewhat dissatisfied" required>Somewhat Dissatisfied</p>
            <p><input type="radio" name="12" value="very dissatisfied" required>Very Dissatisfied</p>  
    <!--what flavors are the best?-->
      <h3>What additives would you enjoy the most with this drink?</h3>
            <p><input type="radio" name="13" value="whip cream" required>Whip Cream</p>
            <p><input type="radio" name="13" value="chocolate syrup" required>Chocolate Syrup</p>
            <p><input type="radio" name="13" value="caramel syrup" required>Caramel Syrup</p>
            <p><input type="radio" name="13" value="rainbow sprinkles" required>Rainbow Sprinkles</p>
            <p><input type="radio" name="13" value="cherry on top" required>Cherry on top</p>    
    <!--Asking about aroma-->
    <h3>How would you rank the aroma of this coffee before and during your first sip?</h3>
            <p><input type="radio" name="14" value="very satisfied" required>Very Satisfied</p>
            <p><input type="radio" name="14" value="somewhat satisfied" required>Somewhat Satisfied</p>
            <p><input type="radio" name="14" value="neutral" required>Neutral</p>
            <p><input type="radio" name="14" value="somewhat dissatisfied" required>Somewhat Dissatisfied</p>
            <p><input type="radio" name="14" value="very dissatisfied" required>Very Dissatisfied</p>
    <!--This is the best coffee I've ever had-->
    <h3>Rate how true this statement is: "This is the best cup of coffee I've ever had."</h3>
            <p><input type="radio" name="15" value="strongly agree" required>Strongly Agree</p>
            <p><input type="radio" name="15" value="somewhat agree" required>Somewhat Agree</p>
            <p><input type="radio" name="15" value="neutral" required>Neutral</p>
            <p><input type="radio" name="15" value="somewhat disagree" required>Somewhat Disagree</p>
            <p><input type="radio" name="15" value="strongly disagree" required>Strongly Disagree</p>
    <p>Any suggestions or comments on how we can improve? </br>
        <textarea name="comments_3" rows="3"
        cols="30"></textarea></p>
    <input type="submit" name="submit" value="Send My Feedback">
</div>
    </form>
    <!--end Get Form-->
    
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