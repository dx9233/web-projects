<?php
require_once __DIR__ . '../config.php';

$stmt = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
$projects = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Portfolio</title></head>
<body>
  <h1>Projects</h1>
  <ul>
    <?php foreach ($projects as $p): ?>
      <li>
        <strong><?= htmlspecialchars($p['title']) ?></strong><br>
        <?= htmlspecialchars($p['description']) ?><br>
        <a href="<?= htmlspecialchars($p['link']) ?>">View</a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
