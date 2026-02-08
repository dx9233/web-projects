"use client";

import "./ContactSection.css";

const ContactSection: React.FC = () => {
  return (
    <section className="contact-section">
      <div className="container">
        <div className="contact-grid">
          <div className="contact-form">
            <h2>Contact Me!</h2>

            <form>
              <label>Name</label>
              <input type="text" placeholder="Enter your name" required />

              <label>Drop your e-mail</label>
              <input
                type="email"
                placeholder="your.email@example.com"
                required
              />

              <label>How can I help?</label>
              <textarea
                placeholder="Tell us about your project..."
                required
              ></textarea>

              <button type="submit" className="btn-submit">
                Send message →
              </button>
            </form>
          </div>

          <div className="contact-info">
            <div className="info-title">
              <h2>Info</h2>
            </div>
            <div className="info-text">
              <p>
                <strong className="red-text">Email:</strong>{" "}
                example@gmail.com
              </p>
            </div>
            <div className="info-text">
              <p>
                If I miss your message or call, I&apos;ll get back to you as
                soon as possible—usually within 24 hours. I truly value your
                time and interest, and I&apos;ll make sure to respond
                thoughtfully and promptly.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ContactSection;
