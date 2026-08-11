<?php
include 'assets/code/data/projects.php';
$type='ComputerScience';
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Computer Science (CSE, IT, BCA, MCA) B.Tech Projects | Project Wala India</title>
    <meta name="description" content="Explore top B.Tech, BCA, MCA, and IT final year projects for Computer Science students. Full Stack, Live Project, Hosting & Deployment by Project Wala India." />
    <meta name="keywords" content="CSE Projects, IT Projects, BCA Projects, MCA Projects, Computer Science Projects, B.Tech Projects, Final Year Projects, Project Wala India" />
    
    <link rel="canonical" href="https://projectwala.in/cse-bca-mca-it-Computer-science-btech-projects-list.php" />
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Computer Science (CSE, IT, BCA, MCA) B.Tech Projects | Project Wala India" />
    <meta property="og:description" content="Explore top B.Tech, BCA, MCA, and IT final year projects for Computer Science students. Full Stack, Live Project, Hosting & Deployment." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://projectwala.in/cse-bca-mca-it-Computer-science-btech-projects-list.php" />
    <meta property="og:image" content="https://projectwala.in/assets/img/logoOp05.webp" />
    <meta property="og:site_name" content="Project Wala India" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Computer Science B.Tech Projects | Project Wala India" />
    <meta name="twitter:description" content="Explore top B.Tech, BCA, MCA, and IT final year projects for Computer Science students." />
    <meta name="twitter:image" content="https://projectwala.in/assets/img/logoOp05.webp" />

    <?php include("partials/links_css.php"); ?>
   

</head>

<body class="index-page">
    <div id="app">
        <header class="shadow-sm header sticky-top" id="header">
            <?php include("partials/menu.php"); ?>
        </header>
        <main class="main">
            <section id="hero" class="hero section project-wala-bg"
                style="background: url(&quot;assets/img/logoOp05.webp&quot;);padding-top: 40px;">
                <div class="container section-title" style="padding-bottom: 40px;">
                    <h1 class="display-6 rubberBand animated text-gradiant"><strong>CSe IT Project List</strong></h1>
                    <div class="title-shape">
                        <svg viewbox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor"
                                stroke-width="2"></path>
                        </svg>
                    </div>
                    <p class="bounce animated">Full Stack&nbsp; <strong>||</strong>&nbsp; Live Project
                        <strong>||</strong>&nbsp; Hosting &amp; Deployment&nbsp; <strong>||</strong>&nbsp; Customized
                        Features</p>
                    <div class="row" data-aos="fade-up" data-aos-delay="250">
                        <div class="col">
                            <div class="input-group mt-4">
                                <input v-model="keyword"
                                    class="border rounded-pill focus-ring focus-ring-danger form-control" type="text"
                                    placeholder="Quick Search . . ." /><span
                                    class="bg-transparent border-0 input-group-text"
                                    style="margin-left: -38px;transform-style: preserve-3d;"><i
                                        class="fa fa-remove text-secondary"></i></span>
                            </div>
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
                                                <?php echo $project['description']['short'] ?? ''; ?>
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
    <?php include("partials/links_scripts.php"); ?>
     <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="module">
        import { Projects } from './assets/code/data/data.js';

        const app = Vue.createApp({
            data() {
                return {
                    projects: Projects.filter(x => { return x.category.toLowerCase() == "computerscience"; }),
                    keyword: ''
                };
            },
            methods: {
                openWhatsAppChat() {
                    openWhatsApp('7007502987', 'Hi! I am interested in a CSE project.');
                }
            },
            computed: {
                filteredList() {
                    return this.projects.filter(p =>
                        p.ProjectName.toLowerCase().includes(this.keyword.toLowerCase())
                    );
                }
            },

            mounted() {

            }
        });

        app.mount('#app');
    </script>
</body>

</html>