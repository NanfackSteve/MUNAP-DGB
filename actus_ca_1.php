<?php session_start();
include_once("language/lang.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $lang['news']['activity']['title-page'] ?></title>
    <?php include_once("head.php") ?>
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
</head>

<body>
    <!-- Nav bar Start -->
    <?php include_once("header.php") ?>
    <!-- Nav bar End -->

    <!-- News Start  -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0 mt-3">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h2 class="display-5 mb-4"><?= $lang['news']['CA']['-1-title'] ?></h2>
                        </div>
                        <p class="text-justify mb-4 "><?= $lang['news']['CA']['-1-text'] ?></p>

                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInUp" data-wow-delay="1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <!-- <iframe src="https://www.youtube.com/embed/o8G9kXN2F9g" frameborder="1" allowfullscreen class="d-block mx-auto " height="100%" width="100%"></iframe> -->

                        <img class="position-absolute img-fluid img-fluid h-100" src="img/actus/activities/actus_meeting_B_0.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News End -->

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
                                <img src="img/actus/activities/actus_meeting_B_1.jpg" class="d-block mx-auto img-fluid " alt="..." style="height: 20rem;">
                            </div>
                            <div class="carousel-item">
                                <img src="img/actus/activities/actus_meeting_B_2.jpg" class="d-block mx-auto img-fluid" alt="..." style="height: 20rem;">
                            </div>
                            <div class="carousel-item">
                                <img src="img/actus/activities/actus_meeting_B_3.jpg" class="d-block mx-auto img-fluid" alt="..." style="height: 20rem;">
                            </div>
                            <div class="carousel-item">
                                <img src="img/actus/activities/actus_meeting_B_4.jpg" class="d-block mx-auto img-fluid" alt="..." style="height: 20rem;">
                            </div>
                            <div class="carousel-item">
                                <img src="img/actus/activities/actus_meeting_B_5.jpg" class="d-block mx-auto img-fluid" alt="..." style="height: 20rem;">
                            </div>
                            <div class="carousel-item">
                                <img src="img/actus/activities/actus_meeting_B_6.jpg" class="d-block mx-auto img-fluid " alt="..." style="height: 20rem;;">
                            </div>
                        </div>
                        <button class=" carousel-control-prev " type=" button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
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