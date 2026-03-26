"use client";

import React, { ReactNode } from "react";
import "./HomeLayout.css";

interface HomeLayoutProps {
  children: ReactNode;
}

export default function HomeLayout({ children }: HomeLayoutProps) {
  return (
    <div className="home-layout">
      <main>{children}</main>
    </div>
  );
}
