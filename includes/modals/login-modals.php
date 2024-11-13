<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup to NextSpace</title>
    
    <!-- Link the modals.css -->
    <link rel="stylesheet" href="../assets/css/modal.css"> <!-- Adjust path if needed -->

</head>
<body>
    <!-- Modal for Login/Signup -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <h2>Sign In / Sign Up</h2>
            
            <!-- Login Form -->
            <div id="login-form" class="form-container">
                <h3>Login</h3>
                <form action="actions/login.php" method="POST">
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
                <p>Don't have an account? <a href="#" onclick="switchToSignup()">Sign Up</a></p>
            </div>

            <!-- Signup Form -->
            <div id="signup-form" class="form-container" style="display: none;">
                <h3>Sign Up</h3>
                <form action="actions/signup.php" method="POST">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <!-- phone -->
                     <input type="number" name="phone" placeholder="phone" required>
                     <!-- address -->
                      <input type="text" name="address" placeholder="address" required>
                    <button type="submit" name="signup">Sign Up</button>
                </form>
                <p>Already have an account? <a href="#" onclick="switchToLogin()">Login</a></p>
            </div>
        </div>
    </div>

    <!-- Link JavaScript file -->
<script src="../assets/js/modals.js"></script>

</body>
</html>
