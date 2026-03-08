// src/components/AlbumCard.jsx
import "./Subscribe.css";

function Subscribe() {
  return (
    <div className="subscribe-section">
      <div className="container">
        <form className="subscribe-form">
          <input
            type="email"
            placeholder="Enter your email address"
            required
          />
          <button type="submit">Subscribe Now</button>
        </form>
      </div>
    </div>
  );
}

export default Subscribe;
