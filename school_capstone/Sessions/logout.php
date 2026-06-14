<?php
// Resume the session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

echo "You have been logged out.";
echo "<a href = 'login.php'>Login</a>";
?>

</body>
</html>
