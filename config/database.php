<?php
// Database connection details
$host = 'localhost';          // Database host (e.g., 'localhost' or an IP address)
$dbname = 'hotel_booking'; // Your database name
$username = 'root'; // Your database username
$password = ''; // Your database password

// Try to establish a PDO connection
try {
    // Create a PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception to get detailed error messages
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully"; // Optional: for testing the connection
} catch (PDOException $e) {
    // Handle connection error
    echo "Connection failed: " . $e->getMessage();
}
?>
