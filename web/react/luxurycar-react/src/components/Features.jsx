import React from "react";
import "./Features.css";

const Features = () => {
  return (
    <section className="features">
      <div className="container">
        <div className="features-grid">
          <div className="left-content">
            <h2>We will take good<br />care of your car</h2>
            <img src="/assets/img/luxury_car.png" alt="Luxury car" />
          </div>
          <div className="right-content">
            <div className="feature-item">
              <div className="icon">
                <img src="/assets/img/vector.png" alt="vector" />
              </div>
              <div>
                <h3>Precise work</h3>
                <p>
                  We uphold the highest standards of professionalism when<br />servicing your vehicles.
                </p>
              </div>
            </div>
            <hr />
            <div className="feature-item">
              <div className="icon">
                <img src="/assets/img/diamond.png" alt="diamond" />
              </div>
              <div>
                <h3>Premium Products and Services</h3>
                <p>
                  Ensure your car's longevity with a periodic exterior<br />protection treatment.
                </p>
              </div>
            </div>
            <hr />
            <div className="feature-item">
              <div className="icon">
                <img src="/assets/img/security.png" alt="security" />
              </div>
              <div>
                <h3>High-Level Security and Privacy</h3>
                <p>
                  We understand the importance of privacy and security<br />for their our clientele.
                </p>
              </div>
            </div>
            <a href="https://example.com/" className="quote-link">Get a quote now</a>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Features;