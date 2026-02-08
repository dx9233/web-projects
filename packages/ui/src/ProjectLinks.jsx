// src/components/Links.jsx
import "./ProjectLinks.css";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import {
  faItunes,
  faSpotify,
  faYoutube,
} from "@fortawesome/free-brands-svg-icons";

function Links({ links = {} }) {
  return (
    <div className="project-links">
      {links.spotify && (
        <a
          href={links.spotify}
          target="_blank"
          rel="noopener noreferrer"
          title="Listen on Spotify"
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
        >
          <FontAwesomeIcon icon={faYoutube} />
        </a>
      )}
    </div>
  );
}

export default Links;
