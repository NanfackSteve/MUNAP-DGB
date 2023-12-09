<?php session_start();
include_once("language/lang.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= $lang['status']['page-title'] ?></title>
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
    <link href="css/font-awesome.min.css" rel="stylesheet">
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
    <div class="container-fluid page-header-docu py-3 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $lang['status']['head-title'] ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#title-1"><?= $lang['status']['head-title-1'] ?></a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#title-2"><?= $lang['status']['head-title-2'] ?></a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#title-3"><?= $lang['status']['head-title-3'] ?></a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#title-4"><?= $lang['status']['head-title-4'] ?></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Sommaire Start -->

    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-lg-1"></div>
            <div class="col-md-6 col-lg-10 align-self-center">
                <?php include_once("docu_status_summary.php"); ?>
            </div>
            <div class="col-lg-1"></div>
        </div>

    </div>
    <!-- Sommaire End -->

    <!-- About Start -->

    <div class="container my-3">

        <!-- TITRE I Start -->

        <span id="title-1" class="decalage-haut"></span>
        <div class="px-md-1">
            <h3 class="bg-dark text-light rounded-3 display-5 text-center my-5 px-1">
                <?= $lang['status']['title-1'] ?></h3>
        </div>

        <!-- TITRE I - CHAP I -->

        <span id="title1-chap1" class="decalage-haut"></span>
        <h2 class="title-article my-4"><?= $lang['status']['title-1-chap-1'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 1er : </a></h4>
            <p><?= $lang['status']['article-1'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 2 : </a></h4>
            <p><?= $lang['status']['article-2'] ?></p>
        </div>

        <!-- TITRE I - CHAP II -->

        <span id="title1-chap2" class="decalage-haut"></span>
        <h2 class="title-article mt-4 mb-3"><?= $lang['status']['title-1-chap-2'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 3 : </a></h4>
            <p><?= $lang['status']['article-3'] ?></p>
        </div>

        <!-- TITRE I End -->
    </div>



    <div class="container">

        <!-- TITRE II Start -->

        <span id="title-2" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">
                <?= $lang['status']['title-2'] ?></h3>
        </div>

        <!-- TITRE II - CHAP I -->

        <span id="title2-chap1" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3"><?= $lang['status']['title-2-chap-1'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 4 : </a></h4>
            <p><?= $lang['status']['article-4'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 5 : </a></h4>
            <p><?= $lang['status']['article-5'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 6 : </a></h4>
            <p><?= $lang['status']['article-6'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 7 : </a></h4>
            <p><?= $lang['status']['article-7'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 8 : </a></h4>
            <p><?= $lang['status']['article-8'] ?></p>
        </div>

        <!-- TITRE II - CHAP II -->

        <span id="title2-chap2" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3"><?= $lang['status']['title-2-chap-2'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 9 : </a></h4>
            <p><?= $lang['status']['article-9'] ?></p>
        </div>

        <!-- TITRE II - CHAP II - SECTION I -->

        <span id="title2-chap2-sect1" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['status']['title-2-chap-2-sect-1'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 10 : </a></h4>
            <p><?= $lang['status']['article-10'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 11 : </a></h4>
            <p><?= $lang['status']['article-11'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 12 : </a></h4>
            <p><?= $lang['status']['article-12'] ?></p>
        </div>

        <!-- TITRE II - CHAP II - SECTION II -->

        <span id="title2-chap2-sect2" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['status']['title-2-chap-2-sect-2'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 13 : </a></h4>
            <p><?= $lang['status']['article-13'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 14 : </a></h4>
            <p><?= $lang['status']['article-14'] ?></p>
        </div>

        <!-- TITRE II - CHAP II - SECTION III -->

        <span id="title2-chap2-sect3" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['status']['title-2-chap-2-sect-3'] ?></h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 15 : </a></h4>
            <p><?= $lang['status']['article-15'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 16 : </a></h4>
            <p><?= $lang['status']['article-16'] ?></p>
        </div>

        <!-- TITRE II - CHAP II - SECTION III - PARAGRAPH I -->

        <h2 class="title-paragraph mt-5 mb-3"><?= $lang['status']['title-2-chap-2-sect-3-par1'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 17 : </a></h4>
            <p><?= $lang['status']['article-17'] ?></p>
        </div>

        <!-- TITRE II - CHAP II - SECTION III - PARAGRAPH II -->

        <h2 class="title-paragraph mt-5 mb-3"><?= $lang['status']['title-2-chap-2-sect-3-par2'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 18 : </a></h4>
            <p><?= $lang['status']['article-18'] ?></p>
        </div>

        <!-- TITRE II - CHAP II - SECTION IV -->

        <span id="title2-chap2-sect4" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['status']['title-2-chap-2-sect-4'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 19 : </a></h4>
            <p><?= $lang['status']['article-19'] ?></p>
        </div>

        <!-- TITRE II End -->
    </div>



    <div class="container">

        <!-- TITRE III Start -->

        <span id="title-3" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">
                <?= $lang['status']['title-3'] ?></h3>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 20 : </a></h4>
            <p><?= $lang['status']['article-20'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 21 : </a></h4>
            <p><?= $lang['status']['article-21'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 22 : </a></h4>
            <p><?= $lang['status']['article-22'] ?></p>
        </div>

        <!-- TITRE III - CHAP I -->

        <span id="title3-chap1" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3"><?= $lang['status']['title-3-chap-1'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 23 : </a></h4>
            <p><?= $lang['status']['article-23'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 24 : </a></h4>
            <p><?= $lang['status']['article-24'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 25 : </a></h4>
            <p><?= $lang['status']['article-25'] ?></p>
        </div>

        <!-- TITRE III - CHAP II -->

        <span id="title3-chap2" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3"><?= $lang['status']['title-3-chap-2'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 26 : </a></h4>
            <p><?= $lang['status']['article-26'] ?></p>
        </div>

        <!-- TITRE III - CHAP II - SECTION I -->

        <span id="title3-chap2-sect1" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['status']['title-3-chap-2-sect-1'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 27 : </a></h4>
            <p><?= $lang['status']['article-27'] ?></p>
        </div>

        <!-- TITRE III - CHAP II - SECTION II -->

        <span id="title3-chap2-sect2" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['status']['title-3-chap-2-sect-2'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 28 : </a></h4>
            <p><?= $lang['status']['article-28'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 29 : </a></h4>
            <p><?= $lang['status']['article-29'] ?></p>
        </div>

        <!-- TITRE III - CHAP II - SECTION III -->

        <span id="title3-chap2-sect3" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['status']['title-3-chap-2-sect-3'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 30 : </a></h4>
            <p><?= $lang['status']['article-30'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 31 : </a></h4>
            <p><?= $lang['status']['article-31'] ?></p>
        </div>

        <!-- TITRE III - CHAP II - SECTION IV -->

        <span id="title3-chap2-sect4" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['status']['title-3-chap-2-sect-4'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 32 : </a></h4>
            <p><?= $lang['status']['article-32'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 33 : </a></h4>
            <p><?= $lang['status']['article-33'] ?></p>
        </div>

        <!-- TITRE III End -->
    </div>

    <div class="container">

        <!-- TITRE IV Start -->

        <span id="title-4" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">
                <?= $lang['status']['title-4'] ?></h3>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 34 : </a></h4>
            <p><?= $lang['status']['article-34'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 35 : </a></h4>
            <p><?= $lang['status']['article-35'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 36 : </a></h4>
            <p><?= $lang['status']['article-36'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 37 : </a></h4>
            <p><?= $lang['status']['article-37'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 38 : </a></h4>
            <p><?= $lang['status']['article-38'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 39 : </a></h4>
            <p><?= $lang['status']['article-39'] ?></p>
        </div>

        <!-- TITRE IV End -->
    </div>

    <!-- About End -->

    <!-- Footer Start -->
    <?php include_once("footer.php") ?>
    <!-- Footer End -->

    <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('docu').setAttribute("class", "nav-link active");
    </script>
</body>

</html>