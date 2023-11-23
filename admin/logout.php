<?php
ob_start(); // Start output buffering

    session_destroy();
    // Redirect to the login page after destroying the session
    header("Location: login.php");

    echo "teste";

ob_end_clean(); 
?>
