// src/components/react/Hero.tsx
import React from "react";
import "./Hero.css";

type Link = { href: string; text: string };

interface HeroProps {
  title?: string;
  subtitle?: string;
  stack: string[];
  contactLink?: Link;
  projectLink?: Link;
}

/* Exported React component with default props to avoid undefined issues.
   Keep this file as .tsx so TypeScript can check props properly. */
export default function Hero({
  title = "",
  subtitle = "",
  stack = [],
  contactLink = { href: "#", text: "Contact" },
  projectLink = { href: "#", text: "Projects" },
}: HeroProps) {
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
          <a href={contactLink.href} className="btn-primary">
            {contactLink.text}
          </a>
          <a href={projectLink.href} className="projects-btn">
            {projectLink.text}
          </a>
        </div>
      </div>
    </section>
  );
}
