import React, { useEffect } from "react";
import ServiceSection from "../components/ServiceSection";

function Service() {
  useEffect(() => {
    document.title = "Dmitry Lean | Service";
  }, []);

  return (
    <ServiceSection />
  );
}

export default Service;