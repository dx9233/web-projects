import React, { useEffect } from "react";
import Hero from "../components/Hero";
import LatestRelease from "../modules/LatestRelease"
import DefaultLayout from "../layouts/DefaultLayout"

function Home() {
  useEffect(() => {
    document.title = "Dmitry Lean | Home";
  }, []);

  return (
    <DefaultLayout>
    <Hero />,
      <LatestRelease />
      </DefaultLayout>
  );
}

export default Home;