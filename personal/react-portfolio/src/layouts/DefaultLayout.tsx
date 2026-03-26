import { FC, ReactNode } from "react";
import "./DefaultLayout.css";

type DefaultLayoutProps = {
  children: ReactNode;
};

const DefaultLayout: FC<DefaultLayoutProps> = ({ children }) => {
  return (
    <div className="default-layout">
      <main>{children}</main>
    </div>
  );
};

export default DefaultLayout;
