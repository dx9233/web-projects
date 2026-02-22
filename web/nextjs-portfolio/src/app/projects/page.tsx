// import PageToggle from "@/components/PageToggle";
import WorksSection from "@/components/WorksSection";
import { Metadata } from "next";

export const metadata: Metadata = {
  title: "Alex Reyes | Projects",
};

export default function ProjectsPage() {
  return (
    <main className="content">
      <div className="conteiner">
        <WorksSection />
      </div>
    </main>
  );
}
