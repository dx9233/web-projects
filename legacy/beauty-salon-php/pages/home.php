<?php
require_once __DIR__ . '/../includes/hero.php';

echo Hero(
    'Find a service<br>close to you',
    'There are many variations of passages of Lorem Ipsum available.'
);
?>

<?php
include __DIR__ . '/../includes/hero-services.php';
?>

<?php
include __DIR__ . '/../includes/experience-section.php';
?>

<?php
require_once __DIR__ . '/../includes/services.php';
echo Services(
    'Recommended',
    'Lorem ipsum dolor sit amet consectetur. Eu quis enim tempor et proin neque.' );
    ?>

    <?php
    require_once __DIR__ . '/../includes/testimonials.php';
    echo Testimonials(
        'Neque porro quisquam est qui dolum',
        'Sign up for our newsletter to stay up-to-date on the latest promotions, discounts, and new features releases..' );
        ?>

        <?php
        require_once __DIR__ . '/../includes/subscribe.php';
        echo Subscribe(
            'Subscribe to newsletter',
            '"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem of distribution it look like readable English."' );
            ?>