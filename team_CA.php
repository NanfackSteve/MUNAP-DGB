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
                    <?= $lang['team']['organes']['head-link-1'] ?>
                </h1>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">

                    <!-- Conseil d'administration -->
                    <span id="ca" class="decalage-haut"></span>
                    <div class="row ">

                        <div class="col-lg-8 bg-light">
                            <p class="p-4" style="text-align: justify;">Les membres du conseil d’administration sont
                                élus pour un mandat de deux ans renouvelable.
                                le conseil d’administration élit en son sein son président, a la majorité de 2/3 des
                                membres présents ou représentés.
                            <ul>Le conseil d’administration dispose des pouvoirs les plus étendus pour évaluer la
                                gestion de la mutuelle. A ce titre, il est chargé notamment ::
                                <li>De fixer le programme d’action de la mutuelle ;</li>
                                <li>D’adopter le budget de la mutuelle ;</li>
                                <li>D’adopter les rapports les d’activités ;</li>
                                <li>D’arrêter de manière définitive les comptes et les états financiers annuels
                                    (administratif et de gestion) ;</li>
                                <li>D’adopter les projets d’ordre du jour de l’assemblée général ainsi que tous les
                                    documents soumis à cette instance ;</li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item ">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CA_President.jpg" alt=""
                                        style="width: 100%;">
                                </div>
                                <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                                    <h5 class="mb-1">Mme MENGUELE Judith</h5>
                                    <small><b><?= $lang['team']['organes']['ca-president'] ?></b></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-1 g-4">
                        <span class="col-lg-1 mx-auto"></span>
                        <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CA_RepContrRegFin.jpg" alt=""
                                        style="width: 100%;">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 pt-4 pb-1 px-2">
                                    <h5 class="mb-0">M. OYONO Thierry A.</h5>
                                    <small><?= $lang['team']['organes']['ca-controler'] ?></br><?= $lang['team']['organes']['ca-controler-1'] ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CA_RepSousDir.jpg" alt=""
                                        style="width: 100%;">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                                    <h5 class="mb-1">M. NSOM Hugues</h5>
                                    <small><?= $lang['team']['organes']['ca-controler-2'] ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CA_RepCFC-CFS.jpg" alt=""
                                        style="width: 100%;">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 pt-4 pb-1 px-2">
                                    <h5 class="mb-0">M. NDONG MVE Eric</h5>
                                    <small><?= $lang['team']['organes']['ca-controler-3'] ?><br /><?= $lang['team']['organes']['ca-controler-4'] ?></small>
                                </div>
                            </div>
                        </div>
                        <span class="col-lg-1 mx-auto"></span>
                    </div>

                    <div class="row mt-1 g-4">
                        <span class="col-lg-1 mx-auto"></span>
                        <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CA_RepContrDepFin.jpg" alt=""
                                        style="width: 100%;">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 pt-4 pb-1 px-2">
                                    <h5 class="mb-0">M. BITETE Roger</h5>
                                    <small><?= $lang['team']['organes']['ca-controler-5'] ?><br /><?= $lang['team']['organes']['ca-controler-6'] ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CA_RepChefServices.jpg" alt=""
                                        style="width: 100%;">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                                    <h5 class="mb-1">M. MAYO Dieudonné</h5>
                                    <small><?= $lang['team']['organes']['ca-controler-7'] ?><br /></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CA_RepChefBureau.jpg" alt=""
                                        style="width: 100%;">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                                    <h5 class="mb-0">M. NYANGON Patient</h5>
                                    <small><?= $lang['team']['organes']['ca-controler-8'] ?></small>
                                </div>
                            </div>
                        </div>
                        <span class="col-lg-1 mx-auto"></span>
                    </div>

                    <div class="row mt-1 g-4">
                        <span class="col-lg-1 mx-auto"></span>
                        <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CA_RepCadres.jpg" alt=""
                                        style="width: 100%;">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                                    <h5 class="mb-0">Mme NTSAMA Sylvie</h5>
                                    <small><?= $lang['team']['organes']['ca-controler-9'] ?></small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CA_RepAgent.jpg" alt=""
                                        style="width: 100%;">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 p-4">
                                    <h5 class="mb-0">M. JEUTSA David</h5>
                                    <small><?= $lang['team']['organes']['ca-controler-10'] ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item">
                                <div class="overflow-hidden position-relative">
                                    <img class="img-fluid" src="img/organes/CA_RepRetraite.jpg" alt=""
                                        style="width: 100%;">

                                </div>
                                <div class="text-center border border-5 border-light border-top-0 pt-4 pb-4 px-2">
                                    <h5 class="mb-1 p-0">Mme NTSAMA Isabelle</h5>
                                    <small><?= $lang['team']['organes']['ca-controler-11'] ?></small>
                                </div>
                            </div>
                        </div>
                        <span class="col-lg-1 mx-auto"></span>
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