<?php
session_start();
require_once __DIR__ . '/../config.php';
if (empty($_SESSION['auth'])) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');
    $author = 'admin';

    if ($title && $content) {
        $stmt = $pdo->prepare("INSERT INTO posts (title, content, author) VALUES (?, ?, ?)");
        $stmt->execute([$title, $content, $author]);
        header('Location: posts.php');
        exit;
    } else {
        $error = 'All fields are required.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Add Post</title></head>
<body>
  <h1>Add New Post</h1>
  <?php if (!empty($error)): ?><p style="color:red"><?= htmlspecialchars($error) ?></p><?php endif; ?>
  <form method="post">
    <p><input type="text" name="title" placeholder="Title" style="width:100%" required></p>
    <p><textarea name="content" placeholder="Content" rows="10" style="width:100%" required></textarea></p>
    <button type="submit">Publish</button>
  </form>
</body>
</html>
