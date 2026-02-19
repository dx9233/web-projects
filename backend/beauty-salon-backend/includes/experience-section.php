 <section class="experience-section">
    <h2>We are Experienced in making you very Beautiful</h2>
    <p>Lorem ipsum dolor sit amet consectetur. Eu quis enim tempor et proin neque.</p>

    <div class="gallery">
      <div class="item-1">
        <img src="https://c4.wallpaperflare.com/wallpaper/3/59/783/anton-harris-women-car-women-with-cars-wallpaper-preview.jpg" alt="Facial treatment">
      </div>
      <div class="item-2">
        <img src="https://thumbs.dreamstime.com/b/beauty-fashion-brunette-girl-gladiolus-flowers-glamour-sexy-woman-perfect-violet-trendy-makeup-face-contouring-gradient-lips-128100845.jpg" alt="Hair styling">
      </div>
      <div class="item-3">
        <img src="https://c4.wallpaperflare.com/wallpaper/650/105/110/laura-vandervoort-glamour-women-luxury-women-with-cars-wallpaper-preview.jpg" alt="Spa massage">
      </div>
      <div class="item-4">
        <img src="https://c4.wallpaperflare.com/wallpaper/30/361/89/women-model-lips-blue-eyes-wallpaper-preview.jpg" alt="Massage therapy">
      </div>
      <div class="item-5">
        <img src="https://c4.wallpaperflare.com/wallpaper/948/1012/947/women-blonde-lips-face-wallpaper-preview.jpg" alt="Skincare">
      </div>
    </div>
  </section>

  <style>
    .experience-section {
      padding: 80px 20px;
      text-align: center;
      max-width: 1200px;
      margin: 0 auto;
    }

    .experience-section h2 {
      font-size: 28px;
      font-weight: 700;
      color: #2a1c27;
      margin-bottom: 10px;
    }

    .experience-section p {
      color: #666;
      font-size: 15px;
      max-width: 600px;
      margin: 0 auto 50px;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(2, 230px);
      grid-gap: 16px;
    }

    .gallery img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 14px;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .gallery img:hover {
      transform: scale(1.03);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .gallery .item-1 {
      grid-column: 1 / 2;
      grid-row: 1 / 3;
    }

    .gallery .item-2 { grid-column: 2 / 3; grid-row: 1 / 2; }
    .gallery .item-3 { grid-column: 3 / 4; grid-row: 1 / 2; }
    .gallery .item-4 { grid-column: 2 / 3; grid-row: 2 / 3; }
    .gallery .item-5 { grid-column: 3 / 4; grid-row: 2 / 3; }

    @media (max-width: 900px) {
      .gallery {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: auto;
      }

      .gallery .item-1 {
        grid-column: 1 / 3;
        grid-row: auto;
        height: 260px;
      }
    }

    @media (max-width: 600px) {
      .gallery {
        grid-template-columns: 1fr;
      }

      .gallery img {
        height: 220px;
      }
    }
    </style>