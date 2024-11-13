// Function to open the modal
function openModal() {
    document.getElementById("loginModal").style.display = "block";
    document.getElementById("home").classList.add("blur-content"); // Apply blur to specific content
}

// Function to close the modal
function closeModal() {
    document.getElementById("loginModal").style.display = "none";
    document.getElementById("home").classList.remove("blur-content"); // Remove blur from content
}

// Function to switch to the signup form
function switchToSignup() {
    document.getElementById("login-form").style.display = "none";
    document.getElementById("signup-form").style.display = "block";
}

// Function to switch to the login form
function switchToLogin() {
    document.getElementById("signup-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
}

// Close modal if clicked outside modal content
window.onclick = function(event) {
    var modal = document.getElementById("loginModal");
    if (event.target === modal) {
        closeModal();
    }
}
