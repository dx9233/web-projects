import React, { useEffect, useState } from "react";
import "./MusicProjects.css";
import ProjectLinks from "./ProjectLinks";
import Image from "next/image";

// 👇 Импортируем JSON через assert { type: "json" }
// Это стандартный способ для новых версий Next/Turbopack
import projects from "../data/musicprojects.json" assert { type: "json" };

interface Project {
  cover: string;
  imagetitle: string;
  title: string;
  genre: string;
  year: string;
  description: string;
  links: {
    spotify?: string;
    itunes?: string;
    youtube?: string;
  };
}

export default function MusicProjects() {
  const [data, setData] = useState<Project[]>([]);

  useEffect(() => {
    setData(projects as Project[]);
  }, []);

  return (
    <section className="projects">
      <div className="container">
        <h2 className="projects-title">Projects</h2>

        <div className="projects-content">
          {data.map((project, index) => (
            <div className="project-block" key={index}>
              <div className="projects-image">
                <Image
                  src={project.cover}
                  alt={project.imagetitle}
                  width={500}
                  height={500}
                />
              </div>

              <div className="projects-list">
                <div className="projects-item">
                  <div className="projects-text">
                    <h3>{project.title}</h3>
                    <p className="project-subtitle">{project.genre}</p>
                    <p>{project.year}</p>
                    <ProjectLinks links={project.links} />
                    <p>{project.description}</p>
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
