<?php
include_once("./assets/code/php/helper.php");
$base_path = getBasePath();

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Software Development Tutorials & Guides | Project Wala India</title>
    <meta name="description" content="Explore our collection of tutorials on setting up local environments, importing databases, running PHP projects, and more with Project Wala India.">
    <meta name="keywords" content="IT Tutorials, Software Development Guides, Setup XAMPP, PHP Projects, MySQL, Project Wala India Tutorials">
    
    <link rel="canonical" href="https://projectwala.in/tutorials.php" />
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Software Development Tutorials & Guides | Project Wala India" />
    <meta property="og:description" content="Explore our collection of tutorials on setting up local environments, importing databases, running PHP projects, and more with Project Wala India." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://projectwala.in/tutorials.php" />
    <meta property="og:image" content="https://projectwala.in/assets/img/logoOp05.webp" />
    <meta property="og:site_name" content="Project Wala India" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Software Development Tutorials & Guides | Project Wala India" />
    <meta name="twitter:description" content="Explore our collection of tutorials on setting up local environments, importing databases, and running PHP projects." />
    <meta name="twitter:image" content="https://projectwala.in/assets/img/logoOp05.webp" />

    <?php include("partials/links_css.php"); ?>
</head>

<body class="index-page">
    <?php include("partials/menu.php"); ?>
    <main class="main">
        <section id="faq" class="faq section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Quick Tutorials</h2>
                <div class="title-shape">
                    <svg viewbox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
                    </svg>
                </div>
                <p>Some useful quick tutorials for students projects</p>
            </div>
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 p-3">
            <ul class="list-group shadow-sm">
                <li class="list-group-item">
                    <h4 class="ps-3">Php</h4>
                    <div class="row">
                        <div class="col"><a href="<?= $base_path ?>/tutorials/how-to-run-local-php-project-using-xampp-mysql-server">How to run local php project using xamp server</a></div>
                        <div class="col-auto" role="button"><i class="far fa-copy text-secondary" onclick="copyToClipboard('https://projectwala.in/tutorials/how-to-run-local-php-project-using-xampp-mysql-server.php');"></i></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 p-3">
            <ul class="list-group shadow-sm">
                <li class="list-group-item">
                    <h4 class="ps-3">MySQL</h4>
                    <div class="row">
                        <div class="col"><a href="how-to-import-database-sql-script-to-xampp-mysql-server">How to import database or Sql Script in xamp mysql server</a></div>
                        <div class="col-auto" role="button"><i class="far fa-copy text-secondary" onclick="copyToClipboard('https://projectwala.in/tutorials/how-to-import-database-sql-script-to-xampp-mysql-server.php')"></i></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
        </section>
    </main>
    <?php include("partials/footer.php"); ?>
    <a class="d-flex justify-content-center align-items-center scroll-top" id="scroll-top" href="#">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <?php include("partials/callButton.php"); ?>
    <?php include("partials/whatsappButton.php"); ?>

    <?php include("partials/links_scripts.php"); ?>
</body>

</html>