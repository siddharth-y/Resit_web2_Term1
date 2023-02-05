<?php
// Start the session
session_start();

// Unset the session variables for "user_logged_in" and "email"
unset($_SESSION["user_logged_in"]);
unset($_SESSION["email"]);

// Redirect to the login page
header("Location:login.php");
?>