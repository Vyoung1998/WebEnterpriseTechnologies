
<?php
session_start();
include 'products.php';


if(empty($_SESSION['cart'])){
    //making cart empty
    $_SESSION['cart']= array();
}

$productID = $_GET['id'];//assign id selected to variable

if (in_array($productID, $_SESSION['cart']))
  {
  echo "Match found";
    unset($_SESSION['cart'], $_GET['id']);
    echo "Item removed from cart.";//if it is, remove
  }
else
  {
  echo "Item isn't in cart";
  }


//make function to compare cart array to products array, and print the result
//figure out how to get total from the prices listed from new array
//found in php documentation site
?>

<p>
    <a href="../cart.php">View Shopping Cart</a><br>
    <a href="../store.php">Continue Shopping</a>
</p>