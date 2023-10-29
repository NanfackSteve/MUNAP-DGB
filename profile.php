<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>MUNAP - Profile</title>
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

        <!-- Page Header Start -->
        <div class="container-fluid page-header-profile h-3 mb-3">
            <div class="container py-3">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Mon Profil</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a class="text-white underline-hover" href="#">Accueil</a></li>
                        <li class="breadcrumb-item"><a class="text-white underline-hover" href="#">Modifier Mot de
                                passe</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Infos Member Start -->
        <div class="container-fluid bg-white ">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card shadow">
                            <div class="card-header text-center">
                                <h5>Mes Informations Personnelles</h5>
                            </div>
                            <div class="card-body pt-1 pb-0">
                                <div class="row card-text pb-0">
                                    <ul class="col" style="list-style-type: none; padding-left: 0.5rem; ">
                                        <li><span class="me-2">Numéro adhésion</span><span class="mx-1">/
                                            </span><span>A0001</span></li>
                                        <li><span class="me-1">Matricule</span><span><span class="mx-2">/
                                                </span></span>75142J</li>
                                        <li><span style="margin-right: 30px;">Noms</span><span class="mx-2">/
                                            </span><span>NSOCK</span></li>
                                        <li><span class="me-2">Prénoms</span><span class="mx-2">/
                                            </span><span>Sidoine</span>
                                        </li>
                                        <li><span style="margin-right: 36px;">Né le</span><span class="mx-2">/
                                            </span><span>1979-05-16</span></li>
                                        <li><span style="margin-right: 28px;">Statut</span><span class="mx-2">/
                                            </span><span>Actif</span> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer text-center text-muted">
                                Membre depuis -
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card  shadow">
                            <div class="card-header text-center">
                                <h5>Mes Cotisations</h5>
                            </div>
                            <div class="card-body pt-1 pb-0">
                                <div class="row card-text pb-0">
                                    <ul class="col" style="list-style-type: none; padding-left: 0.5rem; ">
                                        <li><span class="me-1">administration</span><span class="mx-1">/
                                            </span><span>Assemblée Générale</span></li>
                                        <li><span class="me-1">Fonction</span><span><span class="mx-2">/
                                                </span>Chef de Bureau</span></li>
                                        <li><span style="margin-right: 18px;">Région</span><span class="mx-2">/
                                            </span><span>Centre</span></li>
                                        <li><span style="margin-right: 20px;">Qualité</span><span class="mx-2">/
                                            </span><span>Membre Actif</span> </li>
                                        <li><span class="me-1">Frais adhésion</span><span class="mx-2">/
                                            </span><span>15000</span>FCFA</li>
                                        <li><span class="me-1"">Montant cotisé</span><span class=" mx-2">/
                                            </span><span>30.000</span>FCFA</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer text-center text-muted">
                                2 days ago
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card  shadow">
                            <div class="card-header text-center">
                                <h5>Personnes Affiliées</h5>
                            </div>
                            <div class="card-body pt-1 pb-0">
                                <div class="row card-text pb-0">

                                </div>
                            </div>
                            <div class="card-footer text-center text-muted">
                                2 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Infos Member End -->


        <!-- Footer Start -->
        <?php include_once("footer.php") ?>
        <!-- Footer End -->

        <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('profile').setAttribute("class", "nav-link active");
        </script>
    </body>

</html>