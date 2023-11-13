<?php session_start();

// Choisis la langue
if (isset($_SESSION['lang']) && $_SESSION['lang'] === 'fr') {
    $lang = json_decode(file_get_contents('./language/fr.json'), true);
} else if (isset($_SESSION['lang']) && $_SESSION['lang'] === 'en') {
    $lang = json_decode(file_get_contents('./language/en.json'), true);
} else {
    $lang = json_decode(file_get_contents('./language/fr.json'), true);
} ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= $lang['services']['title-page'] ?></title>
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
</head>

<body class="bg-light">

    <!-- Nav bar Start -->
    <?php include_once("header.php") ?>
    <!-- Nav bar End -->

    <!-- Prestations Start -->
    <div class="container">
        <div class="row mt-2 g-4 ">

            <!-- Prestation Mariage Start -->
            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.3s">
                    <img src=" img/prestations/allo-mariage.jpg" class="card-img-top img-fluid " alt="...">
                    <div class="card-body ">
                        <h5 class="card-title"><?= $lang['services']['m-title'] ?></h5>
                        <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#mariageModal"><?= $lang['services']['view-award'] ?></a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><?= $lang['services']['condition-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['condition-1'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6><?= $lang['services']['pieces-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['piece-1'] ?></li>
                                <li><?= $lang['services']['piece-2'] ?></li>
                                <li><?= $lang['services']['piece-3'] ?></li><br />
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link"><?= $lang['services']['download'] ?></a>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="mariageModal" tabindex="-1" aria-labelledby="mariageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mariageModalLabel"><?= $lang['services']['m-modal-title'] ?>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="allo-text"><?= $lang['services']['m-modal-body'] ?></p>
                        </div>
                        <div class="modal-footer align-items-center">
                            <a href="status.php#title3-chap2-sect3" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prestation Mariage End -->

            <!-- Prestation Sante/Hopitaux Start -->
            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.5s">
                    <img src=" img/prestations/allo-medicaux.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lang['services']['h-title'] ?></h5>
                        <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#santeModal"><?= $lang['services']['view-award'] ?></a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><?= $lang['services']['condition-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['condition-1'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item pe-0">
                            <h6><?= $lang['services']['pieces-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['piece-1'] ?></li>
                                <li><?= $lang['services']['piece-4'] ?></li>
                                <li><?= $lang['services']['piece-5'] ?></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a class="card-link" href="files/Formulaire_Frais_Remboursement.pdf" target="_blank" download="Formulaire_Frais_Remboursement.pdf"><?= $lang['services']['download'] ?></a>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="santeModal" tabindex="-1" aria-labelledby="santeModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="santeModal"><?= $lang['services']['h-modal-title'] ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="allo-text"><?= $lang['services']['h-modal-body'] ?></p>
                        </div>
                        <div class="modal-footer align-items-center">
                            <a href="status.php#title3-chap2-sect2" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prestation Sante/Hopitaux End -->

            <!-- Prestation Decoration Start -->
            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.7s">
                    <img src=" img/prestations/allo-decoration.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lang['services']['d-title'] ?></h5>
                        <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#decorationModal"><?= $lang['services']['view-award'] ?></a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><?= $lang['services']['condition-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['condition-1'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6><?= $lang['services']['pieces-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['piece-1'] ?></li>
                                <li><?= $lang['services']['piece-6'] ?></li>
                                <li><?= $lang['services']['piece-7'] ?></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link"><?= $lang['services']['download'] ?></a>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="decorationModal" tabindex="-1" aria-labelledby="decorationModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="decorationModal"><?= $lang['services']['d-modal-title'] ?>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="allo-text"><?= $lang['services']['d-modal-body'] ?></p>
                        </div>
                        <div class="modal-footer align-items-center">
                            <a href="status.php#title3-chap2-sect4" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prestation Decoration End -->

            <!-- Prestation Naissance Start -->
            <div class="col-md-6 col-lg-4 px-4 ">
                <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.3s">
                    <img src="img/prestations/allo-naissance.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lang['services']['n-title'] ?></h5>
                        <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#naissanceModal"><?= $lang['services']['view-award'] ?></a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><?= $lang['services']['condition-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['condition-1'] ?></li>
                                <li><?= $lang['services']['n-condition-1'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6><?= $lang['services']['pieces-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['piece-1'] ?></li>
                                <li><?= $lang['services']['piece-8'] ?></li>
                                <li><?= $lang['services']['piece-9'] ?></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link"><?= $lang['services']['download'] ?></a>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="naissanceModal" tabindex="-1" aria-labelledby="naissanceModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="naissanceModal"><?= $lang['services']['n-modal-title'] ?>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="allo-text"><?= $lang['services']['n-modal-body'] ?></p>
                        </div>
                        <div class="modal-footer align-items-center">
                            <a href="status.php#title3-chap2-sect3" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prestation Naissance End -->

            <!-- Prestation Deces Start -->
            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.5s">
                    <img src="img/prestations/allo-deces.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lang['services']['D-title'] ?></h5>
                        <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#decesModal"><?= $lang['services']['view-award'] ?></a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><?= $lang['services']['condition-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['condition-1'] ?></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6><?= $lang['services']['pieces-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['piece-10'] ?></li>
                                <li><?= $lang['services']['piece-11'] ?></li>
                                <li><?= $lang['services']['piece-12'] ?></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link"><?= $lang['services']['download'] ?></a>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="decesModal" tabindex="-1" aria-labelledby="decesModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="decesModal"><?= $lang['services']['D-modal-title'] ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="allo-text"><?= $lang['services']['D-modal-body'] ?></p>
                        </div>
                        <div class="modal-footer align-items-center">
                            <a href="status.php#title3-chap2-sect1" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prestation Deces End -->

            <!-- Prestation Retraite Start -->
            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.7s">
                    <img src="img/prestations/allo-retraire.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $lang['services']['r-title'] ?></h5>
                        <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#retraiteModal"><?= $lang['services']['view-award'] ?></a>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><?= $lang['services']['condition-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['r-condition-1'] ?></li><br /><br />
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6><?= $lang['services']['pieces-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['piece-13'] ?></li><br /><br />
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link"><?= $lang['services']['download'] ?></a>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="retraiteModal" tabindex="-1" aria-labelledby="retraiteModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="retraiteModal"><?= $lang['services']['r-modal-title'] ?>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="allo-text"><?= $lang['services']['r-modal-body'] ?></p>
                        </div>
                        <div class="modal-footer align-items-center">
                            <a href="status.php#title3-chap2-sect4" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prestation Retraite End -->
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