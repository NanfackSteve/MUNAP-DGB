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
                <?= $lang['header']['head-mission'] ?><br /><?= $lang['header']['body-mission'] ?>
            </p>
        </div>
    </div>
    <!-- Mission End -->

    <!-- Footer Start -->
    <?php include_once("footer.php") ?>
    <!-- Footer End -->

    <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('members').setAttribute("class", "nav-link active");
    </script>
</body>

</html>