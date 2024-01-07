<?php session_start();
include_once("language/lang.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $lang['team']['organes']['title-page'] ?></title>
    <?php include_once("head.php") ?>
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

    <div class="container mt-4">

        <hr>
        <h2 class="text-center ">Catégories</h2>

        <ul class="nav nav-tabs justify-content-center mb-5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active myTabs" id="ag-tab" data-bs-toggle="tab" data-bs-target="#ag" type="button" role="tab" aria-controls="ag" aria-selected="true">Assemblée Générale</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link myTabs" id="ca-tab" data-bs-toggle="tab" data-bs-target="#ca" type="button" role="tab" aria-controls="ca" aria-selected="false">Conseil d'administration</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link myTabs" id="dons-tab" data-bs-toggle="tab" data-bs-target="#dons" type="button" role="tab" aria-controls="dons" aria-selected="false">Dons</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link myTabs" id="sports-tab" data-bs-toggle="tab" data-bs-target="#sports" type="button" role="tab" aria-controls="sports" aria-selected="false">Sports</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link myTabs" id="divers-tab" data-bs-toggle="tab" data-bs-target="#divers" type="button" role="tab" aria-controls="divers" aria-selected="false">Divers</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">

            <!-- TAB A.G -->
            <div class="tab-pane fade show active" id="ag" role="tabpanel" aria-labelledby="ag-tab">

                <div class="row g-4 mb-4">

                    <div class="col-lg-4 col-md-6 portfolio-item ">
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

                </div>

            </div>

            <!-- TAB C.A -->
            <div class="tab-pane fade" id="ca" role="tabpanel" aria-labelledby="ca-tab">

                <div class="row g-4 mb-4">

                    <div class="col-lg-4 col-md-6 portfolio-item ">
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


                </div>

            </div>

            <!-- TAB SPORTS -->
            <div class="tab-pane fade" id="sports" role="tabpanel" aria-labelledby="sports-tab">

                <div class="row g-4 mb-4">

                    <div class="col-lg-4 col-md-6 portfolio-item">
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
                </div>


            </div>

            <!-- TAB DONS -->
            <div class="tab-pane fade" id="dons" role="tabpanel" aria-labelledby="dons-tab">

                <div class="row g-4 mb-4">

                    <div class="col-lg-4 col-md-6 portfolio-item ">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/actus/events/actus_dons_B_9.jpg" alt="" style="height: 250px;">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/actus/events/actus_dons_B_9.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href="actus_event_2.php"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2"><?= $lang['news']['events']['-2-place'] ?>
                                </p>
                                <h5 class="lh-base mb-0"><?= $lang['news']['events']['-2-title'] ?></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item ">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/actus/events/actus_dons_A_2.jpg" alt="" style="height: 250px;">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/actus/events/actus_dons_A_2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href="actus_event_1.php"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2"><?= $lang['news']['events']['-1-place'] ?>
                                </p>
                                <h5 class="lh-base mb-0"><?= $lang['news']['events']['-1-title'] ?></a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <!-- TAB DIVERS -->
            <div class="tab-pane fade" id="divers" role="tabpanel" aria-labelledby="divers-tab">

                <div class="row g-4 mb-4">
                    <div class="col-lg-4 col-md-6 portfolio-item ">
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

                    <div class="col-lg-4 col-md-6 portfolio-item ">
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
    </div>


    <?php include_once("footer.php") ?>
    <!-- Footer End -->

    <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('actus').setAttribute("class", "nav-link active");
    </script>

</body>

</html>