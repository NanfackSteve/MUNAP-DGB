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
    <title>MUNAP - Actualités</title>
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

<body>

    <!-- Nav bar Start -->
    <?php include_once("header.php") ?>
    <!-- Nav bar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header-news py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Évèments de la Mutuelle</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Nos Évènements</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Tout</li>
                        <li class="mx-2" data-filter=".first">Mariages</li>
                        <li class="mx-2" data-filter=".second">Naissances</li>
                        <li class="mx-2" data-filter=".third">Dons</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item third wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/actus/events/actus_dons_A_2.jpg" alt="" style="height: 250px;">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/actus/events/actus_dons_A_2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href="actus_event_1.php"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Ministere des Finances</p>
                            <h5 class="lh-base mb-0">Dons aux orphelins</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/prestations/allo-naissance.jpg" alt="" style="height: 250px;">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/prestations/allo-naissance.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Hotel la Falaise : </p>
                            <h5 class="lh-base mb-0">Naissance de ...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/prestations/allo-mariage.jpg" alt="" style="height: 250px;">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="img/prestations/allo-mariage.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href="#"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">Mairie de Yde : 15 Aout 2023</p>
                            <h5 class="lh-base mb-0">Mariage de M/Mme ...</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/dgb/capture15.jpg" alt="" style="height: 250px;">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/dgb/capture15.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">Custom Carpentry</p>
                                <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    <!-- Projects End -->


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