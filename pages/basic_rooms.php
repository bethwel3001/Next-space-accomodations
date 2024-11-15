<!-- pages/basic_rooms.php -->
<?php
session_start();
include('../config/database.php');

$category = 'basic';
$stmt = $conn->prepare("SELECT room_number, name, category, price FROM rooms WHERE category = ?");
// $stmt->execute([$category]);

$rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<link rel="stylesheet" href="../assets/css/room_styles.css">

<!-- Navbar -->
<div class="navbar">
    <a href="../index.php" class="logo">HotelBook - Basic Rooms</a>
    <ul>
        <li><a href="../home.php">Home</a></li>
        <li><a href="../about.php">About</a></li>
        <li><a href="../services.php">Services</a></li>
        <li><a href="../contact.php">Contact</a></li>
    </ul>
    <div class="profile-dropdown">
    <button id="profileDropdownButton" class="profile-btn">👤</button>
    <div id="profileMenu" class="profile-menu">
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest'); ?></p>
        <hr>
        <a href="../pages/profile.php">View Details</a>
        <a href="../actions/logout.php">Logout</a>
    </div>
</div>
</div>

<!-- Room Cards -->
<section class="container">
    <h2>Basic Rooms</h2>
    <div class="room-list">
    <?php if (count($rooms) > 0): ?>
        <?php foreach ($rooms as $room): ?>
            <div class="room-card">
                <img src="<?php echo htmlspecialchars($room['image_url']); ?>" alt="Room Image">
                <div class="room-card-content">
                    <h3><?php echo htmlspecialchars($room['name']); ?></h3>
                    <p>Price: $<?php echo htmlspecialchars($room['price']); ?></p>
                    <p><?php echo htmlspecialchars($room['features']); ?></p>
                    <button class="book-btn">Book Now</button>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No rooms available at this time.</p>
    <?php endif; ?>
</div>
</section>

<!-- Footer -->
<div class="footer">
    <ul class="footer-links">
        <li><a href="#top">Back to Top</a></li>
        <li><a href="https://facebook.com">Facebook</a></li>
        <li><a href="tel:+1234567890">Phone: +1234567890</a></li>
    </ul>
    <p>&copy; 2024 HotelBook</p>
</div>
<script>document.addEventListener('DOMContentLoaded', () => {
    const profileButton = document.getElementById('profileDropdownButton');
    const profileMenu = document.getElementById('profileMenu');

    profileButton.addEventListener('click', () => {
        profileMenu.classList.toggle('show');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (event) => {
        if (!profileButton.contains(event.target) && !profileMenu.contains(event.target)) {
            profileMenu.classList.remove('show');
        }
    });
});
</script>
<?php 
// include('../includes/footer.php'); ?>
