// assets/js/scripts.js

// Navbar Toggle Function
function toggleNavbar() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}


document.getElementById("user-icon").addEventListener("click", function() {
    const popup = document.getElementById("login-popup");
    popup.style.display = popup.style.display === "none" ? "block" : "none";
});

// Close popup when clicking outside
window.addEventListener("click", function(event) {
    const popup = document.getElementById("login-popup");
    if (event.target !== popup && !popup.contains(event.target) && event.target.id !== "user-icon") {
        popup.style.display = "none";
    }
});

// Slideshow for Hero Images
let currentSlide = 0;
const slides = document.querySelectorAll('.hero-slides img');
const totalSlides = slides.length;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) {
            slide.classList.add('active');
        }
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
}

setInterval(nextSlide, 5000); // Change slide every 5 seconds


// assets/js/scripts.js

// ... existing scripts ...

// Automatically hide alerts after 5 seconds
window.addEventListener('load', () => {
    setTimeout(() => {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            alert.style.display = 'none';
        });
    }, 5000);
});

// Test script
console.log("JavaScript is connected!");
// ... existing scripts ...
// Toggle login modal
document.getElementById("user-icon").addEventListener("click", function() {
    const popup = document.getElementById("login-popup");
    popup.style.display = popup.style.display === "none" ? "block" : "none";
});

// Close popup when clicking outside
window.addEventListener("click", function(event) {
    const popup = document.getElementById("login-popup");
    if (event.target !== popup && !popup.contains(event.target) && event.target.id !== "user-icon") {
        popup.style.display = "none";
    }
});
// ... existing scripts ...