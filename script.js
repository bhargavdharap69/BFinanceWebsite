// Function to toggle dark mode
function toggleDarkMode() {
  // Get the current theme from localStorage
  let theme = localStorage.getItem('theme');

  // Check if the theme is set to dark
  if (theme === 'dark') {
    // Switch to light mode
    document.body.classList.remove('dark-mode');
    localStorage.setItem('theme', 'light');
  } else {
    // Switch to dark mode
    document.body.classList.add('dark-mode');
    localStorage.setItem('theme', 'dark');
  }
}

// Check the saved theme in localStorage on page load
window.onload = function() {
  let theme = localStorage.getItem('theme');
  
  // Apply dark mode if saved in localStorage
  if (theme === 'dark') {
    document.body.classList.add('dark-mode');
  } else {
    document.body.classList.remove('dark-mode');
  }
}