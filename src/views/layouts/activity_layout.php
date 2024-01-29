<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $title_page ?></title>
    <meta charset="utf-8">
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
    <link href="/Bootstrap_5/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/Bootstrap_5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/Bootstrap_5/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Nav bar Start -->
    <?php include_once("src/views/layouts/header.php") ?>
    <!-- Nav bar End -->

    <!-- Activity Content Start -->
    <div class="container bg-light overflow-hidden mt-3 px-lg-4 ">
        <div class="col-md-6 col-lg-12 mt-3 ">
            <h3 class="text-center"><?= $activity->title ?></h3>
            <br />

            <img src="<?= $activity->imgSrc ?>/1.jpg" class="m-lg-2 float-lg-end mx-auto img-fluid" alt="<?= $activity->title ?>" style="height: 20rem;">
            <p style="text-align: justify;" class="m-2 wow fadeIn" data-wow-delay="0.3s">
                <?= $activity->text ?></p>
        </div>
    </div>

    <!-- Get Pictures -->
    <?php $jpgFiles = glob($activity->imgSrc . '/*.jpg') ?>;


    <div class="container mb-5">
        <div class="section-title text-center">
            <h1 class="display-5 mb-5"><?= $lang['news']['medias'] ?></h1>
        </div>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div id="carouselExampleFade" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= $activity->imgSrc ?>/3.jpg" class="d-block mx-auto img-fluid  " alt="..." style="height: 20rem;">
                        </div>

                        <?php foreach ($jpgFiles as $jpgFile) : ?>
                            <div class="carousel-item ">
                                <img src="<?= $jpgFile ?>" class="d-block mx-auto img-fluid  " alt="..." style="height: 20rem;">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
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
    <!-- Activity Content End -->

    <!-- Footer Start -->
    <?php include_once("src/views/layouts/footer.php") ?>
    <!-- Footer End -->

    <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('actus').setAttribute("class", "nav-link active");
    </script>
</body>

</html>