<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($config['site_name']) ?></title>
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
  integrity="sha512-KNUX+UCU4pAAUq6bS2GhkgdZt1tWzqI6X7xqfWbqP8wS8aQFJjHbK1v6t+3vYxC2L5cJqYX7HpC1N8c2IY+zag=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
</head>
<body>
  <!-- HEADER -->
  <header>
    <div class="logo">
       <a href="/">
      <img src="../assets/svg/logo.svg" alt="Stylicle Logo" >
</a>
    </div>

    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Us</a></li>
      </ul>
    </nav>

    <div class="nav-right">
      <select>
        <option>EN</option>
        <option>ES</option>
      </select>
      <button class="btn-login">Login</button>
      <button class="btn-signup">Signup</button>
    </div>
  </header>
<main>

<style>
  /* ---------- NAVIGATION ---------- */
header {
  background: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 18px 60px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.logo {
  display: flex;
  align-items: center;
  gap: 10px;
}

.logo span {
  color: #9b5f74;
  font-weight: 700;
  font-size: 20px;
}

nav ul {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 28px;
}

nav ul li a {
  text-decoration: none;
  color: #333;
  font-weight: 500;
  transition: color 0.2s;
}

nav ul li a:hover {
  color: #9b5f74;
}

.nav-right {
  display: flex;
  align-items: center;
  gap: 15px;
}

.nav-right select {
  border: none;
  background: transparent;
  font-weight: 500;
  cursor: pointer;
  outline: none;
}

.btn-login,
.btn-signup {
  padding: 8px 18px;
  border-radius: 4px;
  border: 1px solid #000;
  cursor: pointer;
  font-weight: 500;
  transition: 0.2s;
}

.btn-login:hover {
  background: #eee;
}

.btn-signup {
  background: #000;
  color: #fff;
  border-color: #000;
}

.btn-signup:hover {
  background: #9b5f74;
  border-color: #9b5f74;
}
</style>