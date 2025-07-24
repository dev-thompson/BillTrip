window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 80) {  // Adjust the scroll threshold
        navbar.classList.add('show');
    } else {
        navbar.classList.remove('show');
    }
});
