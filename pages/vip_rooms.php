<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('../includes/header.php'); ?>
    <!-- pages/vip_rooms.php -->
<?php
session_start();
include('../config/database.php');

$category = 'VIP';
$sql = "SELECT * FROM rooms WHERE category='$category'";
$result = $conn->query($sql);
?>
<section class="section rooms">
    <h2>VIP Rooms</h2>
    <div class="room-list">
        <?php
       // Assuming $conn is your database connection and $stmt is your prepared statement
       $stmt = $conn->prepare("SELECT * FROM rooms WHERE category = 'VIP'");
       $stmt->execute();
       $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);
       if (count($rooms) > 0) {
           foreach ($rooms as $room) {
               echo "<div class
               'room-card'>"; // Customize your room card output here
               echo "<h3>" . htmlspecialchars($room['room_number']) . "</h3>";
               echo "<p>Price: $" . htmlspecialchars($room['price']) . "</p>";
               echo "<button>Book Now</button>";
               echo "</div>";
               }
               }
        ?>
    </div>
</section>
<?php include('../includes/footer.php'); ?>
</body>
</html>