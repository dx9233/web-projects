import ServiceSection from "@/components/ServiceSection";
import { Metadata } from "next";

export const metadata: Metadata = {
  title: "Alex Reyes | Projects",
};

export default function ProjectsPage() {
  return (
    <main>
      <ServiceSection />
    </main>
  );
}
