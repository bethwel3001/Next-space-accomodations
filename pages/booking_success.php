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
<body><style>/* Body and general styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f7f6; /* Light grey background */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    overflow: hidden;
    animation: fadeIn 1s ease-in-out;
}

header {
    text-align: center;
    margin-top: 50px;
}

h1 {
    color: #2c3e50;
    font-size: 2.5rem;
    margin-bottom: 20px;
}

main {
    text-align: center;
    width: 90%;
    max-width: 600px;
}

/* Booking details styling */
.booking-details {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.booking-details h2 {
    color: #27ae60;
    font-size: 2rem;
    margin-bottom: 15px;
}

.booking-details p {
    font-size: 1rem;
    margin: 10px 0;
}

.booking-details strong {
    color: #34495e;
}

/* Action buttons styling */
button, .button {
    background-color: #3498db;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
    margin: 5px;
    text-decoration: none;
}

button:hover, .button:hover {
    background-color: #2980b9;
    transform: scale(1.05);
}

button:active, .button:active {
    transform: scale(1);
}

/* Error message styling */
.error-message {
    background-color: #e74c3c;
    color: white;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
    font-size: 1.2rem;
}

.error-message a {
    color: white;
    text-decoration: underline;
}

/* Footer styling */
footer {
    background-color: rgba(0, 64, 128, 0.9); /* Transparent footer */
    color: white;
    padding: 15px 0;
    text-align: center;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    animation: fadeIn 2s ease-in-out;
}

footer p {
    font-size: 1rem;
    margin: 0;
}

/* Success message styling on load */
.success-message {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #27ae60;
    color: white;
    padding: 20px 30px;
    border-radius: 8px;
    font-size: 1.5rem;
    display: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    z-index: 1000;
}

/* Fade-in animation */
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

/* On small screens */
@media (max-width: 768px) {
    h1 {
        font-size: 2rem;
    }

    .booking-details {
        padding: 15px;
    }

    button, .button {
        font-size: 0.9rem;
    }
}
</style>
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
    <script>
        // Show success message for 4 seconds
        window.onload = function() {
            const successMessage = document.getElementById('successMessage');
            successMessage.style.display = 'block';
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 4000);
        };
    </script>
</body>
</html>
