<?php
// Sample PHP script to handle different actions (you can extend this part as needed)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Set body font and background */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 15px;
            color: white;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
        }

        header nav {
            flex: 1;
            text-align: center;
        }

        header nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        header nav ul li {
            margin: 0 20px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }

        header nav ul li a:hover {
            color: #ff6347;
        }

        header .user-icon {
            font-size: 24px;
        }

        /* Room Cards */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 30px;
            padding: 20px;
            margin-top: 20px;
        }

        .room-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 23%;
            transition: transform 0.3s;
            overflow: hidden;
            text-align: center;
        }

        .room-card:hover {
            transform: scale(1.05);
        }

        .room-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .room-card-content {
            padding: 15px;
        }

        .room-card .title {
            font-size: 20px;
            font-weight: bold;
            margin: 10px 0;
        }

        .room-card .price {
            font-size: 18px;
            color: #ff6347;
            margin: 10px 0;
        }

        .room-card .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .room-card .btn {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .room-card .btn-primary {
            background-color: #4CAF50;
            color: white;
        }

        .room-card .btn-primary:hover {
            background-color: #45a049;
        }

        .room-card .btn-secondary {
            background-color: #2196F3;
            color: white;
        }

        .room-card .btn-secondary:hover {
            background-color: #0b7dda;
        }

        /* Footer Styles */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            position: relative;
            width: 100%;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .room-card {
                width: 45%;
            }
        }

        @media (max-width: 480px) {
            .room-card {
                width: 100%;
            }

            header nav ul {
                flex-direction: column;
            }

            header nav ul li {
                margin: 10px 0;
            }
        }

    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="logo">Hotel Logo</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Rooms</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="user-icon">
            <i class="fas fa-user-circle"></i>
        </div>
    </header>

    <!-- Room Cards Section -->
    <div class="card-container">
        <!-- Room Card 1 -->
        <div class="room-card">
            <img src="https://via.placeholder.com/400x300" alt="Room Image">
            <div class="room-card-content">
                <div class="title">Premium</div>
                <div class="price">$170</div>
                <div class="button-container">
                    <button class="btn btn-primary" onclick="window.location.href='page1.php'">Available</button>
                    <button class="btn btn-secondary" onclick="window.location.href='page2.php'">Book Now</button>
                </div>
            </div>
        </div>

        <!-- Room Card 2 -->
        <div class="room-card">
            <img src="https://via.placeholder.com/400x300" alt="Room Image">
            <div class="room-card-content">
                <div class="title">Deluxe</div>
                <div class="price">$250</div>
                <div class="button-container">
                    <button class="btn btn-primary" onclick="window.location.href='page3.php'">Available</button>
                    <button class="btn btn-secondary" onclick="window.location.href='page4.php'">Book Now</button>
                </div>
            </div>
        </div>

        <!-- Room Card 3 -->
        <div class="room-card">
            <img src="https://via.placeholder.com/400x300" alt="Room Image">
            <div class="room-card-content">
                <div class="title">Luxury</div>
                <div class="price">$500</div>
                <div class="button-container">
                    <button class="btn btn-primary" onclick="window.location.href='page5.php'">Available</button>
                    <button class="btn btn-secondary" onclick="window.location.href='page6.php'">Book Now</button>
                </div>
            </div>
        </div>

        <!-- Room Card 4 -->
        <div class="room-card">
            <img src="https://via.placeholder.com/400x300" alt="Room Image">
            <div class="room-card-content">
                <div class="title">Standard</div>
                <div class="price">$120</div>
                <div class="button-container">
                    <button class="btn btn-primary" onclick="window.location.href='page7.php'">Available</button>
                    <button class="btn btn-secondary" onclick="window.location.href='page8.php'">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Hotel Booking. All rights reserved.
    </footer>

    <!-- Internal JavaScript -->
    <script>
        // JavaScript to add more functionality if needed
    </script>

</body>

</html>
