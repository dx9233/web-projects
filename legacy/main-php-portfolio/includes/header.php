<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($config['site_name']) ?></title>
  <link rel="stylesheet" href="/assets/css/style.css">

      <!-- Devicon -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css"
    />

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <!-- Unicons -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />

    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- Swiper -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
</head>
<body>
<header class="header">
  <div class="container">
    <button class="burger" id="openMenu" aria-label="Открыть меню">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="28"
        height="28"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
      </svg>
    </button>

    <button class="close" id="closeMenu" aria-label="Закрыть меню">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="28"
        height="28"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg>
    </button>

    <!-- <a href="/" class="logo">Dmitry Lean</a> -->

    <nav class="nav" id="menu">
      <a href="/">Home</a>
    <a href="/about">About Me</a>
    <a href="/portfolio">Portfolio</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contacts</a>
    </nav>

    <div class="overlay" id="overlay"></div>
  </div>
</header>
<main>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    background: #fff;
    color: #1f1f1f;
  }

  /* ===== HEADER ===== */
  header {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 20px 40px;
  }

  .nav {
    display: flex;
    justify-content: right;
    gap: 30px;
    z-index: 10;
  }

  .nav a {
    text-decoration: none;
    color: #111;
    font-weight: 500;
    transition: color 0.3s ease;
  }

  .nav a:hover {
    color: red;
  }

  /* ===== BURGER ===== */
  .burger {
    display: none;
    flex-direction: column;
    cursor: pointer;
    gap: 5px;
    margin-left: auto;
  }

  .close {
    display: none;
  }

  .burger span {
    width: 25px;
    height: 3px;
    background: white;
    border-radius: 2px;
  }

  /* Overlay */
  .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease;
    z-index: 5;
  }

  .overlay.active {
    opacity: 1;
    visibility: visible;
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 768px) {
    header {
      justify-content: center;
    }

    .burger {
      display: flex;
    }

    .close {
      display: none;
    }

    /* ==== NAV ==== */
    .nav {
      position: fixed;
      top: 0;
      right: -250px;
      height: 100%;
      width: 250px;
      background: rgb(243, 241, 241);
      flex-direction: column;
      padding: 60px 20px;
      transition: right 0.3s ease;
      gap: 5px;
    }

    .nav a {
      margin: 15px 0;
      font-size: 18px;
      color: black;
    }

    .nav a:hover {
      color: red;
    }

    .nav.active {
      right: 0;
    }

    .nav.active ~ .close {
      display: flex;
    }

    .nav.active ~ .burger {
      display: none;
    }
  }
</style>
