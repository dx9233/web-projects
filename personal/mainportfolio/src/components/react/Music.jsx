import React, { useEffect, useState } from "react";
import "../../../public/assets/css/music.css";
import MusicProjects from "../../modules/MusicProjects";
import albumsru from "../../data/albums.ru.json";
import albumsen from "../../data/albums.en.json";
import AlbumCard from "../../modules/AlbumCard";

function Discography() {
  const [lang, setLang] = useState("ru");

  useEffect(() => {
    document.title = "Dmitry Lean | Music";

    if (
      typeof window !== "undefined" &&
      window.location.pathname.startsWith("/en")
    ) {
      setLang("en");
    }
  }, []);

  const albumsData = lang === "ru" ? albumsru : albumsen;

  return (
    <main className="content">
      <div className="albums-section">
        <div className="container">
          <h2 className="album-title">
            {lang === "ru" ? "Альбомы" : "Albums"}
          </h2>
          <div className="albums-gallery">
            <div className="discography-grid">
              {albumsData.map((album, index) => (
                <AlbumCard key={index} album={album} />
              ))}
            </div>
          </div>
        </div>
      </div>

      <MusicProjects />
    </main>
  );
}

export default Discography;
