<?php 


?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>How to Import Database SQL Script to XAMPP MySQL Server</title>
    <meta name="description" content="Learn how to easily import a .sql database script into your local XAMPP MySQL server using phpMyAdmin. A step-by-step tutorial by Project Wala India.">
    <meta name="keywords" content="Import SQL to XAMPP, phpMyAdmin Tutorial, MySQL Database Import, XAMPP Setup, PHP Database, Project Wala India">
    <?php include("../partials/links_css.php"); ?>
</head>

<body class="index-page">
    <?php include("../partials/menu.php"); ?>
    <main class="main">
        <section id="faq" class="faq section">
            <div class="container section-title">
                <h2 data-aos="fade-up">Import Sql Script</h2>
                <div class="title-shape">
                    <svg viewbox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
                    </svg>
                </div>
                <p data-aos="fade-up" data-aos-delay="100">How to Import SQL script in Mysql</p>
            </div>
            <div class="container">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong>Step 1 -</strong>If you have installed Wamp Server, Run Wamp Server &amp; Select "Yes" if Asked.<br /><br /><img class="img-fluid shadow" src="../assets/img/tutorial/xamp-mysql-import/Xampp-Run.jpg" /></td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Step 2 -</strong><br />Start Apache And My Sql Services<br />
                                    <img class="img-fluid" src="../assets/img/tutorial/xamp-mysql-import/xampp%20run2.jpg" /><br /><br /><p>In Few Second Both Services will be started and appeared GREEN</p>
                                    <img class="img-fluid" src="../assets/img/tutorial/xamp-mysql-import/2020-04-5_11-27-24.jpg" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Step 3 -</strong><br />Type "localhost/phpmyadmin" in you Web Browser Address Bar &amp; press Enter.<br /><br />
                                    <img class="img-fluid" src="../assets/img/tutorial/xamp-mysql-import/2020-04-5_11-27-24.jpg" /><br /><br />
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Step 5 -</strong><br />Find &amp; Select the <strong>Import </strong>Tab after Login.<br /><img class="img-fluid shadow" src="../assets/img/tutorial/xamp-mysql-import/ImportBTN.png" width="750" /><br /></td>
                            </tr>
                            <tr>
                                <td><strong>Step 6 -</strong><br />Find &amp; Click<strong> Choose File</strong> Button.<br /><img class="img-fluid shadow" src="../assets/img/tutorial/xamp-mysql-import/MySqlChooseFile%20Option.png" width="600" /><br /><br /><br /></td>
                            </tr>
                            <tr>
                                <td><strong>Step 7 -</strong><br />Browse You Sql Script File in which you have Exported the Database.<br /><img class="img-fluid shadow" src="../assets/img/tutorial/xamp-mysql-import/BrowseFile.jpg" width="500" /><br /><br /><br /></td>
                            </tr>
                            <tr>
                                <td><strong>Step 8 -</strong><br />Once your file is Select Like this<br /><img class="img-fluid shadow" src="../assets/img/tutorial/xamp-mysql-import/SelectedFile.jpg" style="width: 489px;" /><br /><br />Press Go Button which you can find on the bottom of same page.<br /><br /><img class="img-fluid shadow" src="../assets/img/tutorial/xamp-mysql-import/GoBtn.jpg" width="350" /></td>
                            </tr>
                            <tr>
                                <td><strong>Final Stage -</strong><br />Your Database will be appearing like this.<br /><br /><img class="img-fluid shadow" src="../assets/img/tutorial/xamp-mysql-import/my-Database.jpg" width="300" /><br /><br /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

    <?php include("../partials/footer.php"); ?>
    <a class="d-flex justify-content-center align-items-center scroll-top" id="scroll-top" href="#">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <?php include("../partials/callButton.php"); ?>
    <?php include("../partials/links_scripts.php"); ?>
</body>

</html>