import fs from "fs";
import path from "path";
import matter from "gray-matter";
import { remark } from "remark";
import html from "remark-html";

type Props = {
  params: Promise<{
    slug: string;
  }>;
};

export default async function NewsPost({ params }: Props) {
  const { slug } = await params; 

  const filePath = path.join(
    process.cwd(),
    "content/news",
    `${slug}.md`
  );

  const fileContent = fs.readFileSync(filePath, "utf-8");

  const { content} = matter(fileContent);

  const processedContent = await remark().use(html).process(content);

  const contentHtml = processedContent.toString();

  return (
    <article style={{ padding: "40px" }}>
      <div className="container">
        <div dangerouslySetInnerHTML={{ __html: contentHtml }} />
        </div>
    </article>
  );
}