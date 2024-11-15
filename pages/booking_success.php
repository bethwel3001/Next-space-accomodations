<?php
session_start();
include('config/database.php');

// Check if booking_id is passed
if (isset($_GET['booking_id'])) {
    $booking_id = $_GET['booking_id'];

    // Fetch booking details from the database
    $sql = "SELECT * FROM bookings WHERE booking_id = :booking_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['booking_id' => $booking_id]);
    $booking = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($booking) {
        // Display booking details and provide a link to the printable receipt
        echo "<h2>Booking Confirmed</h2>";
        echo "<p>Booking ID: " . htmlspecialchars($booking['booking_id']) . "</p>";
        echo "<p>Name: " . htmlspecialchars($booking['name']) . "</p>";
        echo "<p>Email: " . htmlspecialchars($booking['email']) . "</p>";
        echo "<p>Phone: " . htmlspecialchars($booking['phone']) . "</p>";
        echo "<p>Room Number: " . htmlspecialchars($booking['room_number']) . "</p>";
        echo "<p>Price: $" . htmlspecialchars($booking['price']) . "</p>";
        echo "<a href='print_receipt.php?booking_id=" . htmlspecialchars($booking['booking_id']) . "'>Print Receipt</a>";
    } else {
        echo "<p>Booking not found.</p>";
    }
} else {
    echo "<p>Booking ID is missing.</p>";
}
?>
