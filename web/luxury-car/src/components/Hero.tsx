import React, { FC } from "react";
import "./Hero.css";

const Hero: FC = () => {
  return (
    <section className="hero">
      <div className="container">
        <div className="hero-content">
          <h1>Luxury car detailing</h1>
          <p>
            Experience the prestige of a professionally detailed car, radiating
            elegance and refinement at every turn.
          </p>
          <a href="https://example.com/" className="connect-btn">
            Let’s connect
          </a>
        </div>
        <div className="hero-image">
          <img src="/assets/img/hero_image.png" alt="Luxury Car" />
        </div>
      </div>
    </section>
  );
};

export default Hero;
