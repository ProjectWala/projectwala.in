<?php

function getBasePath() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
    $domain = $_SERVER['HTTP_HOST'];
    $base_path = $protocol . $domain;
    if($domain=="localhost"){
        $base_path= $base_path.'/ProjectWala.in/projectwala.in';
    }
    return $base_path;
}
?>