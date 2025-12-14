// Function to highlight the active navigation link
function highlightCurrentPage() {
    // Get all links in the navigation
    const navLinks = document.querySelectorAll('nav a');
    
    // Get the current URL path
    const currentPath = window.location.pathname.split('/').pop();

    // Loop through each link
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active'); // Add an 'active' class to the current link
        } else {
            link.classList.remove('active'); // Remove the 'active' class from other links
        }
    });
}



// Call the function when the window loads
window.onload = highlightCurrentPage;
