"use client";

import React, { useState, useRef, useEffect } from "react";
import Image from "next/image";
import { motion, AnimatePresence } from "framer-motion";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faGithub } from "@fortawesome/free-brands-svg-icons";
import { faLink } from "@fortawesome/free-solid-svg-icons";

// Import raw JSON — see notes below about tsconfig if this errors
import rawData from "@/data/portfolio.json";
import "./WorksSection.css";

/* -----------------------------
   Types
   ----------------------------- */

interface Project {
  id?: string | number; // optional id, useful for React keys
  title: string;
  img: string; // if images are in /public use string paths like "/images/.."
  description?: string;
  stack: string; // e.g. "React, Next"
  icons?: string | string[]; // path(s) to small icons
  demo?: string;
  github?: string;
}

type FilterValue = "All" | "Astro" | "React" | "PHP";

/* -----------------------------
   Filters
   ----------------------------- */

const filters: { label: string; value: FilterValue }[] = [
  { label: "All", value: "All" },
  { label: "Astro", value: "Astro" },
  { label: "React", value: "React" },
  { label: "PHP", value: "PHP" },
];

/* -----------------------------
   Component
   ----------------------------- */

export default function WorksSection() {
  const [activeFilter, setActiveFilter] = useState<FilterValue>("All");

  // store refs to project cards (optional)
  const projectsRefs = useRef<Array<HTMLDivElement | null>>([]);

  // Cast imported JSON to typed array. This assumes the JSON shape matches Project[].
  // If TypeScript complains about importing JSON, see notes below.
  const projects = rawData as unknown as Project[];

  // Filter projects — NOTE: if your `stack` field is a CSV string like "React, Next",
  // use `.includes` after splitting to support multi-tag projects.
  const filteredProjects: Project[] =
    activeFilter === "All"
      ? projects
      : projects.filter((p) =>
          p.stack
            .split(",")
            .map((s) => s.trim())
            .includes(activeFilter),
        );

  useEffect(() => {
    // reset refs when filter changes
    projectsRefs.current = [];
  }, [activeFilter]);

  return (
    <section className="projects">
      <div className="container">
        {/* Filter buttons */}
        <div className="filters">
          {filters.map((filter) => (
            <button
              key={filter.value}
              className={
                activeFilter === filter.value ? "filter-active" : "filter-btn"
              }
              onClick={() => setActiveFilter(filter.value)}
            >
              {filter.label}
            </button>
          ))}
        </div>

        {/* Projects grid */}
        <div className="projects-grid">
          <AnimatePresence mode="wait">
            {filteredProjects.map((project, index) => (
              <motion.div
                key={project.id ?? project.title}
                className="project-card"
                initial={{ opacity: 0, y: 20 }}
                animate={{ opacity: 1, y: 0 }}
                exit={{ opacity: 0, y: -20 }}
                transition={{ duration: 0.25 }}
                ref={(el) => {
                  if (el) projectsRefs.current[index] = el;
                }}
              >
                <div className="project-image">
                  {/* Next.js Image accepts string paths (e.g. '/images/x.png') or imports */}
                  <Image
                    src={project.img}
                    alt={project.title}
                    width={600}
                    height={360}
                    className="project-img"
                  />
                </div>

                <div className="project-content">
                  <h3>{project.title}</h3>
                  <p>{project.description}</p>

                  <div className="project-meta">
                    {/* Tags */}
                    <div className="tags">
                      {project.stack
                        .split(",")
                        .map((tag) => tag.trim())
                        .map((tag, i) => (
                          <span key={i}>{tag}</span>
                        ))}
                    </div>

                    {/* Tech icons */}
                    <div className="tech-icons">
                      {(Array.isArray(project.icons)
                        ? project.icons
                        : project.icons
                          ? [project.icons]
                          : []
                      ).map((icon, i) => (
                        <div className="tech-icon" key={i}>
                          <Image
                            src={icon}
                            alt={`icon-${i}`}
                            width={20}
                            height={20}
                          />
                        </div>
                      ))}
                    </div>

                    {/* Links */}
                    <div className="links">
                      {project.demo && (
                        <a
                          href={project.demo}
                          target="_blank"
                          rel="noopener noreferrer"
                        >
                          <FontAwesomeIcon icon={faLink} className="icon" />
                        </a>
                      )}
                      {project.github && (
                        <a
                          href={project.github}
                          target="_blank"
                          rel="noopener noreferrer"
                        >
                          <FontAwesomeIcon icon={faGithub} className="icon" />
                        </a>
                      )}
                    </div>
                  </div>
                </div>
              </motion.div>
            ))}
          </AnimatePresence>
        </div>
      </div>
    </section>
  );
}
