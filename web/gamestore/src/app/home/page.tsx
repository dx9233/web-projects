import Hero from "@/components/Hero";
import NewsSection from "@/components/NewsSection";
import Partners from "@/components/Partners";
import Subscribe from "@/components/Subscribe";
import { Metadata } from "next";

export const metadata: Metadata = {
  title: "Alex Reyes | Home",
};

export default function HeroPage() {
  return (
    <main>
      <Hero />
      <Partners />
      <NewsSection />
      <Subscribe />
    </main>
  );
}
