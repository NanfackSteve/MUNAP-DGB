<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>MUNAP - Activités</title>
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
                                <h2 class="display-5 mb-4">Inauguration du Nouveau Bus (VIP)</h2>
                            </div>
                            <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                                amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                                erat amet.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-0 wow fadeInUp" data-wow-delay="1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100"
                                src="img/actus/activities/actus_bus_A_3.jpg" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeIn" data-wow-delay="0.6s">
            <div class="container">
                <div class="section-title text-center">
                    <h1 class="display-5 mb-5">Photos</h1>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div id="carouselExampleFade" class="carousel slide " data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/actus/activities/actus_bus_A_1.jpg" class="d-block w-100 " alt="..."
                                        style="height: 15rem;;">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/actus/activities/actus_bus_A_2.jpg" class="d-block w-100" alt="..."
                                        style="height: 15rem;">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/actus/activities/actus_bus_A_3.jpg" class="d-block w-100" alt="..."
                                        style="height: 15rem;">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/actus/activities/actus_bus_A_4.jpg" class="d-block w-100" alt="..."
                                        style="height: 15rem;">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/actus/activities/actus_bus_A_5.jpg" class="d-block w-100" alt="..."
                                        style="height: 15rem;">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/actus/activities/actus_bus_A_6.jpg" class="d-block w-100" alt="..."
                                        style="height: 15rem;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

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