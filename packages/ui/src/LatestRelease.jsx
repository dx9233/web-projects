// src/components/LatestRelease.jsx
import "./LatestRelease.css";

function LatestRelease() {
  return (
    <section className="latest">
      <h2>Latest Release</h2>
      <div className="release-card">
        <img src="/assets/img/methlab.jpg" alt="Meth Lab" />
        <div className="release-info">
          <h3>Meth Lab 3: The Rehab</h3>
          <span>2022</span>
          <a
            href="https://open.spotify.com/"
            target="_blank"
            rel="noopener noreferrer"
            className="listen-link"
          >
            Listen on Spotify
          </a>
        </div>
      </div>
    </section>
  );
}

export default LatestRelease;
