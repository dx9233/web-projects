
    <section class = 'services-section'>
    <div class = 'nav-arrow left'>&#8592;
    </div>

    <div class = 'services-container'>
    <div class = 'service-item'>
    <div class = 'icon-bg'>
    <img src = '../assets/img/beautician 1.png' alt = 'Makeup artist icon' />
    </div>
    <span>Makeup-artist</span>
    </div>

    <div class = 'service-item'>
    <div class = 'icon-bg'>
    <img src = '../assets/img/facial-treatment 1.png' alt = 'Wellness center icon' />
    </div>
    <span>Wellnesscenter</span>
    </div>

    <div class = 'service-item'>
    <div class = 'icon-bg'>
    <img src = '../assets/img/scissor 1.png' alt = 'Barber salon icon' />
    </div>
    <span>Barbersalon</span>
    </div>

    <div class = 'service-item'>
    <div class = 'icon-bg'>
    <img src = '../assets/img/relax.png' alt = 'Hair salon icon' />
    </div>
    <span>Frisørsalon</span>
    </div>

    <div class = 'service-item'>
    <div class = 'icon-bg'>
    <img src = '../assets/img/massage.png' alt = 'Massage clinic icon' />
    </div>
    <span>Massageklinik</span>
    </div>

    <div class = 'service-item'>
    <div class = 'icon-bg'>
    <img src = '../assets/img/foot-massage.png' alt = 'Foot therapist icon' />
    </div>
    <span>Fodterapeut</span>
    </div>
    </div>

    <div class = 'nav-arrow right'>&#8594;
    </div>
    </section>

<style>
.services-section {
  background: #fff;
    padding: 60px 0;
    text-align: center;
    position: relative;
}

.services-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 50px;
    overflow: hidden;
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 80px;
    position: relative;
}

.service-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 15px;
    transition: transform 0.3s ease;
    cursor: pointer;
}

.service-item:hover {
    transform: translateY( -5px );
}

.icon-bg {
    background-color: #fff6e9;
    border-radius: 50%;
    width: 90px;
    height: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 5px rgba( 0, 0, 0, 0.05 );
}

.icon-bg img {
    width: 96px;
    height: 96px;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.service-item:hover img {
    transform: scale( 1.1 );
}

.service-item span {
    font-size: 15px;
    color: #3b2b3d;
    font-weight: 500;
}

/* Arrows */
.nav-arrow {
    position: absolute;
    top: 50%;
    transform: translateY( -50% );
    background: #fff;
    border: 1px solid #ccc;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.nav-arrow:hover {
    background: #a05b82;
    color: #fff;
    border-color: #a05b82;
}

.nav-arrow.left {
    left: 30px;
}

.nav-arrow.right {
    right: 30px;
}

@media ( max-width: 768px ) {
    .services-container {
        flex-wrap: wrap;
        padding: 0 20px;
        gap: 25px;
    }
    .nav-arrow {
        display: none;
    }
}
</style>