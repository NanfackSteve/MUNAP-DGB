<?php $title_page = $lang['services']['title-page']; ?>

<?php ob_start(); ?>
<div class="container my-4 px-4">
    <div class="row g-4">

        <!-- Tools 1 -->
        <div class="col-sm-12 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
            <div class="card">
                <img src="img/prestations/tools/pagnes.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['tools']['cloth'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?= $lang['services']['tools']['cost'] ?> : 10.000
                            FCFA</small></p>
                </div>
            </div>
        </div>

        <!-- Tools 2 -->
        <div class="col-sm-12 col-lg-3 wow bounceInUp" data-wow-delay="0.2s">
            <div class="card">
                <img src="img/prestations/tools/polos.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['tools']['t-shirt'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?= $lang['services']['tools']['cost'] ?> : 5.000
                            FCFA</small></p>
                </div>
            </div>
        </div>

        <!-- Tools 3 -->
        <div class="col-sm-12 col-lg-3 wow bounceInUp" data-wow-delay="0.3s">
            <div class="card">
                <img src="img/prestations/tools/cap.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['tools']['cap'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?= $lang['services']['tools']['cost'] ?> : 2.500
                            FCFA</small></p>
                </div>
            </div>
        </div>

        <!-- Tools 4 -->
        <div class="col-sm-12 col-lg-3 wow bounceInUp" data-wow-delay="0.4s">
            <div class="card">
                <img src="img/prestations/tools/umbrella.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['tools']['umbrellas'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?= $lang['services']['tools']['cost'] ?> : 4.000
                            FCFA</small></p>
                </div>
            </div>
        </div>

        <!-- Tools 5 -->
        <div class="col-sm-12 col-lg-3 wow bounceInUp" data-wow-delay="0.5s">
            <div class="card">
                <img src="img/prestations/tools/cooking.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['tools']['cooking'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?= $lang['services']['tools']['cost'] ?> : 3.000
                            FCFA</small></p>
                </div>
            </div>
        </div>

        <!-- Tools 6 -->
        <div class="col-sm-12 col-lg-3 wow bounceInUp" data-wow-delay="0.6s">
            <div class="card">
                <img src="img/prestations/tools/bag.jpg" class="card-img-top" alt="..." style="height: 14rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['tools']['bag'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?= $lang['services']['tools']['cost'] ?> : 500
                            FCFA</small></p>
                </div>
            </div>
        </div>

        <!-- Tools 7 -->
        <div class="col-sm-12 col-lg-3 wow bounceInUp" data-wow-delay="0.7s">
            <div class="card">
                <img src="img/prestations/tools/pen-keys.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['tools']['pen-keys'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?= $lang['services']['tools']['cost'] ?> : 500
                            FCFA</small></p>
                </div>
            </div>
        </div>

        <!-- Tools 8 -->
        <div class="col-sm-12 col-lg-3 wow bounceInUp" data-wow-delay="0.8s">
            <div class="card">
                <img src="img/prestations/tools/cap-cowboy.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $lang['services']['tools']['gadget'] ?></h5>
                    <p class="card-text"><small class="text-muted"><?= $lang['services']['tools']['cost'] ?> : 1.000
                            FCFA</small></p>
                </div>
            </div>
        </div>

    </div>
</div> <!-- Container End -->

<script>
    let List_header = document.getElementsByClassName('nav-link');
    for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
    document.getElementById('services').setAttribute("class", "nav-link active");
</script>

<?php $content = ob_get_clean();

require_once('src/views/layouts/main.php') ?>