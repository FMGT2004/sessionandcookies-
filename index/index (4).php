<?php
session_start(); // Start session to access session data

session_destroy(); // Destroy session data to log the user out

// back to the login page
header("Location: Group14_1D_sessionLog.php");
exit();
?>