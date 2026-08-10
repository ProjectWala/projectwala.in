<?php
// Detect protocol
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    ? "https://" : "http://";

// Full URL
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get path after domain
$path = trim(parse_url($url, PHP_URL_PATH), "/");

// Convert to array (segments)
$segments = $path ? explode("/", $path) : [];

// Build breadcrumb links
$breadcrumbHtml = '<div class="d-flex justify-content-center breadcrumbs">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-2">
                                <li class="breadcrumb-item">
                                    <a href="/"><i class="fas fa-home"></i><span> Home</span></a>
                                </li>
                        </div>';

$fullPath = "";
$lastIndex = count($segments) - 1;

foreach ($segments as $index => $segment) {
    $fullPath .= "/" . $segment;

    // Make segment readable (replace '-' with space, capitalize)
    $name = ucwords(str_replace("-", " ", $segment));

    if ($index == $lastIndex) {
        // Last item
        $breadcrumbHtml .= '<li class="breadcrumb-item active current"><span>' . $name . '</span></li>';
    } else {
        // Intermediate links
        $breadcrumbHtml .= '<li class="breadcrumb-item"><a href="' . $fullPath . '">' . $name . '</a></li>';
    }
}

$breadcrumbHtml .= '</ol></nav>';

echo $breadcrumbHtml;
?>
