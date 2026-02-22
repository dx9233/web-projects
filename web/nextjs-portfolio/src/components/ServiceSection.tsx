"use client";

import "./ServiceSection.css";

const ServiceSection: React.FC = () => {
  return (
    <section className="services">
      <div className="container">
        <div className="services-grid">
          <div className="services-left">
            <h2>Services</h2>
          </div>

          <div className="services-right">
            {[
              { number: "01", title: "Web Design" },
              { number: "02", title: "Web Development" },
              { number: "03", title: "Branding" },
            ].map((service) => (
              <div className="service-card" key={service.number}>
                <span className="number">{service.number}</span>
                <h3>{service.title}</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore.
                </p>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default ServiceSection;
