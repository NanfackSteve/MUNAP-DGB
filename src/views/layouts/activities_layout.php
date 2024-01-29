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
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="/Bootstrap_5/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
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

        <!-- Page Header Start -->
        <div class="container-fluid page-header-news py-5 ">
            <div class="container py-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">
                    <?= $head_title ?>
                </h1>
            </div>
        </div>
        <!-- Page Header End -->



        <!-- Activities Start -->
        <div class="container-xxl py-5">
            <div class="container">

                <!-- Filter Start -->
                <?php if ($subMenu === "others") : ?>
                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="mx-2 active" data-filter="*"><?= $lang['news']['others']['filter-all'] ?></li>
                            <li class="mx-2" data-filter=".donations"><?= $lang['news']['others']['filter-1'] ?></li>
                            <li class="mx-2" data-filter=".sports"><?= $lang['news']['others']['filter-2'] ?></li>
                            <li class="mx-2" data-filter=".bus"><?= $lang['news']['others']['filter-3'] ?></li>
                            <li class="mx-2" data-filter=".retirements"><?= $lang['news']['others']['filter-4'] ?></li>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
                <!-- Filter Start -->

                <div class="row g-4 portfolio-container">

                    <!-- For Other case Start -->
                    <?php if ($subMenu === "others") : ?>
                    <?php foreach ($list_activies as $category => $activity_type) : ?>
                    <?php foreach ($activity_type as $activity) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item <?= $category ?> wow fadeIn" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100"
                                    src="img/activities/<?= $subMenu ?>/<?= $category ?>/<?= $activity['date'] ?>/1.jpg"
                                    alt="" style="height: 250px;">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="img/activities/<?= $subMenu ?>/<?= $category ?>/<?= $activity['date'] ?>/1.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="index.php?menu=activities&sub=<?= $subMenu ?>&type=<?= $category ?>&date=<?= $activity['date'] ?>"><i
                                            class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">
                                    <?= $activity['place'] ?>
                                </p>
                                <h5 class="lh-base mb-0"><?= $activity['title'] ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endforeach; ?>
                    <!-- For Other case End -->

                    <!-- For AG/CA/Meeting/ cases Start -->
                    <?php else : ?>
                    <?php foreach ($list_activies as $activity) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeIn" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100"
                                    src="img/activities/<?= $subMenu ?>/<?= $activity['date'] ?>/1.jpg" alt=""
                                    style="height: 250px;">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="img/activities/<?= $subMenu ?>/<?= $activity['date'] ?>/1.jpg"
                                        data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1"
                                        href="index.php?menu=activities&sub=<?= $subMenu ?>&date=<?= $activity['date'] ?>"><i
                                            class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2">
                                    <?= $activity['place'] ?>
                                </p>
                                <h5 class="lh-base mb-0"><?= $activity['title'] ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- For AG/CA/Meeting/ cases End -->
                </div>
            </div>
        </div>
        <!-- Activities End -->

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