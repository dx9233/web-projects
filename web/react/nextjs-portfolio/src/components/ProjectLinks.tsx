"use client";

import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import {
  faSpotify,
  faItunes,
  faYoutube,
} from "@fortawesome/free-brands-svg-icons";

interface ProjectLinksProps {
  links: {
    spotify?: string;
    itunes?: string;
    youtube?: string;
  };
}

const ProjectLinks: React.FC<ProjectLinksProps> = ({ links }) => {
  return (
    <div className="flex space-x-4 mt-4 text-xl">
      {links.spotify && (
        <a
          href={links.spotify}
          target="_blank"
          rel="noopener noreferrer"
          title="Listen on Spotify"
          className="hover:text-green-500 transition-colors"
        >
          <FontAwesomeIcon icon={faSpotify} />
        </a>
      )}
      {links.itunes && (
        <a
          href={links.itunes}
          target="_blank"
          rel="noopener noreferrer"
          title="Listen on iTunes"
          className="hover:text-pink-500 transition-colors"
        >
          <FontAwesomeIcon icon={faItunes} />
        </a>
      )}
      {links.youtube && (
        <a
          href={links.youtube}
          target="_blank"
          rel="noopener noreferrer"
          title="Listen on YouTube"
          className="hover:text-red-500 transition-colors"
        >
          <FontAwesomeIcon icon={faYoutube} />
        </a>
      )}
    </div>
  );
};

export default ProjectLinks;
