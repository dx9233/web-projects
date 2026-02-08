// import AlbumsSection from "@/components/AlbumsSection";
// import MusicProjects from "@/components/MusicProjects";
import WorksSection from "@/components/WorksSection";
import { Metadata } from "next";

export const metadata: Metadata = {
  title: "Alex Reyes | Projects",
};

export default function ProjectsPage() {
  return (
    <main>
      <WorksSection />
      {/* <AlbumsSection />
      <MusicProjects /> */}
    </main>
  );
}
