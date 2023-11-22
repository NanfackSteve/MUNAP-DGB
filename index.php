<?php session_start();

// Vérifiez si le paramètre "lang" est présent dans l'URL
if (isset($_GET['lang'])) {
    $langue = $_GET['lang'];
    $_SESSION['lang'] = $langue;
} else {
    $lang = json_decode(file_get_contents('./language/fr.json'), true);
}

// Choisis la langue
if (isset($_SESSION['lang']) && $_SESSION['lang'] === 'fr') {
    $lang = json_decode(file_get_contents('./language/fr.json'), true);
} else if (isset($_SESSION['lang']) && $_SESSION['lang'] === 'en') {
    $lang = json_decode(file_get_contents('./language/en.json'), true);
} else {
    $lang = json_decode(file_get_contents('./language/fr.json'), true);
}
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

        <!-- Load Stats Members -->
        <script>
        fetch("https://236f-41-202-207-4.ngrok-free.app/api/totalmembres").then(rep => rep.json()).then(data => {
            $('#munap-stats-1').text(data['membres_honneur']);
            $("#munap-stats-2").text(data['membres_conseiller']);
            $("#munap-stats-3").text(data['membres_actif']);
            $("#munap-stats-4").text(data['membres_retraite']);
        });
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
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(53, 53, 53, .6);">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-8 text-center">

                                    <h1 class="display-3 text-white animated slideInDown mb-4">
                                        <?= $lang['index']['caroussel-1-title'] ?></h1>
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                        <?= $lang['index']['caroussel-1-subtitle'] ?></h5>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                    <a href="actus_activ_1.php"
                                        class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft"><?= $lang['index']['read-more'] ?></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carossel/carossel_2.jpg" alt="" style="height: 580px; width: 100%;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(53, 53, 53, .6);">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-8 text-center">

                                    <h1 class="display-3 text-white animated slideInDown mb-4">
                                        <?= $lang['index']['caroussel-2-title'] ?></h1>
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                        <?= $lang['index']['caroussel-2-subtitle'] ?></h5>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                    <a href="actus_event_1.php"
                                        class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft"><?= $lang['index']['read-more'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carossel/carossel_3.jpg" alt="" style="height: 580px; width: 100%;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(53, 53, 53, .6);">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-8 text-center">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">
                                        <?= $lang['index']['caroussel-3-title'] ?></h1>
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                        <?= $lang['index']['caroussel-3-subtitle'] ?></h5>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                    <a href="actus_activ_2.php"
                                        class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft"><?= $lang['index']['read-more'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carossel/carossel_4.jpg" alt=""
                        style="height: 580px; width: 100%; ">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(53, 53, 53, .6);">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-8 text-center">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">
                                        <?= $lang['index']['caroussel-4-title'] ?></h1>
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                                        <?= $lang['index']['caroussel-4-subtitle'] ?></h5>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">____________</p>
                                    <a href="actus_activ_3.php"
                                        class="btn btn-primary py-md-3 px-md-5 ms-2 animated slideInLeft"><?= $lang['index']['read-more'] ?></a>
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
                    <legend class="p-2" style="background-color: var(--primary); color: white;">
                        <?= $lang['index']['creation-title'] ?></legend>
                    <p class="p-2" style="text-align: justify;"><?= $lang['index']['creation-body'] ?></p>
                </fieldset>
            </div>
            <!-- Historiq End -->

            <div class="row ">

                <!-- Speech DGB Start -->
                <div class="col-md-6 col-lg-12 mt-3">
                    <h3 class="text-center"><?= $lang['index']['president-word-title'] ?></h3>
                    <br />
                    <img src="img/organes/CA_DGB.jpg" class="m-lg-2 float-lg-end imgshadow px-2" alt="MINFI-DGB">
                    <p style="text-align: justify;" class="m-2 wow fadeIn" data-wow-delay="0.4s">
                        <?= $lang['index']['president-word-body'] ?></p>
                </div>
                <!-- Speech DGB End -->
            </div>

            <!-- About Start -->
            <div class="row wow fadeInUp overflow-hidden my-3 px-2">
                <div class="about px-lg-0">
                    <div class="row g-0 mx-lg-0">
                        <div class="col-lg-5 ps-lg-0" style="min-height: 400px; background-color: #eeee;">
                            <div class="position-relative h-100">
                                <img class="position-absolute img-fluid w-100 h-100" src="img/MUNAP_DGB.png"
                                    style="object-fit: cover;" alt="Logo_MUNAP-DGB">
                            </div>
                        </div>
                        <div class="bg-light col-lg-7 about-text py-2 ">
                            <div class="p-2 p-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="section-title text-start">
                                    <h5 class="display-5 mb-4"><?= $lang['index']['who-member'] ?></h5>
                                </div>
                                <p class="mb-0 pb-2" style="text-align: justify;">
                                    <?= $lang['index']['who-member-def'] ?>
                                <ul class="mb-4 py-0 fleche-puce">
                                    <li><a href="#" class="btn btn-link p-0" data-bs-toggle="modal"
                                            data-bs-target="#adhesionModal"><?= $lang['index']['entry-cost-link'] ?></a>
                                    </li>
                                    <li><a href="#" class="btn btn-link p-0" data-bs-toggle="modal"
                                            data-bs-target="#cotisationModal"><?= $lang['index']['cotisation-link'] ?></a>
                                    </li>
                                </ul>
                                </p>

                                <!-- Modal Adhesion Start -->
                                <div class="modal fade" id="adhesionModal" tabindex="-1" aria-labelledby="adhesionModal"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="adhesionModal">
                                                    <?= $lang['index']['modal-entry-title'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="allo-text">
                                                <ul>
                                                    <li><b><?= $lang['index']['modal-entry-person-1'] ?></b> : 10.000 F
                                                    </li>
                                                    <li><b><?= $lang['index']['modal-entry-person-2'] ?></b> : 15.000 F
                                                    </li>
                                                    <hr />
                                                    <li><b><?= $lang['index']['modal-entry-person-3'] ?></b> : 15.000 F
                                                    </li>
                                                    <li><b><?= $lang['index']['modal-entry-person-4'] ?></b> : 20.000 F
                                                    </li>
                                                    <li><b><?= $lang['index']['modal-entry-person-5'] ?></b> : 30.000 F.
                                                    </li>
                                                    <hr />
                                                    <li><b><?= $lang['index']['modal-entry-person-6'] ?></b> : 50.000 F
                                                    </li>
                                                    <li><b><?= $lang['index']['modal-entry-person-7'] ?></b> : 75.000 F
                                                    </li>
                                                    <li><b><?= $lang['index']['modal-entry-person-8'] ?></b> : 100.000
                                                        F.</li>
                                                    <li><b><?= $lang['index']['modal-entry-person-9'] ?></b> : PM </li>
                                                </ul>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal"><?= $lang['index']['modal-close'] ?></button>
                                                <button class="btn btn-primary" data-bs-target="#cotisationModal"
                                                    data-bs-toggle="modal"
                                                    data-bs-dismiss="modal"><?= $lang['index']['modal-see-dues'] ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Adhesion End -->

                                <!-- Modal Cotisation Start -->
                                <div class="modal fade" id="cotisationModal" tabindex="-1"
                                    aria-labelledby="cotisationModal" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="cotisationModal">
                                                    <?= $lang['index']['modal-dues-title'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <table
                                                    class="table align-middle table-hover table-bordered border-primary caption-top">
                                                    <caption
                                                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: larger; font-weight: 800; color:#AB7442;">
                                                        <?= $lang['index']['member-type-1'] ?></caption>
                                                    <thead style="background-color: var(--primary); color: white;">
                                                        <tr>
                                                            <th scope="col"><?= $lang['index']['modal-dues-status'] ?>
                                                            </th>
                                                            <th scope="col"><?= $lang['index']['modal-dues-cost'] ?>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?= $lang['index']['modal-entry-person-1'] ?></td>
                                                            <td>18.000 F</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <ul class="mb-0">
                                                                    <li><?= $lang['index']['modal-entry-person-2'] ?>
                                                                    </li>
                                                                    <li><?= $lang['index']['modal-entry-person-4'] ?>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td>24.000 F</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <ul class="mb-0">
                                                                    <li><?= $lang['index']['modal-entry-person-5'] ?>
                                                                    </li>
                                                                    <li><?= $lang['index']['modal-dues-person-1'] ?>
                                                                    </li>
                                                                    <li><?= $lang['index']['modal-entry-person-3'] ?>
                                                                    </li>
                                                                    <li>C E A</li>
                                                                </ul>
                                                            </td>
                                                            <td>30.000 F</td>
                                                        </tr>
                                                        <tr>
                                                            <td><?= $lang['index']['modal-dues-person-2'] ?></td>
                                                            <td>36.000 F</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table
                                                    class="table align-middle table-hover table-bordered border-dark caption-top">
                                                    <caption
                                                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: larger; font-weight: 800; color:#353535;">
                                                        <?= $lang['index']['member-type-4'] ?></caption>
                                                    <thead style="background-color: var(--dark); color: white;">
                                                        <tr>
                                                            <th scope="col"><?= $lang['index']['modal-dues-status'] ?>
                                                            </th>
                                                            <th scope="col"><?= $lang['index']['modal-dues-cost'] ?>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?= $lang['index']['modal-dues-person-3'] ?></td>
                                                            <td>18.000 F</td>
                                                        </tr>
                                                        <tr>
                                                            <td><?= $lang['index']['modal-dues-person-4'] ?>
                                                            </td>
                                                            <td>12.000 F</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table
                                                    class="table align-middle table-hover table-bordered border-primary caption-top">
                                                    <caption
                                                        style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: larger; font-weight: 800; color:#cc6608;">
                                                        <?= $lang['index']['member-type-5'] ?></caption>
                                                    <thead style="background-color: #cc6608; color: white;">
                                                        <tr>
                                                            <th scope="col"><?= $lang['index']['modal-dues-status'] ?>
                                                            </th>
                                                            <th scope="col"><?= $lang['index']['modal-dues-cost'] ?>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?= $lang['index']['modal-dues-person-5'] ?></td>
                                                            <td><?= $lang['index']['modal-dues-person-5-cost'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?= $lang['index']['modal-dues-person-6'] ?></td>
                                                            <td><?= $lang['index']['modal-dues-person-6-cost'] ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal"><?= $lang['index']['modal-close'] ?></button>
                                                <button class="btn btn-primary" data-bs-target="#adhesionModal"
                                                    data-bs-toggle="modal"
                                                    data-bs-dismiss="modal"><?= $lang['index']['modal-see-fees'] ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Cotisation End -->

                                <div class="section-title text-start">
                                    <h5 class="display-5 mb-4"><?= $lang['index']['quality-title'] ?></h5>
                                </div>
                                <p><?= $lang['index']['quality-text'] ?>
                                <ul class="mb-0">
                                    <li><b><?= $lang['index']['member-type-1'] ?> :
                                        </b><?= $lang['index']['member-type-1-def'] ?>
                                    </li><br />
                                    <li><b><?= $lang['index']['member-type-2'] ?> :
                                        </b><?= $lang['index']['member-type-2-def'] ?>
                                    </li><br />
                                    <li><b><?= $lang['index']['member-type-3'] ?> :
                                        </b><?= $lang['index']['member-type-3-def'] ?>
                                    </li><br />
                                    <li><b><?= $lang['index']['member-type-4'] ?> :
                                        </b><?= $lang['index']['member-type-4-def'] ?>
                                    </li>
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

                    <h3 class="text-center pt-4"><?= $lang['index']['munap-stats'] ?></h3>
                    <div class="wow fadeInUp pb-2 px-2" data-wow-delay="0.5s">
                        <div class="d-flex align-items-center justify-content-evenly flex-wrap">

                            <div class="m-3 d-flex flex-column align-items-center">
                                <i class="fa fa-users fa-2x text-primary"></i>
                                <h2 id="munap-stats-1" class="text-primary m-0" data-toggle="counter-up">15</h2>
                                <p class="fw-medium mb-0"><?= $lang['index']['munap-stats-1'] ?></p>
                            </div>

                            <div class="m-3 d-flex flex-column align-items-center">
                                <i class="fa fa-users fa-2x text-primary"></i>
                                <h2 id="munap-stats-2" class="text-primary m-0" data-toggle="counter-up">7</h2>
                                <p class="fw-medium mb-0"><?= $lang['index']['munap-stats-2'] ?></p>
                            </div>

                            <div class="m-3 d-flex flex-column align-items-center">
                                <i class="fa fa-users fa-2x text-primary"></i>
                                <h2 id="munap-stats-3" class="text-primary m-0" data-toggle="counter-up">80</h2>
                                <p class="fw-medium mb-0"><?= $lang['index']['munap-stats-3'] ?></p>
                            </div>

                            <div class="m-3 d-flex flex-column align-items-center">
                                <i class="fa fa-users fa-2x text-primary"></i>
                                <h2 id="munap-stats-4" class="text-primary m-0" data-toggle="counter-up">5</h2>
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