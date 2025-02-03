<?php
session_start();

$_SESSION["username"] = "JaneDoe"; // Modify session value
echo "Username changed to " . $_SESSION["username"];
?>
