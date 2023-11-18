const sideBarToggle = document.querySelector('#sidebar-toggle');
const sidebar = document.querySelector('#sidebar');

// Check if there is a saved state in local storage
const isSidebarCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';

// Set initial state based on local storage or default
if (isSidebarCollapsed) {
    sidebar.classList.add('collapsed');
}

// Toggle sidebar and update local storage on click
sideBarToggle.addEventListener('click', function(){
    sidebar.classList.toggle('collapsed');
    
    // Update local storage with the current state
    localStorage.setItem('sidebarCollapsed', sidebar.classList.contains('collapsed'));
});
