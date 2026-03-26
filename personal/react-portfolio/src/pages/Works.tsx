import React, { useEffect } from "react";
import MusicProjects from "../modules/MusicProjects";

function Works() {
  useEffect(() => {
    document.title = "Dmitry Lean | Works";
  }, []);

  return <MusicProjects />;
}

export default Works;
