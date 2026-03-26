"use client";

import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faSpotify } from "@fortawesome/free-brands-svg-icons";
import Image from "next/image";

interface Album {
  cover: string;
  title: string;
  date: string;
  link?: string;
}

interface AlbumCardProps {
  album: Album;
}

const AlbumCard: React.FC<AlbumCardProps> = ({ album }) => {
  return (
    <div className="album-card">
      <Image src={album.cover} alt={album.title} width={500} height={500} />
      <div className="info-row">
        <div className="info">
          <p>{album.title}</p>
          <span>{album.date}</span>
        </div>
        {album.link && (
          <div className="actions">
            <a
              href={album.link}
              target="_blank"
              rel="noopener noreferrer"
              title="Listen on Spotify"
            >
              <FontAwesomeIcon
                icon={faSpotify}
                className="text-green-500 text-xl"
              />
            </a>
          </div>
        )}
      </div>
    </div>
  );
};

export default AlbumCard;
