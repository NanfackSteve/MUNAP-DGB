<?php session_start();

// Vérifiez si le paramètre "lang" est présent dans l'URL
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
} else {
    $lang = json_decode(file_get_contents('./language/fr.json'), true);
}
include_once("language/lang.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= $lang['index']['title-page'] ?></title>
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

    <!-- Load Stats Members -->
    <script>
        fetch("./models/api.json").then(rep => rep.json()).then(data => {
            fetch(data['link'] + "/api/totalmembres").then(rep => rep.json()).then(data => {
                $('#munap-stats-1').text(data['membres_honneur']);
                $("#munap-stats-2").text(data['membres_conseiller']);
                $("#munap-stats-3").text(data['membres_actif']);
                $("#munap-stats-4").text(data['membres_retraite']);
            })
        })
    </script>
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

                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    <?= $lang['index']['caroussel-1-title'] ?></h1>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    <?= $lang['index']['caroussel-1-subtitle'] ?></h5>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                <a href="actus_activ_1.php" class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft"><?= $lang['index']['read-more'] ?></a>

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

                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    <?= $lang['index']['caroussel-2-title'] ?></h1>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    <?= $lang['index']['caroussel-2-subtitle'] ?></h5>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                <a href="actus_event_1.php" class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft"><?= $lang['index']['read-more'] ?></a>
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
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    <?= $lang['index']['caroussel-3-title'] ?></h1>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    <?= $lang['index']['caroussel-3-subtitle'] ?></h5>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                <a href="actus_activ_2.php" class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft"><?= $lang['index']['read-more'] ?></a>
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
                                <h1 class="display-3 text-white animated slideInDown mb-4">
                                    <?= $lang['index']['caroussel-4-title'] ?></h1>
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                    <?= $lang['index']['caroussel-4-subtitle'] ?></h5>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                <a href="actus_activ_3.php" class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft"><?= $lang['index']['read-more'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <div class="container">

        <div class="row ">

            <!-- Speech DGB Start -->
            <div class="col-md-6 col-lg-12 mt-3">
                <h3 class="text-center"><?= $lang['index']['president-word-title'] ?></h3>
                <br />
                <img src="img/organes/CA_DGB.jpg" class="m-lg-2 float-lg-end imgshadow px-2" alt="MINFI-DGB">
                <p style="text-align: justify;" class="m-2 wow fadeIn" data-wow-delay="0.4s">
                    <?= $lang['index']['president-word-brief'] ?>  <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#dgb-speech-modal"><?= $lang['index']['read-more'] ?><i class="ms-2 fa fa-arrow-right ms-1"></i></a></p>
            </div>
            
            

                                            <!-- Speech Modal Start -->
                                            <div class="modal fade" id="dgb-speech-modal" tabindex="-1"
                                    aria-labelledby="dgb-speech-modal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="dgb-speech-modal">
                                                    <?= $lang['index']['president-word-title'] ?></h5>
                                            </div>
                                            <div class="modal-body">
                                                                                               <p><?= $lang['index']['president-word-body'] ?></p>
                                            </div>
                                            <div class="modal-footer align-items-center">
                           
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                        </div>
                                        </div>
                                    </div>
                                </div>
                              
                                            <!-- Speech Modal Start -->
            <!-- Speech DGB End -->
        </div>

        <!-- About Start -->
        <div class="row wow fadeInUp overflow-hidden my-3 px-2">
            <div class="about px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <!-- <div class="col-lg ps-lg-0" style="min-height: 400px; background-color: #eeee;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/MUNAP_DGB.png"
                                    style="object-fit: cover;" alt="Logo_MUNAP-DGB">
                            </div>
                        </div> -->
                    <!-- Bloc Who is member Start-->
                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="row px-4 px-lg-2 ">
            <!-- Stats Start -->
            <fieldset class="bg-light border-top border-bottom border-3">

                <h3 class="text-center pt-4"><?= $lang['index']['munap-stats'] ?></h3>
                <div class="wow fadeInUp pb-2 px-2" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center justify-content-evenly flex-wrap">

                        <div class="m-3 d-flex flex-column align-items-center">
                            <i class="fa fa-users fa-2x text-primary"></i>
                            <h2 id="munap-stats-1" class="text-primary m-0" data-toggle="counter-up">0</h2>
                            <p class="fw-medium mb-0"><?= $lang['index']['munap-stats-1'] ?></p>
                        </div>

                        <div class="m-3 d-flex flex-column align-items-center">
                            <i class="fa fa-users fa-2x text-primary"></i>
                            <h2 id="munap-stats-2" class="text-primary m-0" data-toggle="counter-up">0</h2>
                            <p class="fw-medium mb-0"><?= $lang['index']['munap-stats-2'] ?></p>
                        </div>

                        <div class="m-3 d-flex flex-column align-items-center">
                            <i class="fa fa-users fa-2x text-primary"></i>
                            <h2 id="munap-stats-3" class="text-primary m-0" data-toggle="counter-up">0</h2>
                            <p class="fw-medium mb-0"><?= $lang['index']['munap-stats-3'] ?></p>
                        </div>

                        <div class="m-3 d-flex flex-column align-items-center">
                            <i class="fa fa-users fa-2x text-primary"></i>
                            <h2 id="munap-stats-4" class="text-primary m-0" data-toggle="counter-up">0</h2>
                            <p class="fw-medium mb-0"><?= $lang['index']['munap-stats-4'] ?></p>
                        </div>

                    </div>
                </div>
            </fieldset>
            <!-- Stats End -->
        </div>


    </div>

    <!-- Partner Start -->

    <div class="row mt-5 px-lg-5">
        <h3 class="text-center "><?= $lang['index']['partner'] ?></h3>
        <div class="wow fadeIn pb-2 px-4 px-lg-5" data-wow-delay="0.7s">
            <div class="d-flex align-items-center justify-content-evenly flex-wrap">

                <div class="m-3 d-flex flex-column align-items-center">
                    <img src="img/partenaires/mundi.jpg" alt="Logo_BUNEC" width="70px" height="70px">
                    <p class="fw-medium m-2"><b>MUNDI</b></p>
                </div>

                <div class="m-3 d-flex flex-column align-items-center">
                    <img src="img/partenaires/mutresor.jpg" alt="Logo_CENADI" width="70px" height="70px">
                    <p class="fw-medium m-2"><b>MUTRESOR</b></p>
                </div>

                <div class="m-3 d-flex flex-column align-items-center">
                    <img src="img/partenaires/douanes.jpeg" alt="Logo_MINSANTE" width="70px" height="70px">
                    <p class="fw-medium m-2"><b>DOUANES</b></p>
                </div>

                <div class="m-3 d-flex flex-column align-items-center">
                    <img src="img/partenaires/logo_Fidev.jpg" alt="Logo_FIDEV" width="70px" height="70px">
                    <p class="fw-medium m-2"><b>FIDEV</b></p>
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