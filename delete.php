<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];

    $sql = "DELETE FROM users WHERE id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}

$conn->close();
?>
