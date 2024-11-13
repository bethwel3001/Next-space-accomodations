<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking System</title>
    <!-- Link to general CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Link to Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Link to header-specific CSS -->
    <link rel="stylesheet" href="assets/css/header.css">
    <!-- Link to modal-specific CSS -->
    <link rel="stylesheet" href="assets/css/modal.css">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">Hotel Booking</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="modals/login-modals.php" id="user-icon"><i class="fas fa-user"></i></a></li>
            </ul>
        </nav>
    </header>
    <!-- Include Login Modal -->
    <?php include 'includes/modals/login-modals.php'; ?>

    <!-- Link to header-specific JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/modal.js"></script>
</body>
</html>
