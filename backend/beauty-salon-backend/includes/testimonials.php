<?php

function Testimonials( string $title, string $discription ): string {
    return <<<HTML
    <section class = 'testimonials'>
    <h5>Testimonials</h5>
    <h2>What our Customers says...</h2>

    <div class = 'testimonial-card'>
    <div class = 'testimonial-shape'>
    <div></div>
    <div></div>
    <div style = 'height:100px;'></div>
    </div>
    <div class = 'testimonial-image'>
    <img src = 'https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e' alt = 'Customer' />
    </div>
    <div class = 'testimonial-content'>
    <h4>Leslie Alexander</h4>
    <small>Moncton, Canada</small>
    <h3>$title</h3>
    <p>$discription</p>
    </div>
    </div>

    <div class = 'testimonial-nav'>
    <button class = 'nav-btn'>&larr;
    </button>
    <button class = 'nav-btn active'>&rarr;
    </button>
    </div>
    </section>
    HTML;
}
?>

<style>
/* ---------- TESTIMONIAL ---------- */

.testimonials {
    text-align: center;
    padding: 80px 20px;
}

.testimonials h5 {
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 12px;
    color: #c0a3c0;
    margin-bottom: 10px;
}

.testimonials h2 {
    font-size: 28px;
    font-weight: 700;
    color: #1b1b1b;
    margin-bottom: 50px;
}

.testimonial-card {
    position: relative;
    background-color: #432a4b;
    color: #fff;
    border-radius: 25px;
    padding: 60px;
    max-width: 1000px;
    margin: 0 auto 40px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 60px;
}

.testimonial-shape {
    position: absolute;
    left: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.testimonial-shape div {
    width: 30px;
    height: 80px;
    background: #fff;
    border-radius: 15px;
}

.testimonial-image {
    position: relative;
    z-index: 1;
    width: 130px;
    height: 130px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid #fff;
    margin-left: 90px;
    flex-shrink: 0;
}

.testimonial-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.testimonial-content {
    text-align: left;
    max-width: 600px;
}

.testimonial-content h4 {
    font-size: 16px;
    font-weight: 600;
    margin: 0;
}

.testimonial-content small {
    color: #cbbcd2;
}

.testimonial-content h3 {
    font-size: 20px;
    font-weight: 700;
    margin: 15px 0 10px;
}

.testimonial-content p {
    font-size: 14px;
    line-height: 1.6;
    color: #d9cde1;
}

.testimonial-nav {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
}

.nav-btn {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: none;
    background-color: #fff;
    color: #432a4b;
    font-size: 18px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.nav-btn:hover {
    background-color: #432a4b;
    color: #fff;
}

.nav-btn.active {
    background-color: #432a4b;
    color: #fff;
}

@media ( max-width: 768px ) {
    .testimonial-card {
        flex-direction: column;
        text-align: center;
        padding: 40px 20px;
        gap: 30px;
    }

    .testimonial-shape {
        display: none;
    }

    .testimonial-image {
        margin-left: 0;
    }

    .testimonial-content {
        text-align: center;
    }
}
</style>