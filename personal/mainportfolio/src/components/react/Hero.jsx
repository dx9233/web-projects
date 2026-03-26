// src/components/react/Hero.jsx
import React from "react";
import "./Hero.css";

// A simple, self-contained React Hero component that is meant to be
// embedded inside an Astro page (use client:visible or other client directive).
// The component expects plain data props coming from your lang.json (or from Astro).
export default function Hero({
  title = "",
  subtitle = "",
  stack = [],
  contactLink = {},
  projectLink = {},
}) {
  return (
    <section className="hero">
      <div className="container">
        <h1>
          <span className="highlight">{title}</span>
          <br />
          <span className="big">{subtitle}</span>
          <br />
          <span className="muted">{stack}</span>
        </h1>

        <div className="btn-grid">
          {/* Primary contact button — visible on desktop and mobile */}
          <a href={contactLink.href || "#"} className="btn-primary">
            {contactLink.text || "Contact"}
          </a>

          {/* Projects button — intentionally hidden on desktop, revealed on small screens */}
          <a href={projectLink.href || "#"} className="projects-btn">
            {projectLink.text || "Projects"}
          </a>
        </div>
      </div>
    </section>
  );
}
