<?php session_start();
include_once("language/lang.php"); ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title><?= $lang['team']['organes']['title-page'] ?></title>
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

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Nav bar Start -->
        <?php include_once("header.php") ?>
        <!-- Nav bar End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header-team py-4 mb-2">
            <div class="container py-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">
                    <?= $lang['header']['team-mission'] ?>
                </h1>
                
            </div>
        </div>
        <!-- Page Header End -->
 <!-- Speech DE Start -->
 <div class="col-md-6 col-lg-12 mt-4 wow fadeIn" data-wow-delay="0.3s">
                <h3 class="text-center mb-3"><?= $lang['header']['team-mission'] ?></h3>

                <div class="border border-3 border-primary bo pt-lg-2">
                    
                    <p style="text-align: justify; height: 10px;" class="m-2 wow fadeInUp" data-wow-delay="0.2s">
                        <?= $lang['header']['head-mission'] ?>
                    </p>
                    <br /><br /><br />
                </div>
                <br /><br />
                <div class="border border-3 border-primary bo pt-lg-2">
                    
                    <p style="text-align: justify;" class="m-2 wow fadeInUp" data-wow-delay="0.2s">
                        <?= $lang['header']['body-mission'] ?>
                    </p>
                    <br /><br /><br />
                </div>
            </div>
            <!-- Speech DE End -->
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