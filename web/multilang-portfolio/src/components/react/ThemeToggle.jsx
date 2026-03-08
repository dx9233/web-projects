import React, { useEffect, useState } from "react";
import "@fortawesome/fontawesome-free/css/all.min.css";

export default function ThemeToggle() {
  const [theme, setTheme] = useState("light");

  useEffect(() => {
    const saved = localStorage.getItem("theme");
    const initial = saved || "light";
    setTheme(initial);
    document.documentElement.classList.toggle("dark", initial === "dark");
  }, []);

  const toggleTheme = () => {
    const newTheme = theme === "light" ? "dark" : "light";
    setTheme(newTheme);
    localStorage.setItem("theme", newTheme);
    document.documentElement.classList.toggle("dark", newTheme === "dark");
  };

  return (
    <button onClick={toggleTheme} className="theme-btn">
      {theme === "light" ? (
        <i className="fa-solid fa-moon"></i>
      ) : (
        <i className="fa-solid fa-sun"></i>
      )}
    </button>
  );
}
