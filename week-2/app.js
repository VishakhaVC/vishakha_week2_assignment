const express = require('express');
const bodyParser = require('body-parser');
const sqlite3 = require('sqlite3').verbose();
const app = express();

// Middleware
app.use(bodyParser.json());

// SQLite database setup
const db = new sqlite3.Database('blog.db');
db.run('CREATE TABLE IF NOT EXISTS posts (id INTEGER PRIMARY KEY, title TEXT, content TEXT)');

// CRUD Operations
// Get all posts
app.get('/posts', (req, res) => {
    db.all('SELECT * FROM posts', [], (err, rows) => {
        if (err) throw err;
        res.json(rows);
    });
});

// Create a new post
app.post('/posts', (req, res) => {
    const { title, content } = req.body;
    db.run('INSERT INTO posts (title, content) VALUES (?, ?)', [title, content], function (err) {
        if (err) throw err;
        res.json({ id: this.lastID });
    });
});

// Update a post
app.put('/posts/:id', (req, res) => {
    const { title, content } = req.body;
    db.run('UPDATE posts SET title = ?, content = ? WHERE id = ?', [title, content, req.params.id], function (err) {
        if (err) throw err;
        res.json({ changes: this.changes });
    });
});

// Delete a post
app.delete('/posts/:id', (req, res) => {
    db.run('DELETE FROM posts WHERE id = ?', [req.params.id], function (err) {
        if (err) throw err;
        res.json({ changes: this.changes });
    });
});

// Start server
app.listen(3000, () => console.log('Server running on http://localhost:3000'));
