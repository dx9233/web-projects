<?php
session_start();
require_once __DIR__ . '/../config.php';

if (empty($_SESSION['auth'])) {
    header('Location: index.php');
    exit;
}

$stmt = $pdo->query("SELECT * FROM posts ORDER BY id DESC");
$posts = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Blog</title>
</head>
<body>
  <h1>Blog Posts</h1>
  <a href="add_post.php">+ Add New Post</a>
  <table border="1" cellpadding="8" cellspacing="0">
    <tr><th>ID</th><th>Title</th><th>Author</th><th>Date</th><th>Actions</th></tr>
    <?php foreach ($posts as $p): ?>
      <tr>
        <td><?= $p['id'] ?></td>
        <td><?= htmlspecialchars($p['title']) ?></td>
        <td><?= htmlspecialchars($p['author']) ?></td>
        <td><?= htmlspecialchars($p['created_at']) ?></td>
        <td>
          <a href="edit_post.php?id=<?= $p['id'] ?>">Edit</a> |
          <a href="delete_post.php?id=<?= $p['id'] ?>" onclick="return confirm('Delete this post?')">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
