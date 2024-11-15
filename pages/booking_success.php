<?php
session_start();
include('../config/database.php');

// Fetch booking ID from GET request
$booking_id = $_GET['booking_id'] ?? null;

// Initialize booking variable
$booking = null;

if ($booking_id) {
    try {
        // Prepare and execute query to fetch booking details
        $stmt = $conn->prepare("
            SELECT rb.room_id, rb.room_number, r.price, rb.booking_date, rb.name AS user_name, rb.email AS user_email
            FROM recent_bookings rb
            JOIN rooms r ON rb.room_id = r.room_id
            WHERE rb.booking_id = ?
        ");
        $stmt->execute([$booking_id]);
        $booking = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Error fetching booking details: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Success</title>
    <link rel="stylesheet" href="../assets/css/booking_success.css">
</head>
<body>
    <header>
        <h1>Booking Confirmation</h1>
    </header>

    <main>
        <?php if ($booking): ?>
            <div class="booking-details">
                <h2>Thank you for booking with Next-space!</h2>
                <p><strong>Room Number:</strong> <?php echo htmlspecialchars($booking['room_number']); ?></p>
                <p><strong>Price:</strong> $<?php echo htmlspecialchars($booking['price']); ?></p>
                <p><strong>Booked By:</strong> <?php echo htmlspecialchars($booking['user_name']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($booking['user_email']); ?></p>
                <p><strong>Booking Date:</strong> <?php echo htmlspecialchars($booking['booking_date']); ?></p>
            </div>

            <div class="actions">
                <button onclick="window.print()">Print Receipt</button>
                <a href="../pages/basic_rooms.php" class="button">Back to Rooms</a>
            </div>
        <?php else: ?>
            <div class="error-message">
                <p>No booking details found. Please try again.</p>
                <a href="../index.php" class="button">Back to Home</a>
            </div>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; 2024 Hotel Book. All rights reserved.</p>
    </footer>
</body>
</html>
