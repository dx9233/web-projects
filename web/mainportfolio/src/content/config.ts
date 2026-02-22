import { defineCollection, z } from "astro:content";

const blog = defineCollection({
  type: "content",
  schema: z.object({
    title: z.string(),
    description: z.string().optional(),
    date: z.coerce.date(),
    categories: z.union([z.string(), z.array(z.string())]).optional(),
    image: z.string().optional(),
  }),
});

const works = defineCollection({
  type: "data",
  schema: z.object({
    title: z.string(),
    description: z.string().optional(),
    img: z.string().optional(),
    stack: z.string().optional(),
    github: z.string().optional(),
    demo: z.string().optional(),
  }),
});

export const collections = { blog, works };
