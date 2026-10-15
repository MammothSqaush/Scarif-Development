<?php
session_start();        // Initialize the session
session_unset();        // Unset all session variables
session_destroy();      // Destroy the session

header("Location: login.php"); // Redirect user to the login page
exit();
