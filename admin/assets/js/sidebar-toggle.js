
// ================================================================= mobile bar section 
const sidebar = document.getElementById('sidebars');
const bars = document.getElementById('bars');

bars.addEventListener('click', () => {
    sidebar.classList.toggle('show');
    bars.classList.toggle('show');
    document.body.classList.toggle('no-scroll');
});

// Close sidebar when clicking outside of it
document.addEventListener('click', (event) => {
    const isClickInsideSidebar = sidebar.contains(event.target);
    const isClickOnBars = bars.contains(event.target);

    if (!isClickInsideSidebar && !isClickOnBars && sidebar.classList.contains('show')) {
        sidebar.classList.remove('show');
        bars.classList.remove('show');
        document.body.classList.remove('no-scroll');
    }
});