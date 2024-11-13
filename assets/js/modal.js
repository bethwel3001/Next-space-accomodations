// Open the modal
document.getElementById("user-icon").addEventListener("click", function() {
    document.getElementById("login-modal").style.display = "flex";
});

// Close the modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById("login-modal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
