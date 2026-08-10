<?php
require_once "../assets/code/db/DBMySql.php";
$db = new DBMySql();
 $id=0;
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$sql="select * from courses where id = $id";
$course = $db->GetSingleRow($sql);


?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo isset($course['Title']) ? htmlspecialchars($course['Title']) . ' | Course Details | Project Wala India' : 'Course Details | Project Wala India'; ?></title>
    <meta name="description" content="<?php echo isset($course['ShortDescription']) ? htmlspecialchars(strip_tags($course['ShortDescription'])) : 'Explore comprehensive course details and master new skills with Project Wala India.'; ?>">
    <meta name="keywords" content="Project Wala India Courses, Professional Training, Software Development, IT Courses, Tech Mentorship">
    <?php include("../partials/links_css.php"); ?>
</head>

<body class="index-page" style="font-size: 12px;">
     <header class="shadow-sm header sticky-top" id="header">
         <?php include("../partials/menu.php"); ?>
    </header>
    <main class="main">
        <section id="hero" class="hero section" style="background: url(&quot;../assets/img/logoOp05.webp&quot;);padding-top: 40px;">
            <?php if($id==0) {?>
             <?php include("../partials/404.php"); ?>
            <?php } else {?>
            <div class="container section-title" style="padding-bottom: 40px;">
                <h1 class="display-6 rubberBand animated text-gradiant"><strong><?php echo $course["Title"] ?></strong></h1>
                <div class="title-shape"><svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg></div>
                <p class="bounce animated">Live Sessions ||&nbsp; 1 to 1 Mentorship&nbsp; ||&nbsp; Assignment based Progress Tracking</p>
                <p class="text-center" data-aos="fade-up"><?php echo $course["ShortDescription"] ?></p>
            </div>
            <div class="container" style="padding-bottom: 40px;font-size: 14px;">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="card shadow-sm" data-aos="fade-up">
                            <div class="card-body p-4">
                                <div class="row mb-1">
                                    <div class="col-sm-6 d-flex align-items-center">
                                        <h6 class="text-start text-muted flex-fill mb-2">Level&nbsp;</h6><span class="mb-2"><strong><span style="color: rgba(33, 37, 41, 0.75);"><?php echo $course["Level"] ?></span></strong></span>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center">
                                        <h6 class="text-start text-muted flex-fill mb-2">Duration :</h6><span class="mb-2"><strong><?php echo $course["Hours"] ?> hrs.</strong></span>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-sm-6 d-flex d-lg-flex align-items-center align-items-lg-center">
                                        <h6 class="text-start text-muted flex-fill mb-2">Mini Project</h6><i class="fas fa-check text-success me-3 mb-2"></i>
                                    </div>
                                    <div class="col-sm-6 d-flex d-lg-flex align-items-center align-items-lg-center">
                                        <h6 class="text-start text-muted flex-fill mb-2">Major Project</h6><i class="fas fa-check text-success me-3 mb-2"></i>
                                    </div>
                                    <div class="col-sm-6 d-flex d-lg-flex align-items-center align-items-lg-center">
                                        <h6 class="text-start text-muted flex-fill mb-2">Assignments</h6><i class="fas fa-check text-success me-3 mb-2"></i>
                                    </div>
                                    <div class="col-sm-6 d-flex d-lg-flex align-items-center align-items-lg-center">
                                        <h6 class="text-start text-muted flex-fill mb-2">Doubt &amp; Q &amp;&nbsp;A Session</h6><i class="fas fa-check text-success me-3 mb-2"></i>
                                    </div>
                                    <div class="col-sm-6 d-flex d-lg-flex align-items-center align-items-lg-center">
                                        <h6 class="text-start text-muted flex-fill mb-2">Live Session</h6><i class="fas fa-check text-success me-3 mb-2"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-end d-lg-flex justify-content-lg-center"><button class="btn btn-success btn-sm border rounded-pill ms-3" type="button"><i class="fab fa-whatsapp text-light"></i>&nbsp;More Details</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="padding-bottom: 40px;font-size: 14px;">
                <div class="card border-warning shadow-sm">
                    <div class="card-body">
                        <h4 class="text-center card-title text-orange-dark"><strong>Course Outline</strong></h4>
                        <hr>
                        <div>
                            <?php echo $course["LongDescription"] ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </section>
    </main>
    <footer class="shadow-sm footer" id="footer">
        <div class="container">
            <div class="text-center copyright">
                <p>© <span>Copyright</span><strong class="px-1 sitename text-orange">Projectwala.in</strong><span>All Rights Reserved</span></p>
            </div>
            <div class="d-flex justify-content-center social-links"><a href=""><i class="bi bi-twitter-x"></i></a><a href=""><i class="bi bi-facebook"></i></a><a href=""><i class="bi bi-instagram"></i></a><a href=""><i class="bi bi-linkedin"></i></a></div>
        </div>
    </footer><a class="d-flex justify-content-center align-items-center scroll-top" href="#" id="scroll-top"><i class="bi bi-arrow-up-short"></i></a><a href="#" class="float">
<i class="fa fa-phone my-float" style="color: rgb(255,255,255)"></i>
</a>

    <?php include("../partials/links_scripts.php"); ?>
</body>

</html>