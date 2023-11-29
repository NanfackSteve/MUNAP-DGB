<?php session_start();
include_once("language/lang.php"); ?>

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

        <div class="container px-lg-5 mt-4">
            <div class="row">
                <div class="col-12">
                    <!-- Historiq Start -->
                    <div id="creation" class="row px-2 mb-4 wow fadeIn decalage-haut" data-wow-delay="0.3s">
                        <fieldset class="bg-light  p-0 border-bottom border-3">
                            <legend class="p-2" style="background-color: var(--primary); color: white;">
                                <?= $lang['index']['creation-title'] ?></legend>
                            <p class="p-2" style="text-align: justify;"><?= $lang['index']['creation-body'] ?></p>
                        </fieldset>
                    </div>
                    <!-- Historiq End -->
                </div>
            </div>

            <!-- Table One Start -->
            <div class="row">
                <div class="col col-lg-12 mb-4 wow fadeInUp" data-wow-delay="0.3s">

                    <table class="table align-middle table-hover table-bordered border-primary caption-top ">
                        <caption class="title-history" style="color:#AB7442;">
                            <?= $lang['team']['before']['table-title-1'] ?></caption>
                        <thead style="background-color: var(--primary); color: white;">
                            <tr>
                                <th scope="col"><?= $lang['team']['before']['table-col-1'] ?></th>
                                <th scope="col"><?= $lang['team']['before']['table-col-2'] ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2007 - 2009</td>
                                <td>M. Pierre TITTI </td>
                            </tr>
                            <tr>
                                <td>2010 - 2016</td>
                                <td>M. EDOA Gilbert Didier</td>
                            </tr>
                            <tr class="table-active">
                                <td>2017 - </td>
                                <td>M. EDOU ALO'O Cyril</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- Table One End -->

            <!-- Table Two Start -->
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="title-history">Conseil d'Adminstration</h4>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ca-2007">2007 -
                        2008</button>
                    <button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#ca-2009">2009</button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ca-2023">2023</button>

                    <!-- Modal CA 2007 - 2008 Start -->
                    <div class="modal fade" id="ca-2007" tabindex="-1" aria-labelledby="ca-2007" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table align-middle table-hover table-bordered border-primary ">

                                        <thead style="background-color: var(--primary); color: white;">
                                            <tr>
                                                <th scope="col"><?= $lang['team']['before']['table-col-2'] ?></th>
                                                <th scope="col"><?= $lang['team']['before']['table-col-3'] ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mme TSAFACK Berthe</td>
                                                <td>PCA</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal CA 2009 Start -->
                    <div class="modal fade" id="ca-2009" tabindex="-1" aria-labelledby="ca-2009" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="ca-2009">
                                        <?= $lang['index']['modal-dues-title'] ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table align-middle table-hover table-bordered border-primary ">

                                        <thead style="background-color: var(--primary); color: white;">
                                            <tr>
                                                <th scope="col"><?= $lang['team']['before']['table-col-2'] ?></th>
                                                <th scope="col"><?= $lang['team']['before']['table-col-3'] ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mme Mme TSAFACK Berthe</td>
                                                <td>PCA</td>
                                            </tr>
                                            <tr>
                                                <td>MEKONTCHOU Samuel</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>ABENA Hubert</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>M. AKAME Charles</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Mme GOUADJIO Colette</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>NGALEU</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>HAMAN TIZI</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>NTSAMA Jean Marie</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>AZEFAC Olivier</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>ETOBE Joséphine</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>MAMA OLOA Aloys</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>DJOKNA DAMSALA</td>
                                                <td></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table Two End -->

                <!-- Table Three Start -->
                <div class="col-md-6 col-lg-4 mb-5 wow fadeIn" data-wow-delay="0.3s">
                    <h2 class="title-history">Bureau Executif</h2>
                    <button class="btn btn-primary">2021</button>
                    <button class="btn btn-primary">2022</button>
                    <button class="btn btn-primary">2023</button>
                </div>
                <!-- Table Three End -->

                <!-- Table Four Start -->
                <div class="col-md-6 col-lg-4 mb-5 wow fadeIn" data-wow-delay="0.3s">
                    <h4>Commission Financiere</h4>
                    <button class="btn btn-primary">2021</button>
                    <button class="btn btn-primary">2022</button>
                    <button class="btn btn-primary">2023</button>
                </div>
                <!-- Table Four End -->
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