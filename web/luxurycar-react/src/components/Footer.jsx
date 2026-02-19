import React from "react";
import "./Footer.css";

const Footer = () => {
  return (
    <footer className="footer">
      <div className="footer-top">
        <div className="footer-brand">
          <h3>LuxureDetails</h3>
          <p>
            Experience the prestige of a professionally<br />detailed car, radiating elegance and refinement<br />at every turn.
          </p>
        </div>
        <div className="footer-columns">
          <div>
            <h4>Website</h4>
            <ul>
              <li><a href="https://example.com/">Services</a></li>
              <li><a href="https://example.com/">Pricing</a></li>
              <li><a href="https://example.com/">About</a></li>
            </ul>
          </div>
          <div>
            <h4>Contact</h4>
            <ul>
              <li><a href="https://example.com/">Get a quote</a></li>
              <li><a href="https://example.com/">Contact form</a></li>
              <li><a href="https://example.com/">Email us</a></li>
            </ul>
          </div>
          <div>
            <h4>СSocial Media</h4>
            <ul>
              <li><a href="https://example.com/">Facebook</a></li>
              <li><a href="https://example.com/">Instagram</a></li>
              <li><a href="https://example.com/">Twitter</a></li>
              <li><a href="https://example.com/">Youtube</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div className="footer-bottom">
        <span>LuxureDetails © 2024</span>
        <div className="footer-links">
          <a href="https://example.com/">Cookie policy</a>
          <a href="https://example.com/">Terms of service</a>
          <a href="https://example.com/">Privacy policy</a>
          <a
            href="https://www.figma.com/design/YEuQIpkKqpy4m3olwAtd3v/Luxury-Car-Detailing-Landing-Page--Community-?node-id=2-139&t=D54cmUptUO6p3HvG-1">Design</a>
        </div>
      </div>
    </footer>
  );
};

export default Footer;