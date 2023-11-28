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
                    <?= $lang['team']['organes']['head-link-2'] ?> </h1>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">

                <div class="row g-4">

                    <span id="be" class="decalage-haut"></span>
                    <div class="row g-4">

                        <div class="col-lg-8 bg-light mt-3">
                            <p class="p-4" style="text-align: justify;">Le bureau exécutif est l’organe de gestion de la
                                mutuelle. Il est représenté localement par les délégations régionales et peut leur
                                déléguer certaines de ses attributions.
                                Les membres du bureau exécutif sont solidaires dans la gestion de la mutuelle.
                                Le bureau exécutif se réunit au moins une fois par mois et aussi souvent que l’exigent
                                les circonstances sure convocation du directeur exécutif pour débattre a des problèmes
                                lies a la gestion de la mutuelle et à l’accomplissement de leurs fonctions.
                                Le secrétaire générale rapporte les affaires inscrites à l’ordre du jour des réunions du
                                bureau exécutif que convoque et préside le directeur exécutif.


                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item ">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/BE_Directeur_Executif.jpg" alt=""
                                        style="width: 100%;">
                                </div>
                                <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                                    <h5 class="mb-1">Mme GOMA Flore</h5>
                                    <small><b><?= $lang['team']['organes']['BE-ex-1'] ?></b></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-1 g-4">
                        <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/BE_SG.jpg" alt=""
                                        style="height: 280px; width: 100%;">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 px-2 py-4">
                                    <h5 class="mb-0">M. BEKONO Marc Désiré</h5>
                                    <small><?= $lang['team']['organes']['BE-ex-2'] ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/BE_SGA.jpg" alt=""
                                        style="height: 280px; width: 100%;">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 px-2 py-4">
                                    <h5 class="mb-0">Mme ANKUONG Lucie</h5>
                                    <small><?= $lang['team']['organes']['BE-ex-3'] ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/BE_Tresorier_General.jpg"
                                        style="height: 280px; width: 100%;">
                                    <div class=" team-social">
                                        <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center border border-5 border-light border-top-0 px-2 py-4">
                                    <h5 class="mb-0">Mme MANGOUA Mallette</h5>
                                    <small><?= $lang['team']['organes']['BE-ex-4'] ?></small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/BE_Tresorier_Gen_Adjoint.jpg" alt=""
                                        style="height: 280px; width: 100%;">
                                    <div class="team-social">
                                        <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href="tel:+237697911555"><i
                                                class="fa fa-phone"></i></a>
                                    </div>
                                </div>
                                <div class="text-center border border-5 border-light border-top-0 px-2 py-4">
                                    <h5 class="mb-0">M. NSOCK Sidoine</h5>
                                    <small><?= $lang['team']['organes']['BE-ex-5'] ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-1 g-1"></div>
                    <span class="col-lg-4 mx-auto"></span>
                    <div class="col-lg-3 col-md-6 mx-auto wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/BE_SP.jpg" alt=""
                                    style="height: 280px; width: 100%;">
                                <div class="team-social">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 px-2 py-4">
                                <h5 class="mb-0">Mme FOPA</h5>
                                <small><?= $lang['team']['organes']['BE-ex-6'] ?></small>
                            </div>
                        </div>
                    </div>
                    <span class="col-lg-4"></span>
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