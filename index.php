<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>MUNAP - DGB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo-munap.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Nav bar Start -->
    <?php include_once("header.php") ?>
    <!-- Nav bar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-4 ">
        <div class="owl-carousel header-carousel position-relative ">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carossel/carossel_1.jpg" alt="" style="height: 580px; width: 100%;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .6);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">

                                <h1 class="display-3 text-white animated slideInDown mb-4">ASSEMBLEE GENERALE
                                    EXTRAORDINAIRE
                                </h1>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    Palais des Congrès
                                </h5>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                <a href="actus_activ_1.php" class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft">Lire
                                    plus</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carossel/carossel_2.jpg" alt="" style="height: 580px; width: 100%;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .6);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">

                                <h1 class="display-3 text-white animated slideInDown mb-4">DONS AUX ORPHELINS
                                    DES
                                    MUTUALISTES DECEDES
                                </h1>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Ministère des
                                    Finances
                                </h5>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                <a href="actus_event_1.php" class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft">Lire
                                    plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carossel/carossel_3.jpg" alt="" style="height: 580px; width: 100%;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .6);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">

                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">INAUGURATION DU NOUVEAU
                                    BUS
                                </h1>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    Ministère des Finances
                                </h5>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                <a href="actus_activ_2.php" class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft">Lire
                                    plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carossel/carossel_4.jpg" alt="" style="height: 580px; width: 100%; ">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .6);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">

                                <h1 class="display-3 text-white animated slideInDown mb-4">CEREMONIE DE DEPART EN
                                    RETRAITE
                                </h1>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Ministère des
                                    Finances
                                </h5>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                <a href="actus_activ_3.php" class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft">Lire
                                    plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <div class="container">

        <!-- Historiq Start -->
        <div id="creation" class="row px-2 mb-4 wow fadeIn decalage-haut" data-wow-delay="0.3s">
            <fieldset class="bg-light  p-0 border-bottom border-3">
                <legend class="p-2" style="background-color: var(--primary); color: white;">La Création
                </legend>
                <p class="p-2" style="text-align: justify;">L'Association Mutualiste MUNAP-DGB, créée le <b>23 JUIN
                        2007</b>, est une association de droit camerounais reconnue officiellement suivant RDA
                    <b>n°000728/RDA/J06/BAPP du 19 juillet 2007</b> complété par son modificatif
                    <b>n°001336/RRDA/ JO6/BAPP du 23 août
                        2012.</b><br /> Elle regroupe en son sein, le personnel en service dans les services
                    centraux de la Direction Générale du Budget, le personnel en service dans les services
                    déconcentrés de la
                    Direction Générale du Budget, le Personnel en service dans les Contrôles Régionaux
                    des Finances, le personnel en service dans les Contrôle Départementaux des Finances.
                </p>
            </fieldset>
        </div>
        <!-- Historiq End -->

        <div class="row ">

            <!-- Speech DGB Start -->
            <div class="col-md-6 col-lg-12 mt-3">
                <h3 class="text-center">Mot du Président de l'Assemblée Général</h3>
                <br />
                <img src="img/organes/CA_DGB.jpg" class="m-lg-2 float-lg-end imgshadow px-2" alt="MINFI-DGB">
                <p style="text-align: justify;" class="m-2 wow fadeIn" data-wow-delay="0.4s">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    <br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <!-- Speech DGB End -->
        </div>

        <!-- About Start -->
        <div class="row wow fadeInUp overflow-hidden my-3 px-2">
            <div class="about px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-5 ps-lg-0" style="min-height: 400px; background-color: #eeee;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="img/MUNAP_DGB.png" style="object-fit: cover;" alt="Logo_MUNAP-DGB">
                        </div>
                    </div>
                    <div class="bg-light col-lg-7 about-text py-2 ">
                        <div class="p-2 p-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="section-title text-start">
                                <h5 class="display-5 mb-4">Qui est membre ?</h5>
                            </div>
                            <p class="mb-0 pb-2" style="text-align: justify;">Toute personne physique ou morale qui
                                s'acquitte régulièrement de
                                ses cotisations, ou qui contribue à la prospérité de la mutuelle par des
                                contributions ou prestations de toutes sortes.
                            <ul class="mb-4 py-0 fleche-puce">
                                <li><a href="#" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#adhesionModal">Voir les Frais
                                        d'Adhésion</a></li>
                                <li><a href="#" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#cotisationModal">Voir les Frais
                                        de Cotisation Annuelles</a></li>
                            </ul>
                            </p>

                            <!-- Modal Adhesion Start -->
                            <div class="modal fade" id="adhesionModal" tabindex="-1" aria-labelledby="adhesionModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="adhesionModal">Frais Adhésion Mutuelle</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="allo-text">
                                            <ul>
                                                <li><b>Agents Décisionnaires</b> : 10.000 F </li>
                                                <li><b>Agent Contractuel</b> : 15.000 F </li>
                                                <hr />
                                                <li><b>Chef de Bureau</b> : 15.000 F</li>
                                                <li><b>Cadres</b> : 20.000 F</li>
                                                <li><b>Chef de Service</b> : 30.000 F.</li>
                                                <hr />
                                                <li><b>Sous Directeur</b> : 50.000 F</li>
                                                <li><b>Chef de Division</b> : 75.000 F</li>
                                                <li><b>Directeur</b> : 100.000 F.</li>
                                                <li><b>Directeur Général</b> : PM </li>
                                            </ul>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                            <button class="btn btn-primary" data-bs-target="#cotisationModal" data-bs-toggle="modal" data-bs-dismiss="modal">Voir les Cotisations
                                                annuelle</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Adhesion End -->

                            <!-- Modal Cotisation Start -->
                            <div class="modal fade" id="cotisationModal" tabindex="-1" aria-labelledby="cotisationModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="cotisationModal">Cotisation Annuelle</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table align-middle table-hover table-bordered border-primary caption-top">
                                                <caption style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: larger; font-weight: 800; color:#AB7442;">
                                                    Membres Actifs</caption>
                                                <thead style="background-color: var(--primary); color: white;">
                                                    <tr>
                                                        <th scope="col">Statut Membre</th>
                                                        <th scope="col">Montant / an</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Agents décisionnaires</td>
                                                        <td>18.000 F</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul class="mb-0">
                                                                <li>Contractuels</li>
                                                                <li>Cadres</li>
                                                            </ul>
                                                        </td>
                                                        <td>24.000 F</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul class="mb-0">
                                                                <li>Chefs de service</li>
                                                                <li>Contrôleurs de la solde</li>
                                                                <li>Chef de Bureau</li>
                                                                <li>C E A</li>
                                                            </ul>
                                                        </td>
                                                        <td>30.000 F</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sous-Directeur et
                                                            plus</td>
                                                        <td>36.000 F</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table align-middle table-hover table-bordered border-dark caption-top">
                                                <caption style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: larger; font-weight: 800; color:#353535;">
                                                    Membres Retraités</caption>
                                                <thead style="background-color: var(--dark); color: white;">
                                                    <tr>
                                                        <th scope="col">Statut Membre</th>
                                                        <th scope="col">Montant / an</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Cadres et responsables</td>
                                                        <td>18.000 F</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agents
                                                        </td>
                                                        <td>12.000 F</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table align-middle table-hover table-bordered border-primary caption-top">
                                                <caption style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: larger; font-weight: 800; color:#cc6608;">
                                                    Membres Affiliés</caption>
                                                <thead style="background-color: #cc6608; color: white;">
                                                    <tr>
                                                        <th scope="col">Statut Membre</th>
                                                        <th scope="col">Montant / an</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Conjoint</td>
                                                        <td>2/3 de la cotisation du membre</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Parent et Enfant
                                                        </td>
                                                        <td>1/3 de la cotisation du membre</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                            <button class="btn btn-primary" data-bs-target="#adhesionModal" data-bs-toggle="modal" data-bs-dismiss="modal">Voir Frais
                                                d'Adhésion</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Cotisation End -->

                            <div class="section-title text-start">
                                <h5 class="display-5 mb-4">Qualités de membres </h5>
                            </div>
                            <p>Les Mutualistes sont divisés en quatre (04) catégories
                            <ul class="mb-0">
                                <li><b>Membres Actifs : </b>tout personnel en activité dans les services
                                    centraux ou
                                    déconcentrés de la Direction Générale du Budget, qui adhère aux présents
                                    statuts, verse un droit d’adhésion et s’acquitte régulièrement de ses
                                    cotisations dûes.</li><br />
                                <li><b>Membres d’Honneur : </b>toute personne physique ou morale qui, sans
                                    bénéficier des avantages de la Mutuelle, contribue à la prospérité de
                                    celle-ci
                                    par des contributions ou prestations de toutes sortes.</li><br />
                                <li><b>Membres Conseillers : </b>toute personne physique ou morale qui, sans
                                    bénéficier des avantages de la Mutuelle, contribue à la prospérité de
                                    celle-ci
                                    par des contributions ou prestations de toutes sortes.</li><br />
                                <li><b>Membres Retraités : </b>tout personnel n'étant plus en activité dans les
                                    services centraux ou déconcentrés de la Direction Générale du Budget, qui
                                    adhère
                                    aux présents statuts, verse un droit d’adhésion et s’acquitte régulièrement
                                    de
                                    ses cotisations dûes.</li>
                            </ul>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="row px-4 px-lg-2 ">
            <!-- Stats Start -->
            <fieldset class="bg-light border-top border-bottom border-3">

                <h3 class="text-center pt-4">Statistiques MUNAP-DGB </h3>
                <div class="wow fadeInUp pb-2 px-2" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center justify-content-evenly flex-wrap">

                        <div class="m-3 d-flex flex-column align-items-center">
                            <i class="fa fa-users fa-2x text-primary"></i>
                            <h2 class="text-primary m-0" data-toggle="counter-up">50</h2>
                            <p class="fw-medium mb-0">Membres<br />d'Honneur</p>
                        </div>

                        <div class="m-3 d-flex flex-column align-items-center">
                            <i class="fa fa-users fa-2x text-primary"></i>
                            <h2 class="text-primary m-0" data-toggle="counter-up">10</h2>
                            <p class="fw-medium mb-0">Membres<br />Conseillers</p>
                        </div>

                        <div class="m-3 d-flex flex-column align-items-center">
                            <i class="fa fa-users fa-2x text-primary"></i>
                            <h2 class="text-primary m-0" data-toggle="counter-up">700</h2>
                            <p class="fw-medium mb-0">Membres<br />Actifs</p>
                        </div>

                        <div class="m-3 d-flex flex-column align-items-center">
                            <i class="fa fa-users fa-2x text-primary"></i>
                            <h2 class="text-primary m-0" data-toggle="counter-up">150</h2>
                            <p class="fw-medium mb-0">Membres<br />Retraités</p>
                        </div>

                    </div>
                </div>
            </fieldset>
            <!-- Stats End -->
        </div>


    </div>

    <!-- Partner Start -->

    <div class="row mt-5 px-lg-5">
        <h3 class="text-center ">Nos Partenaires</h3>
        <div class="wow fadeIn pb-2 px-4 px-lg-5" data-wow-delay="0.7s">
            <div class="d-flex align-items-center justify-content-evenly flex-wrap">

                <div class="m-3 d-flex flex-column align-items-center">
                    <img src="img/partenaires/minsante.jpg" alt="Logo_MINSANTE" width="70px" height="70px">
                    <p class="fw-medium m-2"><b>MINSANTE</b></p>
                </div>

                <div class="m-3 d-flex flex-column align-items-center">
                    <img src="img/partenaires/logo_Fidev.jpg" alt="Logo_FIDEV" width="70px" height="70px">
                    <p class="fw-medium m-2"><b>FIDEV</b></p>
                </div>
                <div class="m-3 d-flex flex-column align-items-center">
                    <img src="img/partenaires/cenadi.jpg" alt="Logo_CENADI" width="70px" height="70px">
                    <p class="fw-medium m-2"><b>CENADI</b></p>
                </div>

                <div class="m-3 d-flex flex-column align-items-center">
                    <img src="img/partenaires/bunec.jpg" alt="Logo_BUNEC" width="70px" height="70px">
                    <p class="fw-medium m-2"><b>BUNEC</b></p>
                </div>



            </div>
        </div>
    </div>
    <!-- Partner End -->

    <!-- Footer Start -->
    <?php include_once("footer.php") ?>
    <!-- Footer End -->

    <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('home').setAttribute("class", "nav-link active");
    </script>
</body>

</html>