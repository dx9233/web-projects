import React from "react";
import "./NavBar.css";

const NavBar = () => {
  return (
    <header>
      <div className="container">
        <nav className="navbar">
          <div className="logo">LuxureDetails</div>

          <button className="burger" id="openMenu" aria-label="Открыть меню">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" y1="6" x2="21" y2="6"></line>
              <line x1="3" y1="12" x2="21" y2="12"></line>
              <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
          </button>

          <button className="close" id="closeMenu" aria-label="Закрыть меню">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
          </button>

          <ul className="nav-links">
            <li><a href="#services">Services</a></li>
            <li><a href="https://example.com/">Pricing</a></li>
            <li><a href="https://example.com/">About</a></li>
            <li><a href="https://example.com/">Contact</a></li>
          </ul>
          <a href="https://example.com/" className="quote-btn">Get a quote</a>
        </nav>
      </div>

      <div className="overlay" id="overlay"></div>
    </header>
  );
};

export default NavBar;