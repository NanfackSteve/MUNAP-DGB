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
    <title><?= $lang['team']['before']['title-page'] ?></title>
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

<body class="bg-white">

    <!-- Nav bar Start -->
    <?php include_once("header.php") ?>
    <!-- Nav bar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header-team-predecessors py-2 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $lang['team']['before']['head-title'] ?>
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container mt-4">
        <div class="row">

            <div class="col mb-4 wow fadeInUp" data-wow-delay="0.3s">
                <!-- Table One Start -->
                <table class="table align-middle table-hover table-bordered border-primary caption-top ">
                    <caption style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: larger; font-weight: 800; color:#AB7442;">
                        <?= $lang['team']['before']['table-title-1'] ?></caption>
                    <thead style="background-color: var(--primary); color: white;">
                        <tr>
                            <th scope="col"><?= $lang['team']['before']['table-col-1'] ?></th>
                            <th scope="col"><?= $lang['team']['before']['table-col-2'] ?></th>
                            <th scope="col"><?= $lang['team']['before']['table-col-3'] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>xxxx</td>
                            <td>M./Mme ...</td>
                            <td><?= $lang['team']['before']['table-funct-1'] ?></td>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>M./Mme ...</td>
                            <td><?= $lang['team']['before']['table-funct-1'] ?></td>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>M./Mme ...</td>
                            <td><?= $lang['team']['before']['table-funct-1'] ?></td>
                        </tr>
                        <tr>
                            <td>2017 -</td>
                            <td>M. EDOU ALO'O Cyril</td>
                            <td><?= $lang['team']['before']['table-funct-1'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <!-- Table One End -->

            </div>

            <div class="col wow fadeInUp" data-wow-delay="0.3s">
                <!-- Table Two Start -->
                <table class="table table-hover table-bordered border-primary caption-top bo">
                    <caption style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: larger; font-weight: 800; color: #AB7442;">
                        <?= $lang['team']['before']['table-title-2'] ?></caption>
                    <thead style="background-color: var(--primary); color: white;">
                        <tr>
                            <th scope="col"><?= $lang['team']['before']['table-col-1'] ?></th>
                            <th scope="col"><?= $lang['team']['before']['table-col-2'] ?></th>
                            <th scope="col"><?= $lang['team']['before']['table-col-3'] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>xxxx</td>
                            <td>M./Mme ...</td>
                            <td><?= $lang['team']['before']['table-funct-2'] ?></td>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>Dr AKOA AKOA Samuel</td>
                            <td><?= $lang['team']['before']['table-funct-2'] ?></td>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>Mme GOMA Flore</td>
                            <td> - </td>
                        </tr>
                        <tr>
                            <td>2023 -</td>
                            <td>Mme GOMA Flore</td>
                            <td><?= $lang['team']['before']['table-funct-2'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <!-- Table Two End -->
            </div>
        </div>
    </div>


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