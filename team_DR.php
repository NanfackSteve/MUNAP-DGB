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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
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
                        <li class="breadcrumb-item"><a class="text-white underline-hover"
                                href="team_DR.php"><?= $lang['team']['organes']['head-link-4'] ?></a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">

                <span id="dr" class="decalage-haut"></span>
                <div class="row ">
                    <div class="col-lg-12 bg-light mb-4">
                        <p class="p-4 " style="text-align: justify;"><?= $lang['team']['organes']['word-dr']?></p>
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
        document.getElementById('members').setAttribute("class", "nav-link active");
        </script>
    </body>

</html>