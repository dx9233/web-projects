import "./MusicProjects.css";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faSpotify, faYoutube } from "@fortawesome/free-brands-svg-icons";
import projectsData from "../data/projects.json";

type MusicProject = {
  id: string;
  imageSrc: string;
  title: string;
  subtitle: string;
  description: string;
  links: {
    spotify?: string;
    youtube?: string;
  };
};

const projects = projectsData as unknown as MusicProject[];

function MusicProjects() {
  return (
    <section className="projects">
      <div className="container">
        <h2 className="projects-title">Projects</h2>

        {projects.map((project) => (
          <div className="projects-content" key={project.id}>
            <div className="projects-image">
              <img src={project.imageSrc} alt={project.title} />
            </div>

            <div className="projects-list">
              <div className="projects-item">
                <div className="projects-text">
                  <h3>{project.title}</h3>
                  <p className="project-subtitle">{project.subtitle}</p>

                  <div className="project-links">
                    {project.links.spotify && (
                      <a
                        href={project.links.spotify}
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <FontAwesomeIcon icon={faSpotify} />
                      </a>
                    )}

                    {project.links.youtube && (
                      <a
                        href={project.links.youtube}
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <FontAwesomeIcon icon={faYoutube} />
                      </a>
                    )}
                  </div>

                  <p>{project.description}</p>
                </div>
              </div>
            </div>
          </div>
        ))}
      </div>
    </section>
  );
}

export default MusicProjects;
