<?php
session_start();
include('../config/database.php');

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit();
}

// Check if the form was submitted with room data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['room_id'], $_POST['name'], $_POST['email'], $_POST['phone'])) {
    $room_id = $_POST['room_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_id = $_SESSION['user_id'];  // Assuming user ID is stored in session

    // Save the booking details to the database
    $sql = "INSERT INTO bookings (user_id, room_id, name, email, phone) VALUES (:user_id, :room_id, :name, :email, :phone)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'user_id' => $user_id,
        'room_id' => $room_id,
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    ]);

    // Get the booking ID (for receipt generation)
    $booking_id = $conn->lastInsertId();

    // Redirect to a success page (booking confirmation or receipt generation)
    header("Location: ../booking_success.php?booking_id=$booking_id");
    exit();
} else {
    echo "<p>Invalid form submission.</p>";
}
?>
