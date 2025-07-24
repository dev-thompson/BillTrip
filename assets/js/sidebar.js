const sidebar = document.getElementById('sidebar');
const bars = document.querySelectorAll('.bars');

bars.forEach(bar => {
    bar.addEventListener('click', () => {
        sidebar.classList.toggle('show');
        document.body.classList.toggle('no-scroll');

        // Optional: Toggle "show" class individually on each bar
        bar.classList.toggle('show');
    });
});
