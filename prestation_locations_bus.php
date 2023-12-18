<?php session_start();
include_once("language/lang.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $lang['services']['title-page'] ?></title>
    <?php include_once("head.php") ?>
</head>

<body class="bg-light">

    <!-- Nav bar Start -->
    <?php include_once("header.php") ?>
    <!-- Nav bar End -->

    <!-- Prestations Start -->
    <div class="container">
        <div class="row mt-2 g-4 ">
            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInLeft shadow mb-5 bg-body rounded" data-wow-delay="0.5s">
                    <img src="img/prestations/location-bus.jpg" class="card-img-top img-fluid " alt="...">
                    <div class="card-body ">
                        <h5 class="card-title"><?= $lang['services']['bus-classic-title'] ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><?= $lang['services']['condition-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-condition-1'] ?></li>
                                <li><?= $lang['services']['bus-condition-2'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6><?= $lang['services']['bus-case-1'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-classic-condition-2'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6><?= $lang['services']['bus-case-2'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-classic-condition-1'] ?></li>
                            </ul>
                        </li>

                        <li class="list-group-item">
                            <h6><?= $lang['services']['pieces-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-piece-1'] ?></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a target="_blank" download="Formulaire_Bus.pdf" href="files/Formulaire_Bus.pdf" class="card-link"><?= $lang['services']['download'] ?></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInUp shadow mb-5 bg-body rounded" data-wow-delay="0.7s">
                    <img src="img/prestations/location-bus-vip.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lang['services']['bus-vip-title'] ?></h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><?= $lang['services']['condition-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-condition-1'] ?></li>
                                <li><?= $lang['services']['bus-condition-2'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6><?= $lang['services']['bus-case-1'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-vip-condition-2'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6><?= $lang['services']['bus-case-2'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-vip-condition-1'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item pe-0">
                            <h6><?= $lang['services']['pieces-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-piece-1'] ?></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a target="_blank" download="Formulaire_Bus.pdf" href="files/Formulaire_Bus.pdf" class="card-link"><?= $lang['services']['download'] ?></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInRight shadow mb-5 bg-body rounded" data-wow-delay="0.5s">
                    <img src="img/prestations/location-bus-vip-2.jpg" class="card-img-top img-fluid w-100 " alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lang['services']['bus-vip-2-title'] ?></h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><?= $lang['services']['condition-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-condition-1'] ?></li>
                                <li><?= $lang['services']['bus-condition-2'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6><?= $lang['services']['bus-case-1'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-vip-condition-2'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6><?= $lang['services']['bus-case-2'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-vip-condition-1'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item pe-0">
                            <h6><?= $lang['services']['pieces-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-piece-1'] ?></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a target="_blank" download="Formulaire_Bus.pdf" href="files/Formulaire_Bus.pdf" class="card-link"><?= $lang['services']['download'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Prestations End -->

    <!-- Footer Start -->
    <?php include_once("footer.php") ?>
    <!-- Footer End -->

    <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('process').setAttribute("class", "nav-link active");
    </script>
</body>

</html>