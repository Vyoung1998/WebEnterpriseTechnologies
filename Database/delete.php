<?php 
    session_start();
      include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CMS Sessions: Home</title>
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
      if(isset($_POST["id"]) && !empty($_POST["id"])){
      $sql = "DELETE FROM comments WHERE id = ?"; $stmt = $conn->prepare($sql);
      // Bind parameter (i = integer)
      $stmt->bind_param("i", $_POST["id"]);
      // Execute statement
      if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
          echo "Record deleted successfully."; }
      else {
          echo "No record found with the given ID.";
        }
      }
      else {
        echo "Error executing query: " . $stmt->error; }
      }

      ?>

      <?php include "footer.php" ?>

    </body>
</html>
