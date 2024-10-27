document.addEventListener('DOMContentLoaded', () => {
  const postContainer = document.getElementById('blog-posts');

  // Fetch all posts
  fetch('/posts')
      .then(response => response.json())
      .then(posts => {
          postContainer.innerHTML = posts.map(post => `
              <div class="post">
                  <h3>${post.title}</h3>
                  <p>${post.content}</p>
                  <button onclick="editPost(${post.id})">Edit</button>
                  <button onclick="deletePost(${post.id})">Delete</button>
              </div>
          `).join('');
      });

  // Create/Edit Post logic
  // Similarly, implement fetch calls for POST, PUT, DELETE operations.
});
