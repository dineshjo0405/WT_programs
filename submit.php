<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Default username for MySQL
$password = ""; // Default password for MySQL (empty)
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    age INT(3),
    email VARCHAR(50),
    reg_date TIMESTAMP
)";

// Get form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$email = $_POST['email'];
$reg_date = $_POST['reg_date'];

// SQL query to insert data into the 'users' table
$sql1 = "INSERT INTO users (firstname, lastname, age, email, reg_date)
        VALUES ('$firstname', '$lastname', '$age', '$email', '$reg_date')";

// Execute the query
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>