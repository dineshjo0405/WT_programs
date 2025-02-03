<?php
session_start(); // Start the session

if (isset($_SESSION["username"])) {
    echo "Welcome, " . $_SESSION["username"];
} else {
    echo "No session data found.";
}
?>
