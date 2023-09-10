<?php
// Start or resume the existing session
session_start();

// Unset or destroy the session variables
session_unset(); // This clears all session data
session_destroy(); // This destroys the session

// Redirect the user to the login page or any other desired page
header("Location: index.php"); // Change "login.php" to the desired page
exit(); // Ensure that no more code is executed after the redirection
?>
