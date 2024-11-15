<?php
include('../config/database.php');

// Process the booking if POST request is received
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the room_id and user data from POST
    $room_id = $_POST['room_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Get room details from the database
    $stmt = $conn->prepare("SELECT room_id, price, room_number FROM rooms WHERE room_id = ?");
    $stmt->execute([$room_id]);
    $room = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($room) {
        // Insert the booking into the recent_bookings table
        // $stmt = $conn->prepare("INSERT INTO recent_bookings (name, email, room_id, room_number, price, booking_date) VALUES (?, ?, ?, ?, ?, NOW())");
        // $stmt->execute([$name, $email, $room['room_id'], $room['room_number'], $room['price']]);

        $stmt = $conn->prepare("INSERT INTO recent_bookings (name, email, room_id, room_number) VALUES (?, ?, ?, ?)");
$stmt->execute([$name, $email, $room_id, $room_number]);

        // Redirect to booking_success.php
        header("Location: booking_success.php?booking_id=" . $conn->lastInsertId());
        exit();
    } else {
        // Room not found
        echo "Error: Room not found!";
    }
}
?>
