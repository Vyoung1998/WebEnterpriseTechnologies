<?php
//make database connection
session_start();
include 'connect.php';
$msg="";
  if(isset($_POST['add'])){
    //get id first from the product you just selected
    $cartID=mysqli_real_escape_string($conn,$_POST['cartID']); //id automatically since it's the primary key
    $productID=mysqli_real_escape_string($conn,$_POST['productID']); //id automatically since it's the primary key
	$productName=mysqli_real_escape_string($conn,$_POST['productName']);
	$quantity=mysqli_real_escape_string($conn,$_POST['productQuantity']);
	$price=mysqli_real_escape_string($conn,$_POST['productPrice']);
    //first check if quantity of the products table is available, then add to cart quantity if it is
    //also, it needs to remove 1 from the products table
    //I'm going to try and get a variable from the products table here, then do the math
    //id from above,should match post clicked on
    $sql = "SELECT productQuantity FROM products WHERE productID= '$productID'";
    $productQuantity = $conn->query($sql);
    
    //also might have to get other details too since they're all from products table as foriegn keys


    if($quantity === 0){
        $msg="This product is out of stock";
    } else {
        $result = $quantity++; //add one to cart
        $productQuantity--; //remove one from productQuantity
        //insert data into shopping cart table
        $insert=mysqli_query($conn,"INSERT INTO `shoppingCart`(`cartID`, `productID`, `productName`, `quantity`, `price`) 
	    VALUES ('$cartID','$productID','$productName','$quantity','$price')");
        
        $msg="Added to Cart";
    }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CMS Sessions: Insert Blog Post</title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">
        
    </head>

    <body>
		<?php include "header.php"?>

		<p><?php echo $msg;?></p>
        <p>Go to your Shopping Cart<p><br>
        <button><a href="cart.php">Go to Cart</a></button><br>
        <p>continue Shopping<p><br>
        <button><a href="store.php">Store</a></button><br>
        

		<?php include "footer.php"?>
	</body>
</html>