<?php
include('../config/database.php');

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hash the password

// Prepare SQL query to insert new user
$query = $conn->prepare("INSERT INTO users (name, email, password, phone, address) VALUES (:name, :email, :password, :phone, :address)");

if (!$query) {
    die("SQL Error: " . $conn->errorInfo()[2]);
}

// Bind parameters
$query->bindParam(':name', $name);
$query->bindParam(':email', $email);
// phone
$query->bindParam(':phone', $phone);
// address
$query->bindParam(':address', $address);
$query->bindParam(':password', $password);

// Execute the query
if ($query->execute()) {
    echo "Signup successful!";
    header("Location: ../redirect.php");  // Redirect after successful signup
} else {
    echo "Error: " . $query->errorInfo()[2];
}
?>
