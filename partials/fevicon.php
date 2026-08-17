<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];
$base_path = $protocol . $domain;
if($domain=="localhost"){
$base_path= $base_path.'/ProjectWala.in/projectwala.in';
}
?>
<link rel="icon" href="<?= $base_path ?>/assets/img/fevicon/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="<?= $base_path ?>/assets/img/fevicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= $base_path ?>/assets/img/fevicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= $base_path ?>/assets/img/fevicon/favicon-16x16.png">
<link rel="manifest" href="<?= $base_path ?>/assets/img/fevicon/site.webmanifest">