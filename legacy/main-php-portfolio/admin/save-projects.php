<?php
session_start();
if (empty($_SESSION['auth'])) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'] ?? '';
    $json = json_decode($content, true);

    if (json_last_error() === JSON_ERROR_NONE) {
        file_put_contents(__DIR__ . '/../data/projects.json', json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        header('Location: dashboard.php?saved=1');
        exit;
    } else {
        die("Error: JSON is invalid. Check the format.");
    }
}
