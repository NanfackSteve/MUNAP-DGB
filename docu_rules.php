<?php session_start();
include_once("language/lang.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= $lang['rules']['page-title'] ?></title>
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
        <div class="container py-3">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $lang['rules']['head-title'] ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-1">Chap I</a></li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-2">Chap II</a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-3">Chap III</a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-4">Chap IV</a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-5">Chap V</a></li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#chap-6">Chap VI</a>
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
                <?php include_once("docu_rules_summary.php"); ?>
            </div>
            <div class="col-lg-1"></div>
        </div>

    </div>
    <!-- Sommaire End -->

    <!-- About Start -->

    <div class="container my-3">

        <!-- CHAPITRE I Start -->

        <div id="chap-1" class="px-md-1 decalage-haut">
            <h3 class="bg-dark text-light rounded-3 display-5 text-center my-5 px-1"><?= $lang['rules']['chap-1'] ?>
            </h3>
        </div>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 1er : </a></h4>
            <p><?= $lang['rules']['article-1'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 2 : </a></h4>
            <p><?= $lang['rules']['article-2'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 3 : </a></h4>
            <p><?= $lang['rules']['article-3'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 4 : </a></h4>
            <p><?= $lang['rules']['article-4'] ?></p>
        </div>

        <!-- CHAPITRE I End -->
    </div>



    <div class="container">

        <!-- CHAPITRE II Start -->

        <span id="chap-2" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">
                <?= $lang['rules']['chap-2'] ?></h3>
        </div>

        <!-- CHAP II - SECTION I -->

        <span id="chap2-sect1" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3"><?= $lang['rules']['chap-2-sect-1'] ?></h2>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 5 : </a></h4>
            <p><?= $lang['rules']['article-5'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 6 : </a></h4>
            <p><?= $lang['rules']['article-6'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 7 : </a></h4>
            <p><?= $lang['rules']['article-7'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 8 : </a></h4>
            <p><?= $lang['rules']['article-8'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 9 : </a></h4>
            <p><?= $lang['rules']['article-9'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 10 : </a></h4>
            <p><?= $lang['rules']['article-10'] ?></p>
        </div>

        <!-- CHAPITRE II - SECTION II -->

        <span id="chap2-sect2" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3"><?= $lang['rules']['chap-2-sect-2'] ?></h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 11 : </a></h4>
            <p><?= $lang['rules']['article-11'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 12 : </a></h4>
            <p><?= $lang['rules']['article-12'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 13 : </a></h4>
            <p><?= $lang['rules']['article-13'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 14 : </a></h4>
            <p><?= $lang['rules']['article-14'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 15 : </a></h4>
            <p><?= $lang['rules']['article-15'] ?></p>
        </div>

        <!-- CHAPITRE II - SECTION III -->

        <span id="chap2-sect3" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3"><?= $lang['rules']['chap-2-sect-3'] ?></h2>

        <!-- CHAPITRE II - SECTION III - PARAGRAPHE I -->
        <span id="chap2-sect3-para1" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['rules']['chap-2-sect-3-par1'] ?></h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 16 : </a></h4>
            <p><?= $lang['rules']['article-16'] ?></p>
        </div>

        <!-- CHAPITRE II - SECTION III - PARAGRAPHE II -->
        <span id="chap2-sect3-para2" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['rules']['chap-2-sect-3-par2'] ?></h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 17 : </a></h4>
            <p><?= $lang['rules']['article-17'] ?></p>
        </div>

        <!-- CHAPITRE II - SECTION III - PARAGRAPHE III -->
        <span id="chap2-sect3-para3" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['rules']['chap-2-sect-3-par3'] ?></h2>


        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 18 : </a></h4>
            <p><?= $lang['rules']['article-18'] ?></p>
            </li>
            </ol>
            </p>
        </div>

        <!-- CHAPITRE II - SECTION III - PARAGRAPHE IV -->
        <span id="chap2-sect3-para4" class="decalage-haut"></span>
        <h2 class="title-section mt-5 mb-3"><?= $lang['rules']['chap-2-sect-3-par4'] ?></h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 19 : </a></h4>
            <p><?= $lang['rules']['article-19'] ?></p>
        </div>

        <!-- CHAPITRE II - SECTION IV -->

        <span id="chap2-sect4" class="decalage-haut"></span>
        <h2 class="title-article mt-5 mb-3"><?= $lang['rules']['chap-2-sect-4'] ?></h2>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 20 : </a></h4>
            <p><?= $lang['rules']['article-20'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 21 : </a></h4>
            <p><?= $lang['rules']['article-21'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 22 : </a></h4>
            <p><?= $lang['rules']['article-22'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 23 : </a></h4>
            <p><?= $lang['rules']['article-23'] ?></p>
        </div>

        <!-- CHAPITRE II End -->
    </div>



    <div class="container">

        <!-- CHAPITRE III Start -->

        <span id="chap-3" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">
                <?= $lang['rules']['chap-3'] ?></h3>
        </div>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 24 : </a></h4>
            <p><?= $lang['rules']['article-24'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 25 : </a></h4>
            <p><?= $lang['rules']['article-25'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 26 : </a></h4>
            <p><?= $lang['rules']['article-26'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 27 : </a></h4>
            <p><?= $lang['rules']['article-27'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 28 : </a></h4>
            <p><?= $lang['rules']['article-28'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 29 : </a></h4>
            <p><?= $lang['rules']['article-29'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 30 : </a></h4>
            <p><?= $lang['rules']['article-30'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 31 : </a></h4>
            <p><?= $lang['rules']['article-31'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 32 : </a></h4>
            <p><?= $lang['rules']['article-32'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 33 : </a></h4>
            <p><?= $lang['rules']['article-33'] ?></p>
        </div>


        <!-- CHAPITRE III End -->
    </div>

    <div class="container">

        <!-- CHAPITRE IV Start -->
        <span id="chap-4" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">
                <?= $lang['rules']['chap-4'] ?></h3>
        </div>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 34 : </a></h4>
            <p><?= $lang['rules']['article-34'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 35 : </a></h4>
            <p><?= $lang['rules']['article-35'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 36 : </a></h4>
            <p><?= $lang['rules']['article-36'] ?></p>
        </div>

        <!-- CHAPITRE IV End -->
    </div>

    <div class="container">
        <!-- CHAPITRE V Start -->

        <span id="chap-5" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">
                <?= $lang['rules']['chap-5'] ?></h3>
        </div>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 37 : </a></h4>
            <p><?= $lang['rules']['article-37'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 38 : </a></h4>
            <p><?= $lang['rules']['article-38'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 39 : </a></h4>
            <p><?= $lang['rules']['article-39'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 40 : </a></h4>
            <p><?= $lang['rules']['article-40'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 41 : </a></h4>
            <p><?= $lang['rules']['article-41'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 42 : </a></h4>
            <p><?= $lang['rules']['article-42'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 43 : </a></h4>
            <p><?= $lang['rules']['article-43'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 44 : </a></h4>
            <p><?= $lang['rules']['article-44'] ?></p>
        </div>
        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 45 : </a></h4>
            <p><?= $lang['rules']['article-45'] ?></p>
        </div>

        <!-- CHAPITRE V End -->
    </div>

    <div class="container">
        <!-- CHAPITRE VI Start -->

        <span id="chap-6" class="decalage-haut"></span>
        <div class="mx-0">
            <h3 class=" bg-dark text-light rounded-3 display-5 text-center my-5 px-1">
                <?= $lang['rules']['chap-6'] ?></h3>
        </div>

        <div class="article">
            <h4><a style="color: #353535;" href="#">Article 46 : </a></h4>
            <p><?= $lang['rules']['article-46'] ?></p>
        </div>

        <!-- CHAPITRE VI End -->
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