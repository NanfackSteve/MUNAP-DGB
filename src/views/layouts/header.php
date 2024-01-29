<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only"><?= $lang['header']['spin']; ?></span>
    </div>
</div>
<!-- Spinner End -->

<!-- Nav Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top p-0 ">

    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-3">
        <div style="margin-right: 18px;"><img src="/img/logo-munap.jpg" width="80" height="55" alt="Logo-DGB" />
        </div>
        <h5 class="m-0 text-primary slogan"> <?= $lang['header']['slogan']; ?></h5>
    </a>
    <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-4 p-lg-0">

            <!-- Home Start -->
            <li class="nav-item">
                <a id="home" href="index.php" class="nav-link"
                    style="margin: 0 13px 0 0 ;"><?= $lang['header']['home']; ?></a>
            </li>
            <!-- Home End -->

            <!-- MUNAP Start -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="munap" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="margin: 0 13px 0 0 ;"><?= $lang['header']['team']; ?><i
                        class="ms-2 fas fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="munap">
                    <li><a class="dropdown-item"
                            href="index.php?menu=munap&sub=word_of_DE"><?= $lang['header']['team-wordDE']; ?></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=munap&sub=missions"><?= $lang['header']['team-mission']; ?></a>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=munap&sub=organes"><?= $lang['header']['team-organes']; ?></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=munap&sub=is_member"><?= $lang['header']['team-member']; ?></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=munap&sub=historic"><?= $lang['header']['team-before']; ?></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=munap&sub=stats"><?= $lang['header']['team-stats']; ?></a></li>
                </ul>
            </li>
            <!-- MUNAP End -->

            <!-- Services Start -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="services" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="margin: 0 13px 0 0 ;">
                    <?= $lang['header']['services']; ?><i class="ms-2 fas fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="services">
                    <li><a class="dropdown-item"
                            href="index.php?menu=services&sub=benefits"><?= $lang['header']['services-allocation']; ?></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=services&sub=bus"><?= $lang['header']['services-bus']; ?></a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=services&sub=tools"><?= $lang['header']['services-tools']; ?></a></li>
                </ul>
            </li>
            <!-- Services End -->

            <!-- Actus Start -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="actus" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="margin: 0 13px 0 0 ;">
                    <?= $lang['header']['actus']; ?><i class="ms-2 fas fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="actus">
                    <li><a class="dropdown-item"
                            href="index.php?menu=activities&sub=AG"><?= $lang['header']['actus-ag']; ?></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=activities&sub=CA"><?= $lang['header']['actus-ca']; ?></a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=activities&sub=meeting"><?= $lang['header']['actus-meeting']; ?></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=activities&sub=others"><?= $lang['header']['actus-others']; ?></a>
                    </li>
                </ul>
            </li>
            <!-- Actus End -->

            <!-- Docus Start -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="docu" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="margin: 0 13px 0 0 ;">
                    <?= $lang['header']['docu']; ?><i class="ms-2 fas fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="docu">
                    <li><a class="dropdown-item"
                            href="index.php?menu=docu&sub=statutes"><?= $lang['header']['docu-status']; ?></a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=docu&sub=rules"><?= $lang['header']['docu-rules']; ?></a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=docu&sub=speechs"><?= $lang['header']['docu-speech']; ?></a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item"
                            href="index.php?menu=docu&sub=reports"><?= $lang['header']['docu-report']; ?></a></li>
                </ul>
            </li>
            <!-- Docus End -->

            <!-- Profil Start -->
            <li class="nav-item ">
                <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                <a id="profile" href="index.php?menu=profile" class="nav-item nav-link "
                    style="margin: 0 20px 0 0;"><?= $lang['header']['profil']; ?></a>
                <?php endif; ?>
            </li>
            <!-- Profil End -->

            <!-- Language Start -->
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="langue" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="margin: 0 13px 0 0 ;">
                    <i class="fa fa-language "></i> lang<i class="ms-2 fas fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="langue">
                    <li><a class="dropdown-item" href="index.php?lang=en">English</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="index.php?lang=fr">Francais</a></li>
                </ul>
            </li>
            <!-- Language End -->

        </ul>
        <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
        <a href="index.php?menu=login"
            class="btn btn-primary py-4 px-lg-3 d-lg-block"><?= $lang['header']['logout']; ?><i
                class="fa fa-arrow-right ms-3"></i></a>
        <?php else : ?>
        <a href="index.php?menu=login"
            class="btn btn-primary py-4 px-lg-5  d-lg-block"><?= $lang['header']['login']; ?><i
                class="fa fa-arrow-right ms-3"></i></a>
        <?php endif; ?>
    </div>

</nav>
<!-- Nav End -->

<div class="bg-dark" style="margin-bottom: -1px;">
    <marquee behavior=" scroll" direction="left" width="100%" height="35px" class="bg-dark text-light"
        style="padding-top: 10px; padding-left: 20%; padding-right: 20%;">
        <b><?= $lang['header']['welcome']; ?></b>
    </marquee>
</div>