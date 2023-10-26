<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>MUNAP - Organes</title>
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
        <div class="container-fluid page-header-team py-5 mb-5">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Les Organes de la Mutuelle</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-white underline-hover" href="#ca">Conseil
                                d'Administration</a></li>
                        <li class="breadcrumb-item"><a class="text-white underline-hover" href="#be">Bureau Executif</a>
                        </li>
                        <li class="breadcrumb-item"><a class="text-white underline-hover" href="#cf">Commission
                                Financière</a></li>
                        <li class="breadcrumb-item"><a class="text-white underline-hover" href="#dr">Délégation
                                Régionale</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <!-- Conseil d'administration -->
                <span id="ca" class="decalage-haut"></span>
                <div class="section-title text-center">
                    <h1 id="ca" class="display-5 mb-5">Conseil d'Administration</h1>
                    <?php include_once("team_CA.php"); ?>
                </div>

                <!-- Bureau Executif -->
                <span id="be" class="decalage-haut"></span>
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5 mt-5">Bureau Executif</h1>
                    <?php include_once("team_BE.php"); ?>
                </div>

                <!-- Commision Financiere -->
                <span id="cf" class="decalage-haut"></span>
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5 mt-5">Commission Financière</h1>
                    <?php include_once("team_CF.php"); ?>
                </div>

                <!-- Delegation Regionale -->
                <span id="dr" class="decalage-haut"></span>
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5 mt-5">Délégation Régionale</h1>
                    <?php include_once("team_DR.php"); ?>
                </div>
            </div>
        </div>
        <!-- Team End -->


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