<?php
session_start();
include_once("language/lang.php");
include_once("models/profile.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= $lang['Profile']['title-1'] ?></title>
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
    <div class="container-fluid page-header-profile h-3 mb-5">
        <div class="container py-2">
            <h1 class="display-3 text-white mb-2 mt-3 animated slideInDown"><?= $lang['Profile']['title-2'] ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a class="text-white underline-hover" href="index.php"><?= $lang['Profile']['title-3'] ?></a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" href="#"><?= $lang['Profile']['title-4'] ?>
                        </a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Infos Member Start -->
    <div class="container-fluid bg-white mt-5 ">
        <div class="container ">
            <div class="row">

                <!-- INFOS PERSO -->
                <div class="col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card shadow">
                        <div class="card-header text-center">
                            <h5><?= $lang['Profile']['infos']['header'] ?></h5>
                        </div>
                        <div class="card-body pt-1 pb-0">
                            <div class="row card-text pb-0">
                                <ul class="col" style="list-style-type: none; padding-left: 0.5rem; ">
                                    <li><span class="me-2"><b><?= $lang['Profile']['infos']['num-adhesion'] ?></b></span><span class="mx-1">/
                                        </span><span><?= $num_adhesion ?></span></li>
                                    <li><span style="margin-right: 30px;"><b><?= $lang['Profile']['infos']['name'] ?></b></span><span class="mx-2">/
                                        </span><span><?= $nom ?></span></li>
                                    <li><span class="me-2"><b><?= $lang['Profile']['infos']['surnames'] ?></b></span><span class="mx-2">/
                                        </span><span><?= $prenom ?></span>
                                    </li>
                                    <li><span class="me-1"><b><?= $lang['Profile']['infos']['admin'] ?></b></span><span class="mx-1">/
                                        </span><span><?= $structure ?></span></li>
                                    <li><span class="me-1"><b><?= $lang['Profile']['infos']['function'] ?></b></span><span><span class="mx-2">/
                                            </span><?= $fonction ?></span></li>
                                    <!-- <li><span style="margin-right: 28px;"><b><?= $lang['Profile']['infos']['status'] ?></b></span><span class="mx-2">/
                                        </span><span><?= $statut ?></span> </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer text-center text-muted">
                            <?= $lang['Profile']['infos']['footer'] ?> <span class="text-dark"><?= $date_adhesion ?></span>
                        </div>
                    </div>
                </div>

                <!-- INFOS COTISATION -->
                <div class="col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card  shadow">
                        <div class="card-header text-center">
                            <h5><?= $lang['Profile']['cost']['header'] ?></h5>
                        </div>
                        <div class="card-body pt-1 pb-0">
                            <div class="row card-text pb-0">
                                <ul class="col" style="list-style-type: none; padding-left: 0.5rem; ">
                                    <li><span class="me-1"><b><?= $lang['Profile']['cost']['fees_parent'] ?></b></span><span class="mx-2">/
                                        </span><span><?= $cotisation_parent ?></span> FCFA</li>
                                    <li><span class="me-1"><b><?= $lang['Profile']['cost']['fees_spouse'] ?></b></span><span class="mx-2">/
                                        </span><span><?= $cotisation_conjoint ?></span> FCFA</li>
                                    <li><span class="me-1"><b><?= $lang['Profile']['cost']['fees_child'] ?></b></span><span class="mx-2">/
                                        </span><span><?= $cotisation_enfant ?></span> FCFA</li>
                                    <li><span class="me-1"><b><?= $lang['Profile']['cost']['fees_member'] ?></b></span><span class="mx-2">/
                                        </span><span><?= $cotisation_mutualiste ?></span> FCFA</li>
                                    <li><span class="me-1"><b><?= $lang['Profile']['cost']['fees_total'] ?></b></span><span class="mx-2">/
                                        </span><span><?= $cotisation_total ?></span> FCFA</li>
                                    <li><span class="me-1"><b><?= $lang['Profile']['cost']['amount'] ?></b></span><span class=" mx-2">/
                                        </span><span><?= $cotisation_verse ?></span> FCFA</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer text-center text-muted">
                            <?= $lang['Profile']['cost']['footer'] ?><span class="text-dark"><?= $cotisation_reste ?> FCFA</span>
                        </div>
                    </div>
                </div>

                <!-- INFOS AFFILIATION -->
                <div class="col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="card  shadow">
                        <div class="card-header text-center">
                            <h5><?= $lang['Profile']['affiliated']['header'] ?></h5>
                        </div>
                        <div class="card-body pt-1 pb-0">
                            <div class="row card-text pb-0">
                                <ul class="col mt-2 mb-2" style="list-style-type: none; padding-left: 0.5rem; ">
                                    <li id="parent" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['affiliated']['parent'] ?>
                                        <span id="parent-number" class="badge rounded-pill bg-primary ms-4"><?= $nbr_parent ?></span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#parentModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                    <li id="conjoint" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['affiliated']['spouse'] ?>
                                        <span id="conjoint-number" class="badge rounded-pill bg-primary"><?= $nbr_conjoint ?></span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#conjointModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                    <li id="child" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['affiliated']['child'] ?>
                                        <span id="child-number" class="badge rounded-pill bg-primary ms-4"><?= $nbr_enfant ?></span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#childModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer text-center text-muted">
                            Total : <span id="total" class="text-dark">0</span><span class="text-dark">
                                <?= $lang['Profile']['affiliated']['footer'] ?></span>
                        </div>
                    </div>
                </div>
                <!-- Modal Parent Start -->
                <div class="modal fade" id="parentModal" tabindex="-1" aria-labelledby="parentModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="parentModal">
                                    <?= $lang['Profile']['modal']['parent-header'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <p id="pParent" class="text-center allo-text ">
                                    <?php
                                    if (empty($list_parents)) {
                                        echo $lang['Profile']['modal']['no-parent'];
                                    } else {

                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal']['names'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal']['fees'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($list_parents as $parent) {
                                            echo '    <tr>';
                                            echo '      <td>' . $parent['nom_complet'] . '</td>';
                                            echo '      <td>' . $parent['montant_a_cotiser_parent'] . '</td>';
                                            echo '    </tr>';
                                        }
                                        echo '</tbody>';
                                        echo '</table>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['Profile']['close'] ?></button>
                                <button class="btn btn-primary" data-bs-target="#conjointModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal']['see-1'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Conjoint Start -->
                <div class="modal fade" id="conjointModal" tabindex="-1" aria-labelledby="conjointModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="conjointModal">
                                    <?= $lang['Profile']['modal']['spouse-header'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="pConjoint" class="text-center allo-text">
                                    <?php
                                    if (empty($list_conjoints)) {
                                        echo $lang['Profile']['modal']['no-spouse'];
                                    } else {
                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal']['names'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal']['fees'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($list_conjoints as $spouse) {
                                            echo '    <tr>';
                                            echo '      <td>' . $spouse['nom_complet'] . '</td>';
                                            echo '      <td>' . $spouse['montant_a_cotiser_conjoint'] . '</td>';
                                            echo '    </tr>';
                                        }
                                        echo '</tbody>';
                                        echo '</table>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['Profile']['close'] ?></button>
                                <button class="btn btn-primary" data-bs-target="#childModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal']['see-2'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Child Start -->
                <div class="modal fade" id="childModal" tabindex="-1" aria-labelledby="childModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="childModal">
                                    <?= $lang['Profile']['modal']['child-header'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="pChild" class="text-center allo-text">
                                    <?php
                                    if (empty($list_enfants)) {
                                        echo $lang['Profile']['modal']['no-child'];
                                    } else {

                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal']['names'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal']['fees'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($list_enfants as $enfant) {
                                            echo '    <tr>';
                                            echo '      <td>' . $enfant['nom_complet'] . '</td>';
                                            echo '      <td>' . $enfant['montant_a_cotiser_enfant'] . '</td>';
                                            echo '    </tr>';
                                        }
                                        echo '</tbody>';
                                        echo '</table>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['Profile']['close'] ?></button>
                                <button class="btn btn-primary" data-bs-target="#parentModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal']['see-3'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Infos Member End -->


    <!-- Footer Start -->
    <?php include_once("footer.php") ?>
    <!-- Footer End -->


    <script>
        let List_header = document.getElementsByClassName('nav-link');
        for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
        document.getElementById('profile').setAttribute("class", "nav-link active");
    </script>

    <script src="js/profile.js"></script>

</body>

</html>