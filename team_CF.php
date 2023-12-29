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
        <div class="container-fluid page-header-team-cf py-4 mb-2">
            <div class="container py-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">
                    <?= $lang['team']['organes']['head-link-3'] ?> </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white underline-hover"
                                href="team_CA.php"><?= $lang['team']['organes']['head-link-1'] ?></a></li>
                        <li class="breadcrumb-item"><a class="text-white underline-hover"
                                href="team_BE.php"><?= $lang['team']['organes']['head-link-2'] ?></a>
                        </li>
                        <li class="breadcrumb-item"><a class="text-white underline-hover"
                                href="team_DR.php"><?= $lang['team']['organes']['head-link-4'] ?></a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Team Start -->
        <div class="container-xxl mb-5">
            <div class="container">
                <div class="row g-2">

                    <!-- Commission Financiere (Word and Picture) -->
                    <span id="cf" class="decalage-haut"></span>
                    <div class="row g-2">

                        <div class="col-lg-8 bg-light my-4">
                            <p class="px-4 pt-4 " style="text-align: justify;">
                                <?= $lang['team']['organes']['word-cf'] ?>
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item ">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CF_President.jpg" alt=""
                                        style="width: 100%;">
                                </div>
                                <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                                    <h5 class="mb-1">M. BEKOLO Xavier</h5>
                                    <small><b><?= $lang['team']['organes']['CF-ex-1'] ?></b></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Others -->
                    <div class="row my-2 g-2">
                        <div class="col-lg-3 mx-auto "></div>
                        <div class="col-lg-3 col-md-6 mx-auto my-3 wow fadeIn" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CF_Rapporteur.jpg" alt="">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 p-4">
                                    <h5 class="mb-0">M. NJOH NIBA B.</h5>
                                    <small><?= $lang['team']['organes']['CF-ex-2'] ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mx-auto mt-3 wow fadeIn" data-wow-delay="0.5s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CF_membre.jpg" alt="">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 p-4">
                                    <h5 class="mb-0">Mme MBONG Rachel </h5>
                                    <small><?= $lang['team']['organes']['CF-ex-3'] ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <?php include_once("footer.php") ?>
        <!-- Footer End -->

        <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('munap').setAttribute("class", "nav-link active");
        </script>
    </body>

</html>