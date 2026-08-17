<?php

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];
$base_path = $protocol . $domain;
$domain = $_SERVER['HTTP_HOST'];
if($domain=="localhost"){
$base_path= $base_path.'/ProjectWala.in/projectwala.in';
}

?>
<?php include __DIR__ . '/fevicon.php'; ?>
<link rel="stylesheet" href="<?= $base_path ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Questrial:wght@400&amp;display=swap">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/swiper-icons.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/aos.min.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/vendor/aos/aos.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/vendor/glightbox/css/glightbox.min.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/css/main.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/Floating-Button.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/Incrementing-Animation.css">
    <link rel="stylesheet" href="<?= $base_path ?>/assets/css/styles.css">