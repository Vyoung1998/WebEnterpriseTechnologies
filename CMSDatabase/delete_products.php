<?php 
    session_start();
      include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CMS Sessions: Delete Product</title>
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
        <meta name="description" content="PHP CSS and HTML Website CAPSTONE.">
        <meta name="author" content="Victoria Young">
        
    </head>

    <body>
  <?php include "header.php"?>

  <br>
  <br>
  <br>
        <?php
      //connect here and print
  
      // Prepare SQL statement
      if(isset($_POST["productID"]) && !empty($_POST["productID"])){
      $sql = "DELETE FROM shoppingCart WHERE productID = ?"; $stmt = $conn->prepare($sql);
      // Bind parameter (i = integer)
      $stmt->bind_param("i", $_POST["productID"]);
      // Execute statement
      if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
          echo "Deleted successfully from cart."; }
      else {
          echo "Product not found in the cart.";
        }
      }
      else {
        echo "Error executing query: " . $stmt->error; }
      }

      ?>

      <?php include "footer.php" ?>

    </body>
</html>
