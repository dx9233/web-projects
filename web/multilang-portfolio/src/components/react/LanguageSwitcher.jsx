// src/components/LanguageSwitcher.jsx
import React, { useState, useEffect } from "react";
import { getTranslation } from "../lib/i18n";

export default function LanguageSwitcher() {
  const [lang, setLang] = useState("en");
  const [t, setT] = useState(getTranslation("en"));

  useEffect(() => {
    const saved = localStorage.getItem("lang") || "en";
    setLang(saved);
    setT(getTranslation(saved));
  }, []);

  const switchLang = (newLang) => {
    setLang(newLang);
    localStorage.setItem("lang", newLang);
    setT(getTranslation(newLang));
    window.location.reload();
  };

  return (
    <div className="flex gap-2 items-center">
      <span className="text-sm">{t.language}:</span>
      <button
        className={`px-2 py-1 rounded ${lang === "en" ? "bg-blue-500 text-white" : "bg-gray-200"}`}
        onClick={() => switchLang("en")}
      >
        EN
      </button>
      <button
        className={`px-2 py-1 rounded ${lang === "ru" ? "bg-blue-500 text-white" : "bg-gray-200"}`}
        onClick={() => switchLang("ru")}
      >
        RU
      </button>
    </div>
  );
}
