$(document).ready(function() {
    $('.profile img').click(function() {
        window.location.href = 'profile.blade.php';
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const cancelButton = document.getElementById("cancelButton");

    if (cancelButton) {
        cancelButton.addEventListener("click", function () {
            // Redirect to home.blade.php
            window.location.href = "home";
        });
    }
});

