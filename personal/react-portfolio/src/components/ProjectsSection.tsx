import React, { FC } from "react";
import "./ProjectsSection.css";
import projectsData from "../data/projects.json";

type Project = {
  image: string;
  title: string;
  description: string;
  tags: string[];
  github: string;
  demo: string;
  details: string;
};

const projects = projectsData as unknown as Project[];

const Projects: FC = () => {
  return (
    <section className="projects">
      <div className="container">
        <div className="projects-grid">
          {projects.map((project, index) => (
            <div className="project-card" key={index}>
              <div className="project-image">
                <img src={project.image} alt={project.title} />
              </div>

              <div className="project-content">
                <h3>{project.title}</h3>
                <p>{project.description}</p>

                <div className="tags">
                  {project.tags.map((tag, i) => (
                    <span key={i}>{tag}</span>
                  ))}
                </div>

                <div className="project-footer">
                  <div className="icons">
                    <a
                      href={project.github}
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <i className="fa-brands fa-github"></i>
                    </a>

                    <a
                      href={project.demo}
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <i className="fa-solid fa-link"></i>
                    </a>
                  </div>

                  <a href={project.details} className="details-link">
                    VIEW_DETAILS →
                  </a>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Projects;
