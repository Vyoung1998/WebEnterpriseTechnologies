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
$_SESSION = " "; //clearing all sessions
// Destroy the session
session_destroy();

echo "<p>You have been logged out.</p>";
echo "<button><a href = 'login.php'>Login</a></button>";
exit;
?>

</body>
</html>
