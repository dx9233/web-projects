import React, { useEffect, useState } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faSun, faMoon, faBolt } from "@fortawesome/free-solid-svg-icons";

const themes = ["light", "dark", "neon"];

const ThemeToggle = () => {
  const [theme, setTheme] = useState("light");

  // Detect system preference on first render
  useEffect(() => {
    const systemPrefersDark = window.matchMedia(
      "(prefers-color-scheme: dark)",
    ).matches;
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme && themes.includes(savedTheme)) {
      setTheme(savedTheme);
      document.documentElement.setAttribute("data-theme", savedTheme);
    } else {
      const initialTheme = systemPrefersDark ? "dark" : "light";
      setTheme(initialTheme);
      document.documentElement.setAttribute("data-theme", initialTheme);
    }
  }, []);

  // Cycle themes
  const toggleTheme = () => {
    const currentIndex = themes.indexOf(theme);
    const nextTheme = themes[(currentIndex + 1) % themes.length];
    setTheme(nextTheme);
    document.documentElement.setAttribute("data-theme", nextTheme);
    localStorage.setItem("theme", nextTheme);
  };

  return (
    <button onClick={toggleTheme} aria-label="Toggle theme">
      {theme === "light" && <FontAwesomeIcon icon={faSun} />}
      {theme === "dark" && <FontAwesomeIcon icon={faMoon} />}
      {theme === "neon" && <FontAwesomeIcon icon={faBolt} />}
    </button>
  );
};

export default ThemeToggle;
