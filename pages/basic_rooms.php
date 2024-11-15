<?php
include('../config/database.php');

// Fetch basic rooms from the database
$category = 'basic';
$stmt = $conn->prepare("SELECT room_id, features, category, price, room_number FROM rooms WHERE category = ?");
$stmt->execute([$category]);
$rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Rooms</title>
    <link rel="stylesheet" href="../assets/css/room_styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>Available Rooms</h1>
            </div>
            <nav class="nav">
                <a href="../index.php">Home</a>
                <a href="../about.php">About</a>
                <a href="../contact.php">Contact</a>
                <div class="user-menu">
                    <i class="fas fa-user-circle user-icon"></i>
                    <div class="dropdown">
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Email:</strong> john@example.com</p>
                        <p><a href="../actions/logout.php" class="logout-btn">Logout</a></p>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Success Message -->
    <div class="success-message">
        <p>You're lucky, there are rooms for you!</p>
    </div>

    <!-- Main Section -->
    <section class="rooms-section">
        <h2>Please book a room below:</h2>
        <div class="rooms-container">
            <?php if (count($rooms) > 0): ?>
                <?php foreach ($rooms as $room): ?>
                    <div class="room-card">
                        <img src="https://plus.unsplash.com/premium_photo-1664392416854-d6704df91c97?q=80&w=1323&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Room Image">
                    
                        <p>Room Number: <?php echo htmlspecialchars($room['room_number']); ?></p>
                        <p>Category: <?php echo htmlspecialchars($room['category']); ?></p>
                        <p>Price: $<?php echo htmlspecialchars($room['price']); ?></p>
                        <h3><?php echo htmlspecialchars($room['features']); ?></h3>

                        <!-- Booking Form -->
                        <form action="book_room.php" method="POST">
                            <input type="hidden" name="room_id" value="<?php echo htmlspecialchars($room['room_id']); ?>">
                            
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" required>
                            
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            
                            <button type="submit" class="book-now">Book Now</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No rooms available at the moment.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Footer -->
  <!-- Footer -->
<footer class="footer">
    <div class="column">
        <h4>Quick Links</h4>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </div>
    <div class="column">
        <h4>Connect with Us</h4>
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
        <a href="#">LinkedIn</a>
    </div>
    <div class="column">
        <h4>Contact</h4>
        <p><strong>Phone:</strong> +123 456 789</p>
        <p><strong>Email:</strong> info@hotelbook.com</p>
        <p><a href="#">Back to Top</a></p>
    </div>
</footer>


      <!-- JavaScript for Success Message -->
      <script>
        const successMessage = document.querySelector('.success-message');
        setTimeout(() => {
            successMessage.style.display = 'none';
        }, 5000); // 5 seconds

        let lastScrollTop = 0;
    const header = document.querySelector('.header');

    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            header.classList.add('hidden'); // Hide navbar
        } else {
            header.classList.remove('hidden'); // Show navbar
        }
        lastScrollTop = scrollTop;
    });
    </script>
</body>
</html>
