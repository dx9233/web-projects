<template>
  <header>
    <div class="logo">
      <router-link to="/">
        <img src="../../src/assets/logo.svg" alt="Stylicle Logo" />
      </router-link>
    </div>

    <nav>
      <ul>
        <li>
          <router-link
            to="/"
            active-class="active-link"
            exact-active-class="exact-active"
            >Home</router-link
          >
        </li>
        <li>
          <router-link to="/about" active-class="active-link"
            >About Us</router-link
          >
        </li>
        <li>
          <router-link to="/contact" active-class="active-link"
            >Contact Us</router-link
          >
        </li>
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
</template>

<style>
/* ---------- NAVIGATION ---------- */
header {
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

.logo a {
  text-decoration: none;
  display: inline-block;
}

nav ul {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 28px;
  margin: 0;
  padding: 0;
}

nav ul li a {
  display: inline-block;
  text-decoration: none;
  color: #333;
  font-weight: 500;
  transition: color 0.2s;
  padding: 8px 0;
  position: relative;
}

nav ul li a:hover {
  color: #9b5f74;
}

nav ul li a.active-link {
  color: #9b5f74;
  font-weight: 600;
}

nav ul li a.exact-active {
  border-bottom: 2px solid #9b5f74;
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
