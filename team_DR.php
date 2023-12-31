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
        <div class="container-fluid page-header-team py-4 mb-2">
            <div class="container py-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">
                    <?= $lang['team']['organes']['head-link-4'] ?></h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white underline-hover"
                                href="team_CA.php"><?= $lang['team']['organes']['head-link-1'] ?></a></li>
                        <li class="breadcrumb-item"><a class="text-white underline-hover"
                                href="team_BE.php"><?= $lang['team']['organes']['head-link-2'] ?></a>
                        </li>
                        <li class="breadcrumb-item"><a class="text-white underline-hover"
                                href="team_CF.php"><?= $lang['team']['organes']['head-link-3'] ?></a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Team Start -->
        <div class="container-xxl mb-5">
            <div class="container">

                <span id="dr" class="decalage-haut"></span>
                <div class="row ">
                    <div class="col-lg-12 bg-light my-4">
                        <p class="px-4 pt-4" style="text-align: justify;"><?= $lang['team']['organes']['word-dr'] ?></p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/DR_EN.jpg" alt="">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">M. ADAMOU</h5>
                                <small><?= $lang['team']['organes']['DR-ex-1'] ?><br><?= $lang['team']['organes']['DR-ex-2'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/DR_NORD.jpg" alt="">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">M. YOUSSOUF Ali</h5>
                                <small><?= $lang['team']['organes']['DR-ex-3'] ?><br><?= $lang['team']['organes']['DR-ex-4'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/DR_AD.jpg" alt="">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">M. ABOUBAKAR O.</h5>
                                <small><?= $lang['team']['organes']['DR-ex-5'] ?><br><?= $lang['team']['organes']['DR-ex-6'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/DR_CE.jpg" alt="">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">M. OSSOUBELO E.</h5>
                                <small><?= $lang['team']['organes']['DR-ex-7'] ?><br><?= $lang['team']['organes']['DR-ex-8'] ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/DR_NW.jpg" alt="">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">M. CHEKAI Cletus</h5>
                                <small><?= $lang['team']['organes']['DR-ex-9'] ?><br><?= $lang['team']['organes']['DR-ex-10'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/DR_SW.jpg" alt="">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">M. MUKETE John</h5>
                                <small><?= $lang['team']['organes']['DR-ex-11'] ?><br><?= $lang['team']['organes']['DR-ex-12'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/DR_LIT.jpg" alt="">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">M. El Hadj DAIROU</h5>
                                <small><?= $lang['team']['organes']['DR-ex-13'] ?><br><?= $lang['team']['organes']['DR-ex-14'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/DR_LIT2.jpg" alt="">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">M. MBUA Fred</h5>
                                <small><?= $lang['team']['organes']['DR-ex-15'] ?><br><?= $lang['team']['organes']['DR-ex-16'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/DR_SUD.jpg" alt="">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">Mme BILO'O Nathalie</h5>
                                <small><?= $lang['team']['organes']['DR-ex-17'] ?><br><?= $lang['team']['organes']['DR-ex-18'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid w-100" src="img/avatar-anonyme.png" alt="">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">M./Mme ...</h5>
                                <small><?= $lang['team']['organes']['DR-ex-19'] ?><br><?= $lang['team']['organes']['DR-ex-20'] ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid w-100" src="img/avatar-anonyme.png" alt="">

                            </div>
                            <div class="text-center border border-5 border-light border-top-0 p-4">
                                <h5 class="mb-0">M./Mme ...</h5>
                                <small><?= $lang['team']['organes']['DR-ex-21'] ?><br><?= $lang['team']['organes']['DR-ex-22'] ?></small>
                            </div>
                        </div>
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