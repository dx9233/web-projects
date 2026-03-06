<template>
  <section class="about-intro">
    <p class="subtitle">Short story about us</p>
    <h2 class="title">The big story behind, our beautyness center</h2>
    <button class="btn">Contact Us</button>
  </section>
</template>

<style scoped>
.about-intro {
  background-color: #3c243b;
  color: #eed9b7;
  text-align: center;
  padding: 120px 20px;
}

.about-intro .subtitle {
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 13px;
  color: #d6a7b8;
  margin-bottom: 10px;
}

.about-intro .title {
  font-size: 42px;
  line-height: 1.3;
  max-width: 700px;
  margin: 0 auto 40px auto;
  font-weight: 600;
}

.about-intro .btn {
  background-color: #d78aa1;
  border: none;
  color: #fff;
  padding: 14px 36px;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.about-intro .btn:hover {
  background-color: #eaa7bd;
}
</style>
