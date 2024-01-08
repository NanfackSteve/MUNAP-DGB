<?php
session_start();
include_once("./language/lang.php");
include_once("./models/profile.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $lang['Profile']['title-1'] ?></title>
    <?php include_once("head.php") ?>
</head>

<body>

    <!-- Nav bar Start -->
    <?php include_once("header.php") ?>
    <!-- Nav bar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header-profile h-3 mb-3">
        <div class="container py-2">
            <h1 class="display-3 text-white mb-2 mt-3 animated slideInDown"><?= $lang['Profile']['title-2'] ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a class="text-white underline-hover" href="index.php"><?= $lang['Profile']['link-home'] ?></a>
                    </li>
                    <li class="breadcrumb-item"><a class="text-white underline-hover" data-bs-toggle="modal" data-bs-target="#pwdModal" href="#"><?= $lang['Profile']['link-pwd'] ?></a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Modal Change Passeord -->
    <div class="modal fade" id="pwdModal" tabindex="-1" aria-labelledby="pwdModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4><?= $lang['Profile']['link-pwd'] ?></h4>
                </div>
                <div id="modal-body" class="modal-body py-3">
                    <div class="form-floating mb-3">
                        <input type="password" id="old-pass" name="old-pass" class="form-control" placeholder="">
                        <label for="old-pass"><?= $lang['Profile']['pwd-input-0'] ?></label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" id="new-pass-1" name="new-pass-1" class="form-control" placeholder="">
                        <label for="floatingPass-1"><?= $lang['Profile']['pwd-input-1'] ?></label>
                    </div>

                    <div class="form-floating">
                        <input type="password" id="new-pass-2" name="new-pass-2" class="form-control" placeholder="">
                        <label for="floatingPass-2"><?= $lang['Profile']['pwd-input-2'] ?></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['Profile']['cancel'] ?></button>
                    <button id="btn-pwd" class="btn btn-primary" onclick="changePwd('<?= $_SESSION['token'] ?>')"><?= $lang['Profile']['btn-pwd'] ?></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Infos Member Start -->
    <div class="container-fluid bg-white mt-3">
        <div class="container">
            <div class="row justify-content-center">

                <!-- INFOS PERSO -->
                <div class="col-lg-8 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card shadow">
                        <div class="card-header text-center">
                            <h5><?= $lang['Profile']['infos']['header'] ?></h5>
                        </div>
                        <div class="card-body pt-1 pb-0">
                            <div class="row card-text pb-0">
                                <ul class="col" style="list-style-type: none; padding-left: 0.7rem; ">
                                    <li><span class="me-2"><b><?= $lang['Profile']['infos']['num-adhesion'] ?></b></span><span class="mx-1"> :
                                        </span><span><?= $num_adhesion ?></span></li>
                                    <li><span style="margin-right: 30px;"><b><?= $lang['Profile']['infos']['name'] ?></b></span><span class="mx-2"> :
                                        </span><span><?= $nom ?></span></li>
                                    <li><span class="me-2"><b><?= $lang['Profile']['infos']['surnames'] ?></b></span><span class="mx-2"> :
                                        </span><span><?= $prenom ?></span>
                                    </li>
                                    <li><span class="me-1"><b><?= $lang['Profile']['infos']['admin'] ?></b></span><span class="mx-1"> :
                                        </span><span><?= $structure ?></span></li>
                                    <li><span class="me-1"><b><?= $lang['Profile']['infos']['function'] ?></b></span><span><span class="mx-2"> :
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
            </div>

            <div class="row">

                <!-- INFOS COTISATION -->
                <div class="col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card shadow">
                        <div class="card-header text-center">
                            <h5><?= $lang['Profile']['cost']['header'] ?></h5>
                        </div>
                        <div class="card-body pt-1 pb-0">
                            <div class="row card-text my-4 pb-0">
                                <ul class="col mt-2 mb-2" style="list-style-type: none; padding-left: 0.5rem; ">
                                    <li id="parent" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['cost']['fees_parent'] ?>
                                        <span id="parent-cost-number" class="badge rounded-pill bg-primary ms-3">
                                            <?php $etat = '-';
                                            if ($nbr_parent != 0) {
                                                $etat = ($nbr_parent_a_jour == $nbr_parent) ? $lang['Profile']['cost']['yes'] : $lang['Profile']['cost']['no'];
                                            }
                                            echo $etat; ?>
                                        </span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#parentCostModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                    <li id="conjoint" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['cost']['fees_spouse'] ?>
                                        <span id="conjoint-cost-number" class="badge rounded-pill bg-primary">
                                            <?php
                                            $etat = '-';
                                            if ($nbr_conjoint != 0) {
                                                $etat = ($nbr_conjoint_a_jour == $nbr_conjoint) ? $lang['Profile']['cost']['yes'] : $lang['Profile']['cost']['no'];
                                            }
                                            echo $etat; ?>
                                        </span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#conjointCostModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                    <li id="child" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['cost']['fees_child'] ?>
                                        <span id="child-cost-number" class="badge rounded-pill bg-primary ms-3">
                                            <?php
                                            $etat = '-';
                                            if ($nbr_enfant != 0) {
                                                $etat = ($nbr_enfant_a_jour == $nbr_enfant) ? $lang['Profile']['cost']['yes'] : $lang['Profile']['cost']['no'];
                                            }
                                            echo $etat; ?>
                                        </span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#childCostModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                    <li id="member" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['cost']['fees_member'] ?>
                                        <span id="member-cost-number" class="badge rounded-pill bg-primary ms-3">
                                            <?php
                                            $etat = '-';
                                            if (isset($cotisation['montantacotisermembre'])) {
                                                $etat = ($cotisation['montantacotisermembre'] == $cotisation['montantversemembre']) ? $lang['Profile']['cost']['yes'] : $lang['Profile']['cost']['no'];
                                            }
                                            echo $etat; ?>
                                        </span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#memberCostModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer text-center text-muted">
                            <?= $lang['Profile']['cost']['footer'] ?><span class="text-dark"><?= $cotisation_reste ?> FCFA</span>
                        </div>
                    </div>
                </div>
                <!-- Modal Cotisation Parent  Start -->
                <div class="modal fade" id="parentCostModal" tabindex="-1" aria-labelledby="parentCostModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <?= $lang['Profile']['modal-cost']['title-parent'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <p class="text-center allo-text ">
                                    <?php
                                    if (!isset($nbr_parent) || $nbr_parent == 0) {
                                        echo $lang['Profile']['modal-cost']['no-cost'];
                                    } else {

                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-cost']['fees'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-cost']['fees-recv'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        echo '    <tr>';
                                        echo '      <td>' . $cotisation['montantacotiserparent'] . '</td>';
                                        echo '      <td>' . $cotisation['montantverseparent'] . '</td>';
                                        echo '    </tr>';
                                        echo '</tbody>';
                                        echo '</table>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['Profile']['close'] ?></button>
                                <button class="btn btn-primary" data-bs-target="#conjointCostModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-cost']['see-1'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Cotisation Conjoint Start -->
                <div class="modal fade" id="conjointCostModal" tabindex="-1" aria-labelledby="conjointCostModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?= $lang['Profile']['modal-cost']['title-spouse'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center allo-text">
                                    <?php
                                    if (!isset($nbr_conjoint) || $nbr_conjoint == 0) {
                                        echo $lang['Profile']['modal-cost']['no-cost'];
                                    } else {
                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-cost']['fees'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-cost']['fees-recv'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        echo '    <tr>';
                                        echo '      <td>' . $cotisation['montantacotiserconjoint'] . '</td>';
                                        echo '      <td>' . $cotisation['montantverseconjoint'] . '</td>';
                                        echo '    </tr>';
                                        echo '</tbody>';
                                        echo '</table>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['Profile']['close'] ?></button>
                                <button class="btn btn-primary" data-bs-target="#childCostModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-cost']['see-2'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Cotisation Child Start -->
                <div class="modal fade" id="childCostModal" tabindex="-1" aria-labelledby="childCostModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?= $lang['Profile']['modal-cost']['title-child'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="pChild" class="text-center allo-text">
                                    <?php
                                    if (!isset($nbr_enfant) || $nbr_enfant == 0) {
                                        echo $lang['Profile']['modal-cost']['no-cost'];
                                    } else {

                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-cost']['fees'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-cost']['fees-recv'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        echo '    <tr>';
                                        echo '      <td>' . $cotisation['montantacotiserenfant'] . '</td>';
                                        echo '      <td>' . $cotisation['montantverseenfant'] . '</td>';
                                        echo '    </tr>';
                                        echo '</tbody>';
                                        echo '</table>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['Profile']['close'] ?></button>
                                <button class="btn btn-primary" data-bs-target="#memberCostModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-cost']['see-3'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Cotisation Member Start -->
                <div class="modal fade" id="memberCostModal" tabindex="-1" aria-labelledby="memberCostModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"><?= $lang['Profile']['modal-cost']['title-me'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center allo-text">
                                    <?php
                                    echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                    echo '<thead style="background-color: var(--primary); color: white;">';
                                    echo '<tr>';
                                    echo '<th scope="col">' . $lang['Profile']['modal-cost']['fees'] . '</th>';
                                    echo '<th scope="col">' . $lang['Profile']['modal-cost']['fees-recv'] . '</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody>';
                                    echo '    <tr>';
                                    echo '      <td>' . $montant_a_cotiser_membre . '</td>';
                                    echo '      <td>' . $montant_verser_membre . '</td>';
                                    echo '    </tr>';
                                    echo '</tbody>';
                                    echo '</table>';
                                    ?>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['Profile']['close'] ?></button>
                                <button class="btn btn-primary" data-bs-target="#parentCostModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-cost']['see-4'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INFOS AFFILIATION -->
                <div class="col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="card shadow">
                        <div class="card-header text-center">
                            <h5><?= $lang['Profile']['affiliated']['header'] ?></h5>
                        </div>
                        <div class="card-body pt-1 pb-0">
                            <div class="row my-5 card-text pb-0">
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
                                    <?= $lang['Profile']['modal-affiliate']['parent-header'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <p id="pParent" class="text-center allo-text ">
                                    <?php
                                    if (empty($list_parents)) {
                                        echo $lang['Profile']['modal-affiliate']['no-parent'];
                                    } else {

                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-affiliate']['names'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-affiliate']['fees'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-cost']['fees-recv'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($list_parents as $parent) {
                                            echo '    <tr>';
                                            echo '      <td>' . $parent['nom_complet'] . '</td>';
                                            echo '      <td>' . $parent['montantacotiserparent'] . '</td>';
                                            echo '      <td>' . $parent['montantverseparent'] . '</td>';
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
                                <button class="btn btn-primary" data-bs-target="#conjointModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-affiliate']['see-1'] ?></button>
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
                                    <?= $lang['Profile']['modal-affiliate']['spouse-header'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="pConjoint" class="text-center allo-text">
                                    <?php
                                    if (empty($list_conjoints)) {
                                        echo $lang['Profile']['modal-affiliate']['no-spouse'];
                                    } else {
                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-affiliate']['names'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-affiliate']['fees'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-cost']['fees-recv'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($list_conjoints as $spouse) {
                                            echo '    <tr>';
                                            echo '      <td>' . $spouse['nom_complet'] . '</td>';
                                            echo '      <td>' . $spouse['montantacotiserconjoint'] . '</td>';
                                            echo '      <td>' . $spouse['montantverseconjoint'] . '</td>';
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
                                <button class="btn btn-primary" data-bs-target="#childModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-affiliate']['see-2'] ?></button>
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
                                    <?= $lang['Profile']['modal-affiliate']['child-header'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="pChild" class="text-center allo-text">
                                    <?php
                                    if (empty($list_enfants)) {
                                        echo $lang['Profile']['modal-affiliate']['no-child'];
                                    } else {

                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-affiliate']['names'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-affiliate']['fees'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-cost']['fees-recv'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($list_enfants as $enfant) {
                                            echo '    <tr>';
                                            echo '      <td>' . $enfant['nom_complet'] . '</td>';
                                            echo '      <td>' . $enfant['montantacotiserenfant'] . '</td>';
                                            echo '      <td>' . $enfant['montantverseenfant'] . '</td>';
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
                                <button class="btn btn-primary" data-bs-target="#parentModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-affiliate']['see-3'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INFOS ALLOCATION -->
                <div class="col-lg-4 mb-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="card shadow">
                        <div class="card-header text-center">
                            <h5><?= $lang['Profile']['allocation']['header'] ?></h5>
                        </div>
                        <div class="card-body pt-1 pb-0">
                            <div class="row my-0 card-text pb-0">
                                <ul class="col mt-2 mb-2" style="list-style-type: none; padding-left: 0.5rem; ">
                                    <li id="birth" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['allocation']['birth'] ?>
                                        <span id="alloc-birth" class="badge rounded-pill bg-primary ms-4"><?= $nbr_allocation_naissance ?></span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#birthModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                    <li id="wedding" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['allocation']['wedding'] ?>
                                        <span id="alloc-wedding" class="badge rounded-pill bg-primary"><?= $nbr_allocation_mariage ?></span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#weddingModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                    <li id="hospital" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['allocation']['hospital'] ?>
                                        <span id="alloc-hospital" class="badge rounded-pill bg-primary "><?= $nbr_allocation_medicaux ?></span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#hospitalModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                    <li id="medal" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['allocation']['medal'] ?>
                                        <span id="alloc-medal" class="badge rounded-pill bg-primary ms-4"><?= $nbr_allocation_decoration ?></span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#medalModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                    <li id="retirement" class="list-group-item d-flex justify-content-between align-items-center map">
                                        <?= $lang['Profile']['allocation']['retirement'] ?>
                                        <span id="alloc-retirement" class="badge rounded-pill bg-primary ms-4"><?= $nbr_allocation_retraite ?></span>
                                        <a href="#" class="btn btn-primary btn-sm bo" data-bs-toggle="modal" data-bs-target="#retirementModal"><i class="fa fa-eye me-1"></i><?= $lang['Profile']['see-more'] ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer text-center text-muted">
                            Total : <span id="total-allocation" class="text-dark">0</span><span class="text-dark">
                                <?= $lang['Profile']['allocation']['footer'] ?></span>
                        </div>
                    </div>
                </div>

                <!-- Modal Birth Allocation Start -->
                <div class="modal fade" id="birthModal" tabindex="-1" aria-labelledby="birthModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="birthModal">
                                    <?= $lang['Profile']['modal-allocation']['birth-header'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="" class="text-center allo-text">
                                    <?php
                                    if (empty($list_allocation_naissance)) {
                                        echo $lang['Profile']['modal-allocation']['no'];
                                    } else {

                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['names'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['fees'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['fees-recv'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($list_allocation_naissance as $naissance) {
                                            echo '    <tr>';
                                            echo '      <td>' . $naissance['nom_beneficiaire'] . '</td>';
                                            echo '      <td>' . $naissance['montant_a_verser_au_beneficiaire'] . '</td>';
                                            echo '      <td>' . $naissance['montant_verse'] . '</td>';
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
                                <button class="btn btn-primary" data-bs-target="#weddingModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-allocation']['see-2'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Wedding Allocation Start -->
                <div class="modal fade" id="weddingModal" tabindex="-1" aria-labelledby="weddingModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="weddingModal">
                                    <?= $lang['Profile']['modal-allocation']['wedding-header'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="" class="text-center allo-text">
                                    <?php
                                    if (empty($list_allocation_mariage)) {
                                        echo $lang['Profile']['modal-allocation']['no'];
                                    } else {

                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['names'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['fees'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['fees-recv'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($list_allocation_mariage as $mariage) {
                                            echo '    <tr>';
                                            echo '      <td>' . $mariage['nom_beneficiaire'] . '</td>';
                                            echo '      <td>' . $mariage['montant_a_verser_au_beneficiaire'] . '</td>';
                                            echo '      <td>' . $mariage['montant_verse'] . '</td>';
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
                                <button class="btn btn-primary" data-bs-target="#hospitalModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-allocation']['see-4'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Hospital Allocation Start -->
                <div class="modal fade" id="hospitalModal" tabindex="-1" aria-labelledby="hospitalModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="hospitalModal">
                                    <?= $lang['Profile']['modal-allocation']['hospital-header'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="" class="text-center allo-text">
                                    <?php
                                    if (empty($list_allocation_medicaux)) {
                                        echo $lang['Profile']['modal-allocation']['no'];
                                    } else {

                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['names'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['fees'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['fees-recv'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($list_allocation_medicaux as $medicaux) {
                                            echo '    <tr>';
                                            echo '      <td>' . $medicaux['nom_beneficiaire'] . '</td>';
                                            echo '      <td>' . $medicaux['montant_a_verser_au_beneficiaire'] . '</td>';
                                            echo '      <td>' . $medicaux['montant_verse'] . '</td>';
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
                                <button class="btn btn-primary" data-bs-target="#medalModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-allocation']['see-3'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Decoration Allocation Start -->
                <div class="modal fade" id="medalModal" tabindex="-1" aria-labelledby="medalModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="medalModal">
                                    <?= $lang['Profile']['modal-allocation']['medal-header'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="" class="text-center allo-text">
                                    <?php
                                    if (empty($list_allocation_decoration)) {
                                        echo $lang['Profile']['modal-allocation']['no'];
                                    } else {

                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['names'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['fees'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['fees-recv'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($list_allocation_decoration as $decoration) {
                                            echo '    <tr>';
                                            echo '      <td>' . $decoration['nom_beneficiaire'] . '</td>';
                                            echo '      <td>' . $decoration['montant_a_verser_au_beneficiaire'] . '</td>';
                                            echo '      <td>' . $decoration['montant_verse'] . '</td>';
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
                                <button class="btn btn-primary" data-bs-target="#retirementModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-allocation']['see-5'] ?></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Retirement Allocation Start -->
                <div class="modal fade" id="retirementModal" tabindex="-1" aria-labelledby="retirementModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="retirementModal">
                                    <?= $lang['Profile']['modal-allocation']['retirement-header'] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p id="" class="text-center allo-text">
                                    <?php
                                    if (empty($list_allocation_retraite)) {
                                        echo $lang['Profile']['modal-allocation']['no'];
                                    } else {

                                        echo '<table class="table align-middle table-hover table-bordered border-primary caption-top ">';
                                        echo '<thead style="background-color: var(--primary); color: white;">';
                                        echo '<tr>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['names'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['fees'] . '</th>';
                                        echo '<th scope="col">' . $lang['Profile']['modal-allocation']['fees-recv'] . '</th>';
                                        echo '</tr>';
                                        echo '</thead>';
                                        echo '<tbody>';
                                        foreach ($list_allocation_retraite as $retraite) {
                                            echo '    <tr>';
                                            echo '      <td>' . $retraite['nom_beneficiaire'] . '</td>';
                                            echo '      <td>' . $retraite['montant_a_verser_au_beneficiaire'] . '</td>';
                                            echo '      <td>' . $retraite['montant_verse'] . '</td>';
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
                                <button class="btn btn-primary" data-bs-target="#birthModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['Profile']['modal-allocation']['see-1'] ?></button>
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

    <script src="js/profile.js">
    </script>

</body>

</html>