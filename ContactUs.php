<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Contact Project Wala India | Get in Touch for Projects & Training</title>
    <meta name="description" content="Contact Project Wala India for B.Tech, BCA, MCA projects, tech training, and mock interviews. We are active in Lucknow, Kanpur, Delhi NCR, and Dehradun. Call or WhatsApp us today!" />
    <meta name="keywords" content="Contact Project Wala, project wala phone number, tech training contact, B.Tech project help, BCA project support, MCA training, Lucknow, Kanpur, Delhi NCR, Dehradun" />
    <?php include("partials/links_css.php"); ?>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script type="module">
        import { createApp } from "https://unpkg.com/vue@3/dist/vue.esm-browser.js";

        createApp({
            data() {
                return {
                    form: {
                        name: "",
                        email: "",
                        subject: "",
                        message: ""
                    }
                };
            },

            methods: {
                handleSubmit() {
                    const jsonData = JSON.stringify(this.form, null, 2);

                    console.log("Form JSON:", jsonData);

                    // OPTIONAL: send to PHP to save as .json file
                    fetch("save-json.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/json" },
                        body: jsonData
                    })
                        .then(res => res.text())
                        .then(data => console.log("Server Response:", data))
                        .catch(err => console.error("Error:", err));
                }
            }
        }).mount("#app");
    </script>

</head>

<body class="index-page">
    <div id="app">
        <header class="shadow-sm header sticky-top" id="header">
            <?php include("partials/menu.php"); ?>

        </header>
        <main class="main">
            <section id="contact" class="contact section light-background project-wala-bg">
                <div class="container section-title" data-aos="fade-up">
                    <h1 class="h2">Contact Us</h1>
                    <div class="title-shape">
                        <svg viewbox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
                        </svg>
                    </div>
                    <p>Active in<br />Lucknow | Kanpur | Delhi NCR | Dehradun</p>
                </div>
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <div data-aos="fade-up" class="content">
                                <div class="contact-info mt-5">
                                    <div class="d-flex info-item mb-3" data-aos="fade-up"><i class="bi bi-envelope-at me-3"></i><span>projetcwala.in@gmail.com</span></div>
                                    <div class="d-flex info-item mb-3" data-aos="fade-up" data-aos-delay="100"><i class="bi bi-telephone me-3"></i><span>+91 70075 02987</span></div>
                                    <div class="d-flex info-item mb-3" data-aos="fade-up" data-aos-delay="200"><button class="btn btn-primary ms-3 btn-orange" type="button"><i class="fas fa-phone-alt text-light"></i>&nbsp;Call us&nbsp;</button><button class="btn btn-success ms-3" type="button"><i class="fab fa-whatsapp text-light"></i>&nbsp;Whatsapp&nbsp;&nbsp;</button></div>
                                    <div class="d-flex info-item mb-4" data-aos="fade-up" data-aos-delay="300"><i class="bi bi-geo-alt me-3"></i><span>F61, Samar Vihar Colony, Alambagh, Lucknow</span></div><a class="d-inline-flex align-items-center map-link" href="#"> Open Map <i class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div id="app">
                                <div class="card contact-form" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card-body p-4 p-lg-5">
                                        <form @submit.prevent="handleSubmit" class="php-email-form">
                                            <div class="row gy-4">
                                                <div class="col-12">
                                                    <input class="form-control" type="text" name="name" placeholder="Your Name"
                                                        v-model="form.name" required />
                                                </div>

                                                <div class="col-12">
                                                    <input class="form-control" type="email" name="email" placeholder="Your Email"
                                                        v-model="form.email" required />
                                                </div>

                                                <div class="col-12">
                                                    <input class="form-control" type="text" name="subject" placeholder="Subject"
                                                        v-model="form.subject" required />
                                                </div>

                                                <div class="col-12">
                                                    <textarea class="form-control" name="message" placeholder="Message" rows="6"
                                                        v-model="form.message" required></textarea>
                                                </div>

                                                <div class="col-12 text-center">
                                                    <div class="loading"><span>Loading</span></div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message"><span>Your message has been sent. Thank you!</span></div>

                                                    <button class="btn btn-submit w-100" type="submit">Submit Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

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
    </div>
    <?php include("partials/links_scripts.php"); ?>
</body>

</html>