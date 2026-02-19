<?php

function Subscribe( string $title, string $discription ): string {
    return <<<HTML
    <section class = 'subscribe-section'>
    <div class = 'subscribe-box'>
    <img src = 'https://wallpapercave.com/wp/wp14267504.jpg' alt = 'Hair Salon' />
    <div class = 'subscribe-content'>
    <h2>$title</h2>
    <p>
    $discription
    </p>
    <form class = 'subscribe-form'>
    <input type = 'email' placeholder = 'Enter your mail' required />
    <button type = 'submit'>Subscribe</button>
    </form>
    </div>
    </div>
    </section>
    HTML;
}
?>

<style>
/* ---------- SUBSCRIBE SECTION ---------- */
.subscribe-section {
    background: #fff;
    padding: 80px 20px;
    display: flex;
    justify-content: center;
}

.subscribe-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #f9f9fb;
    border-radius: 16px;
    padding: 40px 50px;
    max-width: 1100px;
    width: 100%;
    box-shadow: 0 5px 20px rgba( 0, 0, 0, 0.05 );
    gap: 40px;
}

.subscribe-box img {
    width: 320px;
    height: auto;
    border-radius: 12px;
    object-fit: cover;
}

.subscribe-content {
    flex: 1;
}

.subscribe-content h2 {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #2a1c27;
}

.subscribe-content p {
    font-size: 15px;
    color: #666;
    margin-bottom: 24px;
}

.subscribe-form {
    display: flex;
    border: 1px solid #ddd;
    border-radius: 30px;
    overflow: hidden;
    background: #fff;
    max-width: 420px;
}

.subscribe-form input {
    flex: 1;
    border: none;
    outline: none;
    padding: 14px 18px;
    font-size: 14px;
}

.subscribe-form button {
    background: #000;
    color: #fff;
    border: none;
    padding: 0 26px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s;
}

.subscribe-form button:hover {
    background: #9b5f74;
}

@media ( max-width: 900px ) {
    .subscribe-box {
        flex-direction: column;
        text-align: center;
        padding: 30px;
    }

    .subscribe-box img {
        width: 100%;
        max-width: 400px;
    }

    .subscribe-form {
        margin: 0 auto;
    }
}
</style>