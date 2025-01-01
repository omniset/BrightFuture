// Function to toggle the menu
function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('open'); // Add or remove the 'open' class to show/hide the menu
}

// Function to go back to the previous page
function goBack() {
    window.history.back();
}

function goToHomePage() {
    window.location.href = '../index.php';  // Navigate to index.php
}