<?php
session_start();
require_once __DIR__ . '/../config.php';
if (empty($_SESSION['auth'])) {
    header('Location: index.php');
    exit;
}

$id = (int)($_GET['id'] ?? 0);
$stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
$stmt->execute([$id]);

header('Location: posts.php');
exit;
