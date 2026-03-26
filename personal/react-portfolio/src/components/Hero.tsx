import React, { FC } from "react";
import "./Hero.css";

const Hero: FC = () => {
  return (
    <section className="hero">
      <div className="container">
        <h1>
          Hello, I am - <span className="highlight">Dmitry</span>
          <br />
          <span className="big">Software Developer</span>
          <br />
          <span className="muted">JS / PHP / Python</span>
        </h1>
        <button className="btn-primary">Hire Me!</button>
      </div>
    </section>
  );
};

export default Hero;
