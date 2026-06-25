
<?php
session_start();

if(empty($_SESSION['cart'])){
    //making cart empty
    $_SESSION['cart']= array();
}



array_push($_SESSION['cart'], $_GET['id']);

//make function to compare cart array to products array, and print the result
//figure out how to get total from the prices listed from new array
//found in php documentation site
?>

<p>
    Product was successfully added to your cart!<br>
    <a href="../cart.php">View Shopping Cart</a><br>
    <a href="../store.php">Continue Shopping</a>
</p>