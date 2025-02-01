<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
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
    email VARCHAR(50),
    reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// SQL to alter table (add a new column)
$alterSql = "ALTER TABLE users ADD COLUMN age INT(3) AFTER lastname";

if ($conn->query($alterSql) === TRUE) {
    echo "Table 'users' altered successfully<br>";
} else {
    echo "Error altering table: " . $conn->error;
}

// Close connection
$conn->close();
?>