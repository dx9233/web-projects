import HomeLayout from "@/layouts/HomeLayout";
import Home from "./home/page";

export const metadata = {
  title: "Alex Reyes | Home",
};

export default function Page() {
  return (
    <HomeLayout>
      <Home />
    </HomeLayout>
  );
}
