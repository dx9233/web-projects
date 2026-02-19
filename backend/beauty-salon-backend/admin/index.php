<?php
session_start();

// ====== LOGIN CONFIG ======
$USER = 'admin';
$PASS_HASH = '$2y$12$HQEB8FMHLbLFMJ8FBHMg2OtilJ3rMrg3vmX2GM.sHwLBuNtfWBju2'; // password: 1234

// ====== FORM HANDLER ======
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
  $login = trim($_POST['login'] ?? ''); 
  $password = $_POST['password'] ?? ''; 
  if ($login === $USER && password_verify($password, $PASS_HASH)) { 
    $_SESSION['auth'] = true; 
    // important: we do not output anything before the redirect! 
    header('Location: admin/dashboard.php'); 
    exit; 
  } else { 
$error = 'Incorrect login or password.'; 
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Enter Admin</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <style>
    body { font-family: system-ui, sans-serif; background: #f7f7f7; }
    main {
      max-width: 400px;
      margin: 100px auto;
      background: #fff;
      padding: 2em;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    input {
      display: block;
      width: 100%;
      margin-bottom: 1em;
      padding: 0.7em;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1em;
    }
    button {
      background: #111;
      color: #fff;
      border: none;
      padding: 0.8em 1.2em;
      border-radius: 6px;
      cursor: pointer;
    }
    button:hover { background: #333; }
    h1 { text-align: center; margin-bottom: 1.5em; }
    p.error { color: red; text-align: center; }
  </style>
</head>
<body>
  <main>
    <h1>Enter</h1>

    <?php if (!empty($error)): ?>
      <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="post">
      <input type="text" name="login" placeholder="Login" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Enter</button>
    </form>
  </main>
</body>
</html>
