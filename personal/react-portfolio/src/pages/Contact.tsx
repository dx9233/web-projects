import React, { useEffect } from "react";
import ContactSection from "../components/ContactSection";

function Contact() {
  useEffect(() => {
    document.title = "Dmitry Lean | Contacts";
  }, []);

  return <ContactSection />;
}

export default Contact;
