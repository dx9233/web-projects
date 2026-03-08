export const aboutData = {
  imageSrc: "/images/avatar.jpg",
  imageAlt: "Mi foto",
  title: "Acerca de mí",
  subtitle: "Desarrollador De Software",
  paragraphs: [
    "Me dedico al desarrollo web desde 2015.",
    "Me encantan Astro y TypeScript.",
  ],
  contactLink: {
    href: "#",
    text: "Contactar",
  },
  projectLink: {
    href: "#",
    text: "Contactar",
  },
  musicLink: {
    href: "#",
    text: "Contactar",
  },
};

export const skillsData = {
  title: "Навыки",
  skills: [
    { name: "HTML", icon: "/icons/html.svg" },
    { name: "CSS", icon: "/icons/css.svg" },
    { name: "JavaScript", icon: "/icons/js.svg" },
  ],
};

import type { CollectionEntry } from "astro:content";

export function extractCategories(post: CollectionEntry<"blog">): string[] {
  const c = (post.data as any)?.categories;
  if (!c) return [];
  if (Array.isArray(c)) return c.map(String);
  if (typeof c === "string") return [c];
  return [];
}
