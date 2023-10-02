<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>MUNAP - DGB</title>
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

    <body>
        <!-- Nav bar Start -->
        <?php include_once("header.php") ?>
        <!-- Nav bar End -->

        <!-- Event Start  -->
        <div class="container-fluid bg-light overflow-hidden px-lg-0 mt-3">
            <div class="container feature px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 feature-text py-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="p-lg-5 ps-lg-0">
                            <div class="section-title text-start">
                                <h2 class="display-5 mb-4">Assemblée Générale Extraodinaire</h2>
                            </div>
                            <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                                erat amet.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="img/dgb/capture12.jpg"
                                style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5">Photos</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/dgb/capture0.jpg"
                            style="height: 300px;">
                        <div class="testimonial-text text-center p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                                Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                                justo sea clita.</p>
                            <h5 class="mb-1">Mme GOMO Flore</h5>
                            <span class="fst-italic">Directeur Executif</span>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/dgb/capture1.jpg"
                            style="height: 300px;">
                        <div class="testimonial-text text-center p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                                Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                                justo sea clita.</p>
                            <h5 class="mb-1">M. EDOU Alo'o Cyrill</h5>
                            <span class="fst-italic">Pr Assemblée Général</span>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/dgb/capture2.jpg"
                            style="height: 300px;">
                        <div class="testimonial-text text-center p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                                Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                                justo sea clita.</p>
                            <h5 class="mb-1">M. BEKOLO Francois Xavier</h5>
                            <span class="fst-italic">Pr Commission Financière</span>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid bg-light p-2 mx-auto mb-3" src="img/dgb/capture3.jpg"
                            style="height: 300px;">
                        <div class="testimonial-text text-center p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                                Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                                justo sea clita.</p>
                            <h5 class="mb-1">Mme MENGUELE Judith</h5>
                            <span class="fst-italic">Secrétaire Général</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <?php include_once("footer.php") ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
                class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>