import fs from "fs";
import path from "path";
import matter from "gray-matter";
import { remark } from "remark";
import html from "remark-html";

type Params = {
  params: {
    slug: string;
  };
};

export default async function NewsPost({ params }: Params) {
  const filePath = path.join(
    process.cwd(),
    "content/news",
    `${params.slug}.md`,
  );

  const fileContent = fs.readFileSync(filePath, "utf-8");

  const { content, data } = matter(fileContent);

  const processedContent = await remark().use(html).process(content);

  const contentHtml = processedContent.toString();

  return (
    <article style={{ padding: "40px" }}>
      <h1>{data.title}</h1>
      <div dangerouslySetInnerHTML={{ __html: contentHtml }} />
    </article>
  );
}
