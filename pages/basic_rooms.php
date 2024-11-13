<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baic-rooms</title>
    <link rel="stylesheet" href="assets/css/basicrooms.css">
</head>
<body>
    <!-- pages/basic_rooms.php -->
<!-- Basic Rooms Page -->
<?php
session_start();
include('../config/database.php');

$category = 'basic';
$sql = "SELECT * FROM rooms WHERE category='$category'";
$result = $conn->query($sql);
?>

<?php include('../includes/header.php'); ?>

<section class="section rooms">
    <h2>Basic Rooms</h2>
    <div class="room-list">
        <?php
        if ($result->num_rows > 0) {
            while($room = $result->fetch_assoc()) {
                echo '
                <div class="room-item">
                    <img src="../assets/images/room_basic.jpg" alt="Basic Room">
                    <h3>Room ' . $room['room_number'] . '</h3>
                    <p>' . $room['features'] . '</p>
                    <p><strong>Price:</strong> $' . number_format($room['price'], 2) . '</p>
                    <p><strong>Status:</strong> ' . ($room['is_available'] ? '<span class="available">Available</span>' : '<span class="unavailable">Unavailable</span>') . '</p>
                    ' . ($room['is_available'] ? '<form action="../actions/book-room.php" method="POST">
                        <input type="hidden" name="room_id" value="' . $room['room_id'] . '">
                        <button type="submit" name="book" class="book-button">Book Now</button>
                    </form>' : '') . '
                </div>
                ';
            }
        } else {
            echo "<p>No Basic rooms available at the moment.</p>";
        }
        ?>
    </div>
</section>

<?php include('../includes/footer.php'); ?>

</body>
</html>