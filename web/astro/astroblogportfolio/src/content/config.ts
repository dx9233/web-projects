import { defineCollection, z } from "astro:content";

const blogCollection = defineCollection({
  schema: z.object({
    title: z.string(),
    description: z.string().optional(),
    image: z.string().optional(),
    category: z.string().optional(),
    pubDate: z.date(),
    tags: z.array(z.string()).optional(),
  }),
});

const portfolioCollection = defineCollection({
  schema: z.object({
    title: z.string(),
    description: z.string(),
    image: z.string(),
    year: z.number(),
    category: z.string(),
  }),
});

export const collections = {
  blog: blogCollection,
  works: portfolioCollection, 
};
