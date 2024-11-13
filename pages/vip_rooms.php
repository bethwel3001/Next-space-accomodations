<!-- pages/vip_rooms.php -->
<?php
session_start();
include('../config/database.php');

$category = 'VIP';
$sql = "SELECT * FROM rooms WHERE category='$category'";
$result = $conn->query($sql);
?>

<?php include('../includes/header.php'); ?>

<section class="section rooms">
    <h2>VIP Rooms</h2>
    <div class="room-list">
        <?php
        if ($result->num_rows > 0) {
            while($room = $result->fetch_assoc()) {
                echo '
                <div class="room-item">
                    <img src="../assets/images/room_vip.jpg" alt="VIP Room">
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
            echo "<p>No VIP rooms available at the moment.</p>";
        }
        ?>
    </div>
</section>

<?php include('../includes/footer.php'); ?>
