import NewsSection from "@/components/NewsSection";
import { Metadata } from "next";

export const metadata: Metadata = {
  title: "Alex Reyes | Home",
};

export default function HeroPage() {
  return (
    <main>
      <NewsSection />
    </main>
  );
}
