<?php
include __DIR__ . '/../includes/about-intro.php';
?>

<?php
include __DIR__ . '/../includes/our-values.php';
?>

<?php
include __DIR__ . '/../includes/about-section.php';
?>

<?php
include __DIR__ . '/../includes/journey-section.php';
?>

<?php
require_once __DIR__ . '/../includes/testimonials.php';
echo Testimonials(
    'Neque porro quisquam est qui dolum',
    'Sign up for our newsletter to stay up-to-date on the latest promotions, discounts, and new features releases..' );
    ?>