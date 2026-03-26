import React, { FC } from "react";
import "./WorksSection.css";
import projectsData from "../data/portfolio.json";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faGithub } from "@fortawesome/free-brands-svg-icons";
import { faLink } from "@fortawesome/free-solid-svg-icons";

type Project = {
  img: string;
  title: string;
  description: string;
  tags: string[];
  github: string;
  demo: string;
  details: string;
  stack: string;
};

const projects = projectsData as unknown as Project[];

const Works: FC = () => {
  return (
    <section className="projects">
      <div className="container">
        <div className="projects-grid">
          {projects.map((project, index) => (
            <div className="project-card" key={index}>
              <div className="project-image">
                <img src={project.img} alt={project.title} />
              </div>
              <div className="project-content">
                <h3>{project.title}</h3>
                <p>{project.description}</p>

                <div className="project-meta">
                  <div className="tags">
                    {project.stack.split(",").map((tag, i) => (
                      <span key={i}>{tag.trim()}</span>
                    ))}
                  </div>

                  <div className="links">
                    <a
                      href={project.demo}
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <FontAwesomeIcon icon={faLink} className="icon" />
                    </a>
                    <a
                      href={project.github}
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <FontAwesomeIcon icon={faGithub} className="icon" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Works;
