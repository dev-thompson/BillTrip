// Function to animate the counter
function animateCounter(id, target, duration) {
    let current = 0;
    const intervalTime = 50;
    const steps = duration / intervalTime;
    const step = target / steps;

    const interval = setInterval(() => {
        current += step;
        if (current >= target) {
            current = target;
            clearInterval(interval);
        }
        document.getElementById(id).textContent = Math.floor(current);
    }, intervalTime);
}

// Observer callback function
let countersStarted = false; // To prevent triggering multiple times

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !countersStarted) {
            countersStarted = true;

            // Start counting
            animateCounter('counter1', 50, 2000);
            animateCounter('counter2', 15, 2000);
            animateCounter('counter3', 6, 2000);

            observer.disconnect(); // Stop observing once triggered
        }
    });
}, {
    threshold: 0.6 // Trigger when 60% of the element is visible
});

// Observe the container
const countersSection = document.getElementById('counters');
observer.observe(countersSection);