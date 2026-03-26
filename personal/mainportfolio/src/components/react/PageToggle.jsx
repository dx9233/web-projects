import React, { useState } from "react";
import WorksSection from "./WorksSection.jsx";
import MusicProjects from "./MusicProjects.jsx";
import AlbumCard from "./AlbumCard.jsx";
import Tracklist from "./Tracklist.jsx";
import albumsEn from "../../data/albums.en.json";
import albumsRu from "../../data/albums.ru.json";
import "./PageToggle.css";

export default function PageToggle({ lang = "en" }) {
  const [activeTab, setActiveTab] = useState("works");

  // albums by language
  const albumsData = lang === "ru" ? albumsRu : albumsEn;

  // translations
  const t = {
    en: {
      works: "Works",
      music: "Music",
      albums: "Albums",
      tracks: "Beats",
    },
    ru: {
      works: "Работы",
      music: "Музыка",
      albums: "Альбомы",
      tracks: "Beats",
    },
  }[lang];

  return (
    <div className="container">
      {/* Tabs */}
      <div className="tabs">
        <button
          className={`tab-btn ${activeTab === "works" ? "active" : ""}`}
          onClick={() => setActiveTab("works")}
        >
          {t.works}
        </button>
        <button
          className={`tab-btn ${activeTab === "music" ? "active" : ""}`}
          onClick={() => setActiveTab("music")}
        >
          {t.music}
        </button>
        <button
          className={`tab-btn ${activeTab === "tracks" ? "active" : ""}`}
          onClick={() => setActiveTab("tracks")}
        >
          {t.tracks}
        </button>
      </div>

      {/* Content */}
      <div className="tab-content">
        {activeTab === "works" && <WorksSection lang={lang} />}

        {activeTab === "music" && (
          <>
            <div className="albums-section">
              <div className="container">
                <h2 className="album-title">{t.albums}</h2>
                <div className="albums-gallery">
                  <div className="discography-grid">
                    {albumsData.map((album, index) => (
                      <AlbumCard key={index} album={album} />
                    ))}
                  </div>
                </div>
              </div>
            </div>
            <MusicProjects lang={lang} />
          </>
        )}

        {activeTab === "tracks" && <Tracklist lang={lang} />}
      </div>
    </div>
  );
}
