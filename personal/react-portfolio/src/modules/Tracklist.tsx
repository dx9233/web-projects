import { useState, useRef, useEffect } from "react";
import "./Tracklist.css";
import tracksData from "../data/tracks.json";

type Track = {
  title: string;
  time: string;
  key: string;
  genre: string;
  src: string;
};

const tracks = tracksData as Track[];

const genres = [
  { label: "All", value: "all" },
  { label: "Boom Bap", value: "boom bap" },
  { label: "R&B and Soul", value: "r&b" },
  { label: "Hardcore Rap", value: "hardcore rap" },
  { label: "Metal", value: "metal" },
];

export default function TrackList() {
  const [activeGenre, setActiveGenre] = useState<string>("all");
  const audioRefs = useRef<HTMLAudioElement[]>([]);

  const filteredTracks =
    activeGenre === "all"
      ? tracks
      : tracks.filter((track) => track.genre === activeGenre);

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
    <div className="tracks-section">
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
    </div>
  );
}
