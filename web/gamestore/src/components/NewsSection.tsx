import Image from "next/image";
import Link from "next/link";
import { getAllPosts } from "@/lib/getPosts";
import "./NewsSection.css";

export default function NewsSection() {
  const posts = getAllPosts();

  return (
    <section className="news-section">
      <div className="container">
        <h2 className="section-title">Latest News</h2>

        <div className="cards">
          {posts.map((post) => (
            <div className="card" key={post.slug}>
              <div className="card-image">
                <Image
                  src={post.image}
                  alt={post.title}
                  width={250}
                  height={100}
                />
              </div>

              <div className="card-body">
                <h3>{post.title}</h3>
                <p>{post.description}</p>

                <Link href={`/news/${post.slug}`}>
                  <button className="card-btn">Open the Post</button>
                </Link>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
