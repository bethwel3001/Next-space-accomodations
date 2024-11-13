// Automatic image slider with smooth fade
let slideIndex = 0;
const slides = document.querySelectorAll(".slide");

function showSlides() {
    slides.forEach(slide => slide.classList.remove("active"));
    slideIndex = (slideIndex + 1) % slides.length;
    slides[slideIndex].classList.add("active");
}

setInterval(showSlides, 5000);

// Scroll Fade-In Animation
const elementsToAnimate = document.querySelectorAll(".about, .room-box, .contact");

const animateOnScroll = () => {
    elementsToAnimate.forEach(element => {
        const position = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        if (position < windowHeight - 50) {
            element.classList.add("fade-in");
        }
    });
};

window.addEventListener("scroll", animateOnScroll);
window.addEventListener("load", animateOnScroll); // Initial load
// Smooth Scrolling