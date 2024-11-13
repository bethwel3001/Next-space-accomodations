
<!-- pages/profile.php -->
<?php
session_start();
include('../config/database.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php#home");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user details
$sql = "SELECT * FROM users WHERE user_id='$user_id'";
$user_result = $conn->query($sql);
$user = $user_result->fetch_assoc();

// Fetch booking history
$sql = "SELECT b.booking_id, b.booking_date, b.amount, b.status, r.room_number, r.category
        FROM bookings b
        JOIN rooms r ON b.room_id = r.room_id
        WHERE b.user_id='$user_id'
        ORDER BY b.booking_date DESC";
$bookings_result = $conn->query($sql);
?>

<?php include('../includes/header.php'); ?>

<section class="section profile">
    <h2>Your Profile</h2>
    <div class="profile-details">
        <p><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($user['phone']); ?></p>
        <p><strong>Address:</strong> <?php echo htmlspecialchars($user['address']); ?></p>
    </div>

    <h3>Booking History</h3>
    <div class="booking-history">
        <?php
        if ($bookings_result->num_rows > 0) {
            echo '<table>
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Room Number</th>
                            <th>Category</th>
                            <th>Booking Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Receipt</th>
                        </tr>
                    </thead>
                    <tbody>';
            while($booking = $bookings_result->fetch_assoc()) {
                echo '<tr>
                        <td>' . $booking['booking_id'] . '</td>
                        <td>' . $booking['room_number'] . '</td>
                        <td>' . ucfirst($booking['category']) . '</td>
                        <td>' . $booking['booking_date'] . '</td>
                        <td>$' . number_format($booking['amount'], 2) . '</td>
                        <td>' . ucfirst($booking['status']) . '</td>
                        <td><a href="receipt.php?booking_id=' . $booking['booking_id'] . '" target="_blank"><i class="fas fa-print"></i></a></td>
                      </tr>';
            }
            echo '</tbody></table>';
        } else {
            echo "<p>You have no bookings yet.</p>";
        }
        ?>
    </div>
</section>

<?php include('../includes/footer.php'); ?>



