<!-- pages/receipt.php -->
<?php
session_start();
include('../config/database.php');

if (!isset($_GET['booking_id'])) {
    header("Location: ../index.php#services");
    exit();
}

$booking_id = $conn->real_escape_string($_GET['booking_id']);

// Fetch booking details
$sql = "SELECT b.booking_id, b.booking_date, b.amount, r.room_number, r.category, u.name, u.email, u.phone, u.address
        FROM bookings b
        JOIN rooms r ON b.room_id = r.room_id
        JOIN users u ON b.user_id = u.user_id
        WHERE b.booking_id='$booking_id'";
$result = $conn->query($sql);

if ($result->num_rows != 1) {
    header("Location: ../index.php#services");
    exit();
}

$booking = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Receipt</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-pApgG6hcl/uSgXS0X3z8OyVZGR12FAd7ljF62QeC9CUpk2k3CvIgpCgSnghKFaXxIhWxdFeYHMBVG+cYoXU1jA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Additional styles for receipt */
        .receipt-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 2rem;
            border: 1px solid #ccc;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .receipt-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #ff6347;
        }

        .receipt-details {
            margin-bottom: 1rem;
        }

        .receipt-details p {
            margin: 0.5rem 0;
        }

        .print-button {
            display: block;
            width: 100%;
            padding: 0.8rem;
            background: #ff6347;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            transition: background 0.3s;
        }

        .print-button:hover {
            background: #ff4500;
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <h2>Booking Receipt</h2>
        <div class="receipt-details">
            <p><strong>Company Name:</strong> [Hotel Name]</p>
            <p><strong>Booking ID:</strong> <?php echo $booking['booking_id']; ?></p>
            <p><strong>Room Number:</strong> <?php echo $booking['room_number']; ?> (<?php echo ucfirst($booking['category']); ?>)</p>
            <p><strong>Guest Name:</strong> <?php echo $booking['name']; ?></p>
            <p><strong>Email:</strong> <?php echo $booking['email']; ?></p>
            <p><strong>Phone:</strong> <?php echo $booking['phone']; ?></p>
            <p><strong>Address:</strong> <?php echo $booking['address']; ?></p>
            <p><strong>Booking Date:</strong> <?php echo $booking['booking_date']; ?></p>
            <p><strong>Amount:</strong> $<?php echo number_format($booking['amount'], 2); ?></p>
        </div>
        <button class="print-button" onclick="window.print()">Print Receipt</button>
    </div>
</body>
</html>
