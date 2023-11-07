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
            <div class="col-md-6 col-lg-1"></div>
            <div class="col-md-6 col-lg-5 px-4">
                <div class="card wow fadeInUp shadow mb-5 bg-body rounded">
                    <img src="img/prestations/location-bus.jpg" class="card-img-top img-fluid " alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">Mini Bus COASTER</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><?= $lang['services']['condition-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-classic-condition'] ?></li>
                                <li><?= $lang['services']['bus-condition-1'] ?></li>
                                <li><?= $lang['services']['bus-condition-2'] ?></li>
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
                        <a href="#" class="card-link"><?= $lang['services']['download'] ?></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 px-4">
                <div class="card wow fadeInUp shadow mb-5 bg-body rounded">
                    <img src="img/prestations/location-bus-vip.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bus Climatisé VIP « LE SAPHIR »</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6><?= $lang['services']['condition-title'] ?></h6>
                            <ul>
                                <li><?= $lang['services']['bus-vip-condition'] ?></li>
                                <li><?= $lang['services']['bus-condition-1'] ?></li>
                                <li><?= $lang['services']['bus-condition-2'] ?></li>
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
                        <a href="#" class="card-link"><?= $lang['services']['download'] ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-1"></div>
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