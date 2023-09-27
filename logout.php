<?php
session_start();
session_unset(); // clears all session data
session_destroy(); // destroys the session
header("Location: index.php");
exit(); 
?>