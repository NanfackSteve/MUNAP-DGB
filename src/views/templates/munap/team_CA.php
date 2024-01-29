<?php $title_page = $lang['team']['organes']['title-page']; ?>

<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header-team-ca py-4 mb-2">
    <div class="container py-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">
            <?= $lang['team']['organes']['head-link-1'] ?>
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white underline-hover" href="index.php?menu=munap&sub=team_BE"><?= $lang['team']['organes']['head-link-2'] ?></a>
                </li>
                <li class="breadcrumb-item"><a class="text-white underline-hover" href="index.php?menu=munap&sub=team_CF"><?= $lang['team']['organes']['head-link-3'] ?></a></li>
                <li class="breadcrumb-item"><a class="text-white underline-hover" href="index.php?menu=munap&sub=team_DR"><?= $lang['team']['organes']['head-link-4'] ?></a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Team CA Start -->
<div class="container-xxl">
    <div class="container">
        <div class="row g-2">

            <!-- Conseil d'administration -->
            <span id="ca" class="decalage-haut"></span>
            <div class="row g-2">

                <div class="col-lg-8 bg-light my-4">
                    <p class="px-4 pt-4" style="text-align: justify;"><?= $lang['team']['organes']['word-ca'] ?>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 my-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item ">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/organes/CA_President.jpg" alt="" style="width: 100%;">
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                            <h5 class="mb-1">Mme MENGUELE Judith</h5>
                            <small><b><?= $lang['team']['organes']['ca-president'] ?></b></small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Others 1 -->
            <div class="row mt-1 g-3">
                <span class="col-lg-1 mx-auto"></span>
                <div class="col-lg-3 col-md-6 mb-3 mx-auto wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/organes/CA_RepContrRegFin.jpg" alt="" style="width: 100%;">
                        </div>
                        <div class="text-center border border-5 border-light border-top-0 pt-4 pb-1 px-2">
                            <h5 class="mb-0">M. OYONO Thierry A.</h5>
                            <small><?= $lang['team']['organes']['ca-controler-1'] ?></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 mx-auto wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/organes/CA_RepSousDir.jpg" alt="" style="width: 100%;">

                        </div>
                        <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                            <h5 class="mb-1">M. NSOM Hugues</h5>
                            <small><?= $lang['team']['organes']['ca-controler-2'] ?></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 mx-auto wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/organes/CA_RepCFC-CFS.jpg" alt="" style="width: 100%;">

                        </div>
                        <div class="text-center border border-5 border-light border-top-0 pt-4 pb-1 px-2">
                            <h5 class="mb-0">M. NDONG MVE Eric</h5>
                            <small><?= $lang['team']['organes']['ca-controler-4'] ?></small>
                        </div>
                    </div>
                </div>
                <span class="col-lg-1 mx-auto"></span>
            </div>

            <!-- Others 2 -->
            <div class="row mt-1 g-3">
                <span class="col-lg-1 mx-auto"></span>
                <div class="col-lg-3 col-md-6 mb-3 mx-auto wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/organes/CA_RepContrDepFin.jpg" alt="" style="width: 100%;">

                        </div>
                        <div class="text-center border border-5 border-light border-top-0 pt-4 pb-1 px-2">
                            <h5 class="mb-0">M. BITETE Roger</h5>
                            <small><?= $lang['team']['organes']['ca-controler-6'] ?></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 mx-auto wow fadeIn" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/organes/CA_RepChefServices.jpg" alt="" style="width: 100%;">

                        </div>
                        <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                            <h5 class="mb-1">M. MAYO Dieudonné</h5>
                            <small><?= $lang['team']['organes']['ca-controler-7'] ?><br /></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 mx-auto wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/organes/CA_RepChefBureau.jpg" alt="" style="width: 100%;">

                        </div>
                        <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                            <h5 class="mb-0">M. NYANGON Patient</h5>
                            <small><?= $lang['team']['organes']['ca-controler-8'] ?></small>
                        </div>
                    </div>
                </div>
                <span class="col-lg-1 mx-auto"></span>
            </div>

            <!-- Others 3 -->
            <div class="row mt-1 g-3">
                <span class="col-lg-1 mx-auto"></span>
                <div class="col-lg-3 col-md-6 mb-3 mx-auto wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/organes/CA_RepCadres.jpg" alt="" style="width: 100%;">

                        </div>
                        <div class="text-center border border-5 border-light border-top-0 py-4 px-2">
                            <h5 class="mb-0">Mme NTSAMA Sylvie</h5>
                            <small><?= $lang['team']['organes']['ca-controler-9'] ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-3 mx-auto wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/organes/CA_RepAgent.jpg" alt="" style="width: 100%;">

                        </div>
                        <div class="text-center border border-5 border-light border-top-0 p-4">
                            <h5 class="mb-0">M. JEUTSA David</h5>
                            <small><?= $lang['team']['organes']['ca-controler-10'] ?></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 mx-auto wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="img/organes/CA_RepRetraite.jpg" alt="" style="width: 100%;">

                        </div>
                        <div class="text-center border border-5 border-light border-top-0 pt-4 pb-4 px-2">
                            <h5 class="mb-1 p-0">Mme NTSAMA Isabelle</h5>
                            <small><?= $lang['team']['organes']['ca-controler-11'] ?></small>
                        </div>
                    </div>
                </div>
                <span class="col-lg-1 mx-auto"></span>
            </div>

        </div>

    </div>
</div>
<!-- Team CA End -->

<script>
    let List_header = document.getElementsByClassName('nav-link');
    for (let i = 0; i < List_header.length; i++) List_header[i].setAttribute("class", "nav-link");
    document.getElementById('munap').setAttribute("class", "nav-link active");
</script>

<?php $content = ob_get_clean();

require_once('src/views/layouts/main.php') ?>