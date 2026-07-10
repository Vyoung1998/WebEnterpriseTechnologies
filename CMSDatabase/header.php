<div class="logo">
    <img src="images/simplelogo.png" alt="logo">
    
<div class="title">
    <h1>Feed the Multitude</h1>
    <h2>Faith in Action. Hope in Every Meal.</h2>
</div>   

</div>  
<hr>   
<nav class="header"> 
        <ul class ="nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <div class="dropdown">
                    <button class="dropbtn">Support Us</button>
                    <div class="dropdown-content">
                    <a href="buyameal.php">Buy A Meal</a>
                    <a href="store.php">Store</a>
                    <a href="contact.php">Contact to Volunteer</a>
                    <a href="testimonies.php">Testimonies</a>
                </div>
            </div>
            <li><a href="cart.php"><img src="images/carticon.png" alt="cart" height=20px></a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="legalpage.php">Legal</a></li>
      <?php if (isset($_SESSION['username'])): ?> 
    <!-- If logged in, show username and a logout link--> 
            <li><h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2></li>
            <li><a href="yourprofile.php">Profile</a></li>
    <!--logout button-->
            <li>
            <form class="logout" action="logout.php" method="POST">
                <button  type="submit" name="logout" onclick="return confirm('Are you sure you want to logout?');">Log Out</button>
            </form>
            </li>          
                <?php else: ?>
    <!-- If not logged in, show the login button -->
                <li><a href="login.php">Login</a></li>
                &nbsp;
                &nbsp;
                <li><a href="registeruser.php">Register New User</a></li>
                <?php endif; ?>

        </ul>
        <hr>
        

</nav>