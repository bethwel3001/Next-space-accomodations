<?php
// actions/submit_contact.php
session_start();
// Normally, you'd send an email or store the message in the database.
// For simplicity, we'll just set a success message.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // You can sanitize and validate inputs here
    $_SESSION['success'] = "Thank you for your message. We'll get back to you shortly.";
    header("Location: ../index.php#contact");
} else {
    header("Location: ../index.php#contact");
}
?>
