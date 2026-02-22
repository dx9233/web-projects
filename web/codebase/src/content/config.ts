import { defineCollection, z } from "astro:content";

const articlesCollection = defineCollection({
  schema: z.object({
    title: z.string(),
    description: z.string().optional(),
    category: z.string().optional(),
  }),
});

const newsCollection = defineCollection({
  schema: z.object({
    title: z.string(),
    description: z.string().optional(),
    category: z.string().optional(),
    pubDate: z.date(),
  }),
});

const exampleCollection = defineCollection({
  schema: z.object({
    title: z.string(),
    image: z.string(),
  }),
});

export const collections = {
  articles: articlesCollection,
  news: newsCollection,
  example: exampleCollection,
};
