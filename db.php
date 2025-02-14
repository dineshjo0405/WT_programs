<?php
$servername = "localhost";
$username = "root"; // Change if you have a different DB username
$password = ""; // Change if you have a DB password
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
