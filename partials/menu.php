<?php

include_once __DIR__ . '/../assets/code/php/helper.php';
$base_path = getBasePath();

?>

<div
    class="container-fluid d-flex justify-content-between align-items-center header-container container-xl position-relative pe-3">
    <a class="d-flex align-items-center me-auto logo me-xl-0" href="<?= $base_path ?>">
        <h4 class="m-1 text-orange">Projectwala</h4>
    </a>
    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="<?= $base_path ?>/">Home</a></li>
            <li><a href="<?= $base_path ?>/courses-list.php">Courses</a></li>
            <li><a class="d-block d-xl-none"
                    href="<?= $base_path ?>/cse-bca-mca-it-Computer-science-btech-projects-list/">Computer Science CS
                    IT</a></li>
            <li><a class="d-block d-xl-none"
                    href="<?= $base_path ?>/electronics-ece-btech-engineering-projects-list/">Electronics Electrical EC
                    EL</a></li>
            <li><a class="d-block d-xl-none"
                    href="<?= $base_path ?>/machenical-me-btech-engineering-projects-list/">Mechanical ME</a></li>


            <li class="dropdown d-none d-xl-block">
                <a href="#">Projects</a>
                <ul>
                    <li><a href="<?= $base_path ?>/cse-bca-mca-it-Computer-science-btech-projects-list/">Computer
                            Science CS IT</a></li>
                    <li><a href="<?= $base_path ?>/electronics-ece-btech-engineering-projects-list/">Electronics
                            Electrical EC EL</a></li>
                    <li><a href="<?= $base_path ?>/machenical-me-btech-engineering-projects-list/">Mechanical ME</a>
                    </li>
                </ul>
            </li>
            <li><a href="<?= $base_path ?>/tutorials">Tutorials</a></li>
            <li><a href="<?= $base_path ?>/about-us">About</a></li>
            <li><a href="<?= $base_path ?>/contact-us">Contact us</a></li>
        </ul>
        <i class="d-xl-none mobile-nav-toggle bi bi-list"></i>
    </nav>
    <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/projectwalaindia/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>
</div>

<!--<style>
    .navmenu .dropdown ul {
        display: none;
    }

    .navmenu .dropdown.open ul {
        display: block;
    }

    .navmenu .dropdown ul {
        z-index: 9999 !important;
        position: absolute;
        background: #fff;
        padding: 10px;
    }

</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".dropdown > a").forEach(function(drop){
            drop.addEventListener("click", function(e){
                e.preventDefault();
                this.parentElement.classList.toggle("open");
            });
        });
    });
</script>-->