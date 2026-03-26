import { FC, ReactNode } from "react";
import "./HomeLayout.css";

type HomeLayoutProps = {
  children: ReactNode;
};

const HomeLayout: FC<HomeLayoutProps> = ({ children }) => {
  return (
    <div className="home-layout">
      <main>{children}</main>
    </div>
  );
};

export default HomeLayout;
