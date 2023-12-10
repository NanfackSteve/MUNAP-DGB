<?php session_start();
include_once("language/lang.php"); ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title><?= $lang['team']['organes']['title-page'] ?></title>
        <?php include_once("head.php") ?>
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
        <div class="container">

            <!-- Assemblee Gen  -->
            <div class="section-title">
                <div class="text-center">
                    <h1 class="display-5"><?= $lang['team']['organes']['team-head'] ?></h1>
                </div>
                <div class="row g-2">
                    <span id="ca" class="decalage-haut"></span>
                    <div class="row g-2">

                        <div class="col-lg-8 my-4 bg-light">
                            <p class="px-4 pt-4" style="text-align: justify;">
                                <?= $lang['team']['organes']['word-AG'] ?>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.5s">
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

                    <div class="row">
                        <img class="img-fluid" src="img/header/team_members.jpg" style="min-height: fit-content;">
                    </div>
                </div>

                <div class=" d-grid gap-2 col-6 mx-auto m-4">
                    <a href="team_CA.php" class="btn btn-primary"><?= $lang['team']['organes']['btn-ca'] ?></a>
                    <a href="team_BE.php" class="btn btn-primary"><?= $lang['team']['organes']['btn-be'] ?></a>
                    <a href="team_CF.php" class="btn btn-primary"><?= $lang['team']['organes']['btn-cf'] ?></a>
                    <a href="team_DR.php" class="btn btn-primary"><?= $lang['team']['organes']['btn-dr'] ?></a>
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