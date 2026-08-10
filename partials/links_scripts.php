<?php

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];
$base_path = $protocol . $domain;
$domain = $_SERVER['HTTP_HOST'];
if($domain=="localhost"){
$base_path= $base_path.'/ProjectWala_New';
}

?>
    <script src="<?= $base_path ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= $base_path ?>/assets/js/aos.min.js"></script>
    <script src="<?= $base_path ?>/assets/js/bs-init-1.js"></script>
    <script src="<?= $base_path ?>/assets/js/aos.min.js"></script>
    <script src="<?= $base_path ?>/assets/js/bs-init.js"></script>
    <script src="<?= $base_path ?>/assets/js/Incrementing-Animation-Counter.js"></script>
    <script src="<?= $base_path ?>/assets/js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base_path ?>/assets/js/vendor/php-email-form/validate.js"></script>
    <script src="<?= $base_path ?>/assets/js/vendor/aos/aos.js"></script>
    <script src="<?= $base_path ?>/assets/js/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= $base_path ?>/assets/js/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= $base_path ?>/assets/js/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?= $base_path ?>/assets/js/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= $base_path ?>/assets/js/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= $base_path ?>/assets/js/js/main.js"></script>
    <script src="<?= $base_path ?>/assets/js/js/pw.js"></script>
    <script src="<?= $base_path ?>/assets/js/myscript.js"></script>