<?php
include 'assets/code/data/projects.php';
$type='Electronics';
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Project Wala India</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Questrial:wght@400&amp;display=swap" />
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/swiper-icons.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css" />
    <link rel="stylesheet" href="assets/css/aos.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-icons/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/vendor/aos/aos.css" />
    <link rel="stylesheet" href="assets/css/vendor/glightbox/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/css/main.css" />
    <link rel="stylesheet" href="assets/css/Floating-Button.css" />
    <link rel="stylesheet" href="assets/css/Incrementing-Animation.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script type="module">
        import { Projects } from './assets/code/data/data.js';

        const app = Vue.createApp({
            data() {
                return {
                    projects: Projects.filter(x => { return x.category.toLowerCase() == "electronics"; }),
                    keyword: ''
                };
            },

            computed: {
                filteredList() {
                    return this.projects.filter(p =>
                        p.ProjectName.toLowerCase().includes(this.keyword.toLowerCase())
                    );
                }
            }
        });

        app.mount('#app');
    </script>

</head>

<body class="index-page">
    <div id="app">
        <header class="shadow-sm header sticky-top" id="header">
            <?php include("partials/menu.php"); ?>
        </header>
        <main class="main">
            <section id="hero" class="hero section project-wala-bg" style="background: url(&quot;assets/img/logoOp05.webp&quot;);padding-top: 40px;">
                <div class="container section-title" style="padding-bottom: 40px;">
                    <h2 class="rubberBand animated"><span style="font-weight: normal !important;">Electronics Projects</span></h2>
                    <div class="title-shape">
                        <svg viewbox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
                        </svg>
                    </div>
                    <p class="bounce animated">Full Stack&nbsp; <strong>||</strong>&nbsp; Live Project <strong>||</strong>&nbsp; Hosting &amp; Deployment&nbsp; <strong>||</strong>&nbsp; Whatsapp Api</p>
                    <div class="row" data-aos="fade-up" data-aos-delay="250">
                        <div class="col">
                            <div class="input-group mt-4">
                            <input v-model="keyword" class="border rounded-pill focus-ring focus-ring-danger form-control" type="text" placeholder="Quick Search . . ." />
                            <span class="bg-transparent border-0 input-group-text" style="margin-left: -38px;transform-style: preserve-3d;"><i class="fa fa-remove text-secondary"></i></span></div>
                        </div>
                    </div>
                </div>
                <div class="container" style="padding-bottom: 40px;font-size: 14px;">
                    <div class="row">
                        <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                            <div class="list-group shadow-sm aos-init aos-animate" data-aos="fade-up">
                                <ul class="list-group shadow-sm">
                                    <?php foreach ($Projects[$type] as $project): ?>
                                        <li class="list-group-item text-start">
                                            <h6 class="text-orange">
                                                <strong>
                                                    <?php echo $project['ProjectName']; ?>
                                                </strong>
                                            </h6>

                                            <p class="mb-1">
                                                <?php echo $project['description']['short']; ?>
                                            </p>

                                            <div class="row">
                                                <div class="col text-end">
                                                    <a href="https://wa.me/917007502987?text=<?php echo urlencode($project['description']['short']); ?>"
                                                        target="_blank" class="btn btn-success btn-sm">
                                                        <i class="fab fa-whatsapp"></i>&nbsp;Get Details
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
        <?php include("partials/footer.php"); ?>

            <?php include("../partials/moveToTopButton.php"); ?>

        <?php include("partials/callButton.php"); ?>
        <?php include("partials/whatsappButton.php"); ?>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>

    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Incrementing-Animation-Counter.js"></script>
    <script src="assets/js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/vendor/aos/aos.js"></script>
    <script src="assets/js/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/js/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/js/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/js/main.js"></script>
<script src="assets/js/js/pw.js"></script>
</body>

</html>