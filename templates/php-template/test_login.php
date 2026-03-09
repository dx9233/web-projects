<?php
session_start();

// === TEMP: hardcoded login for debugging ===
$USER = 'admin';
$PASS_HASH = password_hash('1234', PASSWORD_DEFAULT); // generate fresh hash each request

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login'] ?? '');
    $password = $_POST['password'] ?? '';

    $result = [
        'login'   => $login,
        'password'=> $password,
        'hash'    => $PASS_HASH,
        'verify'  => password_verify($password, $PASS_HASH)
    ];

    header('Content-Type: text/plain; charset=utf-8');
    echo print_r($result, true);
    exit;
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Test Login</title></head>
<body>
  <form method="post">
    <input name="login" placeholder="login" required>
    <input name="password" placeholder="password" type="password" required>
    <button>Check</button>
  </form>
</body>
</html>
