<?php $title_page = $lang['services']['title-page']; ?>

<?php ob_start(); ?>

<!-- Prestations Start -->
<div class="container">
    <div class="row mt-2 g-4 ">

        <!-- Prestation Mariage Start -->
        <div class="col-md-6 col-lg-4 px-4">
            <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.3s">
                <img src=" img/prestations/allo-mariage.jpg" class="card-img-top img-fluid " alt="...">
                <div class="card-body ">
                    <h5 class="card-title"><?= $lang['services']['m-title'] ?></h5>
                    <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#mariageModal"><?= $lang['services']['view-award'] ?></a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h6><?= $lang['services']['condition-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['condition-1'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h6><?= $lang['services']['pieces-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['piece-1'] ?></li>
                            <li><?= $lang['services']['piece-2'] ?></li>
                            <li><?= $lang['services']['piece-3'] ?></li>
                            <br />
                        </ul>
                    </li>
                </ul>
                <div class="card-body">
                    <a target="_blank" download="Formulaire_Mariage" href="files/Formulaire_Mariage.pdf" class="card-link"><?= $lang['services']['download'] ?></a>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="mariageModal" tabindex="-1" aria-labelledby="mariageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mariageModalLabel"><?= $lang['services']['m-modal-title'] ?>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="allo-text"><?= $lang['services']['m-modal-body'] ?></p>
                    </div>
                    <div class="modal-footer align-items-center">
                        <a href="docu_status.php#title3-chap2-sect3" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Prestation Mariage End -->

        <!-- Prestation Naissance Start -->
        <div class="col-md-6 col-lg-4 px-4 ">
            <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.6s">
                <img src="img/prestations/allo-naissance.jpg" class="card-img-top img-fluid w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['n-title'] ?></h5>
                    <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#naissanceModal"><?= $lang['services']['view-award'] ?></a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h6><?= $lang['services']['condition-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['condition-1'] ?></li>
                            <!-- <li><?= $lang['services']['n-condition-1'] ?></li> -->
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h6><?= $lang['services']['pieces-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['piece-1'] ?></li>
                            <li><?= $lang['services']['piece-8'] ?></li>
                            <li><?= $lang['services']['piece-9'] ?></li>
                        </ul>
                    </li>
                </ul>
                <div class="card-body">
                    <a target="_blank" download="Formulaire_Naissance" href="files/Formulaire_Naissance.pdf" class="card-link"><?= $lang['services']['download'] ?></a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="naissanceModal" tabindex="-1" aria-labelledby="naissanceModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="naissanceModal"><?= $lang['services']['n-modal-title'] ?>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="allo-text"><?= $lang['services']['n-modal-body'] ?></p>
                    </div>
                    <div class="modal-footer align-items-center">
                        <a href="docu_status.php#title3-chap2-sect3" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Prestation Naissance End -->

        <!-- Prestation Decoration Start -->
        <div class="col-md-6 col-lg-4 px-4">
            <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.9s">
                <img src=" img/prestations/allo-decoration.jpg" class="card-img-top img-fluid w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['d-title'] ?></h5>
                    <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#decorationModal"><?= $lang['services']['view-award'] ?></a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h6><?= $lang['services']['condition-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['condition-1'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h6><?= $lang['services']['pieces-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['piece-1'] ?></li>
                            <li><?= $lang['services']['piece-6'] ?></li>
                            <li><?= $lang['services']['piece-7'] ?></li>
                        </ul>
                    </li>
                </ul>
                <div class="card-body">
                    <a target="_blank" download="Formulaire_Decoration.pdf" href="files/Formulaire_Decoration.pdf" class="card-link"><?= $lang['services']['download'] ?></a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="decorationModal" tabindex="-1" aria-labelledby="decorationModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="decorationModal"><?= $lang['services']['d-modal-title'] ?>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="allo-text"><?= $lang['services']['d-modal-body'] ?></p>
                    </div>
                    <div class="modal-footer align-items-center">
                        <a href="docu_status.php#title3-chap2-sect4" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Prestation Decoration End -->

        <!-- Prestation Deces Start -->
        <div class="col-md-6 col-lg-4 px-4">
            <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.3s">
                <img src="img/prestations/allo-deces.jpg" class="card-img-top img-fluid w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['D-title'] ?></h5>
                    <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#decesModal"><?= $lang['services']['view-award'] ?></a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h6><?= $lang['services']['condition-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['condition-1'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h6><?= $lang['services']['pieces-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['piece-10'] ?></li>
                            <li><?= $lang['services']['piece-11'] ?></li>
                            <li><?= $lang['services']['piece-12'] ?></li>
                        </ul>
                    </li>
                </ul>
                <div class="card-body">
                    <a target="_blank" download="Formulaire_Deces.pdf" href="files/Formulaire_Deces.pdf" class="card-link"><?= $lang['services']['download'] ?></a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="decesModal" tabindex="-1" aria-labelledby="decesModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="decesModal"><?= $lang['services']['D-modal-title'] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="allo-text"><?= $lang['services']['D-modal-body'] ?></p>
                    </div>
                    <div class="modal-footer align-items-center">
                        <a href="docu_status.php#title3-chap2-sect1" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Prestation Deces End -->

        <!-- Prestation Retraite Start -->
        <div class="col-md-6 col-lg-4 px-4">
            <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.6s">
                <img src="img/prestations/allo-retraire.jpg" class="card-img-top img-fluid w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['r-title'] ?></h5>
                    <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#retraiteModal"><?= $lang['services']['view-award'] ?></a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h6><?= $lang['services']['condition-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['r-condition-1'] ?></li><br /><br />
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h6><?= $lang['services']['pieces-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['piece-13'] ?></li><br />
                        </ul>
                    </li>
                </ul>
                <div class="card-body">
                    <a target="_blank" download="Formulaire_Retraite.pdf" href="files/Formulaire_Retraite.pdf" class="card-link"><?= $lang['services']['download'] ?></a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="retraiteModal" tabindex="-1" aria-labelledby="retraiteModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="retraiteModal"><?= $lang['services']['r-modal-title'] ?>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="allo-text"><?= $lang['services']['r-modal-body'] ?></p>
                    </div>
                    <div class="modal-footer align-items-center">
                        <a href="docu_status.php#title3-chap2-sect4" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Prestation Retraite End -->

        <!-- Prestation Sante/Hopitaux Start -->
        <div class="col-md-6 col-lg-4 px-4">
            <div class="card wow fadeInUp shadow-lg mb-5 bg-body rounded" data-wow-delay="0.9s">
                <img src=" img/prestations/allo-medicaux.jpg" class="card-img-top img-fluid w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['h-title'] ?></h5>
                    <a href="#" class="btn btn-link ps-0 py-0" data-bs-toggle="modal" data-bs-target="#santeModal"><?= $lang['services']['view-award'] ?></a>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h6><?= $lang['services']['condition-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['condition-1'] ?></li>
                        </ul>
                    </li>
                    <li class="list-group-item pe-0">
                        <h6><?= $lang['services']['pieces-title'] ?></h6>
                        <ul>
                            <li><?= $lang['services']['piece-1'] ?></li>
                            <li><?= $lang['services']['piece-4'] ?></li>
                            <li><?= $lang['services']['piece-5'] ?></li>
                        </ul>
                    </li>
                </ul>
                <div class="card-body">
                    <a class="card-link" href="files/Formulaire_Remboursement_Frais_Medicaux.pdf" target="_blank" download="Formulaire_Remboursement_Frais_Medicaux.pdf"><?= $lang['services']['download'] ?></a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="santeModal" tabindex="-1" aria-labelledby="santeModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="santeModal"><?= $lang['services']['h-modal-title'] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="allo-text"><?= $lang['services']['h-modal-body'] ?></p>
                    </div>
                    <div class="modal-footer align-items-center">
                        <a href="docu_status.php#title3-chap2-sect2" class="btn btn-link"><?= $lang['services']['read-article'] ?></a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= $lang['services']['close'] ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Prestation Sante/Hopitaux End -->
    </div>
</div>
<!-- Prestations End -->

<script>
    let List_header = document.getElementsByClassName('nav-link');
    for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
    document.getElementById('services').setAttribute("class", "nav-link active");
</script>

<?php $content = ob_get_clean();

require_once('src/views/layouts/main.php') ?>