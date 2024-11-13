<!-- pages/premium_rooms.php -->
<?php
session_start();
include('../config/database.php');

$category = 'premium';
$sql = "SELECT * FROM rooms WHERE category='$category'";
$result = $conn->query($sql);
?>
<?php include('../includes/header.php'); ?>

<section class="section rooms">
    <h2>Premium Rooms</h2>
    <div class="room-list">
        <?php
       // Assume $conn is your database connection and $stmt is your prepared statement
       $stmt = $conn->prepare("SELECT * FROM rooms WHERE category = 'premium'");
       $stmt->execute();
       
       $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
       if (count($rooms) > 0) {
           foreach ($rooms as $room) {
               echo "<div class='room-card'>"; // Customize your room card output here
               echo "<h3>" . htmlspecialchars($room['room_number']) . "</h3>";
               echo "<p>Price: $" . htmlspecialchars($room['price']) . "</p>";
               echo "<button>Book Now</button>";
               echo "</div>";
           }
       } else {
           echo "<p>No premium rooms available at this time.</p>";
       }
       ?>
    </div>
</section>

<?php include('../includes/footer.php'); ?>
