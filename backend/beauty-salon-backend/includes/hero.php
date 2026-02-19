<?php

function Hero( string $title, string $subtitle ): string {
    return <<<HTML
    <section class = 'hero'>
    <div class = 'hero-content'>
    <p class = 'category'>Hair Salon, Masseuse, Beauty Salon</p>
    <h1>$title</h1>
    <p class = 'desc'>$subtitle</p>

    <form class = 'search-box'>
    <input type = 'text' placeholder = 'Book your services...'>
    <input type = 'text' placeholder = 'Where'>
    <button type = 'submit'>Search</button>
    </form>
    </div>
    </section>
    HTML;
}
?>

<style>
/* ---------- HERO SECTION ---------- */
.hero {
    position: relative;
    background-color: #3c2231;
    color: #fff;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 100px 60px;
    width: 100%;
    height: 100vh;
}

.hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url( 'https://w0.peakpx.com/wallpaper/255/267/HD-wallpaper-elegant-girl-brown-hair-makeup-beautiful-girl-black-dress.jpg' ) center/cover no-repeat;
    opacity: 0.4;
}

.hero-content {
    position: relative;
    max-width: 600px;
    z-index: 2;
}

.hero-content p.category {
    text-transform: uppercase;
    color: #d9bcae;
    font-size: 13px;
    margin-bottom: 8px;
    letter-spacing: 1px;
}

.hero-content h1 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 20px;
    line-height: 1.2;
}

.hero-content p.desc {
    color: #c9c9c9;
    font-size: 15px;
    margin-bottom: 40px;
    max-width: 480px;
}

/* ---------- SEARCH FORM ---------- */
.search-box {
    display: flex;
    background: #fff;
    border-radius: 50px;
    overflow: hidden;
    box-shadow: 0 4px 16px rgba( 0, 0, 0, 0.1 );
    max-width: 600px;
}

.search-box input {
    flex: 1;
    border: none;
    padding: 15px 20px;
    outline: none;
    font-size: 15px;
    color: #555;
}

.search-box input+input {
    border-left: 1px solid #ddd;
}

.search-box button {
    background: #b46b7a;
    color: #fff;
    border: none;
    padding: 0 30px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s;
}

.search-box button:hover {
    background: #9b5f74;
}

/* ---------- RESPONSIVE ---------- */
@media ( max-width: 768px ) {
    header {
        flex-direction: column;
        gap: 12px;
    }

    nav ul {
        gap: 15px;
    }

    .hero {
        padding: 80px 30px;
        text-align: center;
    }

    .hero-content h1 {
        font-size: 36px;
    }

    .search-box {
        flex-direction: column;
        border-radius: 20px;
    }

    .search-box input+input {
        border-left: none;
        border-top: 1px solid #ddd;
    }

    .search-box button {
        width: 100%;
        border-radius: 0 0 20px 20px;
    }
}
</style>