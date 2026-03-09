<?php
// require_once __DIR__ . '/../config.php';

// $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
// $posts = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blog</title>
</head>
<body>
  <h1>Blog</h1>
  <?php foreach ($posts as $post): ?> 
    <article>
      <h2><?= htmlspecialchars($post['title']) ?></h2>
      <p><small><?= htmlspecialchars($post['created_at']) ?></small></p>
      <div><?= nl2br(htmlspecialchars($post['content'])) ?></div>
    </article>
  <?php endforeach ?>
</body>
</html>
