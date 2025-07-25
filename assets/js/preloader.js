document.addEventListener("DOMContentLoaded", function() {
    setTimeout(() => {
        const preloader = document.getElementById('preloader');
        const content = document.querySelector('.main-content');

        // Hide the preloader and display content
        preloader.style.display = 'none';
        content.style.display = 'block';

        // Initialize AOS after preloader disappears
        AOS.init();
    }, 1500);
});