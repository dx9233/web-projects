import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faSpotify } from "@fortawesome/free-brands-svg-icons";

type Album = {
  cover: string;
  title: string;
  date: string;
  link?: string;
};

type Props = {
  album: Album;
};

function AlbumCard({ album }: Props) {
  return (
    <div className="album-card">
      <img src={album.cover} alt={album.title} />

      <div className="info-row">
        <div className="info">
          <p>{album.title}</p>
          <span>{album.date}</span>
        </div>

        {album.link && (
          <div className="actions">
            <a href={album.link} target="_blank" rel="noopener noreferrer">
              <FontAwesomeIcon icon={faSpotify} />
            </a>
          </div>
        )}
      </div>
    </div>
  );
}

export default AlbumCard;