"use client";

import "./Subscribe.css";

const Subscribe: React.FC = () => {
  return (
    <div className="subscribe-section">
      <div className="container">
        <form className="subscribe-form">
          <input type="email" placeholder="Enter your email address" required />
          <button type="submit">Subscribe Now</button>
        </form>
      </div>
    </div>
  );
};

export default Subscribe;
