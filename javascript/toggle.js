// Update the toggleMenu function
function toggleMenu() {
    var navbar = document.querySelector('.n-bar');
    var close = document.querySelector('.close-menu');
    navbar.classList.toggle('show');
    close.classList.toggle('show');

}

// Add the closeMenu function
function closeMenu() {
    var navbar = document.querySelector('.n-bar');
    var close = document.querySelector('.close-menu');
    navbar.classList.remove('show');
    close.classList.remove('show'); // Remove 'show' class from close button as well
}

// Add an event listener to close the menu when clicking outside or pressing the close button
document.addEventListener('click', function (event) {
    var navbar = document.querySelector('.navbar');
    var toggleButton = document.querySelector('.mobile-toggle');

    if (event.target !== navbar && event.target !== toggleButton && !navbar.contains(event.target)) {
        closeMenu(); // Call closeMenu function instead of directly removing 'show' class
    }
});


// Active Menu

document.addEventListener('DOMContentLoaded', function () {
    // Get the current page filename
    var currentPage = window.location.pathname.split('/').pop();

    // Remove the ".php" extension if present
    currentPage = currentPage.replace('.php', '');

    // Find the corresponding navigation item and add the "active" class
    var activeNavItem = document.getElementById(currentPage);
    if (activeNavItem) {
        activeNavItem.classList.add('active');
    }
});