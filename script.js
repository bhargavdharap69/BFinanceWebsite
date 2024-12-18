// Search articles based on title
function searchArticles() {
  const searchQuery = document.getElementById('searchBox').value.toLowerCase();
  const articles = document.querySelectorAll('.article-box');

  articles.forEach(article => {
      const title = article.getAttribute('data-title').toLowerCase();
      if (title.includes(searchQuery)) {
          article.style.display = 'block';
      } else {
          article.style.display = 'none';
      }
  });
}

// Toggle the visibility of the Sort By menu
function toggleSortMenu() {
  const sortMenu = document.getElementById('sortMenu');
  sortMenu.style.display = sortMenu.style.display === 'block' ? 'none' : 'block';
}

// Sort articles by date (newest or oldest)
function sortArticles(order) {
  const articlesContainer = document.getElementById('articlesContainer');
  const articles = Array.from(articlesContainer.getElementsByClassName('article-box'));

  // Sort articles based on the data-date attribute
  articles.sort((a, b) => {
      const dateA = new Date(a.getAttribute('data-date'));
      const dateB = new Date(b.getAttribute('data-date'));
      return order === 'newest' ? dateB - dateA : dateA - dateB;
  });

  // Reorder the articles
  articles.forEach(article => {
      articlesContainer.appendChild(article);
  });

  // Hide the sort menu after selection
  document.getElementById('sortMenu').style.display = 'none';
}
