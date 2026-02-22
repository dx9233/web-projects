"use client";

import "./AlbumsSection.css";
import AlbumCard from "./AlbumCard";
import albumsData from "../data/albums.json";

function AlbumsSection() {
  return (
    <main>
      <div className="container">
        <div className="albums-section">
          <div className="container">
            <div className="albums-gallery">
              <div className="discography-grid">
                {albumsData.map((album, index) => (
                  <AlbumCard key={index} album={album} />
                ))}
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  );
}

export default AlbumsSection;
