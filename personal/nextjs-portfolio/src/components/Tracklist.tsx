"use client";

import React, { useState, useRef, useEffect } from "react";
import "./Tracklist.css";
import tracksData from "../data/tracks.json";

interface Track {
  title: string;
  time: string;
  key: string;
  src: string;
  genre: string;
}

interface Genre {
  label: string;
  value: string;
}

const genres: Genre[] = [
  { label: "All", value: "all" },
  { label: "Boom Bap", value: "boom bap" },
  { label: "G Funk", value: "g funk" },
  { label: "Soul", value: "soul" },
];

const TrackList: React.FC = () => {
  const [activeGenre, setActiveGenre] = useState<string>("all");
  const audioRefs = useRef<HTMLAudioElement[]>([]);

  const filteredTracks: Track[] =
    activeGenre === "all"
      ? (tracksData as Track[])
      : (tracksData as Track[]).filter(
          (track) => track.genre.toLowerCase() === activeGenre,
        );

  useEffect(() => {
    audioRefs.current = [];
  }, [activeGenre]);

  const handlePlay = (index: number) => {
    audioRefs.current.forEach((audio, i) => {
      if (audio && i !== index) {
        audio.pause();
        audio.currentTime = 0;
      }
    });
  };

  return (
    <section className="tracks-section" id="tracklist">
      <div className="genre-tabs">
        {genres.map((g) => (
          <button
            key={g.value}
            className={`tab ${activeGenre === g.value ? "active" : ""}`}
            onClick={() => setActiveGenre(g.value)}
          >
            {g.label}
          </button>
        ))}
      </div>

      <div className="track-list">
        {filteredTracks.map((track, index) => (
          <div className="track" key={index}>
            <div className="track-info">
              <p className="title">{track.title}</p>
            </div>
            <span className="time">{track.time}</span>
            <span className="key">{track.key}</span>
            <audio
              controls
              controlsList="nodownload noplaybackrate"
              src={track.src}
              ref={(el) => {
                if (el) audioRefs.current[index] = el;
              }}
              onPlay={() => handlePlay(index)}
              onContextMenu={(e) => e.preventDefault()}
            />
          </div>
        ))}
      </div>
    </section>
  );
};

export default TrackList;
