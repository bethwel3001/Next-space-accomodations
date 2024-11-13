<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- includes/modals/login-modal.php -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <h2>Sign In</h2>
        <div id="login-popup" class="popup" style="display: none;">
    <form action="login.php" method="POST" class="login-form">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

        <p>Don't have an account? <a href="#" onclick="switchToSignup()">Sign Up</a></p>
    </div>
</div>

<div id="signupModal" class="modal">
    <div class="modal-content">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <h2>Sign Up</h2>
        <form action="actions/signup.php" method="POST">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="signup">Sign Up</button>
        </form>
        <p>Already have an account? <a href="#" onclick="switchToLogin()">Login</a></p>
    </div>
</div>
<script src="../assets/js.scripts.js"></script>
</body>
</html>