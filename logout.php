<!-- logout.php -->
<?php
session_start();

// Destroy the current session (logout the user)
session_destroy();

// Redirect the user to the login page
header("Location: login.php");
exit;
?>  