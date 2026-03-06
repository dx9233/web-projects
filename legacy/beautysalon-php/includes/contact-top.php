    <section class = 'contact-top'>
    <p>GET IN TOUCH WITH US</p>
    <h2>We Are Ready To Assist You In 24x7</h2>
    </section>

    <section class = 'contact-main'>
    <div class = 'contact-image'>
    <img src = '../assets/img/contact-photo.png' alt = 'Office or store interior' />
    </div>

    <div class = 'contact-info'>
    <small>Get In Touch!</small>
    <h3>We are here to help you always...</h3>
    <p>
    There are many variations of passages of Lorem Ipsum available, but the
    majority have suffered alteration in some form, by injected humour or
    randomised words which don't look even slightly believable.
    </p>

    <div class = 'contact-item'>
    <div class = 'icon'>📍</div>
    <div>
    <span>Visit Us :</span>
    <strong>Mariendalsvej 50D 2 2000 Frederiksberg</strong>
    </div>
    </div>

    <div class = 'contact-item'>
    <div class = 'icon'>✉️</div>
    <div>
    <span>Drop Us :</span>
    <strong>support@beautyness.com</strong>
    </div>
    </div>

    <div class = 'contact-item'>
    <div class = 'icon'>📞</div>
    <div>
    <span>Call Us :</span>
    <strong>1-800-123-9999</strong>
    </div>
    </div>
    </div>
    </section>

<style>
/* ===  == CONTACT TOP ===  == */
.contact-top {
    background-color: #422c3a;
    color: #fff;
    text-align: center;
    padding: 80px 20px;
}

.contact-top p {
    letter-spacing: 2px;
    font-size: 12px;
    text-transform: uppercase;
    opacity: 0.7;
    margin-bottom: 10px;
    color: white;
}

.contact-top h2 {
    font-size: 32px;
    font-weight: 700;
    line-height: 1.3;
    max-width: 600px;
    margin: 0 auto;
}

.contact-main {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 60px;
    padding: 100px 60px;
    max-width: 1200px;
    margin: -50px auto 0 auto;
    border-radius: 12px;
    box-shadow: 0 8px 30px rgba( 0, 0, 0, 0.05 );
    position: relative;
}

.contact-image {
    position: relative;
    flex: 1;
    max-width: 500px;
}

.contact-image::before {
    content: '';
    position: absolute;
    top: -20px;
    left: -20px;
    width: 500px;
    height: 565px;
    background-color: #e7d4aa;
    z-index: 0;
    border-radius: 4px;
}

.contact-image img {
    width: 100%;
    border-radius: 4px;
    position: relative;
    z-index: 1;
    box-shadow: 0 4px 12px rgba( 0, 0, 0, 0.1 );
}

.contact-info {
    flex: 1;
    max-width: 480px;
}

.contact-info small {
    font-size: 12px;
    text-transform: uppercase;
    color: #a05b82;
    letter-spacing: 1.5px;
}

.contact-info h3 {
    font-size: 28px;
    font-weight: 700;
    margin-top: 10px;
    margin-bottom: 15px;
}

.contact-info p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 30px;
    font-size: 15px;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 20px;
}

.contact-item .icon {
    width: 38px;
    height: 38px;
    border: 1px solid #ccc;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    color: #a05b82;
}

.contact-item div span {
    display: block;
    font-size: 13px;
    color: #999;
}

.contact-item div strong {
    font-size: 15px;
    color: #2c2c2c;
}

@media ( max-width: 992px ) {
    .contact-main {
        flex-direction: column;
        text-align: center;
        padding: 60px 30px;
        gap: 40px;
    }

    .contact-image::before {
        display: none;
    }

    .contact-item {
        justify-content: center;
    }
}
</style>