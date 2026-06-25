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
                //include file to get variables
                include 'ecom/products.php';
                //use associative array and loop through with buttons

                foreach($products as $product=>$item):
            ?>
                <div class="product-listing">
                    <p class="product-image"><img src="<?php echo htmlspecialchars($item['Image']);?>" alt="product image" height=500px></p>
                    <h3>Product Name: <?php echo htmlspecialchars($item['Name']);?></h3>
                    <p class="product-desc">Description: <?php echo htmlspecialchars($item['Description']);?></p>
                    <p class="product-quantity">Quantity: <?php echo htmlspecialchars($item['Quantity']);?></p>
                    <p class="product-price">$<?php echo number_format($item['Price'],2);?></p>
                <button><a href="ecom/add-to-cart.php?id=<?php echo htmlspecialchars($item["id"]);?>">Add to Cart</a></button> <br><br>
                <button><a href="ecom/remove-from-cart.php?id=<?php echo htmlspecialchars($item["id"]);?>">Remove from Cart</a></button>
                </div>


                <?php endforeach;?>
                
<!--end content-->

<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>