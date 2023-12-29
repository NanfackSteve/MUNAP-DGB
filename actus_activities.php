<?php session_start();
include_once("language/lang.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $lang['news']['title-page'] ?></title>
    <?php include_once("head.php") ?>
    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
</head>

<body>

    <!-- Nav bar Start -->
    <?php include_once("header.php") ?>
    <!-- Nav bar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header-news py-5 ">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                <?= $lang['news']['activity']['head-title'] ?>
            </h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Activities Start -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="section-title text-center">
                <h1 class="display-5 mb-5"><?= $lang['news']['activity']['section-title'] ?></h1>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*"><?= $lang['news']['filter-all'] ?></li>
                        <li class="mx-2" data-filter=".first"><?= $lang['news']['activity']['filter-1'] ?></li>
                        <li class="mx-2" data-filter=".second"><?= $lang['news']['activity']['filter-2'] ?></li>
                        <li class="mx-2" data-filter=".third"><?= $lang['news']['activity']['filter-3'] ?></li>
                    </ul>
                </div>
            </div>

            <div class="row g-4 portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item third wow fadeIn" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/actus/activities/actus_sport_A_0.jpg" alt="" style="height: 250px;">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/actus/activities/actus_sport_A_0.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href="actus_activ_6.php"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">
                                <?= $lang['news']['activity']['-6-place'] ?></p>
                            <h5 class="lh-base mb-0"><?= $lang['news']['activity']['-6-title'] ?> </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item third wow fadeIn" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/actus/activities/actus_bus_B_0.jpg" alt="" style="height: 250px;">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/actus/activities/actus_bus_B_0.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href="actus_activ_5.php"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">
                                <?= $lang['news']['activity']['-5-place'] ?></p>
                            <h5 class="lh-base mb-0"><?= $lang['news']['activity']['-5-title'] ?> </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeIn" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/actus/activities/actus_meeting_B_2.jpg" alt="" style="height: 250px;">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/actus/activities/actus_meeting_B_2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href="actus_activ_4.php"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">
                                <?= $lang['news']['activity']['-4-place'] ?>
                            </p>
                            <h5 class="lh-base mb-0"><?= $lang['news']['activity']['-4-title'] ?></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeIn" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/actus/activities/actus_meeting_A_0.jpg" alt="" style="height: 250px;">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/actus/activities/actus_meeting_A_0.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href="actus_activ_1.php"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">
                                <?= $lang['news']['activity']['-1-place'] ?>
                            </p>
                            <h5 class="lh-base mb-0"><?= $lang['news']['activity']['-1-title'] ?></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item third wow fadeIn" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100 " src="img/actus/activities/actus_bus_A_3.jpg" alt="" style="height: 250px;">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/actus/activities/actus_bus_A_3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href="actus_activ_2.php"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">
                                <?= $lang['news']['activity']['-2-place'] ?></p>
                            <h5 class="lh-base mb-0"><?= $lang['news']['activity']['-2-title'] ?></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Activities End -->


    <!-- Footer Start -->
    <?php include_once("footer.php") ?>
    <!-- Footer End -->

    <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('actus').setAttribute("class", "nav-link active");
    </script>
</body>

</html>