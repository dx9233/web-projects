<?php
session_start();

if (empty($_SESSION['auth'])) {
    header('Location: index.php');
    exit;
}

$projectsFile = __DIR__ . '/../data/projects.json';
$projects = json_decode(file_get_contents($projectsFile), true) ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
</head>
<body>
  <header>
    <h1>Admin Panel</h1>
    <a href="logout.php">Logout</a>
  </header>
  <main>
    <a href="posts.php">Manage Blog</a>
    <form method="post" action="save-projects.php">
      <h2>Edit Projects</h2>
      <textarea name="content" rows="10"><?= htmlspecialchars(json_encode($projects, JSON_PRETTY_PRINT)) ?></textarea>
      <button type="submit">Save</button>
    </form>
  </main>
</body>
</html>
