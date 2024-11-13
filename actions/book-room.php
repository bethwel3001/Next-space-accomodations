<?php
// actions/book-room.php
session_start();
include('../config/database.php');

if (isset($_POST['book'])) {
    if (!isset($_SESSION['user_id'])) {
        $_SESSION['error'] = "Please login to book a room.";
        header("Location: ../index.php#home");
        exit();
    }

    $room_id = $conn->real_escape_string($_POST['room_id']);
    $user_id = $_SESSION['user_id'];

    // Check room availability
    $sql = "SELECT * FROM rooms WHERE room_id='$room_id' AND is_available=1";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $room = $result->fetch_assoc();
        $amount = $room['price'];

        // Insert booking
        $sql = "INSERT INTO bookings (user_id, room_id, amount) VALUES ('$user_id', '$room_id', '$amount')";
        if ($conn->query($sql) === TRUE) {
            // Update room availability
            $sql = "UPDATE rooms SET is_available=0 WHERE room_id='$room_id'";
            $conn->query($sql);

            // Get the last inserted booking_id
            $booking_id = $conn->insert_id;

            // Redirect to receipt page
            header("Location: ../pages/receipt.php?booking_id=$booking_id");
        } else {
            $_SESSION['error'] = "Booking failed. Please try again.";
            header("Location: ../index.php#services");
        }
    } else {
        $_SESSION['error'] = "Room is not available.";
        header("Location: ../index.php#services");
    }
} else {
    header("Location: ../index.php#services");
}
?>
