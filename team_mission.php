<?php session_start();
include_once("language/lang.php"); ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title><?= $lang['team']['organes']['title-page'] ?></title>
        <?php include_once("head.php") ?>
    </head>

    <body>

        <!-- Nav bar Start -->
        <?php include_once("header.php") ?>
        <!-- Nav bar End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header-team py-4 ">
            <div class="container py-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">
                    <?= $lang['header']['team-mission'] ?>
                </h1>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Mission  Start -->
        <div class="wrapper-mission p-3">
            <div class="container mission border border-2 border-primary mt-4 ">
                <p style="text-align: justify;" class="p-2 wow fadeIn" data-wow-delay="0.2s">
                    <?= $lang['team']['mission']['head'] ?></p>
                <ul class="wow fadeInUp star-list" data-wow-delay="0.2s"
                    style="list-style-type: none; padding-left: 6px;">
                    <li><?= $lang['team']['mission']['m-1'] ?></li>
                    <li><?= $lang['team']['mission']['m-2'] ?>
                        <ul>
                            <li><?= $lang['team']['mission']['sm2-1'] ?></li>
                            <li><?= $lang['team']['mission']['sm2-2'] ?></li>
                            <li><?= $lang['team']['mission']['sm2-3'] ?></li>
                        </ul>
                    </li>
                    <li><?= $lang['team']['mission']['m-3'] ?></li>
                    <li><?= $lang['team']['mission']['m-4'] ?></li>
                </ul>
            </div>
        </div>
        <!-- Mission End -->

        <!-- Footer Start -->
        <?php include_once("footer.php") ?>
        <!-- Footer End -->

        <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('munap').setAttribute("class", "nav-link active");
        </script>
    </body>

</html>