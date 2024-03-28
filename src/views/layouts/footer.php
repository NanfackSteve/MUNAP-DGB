<div class="container-fluid bg-dark text-light footer mt-3 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">

            <!-- Addresses Start -->
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4"><?= $lang['footer']['section-1'] ?></h4>
                <a href="https://maps.app.goo.gl/2UdGjfbBMmzEZmMf9" class="text-white">
                    <p class="mb-2 text-white"><i class="fa fa-map-marker-alt me-3"></i><?= $lang['footer']['location'] ?><a class="rounded-pill btn btn-outline-light btn-sm ms-2" href="https://maps.app.goo.gl/2UdGjfbBMmzEZmMf9" style="width: 80px;"><?= $lang['footer']['location-btn'] ?></a></p>

                </a>
                <a href="tel:+237699955507" class="text-white">
                    <p class="mb-2 text-white"><i class="fa fa-phone-alt me-3"></i><?= $lang['footer']['tel'] ?><a class="rounded-pill btn btn-outline-light btn-sm ms-3" href="tel:+237699955507" style="width: 80px;"><?= $lang['footer']['tel-btn'] ?></a>
                    </p>
                </a>
                <a href=" mailto:munapdgb@yahoo.fr" class="text-white">
                    <p class="mb-2 "><i class="fa fa-envelope me-2"></i><?= $lang['footer']['email'] ?><a class="rounded-pill btn btn-outline-light btn-sm ms-3" href="mailto:munapdgb@yahoo.fr" style="width: 80px;"><?= $lang['footer']['email-btn'] ?></a>
                    </p>
                </a>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@IT-Support-DGB"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <!-- Addresses End -->

            <!-- Useful Links End -->
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4"><?= $lang['footer']['section-2'] ?></h4>
                <a class="btn btn-link" href="index.php?menu=munap&sub=historic"><?= $lang['footer']['section-2-link-1'] ?></a>
                <a class="btn btn-link" href="index.php?menu=munap&sub=organes"><?= $lang['footer']['section-2-link-2'] ?></a>
                <a class="btn btn-link" href="index.php?menu=services&sub=benefits"><?= $lang['footer']['section-2-link-3'] ?></a>
                <a class="btn btn-link" href="index.php?menu=activities&sub=CA"><?= $lang['footer']['section-2-link-4'] ?></a>
                <a class="btn btn-link" href="index.php?menu=activities&sub=others"><?= $lang['footer']['section-2-link-5'] ?></a>
            </div>
            <!-- Useful Links End -->

            <!-- Download Documents Start -->
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4"><?= $lang['footer']['section-3'] ?></h4>
                <a class="btn btn-link" target="_blank" href="files/Mutuelle_Statuts.pdf" download="Mutuelle_Status.pdf"><?= $lang['footer']['section-3-link-1'] ?></a>
                <a class="btn btn-link" target="_blank" href="files/Mutuelle_Reglement_interieur.pdf" download="Mutuelle_Reglement_interieur.pdf"><?= $lang['footer']['section-3-link-2'] ?></a>
            </div>
            <!-- Download Documents End -->
        </div>
    </div>

    <!-- CopyRights Start -->
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">Copyright
                    &copy; 2023 <a class="border-bottom" href="index.php">MUNAP - DGB</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <?= $lang['footer']['conception'] ?>
                    <a class="border-bottom" href="#"><?= $lang['footer']['taf-team'] ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- CopyRights End -->
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<?php if (isset($_GET['sub']) && $_GET['sub'] !== 'bus' || !isset($_GET['menu'])) : ?>
    <script src="Bootstrap_5/js/jquery-1.11.2.min.js"></script>
<?php elseif ($_GET['menu'] === 'profile') : ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Import Js Libs -->
<script src="Bootstrap_5/lib/wow/wow.min.js"></script>
<script src="Bootstrap_5/lib/easing/easing.min.js"></script>
<script src="Bootstrap_5/lib/waypoints/waypoints.min.js"></script>
<script src="Bootstrap_5/lib/counterup/counterup.min.js"></script>
<script src="Bootstrap_5/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="Bootstrap_5/lib/isotope/isotope.pkgd.min.js"></script>
<script src="Bootstrap_5/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="Bootstrap_5/js/main.js"></script>