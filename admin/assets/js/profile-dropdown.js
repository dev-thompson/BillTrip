// =============================== profile toggle section

const profile = document.getElementById('profile-pic');
const profileItem = document.getElementById('profile-item');

// Toggle dropdown when clicking on profile
profile.addEventListener('click', (event) => {
    event.stopPropagation(); // Prevents the event from bubbling to the document
    profileItem.style.display = profileItem.style.display === "block" ? "none" : "block";
});

// Hide dropdown when clicking outside of it
document.addEventListener('click', (event) => {
    // Check if the click is not on the dropdown or the profile pic
    if (!profile.contains(event.target) && !profileItem.contains(event.target)) {
        profileItem.style.display = "none";
    }
});