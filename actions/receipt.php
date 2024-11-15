<?php
include '../config/database.php';
session_start();

if (!isset($_SESSION['user']) || !isset($_GET['booking_id'])) {
    header('Location: ../login.php');
    exit();
}

$booking_id = $_GET['booking_id'];

try {
    $stmt = $conn->prepare("SELECT bookings.id, users.name, users.email, users.phone, rooms.name AS room_name, rooms.category
                            FROM bookings 
                            JOIN users ON bookings.user_id = users.id 
                            JOIN rooms ON bookings.room_id = rooms.id 
                            WHERE bookings.id = :booking_id");
    $stmt->bindParam(':booking_id', $booking_id);
    $stmt->execute();
    $booking = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Receipt</title>
    <link rel="stylesheet" href="../assets/css/receipt.css">
</head>
<body>
    <div class="receipt-container">
        <h1>Booking Receipt</h1>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($booking['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($booking['email']); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($booking['phone']); ?></p>
        <p><strong>Room:</strong> <?php echo htmlspecialchars($booking['room_name']); ?></p>
        <p><strong>Category:</strong> <?php echo htmlspecialchars($booking['category']); ?></p>
        <button onclick="window.print()">Print Receipt</button>
    </div>
</body>
</html>
