"use client";

import React from "react";
import "./LatestRelease.css";
import Links from "./Links";
import Image from "next/image";

const LatestRelease: React.FC = () => {
  return (
    <section className="latest">
      <h2>Latest Release</h2>
      <div className="release-card">
        <Image
          src="/assets/img/methlab.jpg"
          alt="Meth Lab"
          width={500}
          height={500}
        />
        <div className="release-info">
          <h3>Meth Lab 3: The Rehab</h3>
          <span>2022</span>
          <Links />
        </div>
      </div>
    </section>
  );
};

export default LatestRelease;
