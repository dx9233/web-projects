export const aboutData = {
  imageSrc: "/images/avatar.jpg",
  imageAlt: "Моё фото",
  title: "Обо мне",
  subtitle: "Frontend-разработчик",
  paragraphs: [
    "Занимаюсь веб-разработкой с 2015 года.",
    "Люблю Astro и TypeScript.",
  ],
  contactLink: {
    href: "https://t.me/dg404_bot",
    text: "Связаться",
  },
  projectLink: {
    href: "https://t.me/dg404_bot",
    text: "Связаться",
  },
  musicLink: {
    href: "https://t.me/dg404_bot",
    text: "Связаться",
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
