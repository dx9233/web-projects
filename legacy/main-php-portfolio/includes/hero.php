<?php

class Hero {
    private $data;

    public function __construct( $data = [] ) {
        $this->data = array_merge( [
            'name' => 'Dmitry',
            'title' => 'Software Developer',
            'specializations' => 'Fullstack / Mobile / GameDev',
            'background_image' => '/assets/img/background.jpg',
            'buttons' => []
        ], $data );
    }

    public function render() {
        ob_start();
        ?>
        <section class = 'hero' style = "background: url('<?= $this->data['background_image'] ?>') no-repeat center center/cover;">
        <div class = 'container'>
        <h1>
        <span class = 'highlight'>Hi, I am <?= $this->data[ 'name' ] ?></span>
        <br />
        <span class = 'big'><?= $this->data[ 'title' ] ?></span>
        <br />
        <span class = 'muted'><?= $this->data[ 'specializations' ] ?></span>
        </h1>

        <?php if ( !empty( $this->data[ 'buttons' ] ) ): ?>
        <div class = 'btn-grid'>
        <?php foreach ( $this->data[ 'buttons' ] as $button ): ?>
        <a href = "<?= $button['href'] ?>" class = "<?= $button['class'] ?>">
        <?= $button[ 'text' ] ?>
        </a>
        <?php endforeach;
        ?>
        </div>
        <?php endif;
        ?>
        </div>
        </section>
        <?php
        return ob_get_clean();
    }
}

// Использование:
$hero = new Hero( [
    'name' => 'Dmitry',
    'buttons' => [
        [ 'href' => '#', 'class' => 'btn-primary', 'text' => 'Contact Me' ],
        [ 'href' => '#projects', 'class' => 'projects-btn', 'text' => 'View Projects' ]
    ]
] );

echo $hero->render();
?>

<style>
/* Hero */
.hero {
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 0 3rem;
    color: white;
    position: relative;
    box-sizing: border-box;
}

.hero h1 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2;
    margin-bottom: 2rem;
    text-shadow: 3px 1px rgb( 32, 32, 32 );
}

.hero .highlight {
    font-weight: 600;
    color: #fff;
}

.hero .big {
    font-weight: 600;
}

.hero .muted {
    color: #c7c1c1;
    text-shadow: 3px 1px rgb( 32, 32, 32 );
    opacity: 90%;
}

.btn-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
    margin-top: 2rem;
}

.btn-primary,
.projects-btn {
    padding: 12px 30px;
    border: none;
    border-radius: 25px;
    background: #fd0008;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    text-decoration: none;
    display: inline-block;
}

.btn-primary:hover,
.projects-btn:hover {
    opacity: 0.8;
    background: #ffffff;
    color: black;
    border: 2px solid black;
}

/* Responsive rules */
@media ( max-width: 768px ) {
    .hero {
        justify-content: center;
        padding: 0 1.5rem;
    }

    .hero h1 {
        font-size: 2.5rem;
    }

    .btn-grid {
        flex-direction: column;
        width: 100%;
        max-width: 300px;
    }

    .projects-btn {
        display: inline-block !important;
    }
}

@media ( max-width: 400px ) {
    .hero h1 {
        font-size: 2rem;
    }
}
</style>