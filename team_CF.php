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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

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
                <?= $lang['team']['organes']['head-link-3'] ?> </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="team_CA.php"><?= $lang['team']['organes']['head-link-1'] ?></a></li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="team_BE.php"><?= $lang['team']['organes']['head-link-2'] ?></a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="team_CF.php"><?= $lang['team']['organes']['head-link-3'] ?></a></li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="team_DR.php"><?= $lang['team']['organes']['head-link-4'] ?></a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">

                <span id="cf" class="decalage-haut"></span>
                <div class="row g-4">
                    <div class="col-lg-8 bg-light mt-3">
                        <p class="p-4 mb-4" style="text-align: justify;"><?= $lang['team']['organes']['word-cf'] ?>
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item ">
                            <div class="overflow-hidden position-relative">
                                <img class="img-fluid" src="img/organes/CF_President.jpg" alt="" style="width: 100%;">
                            </div>
                            <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                                <h5 class="mb-1">M. BEKOLO Xavier</h5>
                                <small><b><?= $lang['team']['organes']['CF-ex-1'] ?></b></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-3 mx-auto "></div>
                    <div class="col-lg-3 col-md-6 mx-auto mt-3 wow fadeIn" data-wow-delay="0.3s">
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
        document.getElementById('members').setAttribute("class", "nav-link active");
    </script>
</body>

</html>