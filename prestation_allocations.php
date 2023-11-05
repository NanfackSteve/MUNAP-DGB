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
                            <h5 class="card-title">Mariage</h5>
                            <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal"
                                data-bs-target="#mariageModal">Voir le montant versé</a>
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

                <!-- Modal -->
                <div class="modal fade" id="mariageModal" tabindex="-1" aria-labelledby="mariageModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mariageModalLabel">Frais Allocation Mariage</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="allo-text"> A l’occasion du mariage d’un membre à jour de ses cotisations, la
                                    Mutuelle lui verse une
                                    allocation fixée à <b>100.000 F</b></p>
                            </div>
                            <div class="modal-footer align-items-center">
                                <a href="status.php#title3-chap2-sect3" class="btn btn-link">Lire l'article</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
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
                            <h5 class="card-title">Frais Médicaux</h5>
                            <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal"
                                data-bs-target="#santeModal">Voir le montant versé</a>
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
                            <a class="card-link" href="files/Formulaire_Frais_Remboursement.pdf" target="_blank"
                                download="Formulaire_Frais_Remboursement.pdf">Téléchargez le formulaire</a>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="santeModal" tabindex="-1" aria-labelledby="santeModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="santeModal">Frais Allocation Santé</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="allo-text">
                                    Les frais de séjour d’un adhérent ou d’un membre de sa famille au sens de la
                                    législation sur les
                                    prestations familiales, dans une formation sanitaire agrée par le Conseil
                                    d’administrations,
                                    sont rembourses de la manière suivante :
                                <ul><b>Frais d’hospitalisation</b> :
                                    <li>Hopitaux publics : 40 %</li>
                                    <li>Hôpitaux privés : 20 %</li>
                                    <li>Consultation : 50 %</li>
                                </ul>
                                <ul><b>Soins dentaires</b> :
                                    <li>Hôpitaux publics : 25 %</li>
                                    <li>Hôpitaux privés : 15 %</li>
                                </ul>
                                <ul><b>Analyse médicale</b> :
                                    <li>Laboratoire publics : 30 %</li>
                                    <li>Laboratoire privés : 20 %</li>
                                </ul>
                                Les enfants ont le tiers payant et le conjoint les deux tiers.

                                </p>
                            </div>
                            <div class="modal-footer align-items-center">
                                <a href="status.php#title3-chap2-sect2" class="btn btn-link">Lire l'article</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
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
                            <h5 class="card-title">Décoration</h5>
                            <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal"
                                data-bs-target="#decorationModal">Voir le montant versé</a>
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
                <!-- Modal -->
                <div class="modal fade" id="decorationModal" tabindex="-1" aria-labelledby="decorationModal"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="decorationModal">Frais Allocation Décoration</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="allo-text">A l’occasion de la décoration d’un membre en règle, la Mutuelle lui
                                    verse une allocation fixée à <b>50 000 F</b> quelque soit le nombre de médailles
                                    reçus.</p>
                            </div>
                            <div class="modal-footer align-items-center">
                                <a href="status.php#title3-chap2-sect4" class="btn btn-link">Lire l'article</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
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
                            <h5 class="card-title">Naissance</h5>
                            <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal"
                                data-bs-target="#naissanceModal">Voir le montant versé</a>
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
                <!-- Modal -->
                <div class="modal fade" id="naissanceModal" tabindex="-1" aria-labelledby="naissanceModal"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="naissanceModal">Frais Allocation Naissance/Accouchement</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="allo-text">A la naissance d'un enfant dans le foyer d'un membre à jour de ses
                                    cotisations, la Mutuelle célèbre l'évènement par l'octroi au membre d'une allocation
                                    fixée à <b>50 000 F</b>.
                                    Le traitement est unique si le membre et son conjoint sont membre de la MUNAP-DGB.
                                </p>
                            </div>
                            <div class="modal-footer align-items-center">
                                <a href="status.php#title3-chap2-sect3" class="btn btn-link">Lire l'article</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
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
                            <h5 class="card-title">Décès </h5>
                            <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal"
                                data-bs-target="#decesModal">Voir le montant versé</a>
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
                <!-- Modal -->
                <div class="modal fade" id="decesModal" tabindex="-1" aria-labelledby="decesModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="decesModal">Frais Allocation Décès</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="allo-text">
                                    A l’occasion du décès d’un membre, de son conjoint, d’un parent, d’un enfant au
                                    sens de la
                                    législation sur les prestations familiales, la mutuelle verse des allocations
                                    fixées de la
                                    matière suivante :
                                <ul>
                                    <li><b>Membre</b> : 300.000 F + 1 couronne de 50.000 F</li>
                                    <li><b>Conjoint</b> : 200.000 F</li>
                                    <li><b>Parents</b> : 100.000 F</li>
                                    <li><b>Enfant</b> : 50.000 F.</li>
                                </ul>
                                </p>
                            </div>
                            <div class="modal-footer align-items-center">
                                <a href="status.php#title3-chap2-sect1" class="btn btn-link">Lire l'article</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
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
                            <h5 class="card-title">Retraite</h5>
                            <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal"
                                data-bs-target="#retraiteModal">Voir le montant versé</a>
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
                <!-- Modal -->
                <div class="modal fade" id="retraiteModal" tabindex="-1" aria-labelledby="retraiteModal"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="retraiteModal">Frais Allocation Retraite</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="allo-text">Lorsqu’un membre est admis à faire valoir ses droits à la retraite,
                                    la Mutuelle lui verse une allocation fixée à <b>100.000 F</b> s’il a régulièrement
                                    verse ses cotisations au cours des <b>trois (3) dernières années</b>.
                                </p>
                            </div>
                            <div class="modal-footer align-items-center">
                                <a href="status.php#title3-chap2-sect4" class="btn btn-link">Lire l'article</a>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
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