import React, { useState } from "react";
import "./HeaderSection.css";
import ThemeToggle from "./ThemeToggle";

function Header({ menu = [] }) {
  const [isOpen, setIsOpen] = useState(false);

  const toggleMenu = () => setIsOpen(!isOpen);
  const closeMenu = () => setIsOpen(false);

  return (
    <header className="header">
      <div className="container">
        {/* Burger button */}
        <button className="burger" onClick={toggleMenu} aria-label="Open menu">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="28"
            height="28"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
          >
            <line x1="3" y1="6" x2="21" y2="6" />
            <line x1="3" y1="12" x2="21" y2="12" />
            <line x1="3" y1="18" x2="21" y2="18" />
          </svg>
        </button>

        {/* Close button */}
        <button className="close" onClick={closeMenu} aria-label="Close menu">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="28"
            height="28"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
          >
            <line x1="18" y1="6" x2="6" y2="18" />
            <line x1="6" y1="6" x2="18" y2="18" />
          </svg>
        </button>

        {/* Logo */}
        {/* <a href="/" className="logo">Dmitry Lean</a> */}

        {/* Navigation */}
        <nav className={`nav ${isOpen ? "active" : ""}`} id="menu">
          {menu.map((item, index) => (
            <a
              key={index}
              href={item.href}
              target={item.external ? "_blank" : undefined}
              rel={item.external ? "noopener noreferrer" : undefined}
              onClick={closeMenu}
            >
              {item.text}
            </a>
          ))}
          <ThemeToggle />
        </nav>

        {/* Overlay */}
        <div
          className={`overlay ${isOpen ? "active" : ""}`}
          id="overlay"
          onClick={closeMenu}
        />
      </div>
    </header>
  );
}

export default Header;
