    <div class = "footer">
        <div class="footer-left">
        <a href="../index.php"><h3>Return to Master Menu</h3></a>
        </div>
        
        <img src="valid-css2-blue.png" alt="valid xhtml icon" height = auto>
        <img src="valid-xhtmlprint10-blue.png" alt="valid xhtml icon" height = auto>
      
        <div class="footer-right">
           <?php  
         // To Get the last modification time.
            $last_modification="Last modified: " . date ("F d Y H:i:s.", getlastmod());

        // To Show the last modification time.
            echo $last_modification;
        //If logged in, show logout link.
        ?>