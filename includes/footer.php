<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
/* Footer Styles */
.footer {
    background: rgba(0, 64, 128, 0.8); /* Transparent footer */
    color: white;
    padding: 10px 20px;
    text-align: left;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Spread items evenly */
    font-size: 14px;
    animation: fadeIn 2s ease-in-out;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
}

.footer .column {
    flex: 1 1 calc(33.33% - 10px); /* Flex for 3 columns */
    margin: 5px;
}

.footer .column h4 {
    font-size: 16px;
    margin-bottom: 10px;
    text-transform: uppercase;
    color: #b0e0ff;
}

.footer .column a {
    color: white;
    text-decoration: none;
    margin-bottom: 8px;
    display: block;
    transition: color 0.3s, transform 0.3s;
}

.footer .column a:hover {
    color: #b0e0ff;
    transform: scale(1.1);
}

.footer p, .footer a {
    margin: 0;
    line-height: 1.6;
}</style>
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
    <div class="social-icons">   
<abbr title="Facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></abbr>
<abbr title="Twitter/X"><a href="#"><i class="fab fa-twitter"></i></a></abbr>       
<abbr title="Instagram"><a href="#"><i class="fab fa-instagram"></i></a></abbr>
<abbr title="YouTube"><a href="#"><i class="fab fa-youtube"></i></a></abbr>
<abbr title="LinkedIn"><a href="#"><i class="fab fa-linkedin-in"></i></a></abbr>
        </div>
        <h4>Contact</h4>
        <p><strong>Phone:</strong> +123 456 789</p>
        <p><strong>Email:</strong> info@hotelbook.com</p>
        <p><a href="#">Back to Top</a></p>
    </div>
</footer>
</body>
</html>