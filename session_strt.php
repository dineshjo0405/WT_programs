<?php
session_start(); // Start the session

$_SESSION["username"] = "JohnDoe"; // Store session data
$_SESSION["email"] = "johndoe@example.com";

echo "Session variables are set.";
?>