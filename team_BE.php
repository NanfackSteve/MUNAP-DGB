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
    <div class="container-fluid page-header-team-be py-4 mb-2">
        <div class="container py-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                <?= $lang['team']['organes']['head-link-2'] ?> </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="team_CA.php"><?= $lang['team']['organes']['head-link-1'] ?></a></li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="team_CF.php"><?= $lang['team']['organes']['head-link-3'] ?></a></li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="team_DR.php"><?= $lang['team']['organes']['head-link-4'] ?></a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="row g-2">

                <!-- Bureau Executif (Word and D.E Picture)-->
                <span id="be" class="decalage-haut"></span>
                <div class="row g-2">

                    <div class="col-lg-8 bg-light my-4">
                        <p class="px-4 pt-4" style="text-align: justify;"><?= $lang['team']['organes']['word-be'] ?>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item ">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/BE_Directeur_Executif.jpg" alt="" style="width: 100%;">
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                                <h5 class="mb-1">Mme GOMA Flore</h5>
                                <small><b><?= $lang['team']['organes']['BE-ex-1'] ?></b></small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Other Member -->
                <div class="row mt-1 g-2">
                    <div class="col-lg-3 col-md-6 mb-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/BE_SG.jpg" alt="" style="height: 280px; width: 100%;">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 px-2 py-4">
                                <h5 class="mb-0">M. BEKONO Marc Désiré</h5>
                                <small><?= $lang['team']['organes']['BE-ex-2'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/BE_SGA.jpg" alt="" style="height: 280px; width: 100%;">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 px-2 py-4">
                                <h5 class="mb-0">Mme ANKUONG Lucie</h5>
                                <small><?= $lang['team']['organes']['BE-ex-3'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 wow fadeIn" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/BE_Tresorier_General.jpg" style="height: 280px; width: 100%;">
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 px-0 py-4">
                                <h5 class="mb-0">Mme MANGOUA Mallette</h5>
                                <small><?= $lang['team']['organes']['BE-ex-4'] ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/BE_Tresorier_Gen_Adjoint.jpg" alt="" style="height: 280px; width: 100%;">
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 px-2 py-4">
                                <h5 class="mb-0">M. NSOCK Sidoine</h5>
                                <small><?= $lang['team']['organes']['BE-ex-5'] ?></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-2"></div>
                <span class="col-lg-4 mx-auto"></span>
                <div class="col-lg-3 col-md-6 mx-auto wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/organes/BE_SP.jpg" alt="" style="height: 280px; width: 100%;">
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 px-2 py-4">
                            <h5 class="mb-0">Mme FOPA</h5>
                            <small><?= $lang['team']['organes']['BE-ex-6'] ?></small>
                        </div>
                    </div>
                </div>
                <span class="col-lg-4 mx-auto"></span>
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