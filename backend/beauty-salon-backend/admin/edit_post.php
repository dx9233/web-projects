<?php
session_start();
require_once __DIR__ . '/../config.php';
if (empty($_SESSION['auth'])) {
    header('Location: index.php');
    exit;
}

$id = (int)($_GET['id'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();

if (!$post) {
    exit('Post not found');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $content = trim($_POST['content'] ?? '');
    if ($title && $content) {
        $stmt = $pdo->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ?");
        $stmt->execute([$title, $content, $id]);
        header('Location: posts.php');
        exit;
    } else {
        $error = 'All fields are required.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Edit Post</title></head>
<body>
  <h1>Edit Post</h1>
  <?php if (!empty($error)): ?><p style="color:red"><?= htmlspecialchars($error) ?></p><?php endif; ?>
  <form method="post">
    <p><input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>" style="width:100%" required></p>
    <p><textarea name="content" rows="10" style="width:100%" required><?= htmlspecialchars($post['content']) ?></textarea></p>
    <button type="submit">Save Changes</button>
  </form>
</body>
</html>
