<!-- index.php -->
<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking System</title>
    <!-- Link to CSS and Font Awesome -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
      <!-- Home Section -->
      <section id="home" class="section hero">
        <div class="hero-overlay">
            <h1>Welcome to <b>Next-space <sup>TM</sup></b> accomodations</h1>
            <p>Your luxurious stay awaits</p>
            <a href="#services" class="cta-button">Book with us ></a>
        </div>
        <div class="slide-container">
            <img src="assets/images/slide1.jpg" alt="Hotel Slide 1" class="active" class="slide">
            <img src="assets/images/slide2.jpg" alt="Hotel Slide 2" class="slide">
            <img src="assets/images/slide3.jpg" alt="Hotel Slide 3" class="slide">
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section about">
        <h2>About Us</h2>
        <p>At Next-space <sup>TM</sup> accomodations, we strive to provide exceptional hospitality and a luxurious experience for our guests. Our team is dedicated to making your stay unforgettable, with world-class facilities and personalized service.</p>
    </section>

    <!-- Services Section -->
    <section id="services" class="section services">
        <h2>Our Rooms</h2>
        <div class="room-categories">
            <div class="room-box">
                <img src="assets/images/room_basic.jpg" alt="Basic Room">
                <h3>Basic</h3>
                <p>Comfortable and affordable rooms for a pleasant stay.</p>
                <a href="pages/basic_rooms.php" class="view-button">View</a>
            </div>
            <div class="room-box">
                <img src="assets/images/room_premium.jpg" alt="Premium Room">
                <h3>Premium</h3>
                <p>Spacious rooms with additional amenities for a better experience.</p>
                <a href="pages/premium_rooms.php" class="view-button">View</a>
            </div>
            <div class="room-box">
                <img src="assets/images/room_vip.jpg" alt="VIP Room">
                <h3>VIP</h3>
                <p>Exclusive rooms with top-notch facilities and services.</p>
                <a href="pages/vip_rooms.php" class="view-button">View</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact">
        <h2>Contact Us</h2>
        <form action="actions/submit_contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include('includes/footer.php'); ?>
    <script src="assets/js/slider.js"></script>
</body>
</html>

