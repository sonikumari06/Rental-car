<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "car_rental_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Login successful";
        
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}

$conn->close();
?>