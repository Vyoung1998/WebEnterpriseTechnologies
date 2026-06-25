    <div class = "footer">
        <div class="footer-left">
        <a href="../index.php"><h3>Return to Master Menu</h3></a>
        </div>
        
        <img src="images/valid-css2-blue.png" alt="valid xhtml icon" height = auto>
        <img src="images/valid-xhtmlprint10-blue.png" alt="valid xhtml icon" height = auto>
      
        <div class="footer-right">
           <?php  
         // To Get the last modification time.
            $last_modification="Last modified: " . date ("F d Y H:i:s.", getlastmod());

        // To Show the last modification time.
            echo $last_modification;
        //If logged in, show logout link.
             if (isset($_SESSION['username'])): ?> 
   
            <!--logout button-->
            
            <form class="logout" action="logout.php" method="POST">
                <button  type="submit" name="logout" onclick="return confirm('Are you sure you want to logout?');">Log Out</button>
            </form>
                     
                <?php else: ?>
                <!--otherwise show login-->
                <a href="login.php">Login</a>
                <?php endif; ?>
        
        
        
        </div>
    </div>
