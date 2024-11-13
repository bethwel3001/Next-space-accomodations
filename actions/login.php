<?php
include('../config/database.php');

// Get form data
$email = $_POST['email']; // Use 'email' instead of 'username'
$password = $_POST['password'];

// Query to check if the email exists
$query = $conn->prepare("SELECT * FROM users WHERE email = :email");
$query->bindParam(':email', $email);

if ($query->execute()) {
    $user = $query->fetch(PDO::FETCH_ASSOC);

    // Check if user exists and verify password
    if ($user && password_verify($password, $user['password'])) {
        // Successfully logged in
        session_start();
        $_SESSION['username'] = $user['name']; // Store the full name or username in the session
        header("Location: ../index.php"); // Redirect to home page after login
    } else {
        // Invalid login credentials
        echo "Invalid login credentials!";
    }
} else {
    echo "Error executing query!";
}
?>
