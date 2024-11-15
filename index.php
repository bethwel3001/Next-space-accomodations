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
            <p>Your luxurious stay awaits</p><br>
            <a href="#services" class="cta-button">Book with us ></a>
        </div>
        <div class="slide-container">
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section about">
        <h2>About next-space ></h2>
        <p>At Next-space <sup>TM</sup> accomodations, we strive to provide exceptional hospitality and a luxurious experience for our guests. Our team is dedicated to making your stay unforgettable, with world-class facilities and personalized service.</p>
    </section>

    <!-- Services Section -->
    <section id="services" class="section services">
        <h2>Our Rooms and packages ></h2>
        <div class="room-categories">
            <div class="room-box">
                <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YmFzaWMlMjBhcGFydG1lbnR8ZW58MHx8MHx8fDA%3D" alt="Basic Room">
                <h3>Basic</h3>
                <p>Comfortable and affordable rooms for a pleasant stay.</p>
                <a href="pages/basic_rooms.php" class="view-button">View</a>
            </div>
            <div class="room-box">
                <img src="https://plus.unsplash.com/premium_photo-1663089331117-b4176fef4c9a?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHJlbWl1bSUyMGFwYXJ0bWVudHxlbnwwfHwwfHx8MA%3D%3D" alt="Premium Room">
                <h3>Premium</h3>
                <p>Spacious rooms with additional amenities for a better experience.</p>
                <a href="pages/premium_rooms.php" class="view-button">View</a>
            </div>
            <div class="room-box">
                <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dmlwJTIwYXBhcnRtZW50fGVufDB8fDB8fHww" alt="VIP Room">
                <h3>VIP</h3>
                <p>Exclusive rooms with top-notch facilities and services.</p>
                <a href="pages/vip_rooms.php" class="view-button">View</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact">
        <h2>Contact Next-space ></h2>
        <form action="actions/submit_contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <br><br>
        <h4>Be sure to catch up with our deals and offers through our media channels below!</h4><br>
        <br>
        <div class="social-icons">   
<abbr title="Facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></abbr>
<abbr title="Twitter/X"><a href="#"><i class="fab fa-twitter"></i></a></abbr>       
<abbr title="Instagram"><a href="#"><i class="fab fa-instagram"></i></a></abbr>
<abbr title="YouTube"><a href="#"><i class="fab fa-youtube"></i></a></abbr>
<abbr title="LinkedIn"><a href="#"><i class="fab fa-linkedin-in"></i></a></abbr>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include('includes/footer.php'); ?>
    <script src="assets/js/slider.js"></script>
</body>
</html>

