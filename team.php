<?php session_start();
include_once("language/lang.php"); ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title><?= $lang['team']['organes']['title-page'] ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/logo-munap.jpg" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Nav bar Start -->
        <?php include_once("header.php") ?>
        <!-- Nav bar End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header-team py-5 mb-5">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $lang['team']['organes']['head-title'] ?>
                </h1>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Team Start -->
        <div class="container-xxl ">
            <div class="container">

                <!-- Assemblee Gen  -->
                <div class="section-title">
                    <div class="text-center">
                        <h1 class="display-5 mb-5 ">Assemblée Générale</h1>
                    </div>
                    <div class="row g-2">
                        <span id="ca" class="decalage-haut"></span>
                        <div class="row g-4">

                            <div class="col-lg-8 mt-3 bg-light">
                                <p class="p-4" style="text-align: justify;"><?= $lang['team']['organes']['word-AG'] ?>
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="team-item ">
                                    <div class="overflow-hidden position-relative">
                                        <img class="img-fluid" src="img/organes/CA_DGB.jpg" alt="" style="width: 100%;">
                                    </div>
                                    <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                                        <h5 class="mb-1">M. ALO'O Cyrill</h5>
                                        <small><b><?= $lang['team']['organes']['ca-president'] ?></b></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5 g-4">
                            <img class="img-fluid" src="img/header/team_members.jpg" style="min-height: fit-content;">
                        </div>
                    </div>

                    <div class=" d-grid gap-2 col-6 mx-auto m-4">
                        <a href="team_CA.php" class="btn btn-primary"><?= $lang['team']['organes']['btn-ca'] ?></a>
                        <a href="team_BE.php" class="btn btn-primary"><?= $lang['team']['organes']['btn-be'] ?></a>
                        <a href="team_CF.php" class="btn btn-primary"><?= $lang['team']['organes']['btn-cf'] ?></a>
                        <a href="team_DR.php" class="btn btn-primary"><?= $lang['team']['organes']['btn-dr'] ?></a>
                    </div>


                    <!-- Conseil d'administration -->
                    <!-- <span id="ca" class="decalage-haut"></span>
                <div class="section-title text-center">
                    <h1 id="ca" class="display-5 mb-5"><?= $lang['team']['organes']['head-link-1'] ?></h1>
                    <?php //include_once("team_CA.php"); 
                    ?>
                </div> -->

                    <!-- Bureau Executif -->
                    <!-- <span id="be" class="decalage-haut"></span>
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5 mt-5"><?= $lang['team']['organes']['head-link-2'] ?></h1>
                    <?php //include_once("team_BE.php"); 
                    ?>
                </div> -->

                    <!-- Commision Financiere -->
                    <!-- <span id="cf" class="decalage-haut"></span>
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5 mt-5"><?= $lang['team']['organes']['head-link-3'] ?></h1>
                    <?php //include_once("team_CF.php"); 
                    ?>
                </div> -->

                    <!-- Delegation Regionale -->
                    <!-- <span id="dr" class="decalage-haut"></span>
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5 mt-5"><?= $lang['team']['organes']['head-link-4'] ?></h1>
                    <?php //include_once("team_DR.php"); 
                    ?>
                </div> -->
                </div>
            </div>
            <!-- Team End -->
        </div>

        <!-- Footer Start -->
        <?php include_once("footer.php") ?>
        <!-- Footer End -->

        <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('members').setAttribute("class", "nav-link active");
        </script>
    </body>

</html>