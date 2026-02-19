"use client";

// import Link from "next/link";
import "./Hero.css";

const Hero: React.FC = () => {
  return (
    <section className="hero">
      <div className="hero-container">
        <div className="hero-content">
          <h1>
            Holiday Sale! <span>30% off</span>
            <br />
            for All Action Games
          </h1>
          <p>Save. Play. Celebrate. Ends 1/17</p>
          <button className="cta">Download & Save Now</button>
        </div>
      </div>
    </section>
  );
};

export default Hero;
