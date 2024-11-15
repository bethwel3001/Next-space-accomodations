<?php
session_start();
include('config/database.php');

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Check if room_id is provided through POST
if (isset($_POST['room_id'])) {
    $room_id = $_POST['room_id'];

    // Fetch room details from the database
    $sql = "SELECT * FROM rooms WHERE room_id = :room_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['room_id' => $room_id]);
    $room = $stmt->fetch(PDO::FETCH_ASSOC);

    // Ensure room exists
    if ($room) {
        // Show booking confirmation form (name, email, phone, etc.)
        echo "<h2>Booking Room " . htmlspecialchars($room['room_number']) . "</h2>";
        echo "<p>Price: $" . htmlspecialchars($room['price']) . "</p>";
        echo "<p>Category: " . htmlspecialchars($room['category']) . "</p>";
        echo "<form action='actions/confirm_booking.php' method='POST'>
                <input type='hidden' name='room_id' value='" . htmlspecialchars($room['room_id']) . "'>
                <label for='name'>Full Name:</label><br>
                <input type='text' name='name' required><br>
                <label for='email'>Email:</label><br>
                <input type='email' name='email' required><br>
                <label for='phone'>Phone:</label><br>
                <input type='text' name='phone' required><br>
                <button type='submit'>Confirm Booking</button>
              </form>";
    } else {
        echo "<p>Sorry, the selected room is unavailable.</p>";
    }
} else {
    echo "<p>No room selected for booking.</p>";
}
?>
