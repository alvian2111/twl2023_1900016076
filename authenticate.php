<?php
// authenticate.php

// Replace this with your authentication logic (e.g., check against a database)
$validUsername = "alvian";
$validPassword = "123";

$submittedUsername = $_POST["username"];
$submittedPassword = $_POST["password"];

if ($submittedUsername === $validUsername && $submittedPassword === $validPassword) {
    // Successful login, set up the user session
    session_start();
    $_SESSION["authenticated"] = true;
    header("Location: index.php");
    exit;
} else {
    // Failed login, redirect back to login.php with an error message
    header("Location: login.php?error=1");
    exit;
}
?>
