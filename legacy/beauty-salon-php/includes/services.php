<?php

function Services( string $title, string $subtitle ): string {
    return <<<HTML
    <section class = 'services-section'>
    <div class = 'container'>
    <h3>Our Services</h3>
    <h2>$title</h2>
    <p class = 'subtitle'>$subtitle</p>

    <div class = 'services-grid'>
    <div class = 'card'>
    <img src = 'https://w0.peakpx.com/wallpaper/399/271/HD-wallpaper-%E1%83%9A-model-makeup-face-hand.jpg' alt = 'Salon'>
    <div class = 'card-content'>
    <div class = 'rating'>
    <span>⭐ 4.5</span>
    <span>104 reviews</span>
    </div>
    <h4>Salon Name</h4>
    <p class = 'address'>Brookpark Ext, 27085, North Olmsted, 44070</p>
    <a href = '#' class = 'btn-book'>BOOK NOW</a>
    </div>
    </div>

    <div class = 'card'>
    <img src = 'https://wallpapercrafter.com/th800/168415-model-photography-face-makeup.jpg' alt = 'Salon'>
    <div class = 'card-content'>
    <div class = 'rating'>
    <span>⭐ 4.5</span>
    <span>104 reviews</span>
    </div>
    <h4>Salon Name</h4>
    <p class = 'address'>2267 Main st, Fort Myers, 33901</p>
    <a href = '#' class = 'btn-book'>BOOK NOW</a>
    </div>
    </div>

    <div class = 'card'>
    <img src = 'https://wallpapercrafter.com/th800/166540-model-girl-hat-makeup.jpg' alt = 'Deluxe Room'>
    <div class = 'card-content'>
    <div class = 'rating'>
    <span>⭐ 4.5</span>
    <span>104 reviews</span>
    </div>
    <h4>Deluxe Room</h4>
    <p class = 'address'>2267 Main st, Fort Myers, 33901</p>
    <a href = '#' class = 'btn-book'>BOOK NOW</a>
    </div>
    </div>

    <div class = 'card'>
    <img src = 'https://c4.wallpaperflare.com/wallpaper/769/192/6/look-face-makeup-bow-wallpaper-preview.jpg' alt = 'Meeting Room'>
    <div class = 'card-content'>
    <div class = 'rating'>
    <span>⭐ 4.5</span>
    <span>104 reviews</span>
    </div>
    <h4>Meeting Room</h4>
    <p class = 'address'>2267 Main st, Fort Myers, 33901</p>
    <a href = '#' class = 'btn-book'>BOOK NOW</a>
    </div>
    </div>
    </div>
    </div>
    </section>
    HTML;
}
?>

<style>
/* ---------- SERVICES ---------- */

.services-section {
    background: #fff;
    text-align: center;
    padding: 80px 60px;
    max-width: 1440px;
    margin: 0 auto;
}

.services-section h3 {
    color: #9b5f74;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 14px;
    margin-bottom: 8px;
}

.services-section h2 {
    font-size: 32px;
    font-weight: 700;
    color: #3a2a32;
    margin-bottom: 12px;
}

.services-section p.subtitle {
    color: #777;
    margin-bottom: 50px;
    font-size: 15px;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat( auto-fit, minmax( 300px, 4fr ) );
    gap: 25px;
    flex-wrap: wrap;
}

.card {
    background: #fff;
    border: 1px solid #eee;
    border-radius: 12px;
    max-height: 535px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba( 0, 0, 0, 0.05 );
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
    transform: translateY( -6px );
    box-shadow: 0 10px 20px rgba( 0, 0, 0, 0.1 );
}

.card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    display: block;
}

.card-content {
    padding: 18px 20px 22px;
    text-align: left;
}

.rating {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
    color: #9b5f74;
    margin-bottom: 8px;
}

.rating span:last-child {
    color: #333;
    font-weight: 600;
}

.card h4 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 8px;
}

.address {
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    gap: 5px;
}

.address::before {
    content: '📍';
    font-size: 14px;
    color: #9b5f74;
}

.btn-book {
    display: block;
    width: 100%;
    text-align: center;
    padding: 10px 0;
    background: #fff;
    color: #9b5f74;
    font-weight: 600;
    border: 1px solid #9b5f74;
    border-radius: 6px;
    text-decoration: none;
    transition: 0.3s;
}

.btn-book:hover {
    background: #9b5f74;
    color: #fff;
}

/* Responsive */
@media ( max-width: 768px ) {
    .services-section {
        padding: 60px 20px;
    }

    .card {
        width: 100%;
        max-width: 360px;
    }
}
</style>