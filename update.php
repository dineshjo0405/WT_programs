<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $reg_date = $_POST['reg_date'];

    // Constructing the update query dynamically
    $updates = [];

    if (!empty($firstname)) $updates[] = "firstname='$firstname'";
    if (!empty($lastname)) $updates[] = "lastname='$lastname'";
    if (!empty($age)) $updates[] = "age='$age'";
    if (!empty($email)) $updates[] = "email='$email'";
    if (!empty($reg_date)) $updates[] = "reg_date='$reg_date'";

    if (!empty($updates)) {
        $sql = "UPDATE users SET " . implode(", ", $updates) . " WHERE id='$user_id'";

        if ($conn->query($sql) === TRUE) {
            echo "User updated successfully!";
        } else {
            echo "Error updating user: " . $conn->error;
        }
    } else {
        echo "No fields to update!";
    }
}

$conn->close();
?>
