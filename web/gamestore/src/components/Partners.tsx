"use client";

import Image from "next/image";
import "./Partners.css";

const Partners: React.FC = () => {
  return (
    <section className="partners">
      <div className="container">
        <Image
          src="/assets/svg/black/ubisoft.svg"
          alt="Ubisoft"
          className="Ubisoft"
          width={180}
          height={50}
        />
        <Image
          src="/assets/svg/black/xbox.svg"
          alt="XBOX"
          className="Xbox"
          width={180}
          height={50}
        />
        <Image
          src="/assets/svg/black/playstation.svg"
          alt="Playstation"
          className="Playstation"
          width={180}
          height={50}
        />
        <Image
          src="/assets/svg/black/activision.svg"
          alt="Activision"
          className="Activision"
          width={180}
          height={50}
        />
        <Image
          src="/assets/svg/black/ea.svg"
          alt="EA Games"
          className="EA Games"
          width={180}
          height={50}
        />
      </div>
      *
    </section>
  );
};

export default Partners;
