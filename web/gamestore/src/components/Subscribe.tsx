"use client";

// import Link from "next/link";
import "./Subscribe.css";

const Subscribe: React.FC = () => {
  return (
    <section className="subscribe">
      <div className="subscribe__inner container">
        <div className="subscribe__content">
          <h2 className="subscribe__title">
            <span>Subscribe</span>to the Games Store Email List
          </h2>

          <p className="subscribe__text">
            Sign up for our email newsletter to get info on game announcements,
            updates, special events and offers.
          </p>

          <form className="subscribe__form">
            <input type="text" placeholder="Your Name" required />
            <input type="email" placeholder="Your Email" required />
            <button type="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </section>
  );
};

export default Subscribe;
