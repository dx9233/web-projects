"use client";

import { useState } from "react";
import WorksSection from "./WorksSection";
import MusicProjects from "./MusicProjects";
// import Tracklist from "./Tracklist";
import "./PageToggle.css";
import AlbumsSection from "./AlbumsSection";

const PageToggle: React.FC = () => {
  const [activeTab, setActiveTab] = useState<"works" | "music" | "tracks">(
    "works",
  );

  return (
    <div className="page-toggle-container">
      <div className="conteiner">
        <div className="tabs">
          {(["works", "music", "tracks"] as const).map((tab) => (
            <button
              key={tab}
              className={`tab-btn ${activeTab === tab ? "active" : ""}`}
              onClick={() => setActiveTab(tab)}
            >
              {tab === "works" && "Works"}
              {tab === "music" && "Music"}
              {/*  {tab === "tracks" && "Beats"} */}
            </button>
          ))}
        </div>

        <div className="tab-content">
          {activeTab === "works" && <WorksSection />}

          {activeTab === "music" && (
            <>
              <AlbumsSection />
              <MusicProjects />
            </>
          )}
          {/*
          {activeTab === "tracks" && <Tracklist />} */}
        </div>
      </div>
    </div>
  );
};

export default PageToggle;
