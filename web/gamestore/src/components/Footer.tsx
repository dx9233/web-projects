"use client";

import React from "react";
import "./Footer.css";
// import Subscribe from "./Subscribe";
// import Links from "./Links";
import Image from "next/image";

const Footer: React.FC = () => {
  return (
    <footer className="footer">
      <div className="container">
        <div className="footer__top">
          <div className="footer__brand">
            <Image
              src="/assets/svg/footer_logo.svg"
              className="footer__logo"
              alt="logo"
              width={50}
              height={50}
            />

            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority have suffered alteration in some form.
            </p>

            <div className="footer__socials">
              <a href="#">T</a>
              <a href="#">TG</a>
              <a href="#">IG</a>
              <a href="#">YT</a>
              <a href="#">DC</a>
            </div>
          </div>

          <div className="footer__faq">
            <div className="accordion-item">
              <button className="accordion-header active">
                Suspendisse in velit quis ex faucibus
              </button>
              <div className="accordion-content open">
                <p>
                  Suspendisse in velit quis ex faucibus vestibulum ut eu sem.
                  Maecenas semper dui massa.
                </p>
              </div>
            </div>

            <div className="accordion-item">
              <button className="accordion-header">
                Maecenas eget tortor venenatis, dapibus velit
              </button>
              <div className="accordion-content">
                <p>Hidden content...</p>
              </div>
            </div>

            <div className="accordion-item">
              <button className="accordion-header">
                Ut ornare consequat sollicitudin
              </button>
              <div className="accordion-content">
                <p>Hidden content...</p>
              </div>
            </div>
          </div>
        </div>

        <div className="footer__bottom">
          <div className="footer__copy">© 2022 All rights reserved.</div>

          <div className="footer__links">
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Login / Signup</a>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
