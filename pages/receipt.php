<?php
include('../config/database.php');

// Get booking ID from the URL
$booking_id = $_GET['booking_id'];

// Fetch the booking details
$stmt = $conn->prepare("SELECT rb.*, r.room_number, r.price, r.features FROM recent_bookings rb JOIN rooms r ON rb.room_id = r.room_id WHERE rb.booking_id = ?");
$stmt->execute([$booking_id]);
$booking = $stmt->fetch(PDO::FETCH_ASSOC);

// Check if booking exists
if (!$booking) {
    echo "Booking not found.";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipt</title>
    <style>
        .receipt {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            max-width: 600px;
            margin: 0 auto;
        }
        .receipt h1 {
            text-align: center;
        }
        .receipt .details {
            margin-bottom: 20px;
        }
        .receipt .details p {
            margin: 5px 0;
        }
        .receipt .button {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <h1>Booking Receipt</h1>
        <div class="details">
            <p><strong>Room Number:</strong> <?php echo htmlspecialchars($booking['room_number']); ?></p>
            <p><strong>Category:</strong> <?php echo htmlspecialchars($booking['category']); ?></p>
            <p><strong>Price:</strong> $<?php echo htmlspecialchars($booking['price']); ?></p>
            <p><strong>Booking Date:</strong> <?php echo htmlspecialchars($booking['booking_date']); ?></p>
            <p><strong>Features:</strong> <?php echo htmlspecialchars($booking['features']); ?></p>
        </div>
        <div class="button">
            <button onclick="window.print()">Print Receipt</button>
        </div>
    </div>
</body>
</html>
