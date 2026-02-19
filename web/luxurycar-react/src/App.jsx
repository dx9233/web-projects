import React, { useEffect } from "react";

// Components
import NavBar from "./components/NavBar";
import Hero from "./components/Hero";
import Services from "./components/Services";
import Frame from "./components/Frame";
import Features from "./components/Features";
import CtaSection from "./components/CtaSection";
import Footer from "./components/Footer";

import "./App.css";

function App() {
  useEffect(() => {
    document.title = "Luxury Detailing";
  }, []);

  return (
    <div>
      <NavBar />
      <Hero />
      <Services />
      <Frame />
      <Features />
      <CtaSection /> 
      <Footer />
    </div>
  );
}

export default App;
