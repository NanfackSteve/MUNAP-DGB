<?php session_start();
include_once("language/lang.php");
$years = json_decode(file_get_contents('./models/historic.json'), true); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $lang['team']['before']['title-page'] ?></title>
    <?php include_once("head.php") ?>
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
                            <?= $lang['team']['before']['creation-title'] ?></legend>
                        <p class="p-2" style="text-align: justify;"><?= $lang['team']['before']['creation-body'] ?>
                        </p>
                    </fieldset>
                </div>
                <!-- Historiq End -->
            </div>
        </div>

        <!-- Table Assemblee Gen. Start -->
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
        <!-- Table Assemblee Gen. End -->

        <div class="row">
            <!-- C.A. Col Start -->
            <div class="col-md-6 col-lg-4 mb-5 wow fadeIn" data-wow-delay="0.3s">
                <h4 class="title-history"><?= $lang['team']['organes']['head-link-1'] ?></h4>
                <?php foreach ($years as $year => $val) {

                    if ($years[$year]['ca']['nbr'] != 0) {
                        echo '<button class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#ca-' . $year . '">' . $year . '</button>';

                        // <!-- Modal CA Start -->
                        echo '<div class="modal fade" id="ca-' . $year . '" tabindex="-1" aria-labelledby="ca-' . $year . '" aria-hidden="true">';
                        echo '  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">';
                        echo '    <div class="modal-content">';
                        echo '      <div class="modal-header">';
                        echo '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                        echo '      </div>';
                        echo '      <div class="modal-body">';
                        echo '        <table class="table align-middle table-hover table-bordered border-primary ">';
                        echo '          <thead style="background-color: var(--primary); color: white;">';
                        echo '            <tr>';
                        echo '              <th scope="col">' . $lang['team']['before']['table-col-2'] . '</th>';
                        echo '              <th scope="col">' . $lang['team']['before']['table-col-3'] . '</th>';
                        echo '            </tr>';
                        echo '          </thead>';
                        echo '          <tbody>';
                        foreach ($years[$year]['ca'] as $key => $datas) {
                            if ($key != "nbr") {
                                echo '    <tr>';
                                echo '      <td>' . $years[$year]['ca'][$key]['name'] . '</td>';
                                echo '      <td>' . $lang['team']['organes'][$years[$year]['ca'][$key]['post']] . '</td>';
                                echo '    </tr>';
                            }
                        }
                        echo '          </tbody>';
                        echo '        </table>';
                        echo '      </div>';
                        echo '    </div>';
                        echo '   </div>';
                        echo ' </div> ';
                    }
                }
                ?>
                <!-- Modal CA End -->
            </div>
            <!-- C.A Col End -->

            <!-- B.E Col Start -->
            <div class="col-md-6 col-lg-4 mb-5 wow fadeIn" data-wow-delay="0.3s">
                <h2 class="title-history"><?= $lang['team']['organes']['head-link-2'] ?></h2>

                <?php foreach ($years as $year => $val) {

                    if ($years[$year]['be']['nbr'] != 0) {
                        echo '<button class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#be-' . $year . '">' . $year . '</button>';

                        // <!-- Modal CA Start -->
                        echo '<div class="modal fade" id="be-' . $year . '" tabindex="-1" aria-labelledby="be-' . $year . '" aria-hidden="true">';
                        echo '  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">';
                        echo '    <div class="modal-content">';
                        echo '      <div class="modal-header">';
                        echo '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                        echo '      </div>';
                        echo '      <div class="modal-body">';
                        echo '        <table class="table align-middle table-hover table-bordered border-primary ">';
                        echo '          <thead style="background-color: var(--primary); color: white;">';
                        echo '            <tr>';
                        echo '              <th scope="col">' . $lang['team']['before']['table-col-2'] . '</th>';
                        echo '              <th scope="col">' . $lang['team']['before']['table-col-3'] . '</th>';
                        echo '            </tr>';
                        echo '          </thead>';
                        echo '          <tbody>';
                        foreach ($years[$year]['be'] as $key => $datas) {
                            if ($key != "nbr") {
                                echo '    <tr>';
                                echo '      <td>' . $years[$year]['be'][$key]['name'] . '</td>';
                                echo '      <td>' . $lang['team']['organes'][$years[$year]['be'][$key]['post']] . '</td>';
                                echo '    </tr>';
                            }
                        }
                        echo '          </tbody>';
                        echo '        </table>';
                        echo '      </div>';
                        echo '    </div>';
                        echo '   </div>';
                        echo ' </div> ';
                    }
                }
                ?>
            </div>
            <!-- B.E Col End -->

            <!-- C.F Col Start -->
            <div class="col-md-6 col-lg-4 mb-5 wow fadeIn" data-wow-delay="0.3s">
                <h2 class="title-history"><?= $lang['team']['organes']['head-link-3'] ?></h2>

                <?php foreach ($years as $year => $val) {

                    if ($years[$year]['cf']['nbr'] != 0) {
                        echo '<button class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#cf-' . $year . '">' . $year . '</button>';

                        // <!-- Modal CA Start -->
                        echo '<div class="modal fade" id="cf-' . $year . '" tabindex="-1" aria-labelledby="cf-' . $year . '" aria-hidden="true">';
                        echo '  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">';
                        echo '    <div class="modal-content">';
                        echo '      <div class="modal-header">';
                        echo '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                        echo '      </div>';
                        echo '      <div class="modal-body">';
                        echo '        <table class="table align-middle table-hover table-bordered border-primary ">';
                        echo '          <thead style="background-color: var(--primary); color: white;">';
                        echo '            <tr>';
                        echo '              <th scope="col">' . $lang['team']['before']['table-col-2'] . '</th>';
                        echo '              <th scope="col">' . $lang['team']['before']['table-col-3'] . '</th>';
                        echo '            </tr>';
                        echo '          </thead>';
                        echo '          <tbody>';
                        foreach ($years[$year]['cf'] as $key => $datas) {
                            if ($key != "nbr") {
                                echo '    <tr>';
                                echo '      <td>' . $years[$year]['cf'][$key]['name'] . '</td>';
                                echo '      <td>' . $lang['team']['organes'][$years[$year]['cf'][$key]['post']] . '</td>';
                                echo '    </tr>';
                            }
                        }
                        echo '          </tbody>';
                        echo '        </table>';
                        echo '      </div>';
                        echo '    </div>';
                        echo '   </div>';
                        echo ' </div> ';
                    }
                }
                ?>
            </div>
            <!-- C.F Col End -->
        </div>
    </div>


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