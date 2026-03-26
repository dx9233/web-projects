import React, { FC } from "react";
import "./ContactSection.css";

const ContactSection: FC = () => {
  return (
    <section className="contact-section">
      <div className="container">
        <div className="contact-grid">
          <div className="contact-form">
            <h2>
              Contact Me
            </h2>

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
            <h2>
              Info
            </h2>

            <p>
              <strong>Email:</strong> crashtheroutines@gmail.com
            </p>

            <h3>Availability</h3>
            <p>
              If I miss your message or call, I'll get back to you as soon as
              possible—usually within 24 hours. I truly value your time and
              interest, and I'll make sure to respond thoughtfully and promptly.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ContactSection;