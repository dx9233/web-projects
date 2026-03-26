"use client";

import React, { ReactNode } from "react";
import "./DefaultLayout.css";

interface DefaultLayoutProps {
  children: ReactNode;
}

export default function DefaultLayout({ children }: DefaultLayoutProps) {
  return (
    <div className="default-layout">
      <main>{children}</main>
    </div>
  );
}
