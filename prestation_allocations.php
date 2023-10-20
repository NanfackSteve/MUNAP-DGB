<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MUNAP - Prestations</title>
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
            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInUp shadow-lg   mb-5 bg-body rounded">
                    <img src="img/prestations/allo-mariage.jpg" class="card-img-top img-fluid " alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">Mariage</h5>
                        <p class="card-text">Some quick text to build the card title </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6>Conditions à remplir :</h6>
                            <ul>
                                <li>Etre à jour de ses cotisations</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6>Pièces à fournir :</h6>
                            <ul>
                                <li>Demande non timbrée</li>
                                <li>Photocopie acte de mariage</li>
                                <li>Une photo avec Mr le Maire </li><br />
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Téléchargez le formulaire</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInUp shadow-lg   mb-5 bg-body rounded">
                    <img src="img/prestations/allo-medicaux.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Frais Médicaux</h5>
                        <p class="card-text">Some quick text to build the card title </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6>Conditions à remplir :</h6>
                            <ul>
                                <li>Etre à jour de ses cotisations</li>
                            </ul>
                        </li>
                        <li class="list-group-item pe-0">
                            <h6>Pièces à fournir :</h6>
                            <ul>
                                <li>Demande non timbrée</li>
                                <li>Ordonnances médicales</li>
                                <li>Reçus et factures <br />(pharmacie ou l’hôpital/clinique)</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Téléchargez le formulaire</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInUp shadow-lg   mb-5 bg-body rounded">
                    <img src="img/prestations/allo-decoration.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Décoration</h5>
                        <p class="card-text">Some quick text to build the card title </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6>Conditions à remplir :</h6>
                            <ul>
                                <li>Etre à jour de ses cotisations</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6>Pièces à fournir :</h6>
                            <ul>
                                <li>Demande non timbrée</li>
                                <li>Acte de décoration</li>
                                <li>Communiqué fixant la date de décoration</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Téléchargez le formulaire</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4 ">
                <div class="card wow fadeInUp shadow-lg   mb-5 bg-body rounded">
                    <img src="img/prestations/allo-naissance.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Naissance</h5>
                        <p class="card-text">Some quick text to build the card title </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6>Conditions à remplir :</h6>
                            <ul>
                                <li>Etre à jour de ses cotisations</li>
                                <li>Pour les hommes, être marié avec la maman du nouveau né</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6>Pièces à fournir :</h6>
                            <ul>
                                <li>Demande non timbrée</li>
                                <li>Photocopie acte de naissance</li>
                                <li>Photocopie du carnet de consultation prénatale</li>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Téléchargez le formulaire</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInUp shadow-lg   mb-5 bg-body rounded">
                    <img src="img/prestations/allo-deces.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Décès </h5>
                        <p class="card-text">Some quick text to build the card title </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6>Conditions à remplir :</h6>
                            <ul>
                                <li>Etre à jour de ses cotisations</li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6>Pièces à fournir :</h6>
                            <ul>
                                <li>Programme des obsèques (Mutualiste)</li>
                                <li>Reçus de cotisation (parents,enfants, conjoint)</li>
                                <li>Certificat de genre de mort ou Acte de décès (parents,enfants, conjoint)
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Téléchargez le formulaire</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 px-4">
                <div class="card wow fadeInUp shadow-lg   mb-5 bg-body rounded">
                    <img src="img/prestations/allo-retraire.jpg" class="card-img-top img-fluid w-100" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Retraite</h5>
                        <p class="card-text">Some quick text to build the card title </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6>Conditions à remplir :</h6>
                            <ul>
                                <li>Avoir payé ses cotisations les trois dernières années</li><br /><br />
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <h6>Pièces à fournir :</h6>
                            <ul>
                                <li>Notification de retraite</li><br /><br />
                            </ul>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Téléchargez le formulaire</a>
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