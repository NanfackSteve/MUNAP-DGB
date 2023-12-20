<?php session_start();
include_once("language/lang.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $lang['team']['who']['title-page'] ?></title>
    <?php include_once("head.php") ?>
</head>

<body>

    <!-- Nav bar Start -->
    <?php include_once("header.php") ?>
    <!-- Nav bar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header-team py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?= $lang['team']['who']['head-title'] ?>
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
        <div class="row wow fadeInUp overflow-hidden my-3 px-2">
            <div class="about px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-5 ps-lg-0" style="min-height: 400px; background-color: #eeee;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="img/MUNAP_DGB.png" style="object-fit: cover;" alt="Logo_MUNAP-DGB">
                        </div>
                    </div>
                    <div class="bg-light col-lg-7 about-text py-2 ">
                        <div class="p-2 p-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="section-title text-start">
                                <h5 class="display-5 mb-4"><?= $lang['team']['who']['who-member'] ?></h5>
                            </div>
                            <p class="mb-0 pb-2" style="text-align: justify;">
                                <?= $lang['team']['who']['who-member-def'] ?>
                            <ul class="mb-4 py-0 fleche-puce">
                                <li><a href="#" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#adhesionModal"><?= $lang['team']['who']['entry-cost-link'] ?></a>
                                </li>
                                <li><a href="#" class="btn btn-link p-0" data-bs-toggle="modal" data-bs-target="#cotisationModal"><?= $lang['team']['who']['cotisation-link'] ?></a>
                                </li>
                            </ul>
                            </p>

                            <!-- Modal Adhesion Start -->
                            <div class="modal fade" id="adhesionModal" tabindex="-1" aria-labelledby="adhesionModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="adhesionModal">
                                                <?= $lang['team']['who']['modal-entry-title'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="allo-text">
                                            <ul>
                                                <li><b><?= $lang['team']['who']['modal-entry-person-1'] ?></b> :
                                                    10.000 F
                                                </li>
                                                <li><b><?= $lang['team']['who']['modal-entry-person-2'] ?></b> :
                                                    15.000 F
                                                </li>
                                                <hr />
                                                <li><b><?= $lang['team']['who']['modal-entry-person-3'] ?></b> :
                                                    15.000 F
                                                </li>
                                                <li><b><?= $lang['team']['who']['modal-entry-person-4'] ?></b> :
                                                    20.000 F
                                                </li>
                                                <li><b><?= $lang['team']['who']['modal-entry-person-5'] ?></b> :
                                                    30.000 F.
                                                </li>
                                                <hr />
                                                <li><b><?= $lang['team']['who']['modal-entry-person-6'] ?></b> :
                                                    50.000 F
                                                </li>
                                                <li><b><?= $lang['team']['who']['modal-entry-person-7'] ?></b> :
                                                    75.000 F
                                                </li>
                                                <li><b><?= $lang['team']['who']['modal-entry-person-8'] ?></b> :
                                                    100.000
                                                    F.</li>
                                                <li><b><?= $lang['team']['who']['modal-entry-person-9'] ?></b> : PM
                                                </li>
                                            </ul>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['team']['who']['modal-close'] ?></button>
                                            <button class="btn btn-primary" data-bs-target="#cotisationModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['team']['who']['modal-see-dues'] ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Adhesion End -->

                            <!-- Modal Cotisation Start -->
                            <div class="modal fade" id="cotisationModal" tabindex="-1" aria-labelledby="cotisationModal" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="cotisationModal">
                                                <?= $lang['team']['who']['modal-dues-title'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table align-middle table-hover table-bordered border-primary caption-top">
                                                <caption style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: larger; font-weight: 800; color:#AB7442;">
                                                    <?= $lang['team']['who']['member-type-1'] ?></caption>
                                                <thead style="background-color: var(--primary); color: white;">
                                                    <tr>
                                                        <th scope="col">
                                                            <?= $lang['team']['who']['modal-dues-status'] ?>
                                                        </th>
                                                        <th scope="col">
                                                            <?= $lang['team']['who']['modal-dues-cost'] ?>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $lang['team']['who']['modal-entry-person-1'] ?></td>
                                                        <td>18.000 F</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul class="mb-0">
                                                                <li><?= $lang['team']['who']['modal-entry-person-2'] ?>
                                                                </li>
                                                                <li><?= $lang['team']['who']['modal-entry-person-4'] ?>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>24.000 F</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <ul class="mb-0">
                                                                <li><?= $lang['team']['who']['modal-entry-person-5'] ?>
                                                                </li>
                                                                <li><?= $lang['team']['who']['modal-dues-person-1'] ?>
                                                                </li>
                                                                <li><?= $lang['team']['who']['modal-entry-person-3'] ?>
                                                                </li>
                                                                <li>C E A</li>
                                                            </ul>
                                                        </td>
                                                        <td>30.000 F</td>
                                                    </tr>
                                                    <tr>
                                                        <td><?= $lang['team']['who']['modal-dues-person-2'] ?></td>
                                                        <td>36.000 F</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table align-middle table-hover table-bordered border-dark caption-top">
                                                <caption style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: larger; font-weight: 800; color:#353535;">
                                                    <?= $lang['team']['who']['member-type-4'] ?></caption>
                                                <thead style="background-color: var(--dark); color: white;">
                                                    <tr>
                                                        <th scope="col">
                                                            <?= $lang['team']['who']['modal-dues-status'] ?>
                                                        </th>
                                                        <th scope="col">
                                                            <?= $lang['team']['who']['modal-dues-cost'] ?>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $lang['team']['who']['modal-dues-person-3'] ?></td>
                                                        <td>18.000 F</td>
                                                    </tr>
                                                    <tr>
                                                        <td><?= $lang['team']['who']['modal-dues-person-4'] ?>
                                                        </td>
                                                        <td>12.000 F</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table align-middle table-hover table-bordered border-primary caption-top">
                                                <caption style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: larger; font-weight: 800; color:#cc6608;">
                                                    <?= $lang['team']['who']['member-type-5'] ?></caption>
                                                <thead style="background-color: #cc6608; color: white;">
                                                    <tr>
                                                        <th scope="col">
                                                            <?= $lang['team']['who']['modal-dues-status'] ?>
                                                        </th>
                                                        <th scope="col">
                                                            <?= $lang['team']['who']['modal-dues-cost'] ?>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?= $lang['team']['who']['modal-dues-person-5'] ?></td>
                                                        <td><?= $lang['team']['who']['modal-dues-person-5-cost'] ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><?= $lang['team']['who']['modal-dues-person-6'] ?></td>
                                                        <td><?= $lang['team']['who']['modal-dues-person-6-cost'] ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['team']['who']['modal-close'] ?></button>
                                            <button class="btn btn-primary" data-bs-target="#adhesionModal" data-bs-toggle="modal" data-bs-dismiss="modal"><?= $lang['team']['who']['modal-see-fees'] ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Cotisation End -->

                            <div class="section-title text-start">
                                <h5 class="display-5 mb-4"><?= $lang['team']['who']['quality-title'] ?></h5>
                            </div>
                            <p><?= $lang['team']['who']['quality-text'] ?>
                            <ul class="mb-0">
                                <li><b><?= $lang['team']['who']['member-type-1'] ?> :
                                    </b><?= $lang['team']['who']['member-type-1-def'] ?>
                                </li><br />
                                <li><b><?= $lang['team']['who']['member-type-2'] ?> :
                                    </b><?= $lang['team']['who']['member-type-2-def'] ?>
                                </li><br />
                                <li><b><?= $lang['team']['who']['member-type-3'] ?> :
                                    </b><?= $lang['team']['who']['member-type-3-def'] ?>
                                </li><br />
                                <li><b><?= $lang['team']['who']['member-type-4'] ?> :
                                    </b><?= $lang['team']['who']['member-type-4-def'] ?>
                                </li>
                            </ul>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
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