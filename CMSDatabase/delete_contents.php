<?php 
    session_start();
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CMS Database Final: Delete Contents</title>
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
   include 'connect.php';
      // Prepare SQL statement
      if(isset($_POST["contentID"]) && !empty($_POST["contentID"])){
      $sql = "DELETE FROM Contents WHERE contentID = ?"; $stmt = $conn->prepare($sql);
      // Bind parameter (i = integer)
      $stmt->bind_param("i", $_POST["contentID"]);
      // Execute statement
      if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
          echo "Contents deleted successfully."; }
      else {
          echo "No content block found with the given ID.";
        }
      }
      else {
        echo "Error executing query: " . $stmt->error; }
      }

      ?>

      <?php include "footer.php" ?>

    </body>
</html>
