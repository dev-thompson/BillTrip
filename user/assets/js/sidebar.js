
const sidebarItem = document.querySelectorAll('.sidebar-items');

  sidebarItem.forEach(item => {
    item.addEventListener('click', () => {
      // Remove active class from all items
      sidebarItem.forEach(i => i.classList.remove('active'));
      // Add active class to clicked item
      item.classList.add('active');
    });
});

