"use client";

import React from "react";
import "./Links.css";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import {
  faBehance,
  faGithub,
  faTelegram,
} from "@fortawesome/free-brands-svg-icons";

interface LinksProps {
  links?: {
    github?: string;
    behance?: string;
    telegram?: string;
  };
}

const Links: React.FC<LinksProps> = ({ links = {} }) => {
  return (
    <div className="socials">
      {links.github && (
        <a
          href={links.github}
          target="_blank"
          rel="noopener noreferrer"
          title="GitHub"
        >
          <FontAwesomeIcon icon={faGithub} />
        </a>
      )}
      {links.behance && (
        <a
          href={links.behance}
          target="_blank"
          rel="noopener noreferrer"
          title="Behance"
        >
          <FontAwesomeIcon icon={faBehance} />
        </a>
      )}
      {links.telegram && (
        <a
          href={links.telegram}
          target="_blank"
          rel="noopener noreferrer"
          title="Telegram"
        >
          <FontAwesomeIcon icon={faTelegram} />
        </a>
      )}
    </div>
  );
};

export default Links;
