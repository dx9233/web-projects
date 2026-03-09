<?php
$config = require 'config.php';
require 'includes/functions.php';

$page = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($page === '') $page = 'home';

// Check if the page exists
$pagePath = __DIR__ . "/pages/$page.php";
if (!file_exists($pagePath)) {
    http_response_code(404);
    $pagePath = __DIR__ . "/pages/404.php";
}

include 'includes/header.php';
include $pagePath;
include 'includes/footer.php';
