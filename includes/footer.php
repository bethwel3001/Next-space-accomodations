<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer demo</title>
</head>
<body>
    <style>
    .footer {
    border-radius: 35px ;
    background-color: #28a745;
    border: 2px solid yellow;
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.footer-links a,
.back-to-top a {
    background-color: green;
    border-radius: 10px ;
    color: #aaa;
    text-decoration: none;
    margin: 0 10px;
    transition: color 0.3s;
}

.footer-links a:hover,
.back-to-top a:hover {
    color: #fff;
}

.social-icons a {
    color: #aaa;
    margin: 0 10px;
    font-size: 1.5rem;
    transition: color 0.3s;
}

.social-icons a:hover {
    color: #28a745;
}
</style>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="footer-contact">
            <p>Call us: (123) 456-7890</p>
            <p>Email: info@hotelbook.com</p>
            <p>Address: 1234 Hotel Lane, City, Country</p>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="back-to-top">
        <a href="#top">Back to Top</a>
    </div>
</footer>
  <script>document.querySelector('.back-to-top a').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>
</body>
</html>