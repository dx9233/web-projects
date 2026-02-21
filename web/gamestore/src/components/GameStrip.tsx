"use client";

import Image from "next/image";
import "./GameStrip.css";

const GameStrip: React.FC = () => {
  return (
    <div className="games-strip">
      <Image
        src="/assets/img/game_1.png"
        alt="Witcher: Wild Hunt"
        width={267}
        height={400}
      />
      <Image
        src="/assets/img/game_2.png"
        alt="Far Cry 4"
        width={267}
        height={400}
      />
      <Image
        src="/assets/img/game_3.png"
        alt="Uncharted 4"
        width={267}
        height={400}
      />
      <Image
        src="/assets/img/game_4.png"
        alt="Biomutant"
        width={267}
        height={400}
      />
      <Image
        src="/assets/img/game_5.png"
        alt="Mortal Kombat: Legends"
        width={267}
        height={400}
      />
      <Image
        src="/assets/img/game_6.png"
        alt="Assassin Creed: Vallhalla"
        width={267}
        height={400}
      />
    </div>
  );
};

export default GameStrip;
