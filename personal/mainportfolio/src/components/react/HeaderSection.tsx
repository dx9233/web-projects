import React, { useState } from "react";
import "./HeaderSection.css";

export interface MenuItem {
  href: string;
  text: string;
  external?: boolean;
}

interface HeaderProps {
  menu: MenuItem[];
}

const HeaderSection: React.FC<HeaderProps> = ({ menu }) => {
  const [isOpen, setIsOpen] = useState(false);

  const toggleMenu = () => setIsOpen(!isOpen);
  const closeMenu = () => setIsOpen(false);

  return (
    <header className="header">
      <div className="container">
        <button className="burger" onClick={toggleMenu} aria-label="Open menu">
          ☰
        </button>

        <button className="close" onClick={closeMenu} aria-label="Close menu">
          ✕
        </button>

        <nav className={`nav ${isOpen ? "active" : ""}`}>
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
        </nav>

        <div
          className={`overlay ${isOpen ? "active" : ""}`}
          onClick={closeMenu}
        />
      </div>
    </header>
  );
};

export default HeaderSection;
