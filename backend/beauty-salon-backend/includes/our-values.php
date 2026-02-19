<section class="values">
  <div class="container">
    <p class="subtitle">Our Values</p>
    <h2 class="title">The work values we thrive for</h2>

    <div class="values-list">
      <div class="value-item">
        <div class="icon-box">
          <img src="../assets/svg/experts.svg" alt="Beauty Experts">
        </div>
        <div class="text-box">
          <h3>Beauty Experts</h3>
          <p>
            The majority have suffered alteration in some form, buying to injected humour,
            or randomised words which desktop publishing packages.
          </p>
        </div>
      </div>

      <div class="value-item">
        <div class="icon-box">
          <img src="../assets/svg/services.svg" alt="Great Services">
        </div>
        <div class="text-box">
          <h3>Great Services</h3>
          <p>
            The majority have suffered alteration in some form, buying to injected humour,
            or randomised words which desktop publishing packages.
          </p>
        </div>
      </div>

      <div class="value-item">
        <div class="icon-box">
          <img src="../assets/svg/genuine.svg" alt="100% Genuine">
        </div>
        <div class="text-box">
          <h3>100% Genuine</h3>
          <p>
            The majority have suffered alteration in some form, buying to injected humour,
            or randomised words which desktop publishing packages.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .values {
  background-color: #fff;
  padding: 100px 20px;
}

.values .container {
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
}

.values .subtitle {
  text-transform: uppercase;
  font-size: 13px;
  letter-spacing: 2px;
  color: #c98199;
  margin-bottom: 8px;
}

.values .title {
  font-size: 32px;
  margin-bottom: 60px;
  color: #1e1e1e;
  font-weight: 600;
}

.values-list {
  display: flex;
  flex-direction: column;
  gap: 40px;
  text-align: left;
}

.value-item {
  display: flex;
  align-items: flex-start;
  gap: 24px;
}

.value-item .icon-box {
  border: 1px solid #e9cfd7;
  border-radius: 8px;
  padding: 16px;
  flex-shrink: 0;
}

.value-item .icon-box img {
  width: 48px;
  height: 48px;
}

.value-item .text-box h3 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 6px;
  color: #1a1a1a;
}

.value-item .text-box p {
  color: #666;
  font-size: 15px;
  line-height: 1.6;
  max-width: 650px;
}

@media (max-width: 768px) {
  .value-item {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .value-item .text-box p {
    max-width: none;
  }
}
</style>