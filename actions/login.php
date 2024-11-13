<?php
// actions/login.php
session_start();
include('../config/database.php');

if (isset($_POST['login'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            // Redirect to homepage
            header("Location: ../index.php");
        } else {
            // Invalid password
            $_SESSION['error'] = "Invalid email or password.";
            header("Location: ../index.php#home");
        }
    } else {
        // User not found
        $_SESSION['error'] = "Invalid email or password.";
        header("Location: ../index.php#home");
    }
} else {
    header("Location: ../index.php#home");
}
?>
