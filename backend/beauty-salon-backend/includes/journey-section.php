<section class="journey-section">
  <div class="journey-container">
    <div class="journey-text">
      <small>WHAT INCLUDES?</small>
      <h2>The start of the journey</h2>
      <p>
        ServiceMarket.dk was founded in 2021 by two young entrepreneurs who saw a problem
        with the fragmented service industry in Denmark. There were thousands of small
        businesses offering services, but it was difficult for consumers to find them and know
        which ones to choose.
      </p>

      <div class="methodology">
        <p><strong>The Assessment Stage</strong><br>
          The point of using Lorem Ipsum is that it has a more-or-less normal letters.
        </p>
        <p><strong>The Initialisation Stage</strong><br>
          The point of using Lorem Ipsum is that it has a more-or-less normal letters.
        </p>
        <p><strong>The Treatment Stage</strong><br>
          The point of using Lorem Ipsum is that it has a more-or-less normal letters.
        </p>
      </div>
    </div>

    <div class="journey-video">
      <div class="video-wrapper">
        <img src="https://w0.peakpx.com/wallpaper/141/99/HD-wallpaper-blonde-beauty-lovely-girl-model-woman-sexy-beaut.jpg" alt="Treatment session">
        <div class="play-btn">&#9658;</div>
      </div>
    </div>
  </div>
</section>

<style>
  .journey-section {
  background: #fff;
  padding: 100px 20px;
}

.journey-container {
  max-width: 1100px;
  margin: 0 auto;
  display: flex;
  align-items: flex-start;
  gap: 60px;
  flex-wrap: wrap;
}

.journey-text {
  flex: 1 1 400px;
}

.journey-text small {
  display: block;
  color: #a47280;
  font-weight: 600;
  text-transform: uppercase;
  font-size: 13px;
  margin-bottom: 10px;
}

.journey-text h2 {
  font-size: 28px;
  margin-bottom: 20px;
  color: #2d1f24;
}

.journey-text p {
  color: #6e5d5f;
  line-height: 1.7;
  margin-bottom: 20px;
}

.methodology p {
  position: relative;
  padding-left: 30px;
}

.methodology p::before {
  content: "✔";
  position: absolute;
  left: 0;
  color: #a47280;
}

.journey-video {
  flex: 1 1 400px;
}

.video-wrapper {
  position: relative;
  display: inline-block;
}

.video-wrapper img {
  width: 100%;
  border-radius: 8px;
  box-shadow: 0 4px 25px rgba(0,0,0,0.08);
}

.play-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(60, 36, 48, 0.9);
  color: #fff;
  font-size: 24px;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}
</style>