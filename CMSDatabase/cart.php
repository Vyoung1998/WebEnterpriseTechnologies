<!--
Purpose of this page: This is the cart. I will put the basic cart functions. 
Honesty Statement: I promise I wrote this code, line by line,
not using any help or any previous code.
-->
<?php
    session_start();
//no check here, available for guests
    include 'connect.php';
    $msg="";//create for message upon the success of this function
//for form submit

   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CMS Sessions: Cart</title>
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
<h1>Cart and Checkout Goes Here</h1>

<?php
    $sql = "SELECT productName, quantity, price FROM shoppingCart";
    $result = $conn->query($sql);

    //try to print data
    if($result->num_rows > 0){
        //output data from each row
        
        while($row = $result->fetch_assoc()){
            echo '<div class="shopping_cart">';
            echo "<h2>Product Name: " . $row["productName"]. "</h2>";
            echo "<h3>Quantity: " . $row["quantity"]. "</h3>";
            echo "<h3>Price: " . $row["price"]. "</h3>";
            echo "<br>";
            //create button that adds back to products table, and removes from shopping cart table
            echo 
            "<form action='delete_item.php' method='POST'>
            <input type='hidden' name='productID' value= ". $row["productID"]. "> 
            <button type='submit' name='delete' onclick='return confirm('Are you sure you want to delete?');>
            Delete
            </button>
            </form>";

            

       
        echo '<div class="contentbox">';
        }
        } else {
            echo "Your Cart is Currently Empty.";
        }

        
?>
<!--end content-->

<!--footer-->
    <?php include 'footer.php';?>
<!--end footer-->
    </body>
</html>