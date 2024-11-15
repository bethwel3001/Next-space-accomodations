<?php
include '../config/database.php';
session_start();

if (!isset($_SESSION['user']) || !isset($_GET['room_id'])) {
    header('Location: ../login.php');
    exit();
}

$user = $_SESSION['user'];
$room_id = $_GET['room_id'];

try {
    $stmt = $conn->prepare("INSERT INTO bookings (user_id, room_id) VALUES (:user_id, :room_id)");
    $stmt->bindParam(':user_id', $user['id']);
    $stmt->bindParam(':room_id', $room_id);
    $stmt->execute();

    $booking_id = $conn->lastInsertId();
    $receipt_url = "../actions/receipt.php?booking_id=" . $booking_id;
    
    echo "<script>
        alert('Booking successful!');
        window.open('$receipt_url', '_blank');
        setTimeout(function(){ window.location.href = '../pages/packages.php'; }, 4000);
    </script>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
