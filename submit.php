<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $reg_date = $_POST['reg_date'];

    $sql = "INSERT INTO users (firstname, lastname, age, email, reg_date) 
            VALUES ('$firstname', '$lastname', '$age', '$email', '$reg_date')";

    if ($conn->query($sql) === TRUE) {
        echo "New user registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
