<!--
Purpose of this page: This is the home page. You can navigate to most main pages.
Contains main values, reviews of products, buy someone a meal donation, advertises featured products and links to newsletter and volunteering. 
Header contains name if logged in, see header.php (conditional set in header--see notes)

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
        <title>CMS Sessions: Store</title>
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
    <!--Store-->
   <h1>Feed the Multitude Merch</h1>
    <h2><b>50%</b> of our profits are donated to food banks.</h2>
    <hr>
    <h1>The Summer Collection is Here!</h1>
    <div class="store-container">
    <?php 
    $sql = "SELECT productID, productName, productDescription, productPrice, productQuantity, image_url FROM products";
    $result = $conn->query($sql);

    //try to print data
    if($result->num_rows > 0){
        //output data from each row
        
        while($row = $result->fetch_assoc()){
            //display cart
            echo '<div class="product-listing">';
            echo '<h2><img src=' . $row["image_url"]. ' alt=product image height=500px></h2>';
            echo "<h3>Name: " . $row["productName"]. "</h3>";
            echo "<h3>Description: " . $row["productDescription"]. "</h3>";
            echo "<h3>Price: " . $row["productPrice"]. "</h3>";
            echo "<h3>Quantity: " . $row["productQuantity"]. "</h3>"; 
            echo "<br>";
                //delete button
            echo 
                "<form action='delete_products.php' method='POST'>
                <input type='hidden' name='productID' value= ". $row["productID"]. "> 
                <button type='submit' name='delete' onclick='return confirm('Are you sure you want to delete?');>
                Delete  </button></form>";

                //add to cart button
            echo 
                "<form action='add_to_cart.php' method='POST'>
                 <input type='hidden' name='cartID' value='Anonymous'>
                <input type='hidden' name='productID' value= ". $row["productID"]. ">
                <input type='hidden' name='productName' value= ". $row["productName"]. "> 
                <input type='hidden' name='productPrice' value= ". $row["productPrice"]. ">
                <input type='hidden' name='productQuantity' value= ". $row["productQuantity"]. ">    
                <button type='submit' name='add');>
                Add to Cart </button></form>";
        
            //update form not working yet (delete and add work)
            //adding button to send id to update program...
            //submission happens after the form is filled though
            echo '</div>';
        }
        } else {
            echo "0 results";
        }

    
    
    ?>
    </div>
<!--end content-->

<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>